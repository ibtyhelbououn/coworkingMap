<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;
use App\Models\CoworkingSpace;

class ConsultationController extends Controller
{
    public function index()
    {
        $consultations = Consultation::all();

         return view('admin-consultation',compact('consultations'));
              
    }

    public function add()
    {
        return view('consultation');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email'=> 'required',
            'address' => 'required',
            'phoneNumber' => 'required',
            'place_name' => 'required',
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

        Consultation::create($input);
     
        // return redirect()->route('coworking-spaces')
        //                 ->with('success','coworking-space created successfully.');
        return redirect('/thank-you');
    }

    public function show(Consultation $consultation)
    {
        return view('show-consultation',compact('consultation'));
    }

    public function approve(Request $request,$consultation)
    {
        // $input = $request->all();

        // CoworkingSpace::create($input);

        // return redirect('/coworking-spaces');

        $request->validate([
            'place_name' => 'required',
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
        return redirect('/admin-consultation');

        $input = $request->all();
        $coworkingSpace = CoworkingSpace::find($coworkingSpace);

        $coworkingSpace->name = $input['place_name'];
        $coworkingSpace->address = $input['address'];
        $coworkingSpace->phoneNumber = $input['phoneNumber'];
        $coworkingSpace->description = $input['description'];
        $coworkingSpace->description = $input['type'];
        

        $coworkingSpace['options'] = $request->input('options');

        $coworkingSpace->save();

        return redirect('/coworking-spaces');
    }

}
