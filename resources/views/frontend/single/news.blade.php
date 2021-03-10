@extends('frontend.home_layout')

@section('content')

	<!-- All Doctors Start Here -->
    <section class="blog-detail-wrap bg-light-primary100">
        <div class="container">
        	@foreach($news as $data)
			@endforeach
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-12">
                    <div class="blog-detail-box">
                        <div class="blog-detail-title">
                            <div class="item-img">
                                <img src="img/blog/blog13.jpg" class="img-fluid" alt="blog">
                                <div class="post-date">20
                                    <span>June</span>
                                </div>
                            </div>
                            <div class="item-content">
                                <h2 class="item-title">
                                    {{$data->news_title}}
                                </h2>
                                <div class="post-actions-wrapper">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="flaticon-people"></i>by <span>admin</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="flaticon-tag"></i>by <span>Mdical, Care</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="flaticon-interface"></i>15</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content">
                            <p>{{$data->news_description}}.</p>
                        </div>
                        <div class="blog-social">
                            <h3>Share This Post:</h3>
                            <ul>
                                <li class="facebook">
                                    <a href="#"><i class="fab fa-facebook-square"></i>facebook</a>
                                </li>
                                <li class="twitter">
                                    <a href="#"><i class="fab fa-twitter-square"></i>twitter</a>
                                </li>
                                <li class="google">
                                    <a href="#"><i class="fab fa-google-plus-square"></i>google plus</a>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-author">
                            <div class="media media-none--xs">
                                <img src="img/blog/blog15.jpg" alt="Blog Author" class="rounded-circle media-img-auto">
                                <div class="media-body">
                                    <h4 class="author-title">About The Author</h4>
                                    <p>Eut also the leap into electronic.Eimply dummy text of the printing and type
                                        setting indusetry Lorem Ipsum has been the industry's standard.</p>
                                    <ul class="author-social">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-skype"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="blog-comment">
                            <h3>03 Comments</h3>
                            <ul>
                                <li>
                                    <div class="media media-none--xs">
                                        <img src="img/blog/blog16.jpg" alt="Comment" class="rounded-circle media-img-auto">
                                        <div class="media-body">
                                            <h4>Dakcon Nitiya <span>, June 29, 2018</span></h4>
                                            <p>Borem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has is simply dumhe printing and typesetting
                                                industry.</p>
                                            <a href="#" class="item-btn">Reply</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media media-none--xs">
                                        <img src="img/blog/blog17.jpg" alt="Comment" class="rounded-circle media-img-auto">
                                        <div class="media-body">
                                            <h4>Dakcon Nitiya <span>, June 29, 2018</span></h4>
                                            <p>Borem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has is simply dumhe printing and typesetting
                                                industry.</p>
                                            <a href="#" class="item-btn">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-form-box">
                            <h3 class="title title-bar-primary4">Leave Us Message</h3>
                            <form class="contact-form-box">
                                <div class="row gutters-10">
                                    <div class="col-md-4 form-group">
                                        <input type="text" placeholder="Name *" class="form-control" name="Phone"
                                            id="form-phone" data-error="Phone field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <input type="email" placeholder="E-mail *" class="form-control" name="email"
                                            id="form-email" data-error="E-mail field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <input type="text" placeholder="Website" class="form-control" name="subject"
                                            id="form-subject" data-error="Subject field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <textarea placeholder="Message*" class="textarea form-control" name="message"
                                            id="form-message" rows="7" cols="20" data-error="Message field is required"
                                            required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group margin-b-none">
                                        <button class="item-btn">Leave Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="sidebar-widget-area sidebar-break-md col-xl-3 col-lg-4 col-12">
                    <div class="widget widget-search">
                        <h3 class="section-title title-bar-primary">Search Keywords</h3>
                        <div class="input-group stylish-input-group">
                            <input type="text" class="form-control" placeholder="Search Here . . .">
                            <span class="input-group-addon">
                                <button type="submit">
                                    <span class="flaticon-search" aria-hidden="true"></span>
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="widget widget-categories">
                        <h3 class="section-title title-bar-primary">Categories</h3>
                        <ul>
                            <li>
                                <a href="#">Cardiology
                                    <span>15</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">Dental
                                    <span>10</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">Laboratory
                                    <span>14</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">Research
                                    <span>13</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">Eye
                                    <span>19</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget-recent">
                        <h3 class="section-title title-bar-primary">Related Posts</h3>
                        <div class="media">
                            <a href="#">
                                <img src="img/blog/blog6.jpg" alt="news" class="img-fluid">
                            </a>
                            <div class="media-body space-sm">
                                <div class="post-date">June 27, 2018</div>
                                <h4 class="post-title">
                                    <a href="#">Achieving Better Health Cancer treatment for.</a>
                                </h4>
                            </div>
                        </div>
                        <div class="media">
                            <a href="#">
                                <img src="img/blog/blog7.jpg" alt="news" class="img-fluid">
                            </a>
                            <div class="media-body space-sm">
                                <div class="post-date">June 27, 2018</div>
                                <h4 class="post-title">
                                    <a href="#">Achieving Better Health Cancer treatment for.</a>
                                </h4>
                            </div>
                        </div>
                        <div class="media">
                            <a href="#">
                                <img src="img/blog/blog8.jpg" alt="news" class="img-fluid">
                            </a>
                            <div class="media-body space-sm">
                                <div class="post-date">June 27, 2018</div>
                                <h4 class="post-title">
                                    <a href="#">Achieving Better Health Cancer treatment for.</a>
                                </h4>
                            </div>
                        </div>
                        <div class="media">
                            <a href="#">
                                <img src="img/blog/blog9.jpg" alt="news" class="img-fluid">
                            </a>
                            <div class="media-body space-sm">
                                <div class="post-date">June 27, 2018</div>
                                <h4 class="post-title">
                                    <a href="#">Achieving Better Health Cancer treatment for.</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-tag">
                        <h3 class="section-title title-bar-primary">Tags</h3>
                        <ul>
                            <li>
                                <a href="#">Dental</a>
                            </li>
                            <li>
                                <a href="#">Eye Care</a>
                            </li>
                            <li>
                                <a href="#">Labrotary</a>
                            </li>
                            <li>
                                <a href="#">Care</a>
                            </li>
                            <li>
                                <a href="#">Health</a>
                            </li>
                            <li>
                                <a href="#">Modern Clinic</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- All Doctors End Here -->

@endsection