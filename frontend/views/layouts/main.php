<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="cms-index-index cms-home-page">
<?php $this->beginBody() ?>




<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- mobile menu -->
<div id="mobile-menu">
    <ul>
        <li><a href="index.html" class="home1">Home Pages</a>
            <ul>
                <li><a href="index.html"><span>Home Version 1</span></a></li>
                <li><a href="version2/index.html"><span>Home Version 2</span></a></li>
                <li><a href="version3/index.html"><span>Home Version 3</span></a></li>
                <li><a href="version4/index.html"><span>Home Version 4</span></a></li>
                <li><a href="../version1rtl/index.html"><span>Home Version 1 RTL</span></a></li>


            </ul>
        </li>
        <li><a href="#">Pages</a>
            <ul>
                <li><a href="#">Shop Pages </a>
                    <ul>
                        <li><a href="shop_grid.html"><span>Grid View Category Page</span></a></li>
                        <li><a href="shop_grid_full_width.html"><span>Grid View Full Width</span></a></li>
                        <li><a href="shop_list.html"><span>List View Category Page</span></a></li>
                        <li><a href="single_product.html"><span>Full Width Product Page</span> </a></li>
                        <li><a href="single_product_sidebar.html"><span>Product Page With Sidebar</span> </a></li>
                        <li><a href="single_product_magnify_zoom.html"><span>Product Page Magnify Zoom</span> </a></li>
                        <li><a href="shopping_cart.html"><span>Shopping Cart</span></a></li>
                        <li><a href="wishlist.html"><span>Wishlist</span></a></li>
                        <li><a href="compare.html"><span>Compare Products</span></a></li>
                        <li><a href="checkout.html"><span>Checkout</span></a></li>
                        <li><a href="sitemap.html"><span>Sitemap</span></a></li>
                    </ul>
                </li>
                <li><a href="#">Static Pages </a>
                    <ul>
                        <li><a href="about_us.html"><span>About Us</span></a></li>
                        <li><a href="contact_us.html"><span>Contact Us</span></a></li>
                        <li><a href="orders_list.html"><span>Orders List</span></a></li>
                        <li><a href="order_details.html"><span>Order Details</span></a></li>
                        <li><a href="404error.html"><span>404 Error</span> </a></li>
                        <li><a href="faq.html"><span>FAQ Page</span></a></li>
                        <li><a href="manufacturers.html"><span>Manufacturers</span></a></li>
                        <li><a href="quick_view.html"><span>Quick View</span></a></li>
                        <li><a href="dashboard.html"><span>Account Dashboard</span></a></li>
                        <li><a href="shortcodes.html"><span>Shortcodes</span> </a></li>
                        <li><a href="typography.html"><span>Typography</span></a></li>
                    </ul>
                </li>
                <li><a href="#"> Blog Pages </a>
                    <ul>
                        <li><a href="blog_right_sidebar.html">Blog – Right sidebar </a></li>
                        <li><a href="blog_left_sidebar.html">Blog – Left sidebar </a></li>
                        <li><a href="blog_full_width.html">Blog - Full width</a></li>
                        <li><a href="blog_single_post.html">Single post </a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="blog.html">Blog</a>
            <ul>
                <li><a href="blog_right_sidebar.html"> Blog – Right Sidebar </a></li>
                <li><a href="blog_left_sidebar.html"> Blog – Left Sidebar </a></li>
                <li><a href="blog_full_width.html"> Blog – Full-Width </a></li>
                <li><a href="blog_single_post.html"> Single post </a></li>
            </ul>
        </li>
        <li><a href="shop_grid.html">TV &amp; Audio</a>
            <ul>
                <li><a href="#" class="">Headphones</a>
                    <ul>
                        <li><a href="shop_grid.html">Receivers &amp; Amplifier</a></li>
                        <li><a href="shop_grid.html">Speakers Sports</a></li>
                        <li><a href="shop_grid.html">Audio CD Players</a></li>
                        <li><a href="shop_grid.html">Turntables</a></li>
                    </ul>
                </li>
                <li><a href="#">Gaming Headsets</a>
                    <ul>
                        <li><a href="shop_grid.html">Accessories</a></li>
                        <li><a href="shop_grid.html">Smart TVs Speakers</a></li>
                        <li><a href="shop_grid.html">Cases &amp; Towers</a></li>
                        <li><a href="shop_grid.html">Gaming Budget</a></li>
                    </ul>
                </li>
                <li><a href="#">Home Theater Systems</a>
                    <ul>
                        <li><a href="shop_grid.html">TV &amp; Cinema</a></li>
                        <li><a href="shop_grid.html">4K Ultra HD TVs</a></li>
                        <li><a href="shop_grid.html">Curved TVs</a></li>
                        <li><a href="shop_grid.html">Sound Bars</a></li>
                    </ul>
                </li>
                <li><a href="#">Appliances</a>
                    <ul>
                        <li><a href="shop_grid.html">Refrigerators</a></li>
                        <li><a href="shop_grid.html">Vacuum Cleaners</a></li>
                        <li><a href="shop_grid.html">Irons &amp; Steamers</a></li>
                        <li><a href="shop_grid.html">Washers Dryers</a></li>
                    </ul>
                </li>
                <li><a href="#">Photo &amp; Camera</a>
                    <ul>
                        <li><a href="shop_grid.html">Cameras Digital SLR</a></li>
                        <li><a href="shop_grid.html">Instant Film</a></li>
                        <li><a href="shop_grid.html">Point &amp; Shoot</a></li>
                        <li><a href="shop_grid.html">Waterproof</a></li>
                    </ul>
                </li>
                <li><a href="#">Accessories</a>
                    <ul>
                        <li><a href="shop_grid.html">Cables Chargers</a></li>
                        <li><a href="shop_grid.html">Cases Backup Battery</a></li>
                        <li><a href="shop_grid.html">Meebox</a></li>
                        <li><a href="shop_grid.html">Packs Screen</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="shop_grid.html">Apple Store</a>
            <ul>
                <li><a href="#" class="">Notebooks</a>
                    <ul class="level1">
                        <li><a href="shop_grid.html">Gradiente</a></li>
                        <li><a href="shop_grid.html">Samsung</a></li>
                        <li><a href="shop_grid.html">Toshiba</a></li>
                        <li><a href="shop_grid.html">Nintendo DS</a></li>
                    </ul>
                </li>
                <li><a href="#">Televisions</a>
                    <ul class="level1">
                        <li><a href="shop_grid.html">LCD Televisions</a></li>
                        <li><a href="shop_grid.html">Projection Televisions</a></li>
                        <li><a href="shop_grid.html">Play Stations</a></li>
                        <li><a href="shop_grid.html">Video Accessories</a></li>
                    </ul>
                </li>
                <li><a href="#" class="">Computer</a>
                    <ul class="level1">
                        <li><a href="shop_grid.html">Laptop</a></li>
                        <li><a href="shop_grid.html">Mobile Electronics</a></li>
                        <li><a href="shop_grid.html">Movies &amp; Music</a></li>
                        <li><a href="shop_grid.html">Audio &amp; Video</a></li>
                    </ul>
                </li>
                <li><a href="#">Home Theater</a>
                    <ul class="level1">
                        <li><a href="shop_grid.html">LED &amp; LCD TVs</a></li>
                        <li><a href="shop_grid.html">Smart TVs</a></li>
                        <li><a href="shop_grid.html">Speakers Sound Bars</a></li>
                        <li><a href="shop_grid.html">Audio CD Players</a></li>
                    </ul>
                </li>
                <li><a href="#">Accesories</a>
                    <ul class="level1">
                        <li><a href="shop_grid.html">Theater Systems</a></li>
                        <li><a href="shop_grid.html">Turntables</a></li>
                        <li><a href="shop_grid.html">Laptops Bags</a></li>
                        <li><a href="shop_grid.html">Gaming Headsets</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="shop_grid.html">Photo &amp; Camera</a>
            <ul>
                <li><a href="shop_grid.html">Mobiles</a>
                    <ul>
                        <li><a href="shop_grid.html">iPhone</a></li>
                        <li><a href="shop_grid.html">Samsung</a></li>
                        <li><a href="shop_grid.html">Nokia</a></li>
                        <li><a href="shop_grid.html">Sony</a></li>
                    </ul>
                </li>
                <li><a href="shop_grid.html" class="">Music &amp; Audio</a>
                    <ul>
                        <li><a href="shop_grid.html">Audio</a></li>
                        <li><a href="shop_grid.html">Cameras</a></li>
                        <li><a href="shop_grid.html">Appling</a></li>
                        <li><a href="shop_grid.html">Car Music</a></li>
                    </ul>
                </li>
                <li><a href="shop_grid.html">Accessories</a>
                    <ul>
                        <li><a href="shop_grid.html">Home &amp; Office</a></li>
                        <li><a href="shop_grid.html">TV &amp; Home Theater</a></li>
                        <li><a href="shop_grid.html">Phones &amp; Radio</a></li>
                        <li><a href="shop_grid.html">All Electronics</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="shop_grid.html">Smartphone</a></li>
        <li><a href="shop_grid.html">Games &amp; Video</a></li>
        <li><a href="shop_grid.html">Laptop</a></li>
        <li><a href="shop_grid.html">Accessories</a></li>
    </ul>
