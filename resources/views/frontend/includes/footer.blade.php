<footer>
    <section class="footer-top-wrap">
        <div class="container">
            <div class="row">
                <div class="single-item col-lg-3 col-md-6 col-12">
                    <div class="footer-box">
                        <div class="footer-logo">
                            <a href="index.html"><img src="frontend/img/footerlogo.png" class="img-fluid" alt="footer-logo"></a>
                        </div>
                        <div class="footer-about">
                            <p>We are ipsum dolor sit amet aeeatt consectetuer adipiscing elitseder diam
                                nonummy.
                            </p>
                        </div>
                        <div class="footer-contact-info">
                            <ul>
                                <li><i class="fas fa-map-marker-alt"></i>59 Street, 1208 Dhanmondi</li>
                                <li><i class="fas fa-phone"></i>+880 1788 855 500</li>
                                <li><i class="far fa-envelope"></i>hospitalcox@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-item col-lg-3 col-md-6 col-12">
                    <div class="footer-box">
                        <div class="footer-header">
                            <h3>Departments</h3>
                        </div>
                        <div class="footer-departments">
                            <ul>
                                <?php $departments = DB::table('departments')
                                    ->where('publication_status',1)
                                    ->get();
                                ?>
                                @foreach($departments as $data)
                                <li>
                                    <a href="{{ url('/departments/'.$data->id) }}"> {{ $data->department_name }}  </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-item col-lg-3 col-md-6 col-12">
                    <div class="footer-box">
                        <div class="footer-header">
                            <h3>Quick Links</h3>
                        </div>
                        <div class="footer-quick-link">
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="about.html">What We Do</a></li>
                                <li><a href="faq.html">Faq’s</a></li>
                                <li><a href="appointment.html">Appointment</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="contact.html">24/7 Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-item col-lg-3 col-md-6 col-12">
                    <div class="footer-box">
                        <div class="footer-header">
                            <h3>Opening Hours</h3>
                        </div>
                        <div class="footer-opening-hours">
                            <ul>
                                <li>Mon - Tue: 9.00 - 17.00</li>
                                <li>Wed - Thur: 9.00 - 16.00</li>
                                <li>Fri - Sat: 9.00 - 12.00</li>
                                <li>Saturday: 9.00 - 14.00</li>
                                <li>Sunday:<span> Closed</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-center-wrap">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4 col-12">
                    <div class="footer-social">
                        <ul>
                            <li>Follow Us:</li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="newsletter-title">
                                <h4 class="item-title">Stay informed and healthy</h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="newsletter-form">
                                <div class="input-group stylish-input-group">
                                    <input type="text" class="form-control" placeholder="Enter your e-mail">
                                    <span class="input-group-addon">
                                        <button type="submit">
                                            <span aria-hidden="true">SIGN UP!</span>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-bottom-wrap">
        <div class="copyright">Copyright&copy;2021. All Rights Reserved.<a href="https://www.radiustheme.com">
                Hospital Cox Ltd. </a>
        </div>
        	<span style="color:gray; font-size: 10px; font-style:italic; float: right;" > Developed By: <a href="https://www.facebook.com/alihossain.ringku">Ali Hossain Ringku</a>
        	</span>
        
    </section>
</footer>