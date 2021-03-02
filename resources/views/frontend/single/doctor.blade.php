@extends('frontend.home_layout')

@section('content')

<!-- Inne Page Banner Area Start Here -->
<section class="inner-page-banner bg-common inner-page-top-margin" data-bg-image="{{asset('frontend')}}/img/figure/figure2.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area">
                    <h1>Single Doctor</h1>
                    <ul>
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{url('/doctors')}}">All Doctors</a>
                        </li>
                        <li>Dental</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Inne Page Banner Area End Here -->
<!-- Doctors Detail Start Here -->
@foreach($doctors as $data)
@endforeach
<section class="team-details-wrap-layout1 bg-light-accent100">
    <div class="container">
        <div class="row">
            <div class="order-xl-2 order-lg-2 col-xl-9 col-lg-8 col-md-12 col-12">
                <div class="team-detail-box-layout1">
                    <div class="single-item">
                        <h3 class="section-title title-bar-primary2">About Me:</h3>
                        <p>{{$data->doctor_description}}..</p>
                    </div>
                    <div class="single-item">
                        <div class="table-responsive">
                            <h3 class="section-title title-bar-primary2">Education:</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Year</th>
                                        <th>Degree</th>
                                        <th>Institute</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2006</td>
                                        <td>MBBS, M.D</td>
                                        <td>University of Wyoming</td>
                                    </tr>
                                    <tr>
                                        <td>2010</td>
                                        <td>M.D. of Medicine</td>
                                        <td>Netherland Medical College</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="table-responsive">
                            <h3 class="section-title title-bar-primary2">Experienced:</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Year</th>
                                        <th>Department</th>
                                        <th>Position</th>
                                        <th>Hospital</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2007 - 2008</td>
                                        <td>MBBS, M.D</td>
                                        <td>Senior Prof.</td>
                                        <td>Midtown Medical Clinic</td>
                                    </tr>
                                    <tr>
                                        <td>2010 - 2018</td>
                                        <td>M.D. of Medicine</td>
                                        <td>Associate Prof.</td>
                                        <td>Netherland Medical College</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="table-responsive">
                            <h3 class="section-title title-bar-primary2">Appointmnet Schedules:</h3>
                            <table class="table schedule-table">
                                <thead>
                                    <tr>
                                        <th>Day</th>
                                        <th>Time</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Saturday</td>
                                        <td>10.00 am - 12.00 pm</td>
                                        <td class="schedule-btn"><a href="#" class="item-btn">Appointment</a></td>
                                    </tr>
                                    <tr>
                                        <td>Monday</td>
                                        <td>05.00 pm - 09.00 pm</td>
                                        <td class="schedule-btn"><a href="#" class="item-btn">Appointment</a></td>
                                    </tr>
                                    <tr>
                                        <td>Wednesday</td>
                                        <td>07.00 pm - 10.00 pm</td>
                                        <td class="schedule-btn"><a href="#" class="item-btn">Appointment</a></td>
                                    </tr>
                                    <tr>
                                        <td>Friday</td>
                                        <td>08.00 pm - 11.00 pm</td>
                                        <td class="schedule-btn"><a href="#" class="item-btn">Appointment</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-xl-1 order-lg-1 sidebar-widget-area sidebar-break-md col-xl-3 col-lg-4 col-md-12 col-12">

                <div class="widget widget-about-team">
                    <img src="{{asset('frontend')}}/img/team/team20.png" class="img-fluid" alt="team">
                    <div class="item-content">
                        <h3 class="item-title">{{ $data->doctor_name}}</h3>
                        <p class="item-ctg">{{ $data->department_name}}</p>
                        <span class="item-designation">{{ $data->doctor_designation}}</span>
                    </div>
                </div>
                
                <div class="widget widget-team-contact">
                    <h3 class="section-title title-bar-primary2">Personal Info</h3>
                    <ul>
                        <li>Phone:<span>+ (123) 1800-567</span></li>
                        <li>Office:<span>+ 88500-567</span></li>
                        <li>E-mail:<span>ziniazara@gmail.com</span></li>
                        <li class="d-flex">Social:
                            <ul class="widget-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-skype"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="widget widget-call-to-action">
                    <div class="media">
                        <img src="img/figure/figure1.png" alt="figure">
                        <div class="media-body space-sm">
                            <h4>Emergency Cases</h4>
                            <span>2-800-700-6200</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        <!-- Doctors Detail End Here -->
    



@endsection