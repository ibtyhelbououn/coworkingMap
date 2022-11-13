<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CoworkingSpace;

class CoworkingSpaceController extends Controller
{
    public function index()
    {
        // $coworkingSpaces = CoworkingSpace::latest()->paginate(5);
        $coworkingSpaces = CoworkingSpace::all();

         return view('coworking-spaces',compact('coworkingSpaces'));
              
    }
    public function blog()
    {
        // $coworkingSpaces = CoworkingSpace::latest()->paginate(5);
        $coworkingSpaces = CoworkingSpace::all();

         return view('blog',compact('coworkingSpaces'));
              
    }

    public function list()
    {
        // $coworkingSpaces = CoworkingSpace::latest()->paginate(5);
        $coworkingSpaces = CoworkingSpace::all();

         return view('admin',compact('coworkingSpaces'));
              
    }

    public function add()
    {
        return view('add-coworking-space');
    }

    public function store(Request $request)
    {
        // $input = $request->all();

        // CoworkingSpace::create($input);

        // return redirect('/coworking-spaces');

        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phoneNumber' => 'required',
            'description' => 'required',
            'type' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();

        $input['options'] = $request->input('options');

  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        CoworkingSpace::create($input);
     
        // return redirect()->route('coworking-spaces')
        //                 ->with('success','coworking-space created successfully.');
        return redirect('/coworking-spaces');
    }

    public function show(CoworkingSpace $coworkingSpace)
    {
        return view('show',compact('coworkingSpace'));
    }

    public function details(CoworkingSpace $coworkingSpace)
    {
        return view('details',compact('coworkingSpace'));
    }

    public function edit(CoworkingSpace $coworkingSpace)
    {

        return view('/edit-coworking-space',compact('coworkingSpace'));
    }

    public function update(Request $request,$coworkingSpace)
    {
        // $input = $request->all();
        // $coworkingSpace = CoworkingSpace::find($coworkingSpace);

        // $coworkingSpace->name = $input['name'];
        // $coworkingSpace->address = $input['address'];
        // $coworkingSpace->phoneNumber = $input['phoneNumber'];
        // $coworkingSpace->description = $input['description'];

        // $coworkingSpace->save();

        // return redirect('/coworking-spaces');

        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phoneNumber' => 'required',
            'description' => 'required',
            'type' => 'required',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $coworkingSpace->update($input);
    
        return redirect('/coworking-spaces');
    }

    public function delete($coworkingSpace)
    {
        CoworkingSpace::find($coworkingSpace)->delete();

        return redirect()->back();
    }

    public function search()
    {
        $search_text = $_GET['query'];
        $coworkingSpaces = CoworkingSpace::where('name','LIKE','%'.$search_text.'%')->get();

        return view('search',compact('coworkingSpaces'));
    }

    public function filter(Request $request)
    {

        // $type = DB::table('coworking_spaces')->select('type')->distinct()->get()->pluck('type');

        $search_text = $_GET['type'];
        $coworkingSpaces = CoworkingSpace::where('type','LIKE','%'.$search_text.'%')->get();

        // $coworkingSpaces = CoworkingSpace::query();

        // if($request->filled('type')){
        //     $coworkingSpaces->where('type',$request->type);
        // }

        return view('filter',compact('coworkingSpaces'));
    }

   
}
