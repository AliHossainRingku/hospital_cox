@extends('frontend.home_layout')

@section('content')
<!-- Inne Page Banner Area Start Here -->
        <section class="inner-page-banner bg-common inner-page-top-margin" data-bg-image="frontend/img/figure/figure2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>All Services</h1>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->
        <!-- All Departments Area Start Here -->
        <section class="departments-wrap-layout8">
            <div class="container">
                <div class="row">
                	@foreach($services as $data)
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="departments-box-layout5">
                            <div class="item-img">
                                <img src="{{$data->service_image}}" alt="service" class="img-fluid">
                                <div class="item-content">
                                    <h3 class="item-title title-bar-primary3"><a href="single-departments.html">{{$data->service_name}}</a></h3>
                                    <p>Eye ipsum dolor sit amet, consectetur inglity wisi enim minim veniam</p>
                                    <a href="single-departments.html" class="item-btn">DETAILS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- All Departments  Area End Here -->
        <!-- Call to Action Area Start Here -->
        <section class="call-to-action-wrap-layout2 bg-common parallaxie" data-bg-image="frontend/img/figure/figure4.jpg">
            <div class="container">
                <div class="call-to-action-box-layout2">
                    <h2>We Provide the highest level of satisfaction<span> care &amp; services to our patients.</span></h2>
                    <a href="#" class="item-btn">Take a Service</a>
                </div>
            </div>
        </section>
        <!-- Call to Action End Here -->
    



@endsection