@extends('master')

@section('content')

<div class="container-fluid">

    
    <div class="col-md-6 blog">

<form action="{{url('/homes')}}" method="POST" enctype="multipart/form-data">
{{csrf_field()}}


<h3>{{Session::get('message')}}</h3>
<div class=" well"><!--location-->
    <h3>Location</h3>
  
   <div class="form-group ">
      <label for="city"> City</label>
      <select class="form-control" id="city" name="city" >
        
        
         <option>Dhaka</option>
          <option>Sylhet</option>
           <option>Chittagong</option>
            <option>Rajshahi</option>
             <option>Rangpur</option>
             <option>Barisal</option>
         </select>
       </div>
    


    <div class="form-group">
            <label for="street"> Street</label>
            <input type="text" name="street" id="street" class="form-control" placeholder="street" required>
        </div>


  </div><!--location-->

  <div class=" well">
    
    <div style="width: 470px;height: 400px;" id="mapCanvas"></div>
  <div id="infoPanel">
    <b style="display: none;">Marker status:</b>
    <div id="markerStatus"><i>Click and drag the marker.</i></div>
    <b>Current position:</b>
    <input style="display: none;" id="lat" type="text" name="lat" value="24.919392">
    <input style="display: none;" id="lng" type="text" name="lng" value="91.831695">
    <div id="info"></div>
    <b>Closest matching address:</b>
    <div id="address"></div>
  </div>
  </div>

<div class="well">

    <div class="form-group "><!--description-->
      <h3>description</h3>

      <label for="bed"> bedroom</label>
      <select class="form-control" id="bed" name="bed" required>
        
        
           <option>1</option>
           <option>2</option>
           <option>3</option>
           <option>4</option>
            
         </select>
    </div>


 <div class="form-group">
      <label for="bath"> bathroom</label>
      <select class="form-control" id="bath" name="bath" required>
        
        
           <option>1</option>
           <option>2</option>
           <option>3</option>
           
            
         </select>
    </div>


<div class=" form-group">
        <label for="area"> Square feet</label>
        <input type="text" name="area" id="area" class="form-control" placeholder="feet" required>
    </div>


    <div class="form-group">
        <label for="price"> price</label>
        <input type="number" name="price" id="price" class="form-control" placeholder="price" required>
    </div>


  <div class="form-group">
      <label for="property_type"> property_type</label>
      <select class="form-control" id="property_type" name="property_type" required>
        
      
         <option>apartment</option>
          <option>office</option>
           <option>mass</option>
          <option>House</option>
            
         </select>
    </div>
    <div class="form-group">
        <label> Add Picture </label>
        <input type="file" class="form-control" name="image">

    </div>
  
<div class="form-group">
    <label for="details">Details</label>
    <textarea class="form-control" id="details" name="details" placeholder="Deatis of home" required></textarea>
  </div>

</div>


<div class="well">

  <h3 >Contact information</h3>



 <div class="form-group">
      <label for="author">Rent_BY</label>
      <select class="form-control" id="author" name="author" required>
        
      
         <option>Owner</option>
          <option>Broker</option>
           <option>tenant</option>
            
         </select>
    </div>


<div class="form-group">
        <label for="name"> Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="user_name" required>
    </div>




<div class="form-group">
        <label for="phone"> Phone</label>
        <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone_number" required>
    </div>

    <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>


</div>
<div class="form-group">
  <button type="submit" class="btn btn-primary"  class="form-control">Submit</button>
</div>

</form>
</div>
</div>






@endsection


@section('script')

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHo6COSSVtWMnDMgO8Lg-LcfIb8Cx6MEs&callback=myMap"></script>
<script type="text/javascript">
var geocoder = new google.maps.Geocoder();

function geocodePosition(pos) {
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    if (responses && responses.length > 0) {
      updateMarkerAddress(responses[0].formatted_address);
    } else {
      updateMarkerAddress('Cannot determine address at this location.');
    }
  });
}

function updateMarkerStatus(str) {
  document.getElementById('markerStatus').innerHTML = str;
}

function updateMarkerPosition(latLng) {
  document.getElementById('info').innerHTML = [
    latLng.lat(),
    latLng.lng()
  ].join(', ');

  document.getElementById('lat').value = latLng.lat();
  document.getElementById('lng').value = latLng.lng();
}

function updateMarkerAddress(str) {
  document.getElementById('address').innerHTML = str;
}

function initialize() {
  var latLng = new google.maps.LatLng(24.919392, 91.831695);
  var map = new google.maps.Map(document.getElementById('mapCanvas'), {
    zoom: 8,
    center: latLng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  var marker = new google.maps.Marker({
    position: latLng,
    title: 'Point A',
    map: map,
    draggable: true
  });

  // Update current position info.
  updateMarkerPosition(latLng);
  geocodePosition(latLng);

  // Add dragging event listeners.
  google.maps.event.addListener(marker, 'dragstart', function() {
    updateMarkerAddress('Dragging...');
  });

  google.maps.event.addListener(marker, 'drag', function() {
    updateMarkerStatus('Dragging...');
    updateMarkerPosition(marker.getPosition());
  });

  google.maps.event.addListener(marker, 'dragend', function() {
    updateMarkerStatus('Drag ended');
    geocodePosition(marker.getPosition());
  });
}

// Onload handler to fire off the app.
google.maps.event.addDomListener(window, 'load', initialize);
</script>


@endsection
