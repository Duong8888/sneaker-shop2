<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/autima/autima/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jul 2023 03:13:53 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Autima - Car Accessories Shop HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('client.templates.style')
    @yield('style-page')
</head>

<body>

<!-- Main Wrapper Start -->
<!--header area start-->
<header class="header_area header_padding">
    <!--header top start-->
    <div class="header_top">
        <div class="container">
            <div class="top_inner">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="follow_us">
                            <label>Follow Us:</label>
                            <ul class="follow_link">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="top_right text-end">
                            <ul>
                                <li class="top_links"><a href="#"><i class="ion-android-person"></i> My Account<i
                                            class="ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_links">

                                        @if (Route::has('login'))
                                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                                @auth
                                                    <li>
                                                        <a href="{{ url('account') }}"
                                                           class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                                    </li>
                                                    @if(Auth::user()->role_id == 1)
                                                        <li>
                                                            <a href="{{ url('product')}}"
                                                               class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Admin</a>
                                                        </li>
                                                    @endif
                                                    <li>
                                                        <form method="POST" action="{{ route('logout') }}">
                                                            @csrf
                                                            <button class="btn dropdown-item notify-item p-0 m-0">
                                                                <a href="#">
                                                                    <i class="bi bi-box-arrow-right"></i>
                                                                    <span>Logout</span>
                                                                </a>
                                                            </button>
                                                        </form>
                                                    </li>
                                                @else
                                                    <li>
                                                        <a href="{{ route('login') }}"
                                                           class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                                            in</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('login') }}"
                                                           class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                                    </li>
                                                @endauth
                                            </div>
                                        @endif
                                    </ul>
                                </li>
                                <li class="language"><a href="#"><img
                                            src="{{asset('ui-client/assets/img/logo/language.png')}}" alt="">en-gb<i
                                            class="ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#"><img src="{{asset('ui-client/assets/img/logo/language.png')}}"
                                                             alt=""> English</a></li>
                                        <li><a href="#"><img src="{{asset('ui-client/assets/img/logo/language2.png')}}"
                                                             alt=""> Germany</a></li>
                                    </ul>
                                </li>
                                <li class="currency"><a href="#">$ USD<i class="ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_currency">
                                        <li><a href="#">EUR – Euro</a></li>
                                        <li><a href="#">GBP – British Pound</a></li>
                                        <li><a href="#">INR – India Rupee</a></li>
                                    </ul>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header top start-->

    <!--header middel start-->
    <div class="header_middle">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3">
                    <div class="logo">
                        <a href="index.html"><img src="{{asset('ui-client/assets/img/logo/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="middel_right">
                        <div class="search-container">
                            <form action="#">
                                <div class="search_box">
                                    <input placeholder="Search entire store here ..." type="text">
                                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="middel_right_info">

                            <div class="header_wishlist">
                                <a href="wishlist.html"><span class="lnr lnr-heart"></span> Wish list </a>
                                <span class="wishlist_quantity">3</span>
                            </div>
                            <div class="mini_cart_wrapper wrp_mini_cart">
                                <a href="javascript:void(0)"><span class="lnr lnr-cart"></span>My Cart </a>
                                <span class="cart_quantity">2</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header middel end-->

    <!--mini cart-->
    {{--    <div class="miniCart" data-view-miniCart="{{route('route.loadTable')}}"></div>--}}
    <div class="mini_cart" data-view-miniCart="{{route('route.loadTable')}}">
        <div class="mini_cart_item" style="overflow: auto;max-height: 70vh;margin-bottom: 20px">

        </div>

        <div class="mini_cart_footer">
            <div class="cart_button">
                <a href="{{route('route.viewCart')}}">View cart</a>
            </div>
            <div class="cart_button">
                <a class="active" href="{{route('checkout.checkout')}}">Checkout</a>
            </div>
        </div>

    </div>
    <!--mini cart end-->

    <!--header bottom satrt-->
    <div class="header_bottom bottom_four sticky-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="main_menu header_position">
                        <nav>
                            <ul>
                                <li><a href="index.html">home<i class="fa fa-angle-down"></i></a>
                                    <ul class="sub_menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                        <li><a href="index-5.html">Home 5</a></li>
                                        <li><a href="index-6.html">Home 6</a></li>
                                        <li class="home7new"><a href="index-7.html">Home 7</a><span>new</span></li>
                                    </ul>
                                </li>
                                <li class="mega_items"><a href="shop.html">shop<i class="fa fa-angle-down"></i></a>
                                    <div class="mega_menu">
                                        <ul class="mega_menu_inner">
                                            <li><a href="#">Shop Layouts</a>
                                                <ul>
                                                    <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                    <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                    <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                    <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a>
                                                    </li>
                                                    <li><a href="shop-list.html">List View</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">other Pages</a>
                                                <ul>
                                                    <li><a href="cart.html">cart</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="my-account.html">my account</a></li>
                                                    <li><a href="404.html">Error 404</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Product Types</a>
                                                <ul>
                                                    <li><a href="product-details.html">product details</a></li>
                                                    <li><a href="product-sidebar.html">product sidebar</a></li>
                                                    <li><a href="product-grouped.html">product grouped</a></li>
                                                    <li><a href="variable-product.html">product variable</a></li>

                                                </ul>
                                            </li>
                                            <li><a href="#">Concrete Tools</a>
                                                <ul>
                                                    <li><a href="shop.html">Cables & Connectors</a></li>
                                                    <li><a href="shop-list.html">Graphics Tablets</a></li>
                                                    <li><a href="shop-fullwidth.html">Printers, Ink & Toner</a></li>
                                                    <li><a href="shop-fullwidth-list.html">Refurbished Tablets</a></li>
                                                    <li><a href="shop-right-sidebar.html">Optical Drives</a></li>

                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="banner_static_menu">
                                            <a href="shop.html"><img src="assets/img/bg/banner1.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="blog.html">blog<i class="fa fa-angle-down"></i></a>
                                    <ul class="sub_menu pages">
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub_menu pages">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="services.html">services</a></li>
                                        <li><a href="faq.html">Frequently Questions</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="compare.html">compare</a></li>
                                        <li><a href="privacy-policy.html">privacy policy</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">about Us</a></li>
                                <li><a href="contact.html"> Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--header bottom end-->
