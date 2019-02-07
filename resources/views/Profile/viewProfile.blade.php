@extends('master')

@section('content')

    <div class="banner-section">
        <div class="clearfix"> </div>
        <style>
            .card {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                max-width: 60%;
                margin: 7% auto;
                text-align: center;
                font-family: arial;
                padding: 2%;
                background: #DDD;

            }
            .card img{
                max-width: 300px;
                margin: 2%;
            }

            .card h1{
                color: #ffffff;
                margin: 1%;
            }
            .card p{
                margin: 1%;
                color: #080808;
            }

            .title {
                color: #ffffff;
                font-size: 18px;
                margin: 1%;
            }

            button {
                border: none;
                outline: 0;
                display: inline-block;
                padding: 8px;
                color: white;
                background-color: #000;
                text-align: center;
                cursor: pointer;
                width: 100%;
                font-size: 18px;
            }

            .card a {
                text-decoration: none;
                border: none;
                outline: 0;
                display: inline-block;
                padding: 8px;
                color: white;
                background-color: #000;
                text-align: center;
                cursor: pointer;
                width: 100%;
                font-size: 18px;
            }

            button:hover, a:hover {
                opacity: 0.7;
            }
        </style>

        <div class="card">
            @if(isset($users))
                @foreach($users as $user)
                    <img src="{{asset('images/profile.png')}}" alt="" style="width:100%">
                    <div class="form-group">
                        
                        <label style="float: left"> Change Picture </label>
                        <input style="float: right" type="file" class="form-control" name="image">

                     </div>
                <p class="title"><strong>Name : </strong>{{$user->name}}</p>
                    <p class="title"><strong>Email : </strong>{{$user->email}}</p>
                @endforeach
            @endif

        </div>

        

    </div>




        <div class="clearfix"></div>
<div class="container-fluid">
<div class="hw">

<div>
    <h1>Posts by User</h1>
</div>

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
                        <img src="{{asset($result->picture)}}"  style="width: 250px;height: 150px">
                    </div>

                    <div class="col-md-12">
                        <a style="margin: 20px;" href="/map/{{$result->lat}}/{{$result->lng}}" class="btn btn-default">Locate on Map</a>
                    </div>
                </div>
            </div>

<div class="clearfix"></div>
    @endforeach

        @else 
        <div>
            <h1>No Post Admitted</h1>
        </div>

        @endif


</div>

</div>


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
@endsection