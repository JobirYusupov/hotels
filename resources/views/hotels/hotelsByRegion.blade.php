
@extends('layouts.master')
@section('content')

        <aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url({{ asset('images/cover-img-3.jpg') }});">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h2>by colorlib.com</h2>
                                        <h1>Tour Overview</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="colorlib-wrap">
            <div class="container">


                <div class="wrap-division">
                    <div class="col-md-12 col-md-offset-0 heading2 animate-box">
                        <h2>Athens, Greece Tour</h2>
                    </div>
                    @foreach($hotels as $hotel)
                            <div class="col-md-12 animate-box">
                                <div class="room-wrap">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="room-img" style="background-image: url({{ asset('images/tour-2.jpg') }});"></div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="desc">
                                                <span class="day-tour">{{ $hotel->show }}</span>
                                                <h2>{{ $hotel->name }}</h2>
                                                <p>{{ $hotel->info }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                </div>

            </div>
        </div>


        <div id="colorlib-subscribe" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                        <h2>Sign Up for a Newsletter</h2>
                        <p>Sign up for our mailing list to get latest updates and offers.</p>
                        <form class="form-inline qbstp-header-subscribe">
                            <div class="row">
                                <div class="col-md-12 col-md-offset-0">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="email" placeholder="Enter your email">
                                        <button type="submit" class="btn btn-primary">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection