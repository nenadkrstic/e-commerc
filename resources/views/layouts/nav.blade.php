<div class="header">
    <div class="container">
        <div class="header-top">
            <div class="logo">
                <a href="{{url('home')}}"> e-cvrcak</a>
            </div>


                     <!--Include layouts cart-->
                        @include('layouts.cart')
                    <!--End Include layouts cart-->

            @if(Session::has('cartMsg'))
              <h3 class="text-center">{{ Session::get('cartMsg') }}</h3>
        @endif
            <!---menu-----bar--->
        <div class="header-botom text-center">
            <div class="content white ">
                <nav class="navbar navbar-default nav-menu " role="navigation">
                    <div class="navbar-header ">
                        <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="clearfix"></div>
                    <!--/.navbar-header-->

                    <div class="collapse navbar-collapse collapse-pdng text-center" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav nav-fon ">

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Anatomska<b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-4 menu-img-pad">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="products.blade.php">Joggers</a></li>
                                                <li><a href="products.blade.php">Foot Ball</a></li>
                                                <li><a href="products.blade.php">Cricket</a></li>
                                                <li class="divider"></li>
                                                <li><a href="products.blade.php">Tennis</a></li>
                                                <li class="divider"></li>
                                                <li><a href="products.blade.php">Casual</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4 menu-img-pad">
                                            <a href="#"><img src="images/menu1.jpg" alt="/" class="img-rsponsive men-img-wid" /></a>
                                        </div>
                                        <div class="col-sm-4 menu-img-pad">
                                            <a href="#"><img src="images/menu2.jpg" alt="/" class="img-rsponsive men-img-wid" /></a>
                                        </div>
                                    </div>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Muškarci<b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-4 menu-img-pad">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="products.blade.php">Joggers</a></li>
                                                <li><a href="products.blade.php">Foot Ball</a></li>
                                                <li><a href="products.blade.php">Cricket</a></li>
                                                <li class="divider"></li>
                                                <li><a href="products.blade.php">Tennis</a></li>
                                                <li class="divider"></li>
                                                <li><a href="products.blade.php">Casual</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4 menu-img-pad">
                                            <a href="#"><img src="images/menu1.jpg" alt="/" class="img-rsponsive men-img-wid" /></a>
                                        </div>
                                        <div class="col-sm-4 menu-img-pad">
                                            <a href="#"><img src="images/menu2.jpg" alt="/" class="img-rsponsive men-img-wid" /></a>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Žene<b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-2">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="products.blade.php">Tops</a></li>
                                                <li><a href="products.blade.php">Bottoms</a></li>
                                                <li><a href="products.blade.php">Yoga Pants</a></li>
                                                <li class="divider"></li>
                                                <li><a href="products.blade.php">Sports</a></li>
                                                <li class="divider"></li>
                                                <li><a href="products.blade.php">Gym</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="#"><img src="images/menu3.jpg" alt="/" class="img-rsponsive men-img-wid" /></a>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Deca<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="products.blade.php">Tees</a></li>
                                    <li><a href="products.blade.php">Shorts</a></li>
                                    <li><a href="products.blade.php">Gear</a></li>
                                    <li class="divider"></li>
                                    <li><a href="products.blade.php">Watches</a></li>
                                    <li class="divider"></li>
                                    <li><a href="products.blade.php">Shoes</a></li>
                                </ul>
                            </li>

                            <div class="clearfix"></div>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!--/.navbar-collapse-->
                    <div class="clearfix"></div>
                </nav>
                <!--/.navbar-->
                <div class="clearfix"></div>
            </div>
            <!--/.content--->
        </div>
        <!--header-bottom-->
    </div>
</div>