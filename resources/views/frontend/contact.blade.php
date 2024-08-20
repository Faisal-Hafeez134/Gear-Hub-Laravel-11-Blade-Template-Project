@section('title', 'Home')
@extends('frontend.layouts.main')



@section('main-container')

   <!--breadcrumbs area start-->
   <div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li>about us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--contact map start-->
<div class="contact_map mt-60">
    <div class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.6701389278105!2d-0.13442558407566274!3d51.48256882033922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760532743b90e1%3A0x790260718555a20c!2sU.S.%20Embassy%2C%20London!5e0!3m2!1sen!2sbd!4v1623927462716!5m2!1sen!2sbd"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
<!--contact map end-->




<!--contact area start-->
<div class="contact_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="contact_message content">
                    <h3>contact us</h3>
                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum
                        est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum
                        formas human. qui sequitur mutationem consuetudium lectorum. Mirum est notare quam</p>
                    <ul>
                        <li><i class="fa fa-fax"></i> Address : Your address goes here.</li>
                        <li><i class="fa fa-envelope-o"> </i> Email: <a
                                href="mailto:demo@example.com">demo@example.com </a>
                        </li>
                        <li><i class="fa fa-phone"></i> Phone:<a href="tel: 0123456789"> 0123456789 </a> </li>
                    </ul>>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="contact_message form">
                    <h3>Tell us your project</h3>












                    @if ($message = Session::get('success'))
                    <div class="alert alert-block p-4 border-left-warning" style="background-color:#EC8E22; opacity:1">
                        <strong>
                            <h1 style="color:#ffffff">{{$message}}</h1>
                        </strong>
                    </div>
                @endif


                    <form id="contact-form" method="POST" action="{{ url('/contact') }}">

                        @csrf
                        <p>
                            <label> Your Name (required)</label>
                            <input type="text" placeholder="Your name" name="name" value="{{old('name')}}">
                            @if ($errors->has('name'))
                            <span class="text-danger">
                                {{$errors->first('name')}}
                            </span>
                        @endif
                        </p>
                        <p>
                            <label> Your Email (required)</label>
                            <input name="email" placeholder="Email Address" value="{{old('email')}}" type="email">
                            @if ($errors->has('email'))
                            <span class="text-danger">
                                {{$errors->first('email')}}
                            </span>
                        @endif
                        </p>
                        <p>
                            <label> Subject</label>
                            <input name="subject" placeholder="Subject *" type="text" value="{{old('subject')}}" name="subject">
                            @if ($errors->has('subject'))
                                    <span class="text-danger">
                                        {{$errors->first('subject')}}
                                    </span>
                                @endif
                        </p>
                        <div class="contact_textarea">
                            <label> Your Message</label>
                            <textarea placeholder="Message *" name="message" class="form-control2" value="{{old('message')}}"></textarea>
                            @if ($errors->has('message'))
                            <span class="text-danger">
                                {{$errors->first('message')}}
                            </span>
                        @endif
                        </div>
                        <button type="submit" name="submit"> Send</button>
                        <p class="form-messege"></p>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>





<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>



@endsection
