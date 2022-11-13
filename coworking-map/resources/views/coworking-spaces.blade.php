<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/css/uikit.min.css" />
<link rel="stylesheet" href="bootstrap.min.css">

<script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit-icons.min.js"></script>
</head>
{{-- @auth  --}}
<body>
  


  

  <h1 class="uk-heading-bullet uk-text-bolder ">Coworking Spaces</h1>
  {{-- <hr class="uk-divider-icon"> --}}

  @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<div class="uk-container">
<table class="uk-table uk-table-divider uk-table-striped  ">
  <thead>
      <tr>
        <th >ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>Addresss</th>
        <th>Phone Number </th>
        <th >Description</th>
        <th>Type</th>
        <th>Options</th>
        <th >
          <ul class="uk-iconnav uk-float-right">
          <li><a href="/add-coworking-space" uk-icon="icon: plus">&#160 &#160 </a></li>
          </ul>
        </th>
      </tr>
  </thead>
  <tbody>
    @foreach($coworkingSpaces as $coworkingSpace)
  <tr>
    <td></td> 
    <td class="uk-text-muted" > {{$coworkingSpace->id}} </th>

    <td><img src="/image/{{ $coworkingSpace->image }}" width="100px"></td>
    <td>{{$coworkingSpace->name}}</td>
    <td>{{$coworkingSpace->address}}</td>
    <td>{{$coworkingSpace->phoneNumber}}</td>
    <td class="uk-text-truncate">{{$coworkingSpace->description}}</td>
    <td>{{$coworkingSpace->type}}</td>
    <td>
      @foreach($coworkingSpace->options as $value)
      {{$value}} 
      @endforeach
    </td>
    <td >
      <div>
      <div class="uk-button-group uk-float-right"> 
      <form method="get" action="{{url('/edit-coworking-space/'.$coworkingSpace->id)}}">
        <button type="submit" class="uk-button uk-button-success" >Edit</button>
      </form>
    &nbsp 
  
        <form method="post" action="{{url('/delete-coworking-space/'.$coworkingSpace->id)}}">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <button type="submit" class="uk-button uk-button-danger"  onclick="UIkit.notification({message: 'Coworking Space Deleted!'})">Delete</button>
        </form>
      <div>
      </div>
    </td>
  </tr>
      @endforeach
</tbody>
</table>
</div>









</body>
{{-- @endauth --}}

{{-- @guest

<body class="uk-background-muted">

<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m uk-position-center">
  <h3 class="uk-card-title">Access denied!</h3>
  <p>You do not have permission to access this page. <br>Please <a href="login">log in</a> and try again.</p>
</div>

</body>


@endguest --}}



</html>


