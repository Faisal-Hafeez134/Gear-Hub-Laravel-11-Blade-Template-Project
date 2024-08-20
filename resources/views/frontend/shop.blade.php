@section('title', 'Shop')
@extends('frontend.layouts.main')



@section('main-container')

    <!--header area start-->
    <!--Offcanvas menu area start-->

    <!--sticky header area end-->

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{ url('/') }}">home</a></li>
                            <li>Camera & Video </li>
                            <li>shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shop  area start-->
    <div class="shop_area shop_reverse mt-60 mb-60">
        <div class="container">
            <div class="row">






                <div class="col-lg-3 col-md-12">
                    <!--sidebar widget start-->
                    <aside class="sidebar_widget">
                        <div class="widget_inner">
                            <div class="widget_list widget_categories">
                                <h2>Product categories</h2>
                                <ul>
                                    <li><a href="#">Cameras & Camcoders</a></li>
                                    <li class="widget_sub_categories"><a href="javascript:void(0)">Computer &
                                            Networking</a>
                                        <ul class="widget_dropdown_categories">
                                            <li><a href="#">Computer</a></li>
                                            <li><a href="#">Networking</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Games & Consoles</a></li>
                                    <li><a href="#">Headphone & Speaker</a></li>
                                    <li><a href="#">Movies & Video Games</a></li>
                                    <li><a href="#">Smartphone</a> </li>
                                    <li><a href="#">Uncategorized</a></li>
                                </ul>
                            </div>
                            <div class="widget_list widget_filter">
                                <h2>Filter by price</h2>
                                <form action="#">
                                    <div id="slider-range"></div>
                                    <button type="submit">Filter</button>
                                    <input type="text" name="text" id="amount" />

                                </form>
                            </div>
                            <div class="widget_list">
                                <h2>Compare Products</h2>
                                <div class="recent_product_container">
                                    <article class="recent_product_list">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.php"><img
                                                        src="frontend/img/product/product1.jpg" alt=""></a>
                                            </div>
                                            <div class="product_content">
                                                <h3><a href="product-details.php">Natus erro at congue</a></h3>
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="old_price">$70.00</span>
                                                    <span class="current_price">$65.00</span>
                                                </div>
                                            </div>
                                        </figure>
                                    </article>
                                    <article class="recent_product_list">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.php"><img
                                                        src="frontend/img/product/product2.jpg" alt=""></a>
                                            </div>
                                            <div class="product_content">
                                                <h3><a href="product-details.php">Auctor gravida enim</a></h3>
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="old_price">$70.00</span>
                                                    <span class="current_price">$65.00</span>
                                                </div>
                                            </div>
                                        </figure>
                                    </article>
                                    <article class="recent_product_list">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.php"><img
                                                        src="frontend/img/product/product24.jpg" alt=""></a>
                                            </div>
                                            <div class="product_content">
                                                <h3><a href="product-details.php">Cillum dolore tortor</a></h3>
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="old_price">$70.00</span>
                                                    <span class="current_price">$65.00</span>
                                                </div>
                                            </div>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="widget_list tags_widget">
                                <h2>Product tags</h2>
                                <div class="tag_cloud">
                                    <a href="#">blouse</a>
                                    <a href="#">clothes</a>
                                    <a href="#">fashion</a>
                                    <a href="#">handbag</a>
                                    <a href="#">laptop</a>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!--sidebar widget end-->
                </div>





                <div class="col-lg-9 col-md-12">
                    <!--shop wrapper start-->
                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">

                            <button data-role="grid_3" type="button" class="active btn-grid-3" data-bs-toggle="tooltip"
                                title="3"></button>

                            <button data-role="grid_4" type="button" class=" btn-grid-4" data-bs-toggle="tooltip"
                                title="4"></button>

                            <button data-role="grid_list" type="button" class="btn-list" data-bs-toggle="tooltip"
                                title="List"></button>
                        </div>
                        <div class=" niceselect_option">
                            <form class="select_option" action="#">
                                <select name="orderby" id="short">

                                    <option selected value="1">Sort by average rating</option>
                                    <option value="2">Sort by popularity</option>
                                    <option value="3">Sort by newness</option>
                                    <option value="4">Sort by price: low to high</option>
                                    <option value="5">Sort by price: high to low</option>
                                    <option value="6">Product Name: Z</option>
                                </select>
                            </form>
                        </div>
                        <div class="page_amount">
                            <p>Showing 1–9 of 21 results</p>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <div class="row shop_wrapper">











                         @foreach ($works as $work )


                        <div class="col-lg-4 col-md-4 col-12 ">

                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('/product-details'.$work->id)}}"><img
                                                src="{{url($work->image1)}}" alt=""></a>
                                        <a class="secondary_img" href="{{url('/product-details'.$work->id)}}"><img
                                                src="frontend/img/product/product2.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>

                                                <li class="compare"><a href="#" title="compare"><span
                                                            class="ion-levels"></span></a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modal_box" title="quick view"> <span
                                                            class="ion-ios-search-strong"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{url('/cart')}}" title="add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">{{$work->price}}</span>
                                        </div>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3 class="product_name grid_name"><a href="{{url('/product-details'.$work->id)}}">{{$work->product_name}}</a></h3>
                                    </div>
                                    <div class="product_content list_content">
                                        <div class="left_caption">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <h3 class="product_name"><a href="product-details.php">Natus erro at congue
                                                    massa commodo sit</a></h3>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco,Proin lectus
                                                    ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                            </div>
                                        </div>
                                        <div class="right_caption">
                                            <div class="add_to_cart">
                                                <a href="{{url('/cart')}}" title="add to cart">Add toaa cart</a>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.php"
                                                            title="Add to Wishlist"><i class="fa fa-heart-o"
                                                                aria-hidden="true"></i> Add to Wishlist</a></li>
                                                    <li class="compare"><a href="#" title="compare"><span
                                                                class="ion-levels"></span> Compare</a></li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span> Quick View</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        @endforeach














                        {{-- <div class="col-lg-4 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.php"><img
                                                src="frontend/img/product/product3.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.php"><img
                                                src="frontend/img/product/product4.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.php" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="compare"><a href="#" title="compare"><span
                                                            class="ion-levels"></span></a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modal_box" title="quick view"> <span
                                                            class="ion-ios-search-strong"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{url('/cart')}}" title="add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3 class="product_name grid_name"><a href="product-details.php">Auctor gravida
                                                enim pellentesque quam ut risus</a></h3>
                                    </div>
                                    <div class="product_content list_content">
                                        <div class="left_caption">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <h3 class="product_name"><a href="product-details.php">Auctor gravida enim
                                                    pellentesque quam ut risus</a></h3>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco,Proin lectus
                                                    ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                            </div>
                                        </div>
                                        <div class="right_caption">
                                            <div class="add_to_cart">
                                                <a href="{{url('/cart')}}" title="add to cart">Add to cart</a>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.php"
                                                            title="Add to Wishlist"><i class="fa fa-heart-o"
                                                                aria-hidden="true"></i> Add to Wishlist</a></li>
                                                    <li class="compare"><a href="#" title="compare"><span
                                                                class="ion-levels"></span> Compare</a></li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span> Quick View</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.php"><img
                                                src="frontend/img/product/product5.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.php"><img
                                                src="frontend/img/product/product6.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.php" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="compare"><a href="#" title="compare"><span
                                                            class="ion-levels"></span></a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modal_box" title="quick view"> <span
                                                            class="ion-ios-search-strong"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{url('/cart')}}" title="add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3 class="product_name grid_name"><a href="product-details.php">Auctor gravida
                                                enim pellentesque quam ut risus</a></h3>
                                    </div>
                                    <div class="product_content list_content">
                                        <div class="left_caption">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <h3 class="product_name"><a href="product-details.php">Auctor gravida enim
                                                    pellentesque quam ut risus</a></h3>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco,Proin lectus
                                                    ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                            </div>
                                        </div>
                                        <div class="right_caption">
                                            <div class="add_to_cart">
                                                <a href="{{url('/cart')}}" title="add to cart">Add to cart</a>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.php"
                                                            title="Add to Wishlist"><i class="fa fa-heart-o"
                                                                aria-hidden="true"></i> Add to Wishlist</a></li>
                                                    <li class="compare"><a href="#" title="compare"><span
                                                                class="ion-levels"></span> Compare</a></li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span> Quick View</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.php"><img
                                                src="frontend/img/product/product7.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.php"><img
                                                src="frontend/img/product/product8.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.php" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="compare"><a href="#" title="compare"><span
                                                            class="ion-levels"></span></a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modal_box" title="quick view"> <span
                                                            class="ion-ios-search-strong"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{url('/cart')}}" title="add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3 class="product_name grid_name"><a href="product-details.php">Cillum dolore
                                                tortor nisl fermentum quam</a></h3>
                                    </div>
                                    <div class="product_content list_content">
                                        <div class="left_caption">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <h3 class="product_name"><a href="product-details.php">Cillum dolore tortor
                                                    nisl fermentum quam</a></h3>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco,Proin lectus
                                                    ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                            </div>
                                        </div>
                                        <div class="right_caption">
                                            <div class="add_to_cart">
                                                <a href="{{url('/cart')}}" title="add to cart">Add to cart</a>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.php"
                                                            title="Add to Wishlist"><i class="fa fa-heart-o"
                                                                aria-hidden="true"></i> Add to Wishlist</a></li>
                                                    <li class="compare"><a href="#" title="compare"><span
                                                                class="ion-levels"></span> Compare</a></li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span> Quick View</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.php"><img
                                                src="frontend/img/product/product9.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.php"><img
                                                src="frontend/img/product/product10.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.php" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="compare"><a href="#" title="compare"><span
                                                            class="ion-levels"></span></a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modal_box" title="quick view"> <span
                                                            class="ion-ios-search-strong"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{url('/cart')}}" title="add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3 class="product_name grid_name"><a href="product-details.php">Condimentum
                                                posuere consectetur urna</a></h3>
                                    </div>
                                    <div class="product_content list_content">
                                        <div class="left_caption">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <h3 class="product_name"><a href="product-details.php">Condimentum posuere
                                                    consectetur urna</a></h3>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco,Proin lectus
                                                    ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                            </div>
                                        </div>
                                        <div class="right_caption">
                                            <div class="add_to_cart">
                                                <a href="{{url('/cart')}}" title="add to cart">Add to cart</a>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.php"
                                                            title="Add to Wishlist"><i class="fa fa-heart-o"
                                                                aria-hidden="true"></i> Add to Wishlist</a></li>
                                                    <li class="compare"><a href="#" title="compare"><span
                                                                class="ion-levels"></span> Compare</a></li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span> Quick View</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.php"><img
                                                src="frontend/img/product/product11.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.php"><img
                                                src="frontend/img/product/product12.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.php" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="compare"><a href="#" title="compare"><span
                                                            class="ion-levels"></span></a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modal_box" title="quick view"> <span
                                                            class="ion-ios-search-strong"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{url('/cart')}}" title="add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3 class="product_name grid_name"><a href="product-details.php">Cras neque
                                                metus eugiat felis sem</a></h3>
                                    </div>
                                    <div class="product_content list_content">
                                        <div class="left_caption">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <h3 class="product_name"><a href="product-details.php">Cras neque metus
                                                    eugiat felis sem</a></h3>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco,Proin lectus
                                                    ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                            </div>
                                        </div>
                                        <div class="right_caption">
                                            <div class="add_to_cart">
                                                <a href="{{url('/cart')}}" title="add to cart">Add to cart</a>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.php"
                                                            title="Add to Wishlist"><i class="fa fa-heart-o"
                                                                aria-hidden="true"></i> Add to Wishlist</a></li>
                                                    <li class="compare"><a href="#" title="compare"><span
                                                                class="ion-levels"></span> Compare</a></li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span> Quick View</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.php"><img
                                                src="frontend/img/product/product13.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.php"><img
                                                src="frontend/img/product/product14.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.php" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="compare"><a href="#" title="compare"><span
                                                            class="ion-levels"></span></a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modal_box" title="quick view"> <span
                                                            class="ion-ios-search-strong"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{url('/cart')}}" title="add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3 class="product_name grid_name"><a href="product-details.php">Donec tempus
                                                pretium arcu et faucibus commodo</a></h3>
                                    </div>
                                    <div class="product_content list_content">
                                        <div class="left_caption">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <h3 class="product_name"><a href="product-details.php">Donec tempus pretium
                                                    arcu et faucibus commodo</a></h3>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco,Proin lectus
                                                    ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                            </div>
                                        </div>
                                        <div class="right_caption">
                                            <div class="add_to_cart">
                                                <a href="{{url('/cart')}}" title="add to cart">Add to cart</a>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.php"
                                                            title="Add to Wishlist"><i class="fa fa-heart-o"
                                                                aria-hidden="true"></i> Add to Wishlist</a></li>
                                                    <li class="compare"><a href="#" title="compare"><span
                                                                class="ion-levels"></span> Compare</a></li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span> Quick View</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.php"><img
                                                src="frontend/img/product/product15.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.php"><img
                                                src="frontend/img/product/product16.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.php" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="compare"><a href="#" title="compare"><span
                                                            class="ion-levels"></span></a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modal_box" title="quick view"> <span
                                                            class="ion-ios-search-strong"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{url('/cart')}}" title="add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3 class="product_name grid_name"><a href="product-details.php">Duis pulvinar
                                                obortis eleifend elementum</a></h3>
                                    </div>
                                    <div class="product_content list_content">
                                        <div class="left_caption">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <h3 class="product_name"><a href="product-details.php">Duis pulvinar
                                                    obortis eleifend elementum</a></h3>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco,Proin lectus
                                                    ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                            </div>
                                        </div>
                                        <div class="right_caption">
                                            <div class="add_to_cart">
                                                <a href="{{url('/cart')}}" title="add to cart">Add to cart</a>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.php"
                                                            title="Add to Wishlist"><i class="fa fa-heart-o"
                                                                aria-hidden="true"></i> Add to Wishlist</a></li>
                                                    <li class="compare"><a href="#" title="compare"><span
                                                                class="ion-levels"></span> Compare</a></li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span> Quick View</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.php"><img
                                                src="frontend/img/product/product17.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.php"><img
                                                src="frontend/img/product/product18.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.php" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="compare"><a href="#" title="compare"><span
                                                            class="ion-levels"></span></a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modal_box" title="quick view"> <span
                                                            class="ion-ios-search-strong"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{url('/cart')}}" title="add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3 class="product_name grid_name"><a href="product-details.php">Epicuri per
                                                lobortis eleifend elementum viverra odio</a></h3>
                                    </div>
                                    <div class="product_content list_content">
                                        <div class="left_caption">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <h3 class="product_name"><a href="product-details.php">Epicuri per lobortis
                                                    eleifend elementum viverra odio</a></h3>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco,Proin lectus
                                                    ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                            </div>
                                        </div>
                                        <div class="right_caption">
                                            <div class="add_to_cart">
                                                <a href="{{url('/cart')}}" title="add to cart">Add to cart</a>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.php"
                                                            title="Add to Wishlist"><i class="fa fa-heart-o"
                                                                aria-hidden="true"></i> Add to Wishlist</a></li>
                                                    <li class="compare"><a href="#" title="compare"><span
                                                                class="ion-levels"></span> Compare</a></li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span> Quick View</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.php"><img
                                                src="frontend/img/product/product19.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.php"><img
                                                src="frontend/img/product/product20.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.php" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="compare"><a href="#" title="compare"><span
                                                            class="ion-levels"></span></a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modal_box" title="quick view"> <span
                                                            class="ion-ios-search-strong"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{url('/cart')}}" title="add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3 class="product_name grid_name"><a href="product-details.php">Natus erro at
                                                congue massa commodo sit</a></h3>
                                    </div>
                                    <div class="product_content list_content">
                                        <div class="left_caption">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <h3 class="product_name"><a href="product-details.php">Natus erro at congue
                                                    massa commodo sit</a></h3>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco,Proin lectus
                                                    ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                            </div>
                                        </div>
                                        <div class="right_caption">
                                            <div class="add_to_cart">
                                                <a href="{{url('/cart')}}" title="add to cart">Add to cart</a>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.php"
                                                            title="Add to Wishlist"><i class="fa fa-heart-o"
                                                                aria-hidden="true"></i> Add to Wishlist</a></li>
                                                    <li class="compare"><a href="#" title="compare"><span
                                                                class="ion-levels"></span> Compare</a></li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span> Quick View</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.php"><img
                                                src="frontend/img/product/product21.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.php"><img
                                                src="frontend/img/product/product22.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.php" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="compare"><a href="#" title="compare"><span
                                                            class="ion-levels"></span></a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modal_box" title="quick view"> <span
                                                            class="ion-ios-search-strong"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{url('/cart')}}" title="add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3 class="product_name grid_name"><a href="product-details.php">Cras neque
                                                metus eugiat felis sem</a></h3>
                                    </div>
                                    <div class="product_content list_content">
                                        <div class="left_caption">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <h3 class="product_name"><a href="product-details.php">Cras neque metus
                                                    eugiat felis sem</a></h3>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco,Proin lectus
                                                    ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                            </div>
                                        </div>
                                        <div class="right_caption">
                                            <div class="add_to_cart">
                                                <a href="{{url('/cart')}}" title="add to cart">Add to cart</a>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.php"
                                                            title="Add to Wishlist"><i class="fa fa-heart-o"
                                                                aria-hidden="true"></i> Add to Wishlist</a></li>
                                                    <li class="compare"><a href="#" title="compare"><span
                                                                class="ion-levels"></span> Compare</a></li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span> Quick View</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.php"><img
                                                src="frontend/img/product/product23.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.php"><img
                                                src="frontend/img/product/product24.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.php" title="Add to Wishlist"><i
                                                            class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li class="compare"><a href="#" title="compare"><span
                                                            class="ion-levels"></span></a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modal_box" title="quick view"> <span
                                                            class="ion-ios-search-strong"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="{{url('/cart')}}" title="add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <div class="product_ratings">
                                            <ul>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                            </ul>
                                        </div>
                                        <h3 class="product_name grid_name"><a href="product-details.php">Cras neque
                                                honcus consectetur magna</a></h3>
                                    </div>
                                    <div class="product_content list_content">
                                        <div class="left_caption">
                                            <div class="price_box">
                                                <span class="old_price">$86.00</span>
                                                <span class="current_price">$79.00</span>
                                            </div>
                                            <h3 class="product_name"><a href="product-details.php">Cras neque honcus
                                                    consectetur magna</a></h3>
                                            <div class="product_ratings">
                                                <ul>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco,Proin lectus
                                                    ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                            </div>
                                        </div>
                                        <div class="right_caption">
                                            <div class="add_to_cart">
                                                <a href="{{url('/cart')}}" title="add to cart">Add to cart</a>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="wishlist.php"
                                                            title="Add to Wishlist"><i class="fa fa-heart-o"
                                                                aria-hidden="true"></i> Add to Wishlist</a></li>
                                                    <li class="compare"><a href="#" title="compare"><span
                                                                class="ion-levels"></span> Compare</a></li>
                                                    <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#modal_box" title="quick view"> <span
                                                                class="ion-ios-search-strong"></span> Quick View</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div> --}}



                    </div>

                    <div class="shop_toolbar t_bottom">
                        <div class="pagination">
                            {{-- <ul>
                                <li class="current">1</li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#">next</a></li>
                                <li><a href="#">>></a></li>
                            </ul> --}}
                            {{$works->links()}}
                        </div>
                    </div>

                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->

    <!--footer area start-->

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
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="frontend/img/product/product1.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="frontend/img/product/product2.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="frontend/img/product/product3.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="frontend/img/product/product5.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li>
                                                <a class="nav-link active" data-bs-toggle="tab" href="#tab1" role="tab"
                                                    aria-controls="tab1" aria-selected="false"><img
                                                        src="frontend/img/product/product1.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-bs-toggle="tab" href="#tab2" role="tab"
                                                    aria-controls="tab2" aria-selected="false"><img
                                                        src="frontend/img/product/product2.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link button_three" data-bs-toggle="tab" href="#tab3"
                                                    role="tab" aria-controls="tab3" aria-selected="false"><img
                                                        src="frontend/img/product/product3.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-bs-toggle="tab" href="#tab4" role="tab"
                                                    aria-controls="tab4" aria-selected="false"><img
                                                        src="frontend/img/product/product5.jpg" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Handbag feugiat</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>
                                        <span class="old_price">$78.99</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste
                                            laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam
                                            in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel
                                            recusandae </p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                            <h2>size</h2>
                                            <select class="select_option">
                                                <option selected value="1">s</option>
                                                <option value="1">m</option>
                                                <option value="1">l</option>
                                                <option value="1">xl</option>
                                                <option value="1">xxl</option>
                                            </select>
                                        </div>
                                        <div class="variants_color">
                                            <h2>color</h2>
                                            <select class="select_option">
                                                <option selected value="1">purple</option>
                                                <option value="1">violet</option>
                                                <option value="1">black</option>
                                                <option value="1">pink</option>
                                                <option value="1">orange</option>
                                            </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="0" max="100" step="2" value="1" type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal area end-->

    <!-- JS
============================================ -->

    <!-- Plugins JS -->
    <script src="frontend/js/plugins.js"></script>

    <!-- Main JS -->
    <script src="frontend/js/main.js"></script>


@endsection
