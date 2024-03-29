@extends('frontend.home_layout')

@section('content')

<div class="slider-area slider-layout3 bg-light-primary">
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider-1" class="slides">
            <?php $banners = DB::table('banners')
                ->where('publication_status',1)
                ->get();
            ?>
            @foreach($banners as $banner)
            <img src="{{$banner->banner_image}}" alt="slider" title="#slider-direction-{{$banner->id}}" />
            
            @endforeach
        </div>
        @foreach($banners as $banner)
        <div id="slider-direction-{{$banner->id}}" class="t-cn slider-direction">
            <div class="slider-content s-tb slide-1">
                <div class="text-left title-container s-tb-c">
                    <div class="container">
                        <div class="slider-big-text">{{$banner->banner_title}}<span>{{$banner->banner_subtitle}}</span></div>
                        <p class="slider-paragraph padding-right">{{$banner->banner_description}}</p>
                        <div class="slider-btn-area d-none d-xl-block">
                            <a href="#" class="item-light-btn">Read More<i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <div id="slider-direction-2" class="t-cn slider-direction">
            <div class="slider-content s-tb slide-2">
                <div class="text-left title-container s-tb-c">
                    <div class="container">
                        <div class="slider-big-text">We Have<span>Skilled Doctors &amp; Nurses</span></div>
                        <p class="slider-paragraph padding-right">Mimply dummy text of the printing and typesetting Lorem ipsum dolor sit amet, consecte tur adipiscing.</p>
                        <div class="slider-btn-area d-none d-xl-block">
                            <a href="#" class="item-light-btn">Read More<i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="slider-direction-3" class="t-cn slider-direction">
            <div class="slider-content s-tb slide-3">
                <div class="text-left title-container s-tb-c">
                    <div class="container">
                        <div class="slider-big-text">Here Available<span>All Medical Departments</span></div>
                        <p class="slider-paragraph padding-right">Mimply dummy text of the printing and
                            typesetting Lorem
                            ipsum dolor sit amet, consecte tur adipiscing.</p>
                        <div class="slider-btn-area d-none d-xl-block">
                            <a href="#" class="item-light-btn">Read More<i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Body Content Starts Here -->
 <!-- Action Area Start Here -->
    <section class="call-to-action-wrap-layout5 bg-light-secondary100">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12 single-item">
                    <div class="call-to-action-box-layout5">
                        <div class="media media-none-md">
                            <i class="flaticon-square"></i>
                            <div class="media-body box-content">
                                <h4 class="item-title">Opening Hours</h4>
                                <span>Monday – Friday (8.00 – 17.00)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 single-item">
                    <div class="call-to-action-box-layout5">
                        <div class="media media-none-md">
                            <i class="flaticon-first-aid-kit"></i>
                            <div class="media-body box-content">
                                <h4 class="item-title">Emergency Case</h4>
                                <span>We Have Experienced Doctors</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 single-item">
                    <div class="call-to-action-box-layout5">
                        <div class="media media-none-md">
                            <i class="flaticon-phone-call"></i>
                            <div class="media-body">
                                <h4 class="item-title">24/7 Hours Service</h4>
                                <span>+ 88000 566677</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Action Area End Here -->
    <!-- About Area Start Here -->
    <section class="about-wrap-layout2">
        <div class="container">
            <div class="row">
                <div class="about-box-layout6 col-lg-6">
                    <h1 class="item-title">Welcome To
                        <span>Hospital</span> Cox Central Limited</h1>
                    <div class="sub-title">Hospital imply dummy text of the printing and type setng industry been
                        the industry.</div>
                    <p>Mtandard dummy texr since when an unknown printer took a galley.MediPoint Lorem ipsum dolor
                        sit amet,
                        consetetur sadipscing elitr, At accusam aliquyam.'s standard dummy texr since when an
                        unknown
                        printer took a galley consetetur.</p>
                    <img src="frontend/img/about/sign1.png" alt="sign" class="img-fluid">
                </div>
                <div class="about-box-layout7 col-lg-6">
                    <div class="item-video">
                        <img src="frontend/img/about/about3.png" alt="about">
                        <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                            <i class="flaticon-play-button"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End Here -->
    <!-- Department Area Start Here -->
    <section class="departments-wrap-layout6 bg-light-secondary100">
        <div class="container">
            <div class="row">
                <div class="departments-box-layout6 col-xl-4 d-none d-xl-block">
                    <div class="item-img">
                        <img src="frontend/img/department/department5.png" alt="department" class="img-fluid">
                    </div>
                </div>
                <div class="col-xl-8 col-12">
                    <div class="departments-box-layout7">
                        <div class="section-title">
                            <h2 class="title">Our Services</h2>
                            <div class="sub-title">Dedicated Services</div>
                        </div>
                        <div class="row gutters-5">
                            <?php $services = DB::table('services')
                                ->where('publication_status',1)
                                ->get();
                            ?>
                            @foreach($services as $data)
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="single-box">
                                    <i class="flaticon-medical"></i>
                                    <p>
                                        <a href="#">{{$data->service_name}}</a>
                                    </p>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Department Area End Here -->
    <!-- Featured Area Start Here -->
    <section class="features-wrap-layout1">
        <div class="features-box-layout1 d-lg-flex bg-light-primary100">
            <div class="item-inner-wrapper">
                <div class="item-content d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="item-content-inner content-dark">
                                    <h2 class="item-title">Choose the best for your health</h2>
                                    <p>Dwisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper
                                        turet suscipit lobortis.</p>
                                    <ul class="list-item">
                                        <li>Free Consultation</li>
                                        <li>Quality Doctors</li>
                                        <li>Professional Experts</li>
                                        <li>Affordable Price</li>
                                        <li>24/7 Opened</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-inner-wrapper">
                <img src="frontend/img/figure/figure8.jpg" class="img-responsive" alt="figure">
            </div>
        </div>
        <div class="features-box-layout1 d-lg-flex flex-lg-row-reverse">
            <div class="item-inner-wrapper">
                <div class="item-content d-flex align-items-center">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-6 col-sm-12 col-12">
                                <div class="item-content-inner inner-title-dark">
                                    <h2 class="item-title">We are the trusted experts things simple</h2>
                                    <p>Dwisi enim ad minim veniam, quis laore nostrud exerci tation area ulm hedi
                                        corper turet suscipit lobortis nisl ut aliquip erat volutpat autem vel eum
                                        iriure dolor in hendrerit in vulputate.
                                    </p>
                                    <div class="skill-layout1">
                                        <div class="progress">
                                            <div class="lead">Efficency</div>
                                            <div style="width: 80%; visibility: visible; animation-duration: 1.5s; animation-delay: 0.4s;"
                                                data-progress="95%" class="progress-bar progress-bar-striped wow fadeInLeft animated">
                                                <span>80%</span>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="lead">Experience</div>
                                            <div style="width: 95%; visibility: visible; animation-duration: 1.5s; animation-delay: 0.6s;"
                                                data-progress="85%" class="progress-bar progress-bar-striped wow fadeInLeft animated">
                                                <span>95%</span>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="lead">Experience</div>
                                            <div style="width: 75%; visibility: visible; animation-duration: 1.5s; animation-delay: 0.8s;"
                                                data-progress="99%" class="progress-bar progress-bar-striped wow fadeInLeft animated">
                                                <span>75%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-inner-wrapper">
                <img src="frontend/img/figure/figure9.jpg" class="img-responsive" alt="figure">
            </div>
        </div>
    </section>
    <!-- Featured Area End Here -->
    <!-- Team Area Start Here -->
    <section class="team-wrap-layout1 bg-light-secondary100">
        <img class="left-img img-fluid" src="frontend/img/figure/figure4.png" alt="figure">
        <img class="right-img img-fluid" src="frontend/img/figure/figure5.png" alt="figure">
        <div class="container">
            <div class="section-heading heading-dark text-left heading-layout1">
                <h2>Specialist Doctors</h2>
                <p>Experienced Doctor</p>
                <div id="owl-nav2" class="owl-nav-layout1">
                    <span class="rt-prev">
                        <i class="fas fa-chevron-left"></i>
                    </span>
                    <span class="rt-next">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </div>
            </div>
            <div class="rc-carousel nav-control-layout2" data-loop="true" data-items="5" data-margin="30"
                data-autoplay="false" data-autoplay-timeout="5000" data-custom-nav="#owl-nav2" data-smart-speed="2000"
                data-dots="false" data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
                data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="false"
                data-r-small="2" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="3"
                data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="false"
                data-r-large-dots="false" data-r-extra-large="4" data-r-extra-large-nav="false"
                data-r-extra-large-dots="false">
                <?php $doctors = DB::table('doctors')
                    ->where('publication_status',1)
                    ->get();
                ?>
                @foreach($doctors as $doctor)
                <div class="team-box-layout4">
                    <div class="item-img">
                        <img src="{{$doctor->doctor_image}}" alt="Team1" class="img-fluid">
                        <ul class="item-icon">
                            <li>
                                <a href="single-doctor.html">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="item-content">
                        <h4 class="item-title">
                            <a href="{{url('doctors/'.$doctor->id)}}">{{$doctor->doctor_name}}</a>
                        </h4>
                        <p>{{$doctor->doctor_designation}}</p>
                        <a href="{{url('/doctors/'.$doctor->id)}}" class="item-btn">MAKE AN APPOINTMENT</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Team Area End Here -->
    <!-- Brand Area Start Here -->
    <section class="brand-wrap-layout1 bg-primary100">
        <div class="container">
            <div class="row">
                <div class="brand-box-layout1 col-xl-7 col-lg-6 col-md-12 col-12">
                    <h2 class="item-title">We Are Certified Award Winning Institute</h2>
                </div>
                <div class="brand-box-layout2 col-xl-5 col-lg-6 col-md-12 col-12">
                    <img src="frontend/img/brand/brand-bg1.png" alt="brand" class="img-fluid d-none d-lg-block">
                    <ul>
                        <li>
                            <img src="frontend/img/brand/brand1.png" alt="brand" class="img-fluid">
                        </li>
                        <li>
                            <img src="frontend/img/brand/brand2.png" alt="brand" class="img-fluid">
                        </li>
                        <li>
                            <img src="frontend/img/brand/brand3.png" alt="brand" class="img-fluid">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Brand Area End Here -->
    <!-- Gallery Area Start Here -->
    <section class="gallery-wrap-layout1 bg-light-secondary100">
        <div class="container">
            <div class="isotope-wrap">
                <div class="text-center">
                    <div class="isotope-classes-tab isotop-btn">
                        <a href="#" class="current nav-item" data-filter="*">All Departments</a>
                        <!--a href="#" class="nav-item" data-filter=".dental">Dental</a>
                        <a href="#" class="nav-item" data-filter=".eye">Eye</a>
                        <a href="#" class="nav-item" data-filter=".cardiology">Cardiology</a>
                        <a href="#" class="nav-item" data-filter=".orthopaedics">Orthopaedics</a-->
                    </div>
                </div>
                <div class="row featuredContainer zoom-gallery">
                    <?php $departments = DB::table('departments')
                        ->where('publication_status',1)
                        ->get();
                    ?> 
                    @foreach($departments as $data)
                    <div class="col-lg-4 col-md-6 col-12 dental cardiology">
                        <div class="gallery-box-layout1">
                            <img src="{{ asset($data->department_image) }}" alt="gallery" class="img-fluid" style="width: 426px; height: 283px">
                            <div class="item-icon">
                                <a href="{{ asset($data->department_image) }}" class="popup-zoom" data-fancybox-group="gallery"
                                    title="">
                                    <i class="flaticon-search"></i>
                                </a>
                            </div>
                            <div class="item-content">
                                <h3 class="item-title">{{$data->department_name}}</h3>
                                <span class="title-ctg">Cancer Care, Cardiac</span>
                            </div>
                        </div>
                    </div>
                    @endforeach 
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Area End Here -->
    <!-- Call to Action Area Start Here -->
    <section class="call-to-action-wrap-layout4">
        <div class="item-img">
            <img src="frontend/img/figure/figure7.png" alt="figure" class="img-fluid">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-8 col-md-8 col-12">
                    <div class="call-to-action-box-layout4">
                        <h2 class="item-title">We Provide the highest level of satisfaction care &amp; services to
                            our patients.</h2>
                        <div class="call-to-action-phone">
                            <a href="tel:+12344092888"><i class="fas fa-phone"></i>+123 44092 888</a>
                        </div>
                        <div class="call-to-action-btn">
                            <a href="#" class="item-btn">Make Call for Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action End Here -->
    <!-- Blog and Testimonial Area Start Here -->
    <section class="both-side-half-bg">
        <div class="single-item">
            <div class="section-heading heading-dark heading-layout5">
                <h2>Our Latest News</h2>
            </div>
            <?php $news = DB::table('news')
                ->where('publication_status',1)
                ->paginate(3);
            ?>
            @foreach($news as $data)
            <div class="blog-box-layout1">
                <h3 class="item-title"><a href="{{url('/news/'.$data->id)}}">{{$data->news_title}}</a></h3>
                <ul class="entry-meta">
                    <li><i class="far fa-calendar-alt"></i>{{$data->created_at}}</li>
                    <li><i class="fas fa-user"></i>Posted by <a href="#">admin</a></li>
                </ul>
            </div>
            @endforeach

            <a class="blog-btn" href="{{url('/news')}}">SEE ALL NEWS<i class="fas fa-chevron-right"></i></a>
        </div>
        <div class="single-item bg-common" data-bg-image="frontend/img/figure/figure9.png">
            <div class="section-heading heading-light heading-layout5">
                <h2>Testimonials</h2>
                <div id="owl-nav3" class="owl-nav-layout2">
                    <span class="rt-prev">
                        <i class="fas fa-chevron-left"></i>
                    </span>
                    <span class="rt-next">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </div>
            </div>
            <div class="rc-carousel nav-control-layout7" data-loop="true" data-items="4" data-margin="30"
                data-autoplay="false" data-autoplay-timeout="5000" data-custom-nav="#owl-nav3" data-smart-speed="2000"
                data-dots="false" data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
                data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="false" data-r-x-medium-dots="false"
                data-r-small="1" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="1"
                data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="1" data-r-large-nav="false"
                data-r-large-dots="false" data-r-extra-large="1" data-r-extra-large-nav="false"
                data-r-extra-large-dots="false">
                <div class="item">
                    <?php $reviews = DB::table('reviews')
                                            ->where('publication_status',1)
                                            ->paginate(3);
                    ?>
                    @foreach($reviews as $data)
                    <div class="testmonial-box-layout2">
                        <h4 class="item-title">{{$data->user_name}} <span>/ CEO Artland</span></h4>
                        <ul class="rating">
                            <li>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                            <li>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </li>
                        </ul>
                        <p>"{{$data->review_description}}"</p>
                    </div>
                    @endforeach
                </div>
                <div class="item">
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Blog and Testimonial Area End Here -->
    <!-- Brand Area Start Here -->
    <section class="brand-wrap-layout2 bg-light-primary100">
        <div class="container">
            <div class="rc-carousel nav-control-layout4" data-loop="true" data-items="5" data-margin="30"
                data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false"
                data-nav="true" data-nav-speed="false" data-r-x-small="2" data-r-x-small-nav="true"
                data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false"
                data-r-small="3" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="5"
                data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="5" data-r-large-nav="true"
                data-r-large-dots="false" data-r-extra-large="5" data-r-extra-large-nav="true"
                data-r-extra-large-dots="false">
                <div class="brand-box-layout3">
                    <img src="frontend/img/brand/brand4.png" alt="brand" class="img-fluid">
                </div>
                <div class="brand-box-layout3">
                    <img src="frontend/img/brand/brand5.png" alt="brand" class="img-fluid">
                </div>
                <div class="brand-box-layout3">
                    <img src="frontend/img/brand/brand6.png" alt="brand" class="img-fluid">
                </div>
                <div class="brand-box-layout3">
                    <img src="frontend/img/brand/brand7.png" alt="brand" class="img-fluid">
                </div>
                <div class="brand-box-layout3">
                    <img src="frontend/img/brand/brand8.png" alt="brand" class="img-fluid">
                </div>
                <div class="brand-box-layout3">
                    <img src="frontend/img/brand/brand9.png" alt="brand" class="img-fluid">
                </div>
                <div class="brand-box-layout3">
                    <img src="frontend/img/brand/brand10.png" alt="brand" class="img-fluid">
                </div>
                <div class="brand-box-layout3">
                    <img src="frontend/img/brand/brand5.png" alt="brand" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- Brand Area End Here -->    
<!-- Main Body Contents ended here -->

    

@endsection
