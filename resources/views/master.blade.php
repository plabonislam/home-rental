

<!DOCTYPE html>
<html>
<head>
<title>Rent a Home | Home :: w3layouts</title>
<!--css-->
<link href="{{ URL::asset('css/go.css') }}" rel="stylesheet">
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Home Rent Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" />
<!--js-->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!--js-->
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,700italic,700,600italic,600,400italic,300italic,300,100italic,100' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--webfonts-->
<script src="{{asset('js/responsiveslides.min.js')}}"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
  <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            items : 1,
            lazyLoad : true,
            autoPlay : true,
            navigation : false,
            navigationText :  false,
            pagination : true,
        });
        });
    </script>
    @yield('script')
</head>
<body>
    <!--header-->
    
    @include('main.upper_header')

    
    @yield('content')


    

    @include('main.additional_footer')

        
        
        <!--high properties-->
        <!--featured-->
        
        <!--featured-->
       
        <!--Testimonial-->
    
        <!--footer-->
                 
                    <!--footer-->
                
                <!--signin-->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body real-spa">
                            <div class="login-grids">
                                <div class="login">
                                    <div class="login-right">
                                        <form action="#" method="post">
                                            <h3>Sign In</h3>
                                            <input type="text" name="Email" value="Enter your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your Email';}" required="">  
                                            <input type="password" name="Password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">   
                                            <h4><a href="#">Forgot password</a> / <a href="#">Create new password</a></h4>
                                            <div class="single-bottom">
                                                <input type="checkbox"  id="brand" value="">
                                                <label for="brand"><span></span>Remember Me.</label>
                                            </div>
                                            <input type="submit" value="Sign In" >
                                        </form>
                                    </div>
                                </div>
                                <p>By logging in you agree to our <a href="#">Terms</a> and <a href="#">Conditions</a> and <a href="#">Privacy Policy</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--signin-->
            <!--Register-->
           
        <!--Register-->
</body>
</html>
