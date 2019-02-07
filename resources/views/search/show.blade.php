@extends('master')

@section('content')
    <div class="content">

        <div class="serach-w3agile">
            <div class="container">
                <h3 class="tittle">Search properties</h3>
                <form action="/homesearch" method="POST">
                    {{csrf_field()}}
                    <div class="place-grids">
                        <div class="col-md-3 place-grid">
                            <h5>Location</h5>
                            @if(isset($city))
                            <input type="hidden" name="city" value="{{$city}}">
                            @endif
                            <select class="sel" id="location" name="street">
                                
                                @for($i=0;$i<sizeof($streets);$i++)

                                <option value="{{$streets[$i]}}">{{$streets[$i]}}</option>
                                
                                @endfor

                            </select>

                            


                        </div>

                        <div class="col-md-2 place-grid">
                            <h5>Beds</h5>
                            <select class="sel" id="bed" name="bed">
                                @if(isset($beds))
                                    @foreach($beds as $bed))
                                <option value="{{$bed->bed}}">{{$bed->bed}}</option>
                                    @endforeach
                                @endif

                            </select>
                        </div>
                        <div class="col-md-2 place-grid">
                            <h5>Rents</h5>
                            <select class="sel" id="bath" name="price">
                                <option value="0">Less than 5000</option>
                                <option value="5000">5000-10000</option>
                                <option value="10000">10000-15000</option>
                                <option value="15000">15000-20000</option>
                                <option value="20000">20000-25000</option>
                                <option value="25000">More than 25000</option>
                            </select>
                        </div>
                        <div class="col-md-3 place-grid">

                            <h5 style="margin-bottom: 7%">Sort By Your Choice</h5>
                            <input type="submit" value="Filter" style="width: 50%">
                        </div>
                        <div class="col-md-2 place-grid">

                        </div>
                </form>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>



        <div class="clearfix"></div>
<div class="container-fluid">
<div class="hw">

    @if(isset($results))
	
@foreach ($results as $result)

       <div class="panel-group" style="width: 60%;float: left">
    <div class="panel panel-primary ">

      <div class="panel-heading"><h1>Description</h1></div>
      <div class="panel-body">
      	<pre><h4>Rented_BY {{$result->author}}                              Rented as {{$result->property_type}}</h4></pre>
      	<pre><h4>Location  {{$result->city}}                               Housing Street {{$result->street}}</h4></pre>
      	<pre><h4>Rental Price {{$result->price}}                           Apartment Size {{$result->area}} Square feet</h4></pre>
      	<pre><h4>Number of bed {{$result->bed}}                             Number of bath {{$result->bath}}</h4></pre>
      	<pre> <h4>Contact number of  {{$result->author}}  {{$result->phone}} </h4></pre>
      		<pre><h4>Email of  {{$result->author}}  {{$result->email}} </h4></pre>
      </div>
     
    </div>
</div>
            <div style="width: 35%;float: right">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{asset($result->picture)}}" style="width: 250px;height: 150px">
                    </div>

                    <div class="col-md-12">
                        <a style="margin: 20px;" href="/map/{{$result->lat}}/{{$result->lng}}" class="btn btn-default">Locate on Map</a>
                    </div>
                </div>
            </div>

<div class="clearfix"></div>
    @endforeach
        @else
        @foreach ($users as $user)

            <div class="panel-group" style="width: 60%;float: left">
                <div class="panel panel-primary">

                    <div class="panel-heading"><h1>Description</h1></div>
                    <div class="panel-body">
                        <pre><h4>Rented_BY {{$user->author}}                              Rented as {{$user->property_type}}</h4></pre>
                        <pre><h4>Location  {{$user->city}}                               Housing Street {{$user->street}}</h4></pre>
                        <pre><h4>Rental Price {{$user->price}}                           Apartment Size {{$user->area}} Square feet</h4></pre>
                        <pre><h4>Number of bed {{$user->bed}}                             Number of bath {{$user->bath}}</h4></pre>
                        <pre> <h4>Contact number of  {{$user->author}}  {{$user->phone}} </h4></pre>
                        <pre><h4>Email of  {{$user->author}}  {{$user->email}} </h4></pre>
                    </div>

                </div>
            </div>
            <div style="width: 35%;float: right">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{asset($user->picture)}}" style="width: 250px;height: 150px">
                    </div>

                    <div class="col-md-12">
                        <a style="margin: 20px;" href="/map/{{$user->lat}}/{{$user->lng}}" class="btn btn-default">Locate on Map</a>
                    </div>
                </div>
                
            </div>

            <div class="clearfix"></div>
        @endforeach
        @endif


</div>

</div>

@endsection

@section('script')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHo6COSSVtWMnDMgO8Lg-LcfIb8Cx6MEs&callback=myMap"></script>
<script type="text/javascript">
    
    $(document).ready(function(){

        $('.map').each(function (index, Element) {
    var coords = $(Element).text().split(",");
    if (coords.length != 3) {
        $(this).display = "none";
        return;
    }
    var latlng = new google.maps.LatLng(parseFloat(coords[0]), parseFloat(coords[1]));
    var myOptions = {
        zoom: parseFloat(coords[2]),
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        disableDefaultUI: false,
        mapTypeControl: true,
        zoomControl: true,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.SMALL
        }
    };
    var map = new google.maps.Map(Element, myOptions);

    var marker = new google.maps.Marker({
        position: latlng,
        map: map
    });
});
    
});


</script>


@endsection