<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>TEUSHOP</title>
    <link rel="shortcut icon" href="{{url ('public')}}/img/favicon.png" type="image/png">
    <link rel="stylesheet" href="{{url ('public')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url ('public')}}/css/slick.css">
    <link rel="stylesheet" href="{{url ('public')}}/css/slick-theme.css">
    <link rel="stylesheet" href="{{url ('public')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="{{url ('public')}}/css/styles.css">
</head>

<body>
    <!-- Push cart -->
    <div class="pushmenu pushmenu-left cart-box-container">
        <div class="cart-list">
            <div class="cart-list-heading">
                <h3 class="cart-title">My cart</h3>
                <span class="close-left js-close"><i class="ion-ios-close-empty"></i></span>
            </div>
            <div class="cart-inside">
                <ul class="list">
                    <li class="item-cart">
                        <div class="product-img-wrap">
                            <a href="#" title="Product"><img src="{{url ('public')}}/img/product/cart_product_1.jpg" alt="Product" class="img-responsive"></a>
                        </div>
                        <div class="product-details">
                            <div class="inner-left">
                                <div class="product-name"><a href="#">Denim One Set</a></div>
                                <div class="product-price"><span>IDR 608.867</span></div>
                                <div class="cart-qtt">
                                    <button type="button" class="quantity-left-minus btn btn-number js-minus" data-type="minus" data-field="">
                                        <span class="minus-icon"><i class="ion-ios-minus-empty"></i></span>
                                    </button>
                                    <input type="text" name="number" value="1" class="product_quantity_number js-number">
                                    <button type="button" class="quantity-right-plus btn btn-number js-plus" data-type="plus" data-field="">
                                        <span class="plus-icon"><i class="ion-ios-plus-empty"></i></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item-cart">
                        <div class="product-img-wrap">
                            <a href="#" title="Product"><img src="{{url ('public')}}/img/product/cart_product_2.jpg" alt="Product" class="img-responsive"></a>
                        </div>
                        <div class="product-details">
                            <div class="inner-left">
                                <div class="product-name"><a href="#">White-Emerland Shirt</a></div>
                                <div class="product-price"><span>IDR 178.898</span></div>
                                <div class="cart-qtt">
                                    <button type="button" class="quantity-left-minus btn btn-number js-minus" data-type="minus" data-field="">
                                        <span class="minus-icon"><i class="ion-ios-minus-empty"></i></span>
                                    </button>
                                    <input type="text" name="number" value="1" class="product_quantity_number js-number">
                                    <button type="button" class="quantity-right-plus btn btn-number js-plus" data-type="plus" data-field="">
                                        <span class="plus-icon"><i class="ion-ios-plus-empty"></i></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="cart-bottom">
                    <div class="cart-form">
                        <div class="cart-note-form">
                            <label for="CartSpecialInstructions" class="cart-note cart-note_text_label small--text-center">Special Offer:</label>
                            <textarea rows="6" name="note" id="CartSpecialInstructions" class="cart-note__input form-control note--input"></textarea>
                        </div>
                    </div>
                    <div class="cart-button mg-top-30">
                        <a class="zoa-btn checkout" href="#" title="">Check out</a>
                    </div>
                </div>
            </div>
            <!-- End cart bottom -->
        </div>
    </div>
    <!-- End pushcart -->
    <!-- Search form -->
    <div class="search-form-wrapper header-search-form">
        <div class="container">
            <div class="search-results-wrapper">
                <div class="btn-search-close">
                    <i class="ion-ios-close-empty"></i>
                </div>
            </div>
            <ul class="zoa-category text-center">
                <li><a href="">All Categories</a></li>
                <li><a href="">T-shirt</a></li>
                <li><a href="">Pants</a></li>
                <li><a href="">Sweater</a></li>
            </ul>
            <form method="get" action="/search" role="search" class="search-form  has-categories-select">
                <input name="q" class="search-input" type="text" value="" placeholder="Enter your keywords..." autocomplete="off">
                <input type="hidden" name="post_type" value="product">
                <button type="submit" id="search-btn"><i class="ion-ios-search-strong"></i></button>
            </form>
        </div>
    </div>
    <!-- End search form -->
    <!-- Account -->
    <div class="account-form-wrapper">
        <div class="container">
            <div class="search-results-wrapper">
                <div class="btn-search-close">
                    <i class="ion-ios-close-empty black"></i>
                </div>
            </div>
            <div class="account-wrapper">
                <ul class="account-tab text-center">
                    <li class="active"><a data-toggle="tab" href="#login">Login</a></li>
                    <li><a data-toggle="tab" href="#register">Register</a></li>
                </ul>
                <div class="tab-content">
                    <div id="login" class="tab-pane fade in active">
                        <div class="row">
                            <div class="col-md-4">
                                <form method="post" class="form-customer form-login">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">E-mail *</label>
                                        <input type="email" class="form-control form-account" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group">
                                        <label for="zoaname">Name</label>
                                        <input type="text" class="form-control form-account" id="zoaname">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password *</label>
                                        <input type="password" class="form-control form-account" id="exampleInputPassword1">
                                    </div>
                                    <div class="btn-button-group mg-top-30 mg-bottom-15">
                                        <button type="submit" class="zoa-btn btn-login hover-white">Sign Up</button>
                                    </div>
                                </form>
                                <div class="social-group-button">
                                    <a href="" class="twitter button">
                                        <div class="slide">
                                            <p>
                                                Connect with Twitter
                                            </p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-twitter">
                                    </i>
                                        </div>
                                    </a>
                                    <a href="" class="facebook button">
                                        <div class="slide">
                                            <p>
                                                Connect with Facebook
                                            </p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-facebook">
                                    </i>
                                        </div>
                                    </a>
                                </div>
                                <span class="text-note">Already have an account? <a href="">Sign In!</a></span>
                            </div>
                            <div class="col-md-4">
                                <form method="post" class="form-customer form-register">
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">E-mail</label>
                                        <input type="email" class="form-control form-account" id="exampleInputEmail2">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword3">Password</label>
                                        <input type="password" class="form-control form-account" id="exampleInputPassword3">
                                    </div>
                                    <div class="flex justify-content-between mg-30">
                                        <div class="checkbox">
                                            <input data-val="true" data-val-required="The Remember me? field is required." id="RememberMe" name="RememberMe" type="checkbox" value="true" />
                                            <input name="RememberMe" type="hidden" value="false" />
                                            <label for="RememberMe">Remember me</label>
                                        </div>
                                        <a href="" class="text-note no-mg">Forgot Password?</a>
                                    </div>
                                    <div class="btn-button-group mg-top-30 mg-bottom-15">
                                        <button type="submit" class="zoa-btn btn-login hover-white">Sign In</button>
                                    </div>
                                </form>
                                <div class="social-group-button">
                                    <a href="" class="twitter button">
                                        <div class="slide">
                                            <p>
                                                Connect with Twitter
                                            </p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-twitter">
                                    </i>
                                        </div>
                                    </a>
                                    <a href="" class="facebook button">
                                        <div class="slide">
                                            <p>
                                                Connect with Facebook
                                            </p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-facebook">
                                    </i>
                                        </div>
                                    </a>
                                </div>
                                <span class="text-note">Don’t have an account? <a href="">Register!</a></span>
                            </div>
                            <div class="col-md-4">
                                <form method="post" class="form-customer form-reset">
                                    <div class="form-group">
                                        <label for="exampleInputEmail5">E-mail *</label>
                                        <input type="email" class="form-control form-account" id="exampleInputEmail5">
                                    </div>
                                    <div class="btn-button-group mg-top-30 mg-bottom-15">
                                        <button type="submit" class="zoa-btn btn-login hover-white">Reset Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="register" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-4">
                                <form method="post" class="form-customer form-login">
                                    <div class="form-group">
                                        <label for="exampleInputEmail7">E-mail *</label>
                                        <input type="email" class="form-control form-account" id="exampleInputEmail7">
                                    </div>
                                    <div class="form-group">
                                        <label for="zoaname2">Name</label>
                                        <input type="text" class="form-control form-account" id="zoaname2">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword2">Password *</label>
                                        <input type="password" class="form-control form-account" id="exampleInputPassword2">
                                    </div>
                                    <div class="btn-button-group mg-top-30 mg-bottom-15">
                                        <button type="submit" class="zoa-btn btn-login hover-white">Sign Up</button>
                                    </div>
                                </form>
                                <div class="social-group-button">
                                    <a href="" class="twitter button">
                                        <div class="slide">
                                            <p>
                                                Connect with Twitter
                                            </p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-twitter">
                                    </i>
                                        </div>
                                    </a>
                                    <a href="" class="facebook button">
                                        <div class="slide">
                                            <p>
                                                Connect with Facebook
                                            </p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-facebook">
                                    </i>
                                        </div>
                                    </a>
                                </div>
                                <span class="text-note">Already have an account? <a href="">Sign In!</a></span>
                            </div>
                            <div class="col-md-4">
                                <form method="post" class="form-customer form-register">
                                    <div class="form-group">
                                        <label for="exampleInputEmail6">E-mail</label>
                                        <input type="email" class="form-control form-account" id="exampleInputEmail6">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Password</label>
                                        <input type="password" class="form-control form-account" id="exampleInputPassword4">
                                    </div>
                                    <div class="flex justify-content-between mg-30">
                                        <div class="checkbox">
                                            <input data-val="true" data-val-required="The Remember me? field is required." id="RememberMe2" name="RememberMe" type="checkbox" value="true" />
                                            <input name="RememberMe" type="hidden" value="false" />
                                            <label for="RememberMe2">Remember me</label>
                                        </div>
                                        <a href="" class="text-note no-mg">Forgot Password?</a>
                                    </div>
                                    <div class="btn-button-group mg-top-30 mg-bottom-15">
                                        <button type="submit" class="zoa-btn btn-login hover-white">Sign In</button>
                                    </div>
                                </form>
                                <div class="social-group-button">
                                    <a href="" class="twitter button">
                                        <div class="slide">
                                            <p>
                                                Connect with Twitter
                                            </p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-twitter">
                                    </i>
                                        </div>
                                    </a>
                                    <a href="" class="facebook button">
                                        <div class="slide">
                                            <p>
                                                Connect with Facebook
                                            </p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-facebook">
                                    </i>
                                        </div>
                                    </a>
                                </div>
                                <span class="text-note">Don’t have an account? <a href="">Register!</a></span>
                            </div>
                            <div class="col-md-4">
                                <form method="post" class="form-customer form-reset">
                                    <div class="form-group">
                                        <label for="exampleInputEmail4">E-mail *</label>
                                        <input type="email" class="form-control form-account" id="exampleInputEmail4">
                                    </div>
                                    <div class="btn-button-group mg-top-30 mg-bottom-15">
                                        <button type="submit" class="zoa-btn btn-login hover-white">Reset Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Account -->
    </div>
    <div class="wrappage">
        <header id="header" class="header-v2">
            <div class="header-center">
                <div class="container container-content">
                    <div class="row flex align-items-center justify-content-between">
                        <div class="col-md-4 col-xs-4 col-sm-4 col2 hidden-lg hidden-md">
                            <div class="topbar-right">
                                <div class="element">
                                    <a href="#" class="icon-pushmenu js-push-menu">
                                        <svg width="26" height="16" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 66 41" style="enable-background:new 0 0 66 41;" xml:space="preserve">
                                            <style type="text/css">
                                            .st0 {
                                                fill: none;
                                                stroke: #000000;
                                                stroke-width: 3;
                                                stroke-linecap: round;
                                                stroke-miterlimit: 10;
                                            }
                                            </style>
                                            <g>
                                                <line class="st0" x1="1.5" y1="1.5" x2="64.5" y2="1.5" />
                                                <line class="st0" x1="1.5" y1="20.5" x2="64.5" y2="20.5" />
                                                <line class="st0" x1="1.5" y1="39.5" x2="64.5" y2="39.5" />
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-4 col-sm-4 col2 justify-content-center">
                            <a href="#"><img src="{{url ('public')}}/img/logo2.png" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="col-md-9 col-xs-4 col-sm-4 col2 flex justify-content-end">
                            <ul class="nav navbar-nav js-menubar hidden-xs hidden-sm">
                                <li class="level1 active dropdown">
                                    <a href="{{url ('home')}}" title="Home">Home</a>
                                    <span class="plus js-plus-icon"></span></li>
                                <li class="level1 hassub dropdown">
                                    <a href="{{url ('collect')}}" title="Collection">Collection</a></li>
                                    <span class="plus js-plus-icon"></span>
                                    <div class="menu-level-1 dropdown-menu style2">
                                        <ul class="level1">
                                            <li class="level2 col-6">
                                                <ul class="menu-level-2">
                                                    <li class="level3"><a href="04-About.html" title="About Us">About Us</a></li>
                                                    <li class="level3"><a href="05-Contact.html" title="Contact">Contact</a></li>
                                                    <li class="level3"><a href="08-My-Account.html" title="My Account">My Account</a></li>
                                                    <li class="level3"><a href="09-Check-out.html" title="Check out">Check out</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </li>
                            </ul>
                            <div class="topbar-left">
                                <div class="element element-search hidden-xs hidden-sm">
                                    <a href="#" class="zoa-icon search-toggle">
                                        <svg width="20" height="20" version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
                                            <g>
                                                <path d="M0,39.4C0,50,4.1,59.9,11.6,67.3c7.4,7.5,17.3,11.6,27.8,11.6c9.5,0,18.5-3.4,25.7-9.5l19.8,19.7c1.2,1.2,3.1,1.2,4.2,0
        c0.6-0.6,0.9-1.3,0.9-2.1s-0.3-1.5-0.9-2.1L69.3,65.1c6.2-7.1,9.5-16.2,9.5-25.7c0-10.5-4.1-20.4-11.6-27.9C59.9,4.1,50,0,39.4,0
        C28.8,0,19,4.1,11.6,11.6S0,28.9,0,39.4z M63.1,15.8c6.3,6.3,9.8,14.7,9.8,23.6S69.4,56.7,63.1,63s-14.7,9.8-23.6,9.8
        S22.2,69.3,15.9,63C9.5,56.8,6,48.4,6,39.4s3.5-17.3,9.8-23.6S30.5,6,39.4,6S56.8,9.5,63.1,15.8z" />
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                <div class="element element-user hidden-xs hidden-sm">
                                    <a href="#" class="zoa-icon js-user">
                                        <svg width="19" height="20" version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 102.8" style="enable-background:new 0 0 100 102.8;" xml:space="preserve">
                                            <g>
                                                <path d="M75.7,52.4c-2.1,2.3-4.4,4.3-7,6C82.2,58.8,93,69.9,93,83.5v12.3H7V83.5c0-13.6,10.8-24.7,24.3-25.1c-2.6-1.7-5-3.7-7-6
        C10.3,55.9,0,68.5,0,83.5v15.8c0,1.9,1.6,3.5,3.5,3.5h93c1.9,0,3.5-1.6,3.5-3.5V83.5C100,68.5,89.7,55.9,75.7,52.4z" />
                                                <g>
                                                    <path d="M50,58.9c-16.2,0-29.5-13.2-29.5-29.5S33.8,0,50,0s29.5,13.2,29.5,29.5S66.2,58.9,50,58.9z M50,7
            C37.6,7,27.5,17.1,27.5,29.5S37.6,51.9,50,51.9s22.5-10.1,22.5-22.5S62.4,7,50,7z" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                <div class="element element-cart">
                                    <a href="#" class="zoa-icon icon-cart">
                                        <svg width="20" height="20" version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 55.4 55.4" style="enable-background:new 0 0 55.4 55.4;" xml:space="preserve">
                                            <g>
                                                <rect x="0.2" y="17.4" width="55" height="3.4" />
                                            </g>
                                            <g>
                                                <polygon points="7.1,55.4 3.4,27.8 3.4,24.1 7.3,24.1 7.3,27.6 10.5,51.6 44.9,51.6 48.1,27.6 48.1,24.1 52,24.1 52,27.9 
        48.3,55.4   " />
                                            </g>
                                            <g>
                                                <path d="M14,31.4c-0.1,0-0.3,0-0.5-0.1c-1-0.2-1.6-1.3-1.4-2.3L19,1.5C19.2,0.6,20,0,20.9,0c0.1,0,0.3,0,0.4,0
        c0.5,0.1,0.9,0.4,1.2,0.9c0.3,0.4,0.4,1,0.3,1.5l-6.9,27.5C15.6,30.8,14.8,31.4,14,31.4z" />
                                            </g>
                                            <g>
                                                <path d="M41.5,31.4c-0.9,0-1.7-0.6-1.9-1.5L32.7,2.4c-0.1-0.5,0-1.1,0.3-1.5s0.7-0.7,1.2-0.8c0.1,0,0.3,0,0.4,0
        c0.9,0,1.7,0.6,1.9,1.5L43.4,29c0.1,0.5,0,1-0.2,1.5c-0.3,0.5-0.7,0.8-1.1,0.9c-0.2,0-0.3,0-0.4,0.1C41.6,31.4,41.6,31.4,41.5,31.4
        z" />
                                            </g>
                                        </svg>
                                        <span class="count cart-count">2</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- /header -->
        <!-- content -->
         <div class="slide v3">
            <div class="js-slider-v4">
                <div class="slide-img">
                    <img src="{{url ('public')}}/img/slide/Desain tanpa judul.png" alt="" class="img-responsive">
                    <div class="box-center content2">
                        <h3>Treasure Shop</h3>
                        <a href="{{url ('collection')}}" class="slide-btn">Shop Now</a>
                    </div>
                </div>
                <div class="slide-img">
                    <img src="{{url ('public')}}/img/slide/2.png" alt="" class="img-responsive">
                    <div class="box-center content1">
                        
                    </div>
                </div>
                
            </div>
           <div class="custom">
                <div class="pagingInfo"></div>
            </div>
        </div>
        <!-- End content -->
        <div class="trend-product pad">
            <div class="container container-content">
                <div class="row first">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row engoc-row-equal">
                            @foreach ($list_produk as $produk)
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                    <div class="product-img">
                                        <a href=""><img src="{{url ('public')}}/img/home1/produk_1.png" alt="" class="img-responsive"></a>
                                        <div class="product-button-group">
                                            <a href="#" class="zoa-btn zoa-quickview">
                                        <span class="zoa-icon-quick-view"></span>
                                            </a>
                                            <a href="#" class="zoa-btn zoa-wishlist">
                                        <span class="zoa-icon-heart"></span>
                                            </a>
                                            <a href="#" class="zoa-btn zoa-addcart">
                                        <span class="zoa-icon-cart"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <h3 class="product-title">
                                            <a href="">
                                                {{$produk->nama}}
                                            </a>
                                        </h3>
                                    <div class="product-price">
                                            <span>IDR  
                                                <a href="">{{$produk->harga}}</a>
                                            </span>
                                    </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-banner">
            <div class="container container-content">
                <div class="banner-img hover-images">
                    <img src="{{url ('public')}}/img/home1/home-1-bg.jpg" alt="" class="img-responsive">
                
                    <div class="box-center">
                        <div class="content">
                            <a class="text" href="">#summer_collection</a>
                            <h2>-5%</h2>
                            <a href="#" class="zoa-btn btn-shopnow">Shop Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="newsletter-heading">
                            <h3>Get Free Voucher</h3>
                            <p>Subscribe for latest stories and promotions (35% sale)</p>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-6 col-xs-12 flex-end">
                        <form class="form_newsletter" action="#" method="post">
                            <input type="email" value="" placeholder="Enter your emaill" name="EMAIL" id="mail" class="newsletter-input form-control">
                            <button id="subscribe" class="button_mini zoa-btn" type="submit">
                                Send
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <footer class="footer v1 bd-top">
            <div class="container">
                <div class="f-content">
                    <div class="f-col">
                        <div class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="f-col align-items-center">
                        <p>© 2022<a href=""> TEUSHOP</a></p>
                        <ul>
                            <li><a href="">Privacy Policy</a></li>
                            <li><a href="">Terms of Use</a></li>
                        </ul>
                    </div>
                    <div class="f-col">
                        <a href=""><img src="{{url ('public')}}/img/credit-card-icons.png" alt="" class="img-responsive"></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
    <a href="#" class="zoa-btn scroll_top"><i class="ion-ios-arrow-up"></i></a>
    <script src="{{url ('public')}}/js/jquery.js"></script>
    <script src="{{url ('public')}}/js/bootstrap.min.js"></script>
    <script src="{{url ('public')}}/js/owl.carousel.min.js"></script>
    <script src="{{url ('public')}}/js/slick.min.js"></script>
    <script src="{{url ('public')}}/js/countdown.js"></script>
    <script src="{{url ('public')}}/js/main.js"></script>
</body>

</html>