    @extends('master')

    @section('content')

     <div class="banner-section">
            <div class="slider">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider">
                        <li>
                          <img src="images/ba1.jpg" alt="">
                         <div class="caption">
                            <h3>Get Your HOME</h3>


    <div class="play">
    <div class="container-fluid">


        <div class="fun">

                         <form action="/searchhome" method="POST">
    {{csrf_field()}}




      <div class="form-group col-md-6">

          <select class="form-control" id="city" name="city" placeholder="choose" required>


             <option>Dhaka</option>
              <option>Sylhet</option>
               <option>Chittagong</option>
                <option>Rajshahi</option>
                 <option>Rangpur</option>
                 <option>Barisal</option>
             </select>
              <div class="clearfix"></div>
        </div>






    <div class="form-group col-md-2">
      <button type="submit" class="btn btn-primary"  class="form-control">Submit</button>
       <div class="clearfix"></div>
    </div>

    </form>
    </div>
    </div>
    </div>


                         </div>
                        </li>

                    </ul>
              </div>
          </div>
        </div>



    @endsection