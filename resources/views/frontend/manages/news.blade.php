@extends('frontend.home_layout')

@section('content')

<!-- Inne Page Banner Area Start Here -->
        <section class="inner-page-banner bg-common inner-page-top-margin" data-bg-image="frontend/img/figure/figure2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Standard Grid News</h1>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>News</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->
        <!-- Blog Grid Area Start Here -->
        <section class="blog-wrap-layout2 bg-light-primary100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 col-12">
                        <div class="row">
                        	@foreach($news as $data)
                            <div class="single-item col-md-6 col-sm-12 col-12">
                                <div class="blog-box-layout4">
                                    <div class="item-img">
                                        <a href="single-news.html">
                                            <img src="{{$data->news_image}}" class="img-fluid" alt="blog">
                                        </a>
                                        <div class="post-date">22
                                            <span>June</span>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <h3 class="item-title">
                                            <a href="{{url('/news/'.$data->id)}}">{{$data->news_title}}</a>
                                        </h3>
                                        <p class="line-of-3-texts">{{$data->news_description}}.
                                        </p>
                                        <div class="post-actions-wrapper">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="flaticon-people"></i>by
                                                        <span>admin</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="flaticon-interface"></i>15</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>


                        <ul class="pagination-layout1 margin-t-20">
                            <li>
                                <a href="#">Previous</a>
                            </li>
                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">Next</a>
                            </li>
                        </ul>
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
                                <?php $departments = DB::table('departments')
                                    ->where('publication_status',1)
                                    ->get();
                                ?>
                                @foreach($departments as $data)
                                <li>
                                    <a href="#">{{$data->department_name}}
                                        <span>15</span>
                                    </a>
                                </li>
                                @endforeach
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
                                <?php $departments = DB::table('departments')
                                    ->where('publication_status',1)
                                    ->get();
                                ?>
                                @foreach($departments as $data)
                                <li>
                                    <a href="#">{{$data->department_name}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Grid Area End Here -->
    



@endsection


<style type="text/css">
    .line-of-3-texts {
       overflow: hidden;
       text-overflow: ellipsis;
       display: -webkit-box;
       -webkit-line-clamp: 4; /* number of lines to show */
       -webkit-box-orient: vertical;
    }
</style>