</header>
<!--header area end-->


<!--Offcanvas menu area start-->
<div class="off_canvars_overlay"></div>
<div class="Offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <span>MENU</span>
                    <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                </div>
                <div class="Offcanvas_menu_wrapper">

                    <div class="canvas_close">
                        <a href="#"><i class="ion-android-close"></i></a>
                    </div>


                    <div class="top_right text-end">
                        <ul>
                            <li class="top_links"><a href="#"><i class="ion-android-person"></i> My Account<i
                                        class="ion-ios-arrow-down"></i></a>
                                <ul class="dropdown_links">
                                    <li><a href="checkout.html">Checkout </a></li>
                                    <li><a href="my-account.html">My Account </a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                </ul>
                            </li>
                            <li class="language"><a href="#"><img src="assets/img/logo/language.png" alt="">en-gb<i
                                        class="ion-ios-arrow-down"></i></a>
                                <ul class="dropdown_language">
                                    <li><a href="#"><img src="assets/img/logo/language.png" alt=""> English</a></li>
                                    <li><a href="#"><img src="assets/img/logo/language2.png" alt=""> Germany</a></li>
                                </ul>
                            </li>
                            <li class="currency"><a href="#">$ USD<i class="ion-ios-arrow-down"></i></a>
                                <ul class="dropdown_currency">
                                    <li><a href="#">EUR – Euro</a></li>
                                    <li><a href="#">GBP – British Pound</a></li>
                                    <li><a href="#">INR – India Rupee</a></li>
                                </ul>
                            </li>


                        </ul>
                    </div>
                    <div class="Offcanvas_follow">
                        <label>Follow Us:</label>
                        <ul class="follow_link">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                        </ul>
                    </div>
                    <div class="search-container">
                        <form action="#">
                            <div class="search_box">
                                <input placeholder="Search entire store here ..." type="text">
                                <button type="submit"><i class="ion-ios-search-strong"></i></button>
                            </div>
                        </form>
                    </div>
                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children">
                                <a href="#">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home 1</a></li>
                                    <li><a href="index-2.html">Home 2</a></li>
                                    <li><a href="index-3.html">Home 3</a></li>
                                    <li><a href="index-4.html">Home 4</a></li>
                                    <li><a href="index-5.html">Home 5</a></li>
                                    <li><a href="index-6.html">Home 6</a></li>
                                    <li><a href="index-7.html">Home 7</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Shop</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">Shop Layouts</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop.html">shop</a></li>
                                            <li><a href="shop-fullwidth.html">Full Width</a></li>
                                            <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                            <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                            <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                            <li><a href="shop-list.html">List View</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">other Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="cart.html">cart</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="my-account.html">my account</a></li>
                                            <li><a href="404.html">Error 404</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Product Types</a>
                                        <ul class="sub-menu">
                                            <li><a href="product-details.html">product details</a></li>
                                            <li><a href="product-sidebar.html">product sidebar</a></li>
                                            <li><a href="product-grouped.html">product grouped</a></li>
                                            <li><a href="variable-product.html">product variable</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">blog</a></li>
                                    <li><a href="blog-details.html">blog details</a></li>
                                    <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                    <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                </ul>

                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">pages </a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="services.html">services</a></li>
                                    <li><a href="faq.html">Frequently Questions</a></li>
                                    <li><a href="login.html">login</a></li>
                                    <li><a href="compare.html">compare</a></li>
                                    <li><a href="privacy-policy.html">privacy policy</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="my-account.html">my account</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="about.html">About Us</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="contact.html"> Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--Offcanvas menu area end-->

