@extends('frontend.home_layout')

@section('content')
 <!-- Inne Page Banner Area Start Here -->
        <section class="inner-page-banner bg-common inner-page-top-margin" data-bg-image="{{asset('frontend')}}/img/figure/figure2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Services</h1>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">Service</a>
                                </li>
                                <li>Service Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->
        <!-- Single Department Start Here -->
        <section class="single-department-wrap-layout1 bg-light-primary100">
            <div class="container">
                <div class="row">
                    <div class="sidebar-widget-area sidebar-break-md col-xl-3 col-lg-4 col-12 no-equal-item">
                        <div class="widget widget-department-info">
                            <h3 class="section-title title-bar-primary">All Services</h3>
                            <ul class="nav nav-tabs tab-nav-list">
                                <li class="nav-item">
                                    <a class="active" href="#department1" data-toggle="tab" aria-expanded="false">Eye</a>
                                </li>
                                <?php $services = DB::table('services')
	                                ->where('publication_status',1)
	                                ->get();
	                            ?>
	                            @foreach($services as $data)
                                <li class="nav-item">
                                    <a href="{{url('/services/'.$data->id)}}" data-toggle="tab" aria-expanded="false">{{$data->service_name}}</a>
                                </li>
                                @endforeach

                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-12 no-equal-item">
                        <div class="tab-content">
                        	@foreach($services as $data)
                            <div role="tabpanel" class="tab-pane fade active show" id="department1">
                                <div class="single-departments-box-layout1">
                                    <div class="single-departments-img">
                                        <img alt="single" src="{{$data->service_image}}">
                                    </div>
                                    <div class="item-content">
                                        <div class="item-content-wrap">
                                            <h3 class="item-title title-bar-primary5">{{$data->service_name}}</h3>
                                            <span class="sub-title">Dorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit, sed diam nonummy nibh erty cidunt utter laoreet dolore magna
                                                aliquam erat volutpanostrud exercier.</span>
                                            <p>{{$data->service_description}} </p>
                                            <h3 class="item-title">Advantage:</h3>
                                            <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                                iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                                Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                                class
                                                bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                                Hymenaeos eros. Nisi mauris et adipisc.</p>
                                            <ul class="department-info">
                                                <li>Keep Patients First Nulla lobortis.</li>
                                                <li>Keep Everyone Safe.</li>
                                                <li>Work Together Quisque pretium quam.</li>
                                                <li>Curabitur semper enim id accumsan.</li>
                                            </ul>
                                            <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                                iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                                Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                                class
                                                bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                                Hymenaeos eros. Nisi mauris et adipisc.Aliquam class bibendum mattis
                                                fusceut persecenas. Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi
                                                mauris et adipisc.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            @endforeach
                            
                            <div role="tabpanel" class="tab-pane fade" id="department2">
                                <div class="single-departments-box-layout1">
                                    <div class="single-departments-img">
                                        <img alt="single" src="img/department/department22.jpg">
                                    </div>
                                    <div class="item-content">
                                        <div class="item-content-wrap">
                                            <h3 class="item-title title-bar-primary5">Dental Department</h3>
                                            <span class="sub-title">Dorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit, sed diam nonummy nibh
                                                erty cidunt utter laoreet dolore magna aliquam erat volutpanostrud
                                                exercier.</span>
                                            <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                                iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                                Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                                class
                                                bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                                Hymenaeos eros. Nisi mauris et adipisc iquam class bibendum non mattis
                                                fusceut perspiciatis undeuisque. </p>
                                            <h3 class="item-title">Advantage:</h3>
                                            <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                                iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                                Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                                class
                                                bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                                Hymenaeos eros. Nisi mauris et adipisc.
                                            </p>
                                            <ul class="department-info">
                                                <li>Keep Patients First Nulla lobortis.</li>
                                                <li>Keep Everyone Safe.</li>
                                                <li>Work Together Quisque pretium quam.</li>
                                                <li>Curabitur semper enim id accumsan.</li>
                                            </ul>
                                            <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                                iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                                Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                                class
                                                bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                                Hymenaeos eros. Nisi mauris et adipisc.Aliquam class bibendum mattis
                                                fusceut persecenas. Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi
                                                mauris et adipisc.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="department3">
                                <div class="single-departments-box-layout1">
                                    <div class="single-departments-img">
                                        <img alt="single" src="img/department/department23.jpg">
                                    </div>
                                    <div class="item-content">
                                        <div class="item-content-wrap">
                                            <h3 class="item-title title-bar-primary5">Hepatology Department</h3>
                                            <span class="sub-title">Dorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit, sed diam nonummy nibh erty cidunt utter laoreet dolore magna
                                                aliquam erat volutpanostrud exercier.</span>
                                            <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                                iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                                Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                                class
                                                bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                                Hymenaeos eros. Nisi mauris et adipisc iquam class bibendum non mattis
                                                fusceut perspiciatis undeuisque. </p>
                                            <h3 class="item-title">Advantage:</h3>
                                            <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                                iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                                Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                                class
                                                bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                                Hymenaeos eros. Nisi mauris et adipisc.
                                            </p>
                                            <ul class="department-info">
                                                <li>Keep Patients First Nulla lobortis.</li>
                                                <li>Keep Everyone Safe.</li>
                                                <li>Work Together Quisque pretium quam.</li>
                                                <li>Curabitur semper enim id accumsan.</li>
                                            </ul>
                                            <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                                iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                                Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                                class
                                                bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                                Hymenaeos eros. Nisi mauris et adipisc.Aliquam class bibendum mattis
                                                fusceut persecenas. Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi
                                                mauris et adipisc.</p>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="department4">
                                <div class="single-departments-box-layout1">
                                    <div class="single-departments-img">
                                        <img alt="single" src="img/department/department24.jpg">
                                    </div>
                                    <div class="item-content">
                                        <div class="item-content-wrap">
                                            <h3 class="item-title title-bar-primary5">Gastroenterology Department</h3>
                                            <span class="sub-title">Dorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit, sed diam nonummy nibh
                                                erty cidunt utter laoreet dolore magna aliquam erat volutpanostrud
                                                exercier.</span>
                                            <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                                iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                                Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                                class
                                                bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                                Hymenaeos eros. Nisi mauris et adipisc iquam class bibendum non mattis
                                                fusceut perspiciatis undeuisque. </p>
                                            <h3 class="item-title">Advantage:</h3>
                                            <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                                iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                                Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                                class
                                                bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                                Hymenaeos eros. Nisi mauris et adipisc.
                                            </p>
                                            <ul class="department-info">
                                                <li>Keep Patients First Nulla lobortis.</li>
                                                <li>Keep Everyone Safe.</li>
                                                <li>Work Together Quisque pretium quam.</li>
                                                <li>Curabitur semper enim id accumsan.</li>
                                            </ul>
                                            <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                                iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                                Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                                class
                                                bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                                Hymenaeos eros. Nisi mauris et adipisc.Aliquam class bibendum mattis
                                                fusceut persecenas. Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi
                                                mauris et adipisc.</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="item-cost">
                                                    <h3 class="item-title title-bar-primary7">Our Pricing Plan</h3>
                                                    <ul>
                                                        <li>Dental Implant<span>$45.00</span></li>
                                                        <li>Another Feature<span>$25.00</span></li>
                                                        <li>Another Major Feature<span>$25.00</span></li>
                                                        <li>Emergency Care<span>$25.00</span></li>
                                                        <li>Prescription Drugs<span>$85.00</span></li>
                                                        <li>Specialist Visits<span>$99.00</span></li>
                                                        <li>Rheumatology<span>$89.00</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-specialist-wrap">
                                            <h3 class="item-title title-bar-primary7">Meet Our Doctors</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12 col-12">
                                                <div class="item-specialist">
                                                    <div class="media media-none--xs">
                                                        <div class="item-img">
                                                            <img src="img/team/team29.png" alt="Generic placeholder image"
                                                                class="img-fluid media-img-auto">
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="item-title"><a href="single-doctor.html">Dr.
                                                                    David Roy</a></h4>
                                                            <span>MSD, DDSc, MDS</span>
                                                            <p>Rorem ipsum dolramet tetuer work rorem ipsum
                                                                consectetuer.</p>
                                                            <a href="#" class="item-btn">Make an Appointment</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-12">
                                                <div class="item-specialist">
                                                    <div class="media media-none--xs">
                                                        <div class="item-img">
                                                            <img src="img/team/team30.png" alt="Generic placeholder image"
                                                                class="img-fluid media-img-auto">
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="item-title"><a href="single-doctor.html">Dr.
                                                                    Zinia Zara</a></h4>
                                                            <span>MSD, DDSc, MDS</span>
                                                            <p>Rorem ipsum dolramet tetuer work rorem ipsum
                                                                consectetuer.</p>
                                                            <a href="#" class="item-btn">Make an Appointment</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-12">
                                                <div class="item-specialist">
                                                    <div class="media media-none--xs">
                                                        <div class="item-img">
                                                            <img src="img/team/team31.png" alt="Generic placeholder image"
                                                                class="img-fluid media-img-auto">
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="item-title"><a href="single-doctor.html">Dr.
                                                                    Julea</a></h4>
                                                            <span>MSD, DDSc, MDS</span>
                                                            <p>Rorem ipsum dolramet tetuer work rorem ipsum
                                                                consectetuer.</p>
                                                            <a href="#" class="item-btn">Make an Appointment</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-12">
                                                <div class="item-specialist">
                                                    <div class="media media-none--xs">
                                                        <div class="item-img">
                                                            <img src="img/team/team32.png" alt="Generic placeholder image"
                                                                class="img-fluid media-img-auto">
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="item-title"><a href="single-doctor.html">Dr.
                                                                    Steven Smith</a></h4>
                                                            <span>MSD, DDSc, MDS</span>
                                                            <p>Rorem ipsum dolramet tetuer work rorem ipsum
                                                                consectetuer.</p>
                                                            <a href="#" class="item-btn">Make an Appointment</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="department5">
                                <div class="single-departments-box-layout1">
                                    <div class="single-departments-img">
                                        <img alt="single" src="img/department/department25.jpg">
                                    </div>
                                    <div class="item-content">
                                        <div class="item-content-wrap">
                                            <h3 class="item-title title-bar-primary5">Ophthalmology Department</h3>
                                            <span class="sub-title">Dorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit, sed diam nonummy nibh
                                                erty cidunt utter laoreet dolore magna aliquam erat volutpanostrud
                                                exercier.</span>
                                            <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                                iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                                Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                                class
                                                bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                                Hymenaeos eros. Nisi mauris et adipisc iquam class bibendum non mattis
                                                fusceut perspiciatis undeuisque. </p>
                                            <h3 class="item-title">Advantage:</h3>
                                            <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                                iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                                Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                                class
                                                bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                                Hymenaeos eros. Nisi mauris et adipisc.
                                            </p>
                                            <ul class="department-info">
                                                <li>Keep Patients First Nulla lobortis.</li>
                                                <li>Keep Everyone Safe.</li>
                                                <li>Work Together Quisque pretium quam.</li>
                                                <li>Curabitur semper enim id accumsan.</li>
                                            </ul>
                                            <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                                iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                                Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                                class
                                                bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                                Hymenaeos eros. Nisi mauris et adipisc.Aliquam class bibendum mattis
                                                fusceut persecenas. Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi
                                                mauris et adipisc.</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="item-cost">
                                                    <h3 class="item-title title-bar-primary7">Our Pricing Plan</h3>
                                                    <ul>
                                                        <li>Dental Implant<span>$45.00</span></li>
                                                        <li>Another Feature<span>$25.00</span></li>
                                                        <li>Another Major Feature<span>$25.00</span></li>
                                                        <li>Emergency Care<span>$25.00</span></li>
                                                        <li>Prescription Drugs<span>$85.00</span></li>
                                                        <li>Specialist Visits<span>$99.00</span></li>
                                                        <li>Rheumatology<span>$89.00</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-specialist-wrap">
                                            <h3 class="item-title title-bar-primary7">Meet Our Doctors</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12 col-12">
                                                <div class="item-specialist">
                                                    <div class="media media-none--xs">
                                                        <div class="item-img">
                                                            <img src="img/team/team29.png" alt="Generic placeholder image"
                                                                class="img-fluid media-img-auto">
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="item-title"><a href="single-doctor.html">Dr.
                                                                    David Roy</a></h4>
                                                            <span>MSD, DDSc, MDS</span>
                                                            <p>Rorem ipsum dolramet tetuer work rorem ipsum
                                                                consectetuer.</p>
                                                            <a href="#" class="item-btn">Make an Appointment</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-12">
                                                <div class="item-specialist">
                                                    <div class="media media-none--xs">
                                                        <div class="item-img">
                                                            <img src="img/team/team30.png" alt="Generic placeholder image"
                                                                class="img-fluid media-img-auto">
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="item-title"><a href="single-doctor.html">Dr.
                                                                    Zinia Zara</a></h4>
                                                            <span>MSD, DDSc, MDS</span>
                                                            <p>Rorem ipsum dolramet tetuer work rorem ipsum
                                                                consectetuer.</p>
                                                            <a href="#" class="item-btn">Make an Appointment</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-12">
                                                <div class="item-specialist">
                                                    <div class="media media-none--xs">
                                                        <div class="item-img">
                                                            <img src="img/team/team31.png" alt="Generic placeholder image"
                                                                class="img-fluid media-img-auto">
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="item-title"><a href="single-doctor.html">Dr.
                                                                    Julea</a></h4>
                                                            <span>MSD, DDSc, MDS</span>
                                                            <p>Rorem ipsum dolramet tetuer work rorem ipsum
                                                                consectetuer.</p>
                                                            <a href="#" class="item-btn">Make an Appointment</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-12">
                                                <div class="item-specialist">
                                                    <div class="media media-none--xs">
                                                        <div class="item-img">
                                                            <img src="img/team/team32.png" alt="Generic placeholder image"
                                                                class="img-fluid media-img-auto">
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="item-title"><a href="single-doctor.html">Dr.
                                                                    Steven Smith</a></h4>
                                                            <span>MSD, DDSc, MDS</span>
                                                            <p>Rorem ipsum dolramet tetuer work rorem ipsum
                                                                consectetuer.</p>
                                                            <a href="#" class="item-btn">Make an Appointment</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="department6">
                                <div class="single-departments-box-layout1">
                                    <div class="single-departments-img">
                                        <img alt="single" src="img/department/department27.jpg">
                                    </div>
                                    <div class="item-content">
                                        <div class="item-content-wrap">
                                            <h3 class="item-title title-bar-primary5">Orthopedics Department</h3>
                                            <span class="sub-title">Dorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit, sed diam nonummy nibh
                                                erty cidunt utter laoreet dolore magna aliquam erat volutpanostrud
                                                exercier.</span>
                                            <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                                iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                                Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                                class
                                                bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                                Hymenaeos eros. Nisi mauris et adipisc iquam class bibendum non mattis
                                                fusceut perspiciatis undeuisque. </p>
                                            <h3 class="item-title">Advantage:</h3>
                                            <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                                iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                                Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                                class
                                                bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                                Hymenaeos eros. Nisi mauris et adipisc.
                                            </p>
                                            <ul class="department-info">
                                                <li>Keep Patients First Nulla lobortis.</li>
                                                <li>Keep Everyone Safe.</li>
                                                <li>Work Together Quisque pretium quam.</li>
                                                <li>Curabitur semper enim id accumsan.</li>
                                            </ul>
                                            <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                                iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                                Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                                class
                                                bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                                Hymenaeos eros. Nisi mauris et adipisc.Aliquam class bibendum mattis
                                                fusceut persecenas. Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi
                                                mauris et adipisc.</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="item-cost">
                                                    <h3 class="item-title title-bar-primary7">Our Pricing Plan</h3>
                                                    <ul>
                                                        <li>Dental Implant<span>$45.00</span></li>
                                                        <li>Another Feature<span>$25.00</span></li>
                                                        <li>Another Major Feature<span>$25.00</span></li>
                                                        <li>Emergency Care<span>$25.00</span></li>
                                                        <li>Prescription Drugs<span>$85.00</span></li>
                                                        <li>Specialist Visits<span>$99.00</span></li>
                                                        <li>Rheumatology<span>$89.00</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-specialist-wrap">
                                            <h3 class="item-title title-bar-primary7">Meet Our Doctors</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12 col-12">
                                                <div class="item-specialist">
                                                    <div class="media media-none--xs">
                                                        <div class="item-img">
                                                            <img src="img/team/team29.png" alt="Generic placeholder image"
                                                                class="img-fluid media-img-auto">
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="item-title"><a href="single-doctor.html">Dr.
                                                                    David Roy</a></h4>
                                                            <span>MSD, DDSc, MDS</span>
                                                            <p>Rorem ipsum dolramet tetuer work rorem ipsum
                                                                consectetuer.</p>
                                                            <a href="#" class="item-btn">Make an Appointment</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-12">
                                                <div class="item-specialist">
                                                    <div class="media media-none--xs">
                                                        <div class="item-img">
                                                            <img src="img/team/team30.png" alt="Generic placeholder image"
                                                                class="img-fluid media-img-auto">
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="item-title"><a href="single-doctor.html">Dr.
                                                                    Zinia Zara</a></h4>
                                                            <span>MSD, DDSc, MDS</span>
                                                            <p>Rorem ipsum dolramet tetuer work rorem ipsum
                                                                consectetuer.</p>
                                                            <a href="#" class="item-btn">Make an Appointment</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-12">
                                                <div class="item-specialist">
                                                    <div class="media media-none--xs">
                                                        <div class="item-img">
                                                            <img src="img/team/team31.png" alt="Generic placeholder image"
                                                                class="img-fluid media-img-auto">
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="item-title"><a href="single-doctor.html">Dr.
                                                                    Julea</a></h4>
                                                            <span>MSD, DDSc, MDS</span>
                                                            <p>Rorem ipsum dolramet tetuer work rorem ipsum
                                                                consectetuer.</p>
                                                            <a href="#" class="item-btn">Make an Appointment</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-12">
                                                <div class="item-specialist">
                                                    <div class="media media-none--xs">
                                                        <div class="item-img">
                                                            <img src="img/team/team32.png" alt="Generic placeholder image"
                                                                class="img-fluid media-img-auto">
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="item-title"><a href="single-doctor.html">Dr.
                                                                    Steven Smith</a></h4>
                                                            <span>MSD, DDSc, MDS</span>
                                                            <p>Rorem ipsum dolramet tetuer work rorem ipsum
                                                                consectetuer.</p>
                                                            <a href="#" class="item-btn">Make an Appointment</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="department7">
                                <div class="single-departments-box-layout1">
                                    <div class="single-departments-img">
                                        <img alt="single" src="img/department/department28.jpg">
                                    </div>
                                    <div class="item-content">
                                        <div class="item-content-wrap">
                                            <h3 class="item-title title-bar-primary5">Gynecology Department</h3>
                                            <span class="sub-title">Dorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit, sed diam nonummy nibh
                                                erty cidunt utter laoreet dolore magna aliquam erat volutpanostrud
                                                exercier.</span>
                                            <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                                iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                                Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                                class
                                                bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                                Hymenaeos eros. Nisi mauris et adipisc iquam class bibendum non mattis
                                                fusceut perspiciatis undeuisque. </p>
                                            <h3 class="item-title">Advantage:</h3>
                                            <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                                iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                                Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                                class
                                                bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                                Hymenaeos eros. Nisi mauris et adipisc.
                                            </p>
                                            <ul class="department-info">
                                                <li>Keep Patients First Nulla lobortis.</li>
                                                <li>Keep Everyone Safe.</li>
                                                <li>Work Together Quisque pretium quam.</li>
                                                <li>Curabitur semper enim id accumsan.</li>
                                            </ul>
                                            <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                                iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                                Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                                class
                                                bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                                Hymenaeos eros. Nisi mauris et adipisc.Aliquam class bibendum mattis
                                                fusceut persecenas. Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi
                                                mauris et adipisc.</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="item-cost">
                                                    <h3 class="item-title title-bar-primary7">Our Pricing Plan</h3>
                                                    <ul>
                                                        <li>Dental Implant<span>$45.00</span></li>
                                                        <li>Another Feature<span>$25.00</span></li>
                                                        <li>Another Major Feature<span>$25.00</span></li>
                                                        <li>Emergency Care<span>$25.00</span></li>
                                                        <li>Prescription Drugs<span>$85.00</span></li>
                                                        <li>Specialist Visits<span>$99.00</span></li>
                                                        <li>Rheumatology<span>$89.00</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-specialist-wrap">
                                            <h3 class="item-title title-bar-primary7">Meet Our Doctors</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12 col-12">
                                                <div class="item-specialist">
                                                    <div class="media media-none--xs">
                                                        <div class="item-img">
                                                            <img src="img/team/team29.png" alt="Generic placeholder image"
                                                                class="img-fluid media-img-auto">
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="item-title"><a href="single-doctor.html">Dr.
                                                                    David Roy</a></h4>
                                                            <span>MSD, DDSc, MDS</span>
                                                            <p>Rorem ipsum dolramet tetuer work rorem ipsum
                                                                consectetuer.</p>
                                                            <a href="#" class="item-btn">Make an Appointment</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-12">
                                                <div class="item-specialist">
                                                    <div class="media media-none--xs">
                                                        <div class="item-img">
                                                            <img src="img/team/team30.png" alt="Generic placeholder image"
                                                                class="img-fluid media-img-auto">
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="item-title"><a href="single-doctor.html">Dr.
                                                                    Zinia Zara</a></h4>
                                                            <span>MSD, DDSc, MDS</span>
                                                            <p>Rorem ipsum dolramet tetuer work rorem ipsum
                                                                consectetuer.</p>
                                                            <a href="#" class="item-btn">Make an Appointment</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-12">
                                                <div class="item-specialist">
                                                    <div class="media media-none--xs">
                                                        <div class="item-img">
                                                            <img src="img/team/team31.png" alt="Generic placeholder image"
                                                                class="img-fluid media-img-auto">
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="item-title"><a href="single-doctor.html">Dr.
                                                                    Julea</a></h4>
                                                            <span>MSD, DDSc, MDS</span>
                                                            <p>Rorem ipsum dolramet tetuer work rorem ipsum
                                                                consectetuer.</p>
                                                            <a href="#" class="item-btn">Make an Appointment</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-12">
                                                <div class="item-specialist">
                                                    <div class="media media-none--xs">
                                                        <div class="item-img">
                                                            <img src="img/team/team32.png" alt="Generic placeholder image"
                                                                class="img-fluid media-img-auto">
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="item-title"><a href="single-doctor.html">Dr.
                                                                    Steven Smith</a></h4>
                                                            <span>MSD, DDSc, MDS</span>
                                                            <p>Rorem ipsum dolramet tetuer work rorem ipsum
                                                                consectetuer.</p>
                                                            <a href="#" class="item-btn">Make an Appointment</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="department8">
                                <div class="single-departments-box-layout1">
                                    <div class="single-departments-img">
                                        <img alt="single" src="img/department/department29.jpg">
                                    </div>
                                    <div class="item-content">
                                        <div class="item-content-wrap">
                                            <h3 class="item-title title-bar-primary5">Neurology Department</h3>
                                            <span class="sub-title">Dorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit, sed diam nonummy nibh
                                                erty cidunt utter laoreet dolore magna aliquam erat volutpanostrud
                                                exercier.</span>
                                            <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                                iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                                Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                                class
                                                bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                                Hymenaeos eros. Nisi mauris et adipisc iquam class bibendum non mattis
                                                fusceut perspiciatis undeuisque. </p>
                                            <h3 class="item-title">Advantage:</h3>
                                            <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                                iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                                Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                                class
                                                bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                                Hymenaeos eros. Nisi mauris et adipisc.
                                            </p>
                                            <ul class="department-info">
                                                <li>Keep Patients First Nulla lobortis.</li>
                                                <li>Keep Everyone Safe.</li>
                                                <li>Work Together Quisque pretium quam.</li>
                                                <li>Curabitur semper enim id accumsan.</li>
                                            </ul>
                                            <p>Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipisc
                                                iquam class bibendum non mattis fusceut perspiciatis undeuisque.
                                                Maecenas. Eros mus. Hymenaeos eros. Nisi mauris et adipiscing. Aliquam
                                                class
                                                bibendum mattis fusceut persecenas. Quisque. Maecenas. Eros mus.
                                                Hymenaeos eros. Nisi mauris et adipisc.Aliquam class bibendum mattis
                                                fusceut persecenas. Quisque. Maecenas. Eros mus. Hymenaeos eros. Nisi
                                                mauris et adipisc.</p>
                                        </div>
                                        
                                        
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Single Department End Here -->

@endsection