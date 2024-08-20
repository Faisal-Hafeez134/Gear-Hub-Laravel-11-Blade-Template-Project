@section('title', 'Home')
@extends('backend.layouts.main')



@section('main-container')

    <!-- #wrapper -->

                <!-- section-menu-left -->






                    <!-- /header-dashboard -->
                    <!-- main-content -->
                    <div class="main-content">
                        <!-- main-content-wrap -->
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                    <h3>Add Product</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="index.php"><div class="text-tiny">Dashboard</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <a href="#"><div class="text-tiny">Ecommerce</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">Add product</div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- form-add-product -->

                                @if ($message = Session::get('success'))
                                <div class="alert alert-block p-4 border-left-warning" style="background-color:#EC8E22; opacity:1">
                                    <strong>
                                        <h1 style="color:#ffffff">{{$message}}</h1>
                                    </strong>
                                </div>
                            @endif





                                <form class="tf-section-2 form-add-product" method="POST" enctype="multipart/form-data" action="/product-edits{{$product->id}}">
                                    @csrf
                                    @method('PUT')


                                    <div class="wg-box">


                                        <fieldset class="name">
                                            <div class="body-title mb-10">Product name (required) <span class="tf-color-1">*</span></div>
                                            <input class="mb-10" type="text" placeholder="Enter product name" name="product_name" tabindex="0"  aria-required="true" required="" value="{{old('product_name', $product->product_name)}}" >
                                            <div class="text-tiny">Do not exceed 20 characters when entering the product name.</div>
                                            @if ($errors->has('product_name'))
                                            <span class="text-danger">
                                                {{$errors->first('product_name')}}
                                            </span>
                                        @endif
                                        </fieldset>

                                        <fieldset class="name">
                                            <div class="body-title mb-10">slug (required) <span class="tf-color-1">*</span></div>
                                            <input class="mb-10" type="text" placeholder="Enter slug" name="slug" tabindex="0" aria-required="true" required="" value="{{old('slug', $product->slug)}}" >

                                            @if ($errors->has('slug'))
                                            <span class="text-danger">
                                                {{$errors->first('slug')}}
                                            </span>
                                        @endif
                                        </fieldset>


                                        <div class="gap22 cols">

                                            <fieldset class="category">
                                                <div class="body-title mb-10">Category (required)<span class="tf-color-1">*</span></div>
                                                <div class="select">




                                                    <select class="category_name" name="category_name" value="{{old('category_name')}}">
                                                        @foreach ($works as $work)
                                                        <option>{{$product->category_name}}</option>
                                                        <option name="category_name" value="{{ $work->category_name }}">{{ $work->category_name }}</option>
                                                        @endforeach
                                                        <option name="category_name" value="Laptop">LapTop</option>
                                                    </select>





                                                </div>
                                                @if ($errors->has('category_name'))
                                                <span class="text-danger">
                                                    {{$errors->first('category_name')}}
                                                </span>
                                            @endif
                                            </fieldset>


                                            <fieldset class="category">
                                                <div class="body-title mb-10">Type  <span class="tf-color-1">*</span></div>
                                                <div class="select">
                                                    <select class="category_name" name="type" value="{{old('type', $product->type)}}">
                                                        <option>{{$product->type}}</option>
                                                        <option name="type" value="Best Seller">Best Seller</option>
                                                        <option name="type" value="Trending">Trending</option>
                                                        <option name="type" value="New Arrival">New Arrival</option>
                                                        <option name="type" value="Featured Products">Featured Products</option>
                                                    </select>
                                                </div>


                                                @if ($errors->has('category_name'))
                                                <span class="text-danger">
                                                    {{$errors->first('category_name')}}
                                                </span>
                                            @endif
                                            </fieldset>
                                        </div>

                                        <div class="gap22 cols">


                                        {{-- <fieldset class="brand">
                                            <div class="body-title mb-10">Brand (required)<span class="tf-color-1">*</span></div>
                                            <div class="select" name="brand" value="{{old('brand')}}">
                                                <select class="" name="brand" value="{{old('brand')}}">
                                                    <option name="brand" value="Choose Brand">Choose Brand</option>
                                                    <option name="brand" value="Apple">Apple</option>
                                                    <option name="brand" value="Samsung">Samsung</option>
                                                </select>
                                            </div>
                                        </fieldset> --}}


                                        <fieldset class="name">
                                            <div class="body-title mb-10">Brand <span class="tf-color-1">*</span></div>
                                            <input class="mb-10" type="text" placeholder="Enter product name" name="brand" tabindex="0"  aria-required="true" required="" value="{{old('brand',$product->brand)}}" >
                                            <div class="text-tiny">Do not exceed 20 characters when entering the product name.</div>
                                            @if ($errors->has('brand'))
                                            <span class="text-danger">
                                                {{$errors->first('brand')}}
                                            </span>
                                        @endif
                                        </fieldset>



                                        <fieldset class="brand">
                                            <div class="body-title mb-10">Status (required)<span class="tf-color-1">*</span></div>
                                            <div class="select" name="status" value="{{old('status', $product->Status)}}">
                                                <select class="" name="status" value="{{old('status',$product->Status)}}">
                                                    <option >{{$product->Status}}</option>
                                                    <option name="status" value="Active">Active</option>
                                                    <option name="status" value="Not Active">Not Active</option>

                                                </select>
                                            </div>
                                        </fieldset>


                                    </div>

                                        <fieldset class="name">
                                            <div class="body-title mb-10">Price (required) <span class="tf-color-1">*</span></div>
                                            <input class="mb-10" type="number" placeholder="Enter product name" name="price" tabindex="0"  aria-required="true" required="" value="{{old('price',$product->price)}}" >

                                            @if ($errors->has('product_name'))
                                            <span class="text-danger">
                                                {{$errors->first('product_name')}}
                                            </span>
                                        @endif
                                        </fieldset>

                                        <fieldset class="name">
                                            <div class="body-title mb-10">Quantity (required) <span class="tf-color-1">*</span></div>
                                            <input class="mb-10" type="Number" placeholder="Enter product quantity" name="quantity" tabindex="0"  aria-required="true" required="" value="{{old('quantity',$product->quantity)}}" >

                                            @if ($errors->has('product_name'))
                                            <span class="text-danger">
                                                {{$errors->first('product_name')}}
                                            </span>
                                        @endif
                                        </fieldset>


                                        <fieldset class="">
                                            <div class="body-title mb-10">Description (required)<span class="tf-color-1">*</span></div>
                                            <textarea class="mb-10" name="description" value="{{old('description',$product->description)}}" placeholder="{{$product->description}}" tabindex="0"  >{{ old('description', $product->description) }}</textarea>
                                            <div class="text-tiny">Do not exceed 100 characters when entering the product name.</div>
                                            @if ($errors->has('product_name'))
                                            <span class="text-danger">
                                                {{$errors->first('product_name')}}
                                            </span>
                                        @endif
                                        </fieldset>







                                    </div>




                                    <div class="wg-box">

                                        <fieldset>
                                            <div class="body-title mb-10">Upload images (required)</div>

                                            <div class="upload-image mb-16">


                                                {{-- <div class="item">
                                                    <img src="images/upload/upload-1.png" alt="">
                                                </div>


                                                <div class="item">
                                                    <img src="images/upload/upload-2.png" alt="">
                                                </div> --}}

                                                <div class="item up-load">
                                                    <label class="uploadfile" for="myFile">
                                                        <span class="icon">
                                                            <i class="icon-upload-cloud"></i>
                                                        </span>
                                                        <span class="text-tiny">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                                        <input type="file" id="myFile" name="image1" value="{{old('image1',$product->image1)}}">
                                                    </label>
                                                    @if ($errors->has('image1'))
                                                    <span class="text-danger">
                                                        {{$errors->first('image1')}}
                                                    </span>
                                                @endif
                                                </div>




                                            </div>
                                            <div class="body-text">You need to add at least 4 images. Pay attention to the quality of the pictures you add, comply with the background color standards. Pictures must be in certain dimensions. Notice that the product shows all the details</div>
                                        </fieldset>
                                        <div class="item up-load">
                                            <label class="uploadfile" for="myFile">
                                                <span class="icon">
                                                    <i class="icon-upload-cloud"></i>
                                                </span>
                                                <span class="text-tiny">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                                <input type="file" id="myFile" name="image2" value="{{old('image2',$product->image2)}}">
                                            </label>
                                            @if ($errors->has('image2'))
                                            <span class="text-danger">
                                                {{$errors->first('image2')}}
                                            </span>
                                        @endif
                                        </div>

                                        <div class="item up-load">
                                            <label class="uploadfile" for="myFile">
                                                <span class="icon">
                                                    <i class="icon-upload-cloud"></i>
                                                </span>
                                                <span class="text-tiny">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                                <input type="file" id="myFile" name="image3" value="{{old('image3',$product->image3)}}">
                                            </label>
                                            @if ($errors->has('image3'))
                                            <span class="text-danger">
                                                {{$errors->first('image3')}}
                                            </span>
                                        @endif
                                        </div>

                                        {{-- <div class="cols gap22">
                                            <fieldset class="name">
                                                <div class="body-title mb-10">Add size</div>
                                                <div class="select mb-10">
                                                    <select class="">
                                                        <option>EU - 44</option>
                                                        <option>EU - 40</option>
                                                        <option>EU - 50</option>
                                                    </select>
                                                </div> --}}
                                                {{-- <div class="list-box-value mb-10">
                                                    <div class="box-value-item"><div class="body-text">EU - 38.5</div></div>
                                                    <div class="box-value-item"><div class="body-text">EU - 39</div></div>
                                                    <div class="box-value-item"><div class="body-text">EU - 40</div></div>
                                                </div>
                                                <div class="list-box-value">
                                                    <div class="box-value-item"><div class="body-text">EU - 41.5</div></div>
                                                    <div class="box-value-item"><div class="body-text">EU - 42</div></div>
                                                    <div class="box-value-item"><div class="body-text">EU - 43</div></div>
                                                </div>
                                            </fieldset> --}}
                                            {{-- <fieldset class="name">
                                                <div class="body-title mb-10">Product date</div>
                                                <div class="select">
                                                    <input type="date" name="date" value="2023-11-20">
                                                </div>
                                            </fieldset> --}}
                                        </div>
                                        <div class="cols gap10">
                                            <button class="tf-button w-full" type="submit">Add product</button>
                                            {{-- <button class="tf-button style-1 w-full" type="submit">Save product</button> --}}
                                            {{-- <a href="#" class="tf-button style-2 w-full">Schedule</a> --}}
                                        </div>
                                    </div>
                                </form>
                                <!-- /form-add-product -->
                            </div>
                            <!-- /main-content-wrap -->
                        </div>
                        <!-- /main-content-wrap -->
                        <!-- bottom-page -->

                        <!-- /bottom-page -->
                    {{-- </div>
                    <!-- /main-content -->
                </div>
                <!-- /section-content-right -->
            </div>
            <!-- /layout-wrap -->
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <!-- Javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/zoom.js"></script>
    <script src="js/switcher.js"></script>
    <script src="js/theme-settings.js"></script>
    <script src="js/main.js"></script>

</body>



</html> --}}
@endsection