</div>
<!-- end mobile menu -->
<div id="page">

    <!-- Header -->
    <header>
        <div class="header-container">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-xs-12">
                            <!-- Default Welcome Message -->
                            <div class="welcome-msg hidden-xs hidden-sm">Default welcome msg! </div>
                            <!-- Language &amp; Currency wrapper -->
                            <div class="language-currency-wrapper">
                                <div class="inner-cl">
                                    <div class="block block-language form-language">
                                        <div class="lg-cur"><span><img src="images/flag-default.jpg" alt="French"><span class="lg-fr">French</span><i class="fa fa-angle-down"></i></span></div>
                                        <ul>
                                            <li><a class="selected" href="#"><img src="images/flag-english.jpg" alt="english"><span>English</span></a></li>
                                            <li><a href="#"><img src="images/flag-default.jpg" alt="French"><span>French</span></a></li>
                                            <li><a href="#"><img src="images/flag-german.jpg" alt="German"><span>German</span></a></li>
                                            <li><a href="#"><img src="images/flag-brazil.jpg" alt="Brazil"><span>Brazil</span></a></li>
                                            <li><a href="#"><img src="images/flag-chile.jpg" alt="Chile"><span>Chile</span></a></li>
                                            <li><a href="#"><img src="images/flag-spain.jpg" alt="Spain"><span>Spain</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="block block-currency">
                                        <div class="item-cur"><span>USD</span><i class="fa fa-angle-down"></i></div>
                                        <ul>
                                            <li><a href="#"><span class="cur_icon">€</span>EUR</a></li>
                                            <li><a href="#"><span class="cur_icon">¥</span>JPY</a></li>
                                            <li><a class="selected" href="#"><span class="cur_icon">$</span>USD</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- top links -->
                        <div class="headerlinkmenu col-md-8 col-sm-8 col-xs-12"> <span class="phone  hidden-xs hidden-sm">Call Us: +123.456.789</span>
                            <ul class="links">
                                <li class="hidden-xs"><a title="Help Center" href="#"><span>Help Center</span></a></li>
                                <li><a title="Store Locator" href="#"><span>Store Locator</span></a></li>
                                <li><a title="Checkout" href="checkout.html"><span>Checkout</span></a></li>
                                <li>
                                    <div class="dropdown"><a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>My Account</span> <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="account_page.html">Account</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="orders_list.html">Order Tracking</a></li>
                                            <li><a href="about_us.html">About us</a></li>
                                            <li class="divider"></li>
                                            <li><a href="account_page.html">Log In</a></li>
                                            <li><a href="register_page.html">Register</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a title="login" href="account_page.html"><span>Login</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header inner -->
            <div class="header-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-xs-12 jtv-logo-block">

                            <!-- Header Logo -->
                            <div class="logo"><a title="e-commerce" href="index.html"><img alt="ShopMart" title="ShopMart" src="images/logo.png"></a> </div>
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-6 jtv-top-search">

                            <!-- Search -->

                            <div class="top-search">
                                <div id="search">
                                    <form>
                                        <div class="input-group">
                                            <select class="cate-dropdown hidden-xs hidden-sm" name="category_id">
                                                <option>All Categories</option>
                                                <option>women</option>
                                                <option>&nbsp;&nbsp;&nbsp;Chair </option>
                                                <option>&nbsp;&nbsp;&nbsp;Decoration</option>
                                                <option>&nbsp;&nbsp;&nbsp;Lamp</option>
                                                <option>&nbsp;&nbsp;&nbsp;Handbags </option>
                                                <option>&nbsp;&nbsp;&nbsp;Sofas </option>
                                                <option>&nbsp;&nbsp;&nbsp;Essential </option>
                                                <option>Men</option>
                                                <option>Electronics</option>
                                                <option>&nbsp;&nbsp;&nbsp;Mobiles </option>
                                                <option>&nbsp;&nbsp;&nbsp;Music &amp; Audio </option>
                                            </select>
                                            <input type="text" class="form-control" placeholder="Enter your search..." name="search">
                                            <button class="btn-search" type="button"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- End Search -->

                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3 top-cart">
                            <div class="link-wishlist"> <a href="#"> <i class="icon-heart icons"></i><span> Wishlist</span></a> </div>
                            <!-- top cart -->
                            <div class="top-cart-contain">
                                <div class="mini-cart">
                                    <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="#">
                                            <div class="cart-icon"><i class="icon-basket-loaded icons"></i><span class="cart-total">3</span></div>
                                            <div class="shoppingcart-inner hidden-xs"><span class="cart-title">My Cart</span> </div>
                                        </a></div>
                                    <div>
                                        <div class="top-cart-content">
                                            <div class="block-subtitle hidden">Recently added items</div>
                                            <ul id="cart-sidebar" class="mini-products-list">
                                                <li class="item odd"> <a href="shopping_cart.html" title="Product title here" class="product-image"><img src="images/products/product-9.jpg" alt="html Template" width="65"></a>
                                                    <div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="pe-7s-trash"></i></a>
                                                        <p class="product-name"><a href="shopping_cart.html">Lorem ipsum dolor sit amet Consectetur</a> </p>
                                                        <strong>1</strong> x <span class="price">$20.00</span> </div>
                                                </li>
                                                <li class="item even"> <a href="shopping_cart.html" title="Product title here" class="product-image"><img src="images/products/product-11.jpg" alt="html Template" width="65"></a>
                                                    <div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="pe-7s-trash"></i></a>
                                                        <p class="product-name"><a href="shopping_cart.html">Consectetur utes anet adipisicing elit</a> </p>
                                                        <strong>1</strong> x <span class="price">$230.00</span> </div>
                                                </li>
                                                <li class="item last odd"> <a href="shopping_cart.html" title="Product title here" class="product-image"><img src="images/products/product-10.jpg" alt="html Template" width="65"></a>
                                                    <div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="pe-7s-trash"></i></a>
                                                        <p class="product-name"><a href="shopping_cart.html">Sed do eiusmod tempor incidist</a> </p>
                                                        <strong>2</strong> x <span class="price">$420.00</span> </div>
                                                </li>
                                            </ul>
                                            <div class="top-subtotal">Subtotal: <span class="price">$520.00</span></div>
                                            <div class="actions">
                                                <button class="btn-checkout" type="button" onClick="location.href='checkout.html'"><i class="fa fa-check"></i><span>Checkout</span></button>
                                                <button class="view-cart" type="button" onClick="location.href='shopping_cart.html'"><i class="fa fa-shopping-cart"></i><span>View Cart</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <nav>
        <div class="container">
            <div class="row">
                <div class="mm-toggle-wrap">
                    <div class="mm-toggle"><i class="fa fa-align-justify"></i> </div>
                    <span class="mm-label">All Categories</span> </div>
                <div class="col-md-3 col-sm-3 mega-container hidden-xs">
                    <div class="navleft-container">
                        <div class="mega-menu-title">
                            <h3><span>All Categories</span></h3>
                        </div>

                        <!-- Shop by category -->
                        <div class="mega-menu-category">
                            <ul class="nav">
                               <?= \common\components\CategoryWidget::widget(['tpl'=>'menu'])?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 jtv-megamenu">
                    <div class="mtmegamenu">
                        <ul class="hidden-xs">
                            <li class="mt-root demo_custom_link_cms">
                                <div class="mt-root-item"><a href="index.html">
                                        <div class="title title_font"><span class="title-text">Home</span></div>
                                    </a></div>
                                <ul class="menu-items col-md-3 col-sm-4 col-xs-12">
                                    <li class="menu-item depth-1">
                                        <div class="title"> <a href="index.html"><span>Home Version 1</span></a></div>
                                    </li>
                                    <li class="menu-item depth-1">
                                        <div class="title"> <a href="version2/index.html"><span>Home Version 2</span></a></div>
                                    </li>
                                    <li class="menu-item depth-1">
                                        <div class="title"> <a href="version3/index.html"><span>Home Version 3</span></a></div>
                                    </li>
                                    <li class="menu-item depth-1">
                                        <div class="title"> <a href="version4/index.html"><span>Home Version 4</span></a></div>
                                    </li>
                                    <li class="menu-item depth-1">
                                        <div class="title"> <a href="../version1rtl/index.html"><span>Home Version 1 RTL</span></a></div>
                                    </li>


                                </ul>
                            </li>
                            <li class="mt-root">
                                <div class="mt-root-item"><a href="#">
                                        <div class="title title_font"><span class="title-text">Categories</span></div>
                                    </a></div>
                                <ul class="menu-items col-xs-12">
                                    <li class="menu-item depth-1 menucol-1-3 ">
                                        <div class="title title_font"> <a href="#">Fashion</a></div>
                                        <ul class="submenu">
                                            <li class="menu-item">
                                                <div class="title"> <a href="shop_grid.html">Women</a></div>
                                            </li>
                                            <li class="menu-item">
                                                <div class="title"> <a href="shop_grid.html">Men</a></div>
                                            </li>
                                            <li class="menu-item">
                                                <div class="title"> <a href="shop_grid.html">Kids</a></div>
                                            </li>
                                            <li class="menu-item">
                                                <div class="title"> <a href="shop_grid.html">Clothings</a></div>
                                            </li>
                                            <li class="menu-item">
                                                <div class="title"> <a href="shop_grid.html">Shoes</a></div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item depth-1 menucol-1-3 ">
                                        <div class="title title_font"> <a href="#">Electronics </a></div>
                                        <ul class="submenu">
                                            <li class="menu-item">
                                                <div class="title"> <a href="shop_grid.html">Mobiles</a></div>
                                            </li>
                                            <li class="menu-item">
                                                <div class="title"> <a href="shop_grid.html">Computers</a></div>
                                            </li>
                                            <li class="menu-item">
                                                <div class="title"> <a href="shop_grid.html">Headphones</a></div>
                                            </li>
                                            <li class="menu-item">
                                                <div class="title"> <a href="shop_grid.html">Laptops</a></div>
                                            </li>
                                            <li class="menu-item">
                                                <div class="title"> <a href="shop_grid.html">Appliances</a></div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item depth-1 menucol-1-3 ">
                                        <div class="title title_font"> <a href="#">Beauty & Health</a></div>
                                        <ul class="submenu">
                                            <li class="menu-item depth-2 category ">
                                                <div class="title"> <a href="shop_grid.html">Face Care</a></div>
                                            </li>
                                            <li class="menu-item">
                                                <div class="title"> <a href="shop_grid.html">Skin Care</a></div>
                                            </li>
                                            <li class="menu-item">
                                                <div class="title"> <a href="shop_grid.html">Minerals</a></div>
                                            </li>
                                            <li class="menu-item">
                                                <div class="title"> <a href="shop_grid.html">Body Care</a></div>
                                            </li>
                                            <li class="menu-item">
                                                <div class="title"> <a href="shop_grid.html">Cosmetic</a></div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="mt-root">
                                <div class="mt-root-item"><a href="shop_grid.html">
                                        <div class="title title_font"><span class="title-text">New Arrivals</span> </div>
                                    </a></div>
                            </li>
                            <li class="mt-root">
                                <div class="mt-root-item"><a href="about_us.html">
                                        <div class="title title_font"><span class="title-text">Lookbook</span></div>
                                    </a></div>
                            </li>
                            <li class="mt-root demo_custom_link_cms">
                                <div class="mt-root-item"><a href="blog.html">
                                        <div class="title title_font"><span class="title-text">Blog</span></div>
                                    </a></div>
                                <ul class="menu-items col-md-3 col-sm-4 col-xs-12" style="top: 28px; left: 402.531px;">
                                    <li class="menu-item depth-1">
                                        <div class="title"> <a href="blog_right_sidebar.html"> Blog – Right Sidebar </a></div>
                                    </li>
                                    <li class="menu-item depth-1">
                                        <div class="title"> <a href="blog_left_sidebar.html"> Blog – Left Sidebar </a></div>
                                    </li>
                                    <li class="menu-item depth-1">
                                        <div class="title"> <a href="blog_full_width.html"> Blog – Full-Width </a></div>
                                    </li>
                                    <li class="menu-item depth-1">
                                        <div class="title"> <a href="blog_single_post.html"> Single post </a></div>
                                    </li>
                                </ul>
                            </li>
                            <li class="mt-root">
                                <div class="mt-root-item">
                                    <div class="title title_font"><span class="title-text">Best Seller</span></div>
                                </div>
                                <ul class="menu-items col-xs-12">
                                    <li class="menu-item depth-1 product menucol-1-3 withimage">
                                        <div class="product-item">
                                            <div class="item-inner">
                                                <div class="product-thumbnail">
                                                    <div class="icon-sale-label sale-left">Sale</div>
                                                    <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                            <figure> <img class="first-img" src="images/products/product-5.jpg" alt="html Template"> <img class="hover-img" src="images/products/product-6.jpg" alt="html Template"></figure>
                                                        </a> </div>
                                                    <div class="pr-info-area">
                                                        <div class="pr-button">
                                                            <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                                            <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                                            <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                            </div>
                                                            <div class="pro-action">
                                                                <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item depth-1 product menucol-1-3 withimage">
                                        <div class="product-item">
                                            <div class="item-inner">
                                                <div class="product-thumbnail">
                                                    <div class="icon-sale-label sale-left">Sale</div>
                                                    <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                            <figure> <img class="first-img" src="images/products/product-1.jpg" alt="html Template"> <img class="hover-img" src="images/products/product-2.jpg" alt="html Template"></figure>
                                                        </a> </div>
                                                    <div class="pr-info-area">
                                                        <div class="pr-button">
                                                            <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                                            <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                                            <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                            </div>
                                                            <div class="pro-action">
                                                                <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item depth-1 product menucol-1-3 withimage">
                                        <div class="product-item">
                                            <div class="item-inner">
                                                <div class="icon-sale-label sale-left">Sale</div>
                                                <div class="icon-new-label new-right">New</div>
                                                <div class="product-thumbnail">
                                                    <div class="icon-sale-label sale-left">Sale</div>
                                                    <div class="pr-img-area"> <a title="Product title here" href="single_product.html">
                                                            <figure> <img class="first-img" src="images/products/product-3.jpg" alt="html Template"> <img class="hover-img" src="images/products/product-4.jpg" alt="html Template"></figure>
                                                        </a> </div>
                                                    <div class="pr-info-area">
                                                        <div class="pr-button">
                                                            <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                                            <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                                            <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Product title here" href="single_product.html">Product title here </a> </div>
                                                        <div class="item-content">
                                                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                            </div>
                                                            <div class="pro-action">
                                                                <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="https://Templateforest.net/item/shopmart-electronic-digital-store-ecommerce-html-templates/20477712?s_rank=9">Buy this Template</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <?=$content; ?>

    <div class="footer-newsletter">
        <div class="container">
            <div class="row">
                <!-- Newsletter -->
                <div class="col-md-6 col-sm-6">
                    <form id="newsletter-validate-detail" method="post" action="#">
                        <h3>Join Our Newsletter</h3>
                        <div class="title-divider"><span></span></div>
                        <p class="sub-title text-center">Get 25% off</p>
                        <div class="newsletter-inner">
                            <input class="newsletter-email" name='Email' placeholder='Enter Your Email'/>
                            <button class="button subscribe" type="submit" title="Subscribe">Subscribe</button>
                        </div>
                    </form>
                </div>
                <!-- Customers Box -->
                <div class="col-sm-6 col-xs-12 testimonials">
                    <div class="page-header">
                        <h2>What Our Customers Say</h2>
                    </div>
                    <div class="slider-items-products">
                        <div id="testimonials-slider" class="product-flexslider hidden-buttons home-testimonials">
                            <div class="slider-items slider-width-col4 ">
                                <div class="holder">
                                    <blockquote>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip volutpat.
                                        Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel.</blockquote>
                                    <div class="thumb"> <img src="images/testimonials-img3.jpg" alt="testimonials img"> </div>
                                    <div class="holder-info"> <strong class="name">John Doe</strong> <strong class="designation">CEO, Company</strong></div>
                                </div>
                                <div class="holder">
                                    <blockquote>Lorem ipsum dolor sit ame consetur adipisicing elit. Voluptate, consetur adipisicing elit.Lorem ipsum dolor sit ame consetur adipisicing elit.Lorem ipsum dolor sit ame consetur adipisicing elit. Voluptate, consetur adipisicing elit.</blockquote>
                                    <div class="thumb"> <img src="images/testimonials-img1.jpg" alt="testimonials img"> </div>
                                    <div class="holder-info"> <strong class="name">Vince Roy</strong> <strong class="designation">CEO, Newspaper</strong> </div>
                                </div>
                                <div class="holder">
                                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim. Donec sit amet eros. Cras feugiat luctus nulla vitae posuere. Suspendisse potenti. </blockquote>
                                    <div class="thumb"> <img src="images/testimonials-img2.jpg" alt="testimonials img"> </div>
                                    <div class="holder-info"><strong class="name">John Doe</strong> <strong class="designation">CEO, ABC Softwear</strong></div>
                                </div>
                                <div class="holder">
                                    <blockquote>Aliquam erat volutpat. Sed do eiusmod tempor incididunt Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget. Donec sit amet eros. Nulla non ornare nisi, sed condimentum lorem. Morbi sed vehicula magna.</blockquote>
                                    <div class="thumb"> <img src="images/testimonials-img4.jpg" alt="testimonials img"> </div>
                                    <div class="holder-info"> <strong class="name">Vince Roy</strong> <strong class="designation">CEO, XYZ Softwear</strong></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 col-xs-12">
                    <div class="footer-logo"><a href="index.html"><img src="images/footer-logo.png" alt="fotter logo"></a> </div>
                    <p>Lorem Ipsum is simply dummy text of the print and typesetting industry. Ut pharetra augue nec augue. Nam elit agna, endrerit sit amet.</p>
                    <div class="social">
                        <ul class="inline-mode">
                            <li class="social-network fb"><a title="Connect us on Facebook" target="_blank" href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-network googleplus"><a title="Connect us on Google+" target="_blank" href="https://plus.google.com"><i class="fa fa-google"></i></a></li>
                            <li class="social-network tw"><a title="Connect us on Twitter" target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-network linkedin"><a title="Connect us on Pinterest" target="_blank" href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
                            <li class="social-network rss"><a title="Connect us on Instagram" target="_blank" href="https://instagram.com/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2 col-xs-12 collapsed-block">
                    <div class="footer-links">
                        <h3 class="links-title">Information<a class="expander visible-xs" href="#TabBlock-1">+</a></h3>
                        <div class="tabBlock" id="TabBlock-1">
                            <ul class="list-links list-unstyled">
                                <li><a href="#s">Delivery Information</a></li>
                                <li><a href="#">Discount</a></li>
                                <li><a href="sitemap.html">Sitemap</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="faq.html">FAQs</a></li>
                                <li><a href="#">Terms &amp; Condition</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-2 col-xs-12 collapsed-block">
                    <div class="footer-links">
                        <h3 class="links-title">Insider<a class="expander visible-xs" href="#TabBlock-3">+</a></h3>
                        <div class="tabBlock" id="TabBlock-3">
                            <ul class="list-links list-unstyled">
                                <li><a href="sitemap.html"> Sites Map </a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Trends</a></li>
                                <li><a href="about_us.html">About Us</a></li>
                                <li><a href="contact_us.html">Contact Us</a></li>
                                <li><a href="#">My Orders</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-2 col-xs-12 collapsed-block">
                    <div class="footer-links">
                        <h3 class="links-title">Service<a class="expander visible-xs" href="#TabBlock-4">+</a></h3>
                        <div class="tabBlock" id="TabBlock-4">
                            <ul class="list-links list-unstyled">
                                <li><a href="account_page.html">Account</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="shopping_cart.html">Shopping Cart</a></li>
                                <li><a href="#">Return Policy</a></li>
                                <li><a href="#">Special</a></li>
                                <li><a href="#">Lookbook</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 collapsed-block">
                    <div class="footer-links">
                        <h3 class="links-title">Working hours<a class="expander visible-xs" href="#TabBlock-5">+</a></h3>
                        <div class="tabBlock" id="TabBlock-5">
                            <div class="footer-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</div>
                            <div class="footer-description"> <b>Monday-Friday:</b> 8.30 a.m. - 5.30 p.m.<br>
                                <b>Saturday:</b> 9.00 a.m. - 2.00 p.m.<br>
                                <b>Sunday:</b> Closed </div>
                            <div class="payment">
                                <ul>
                                    <li><a href="#"><img title="Visa" alt="Visa" src="images/visa.png"></a></li>
                                    <li><a href="#"><img title="Paypal" alt="Paypal" src="images/paypal.png"></a></li>
                                    <li><a href="#"><img title="Discover" alt="Discover" src="images/discover.png"></a></li>
                                    <li><a href="#"><img title="Master Card" alt="Master Card" src="images/master-card.png"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-coppyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12 coppyright"> Copyright © 2017 <a href="#"> ShopMart </a>. All Rights Reserved. </div>
                    <div class="col-sm-6 col-xs-12">
                        <ul class="footer-company-links">
                            <li> <a href="about_us.html">About ShopMart</a> </li>
                            <li> <a href="#">Careers</a> </li>
                            <li> <a href="#">Privacy Policy</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a>

    <!-- End Footer -->
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
