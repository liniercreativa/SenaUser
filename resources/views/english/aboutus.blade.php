<x-layout>
    <style>
        .fs-15 {
            font-size: 13px;
        }

        .bg-base-color {
            background-color: #63A5BF;
        }

        .list-style-04 li {
            margin: 0px 0 0px !important;
        }
    </style>
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


    <section id="down-section">
        <div class="container">
            <div class="row align-items-center"
                data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col-lg-6 position-relative md-mb-14 sm-mb-17 xs-mb-7">
                    <div class="" data-animation-delay="50" data-shadow-animation="true">
                        {{--  w-70 md-w-75 xs-w-90 <img src="{{ $globalurl }}{{ $about->image }}" alt="" class="border-radius-8px w-100">
                        <img src="{{ $globalurl }}{{ $about->image }}" alt=""
                            class="border-radius-8px w-100"> --}}
                        <div class="carousel-image">
                            <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner border-radius-8px">

                                    {{-- <div class="carousel-item active">
                                        <img src="{{ $globalurl }}{{ $about->image }}"
                                            class="d-block w-100 border-radius-8px" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ $globalurl }}{{ $about->image }}"
                                            class="d-block w-100 border-radius-8px" alt="...">
                                    </div> --}}

                                    @foreach ($aboutusimageslider as $key => $slider)
                                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                            <img src="{{ $globalurl }}{{ $slider->image }}"
                                                class="d-block w-100 border-radius-8px"
                                                alt="About Us Image {{ $key + 1 }}">
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev bg-control" type="button"
                                    data-bs-target="#imageCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next bg-control" type="button"
                                    data-bs-target="#imageCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <style>
                        .bg-control {
                            background: rgba(0, 0, 0, 0.5);
                            width: 40px;
                            height: 40px;
                            border-radius: 50%;
                            border: none;
                            position: absolute;
                            top: 50%;
                            transform: translateY(-50%);
                            transition: background 0.3s ease;
                        }

                        .bg-control:hover {
                            background: rgba(0, 0, 0, 0.7);
                        }

                        .carousel-control-prev {
                            left: 10px;
                        }

                        .carousel-control-next {
                            right: 10px;
                        }
                    </style>
                    {{--  <div class="w-55 overflow-hidden position-absolute right-15px xs-w-60 bottom-minus-20px"
                        data-shadow-animation="true" data-animation-delay="250"
                        data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                        <img src="{{ $globalurl }}{{ $about->image2 }}" alt=""
                            class="border-radius-8px w-100 box-shadow-quadruple-large" />
                    </div> --}}
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start">
                    <span
                        class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-25px">
                        {{ $about->sub_headline_eng }}</span>
                    <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px mb-20px sm-w-85 xs-w-100 mx-auto">
                        {{ $about->main_headline_eng }}
                    </h3>
                    {!! $about->description_eng !!}
                </div>
            </div>
            <div class="xs-mt-7 mt-70px row row-cols-1 row-cols-md-4 row-cols-sm-2 justify-content-center text-center counter-style-04"
                data-anime='{"el": "childs", "opacity": [0,1], "translateX": [50, 0], "duration": 800, "delay":300, "staggervalue": 300, "easing": "easeOutQuad" }'>

                @foreach ($counter as $item)
                    <div class="col-6 col-md-3 last-paragraph-no-margin sm-mb-40px">
                        <p>{{ $item->title }}</p>
                        <h2 class="vertical-counter d-inline-flex text-dark-gray fw-700 ls-minus-2px mt-5 mb-0 ls-minus-1px"
                            data-text="{{ $item->prefix }}" data-to="{{ $item->number }}"></h2>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <section class="bg-solitude-blue" id="visimisi">
        <div style="margin-left:30px; margin-right:30px">
            <div class="row justify-content-center mb-3">
                <div class="col-xl-5 col-lg-6 col-sm-8 text-center"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h3 class="alt-font text-dark-gray fw-600 ls-minus-2px">
                        {{ $visimisi->headline_eng }}
                    </h3>
                </div>
            </div>
            <div class="row justify-content-center"
                data-anime='{ "el": "childs", "perspective": [1200,1200], "translateY": [30, 0], "scale": [1.05, 1], "rotateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start fancy text box item -->
                <div class="col-lg-6 col-md-8 fancy-text-box-style-02 mb-30px">
                    <div class="feature-box feature-box-left-icon-middle h-100 bg-white hover-box dark-hover border-radius-6px ps-4 pe-4 pt-9 pb-9 box-shadow-extra-large box-shadow-extra-large-hover overflow-hidden"
                        style="padding-top: 30px !important;padding-bottom: 30px !important;">
                        <div class="feature-box-icon ms-40px me-40px lg-ms-15px lg-me-15px">
                            <h2 class="alt-font text-dark-gray fw-700 ls-minus-1px mb-0"
                                style="text-transform:uppercase;">
                                {{ $visimisi->visi_title_eng }}
                            </h2>
                        </div>
                        <div
                            class="feature-box-content border-start border-color-extra-medium-gray ps-40px pe-40px lg-ps-15px lg-pe-15px last-paragraph-no-margin text-dark-gray">
                            {{-- <p class="text-dark-gray">

                            </p> --}}
                            {!! $visimisi->visi_description_eng !!}
                        </div>
                        <div class="feature-box-overlay bg-base-color"></div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <style>
                    .feature-box:hover .feature-box-content .list-style-04 {
                        color: #ffffff;
                        /* Change color to white */
                    }

                    .list-style-04:hover {
                        color: #ffffff;
                        /* Change color to white */
                    }
                </style>
                <div class="col-lg-6 col-md-8 fancy-text-box-style-02 mb-30px">
                    <div class="feature-box feature-box-left-icon-middle h-100 bg-white hover-box dark-hover border-radius-6px ps-4 pe-4 pt-9 pb-9 box-shadow-extra-large box-shadow-extra-large-hover overflow-hidden"
                        style="padding-top: 30px !important;padding-bottom: 30px !important;">
                        <div class="feature-box-icon ms-40px me-40px lg-ms-15px lg-me-15px">
                            <h2 class="alt-font text-dark-gray fw-700 ls-minus-1px mb-0"
                                style="text-transform:uppercase;">
                                {{ $visimisi->misi_title_eng }}

                            </h2>
                        </div>
                        <div
                            class="feature-box-content border-start border-color-extra-medium-gray ps-40px pe-40px lg-ps-15px lg-pe-15px last-paragraph-no-margin">
                            <ul class="list-style-04 text-dark-gray fw-500 hovv">
                                {!! $visimisi->misi_description_eng !!}
                            </ul>
                            {{-- <ul class="list-style-04 text-dark-gray fw-500 hovv">
                                <li>Providing relieable,
                                    accurate and trustworthy engineering,
                                    project and operational solutions.</li>
                                <li>Creating stable and profitable growth for stakeholders.</li>
                                <li>Increase contribution for the implementation of environmentally friendly and
                                    sustainable solutions.</li>
                            </ul> --}}
                        </div>
                        <div class="feature-box-overlay bg-base-color"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="cover-background background-position-center-top"
        style="background-image: url('{{ $globalurl }}{{ $about->background_akhlak }}')" id="ourculture">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-xl-10 col-lg-10 col-md-12 text-center"
                    data-anime='{ "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span
                        class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-5px text-base-color">{{ $titles->texttitle_eng }}</span>
                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-2px">{{ $titles->textsubtitle_eng }} </h2>
                </div>
            </div>
            <div class="row justify-content-center mb-3"></div>
            <style>
                .hurufawal {
                    transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
                }

                .fade-in {
                    transform: scale(0.8);
                    opacity: 0;
                }

                .huruff {
                    /* Default styles for huruff */
                }

                @media (max-width: 767px) {
                    .huruff {
                        width: 100px !important;
                    }
                }

                .popup-image {
                    position: fixed;
                    top: 0;
                    left: 0;
                    background: rgba(0, 0, 0, .9);
                    height: 100%;
                    width: 100%;
                    z-index: 100;
                    display: none;
                }

                .popup-image img {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    border-radius: 5px;
                    width: 750px;
                    object-fit: cover;
                }

                .popup-image span {
                    position: absolute;
                    top: 0;
                    right: 10px;
                    font-size: 40px;
                    font-weight: bold;
                    color: #fff;
                    cursor: pointer;
                    z-index: 100;
                }
            </style>

            <div class="popup-image" id="popupImage">
                <span>&times;</span>
                <img src="" id="popupImg">
            </div>
            @php
                $im1 = $globalurl . $akhlaks[0]->image3;
                $im2 = $globalurl . $akhlaks[1]->image3;
                $im3 = $globalurl . $akhlaks[2]->image3;
                $im4 = $globalurl . $akhlaks[3]->image3;
                $im5 = $globalurl . $akhlaks[4]->image3;
                $im6 = $globalurl . $akhlaks[5]->image3;
            @endphp
            <div class="row">
                <div class="col-lg-2 col-6 md-mb-15px" style="text-align: center">

                    <img id="hurufa" class="hurufawal huruff" src="{{ $globalurl }}{{ $akhlaks[0]->image1 }}"
                        onmouseover="hoverImage('a')" onmouseout="unhoverImage('a')"
                        onclick="showPopup('{{ $im1 }}')">
                </div>
                <div class="col-lg-2 col-6 md-mb-15px" style="text-align: center">
                    <img id="hurufk" class="hurufawal huruff" src="{{ $globalurl }}{{ $akhlaks[1]->image1 }}"
                        onmouseover="hoverImage('k')" onmouseout="unhoverImage('k')"
                        onclick="showPopup('{{ $im2 }}')">
                </div>
                <div class="col-lg-2 col-6 md-mb-15px" style="text-align: center">
                    <img id="hurufh" class="hurufawal huruff" src="{{ $globalurl }}{{ $akhlaks[2]->image1 }}"
                        onmouseover="hoverImage('h')" onmouseout="unhoverImage('h')"
                        onclick="showPopup('{{ $im3 }}')">
                </div>
                <div class="col-lg-2 col-6 md-mb-15px" style="text-align: center">
                    <img id="hurufl" class="hurufawal huruff" src="{{ $globalurl }}{{ $akhlaks[3]->image1 }}"
                        onmouseover="hoverImage('l')" onmouseout="unhoverImage('l')"
                        onclick="showPopup('{{ $im4 }}')">
                </div>
                <div class="col-lg-2 col-6 md-mb-15px" style="text-align: center">
                    <img id="hurufa2" class="hurufawal huruff" src="{{ $globalurl }}{{ $akhlaks[4]->image1 }}"
                        onmouseover="hoverImage('a2')" onmouseout="unhoverImage('a2')"
                        onclick="showPopup('{{ $im5 }}')">
                </div>
                @if (!empty($akhlaks[5]->image1))
                    <div class="col-lg-2 col-6 md-mb-15px" style="text-align: center">
                        <img id="hurufk2" class="hurufawal huruff"
                            src="{{ $globalurl }}{{ $akhlaks[5]->image1 }}" onmouseover="hoverImage('k2')"
                            onmouseout="unhoverImage('k2')" onclick="showPopup('{{ $im6 }}')">
                    </div>
                @endif

            </div>
        </div>
    </section>



    <section class="big-section position-relative" id="bod">
        <div id="particles-style-01" class="position-absolute h-100 top-0 left-0 w-100">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center mb-6 text-center text-lg-start">
                <div class="row justify-content-center mb-3">
                    <div class="col-xl-10 col-lg-10 col-sm-12 text-center"
                        data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h3 class="alt-font text-dark-gray fw-600 ls-minus-2px">
                            DEWAN KOMISARIS DAN DIREKSI
                        </h3>
                    </div>
                </div>
                <div class="col tab-style-06">
                    <ul
                        class="nav nav-tabs alt-font justify-content-center border-0 text-center text-uppercase alt-font fw-500 mb-5">
                        <li class="nav-item bg-white border-color-extra-medium-gray m-5px  xs-m-5px">
                            <a class="nav-link active fw-500" data-bs-toggle="tab" href="#direksi">Direksi</a>
                            <span class="tab-bg-active bg-dark-gray"></span>
                        </li>

                        <li class="nav-item bg-white border-color-extra-medium-gray m-5px  xs-m-5px">
                            <a class="nav-link  fw-500" data-bs-toggle="tab" href="#komisaris">Komisaris</a>
                            <span class="tab-bg-active bg-dark-gray"></span>
                        </li>

                    </ul>
                </div>
            </div>
            <style>
                .card {
                    /* border: 1px solid #ccc; */
                    border-radius: 25px;
                    /*  border-top-left-radius: 25px;
                    border-top-right-radius: 25px; */
                    overflow: hidden;
                    /* width: 300px; */
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    transition: transform 0.3s ease-in-out;
                }

                .card:hover {
                    transform: scale(1.05);
                }

                .card:hover .card-content {
                    background-color: #63a5bf;
                    color: #ffffff !important;

                }

                .card:hover .nama,
                .card:hover .jabatan {
                    color: #ffffff !important;
                }

                .card-img {
                    width: 100%;
                    height: auto;
                }

                .card-content {
                    padding: 16px;
                }

                .colcard {
                    /* Adjust the value as needed */
                    /* Adjust the value as needed */

                }

                /* Style yang sudah ada tetap dipertahankan */

                /* Tambahan style untuk tab */
                .tab-pane {
                    transition: all 0.3s ease;
                }

                .tab-pane.fade {
                    opacity: 0;
                }

                .tab-pane.fade.show {
                    opacity: 1;
                }

                .nav-tabs .nav-link {
                    transition: all 0.3s ease;
                }

                .nav-tabs .nav-link.active {
                    background-color: #63a5bf;
                    color: white;
                }

                .mfp-fade.mfp-bg {
                    opacity: 0;
                    transition: all 0.3s ease-out;
                }

                .mfp-fade.mfp-bg.mfp-ready {
                    opacity: 0.8;
                }

                .mfp-fade.mfp-bg.mfp-removing {
                    opacity: 0;
                }

                .mfp-fade.mfp-wrap .mfp-content {
                    opacity: 0;
                    transform: translateY(-20px);
                    transition: all 0.3s ease-out;
                }

                .mfp-fade.mfp-wrap.mfp-ready .mfp-content {
                    opacity: 1;
                    transform: translateY(0);
                }

                .mfp-fade.mfp-wrap.mfp-removing .mfp-content {
                    opacity: 0;
                    transform: translateY(-20px);
                }
            </style>


            <div class="row justify-content-center">
                <div class="tab-content">
                    <!-- Tab Direksi -->
                    <div class="tab-pane fade show active" id="direksi">
                        <div class="row justify-content-center">
                            @foreach ($petinggis as $petinggi)
                                @if ($petinggi->type == 'direksi')
                                    <div class="col-lg-3 md-mb-15px align-items-center justify-content-center">
                                        <div class="card"
                                            onclick="showDetail('{{ $petinggi->id }}', '{{ $petinggi->name }}', '{{ $petinggi->position_eng }}', '{{ $globalurl }}{{ $petinggi->image }}', '{{ $petinggi->description_eng }}', '{!! addslashes($petinggi->experience_eng) !!}')"
                                            style="cursor:pointer;">
                                            <img src="{{ $globalurl }}{{ $petinggi->image }}" alt="Card Image"
                                                class="card-img">
                                            <div class="card-content">
                                                <div class="fs-19 fw-500 text-black lh-20 text-center nama">
                                                    {{ $petinggi->name }}</div>
                                                <div class="text-black opacity-7 fs-15 text-center jabatan">
                                                    {{ $petinggi->position_eng }}</div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>


                    <!-- Tab Komisaris -->
                    <div class="tab-pane fade " id="komisaris">
                        <div class="row justify-content-center">
                            @foreach ($petinggis as $petinggi)
                                @if ($petinggi->type == 'komisaris')
                                    <div class="col-lg-3 md-mb-15px align-items-center justify-content-center">
                                        <div class="card"
                                            onclick="showDetail('{{ $petinggi->id }}', '{{ $petinggi->name }}', '{{ $petinggi->position_eng }}', '{{ $globalurl }}{{ $petinggi->image }}', '{{ $petinggi->description_eng }}', '{{ $petinggi->experience_eng }}')"
                                            style="cursor:pointer;">
                                            <img src="{{ $globalurl }}{{ $petinggi->image }}" alt="Card Image"
                                                class="card-img">
                                            <div class="card-content">
                                                <div class="fs-19 fw-500 text-black lh-20 text-center nama">
                                                    {{ $petinggi->name }}</div>
                                                <div class="text-black opacity-7 fs-15 text-center jabatan">
                                                    {{ $petinggi->position_eng }}</div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>


    <section style="background-color:#f7f7f7 !important;" id="awards">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-xl-10 col-lg-10 col-sm-12 text-center"
                    data-anime='{ "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span
                        class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-5px text-base-color">{{ $title3->texttitle_eng }}</span>
                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-2px">{{ $title3->textsubtitle_eng }} </h2>
                </div>
            </div>

            <div class="row justify-content-center align-items-center mb-6 text-center text-lg-start">
                <div class="col tab-style-06">
                    <ul
                        class="nav nav-tabs alt-font justify-content-center border-0 text-center text-uppercase alt-font fw-500 mb-5">
                        <li class="nav-item bg-white border-color-extra-medium-gray m-5px  xs-m-5px"
                            style="margin-right:20px;">
                            <a class="nav-link active fw-500" data-bs-toggle="tab" href="#award">Award</a>
                            <span class="tab-bg-active bg-dark-gray"></span>
                        </li>

                        <li class="nav-item bg-white border-color-extra-medium-gray m-5px  xs-m-5px">
                            <a class="nav-link  fw-500" data-bs-toggle="tab" href="#sertifikat">Sertifikat</a>
                            <span class="tab-bg-active bg-dark-gray"></span>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="row justify-content-center">

                <div class="tab-content">
                    <!-- Tab Direksi -->
                    <div class="tab-pane fade show active" id="award">
                        <div class="row justify-content-center">
                            @foreach ($piagam as $val)
                                @if ($val->kategori == 'award')
                                    <div class="col-4 mb-15px">
                                        <img src="{{ $globalurl }}{{ $val->image }}" onclick="showPopup(src)">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>


                    <!-- Tab Komisaris -->
                    <div class="tab-pane fade " id="sertifikat">
                        <div class="row justify-content-center">
                            @foreach ($piagam as $val)
                                @if ($val->kategori == 'sertifikat')
                                    <div class="col-4 mb-15px">
                                        <img src="{{ $globalurl }}{{ $val->image }}" onclick="showPopup(src)">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>


                </div>



                {{--  <div class="col-4 mb-15px">
                    <img src="{{ URL::asset('assets') }}/image/sertifikat/sertif3.jpg">
                </div> --}}

            </div>
        </div>
    </section>

    {{--  <div id="modal-popup" class="mfp-hide subscribe-popup">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-md-10 bg-white">
                    <div class="row position-relative box-shadow-quadruple-large">
                        <div class="col-lg-4 cover-background md-h-400px xs-h-300px"
                            style="background-image: url('{{ URL::asset('assets') }}/image/dewan/p1.jpg');">
                        </div>
                        <div class="col-lg-8 newsletter-popup p-8 pt-10 pb-10 lg-p-5 md-p-6 xs-p-8 position-relative">
                            <span class="d-block fs-24 fw-600 alt-font text-dark-gray mb-15px">SUHARTAWAN
                                BAMBANG</span>
                            <p style="font-size:15px;">
                                Fuad has more than 27 years Experiences in project/ engineering management. He is expert
                                in managing multi billion project for various industry such as oil and gas,
                                petrochemical, refinery and power generation. The last project he has involved is with
                                KBR on Gorgon LNG project for Chevron in Western of Australia where he was spent 3.5
                                years services as Deputy Engineering Manager/ Senior Project Engineer.

                            </p>

                            <div class="col-12">
                                <span class="d-block fs-24 fw-600 alt-font text-dark-gray mb-15px">Experience</span>

                                <ul class="p-0 m-0 list-style-02" style="font-size:15px;">
                                    <li>
                                        2021 - Direktur Utama - PT Solusi Energy Nusantara
                                    </li>
                                    <li>
                                        2021 - President Director - PT Harmoni Energi Persada
                                    </li>
                                    <li>
                                        2020 - Executive Vice President - TRIPATRA
                                    </li>
                                    <li>
                                        2018 - CEO & President Director - PT Harmoni Energi Persada
                                    </li>
                                    <li>
                                        2016 - President Director - PT KBR Indonesia
                                    </li>
                                    <li>
                                        2013 - Head of Structural and Marine Department - KBR, Inc.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button title="Close (Esc)" type="button" class="mfp-close text-dark-gray"></button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <div id="modal-popup" class="mfp-hide subscribe-popup">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-md-10 bg-white">
                    <div class="row position-relative box-shadow-quadruple-large">
                        <div class="col-lg-4 cover-background md-h-400px xs-h-300px" id="modal-image">
                        </div>
                        <div class="col-lg-8 newsletter-popup p-8 pt-10 pb-10 lg-p-5 md-p-6 xs-p-8 position-relative">
                            <span class="d-block fs-24 fw-600 alt-font text-dark-gray mb-15px" id="modal-name"></span>
                            <span class="d-block fs-18 text-dark-gray mb-15px" id="modal-position"></span>
                            <p style="font-size:15px;" id="modal-description"></p>

                            <div class="col-12">
                                <span class="d-block fs-24 fw-600 alt-font text-dark-gray mb-15px">Experience</span>
                                <ul class="p-0 m-0 list-style-02" style="font-size:15px;" id="modal-experience">
                                </ul>
                            </div>
                        </div>
                        <button title="Close (Esc)" type="button" class="mfp-close text-dark-gray"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function hoverImage(value) {

            let img;
            let image;

            if (value == 'a') {
                console.log('Ini adalah ', value);
                img = document.getElementById('hurufa');
                image = "{{ $globalurl }}{{ $akhlaks[0]->image2 }}";
            } else if (value == 'k') {
                img = document.getElementById('hurufk');
                image = "{{ $globalurl }}{{ $akhlaks[1]->image2 }}";
            } else if (value == 'h') {
                img = document.getElementById('hurufh');
                image = "{{ $globalurl }}{{ $akhlaks[2]->image2 }}";
            } else if (value == 'l') {
                img = document.getElementById('hurufl');
                image = "{{ $globalurl }}{{ $akhlaks[3]->image2 }}";
            } else if (value == 'a2') {
                img = document.getElementById('hurufa2');
                image = "{{ $globalurl }}{{ $akhlaks[4]->image2 }}";
            } else if (value == 'k2') {
                img = document.getElementById('hurufk2');
                image = "{{ $globalurl }}{{ $akhlaks[5]->image2 }}";
            }


            if (img) {
                img.classList.add('fade-in');
                setTimeout(() => {
                    img.src = image;
                    img.classList.remove('fade-in');
                }, 300); // Match the duration of the CSS transition
            }
        }

        function unhoverImage(value) {

            let img;
            let image;

            if (value == 'a') {
                console.log('Ini adalah ', value);
                img = document.getElementById('hurufa');
                image = "{{ $globalurl }}{{ $akhlaks[0]->image1 }}";
            } else if (value == 'k') {
                img = document.getElementById('hurufk');
                image = "{{ $globalurl }}{{ $akhlaks[1]->image1 }}";
            } else if (value == 'h') {
                img = document.getElementById('hurufh');
                image = "{{ $globalurl }}{{ $akhlaks[2]->image1 }}";
            } else if (value == 'l') {
                img = document.getElementById('hurufl');
                image = "{{ $globalurl }}{{ $akhlaks[3]->image1 }}";
            } else if (value == 'a2') {
                img = document.getElementById('hurufa2');
                image = "{{ $globalurl }}{{ $akhlaks[4]->image1 }}";
            } else if (value == 'k2') {
                img = document.getElementById('hurufk2');
                image = "{{ $globalurl }}{{ $akhlaks[5]->image1 }}";
                //image = "{{ URL::asset('assets') }}/image/akhlak/akhlak KK.png";
            }



            if (img) {
                img.classList.add('fade-in');
                setTimeout(() => {
                    img.src = image;
                    img.classList.remove('fade-in');
                }, 300); // Match the duration of the CSS transition
            }
        }




        function showPopup(src) {
            console.log(src);
            const popup = document.getElementById('popupImage');
            const popupImg = document.getElementById('popupImg');
            popup.style.display = 'block';
            popupImg.src = src;
        }

        // Menutup popup ketika mengklik tanda silang
        document.querySelector('.popup-image span').onclick = () => {
            document.querySelector('.popup-image').style.display = 'none';
        }

        // Menutup popup ketika mengklik di luar gambar
        document.querySelector('.popup-image').onclick = (e) => {
            if (e.target.className == 'popup-image') {
                document.querySelector('.popup-image').style.display = 'none';
            }
        }















        function showDetail(id, name, position, image, description, experience) {
            // Set modal content
            document.getElementById('modal-name').textContent = name;
            document.getElementById('modal-position').textContent = position;
            document.getElementById('modal-description').innerHTML = description;

            // Set background image
            document.getElementById('modal-image').style.backgroundImage = `url('${image}')`;

            // Parse dan set experience jika dalam format JSON
            console.log('O', experience);
            if (experience) {
                document.getElementById('modal-experience').innerHTML = experience;
            } else {
                document.getElementById('modal-experience').innerHTML = '<li>No experience data available</li>';
            }

            // Show modal using jQuery (assuming you're using magnific popup)
            $.magnificPopup.open({
                items: {
                    src: '#modal-popup',
                    type: 'inline'
                },
                closeBtnInside: true,
                midClick: true,
                removalDelay: 300,
                mainClass: 'mfp-fade'
            });
        }

        // Add close button handler
        document.querySelector('.mfp-close').addEventListener('click', function() {
            $.magnificPopup.close();
        });
    </script>
</x-layout>
