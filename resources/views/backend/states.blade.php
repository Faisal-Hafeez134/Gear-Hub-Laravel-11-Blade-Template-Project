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
                                    <h3>States</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="index.php"><div class="text-tiny">Dashboard</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <a href="#"><div class="text-tiny">Location</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">States</div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- countries -->
                                <div class="wg-box">
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
                                            <div class="flex gap10">
                                                <div class="select w200">
                                                    <select class="">
                                                        <option>Bulk Action</option>
                                                        <option>Action 1</option>
                                                        <option>Action 2</option>
                                                    </select>
                                                </div>
                                                <button class="tf-button style-1 w128">Filters</button>
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
                                        <a class="tf-button style-1 w208" href="#"><i class="icon-plus"></i>New</a>
                                    </div>
                                    <div class="wg-table table-countries wrap-checkbox">
                                        <ul class="table-title flex gap20 mb-14">
                                            <li>
                                                <input class="total-checkbox" type="checkbox">
                                            </li>
                                            <li>
                                                <div class="body-title">ID</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Name</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Country</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Created at</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Status</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Action</div>
                                            </li>
                                        </ul>
                                        <ul class="flex flex-column">
                                            <li class="countries-item">
                                                <div>
                                                    <input class="checkbox-item" type="checkbox">
                                                </div>
                                                <div class="body-text">#01</div>
                                                <div class="body-text">Tamra</div>
                                                <div class="body-text">Vietnamese</div>
                                                <div class="body-text">20 Nov 2023</div>
                                                <div>
                                                    <div class="block-published">Published</div>
                                                </div>
                                                <div>
                                                    <div class="list-icon-function">
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="countries-item">
                                                <div>
                                                    <input class="checkbox-item" type="checkbox">
                                                </div>
                                                <div class="body-text">#02</div>
                                                <div class="body-text">Taibeh</div>
                                                <div class="body-text">Vietnamese</div>
                                                <div class="body-text">20 Nov 2023</div>
                                                <div>
                                                    <div class="block-published">Published</div>
                                                </div>
                                                <div>
                                                    <div class="list-icon-function">
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="countries-item">
                                                <div>
                                                    <input class="checkbox-item" type="checkbox">
                                                </div>
                                                <div class="body-text">#03</div>
                                                <div class="body-text">Yokneam</div>
                                                <div class="body-text">Vietnamese</div>
                                                <div class="body-text">20 Nov 2023</div>
                                                <div>
                                                    <div class="block-published">Published</div>
                                                </div>
                                                <div>
                                                    <div class="list-icon-function">
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="countries-item">
                                                <div>
                                                    <input class="checkbox-item" type="checkbox">
                                                </div>
                                                <div class="body-text">#04</div>
                                                <div class="body-text">Sderot</div>
                                                <div class="body-text">Vietnamese</div>
                                                <div class="body-text">20 Nov 2023</div>
                                                <div>
                                                    <div class="block-published">Published</div>
                                                </div>
                                                <div>
                                                    <div class="list-icon-function">
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="countries-item">
                                                <div>
                                                    <input class="checkbox-item" type="checkbox">
                                                </div>
                                                <div class="body-text">#05</div>
                                                <div class="body-text">Yehud-Monosson</div>
                                                <div class="body-text">Vietnamese</div>
                                                <div class="body-text">20 Nov 2023</div>
                                                <div>
                                                    <div class="block-published">Published</div>
                                                </div>
                                                <div>
                                                    <div class="list-icon-function">
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="countries-item">
                                                <div>
                                                    <input class="checkbox-item" type="checkbox">
                                                </div>
                                                <div class="body-text">#06</div>
                                                <div class="body-text">Tel Aviv</div>
                                                <div class="body-text">Vietnamese</div>
                                                <div class="body-text">20 Nov 2023</div>
                                                <div>
                                                    <div class="block-published">Published</div>
                                                </div>
                                                <div>
                                                    <div class="list-icon-function">
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="countries-item">
                                                <div>
                                                    <input class="checkbox-item" type="checkbox">
                                                </div>
                                                <div class="body-text">#07</div>
                                                <div class="body-text">Yavne</div>
                                                <div class="body-text">Vietnamese</div>
                                                <div class="body-text">20 Nov 2023</div>
                                                <div>
                                                    <div class="block-published">Published</div>
                                                </div>
                                                <div>
                                                    <div class="list-icon-function">
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="countries-item">
                                                <div>
                                                    <input class="checkbox-item" type="checkbox">
                                                </div>
                                                <div class="body-text">#08</div>
                                                <div class="body-text">Tiberias</div>
                                                <div class="body-text">Russia</div>
                                                <div class="body-text">20 Nov 2023</div>
                                                <div>
                                                    <div class="block-published">Published</div>
                                                </div>
                                                <div>
                                                    <div class="list-icon-function">
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="countries-item">
                                                <div>
                                                    <input class="checkbox-item" type="checkbox">
                                                </div>
                                                <div class="body-text">#09</div>
                                                <div class="body-text">Tirat Carmel	</div>
                                                <div class="body-text">Vietnamese</div>
                                                <div class="body-text">20 Nov 2023</div>
                                                <div>
                                                    <div class="block-published">Published</div>
                                                </div>
                                                <div>
                                                    <div class="list-icon-function">
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="countries-item">
                                                <div>
                                                    <input class="checkbox-item" type="checkbox">
                                                </div>
                                                <div class="body-text">#10</div>
                                                <div class="body-text">Tsfat</div>
                                                <div class="body-text">Vietnamese</div>
                                                <div class="body-text">20 Nov 2023</div>
                                                <div>
                                                    <div class="block-published">Published</div>
                                                </div>
                                                <div>
                                                    <div class="list-icon-function">
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="flex items-center justify-between flex-wrap gap10">
                                        <div class="text-tiny">Showing 10 to 16 in 16 records</div>
                                    </div>
                                </div>
                                <!-- /countries -->
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
