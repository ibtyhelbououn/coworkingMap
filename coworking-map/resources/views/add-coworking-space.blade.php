<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="bootstrap.min.css">
    
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit-icons.min.js"></script>
    </head>


<body>

  @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  <h1 class="uk-heading-bullet uk-text-bolder">Add Coworking Space Here!</h1>

  <div class="uk-container-small uk-align-center">
<form class="uk-form-stacked" method="post" enctype="multipart/form-data" action="{{url('/add-coworking-space')}}">

  {{ csrf_field() }}


  <div class="uk-margin">
    <label for="name" class="uk-form-label">Coworking-space name</label>
    <div class="uk-form-controls">
      <input type="text" name="name" class="uk-input" id="name" placeholder="xxx">
    </div>
  </div>
  <div class="uk-margin">
    <label class="uk-form-label" for="type">Workspace Type</label>
    <div class="uk-form-controls">
    <select name="type" class="uk-select" id="type">

      <option value="office">Office</option>
      <option value="dedicateddesk">Dedicated Desk</option>
      
    </select>
    </div>
  </div>
  <div class="uk-margin">
    <label for="address" class="uk-form-label">Adress</label>
    <div class="uk-form-controls">
      <input type="text" name="address" class="uk-input" id="address" placeholder="xxx">
    </div>
  </div>
  <div class="uk-margin">
    <label for="phoneNumber" class="uk-form-label">Phone Number</label>
    <div class="uk-form-controls">
      <input type="text" name="phoneNumber" class="uk-input" id="phoneNumber" placeholder="xxx">
    </div>
  </div>
  <div class="uk-margin">
    <label for="options" class="uk-form-label">options</label>
    <div class="uk-form-controls">
      <label><input class="uk-checkbox" type="checkbox" name="options[]" value="wifi" > Wi-Fi</label><br>
      <label><input class="uk-checkbox" type="checkbox" name="options[]" value="food" > Food Hall</label><br>
      <label><input class="uk-checkbox" type="checkbox" name="options[]" value="printers" > Printers</label><br>
      <label><input class="uk-checkbox" type="checkbox" name="options[]" value="parking" > Parking</label><br>
      <label><input class="uk-checkbox" type="checkbox" name="options[]" value="wellness" > Wellness Room</label><br>
     
    </div>
  </div>

  <div class="uk-margin">
    <label for="description" class="uk-form-label">Description</label>
    <div class="uk-form-controls">
      
      <textarea id="description" class="uk-textarea" name="description" rows="4" cols="50">
        </textarea>
    </div>
  </div>
  <div class="uk-margin">
    <label for="image" class="uk-form-label">image</label>
    <div class="uk-form-controls">
      <input type="file" name="image" class="uk-input" id="image" placeholder="xxx">
    </div>
  </div>



  <div class="uk-button-group uk-float-right">
    <a class="uk-button uk-button-default" href="coworking-spaces">cancel</a>
  &nbsp 
  <button type="submit" class="uk-button uk-button-secondary"  onclick="UIkit.notification({message: 'Coworking-space added successfully'})">add</button>
  </div>



</form>

</div>


</body>



</html>