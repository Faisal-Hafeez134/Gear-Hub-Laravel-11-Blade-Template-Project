@section('title', 'Home')
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
                            <li>product countdown</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--product details start-->
    <div class="product_details mt-60 mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="frontend/img/product/productbig5.jpg"
                                    data-zoom-image="frontend/img/product/productbig5.jpg" alt="big-1">
                            </a>
                        </div>
                        <div class="single-zoom-thumb">
                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update=""
                                        data-image="frontend/img/product/productbig.jpg"
                                        data-zoom-image="frontend/img/product/productbig.jpg">
                                        <img src="frontend/img/product/productbig.jpg" alt="zo-th-1" />
                                    </a>

                                </li>
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update=""
                                        data-image="frontend/img/product/productbig1.jpg"
                                        data-zoom-image="frontend/img/product/productbig1.jpg">
                                        <img src="frontend/img/product/productbig1.jpg" alt="zo-th-1" />
                                    </a>

                                </li>
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update=""
                                        data-image="frontend/img/product/productbig2.jpg"
                                        data-zoom-image="frontend/img/product/productbig2.jpg">
                                        <img src="frontend/img/product/productbig2.jpg" alt="zo-th-1" />
                                    </a>

                                </li>
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update=""
                                        data-image="frontend/img/product/productbig3.jpg"
                                        data-zoom-image="frontend/img/product/productbig3.jpg">
                                        <img src="frontend/img/product/productbig3.jpg" alt="zo-th-1" />
                                    </a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                        <form action="#">

                            <h1>Nonstick Dishwasher PFOA</h1>
                            <div class="product_nav">
                                <ul>
                                    <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                            <div class=" product_ratting">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="review"><a href="#"> (customer review ) </a></li>
                                </ul>

                            </div>
                            <div class="price_box">
                                <span class="current_price">$70.00</span>
                                <span class="old_price">$80.00</span>

                            </div>
                            <div class="product_desc">
                                <p>eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus
                                    eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non
                                    neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et
                                    placerat vestibulum, metus nisi posuere nisl, in </p>
                            </div>
                            <div class="product_timing">
                                <div data-countdown="2023/12/15"></div>
                            </div>
                            <div class="product_variant color">
                                <h3>Available Options</h3>
                                <label>color</label>
                                <ul>
                                    <li class="color1"><a href="#"></a></li>
                                    <li class="color2"><a href="#"></a></li>
                                    <li class="color3"><a href="#"></a></li>
                                    <li class="color4"><a href="#"></a></li>
                                </ul>
                            </div>
                            <div class="product_variant quantity">
                                <label>quantity</label>
                                <input min="1" max="100" value="1" type="number">
                                <button class="button" type="submit">add to cart</button>

                            </div>
                            <div class=" product_d_action">
                                <ul>
                                    <li><a href="#" title="Add to wishlist">+ Add to Wishlist</a></li>
                                    <li><a href="#" title="Add to wishlist">+ Compare</a></li>
                                </ul>
                            </div>
                            <div class="product_meta">
                                <span>Category: <a href="#">Clothing</a></span>
                            </div>

                        </form>
                        <div class="priduct_social">
                            <ul>
                                <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i>
                                        Like</a></li>
                                <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a>
                                </li>
                                <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i>
                                        save</a></li>
                                <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i>
                                        share</a></li>
                                <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i>
                                        linked</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product details end-->

    <!--product info start-->
    <div class="product_d_info mb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">
                        <div class="product_info_button">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-bs-toggle="tab" href="#info" role="tab" aria-controls="info"
                                        aria-selected="false">Description</a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#sheet" role="tab" aria-controls="sheet"
                                        aria-selected="false">Specification</a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                        aria-selected="false">Reviews (1)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel">
                                <div class="product_info_content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec
                                        est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare
                                        lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus
                                        eu, suscipit id nulla.</p>
                                    <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis
                                        fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa
                                        massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit
                                        est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere
                                        nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et,
                                        luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sheet" role="tabpanel">
                                <div class="product_d_table">
                                    <form action="#">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="first_child">Compositions</td>
                                                    <td>Polyester</td>
                                                </tr>
                                                <tr>
                                                    <td class="first_child">Styles</td>
                                                    <td>Girly</td>
                                                </tr>
                                                <tr>
                                                    <td class="first_child">Properties</td>
                                                    <td>Short Dress</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                                <div class="product_info_content">
                                    <p>Fashion has been creating well-designed collections since 2010. The brand offers
                                        feminine designs delivering stylish separates and statement dresses which have
                                        since evolved into a full ready-to-wear collection in which every item is a
                                        vital part of a woman's wardrobe. The result? Cool, easy, chic looks with
                                        youthful elegance and unmistakable signature style. All the beautiful pieces are
                                        made in Italy and manufactured with the greatest attention. Now Fashion extends
                                        to a range of accessories including shoes, hats, belts and more!</p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                <div class="reviews_wrapper">
                                    <h2>1 review for Donec eu furniture</h2>
                                    <div class="reviews_comment_box">
                                        <div class="comment_thmb">
                                            <img src="frontend/img/blog/comment2.jpg" alt="">
                                        </div>
                                        <div class="comment_text">
                                            <div class="reviews_meta">
                                                <div class="star_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <p><strong>admin </strong>- September 12, 2022</p>
                                                <span>roadthemes</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="comment_title">
                                        <h2>Add a review </h2>
                                        <p>Your email address will not be published. Required fields are marked </p>
                                    </div>
                                    <div class="product_ratting mb-10">
                                        <h3>Your rating</h3>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_review_form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="review_comment">Your review </label>
                                                    <textarea name="comment" id="review_comment"></textarea>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="author">Name</label>
                                                    <input id="author" type="text">

                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="email">Email </label>
                                                    <input id="email" type="text">
                                                </div>
                                            </div>
                                            <button type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product info end-->

    <!--product area start-->
    <section class="product_area related_products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Related Products </h2>
                    </div>
                </div>
            </div>
            <div class="product_carousel product_column5 owl-carousel">
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.php"><img
                                    src="frontend/img/product/product1.jpg" alt=""></a>
                            <a class="secondary_img" href="product-details.php"><img
                                    src="frontend/img/product/product2.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.php" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="compare"><a href="#" title="compare"><span class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                            title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.php" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.php">Natus erro at congue massa commodo
                                    sit</a></h3>
                        </figcaption>
                    </figure>
                </article>
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
                                    <li class="compare"><a href="#" title="compare"><span class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                            title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.php" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.php">Itaque earum velit elementum</a>
                            </h3>
                        </figcaption>
                    </figure>
                </article>
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
                                    <li class="compare"><a href="#" title="compare"><span class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                            title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.php" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.php">Mauris tincidunt eros posuere
                                    placerat</a></h3>
                        </figcaption>
                    </figure>
                </article>
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
                                    <li class="compare"><a href="#" title="compare"><span class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                            title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.php" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.php">Morbi ornare vestibulum massa</a>
                            </h3>
                        </figcaption>
                    </figure>
                </article>
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
                                    <li class="compare"><a href="#" title="compare"><span class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                            title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.php" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.php">Porro quisquam eget feugiat
                                    pretium</a></h3>
                        </figcaption>
                    </figure>
                </article>
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
                                    <li class="compare"><a href="#" title="compare"><span class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                            title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.php" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.php">Laudantium enim fringilla dignissim
                                    ipsum primis</a></h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.php"><img
                                    src="frontend/img/product/product4.jpg" alt=""></a>
                            <a class="secondary_img" href="product-details.php"><img
                                    src="frontend/img/product/product5.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.php" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="compare"><a href="#" title="compare"><span class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                            title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.php" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.php">Natus erro at congue massa commodo
                                    sit</a></h3>
                        </figcaption>
                    </figure>
                </article>
            </div>
        </div>
    </section>
    <!--product area end-->

    <!--product area start-->
    <section class="product_area upsell_products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Upsell Products </h2>
                    </div>
                </div>
            </div>
            <div class="product_carousel product_column5 owl-carousel">
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
                                    <li class="compare"><a href="#" title="compare"><span class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                            title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.php" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.php">Natus erro at congue massa commodo
                                    sit</a></h3>
                        </figcaption>
                    </figure>
                </article>
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
                                    <li class="compare"><a href="#" title="compare"><span class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                            title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.php" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.php">Itaque earum velit elementum</a>
                            </h3>
                        </figcaption>
                    </figure>
                </article>
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
                                    <li class="compare"><a href="#" title="compare"><span class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                            title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.php" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.php">Mauris tincidunt eros posuere
                                    placerat</a></h3>
                        </figcaption>
                    </figure>
                </article>
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
                                    <li class="compare"><a href="#" title="compare"><span class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                            title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.php" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.php">Morbi ornare vestibulum massa</a>
                            </h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="single_product">
                    <figure>
                        <div class="product_thumb">
                            <a class="primary_img" href="product-details.php"><img
                                    src="frontend/img/product/product1.jpg" alt=""></a>
                            <a class="secondary_img" href="product-details.php"><img
                                    src="frontend/img/product/product2.jpg" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">sale</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.php" title="Add to Wishlist"><i
                                                class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li class="compare"><a href="#" title="compare"><span class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                            title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.php" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.php">Porro quisquam eget feugiat
                                    pretium</a></h3>
                        </figcaption>
                    </figure>
                </article>
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
                                    <li class="compare"><a href="#" title="compare"><span class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                            title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.php" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.php">Laudantium enim fringilla dignissim
                                    ipsum primis</a></h3>
                        </figcaption>
                    </figure>
                </article>
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
                                    <li class="compare"><a href="#" title="compare"><span class="ion-levels"></span></a>
                                    </li>
                                    <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                            title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                </ul>
                            </div>
                            <div class="add_to_cart">
                                <a href="cart.php" title="add to cart">Add to cart</a>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <div class="price_box">
                                <span class="old_price">$86.00</span>
                                <span class="current_price">$79.00</span>
                            </div>
                            <h3 class="product_name"><a href="product-details.php">Natus erro at congue massa commodo
                                    sit</a></h3>
                        </figcaption>
                    </figure>
                </article>
            </div>
        </div>
    </section>
    <!--product area end-->


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
    {{-- <script src="frontend/js/plugins.js"></script>

    <!-- Main JS -->
    <script src="frontend/js/main.js"></script> --}}



@endsection