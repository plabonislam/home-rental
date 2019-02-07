<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Apartment;


class ApartmentController extends Controller
{

	

    public function create()
    {
    	return view('search.search');
    }

 public function creates()
    {
    	return view('rental.create');
    }

//    public function store(Request $request)
//    {
//
//    	      $this->validate (request(),[
//
//        'city'=>'required',
//        'street'=>'required',
//        'bed'=>'required',
//        'bath'=>'required',
//        'area'=>'required',
//        'price'=>'required',
//        'property_type'=>'required',
//        'details'=>'required',
//        'author'=>'required',
//         'name'=>'required',
//        'phone'=>'required',
//        'email'=>'required'
//                ]);
//
//Apartment::create(Request::all());
//
//return redirect('/');
//
//    }

    public function store(Request $request){

        $imageUrl = $this->projectUrl($request);

        DB::table('apartments')->insert([
            'city'=>$request->city,
            'street'=>$request->street,
            'lat'=>$request->lat,
            'lng'=>$request->lng,
            'bed'=>$request->bed,
            'bath'=>$request->bath,
            'area'=>$request->area,
            'price'=>$request->price,
            'property_type'=>$request->property_type,
            'details'=>$request->details,
            'author'=>$request->author,
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'picture'=>$imageUrl
        ]);

        return redirect()->back()->with('message','Post saved Successfully');

    }
    private function projectUrl($request){
//
        ini_set('memory_limit','256M');
        $productImage=$request->file('image');
        if($productImage){
            $imageName = $productImage->getClientOriginalName();
            $uploadPath ='images/Picture/';
            $productImage->move($uploadPath,$imageName);
            $imageUrl =$uploadPath.$imageName;

        }
        else{

            $imageUrl='images/Picture/default_house_pic.png';
        }
        return $imageUrl;


    }





    public function createsearch()
    {
    return view('search.create');
    }


 public function storesearch(Request $request)
    {

    
     $bed =$request->bed;
     $city =$request->city;
     $bath = $request->bath;
     // $space = $request->space;
     $property_type = $request->property_type;

       
      $users = DB::table('apartments')->where('city',$city)->get();
      $streets = DB::table('apartments')->where('city',$city)->distinct()->pluck('street');

      $beds = DB::select("select distinct bed from apartments where city like '$city' order by bed");


       return view('search.show',['users'=>$users,'beds'=>$beds,'city'=>$city,'streets'=>$streets]);

    }

    public function searchHome( Request $request){
        $bed = $request->bed;
        $city = $request->city;
        $location=$request->street;
        $price =$request->price;
        $pricehigh = $price+5000;


       $results = DB::select("select * from apartments where street = '$location'and bed ='$bed' and price between '$price' and '$pricehigh'");
       $streets = DB::select("select distinct street from apartments where city = '$city'");
       $beds = DB::select("select distinct bed from apartments where city like '$city' order by bed");



	    return view('SearchResult.houseSearch',['results'=>$results,'streets'=>$streets,'beds'=>$beds,'city'=>$city]);
    }


 public function initiate()
    {
    return view('search.calculate');
    }



public function solve(Request $request)
{
	 $amount = $request->amount;
	 return view('search.amount',compact('amount'));
}

public function viewProfile($id){

	    $user = DB::select("select * from users where id = '$id'");
        $email = "";
        foreach ($user as $value) {
            $email = $value->email;
        }

       

       $results = DB::select("select * from apartments where email = '$email'");
	    return view('Profile.viewProfile',['users'=>$user,'results'=> $results]);
}


public function test(){

    return view('test');
}

public function map($lat,$lng){
    return view('map')->with('lat',$lat)->with('lng',$lng);
}

}