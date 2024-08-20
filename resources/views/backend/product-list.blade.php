@section('title', 'Home')
@extends('backend.layouts.main')



@section('main-container')

    <!-- #wrapper -->

                <!-- /preload -->
                <!-- section-menu-left -->







                    <!-- /header-dashboard -->
                    <!-- main-content -->
                    <div class="main-content">
                        <!-- main-content-wrap -->
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                    <h3>Product List</h3>
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
                                            <div class="text-tiny">Product List</div>
                                        </li>
                                    </ul>

                                </div>
                                <!-- product-list -->
                                <div class="wg-box">
                                    <div class="title-box">
                                        <i class="icon-coffee"></i>
                                        <div class="body-text">Tip search by Product ID: Each product is provided with a unique ID, which you can rely on to find the exact product you need.</div>
                                    </div>
                                    <div class="flex items-center justify-between gap10 flex-wrap">
                                        <div class="wg-filter flex-grow">
                                            <div class="show">
                                                <div class="text-tiny">Showing</div>
                                                <div class="select">
                                                    <select class="">
                                                        <option>10</option>
                                                        <option>20</option>
                                                        <option>30</option>
                                                    </select>
                                                </div>
                                                <div class="text-tiny">entries</div>
                                            </div>
                                            <form class="form-search">
                                                <fieldset class="name">
                                                    <input type="text" placeholder="Search here..." class="" name="name" tabindex="2" value="" aria-required="true" required="">
                                                </fieldset>
                                                <div class="button-submit">
                                                    <button class="" type="submit"><i class="icon-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                        <a class="tf-button style-1 w208" href="add-product.php"><i class="icon-plus"></i>Add new</a>
                                    </div>
                                    <div class="wg-table table-product-list">
                                        <ul class="table-title flex gap20 mb-14">
                                            <li>
                                                <div class="body-title">Product</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Product ID</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Price</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Quantity</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Brand</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Type</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Start date</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Action</div>
                                            </li>
                                        </ul>






                                        <ul class="flex flex-column">





  @foreach ($works as $work)
                                            <li class="product-item gap14">
                                                <div class="image no-bg">
                                                    <img src="{{ url($work->image1) }}" alt="">
                                                </div>
                                                <div class="flex items-center justify-between gap20 flex-grow">
                                                    <div class="name">
                                                        <a href="product-list.php" class="body-title-2">{{ $work->product_name }}</a>
                                                    </div>
                                                    <div class="body-text">{{ $work->id }}</div>
                                                    <div class="body-text">{{ $work->price }}</div>
                                                    <div class="body-text">{{ $work->quantity }}</div>
                                                    <div class="body-text">{{ $work->brand}}</div>

                                                    <div>
                                                        <div class="block-not-available">{{ $work->type}}</div>
                                                    </div>
                                                    <div class="body-text">{{ $work->created_at}}</div>
                                                    <div class="list-icon-function">
                                                        <div  class="item trash" style="color: #2377FC">
                                                           <i class="icon-eye"></i>
                                                        </div>






                                                        <div class="item edit">
                                                         <a href="{{url('product-edit'.$work->id)}}"> <i class="icon-edit-3" ></i> </a>
                                                        </div>











                                                        <div class="item eye"  style="color: red">
                                                            {{-- <a href="{{url('/deleteproduct/'.$work->id)}}">  <i style="color: red" class="icon-trash-2"></i> </a> --}}
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

                                                            <form action="{{ route('product.delete', ['id' => $work->id]) }}" method="POST" >
                                                                @csrf
                                                                @method('DELETE')

                                                                <button type="submit"  onClick="return confirm('Are you sure you want to Delete Record')"  style="border:none; background:none; padding: 0; margin: 0;  ">
                                                                    <i style="color: red"  class="icon-trash-2"></i>
                                                                </button>
                                                            </form>
                                                        </div>



                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach





                                               </ul>
                                    </div>
                                </div>
                                <!-- /product-list -->
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
