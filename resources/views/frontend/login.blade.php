@section('title', 'Home')
@extends('frontend.layouts.main')



@section('main-container')



    <!--header area start-->



    <!--sticky header area end-->

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{ url('/') }}">home</a></li>
                            <li>My account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!-- customer login start -->
    <div class="customer_login mt-60">
        <div class="container">
            <div class="row">
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                    <h2>Login</h2>




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

<form action="/login" method="POST" enctype="multipart/form-data">

@csrf

    <p>
        <label>email <span>*</span></label>
        <input type="text" name="email" value="{{old('email')}}" required>
    </p>
    <p>
        <label>Password <span>*</span></label>
        <input type="password" name="password" value="{{old('password')}}" required>
    </p>
    <div class="login_submit">
        <a href="#">Lost your password?</a>
        <label for="remember">
            <input id="remember" type="checkbox">
            Remember me
        </label>
        <button type="submit" name="submit">Login</button>
    </div>
</form>

                    </div>
                </div>
                <!--login area start-->











                    @csrf

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register">
                        <h2>Register</h2>








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
            <form  action="{{ url('/register')}}" method="POST" enctype="multipart/form-data" >
                @csrf
            <p>
                <label>Name <span>*</span></label>
                <input type="text" name="fullname" value="{{old('fullname')}}" required>
                @if ($errors->has('fullname'))
                <span class="text-danger">
                    {{$errors->first('fullname')}}
                </span>
            @endif
            </p>
            <p>
                <label>Email address <span>*</span></label>
                <input type="email" name="email" value="{{old('email')}}" required>
                @if ($errors->has('email'))
                <span class="text-danger">
                    {{$errors->first('email')}}
                </span>
            @endif
            </p>
            <p>
                <label>Password <span>*</span></label>
                <input type="password" name="password" value="{{old('password')}}" required>
                @if ($errors->has('password'))
                <span class="text-danger">
                    {{$errors->first('password')}}
                </span>
            @endif
            </p>
            <p>
                <label>Profile Picture <span>*</span></label>
                <input type="file" name="picture" value="{{old('picture')}}" required>
            </p>

            <div class="login_submit">
                <button type="submit" name="register">Register</button>
            </div>



        </form>





                    </div>
                </div>
                <!--register area end-->


            </div>
        </div>
    </div>












    <!-- customer login end -->

    <!--footer area start-->

    <!--footer area end-->
    <!-- JS
============================================ -->

    <!-- Plugins JS -->
    <script src="frontend/js/plugins.js"></script>

    <!-- Main JS -->
    <script src="frontend/js/main.js"></script>




@endsection
