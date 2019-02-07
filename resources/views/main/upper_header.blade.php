<div class="header" id="home">
            <div class="header-top">
                <div class="container">
                    <div class="head-top">
                        <div class="deatils">
                             @if(!auth()->check())
                          <ul >
                           
                                <a href="/login">Sign In</a>
                                <a href="/reg" >Register</a>
                               
                            </ul>
                            @endif
                             @if(auth()->check())
                             <a href="/logout">Sign Out</a>
                             @endif
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="logo">
                        <h1><a href="index.html">Home Rental Site</a></h1>
                    </div>
                </div>
            </div>
        <div class="container">
            <div class="header-bottom">
                <nav class="navbar navbar-default" style="background: #ddd;">
                    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
<!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <nav class="menu menu--francisco">
                                <ul class="nav navbar-nav menu__list">
                                 <li class="menu__item menu__item--current"><a href="/" class="menu__link"><span class="menu__helper">Home</span></a></li>


                                    
                                    <li class="menu__item menu__item--current"><a href="/searchhome" class="menu__link"><span class="menu__helper">Find Home</span></a></li>

                                    @if(auth()->check())

                                        <li class="menu__item menu__item--current"><a href="/rental" class="menu__link"><span class="menu__helper">Post</span></a></li>

                                        <li class="menu__item menu__item--current"><a href="{{url('/profile/').'/'.auth()->user()->id}}" class="menu__link"><span class="menu__helper">{{auth()->user()->name}}</span></a></li>

                                    @endif
                                </ul>
                            </nav>
                                <div class="social-icons">
             
                                </div>
                            <div class="clearfix"></div>
                        </div><!-- /.navbar-collapse -->
                            <!-- /.container-fluid -->
                    </div>
                </nav>

            </div>  
        </div>
    </div>
    <!--header-->