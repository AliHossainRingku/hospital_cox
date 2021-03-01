<div class="slider-area slider-layout3 bg-light-primary">
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider-1" class="slides">
            @foreach($banners as $banner)
            <img src="frontend/img/slider/slide3-1.jpg" alt="slider" title="#slider-direction-1" />
            <img src="frontend/img/slider/slide3-2.jpg" alt="slider" title="#slider-direction-2" />
            <img src="frontend/img/slider/slide3-3.jpg" alt="slider" title="#slider-direction-3" />
            @endforeach
        </div>
        @foreach($banners as $banner)
        <div id="slider-direction-1" class="t-cn slider-direction">
            <div class="slider-content s-tb slide-1">
                <div class="text-left title-container s-tb-c">
                    <div class="container">
                        <div class="slider-big-text">Introducing<span>{{$banner->banner_title}}</span></div>
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