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
                            <li>Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shopping cart area start -->
    <div class="shopping_cart_area mt-60">
        <div class="container">
            <form action="{{url('/updatecart')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">

                            @if(session()->has('success'))
                        <div class="alert alert-success">
                        {{session()->get('success')}}
                        </div>


                            @endif





                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>



                                            <th class="product_remove">Delete</th>



                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_quantity">Quantity</th>
                                            <th class="product_total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php

                                            $total = 0;

                                        @endphp


                                         @foreach ($cartItem as $item)
                                         @csrf


                                        <tr>



                                            <td class="product_remove"><a href="{{url('/deletecartitem').$item->id}}"><i class="fa fa-trash-o"></i></a>




                                            </td>
                                            <td class="product_thumb"><a href="#"><img
                                                        src="{{$item->image1}}" alt=""></a></td>
                                            <td class="product_name"><a href="#">{{$item->product_name}}</a></td>
                                            <td class="product-price">{{$item->price}}</td>
                                            <td class="product_quantity"><label>{{$item->quantity}}</label>



                                                    @csrf
                                                 <input min="1" max="{{$item->product_quantity}}" value="1" type="number" value="{{$item->quantity}}" name="quantity"></td>


                                            <td class="product_total">{{$item->price * $item->quantity}}</td>


                                        </tr>
                                        @php
                                            $total += $item->price * $item->quantity;
                                        @endphp
                                        @endforeach

                                        {{-- <tr>
                                            <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="product_thumb"><a href="#"><img
                                                        src="assets/img/s-product/product2.jpg" alt=""></a></td>
                                            <td class="product_name"><a href="#">Handbags justo</a></td>
                                            <td class="product-price">£90.00</td>
                                            <td class="product_quantity"><label>Quantity</label> <input min="1"
                                                    max="100" value="1" type="number"></td>
                                            <td class="product_total">£180.00</td>


                                        </tr>
                                        <tr>
                                            <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="product_thumb"><a href="#"><img
                                                        src="assets/img/s-product/product3.jpg" alt=""></a></td>
                                            <td class="product_name"><a href="#">Handbag elit</a></td>
                                            <td class="product-price">£80.00</td>
                                            <td class="product_quantity"><label>Quantity</label> <input min="1"
                                                    max="100" value="1" type="number"></td>
                                            <td class="product_total">£160.00</td>


                                        </tr> --}}

                                    </tbody>
                                </table>
                            </div>
                            {{-- @if ($item->id)


                            <div class="cart_submit">
                                 <input type="hidden" name="id" value="{{$item->id}}">
                                <button type="submit" name="update" value="update" >Update Cart</button>
                            </div>
                            @endif --}}







                        </div>
                    </div>
                </div>
                <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code left">
                                <h3>Coupon</h3>
                                <div class="coupon_inner">
                                    <p>Enter your coupon code if you have one.</p>
                                    <input placeholder="Coupon code" type="text">
                                    <button type="submit">Apply coupon</button>
                                </div>
                            </div>
                        </div>






                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>Cart Totals</h3>
                                <div class="coupon_inner">
                                    <div class="cart_subtotal">
                                        <p>Subtotal</p>
                                        <p class="cart_amount">{{$total}}</p>
                                    </div>
                                    <div class="cart_subtotal ">
                                        <p>Shipping</p>
                                        <p class="cart_amount"><span>Flat Rate:</span> 0</p>
                                    </div>
                                    <a href="#">Calculate shipping</a>

                                    <div class="cart_subtotal">
                                        <p>Total</p>
                                        <p class="cart_amount">{{$total}}</p>
                                    </div>
                                    <div class="checkout_btn">


                                        <form>
                                        <a href="{{url('/checkout')}}">Proceed to Checkout</a>
                                        </form>



                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>
                </div>
                <!--coupon code area end-->
            </form>
        </div>
    </div>
    <!--shopping cart area end -->

    <!--footer area start-->

    <!--footer area end-->

    <!-- JS
============================================ -->

    <!-- Plugins JS -->
    {{-- <script src="assets/js/plugins.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script> --}}


@endsection
