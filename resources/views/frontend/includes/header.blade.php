<header id="header_3">
    <div class="header-menu-area header-menu-layout3">
        <div class="container">
            <div class="row no-gutters d-flex align-items-center">
                <div class="col-lg-2 col-md-2 logo-area-layout1">
                    <a href="index.html" class="temp-logo">
                        <img src="frontend/img/logo-light.png" alt="logo" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-7 col-md-7 possition-static">
                    <div class="template-main-menu">
                        <nav id="dropdown">
                            <ul>
                                <li>
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li>
                                    <a href="#">About</a>
                                    <ul class="dropdown-menu-col-1">
                                        <li><a href="about1.html">Objectives</a></li>
                                        <li><a href="about2.html">Mission & Vision</a></li>
                                        <li><a href="about3.html">Company Profile</a></li>
                                    </ul>
                                </li>                                        
                                <li>
                                    <a href="{{url('/departments')}}">Departments</a>
                                    <ul class="dropdown-menu-col-1">
                                    	<?php $departments = DB::table('departments')
						                    ->where('publication_status',1)
						                    ->get();
						                ?>
                                        @foreach($departments as $data)
                                        <li>
                                            <a href="{{ url('/departments/'.$data->id.'') }}"> {{ $data->department_name }}  </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Doctors</a>
                                    <ul class="dropdown-menu-col-1">
                                    	<?php $doctors = DB::table('doctors')
						                    ->where('publication_status',1)
						                    ->get();
						                ?>
                                        @foreach($doctors as $data)
                                        <li>
                                            <a href="{{url('/doctors')}}"> {{ $data->doctor_name }}  </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Services</a>
                                    <ul class="dropdown-menu-col-1">
                                    	<?php $services = DB::table('services')
						                    ->where('publication_status',1)
						                    ->get();
						                ?>
                                        @foreach($services as $data)
                                        <li>
                                            <a href="services.html"> {{ $data->service_name }}  </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">News</a>
                                    <ul class="dropdown-menu-col-1">
                                        <li>
                                            <a href="{{url('/news')}}">News and Events</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/news')}}">Photo Gallery</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/news')}}">Vedio Gallery</a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header-action-items-layout1">
                        <ul>
                            <li class="d-none d-xl-block">
                                <form id="top-search-form" class="header-search-light">
                                    <input type="text" class="search-input" placeholder="Search...." required="">
                                    <button class="search-button">
                                        <i class="flaticon-search"></i>
                                    </button>
                                </form>
                            </li>
                        
                            <li>
                                <a href="#" class="action-items-light-btn ml-3">Appointment</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>