<!--slider area start-->

@yield('banner')

<!--slider area end-->

@yield('content')
<!--footer area start-->
<!--banner area start-->
<section class="banner_area banner_static mb-50 d-flex align-items-center"
         data-bgimg="https://as2.ftcdn.net/v2/jpg/03/98/40/63/1000_F_398406350_TM01RxiN6Owk32GEgNLQQJ6LDag7PWOi.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner_text">
                    <h2>Automotive Led</h2>
                    <h1>Headlight Kits</h1>
                    <p>HVC brings you only the best quality headlight kits</p>
                    <a href="#" class="bg-dark text-white">Discover Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--banner area end-->
<footer class="footer_widgets">
    <div class="container">
        <div class="footer_top">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widgets_container contact_us">
                        <div class="footer_logo">
                            <a href="#"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <div class="footer_contact">
                            <p>We are a team of designers and developers that
                                create high quality Magento, Prestashop, Opencart...</p>
                            <p><span>Address</span> 4710-4890 Breckinridge St, UK Burlington, VT 05401</p>
                            <p><span>Need Help?</span>Call: <a href="tel:1-800-345-6789">1-800-345-6789</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widgets_container widget_menu">
                        <h3>Information</h3>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="privacy-policy.html">privacy policy</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Gift Certificates</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widgets_container widget_menu">
                        <h3>Extras</h3>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Order History</a></li>
                                <li><a href="wishlist.html">Wish List</a></li>
                                <li><a href="#">Newsletter</a></li>
                                <li><a href="#">Affiliate</a></li>
                                <li><a href="#">Specials</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="widgets_container">
                        <h3>Newsletter Subscribe</h3>
                        <p>We’ll never share your email address with a third-party.</p>
                        <div class="subscribe_form">
                            <form id="mc-form" class="mc-form footer-newsletter">
                                <input id="mc-email" type="email" autocomplete="off"
                                       placeholder="Enter you email address here..."/>
                                <button id="mc-submit">Subscribe</button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div><!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright_area">
                        <p>Copyright &copy; 2021 <a href="#">Autima</a> All Right Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="footer_payment text-right">
                        <a href="#"><img src="assets/img/icon/payment.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer area end-->

<!-- modal area start-->
<div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

            <div class="modal_body">
                <div class="container">
                    <div class="row viewDetail_ajax">

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- modal area end-->

@include('client.templates.script')
@yield('script-page')

</body>


<!-- Mirrored from htmldemo.net/autima/autima/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jul 2023 03:13:57 GMT -->
</html>
