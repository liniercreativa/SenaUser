<x-layoutsatu>
    <x-slot:logo>
        {{ $logo }}
    </x-slot:logo>


    <style>
        .layanandesc {
            font-size: 16px;
            line-height: 20px;
            color: #fff !important;
        }
    </style>

    <section class="section-dark p-0 bg-dark-gray">
        <div class="swiper lg-no-parallax full-screen md-h-600px sm-h-500px ipad-top-space-margin swiper-light-pagination"
            data-slider-options='{ "slidesPerView": 1, "loop": true, "parallax": true, "speed": 1000, "pagination": { "el": ".swiper-pagination-bullets", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
            <div class="swiper-wrapper">
                @foreach ($sliders as $slider)
                    <div class="swiper-slide overflow-hidden">
                        <div class="cover-background position-absolute top-0 start-0 w-100 h-100"
                            data-swiper-parallax="500"
                            style="background-image: url('{{ $globalurl }}{{ $slider->image }}')">
                            <div class="opacity-light bg-gradient-sherpa-blue-black"></div>
                            <div class="container h-100" data-swiper-parallax="-500">
                                <div class="row align-items-center h-100">
                                    <div class="col-xl-7 col-lg-8 col-md-10 position-relative text-white text-center text-md-start"
                                        data-anime='{ "el": "childs", "translateX": [100, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                        <h1 class="alt-font w-90 xl-w-100 text-shadow-double-large ls-minus-2px">
                                            {{ $slider->primary_text_eng }}
                                        </h1>
                                        <a href="{{ $slider->button_link }}" target="_blank"
                                            class="btn btn-extra-large btn-rounded with-rounded btn-base-color btn-box-shadow box-shadow-extra-large mt-20px sm-mt-0">{{ $slider->button_text_eng }}<span
                                                class="bg-white text-base-color"><i
                                                    class="fas fa-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
        </div>
    </section>

    <section class="pb-8 md-pb-17 xs-pb-28">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-xl-5 col-lg-6 col-md-9 text-center text-lg-start">
                    <div
                        class="position-relative overflow-hidden vforcehmobile rounded-4 h-350px lg-h-400px d-flex align-items-center justify-content-center w-100">
                        <div class="ratio ratio-16x9 w-100">
                            <iframe class="rounded-4" src="{{ $about->link_video }}" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen id="youtube-player">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 offset-xl-1 position-relative xs-pt-25px"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span
                        class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-25px">{{ $about->sub_headline_eng }}</span>
                    <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px mb-20px sm-w-85 xs-w-100 mx-auto">
                        {{ $about->main_headline_eng }}
                    </h3>
                    {!! $about->description_eng !!}
                </div>
            </div>



            {{-- belum Dikerjakan --}}
            <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 justify-content-center text-center counter-style-04"
                data-anime='{"el": "childs", "opacity": [0,1], "translateX": [50, 0], "duration": 800, "delay":300, "staggervalue": 300, "easing": "easeOutQuad" }'
                style="margin-top:20px;">

                @foreach ($counter as $item)
                    <div class="col-6 col-md-3 last-paragraph-no-margin sm-mb-40px">
                        <p>{{ $item->title_eng }}</p>
                        <h2 class="vertical-counter d-inline-flex text-dark-gray fw-700 ls-minus-2px mt-5 mb-0 ls-minus-1px"
                            data-text="{{ $item->prefix }}" data-to="{{ $item->number }}"></h2>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


























    <section
        class="bg-gradient-very-light-gray ps-7 pe-7 xxl-ps-3 xxl-pe-3 xs-px-0 cover-background background-position-center-top"
        style="background-color:#f0f4fd;">
        <div class="container-fluid">
            <div class="row justify-content-center mb-3">
                <div class="col-xl-5 col-lg-7 col-md-8 text-center"
                    data-anime='{ "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span
                        class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-5px text-base-color">{{ $titles->texttitle_eng }}</span>
                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-2px">{{ $titles->textsubtitle_eng }} </h2>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-12 position-relative"
                    data-anime='{ "translateX": [150, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class=" sm-outside-box-right-0">
                        <div class="swiper"
                            data-slider-options='{ "spaceBetween": 35, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 3 }, "320": { "slidesPerView": 1 } }}'>
                            <div class="swiper-wrapper">
                                <!-- start content carousal item -->



                                @foreach ($capabilities as $capability)
                                    <div class="swiper-slide">

                                        <div class="interactive-banner-style-06">
                                            <div class="interactive-banners-image">
                                                <img src="{{ $globalurl }}{{ $capability->image }}"
                                                    alt="" />
                                                <div
                                                    class="overlay-bg bg-gradient-black-bottom-transparent opacity-light">
                                                </div>

                                            </div>
                                            <div class="interactive-banners-content p-60px lg-p-30px">
                                                <div class="h-100 w-100 last-paragraph-no-margin">
                                                    <a href="{{ url('capability/') }}#{{ Str::lower($capability->title_eng) }}"
                                                        class="fs-22 d-block text-white mb-10px fw-500">{{ $capability->title_eng }}</a>
                                                    <p
                                                        class="layanandesc interactive-banners-content-text w-95 lg-w-100">
                                                        {{ $capability->description_eng }}
                                                    </p>
                                                </div>
                                            </div>
                                            <a
                                                href="{{ url('capability/') }}#{{ Str::lower($capability->title_eng) }}">
                                                <div class="box-overlay bg-gradient-dark-transparent"></div>
                                            </a>

                                        </div>
                                    </div>
                                @endforeach




                                <!-- end content carousal item -->

                            </div>
                        </div>
                    </div>
                    <!-- start slider pagination -->
                    <!--<div class="swiper-pagination slider-four-slide-pagination-1 swiper-pagination-style-2 swiper-pagination-clickable swiper-pagination-bullets"></div>-->
                    <!-- end slider pagination -->
                </div>
            </div>
        </div>
    </section>








    {{-- <section class="bg-very-light-gray">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-xl-7 col-lg-9 col-md-10 text-center">
                    <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px"
                        data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        Mengapa Kami
                    </h3>
                    <p>
                        Tim engineering kami akan memandu klien kami dalam setiap tahap
                        proyek sehingga menghasilkan produk yang berkualitas
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center"
                data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <!-- start features box item -->
                <div class="col icon-with-text-style-07 transition-inner-all sm-mb-30px">
                    <div
                        class="bg-white h-100 justify-content-end box-shadow-quadruple-large-hover feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                        <div class="feature-box-icon">
                            <a href="demo-accounting-services-details.html"><img
                                    src="{{ URL::asset('assets') }}/image/deal.png" class="h-95px"
                                    alt="" /></a>
                        </div>
                        <div class="feature-box-content">
                            <a href="demo-accounting-services-details.html"
                                class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Aliansi
                                Internasional
                            </a>
                            <p class="mb-30px">
                                Kemitraan yang baik menunjukkan hasil karya kami. Aliansi yang
                                kuat dengan sebagian besar perusahaan engineering ternama di
                                dunia.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->

                <!-- start features box item -->
                <div class="col icon-with-text-style-07 transition-inner-all sm-mb-30px">
                    <div
                        class="bg-white h-100 justify-content-end box-shadow-quadruple-large-hover feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                        <div class="feature-box-icon">
                            <a href="demo-accounting-services-details.html"><img
                                    src="{{ URL::asset('assets') }}/image/worker.png" class="h-95px"
                                    alt="" /></a>
                        </div>
                        <div class="feature-box-content">
                            <a href="demo-accounting-services-details.html"
                                class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Engineer
                                Berpengalaman</a>
                            <p class="mb-30px">
                                Tim Engineer kami telah melalui pelatihan berkelanjutan dan
                                sertifikasi yang komprehensif untuk menjaga standar kualitas
                                tertinggi.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->

                <!-- start features box item -->
                <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                    <div
                        class="bg-white h-100 justify-content-end box-shadow-quadruple-large-hover feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                        <div class="feature-box-icon">
                            <a href="demo-accounting-services-details.html"><img
                                    src="{{ URL::asset('assets') }}/image/portfolio.png" class="h-95px"
                                    alt="" /></a>
                        </div>
                        <div class="feature-box-content">
                            <a href="demo-accounting-services-details.html"
                                class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Portofolio
                                Nasional</a>
                            <p class="mb-30px">
                                Kami membangun reputasi yang baik dengan menyediakan layanan
                                engineering dan bantuan teknis untuk klien kami di seluruh
                                dunia.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
            </div>
        </div>
    </section> --}}




    {{-- <section class="overflow-hidden big-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 lg-mb-45px xs-mb-30px text-sm-start text-center">
                    <span class="fs-70 xs-fs-50 fw-700 text-dark-gray mb-0 ls-minus-2px">Hear from clients.</span>
                </div>
                <div class="col-xl-8">
                    <div class="outside-box-right-45 sm-outside-box-right-0">
                        <div class="swiper magic-cursor"
                            data-slider-options='{ "slidesPerView": 1, "spaceBetween": 60, "loop": true, "parallax": true, "speed": 1200, "pagination": { "el": ".slider-one-slide-pagination", "clickable": true, "dynamicBullets": false }, "navigation": { "nextEl": ".slider-one-slide-next-2", "prevEl": ".slider-one-slide-prev-2" }, "autoplay": { "delay": 5000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 4 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper testimonials-style-13">
                                <!-- start review item -->
                                <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin"
                                    data-swiper-parallax="700">
                                    <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@
                                        Herman miller</span>
                                    <p class="fs-22 lh-36 text-dark-gray">From the day one, Themezaa has delivered all
                                        possible outcomes as demanded. I must say that all the developers are dedicated.
                                    </p>
                                </div>
                                <!-- end review item -->
                                <!-- start review item -->
                                <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin"
                                    data-swiper-parallax="700">
                                    <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@
                                        Shoko mugikura</span>
                                    <p class="fs-22 lh-36 text-dark-gray">Theme is beautiful, although it takes some
                                        time to figure out where to edit what. But support is very quick and helpful
                                        theme.</p>
                                </div>
                                <!-- end review item -->
                                <!-- start review item -->
                                <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin"
                                    data-swiper-parallax="700">
                                    <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@
                                        Matthew taylor</span>
                                    <p class="fs-22 lh-36 text-dark-gray">They are very good with communication,
                                        addressing the need and attentively making sure the customer is fully supported.
                                    </p>
                                </div>
                                <!-- end review item -->
                                <!-- start review item -->
                                <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin"
                                    data-swiper-parallax="700">
                                    <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@
                                        Leonel mooney</span>
                                    <p class="fs-22 lh-36 text-dark-gray">What an awesome theme and support team is
                                        very kind. Every element is designed pixel perfect, so it is really a modern
                                        theme.</p>
                                </div>
                                <!-- end review item -->
                                <!-- start review item -->
                                <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin"
                                    data-swiper-parallax="700">
                                    <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@
                                        Herman miller</span>
                                    <p class="fs-22 lh-36 text-dark-gray">From the day one, Themezaa has delivered all
                                        possible outcomes as demanded. I must say that all the developers are dedicated.
                                    </p>
                                </div>
                                <!-- end review item -->
                                <!-- start review item -->
                                <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin"
                                    data-swiper-parallax="700">
                                    <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@
                                        Shoko mugikura</span>
                                    <p class="fs-22 lh-36 text-dark-gray">Theme is beautiful, although it takes some
                                        time to figure out where to edit what. But support is very quick and helpful
                                        theme.</p>
                                </div>
                                <!-- end review item -->
                                <!-- start review item -->
                                <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin"
                                    data-swiper-parallax="700">
                                    <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@
                                        Matthew taylor</span>
                                    <p class="fs-22 lh-36 text-dark-gray">They are very good with communication,
                                        addressing the need and attentively making sure the customer is fully supported.
                                    </p>
                                </div>
                                <!-- end review item -->
                                <!-- start review item -->
                                <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin"
                                    data-swiper-parallax="700">
                                    <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@
                                        Leonel mooney</span>
                                    <p class="fs-22 lh-36 text-dark-gray">What an awesome theme and support team is
                                        very kind. Every element is designed pixel perfect, so it is really a modern
                                        theme.</p>
                                </div>
                                <!-- end review item -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div
                                class="separator-line-5px w-100 bg-extra-medium-gray mt-45px mb-45px xs-mt-30px xs-mb-30px">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-4 xs-mb-30px">
                            <div class="d-flex justify-content-center justify-content-sm-start">
                                <!-- start slider navigation -->
                                <div class="slider-one-slide-prev-2 text-black swiper-button-prev slider-navigation-style-04 bg-yellow h-65px w-65px"
                                    tabindex="0" role="button" aria-label="Previous slide"><i
                                        class="fa-solid fa-arrow-left"></i></div>
                                <div class="slider-one-slide-next-2 text-black swiper-button-next slider-navigation-style-04 bg-yellow h-65px w-65px"
                                    tabindex="0" role="button" aria-label="Next slide"><i
                                        class="fa-solid fa-arrow-right"></i></div>
                                <!-- end slider navigation -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row position-relative clients-style-08"
                data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col swiper text-center feather-shadow"
                    data-slider-options='{ "slidesPerView": 2, "spaceBetween":100, "speed": 6000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 6 }, "992": { "slidesPerView": 4 }, "768": { "slidesPerView": 3 } }, "effect": "slide" }'>
                    <div class="swiper-wrapper marquee-slide">

                        <div class="swiper-slide">
                            <a href="#"><img
                                    src="https://pt-sena.co.id/images/client/16_logo_logo_client-07.png"
                                    class="h-150px xs-h-30px" alt="" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"><img src="https://pt-sena.co.id/images/client/6_logo_logo_client-03.png"
                                    class="h-150px xs-h-30px" alt="" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"><img src="https://pt-sena.co.id/images/client/7_logo_Picture2.png"
                                    class="h-150px xs-h-30px" alt="" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"><img src="https://pt-sena.co.id/images/client/5_logo_logo_client-04.png"
                                    class="h-150px xs-h-30px" alt="" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"><img
                                    src="https://pt-sena.co.id/images/client/18_logo_logo_client-05.png"
                                    class="h-150px xs-h-30px" alt="" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"><img
                                    src="https://pt-sena.co.id/images/client/17_logo_logo_client-06.png"
                                    class="h-150px xs-h-30px" alt="" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"><img
                                    src="https://pt-sena.co.id/images/client/16_logo_logo_client-07.png"
                                    class="h-150px xs-h-30px" alt="" /></a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section> --}}




    <section class="overflow-hidden bg-very-light-gray position-relative ps-7 pe-7 xxl-ps-3 xxl-pe-3 xs-px-0">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 col-md-10 text-center">
                    <span
                        class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-25px"
                        data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Berita
                        Terkini</span>
                    <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px"
                        data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        Tetap Update dangan Berita Terbaru Kami
                    </h3>
                </div>
            </div>
            <div class="row justify-content-center mb-2">
                <div class="col-xl-2 col-lg-3 d-flex justify-content-center">
                    <!-- start slider navigation -->
                    <div
                        class="slider-one-slide-prev-1 icon-small text-dark-gray swiper-button-prev slider-navigation-style-04 bg-white box-shadow-large">
                        <i class="fa-solid fa-arrow-left"></i>
                    </div>
                    <div
                        class="slider-one-slide-next-1 icon-small text-dark-gray swiper-button-next slider-navigation-style-04 bg-white box-shadow-large">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                    <!-- end slider navigation -->
                </div>
            </div>
            <div class="row align-items-center"
                data-anime='{ "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-12">
                    <div class="">
                        <div class="swiper"
                            data-slider-options='{ "spaceBetween": 30, "loop": true, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" },   "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper">
                                <!-- start slider item -->

                                @foreach ($news as $item)
                                    <div class="swiper-slide">
                                        <!-- start services box style -->
                                        <div
                                            class="services-box-style-03 last-paragraph-no-margin border-radius-15px overflow-hidden">
                                            <div class="position-relative">




                                                <a href="{{ url('detail/' . $item->slug_eng) }}"><img
                                                        src="{{ $globalurl }}{{ $item->image }}"
                                                        alt="" /></a>

                                            </div>
                                            <div class="bg-white">
                                                <div class="ps-20px pe-20px pt-30px pb-30px" style="height: 205px;">
                                                    <span class="fs-14 text-uppercase mb-5px d-block">
                                                        <a href="#" class="blog-date">
                                                            {{ $item->created_at->format('d M Y') }}
                                                        </a>
                                                    </span>
                                                    <a href="{{ url('detail/' . $item->slug_eng) }}"
                                                        class="card-title mb-0 fw-500 fs-18 lh-30 text-dark-gray d-inline-block">
                                                        {{ $item->title_eng }}
                                                    </a>



                                                    {{--  <a href="{{ url('detail/' . $item->slug) }}"
                                                        class="d-inline-block fs-18 fw-600 text-dark-gray mb-5px"></a> --}}
                                                    {{-- {!! Str::words($item->content, 10) !!} --}}
                                                </div>
                                                <div
                                                    class="d-flex justify-content-center border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px position-relative text-center">
                                                    <a href="{{ url('detail/' . $item->slug_eng) }}"
                                                        class="btn btn-link btn-hover-animation-switch btn-medium fw-700 text-dark-gray text-uppercase">
                                                        <span>
                                                            <span class="btn-text">Selengkapnya</span>
                                                            <span class="btn-icon"><i
                                                                    class="fa-solid fa-arrow-right"></i></span>
                                                            <span class="btn-icon"><i
                                                                    class="fa-solid fa-arrow-right"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end services box style -->
                                    </div>
                                @endForEach



                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <a href="{{ url('news') }}"
                                class="btn btn-large btn-rounded btn-base-color btn-box-shadow box-shadow-large mt-20px sm-mt-0">Lihat
                                Berita Lainnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>






    <section class="ps-13 pe-13 lg-ps-2 lg-pe-2 background-no-repeat background-position-center-top"
        style="background-image: url('https://craftohtml.themezaa.com/images/demo-it-business-testimonial-bg.png')">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center mb-3">
                <div class="col-md-12 text-center">
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-xl-5 col-lg-7 col-md-8 text-center"
                    data-anime='{ "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    {{-- <span
                        class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-5px text-base-color">Innovative
                        solutions</span> --}}
                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-2px">Our Valuable Client</h2>
                </div>
            </div>


            <div class="row position-relative clients-style-08 mt-5"
                data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col swiper text-center feather-shadow"
                    data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed":3000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "reverseDirection":true, "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 6 }, "992": { "slidesPerView": 4 }, "768": { "slidesPerView": 3 } }, "effect": "slide" }'>
                    <div class="swiper-wrapper marquee-slide">

                        @foreach ($clientsleft as $clientleft)
                            <div class="swiper-slide">
                                <a><img src="{{ $globalurl }}{{ $clientleft->image }}" class="h-70px xs-h-60px"
                                        alt="" /></a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <div class="row position-relative clients-style-08 mt-5"
                data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col swiper text-center feather-shadow"
                    data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 3000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": {  "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 6 }, "992": { "slidesPerView": 4 }, "768": { "slidesPerView": 3 } }, "effect": "slide" }'>
                    <div class="swiper-wrapper marquee-slide">

                        @foreach ($clientsright as $clientright)
                            <div class="swiper-slide">
                                <a><img src="{{ $globalurl }}{{ $clientright->image }}" class="h-70px xs-h-60px"
                                        alt="" /></a>
                            </div>
                        @endforeach



                    </div>
                </div>
            </div>


        </div>
    </section>



</x-layoutsatu>
