@section('title', 'Home')
@extends('backend.layouts.main')



@section('main-container')




                    <!-- /header-dashboard -->
                    <!-- main-content -->
                    <div class="main-content">
                        <!-- main-content-wrap -->
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                    <h3>Category infomation</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="index.php"><div class="text-tiny">Dashboard</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <a href="#"><div class="text-tiny">Category</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">New category</div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- new-category -->
                                <div class="wg-box">


                                    @if ($message = Session::get('error'))
                                    <div class="alert alert-success">
                                        {{$message}}
                                </div>
                                @endif
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                        {{$message}}
                                </div>
                            @endif

                                    <form class="form-new-product form-style-1" method="POST" enctype="multipart/form-data" action="{{ url('/new-category')}}" >
@csrf



                                        <fieldset class="name">
                                            <div class="body-title">Category name (required) <span class="tf-color-1">*</span></div>
                                            <input class="flex-grow" type="text" placeholder="Category name" name="category_name"
                                                tabindex="0"  aria-required="true" required="" value="{{old('category_name')}}">
                                                @if ($errors->has('category_name'))
                                                <span class="text-danger">
                                                    {{$errors->first('category_name')}}
                                                </span>
                                            @endif
                                        </fieldset>

                                        <fieldset class="name">
                                            <div class="body-title">Slug (required) <span class="tf-color-1">*</span></div>
                                            <input class="flex-grow" type="text" value="{{old('slug')}}" placeholder="Enter slug" name="slug"
                                                tabindex="0"  aria-required="true" required="">
                                                @if ($errors->has('slug'))
                                                <span class="text-danger">
                                                    {{$errors->first('slug')}}
                                                </span>
                                            @endif
                                        </fieldset>

                                        <fieldset class="description">
                                            <div class="body-title mb-10">Description  (required)<span class="tf-color-1">*</span>
                                            </div>
                                            <textarea class="mb-10" name="description" value="{{old('description')}}" placeholder="Enter description"
                                                tabindex="0" aria-required="true" required=""></textarea>
                                            <div class="text-tiny"></div>
                                            @if ($errors->has('description'))
                                            <span class="text-danger">
                                                {{$errors->first('description')}}
                                            </span>
                                        @endif
                                        </fieldset>

                                        <fieldset class="name">
                                            <div class="body-title">Meta Title <span class="tf-color-1">*</span></div>
                                            <input class="flex-grow" type="text" placeholder="Enter meta title" name="meta_title"
                                                tabindex="0" value="{{old('meta_title')}}" aria-required="true" required="">
                                                @if ($errors->has('meta_title'))
                                                <span class="text-danger">
                                                    {{$errors->first('meta_title')}}
                                                </span>
                                            @endif
                                        </fieldset>

                                        <fieldset class="name">
                                            <div class="body-title">Meta Description <span class="tf-color-1">*</span></div>
                                            <input class="flex-grow" type="text" placeholder="Enter meta description" name="meta_description"
                                                tabindex="0" value="{{old('meta_description')}}" aria-required="true" required="">
                                                @if ($errors->has('meta_description'))
                                                <span class="text-danger">
                                                    {{$errors->first('meta_description')}}
                                                </span>
                                            @endif
                                        </fieldset>

                                        <fieldset class="name">
                                            <div class="body-title">Meta keywords <span class="tf-color-1">*</span></div>
                                            <input class="flex-grow" type="text" placeholder="Enter meta keywords" name="meta_keywords"
                                                tabindex="0" value="{{old('meta_keywords')}}" aria-required="true" required="">
                                                @if ($errors->has('meta_keywords'))
                                                <span class="text-danger">
                                                    {{$errors->first('meta_keywords')}}
                                                </span>
                                                @endif
                                        </fieldset>



                                            <fieldset class="category">
                                                <div class="body-title mb-10">Status (required)<span class="tf-color-1">*</span></div>
                                                <div class="select">
                                                    <select class="category_name" name="status" value="{{old('status')}}">
                                                        <option>status</option>
                                                        <option name="status" value="Active">Active</option>
                                                        <option name="status" value="Un Active">Un Active</option>
                                                    </select>
                                                </div>
                                                @if ($errors->has('status'))
                                                <span class="text-danger">
                                                    {{$errors->first('status')}}
                                                </span>
                                            @endif
                                            </fieldset>





                                        <fieldset>
                                                <div class="body-title">Upload images <span class="tf-color-1">*</span></div>

                                                <div class="upload-image flex-grow">

                                                    <div class="item up-load">

                                                        <label class="uploadfile" for="myFile">
                                                            <span class="icon">
                                                                <i class="icon-upload-cloud"></i>
                                                            </span>
                                                            <span class="body-text">Drop your images here or select <span class="tf-color">click to browse</span></span>




                                                            <input type="file" id="myFile" name="image">



                                                        </label>

                                                    </div>

                                                </div>
                                            </fieldset>

                                            {{-- <fieldset class="name">
                                            <div class="body-title">Status</div>
                                            <input class="" type="checkbox"  name="status" >
                                            @if ($errors->has('active'))
                                            <span class="text-danger">
                                                {{$errors->first('active')}}
                                            </span>
                                            @endif
                                        </fieldset>

                                        <fieldset class="name">
                                            <div class="body-title">Popular</div>
                                            <input class="" type="checkbox"  name="popular" >
                                            @if ($errors->has('popular'))
                                            <span class="text-danger">
                                                {{$errors->first('popular')}}
                                            </span>
                                            @endif
                                        </fieldset> --}}










                                        <div class="bot">
                                            <div></div>
                                            <button class="tf-button w208" name="add_category_btn" type="submit">Save</button>
                                        </div>




                                    </form>






                                </div>
                                <!-- /new-category -->
                            </div>
                            <!-- /main-content-wrap -->
                        </div>
                        <!-- /main-content-wrap -->
                        <!-- bottom-page -->
                        @endsection
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
