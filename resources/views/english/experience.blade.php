<x-layout>

    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <x-slot:logo>
        {{ $logo }}
    </x-slot:logo>
    <x-slot:header_image>
        {{ $header_image }}
    </x-slot:header_image>
    <x-slot:header_text>
        {{ $header_text }}
    </x-slot:header_text>


    <style>
        .map {
            padding-left: 50px;
            padding-right: 50px;
        }

        .icon1 {
            /* padding-top: 10px; */
        }

        .icon-double-large {
            width: 40px !important;
        }

        .image-container {
            position: relative;
            margin-bottom: 30px;
        }

        .image-container img {
            display: block;
            width: 100%;
        }

        .image-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: 1;
            /*  background: rgba(109, 183, 210, 0.4); */
            background: rgba(109, 183, 210, 1);
            border-radius: 17px;
        }

        .clicked-background::before {
            /* background: rgba(109, 183, 210, 1); */
            background: rgba(109, 183, 210, 0.4);
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: 1;
            border-radius: 17px;
            /* Change background color on click */
        }

        .image-container .after {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            z-index: 999999;
        }

        .image-container:hover .after {
            /* display: block;
            background: rgba(109, 183, 210, 1); */
        }


        .groupdeskripsi {
            padding-left: 50px !important;
        }

        .deskripsi {
            margin-bottom: 0px
        }

        .tanggal {
            margin-bottom: 20px;
        }

        .list {
            margin-bottom: 20px;
        }

        .sectinspeksi {
            display: none;
        }

        .hidden {
            display: none !important;
            /* Tambahkan !important */
        }

        .show {
            display: block !important;
            /* Tambahkan !important */
        }

        .sectkonsultan {
            display: none;
        }

        .sectsurvey {
            display: none;
        }
    </style>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        #map {
            height: 500px;
            width: 100%;
        }

        .filter-container {
            position: relative;
            width: 100%;
            background: white;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .filter-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            padding: 10px;
        }

        .filter-button {
            flex: 1;
            min-width: 120px;
            background-color: #fff;
            /* border: 2px solid #ccc; */
            border-radius: 20px;
            padding: 12px 20px;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.3s ease;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
        }

        .filter-button:hover {
            background-color: #f0f0f0;
            transform: translateY(-2px);
        }

        .filter-button.active {
            background-color: #4CAF50;
            color: white;
            border-color: #4CAF50;
        }

        /* Mobile Dropdown Style */
        .mobile-filter {
            display: none;
            width: 100%;
            padding: 10px;
            background: white;
            border: 2px solid #ccc;
            border-radius: 10px;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .filter-button[data-type="restaurant"] {
            border-color: #FF0000;
            color: #FF0000;
        }

        .filter-button[data-type="hotel"] {
            border-color: #0000FF;
            color: #0000FF;
        }

        .filter-button[data-type="park"] {
            border-color: #008000;
            color: #008000;
        }

        .filter-button[data-type="restaurant"].active {
            background-color: #FF0000;
            border-color: #FF0000;
            color: white;
        }

        .filter-button[data-type="hotel"].active {
            background-color: #0000FF;
            border-color: #0000FF;
            color: white;
        }

        .filter-button[data-type="park"].active {
            background-color: #008000;
            border-color: #008000;
            color: white;
        }

        #show-all {
            background-color: #333;
            color: white;
            border-color: #333;
        }

        .filter-count {
            display: inline-block;
            background: #eee;
            border-radius: 12px;
            padding: 2px 8px;
            font-size: 12px;
            margin-left: 5px;
        }

        .active .filter-count {
            background: rgba(255, 255, 255, 0.2);
            color: white;
        }

        /* Mobile Styles */
        @media screen and (max-width: 768px) {
            .filter-container {
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                z-index: 1000;
                background: white;
                box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
                padding: 10px;
            }

            .filter-buttons {
                display: flex;
                flex-wrap: wrap;
                gap: 8px;
                justify-content: space-between;
                padding: 5px;
            }

            .filter-button {
                flex: 1 1 calc(33.333% - 8px);
                min-width: unset;
                padding: 8px 4px;
                font-size: 12px;
                text-align: center;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .filter-button .icon-double-large {
                width: 24px !important;
                height: auto;
                margin-bottom: 4px;
                display: block;
                margin: 0 auto 4px;
            }

            #show-all {
                flex: 1 1 100%;
                margin-top: 4px;
            }

            #map {
                width: 100%;
                height: 300px !important;
                margin-bottom: 10px;
            }
        }

        @media screen and (max-width: 480px) {
            .filter-button {
                flex: 1 1 calc(50% - 8px);
            }
        }

        @media screen and (max-width: 380px) {
            .filter-buttons {
                grid-template-columns: 1fr;
            }

            .filter-button {
                padding: 8px;
                font-size: 12px;
            }

            #map {
                margin-bottom: 40px !important;
            }
        }
    </style>
    <section class="map bg-white">
        <div>
            <div class="row justify-content-center mb-4">
                <div class="col-xl-8 col-lg-10 text-center">
                    <h3 class="text-dark-gray fw-600 ls-minus-1px"
                        data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        {{ $title4->texttitle_eng }}
                    </h3>
                    <p>
                        {{ $title4->textsubtitle_eng }}
                    </p>
                </div>
            </div>
            <div id="map" style="width: 100%; height: 650px"></div>
            <div class="filter-buttons">

                <a class="filter-button" data-type="engineering">
                    <img class="icon-double-large" src="{{ URL::asset('assets') }}/image/iconmap/loc2.png"> ENGINEERING
                </a>
                <a class="filter-button" data-type="konsultan">
                    <img class="icon-double-large" src="{{ URL::asset('assets') }}/image/iconmap/loc1.png"> KONSULTAN
                </a>
                <a class="filter-button" data-type="inspeksi">
                    <img class="icon-double-large" src="{{ URL::asset('assets') }}/image/iconmap/loc3.png"> INSPEKSI
                </a>
                <a class="filter-button" data-type="survey">
                    <img class="icon-double-large" src="{{ URL::asset('assets') }}/image/iconmap/loc4.png"> SURVEY
                </a>
                <a class="filter-button" data-type="office">
                    <img class="icon-double-large" src="{{ URL::asset('assets') }}/image/iconoffice.png"> Office
                </a>
                <a class="filter-button" id="show-all">
                    Show All
                </a>
                {{-- <button class="filter-button" data-type="konsultan">Restaurants</button>
                <button class="filter-button" data-type="engineering">Hotels</button>
                <button class="filter-button" data-type="inspeksi">Parks</button>
                <button class="filter-button" id="show-all">Show All</button> --}}
            </div>
        </div>
        {{-- <div class="icon1">
            <div class="row">
                <div class="col-12 col-lg-4 md-mb-15px">
                    <div
                        class="feature-box feature-box-left-icon-middle text-start  border-radius-8px p-9 overflow-hidden last-paragraph-no-margin">
                        <div class="feature-box-icon">
                            <img class="icon-double-large" src="{{ URL::asset('assets') }}/image/iconmap/loc1.png">
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block fs-15 text-black fw-500 mb-5px">engineering</span>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 md-mb-15px">
                    <div
                        class="feature-box feature-box-left-icon-middle text-start  border-radius-8px p-9 overflow-hidden last-paragraph-no-margin">
                        <div class="feature-box-icon">
                            <img class="icon-double-large" src="{{ URL::asset('assets') }}/image/iconmap/loc2.png">
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block fs-15 text-black fw-500 mb-5px">inspeksi/ PETROCHEMICAL</span>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 md-mb-15px">
                    <div
                        class="feature-box feature-box-left-icon-middle text-start  border-radius-8px p-9 overflow-hidden last-paragraph-no-margin">
                        <div class="feature-box-icon">
                            <img class="icon-double-large" src="{{ URL::asset('assets') }}/image/iconmap/loc3.png">
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block fs-15 text-black fw-500 mb-5px">konsultan
                                Experience</span>
                        </div>
                    </div>
                </div>

            </div>
        </div> --}}
    </section>


    <style>
        .scroll {
            max-height: 700px;
            overflow-y: auto;
            /* Scroll vertikal */
            overflow-x: hidden;
            /* Mencegah scroll horizontal */
            scrollbar-width: thin;
            scrollbar-color: #888 #f1f1f1;
        }

        .scroll::-webkit-scrollbar {
            width: 8px;
        }

        .scroll::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .scroll::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }

        .scroll::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .image-container {
            cursor: pointer;
        }

        .image-container img {
            border-radius: 17px;
            width: 100%;
            display: block;
        }
    </style>

    {{-- Section2  --}}
    <section class="ps-13 pe-13 lg-ps-2 lg-pe-2  bg-gradient-very-light-gray" id="engineering">
        <div class="row justify-content-center mb-4">
            <div class="col-xl-8 col-lg-10 text-center">
                <h3 class="text-dark-gray fw-600 ls-minus-1px"
                    data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    {{ $title5->texttitle_eng }}
                </h3>
                <p>
                    {{ $title5->textsubtitle_eng }}
                </p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center mb-3">
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="image-container clicked-background" data-value="1"
                        onclick="changeBackground(this, '1')">
                        <img src="{{ URL::asset('assets') }}/image/experience/upstream.png" style="width:100%;">
                        <div class="after">ENGINEERING</div>
                    </div>

                    <div class="image-container" data-value="2" onclick="changeBackground(this, '2')">
                        <img src="{{ URL::asset('assets') }}/image/experience/downstream.png" style="width:100%;">
                        <div class="after">INSPEKSI</div>
                    </div>

                    <div class="image-container" data-value="3" onclick="changeBackground(this, '3')">
                        <img src="{{ URL::asset('assets') }}/image/experience/refinery.png" style="width:100%;">
                        <div class="after">KONSULTAN</div>

                    </div>

                    <div class="image-container" data-value="4" onclick="changeBackground(this, '4')">
                        <img src="{{ URL::asset('assets') }}/image/other.jpg" style="width:100%;">
                        <div class="after">SURVEY</div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-5 groupdeskripsi">
                    <div class="sectengineering scroll" data-value="1">

                        @foreach ($project as $item)
                            @if ($item->type == 'engineering')
                                <div class="row list">
                                    <div class="col2sectext">
                                        <span class="fw-700 text-dark-gray">{{ $item->name }}</span><br>
                                        <p class="deskripsi">{!! $item->description_eng !!}</p>
                                        <br>
                                        <span class="fw-500 tanggal text-dark-gray">
                                            Turunan Bisnis : {{ $item->turunanbisnis }}
                                        </span><br>
                                        <span class="fw-500 tanggal text-dark-gray">
                                            Software : {{ $item->software }}
                                        </span><br>
                                        <span class="fw-500 text-dark-gray tanggal">{{ $item->year }}</span>

                                    </div>
                                </div>

                                <div
                                    class="divider-style-03 divider-style-03-01 border-color-extra-medium-gray mb-20px mt-20px">
                                </div>
                            @endif
                        @endforeach

                    </div>

                    <div class="sectinspeksi scroll" data-value="2">
                        @foreach ($project as $item)
                            @if ($item->type == 'inspeksi')
                                <div class="row list">
                                    <div class="col2sectext">
                                        <span class="fw-700 text-dark-gray">{{ $item->name }}</span><br>
                                        <p class="deskripsi">{!! $item->description_eng !!}</p>
                                        <span class="fw-500 text-dark-gray tanggal">{{ $item->year }}</span>
                                    </div>
                                </div>

                                <div
                                    class="divider-style-03 divider-style-03-01 border-color-extra-medium-gray mb-20px mt-20px">
                                </div>
                            @endif
                        @endforeach
                    </div>

                    <div class="sectkonsultan scroll" data-value="3">
                        @foreach ($project as $item)
                            @if ($item->type == 'konsultan')
                                <div class="row list">
                                    <div class="col2sectext">
                                        <span class="fw-700 text-dark-gray">{{ $item->name }}</span><br>
                                        <p class="deskripsi">{!! $item->description_eng !!}</p>
                                        <span class="fw-500 text-dark-gray tanggal">{{ $item->year }}</span>
                                    </div>
                                </div>

                                <div
                                    class="divider-style-03 divider-style-03-01 border-color-extra-medium-gray mb-20px mt-20px">
                                </div>
                            @endif
                        @endforeach
                    </div>

                    <div class="sectsurvey scroll" data-value="4">
                        @foreach ($project as $item)
                            @if ($item->type == 'survey')
                                <div class="row list">
                                    <div class="col2sectext">
                                        <span class="fw-700 text-dark-gray">{{ $item->name }}</span><br>
                                        <p class="deskripsi">{!! $item->description_eng !!}</p>
                                        <span class="fw-500 text-dark-gray tanggal">{{ $item->year }}</span>
                                    </div>
                                </div>

                                <div
                                    class="divider-style-03 divider-style-03-01 border-color-extra-medium-gray mb-20px mt-20px">
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>




        </div>
    </section>

    <script>
        function changeBackground(element, value) {
            if (value == 1) {
                element.classList.toggle('clicked-background');

                document.querySelector('.sectengineering').classList.add('show');
                document.querySelector('.sectinspeksi').classList.add('hidden');
                document.querySelector('.sectkonsultan').classList.add('hidden');
                document.querySelector('.sectsurvey').classList.add('hidden');

                document.querySelectorAll('.sectkonsultan, .sectinspeksi, .sectsurvey').forEach(
                    el => {
                        el.classList.remove('show');
                    });

                document.querySelectorAll(
                    '.image-container[data-value="2"], .image-container[data-value="3"], .image-container[data-value="4"]'
                ).forEach(
                    el => {
                        el.classList.remove('clicked-background');
                    });
            } else if (value == 2) {
                element.classList.toggle('clicked-background');

                document.querySelector('.sectengineering').classList.add('hidden');
                document.querySelector('.sectinspeksi').classList.add('show');
                document.querySelector('.sectkonsultan').classList.add('hidden');
                document.querySelector('.sectsurvey').classList.add('hidden');

                document.querySelectorAll('.sectengineering, .sectkonsultan, .sectsurvey').forEach(
                    el => {
                        el.classList.remove('show');
                    });
                document.querySelectorAll(
                    '.image-container[data-value="1"], .image-container[data-value="3"], .image-container[data-value="4"]'
                ).forEach(
                    el => {
                        el.classList.remove('clicked-background');
                    });
            } else if (value == 3) {
                element.classList.toggle('clicked-background');

                document.querySelector('.sectengineering').classList.add('hidden');
                document.querySelector('.sectinspeksi').classList.add('hidden');
                document.querySelector('.sectkonsultan').classList.add('show');
                document.querySelector('.sectsurvey').classList.add('hidden');

                document.querySelectorAll('.sectengineering, .sectinspeksi, .sectsurvey').forEach(
                    el => {
                        el.classList.remove('show');
                    });

                document.querySelectorAll(
                    '.image-container[data-value="1"], .image-container[data-value="2"], .image-container[data-value="4"]'
                ).forEach(
                    el => {
                        el.classList.remove('clicked-background');
                    });
            } else if (value == 4) {
                element.classList.toggle('clicked-background');

                document.querySelector('.sectengineering').classList.add('hidden');
                document.querySelector('.sectinspeksi').classList.add('hidden');
                document.querySelector('.sectkonsultan').classList.add('hidden');
                document.querySelector('.sectsurvey').classList.add('show');

                document.querySelectorAll('.sectengineering, .sectinspeksi, .sectkonsultan').forEach(
                    el => {
                        el.classList.remove('show');
                    });

                document.querySelectorAll(
                    '.image-container[data-value="1"], .image-container[data-value="2"], .image-container[data-value="3"]'
                ).forEach(
                    el => {
                        el.classList.remove('clicked-background');
                    });
            }
        }
    </script>




    <section class="ps-13 pe-13 lg-ps-2 lg-pe-2 background-no-repeat background-position-center-top"
        style="background-image: url('https://craftohtml.themezaa.com/images/demo-it-business-testimonial-bg.png')"
        id="client">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center mb-3">
                <div class="col-md-12 text-center">
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-xl-5 col-lg-7 col-md-8 text-center"
                    data-anime='{ "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span
                        class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-5px text-base-color">{{ $title6->texttitle }}</span>
                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-2px">{{ $title6->textsubtitle }}</h2>
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





    <script>
        let map;
        let markers = [];
        let activeMarkers = [];
        let currentInfoWindow = null;

        function initMap() {
            const isMobile = window.innerWidth <= 768;

            map = new google.maps.Map(document.getElementById('map'), {
                zoom: isMobile ? 3 : 5,

                styles: [{
                        featureType: "road",
                        stylers: [{
                            visibility: "off",
                        }, ],
                    },
                    {
                        elementType: "labels",
                        stylers: [{
                            visibility: "off",
                        }, ],
                    },
                    {
                        featureType: "administrative",
                        stylers: [{
                            visibility: "off",
                        }, ],
                    },
                ],
                center: {
                    lat: -3.267868293317055,
                    lng: 118.64679488552913
                }
            });

            const markerConfigs = {
                konsultan: {
                    url: '{{ URL::asset('assets') }}/image/iconmap/loc1.png',
                    scaledSize: new google.maps.Size(30, 30), // Ukuran besar
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(25, 25)
                },
                engineering: {
                    url: '{{ URL::asset('assets') }}/image/iconmap/loc2.png',
                    scaledSize: new google.maps.Size(30, 30), // Ukuran sedang
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(20, 20)
                },
                inspeksi: {
                    url: '{{ URL::asset('assets') }}/image/iconmap/loc3.png',
                    scaledSize: new google.maps.Size(30, 30), // Ukuran kecil
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(15, 15)
                },
                survey: {
                    url: '{{ URL::asset('assets') }}/image/iconmap/loc4.png',
                    scaledSize: new google.maps.Size(30, 30), // Ukuran kecil
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(15, 15)
                },
                office: {
                    url: '{{ URL::asset('assets') }}/image/iconoffice.png',
                    scaledSize: new google.maps.Size(30, 30), // Ukuran kecil
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(15, 15)
                },
            };

            const locations = @json($project);

            // Tambahkan event listener untuk menutup InfoWindow ketika klik di map
            google.maps.event.addListener(map, 'click', function() {
                if (currentInfoWindow) {
                    currentInfoWindow.close();
                    currentInfoWindow = null;
                }
            });

            // Buat marker untuk setiap lokasi
            locations.forEach(location => {
                const markerConfig = markerConfigs[location.type];

                const marker = new google.maps.Marker({
                    position: {
                        lat: parseFloat(location.lat),
                        lng: parseFloat(location.lng)
                    },
                    map: map,
                    title: location.name,
                    icon: markerConfig,
                    type: location.type,
                    animation: google.maps.Animation.DROP
                });

                // Hover effect
                marker.addListener('mouseover', function() {
                    marker.setIcon({
                        ...markerConfig,
                        scaledSize: new google.maps.Size(
                            markerConfig.scaledSize.width * 1.2,
                            markerConfig.scaledSize.height * 1.2
                        )
                    });
                });

                marker.addListener('mouseout', function() {
                    marker.setIcon(markerConfig);
                });

                const infoWindow = new google.maps.InfoWindow({
                    content: `
                        <div style="padding: 10px; max-width: 200px;">
                            <h5 style="margin: 0 0 10px 0; color: #333;font-weight: 600;font-size: 15px;line-height: 1.2rem !important;">${location.name}</h5>
                            <p style="margin: 5px 0; color: #666;"> ${location.description_eng}</p>
                             
                        </div>
                    `
                });

                marker.addListener('click', (e) => {
                    // Tutup InfoWindow yang sedang terbuka (jika ada)
                    if (currentInfoWindow) {
                        currentInfoWindow.close();
                    }

                    // Buka InfoWindow baru dan simpan referensinya
                    infoWindow.open(map, marker);
                    currentInfoWindow = infoWindow;

                    // Hentikan event propagation
                    e.stop();
                });



                markers.push(marker);
                activeMarkers.push(marker);
            });

            /* Tambahan */
            const newOfficeLocation = {
                lat: -6.164213890025751,
                lng: 106.77308281723104,
                name: "Office Location",
                type: "office"
            };

            const markerConfig = markerConfigs[newOfficeLocation.type];
            const marker = new google.maps.Marker({
                position: {
                    lat: parseFloat(newOfficeLocation.lat),
                    lng: parseFloat(newOfficeLocation.lng)
                },
                map: map,
                title: newOfficeLocation.name,
                icon: markerConfig,
                type: newOfficeLocation.type,
                animation: google.maps.Animation.DROP
            });

            marker.addListener('mouseover', function() {
                marker.setIcon({
                    ...markerConfig,
                    scaledSize: new google.maps.Size(
                        markerConfig.scaledSize.width * 1.2,
                        markerConfig.scaledSize.height * 1.2
                    )
                });
            });

            marker.addListener('mouseout', function() {
                marker.setIcon(markerConfig);
            });

            const infoWindow = new google.maps.InfoWindow({
                content: `
                <div style="padding: 10px; max-width: 200px;">
                    <h5 style="margin: 0 0 10px 0; color: #333;font-weight: 600;font-size: 15px;line-height: 1.2rem !important;">${newOfficeLocation.name}</h5>
                    <p style="margin: 5px 0; color: #666;"> ${newOfficeLocation.type}</p>
                </div>
            `
            });

            marker.addListener('click', (e) => {
                if (currentInfoWindow) {
                    currentInfoWindow.close();
                }
                infoWindow.open(map, marker);
                currentInfoWindow = infoWindow;
                e.stop();
            });

            markers.push(marker);
            activeMarkers.push(marker);


            // Event listener untuk filter buttons
            document.querySelectorAll('.filter-button').forEach(button => {
                button.addEventListener('click', function() {
                    const type = this.getAttribute('data-type');
                    filterMarkers(type);

                    // Update active state pada buttons
                    document.querySelectorAll('.filter-button').forEach(btn => {
                        btn.classList.remove('active');
                    });
                    this.classList.add('active');
                });
            });

            // Show All button
            document.getElementById('show-all').addEventListener('click', function() {
                showAllMarkers();

                // Update active state pada buttons
                document.querySelectorAll('.filter-button').forEach(btn => {
                    btn.classList.remove('active');
                });
                this.classList.add('active');
            });
        }

        function filterMarkers(type) {
            // Sembunyikan semua marker dulu
            markers.forEach(marker => {
                marker.setMap(null);
            });

            // Tampilkan hanya marker dengan tipe yang dipilih
            activeMarkers = markers.filter(marker => marker.type === type);
            activeMarkers.forEach(marker => {
                marker.setMap(map);
            });

            // Atur ulang bounds map untuk menampilkan semua marker yang aktif
            if (activeMarkers.length > 0) {
                const bounds = new google.maps.LatLngBounds();
                activeMarkers.forEach(marker => {
                    bounds.extend(marker.getPosition());
                });
                map.fitBounds(bounds);
            }
        }

        function showAllMarkers() {
            markers.forEach(marker => {
                marker.setMap(map);
            });

            if (currentInfoWindow) {
                currentInfoWindow.close();
                currentInfoWindow = null;
            }


            activeMarkers = markers;

            const bounds = new google.maps.LatLngBounds();
            markers.forEach(marker => {
                bounds.extend(marker.getPosition());
            });
            map.fitBounds(bounds);
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUwABeJKe52Sc45O4mmB6QUB-v2Dmhc6E&callback=initMap">
    </script>

</x-layout>
