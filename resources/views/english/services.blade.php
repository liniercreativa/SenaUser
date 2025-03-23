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
        .layanandesc {
            font-size: 16px;
            line-height: 20px;
        }

        .backdark {
            background-color: #63A5BF;
        }

        .border-right {
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .border-left {
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
        }

        .list-style-04 {
            font-size: 16px;
            padding-left: 22px;
        }

        .divcontent {
            padding: 34px;
        }

        .bottomtext {
            background-color: #63a5bf;
            color: #fff;
            width: 100%;
        }

        .bottomtext:hover {
            background-color: #63a5bf;
            color: #fff !important;
        }

        .tandaplus {
            display: none !important;
        }

        .border-top {
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .background-right {
            background-image: url("{{ URL::asset('assets') }}/image/bgservice/bgservicesenakotakkanan.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            border-radius: 25px !important;
        }

        .background-left {
            background-image: url("{{ URL::asset('assets') }}/image/bgservice/bgservicesenakotakkiri.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            border-radius: 25px !important;
        }

        .background-discipline {
            background-image: url("{{ URL::asset('assets') }}/image/background-discipline.jpg");
            background-position: center;
            background-repeat: no-repeat;
            /* height: 1000px; */
            /* Add height to the background image */
        }

        .btnselengkapnya {
            border-top-right-radius: 25px;
            border-bottom-left-radius: 25px;
        }

        .mainimage {
            /* width: 350px; */
            width: 300px;

            border-radius: 25px;
        }

        #engineering {
            scroll-margin-top: 100px;
            scroll-behavior: smooth;
            -webkit-scroll-margin-top: 100px;
            /* Safari support */
            padding-top: 100px;
            margin-top: -100px;
        }

        #survey {
            scroll-margin-top: 100px;
            scroll-behavior: smooth;
            -webkit-scroll-margin-top: 100px;
            /* Safari support */
            padding-top: 100px;
            margin-top: -100px;
            /* Adjust value based on your header height */
        }

        #inspection {
            scroll-margin-top: 100px;
            scroll-behavior: smooth;
            -webkit-scroll-margin-top: 100px;
            /* Safari support */
            padding-top: 100px;
            margin-top: -100px;
            /* Adjust value based on your header height */
        }

        #consultant {
            scroll-margin-top: 100px;
            scroll-behavior: smooth;
            -webkit-scroll-margin-top: 100px;
            /* Safari support */
            padding-top: 100px;
            margin-top: -100px;
            /* Adjust value based on your header height */
        }

        .membesar {
            transition: all 0.3s ease;
        }

        .membesar:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        ..membesar .mainimage {
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .membesar:hover .mainimage {
            transform: scale(1.1);
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .membesar:hover h4 {
            color: #your-highlight-color !important;
        }

        .modal-content {
            display: flex !important;
            flex-direction: row;
            padding: 0;
            overflow: hidden;
        }

        .modal-content img {
            width: 50%;
            height: 100%;
            object-fit: cover;
            margin-bottom: 0 !important;
            /* Menghapus margin bottom yang ada */
        }

        .divcontent {
            width: 50%;
            padding: 30px;
            overflow-y: auto;
            max-height: 90vh;
        }

        /* Custom scrollbar untuk divcontent */
        .divcontent::-webkit-scrollbar {
            width: 6px;
        }

        .divcontent::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .divcontent::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 3px;
        }

        /* Responsive design */
        @media (max-width: 991px) {
            .modal-content {
                flex-direction: column;
            }

            .modal-content img {
                width: 100%;
                height: 300px;
            }

            .divcontent {
                width: 100%;
                padding: 20px;
            }
        }

        /* Memperbesar modal */
        .modal-lg {
            max-width: 90%;
            margin: 1.75rem auto;
        }

        /* Memastikan modal berada di tengah */
        .modal-dialog {
            display: flex;
            align-items: center;
            min-height: calc(100% - 3.5rem);
        }

        .pt-100 {
            padding-top: 100px;
        }

        .pb-100 {
            padding-bottom: 100px;
        }

        @media (max-width: 767px) {
            .pt-100 {
                padding-top: 20px;
            }

            .pb-100 {
                padding-bottom: 20px;
            }
        }
    </style>


    <section class="background-repeat position-relative overlap-height z-index-0"
        style="background-image:url('images/demo-spa-salon-home-bg-01.jpg');">

        <div class="container overlap-gap-section">

            <?php
            $no = 1;
            ?>
            @foreach ($services as $item)
                <div class="membesar row g-0 justify-content-center border-radius-6px overflow-hidden mb-8 {{ $no % 2 == 1 ? '' : 'flex-row-reverse' }} {{ $no % 2 == 1 ? 'background-right' : 'background-left' }}"
                    data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div @if ($item->title == 'ENGINEERING') id="engineering" @endif
                        @if ($item->title == 'INSPECTION') id="inspection" @endif
                        @if ($item->title == 'SURVEY') id="survey" @endif
                        @if ($item->title == 'CONSULTANT') id="consultant" @endif></div>
                    <div class="col-lg-6 md-h-400px sm-h-300px text-center">
                        <div class="d-flex align-items-center justify-content-center h-100">
                            <img src="{{ $globalurl }}{{ $item->image }}" alt="" class="mainimage">
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="pt-5 pb-5 ps-15 pe-15 lg-ps-9 lg-pe-9 lg-pt-12 last-paragraph-no-margin text-white">

                            <a href="">
                                <h4
                                    class="alt-font fw-400 text-dark-gray mb-20px ls-minus-1px d-inline-block text-white">
                                    {{ $item->title_eng }}
                                </h4>
                            </a>
                            {!! $item->short_description_eng !!}
                        </div>
                        <div
                            class="ps-15 pe-15 pt-5 pb-5 lg-ps-9 lg-pe-9 lg-pt-4 lg-pb-4  border-color-light-gray align-items-center d-flex justify-content-between text-center text-sm-start">

                            <a href=""
                                class="btn btn-medium btn-base-color btn-box-shadow box-shadow-extra-large btnselengkapnya"
                                data-toggle="modal" data-target=".{{ $item->title_eng }}">
                                <span>
                                    <span class="btn-double-text text-black"
                                        data-text="Selengkapnya">Selengkapnya</span>
                                </span>
                            </a>
                            {{--  <a href="index.html" target="_blank"
                            class="btn btn-extra-large btn-rounded with-rounded btn-base-color btn-box-shadow box-shadow-extra-large mt-20px sm-mt-0 appear"
                            style="">Our
                            Bussiness<span class="bg-white text-base-color"><i
                                    class="fa-solid fa-arrow-right"></i></span></a> --}}
                        </div>
                    </div>
                </div>
                <?php $no++; ?>
            @endforeach




        </div>
    </section>









    {{-- <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <img src="{{ URL::asset('assets') }}/image/layanan/pagelayananengineering.jpg"
                    class="mb-30px md-mt-15px" alt="">
                <div style="padding:20px;">
                    <h4 class="alt-font fw-400 text-dark-gray mb-20px ls-minus-1px d-inline-block">ENGINEERING
                    </h4>
                    <p>
                        SENA memiliki keahlian menyusun dokumen engineering design untuk semua tahapan engineering yang
                        dibutuhkan. Layanan yang dapat SENA lakukan di bidang engineering meliputi
                    </p>
                    <ul class="list-style-04 text-dark-gray fw-500">
                        <li>Conceptual - Feasibility Study </li>
                        <li>Pre Front End Engineering Design (Pre Feed)</li>
                        <li>Front End Engineering Design (FEED)</li>
                        <li>Detail Engineering Design (DED)</li>
                        <li>Hazard and Operability (HAZOP) Study</li>
                        <li>Hazard Identification (HAZID) Study</li>
                        <li>Penelaahan Design / Review Design</li>
                        <li>Flow Assurance Study</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade inspeksi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <img src="{{ URL::asset('assets') }}/image/layanan/pagelayananinspeksi.jpg" class="mb-30px "
                    alt="">
                <div class="divcontent">
                    <h4 class="text-dark-gray fw-600 ls-minus-1px alt-font mb-20px d-block">INSPEKSI</h4>
                    <p>
                        SENA memiliki keahlian dalam inspeksi dan pengujian teknis, integrity serta pekerjaan pasca
                        operasi. Layanan yang dapat SENA lakukan di bidang inspeksi meliputi
                    </p>

                    <h6>Sebelum Pembangunan</h6>
                    <ul class="list-style-04 text-dark-gray fw-500">
                        <li>Welding and Coating Inspection</li>
                        <li>Material Testing & Inspection</li>
                        <li>Non-Destructive Testing (Conventional & Advance)</li>
                        <li>Destructive Testing</li>
                    </ul>

                    <h6 class="mt-45px">Setelah Pembangunan</h6>
                    <ul class="list-style-04 text-dark-gray fw-500">
                        <li>Pipeline and Facility Inspection & Assessment</li>
                        <li>Intelligent Pigging</li>
                        <li>Reliability Study</li>
                        <li>Risk Assessment and Mitigation</li>
                        <li>Risk Based Inspection</li>
                        <li>Fitness For Services</li>
                        <li>Remaining Life Assessment</li>
                        <li>Failure Analysis</li>
                        <li>External Corrosion Direct Assessment (CIPS, DCVG, PCM)</li>
                        <li>Geohazard Assessment</li>
                        <li>Jetty Assessment (Non Destructive & Destructive Test)</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade survey" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <img src="{{ URL::asset('assets') }}/image/layanan/pagelayanansurvey.jpg" class="mb-30px"
                    alt="">
                <div class="divcontent">
                    <h4 class="text-dark-gray fw-600 ls-minus-1px alt-font mb-20px d-block">SURVEY</h4>
                    <p>
                        SENA memiliki keahlian dalam kegiatan survei dan penelitian teknis baik Onshore dan Offshore.
                        Layanan yang dapat SENA lakukan di bidang survei dan penelitian teknis meliputi
                    </p>

                    <ul class="list-style-04 text-dark-gray fw-500">
                        <li>GIS Mapping and Databases</li>
                        <li>Topographic Survey</li>
                        <li>ROV Survey</li>
                        <li>Bathymetry Survey </li>
                        <li>Soil Investigation</li>
                        <li>Pemetaan Udara (Fotogrametri Udara)</li>
                        <li>3D Mapping Laser Scanner</li>
                        <li>MetOcean</li>
                    </ul>
                </div>

            </div>
        </div>
    </div> --}}


    {{-- modal --}}
    @foreach ($services as $item)
        <div class="modal fade {{ $item->title_eng }}" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <img src="{{ $globalurl }}{{ $item->image }}" class="mb-30px " alt="">
                    <div class="divcontent">
                        <h4 class="text-dark-gray fw-600 ls-minus-1px alt-font mb-20px d-block">{{ $item->title_eng }}
                        </h4>
                        {!! $item->description_eng !!}

                        {!! $item->list !!}
                    </div>

                </div>
            </div>
        </div>
    @endforeach





    <section class="p-0 mb-35px" style="background-color:#f0f4fd;" id="disiplin">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xl-6 col-lg-7 cover-background md-h-500px sm-h-400px md-mb-50px"
                    style="background-image:url('{{ $globalurl }}{{ $disiplin->background_discipline }}')">
                    {{-- <div
                        class="position-absolute text-center blur-box right-30px bottom-30px sm-right-15px sm-bottom-15px pt-35px pb-35px ps-45px pe-45px sm-p-20px bg-white-transparent counter-style-04 d-flex align-items-center border-radius-6px">
                        <h2 class="vertical-counter d-inline-flex alt-font text-dark-gray fw-700 mb-0 ls-minus-2px"
                            data-text="+" data-to="100"></h2>
                        <span class="w-180px text-dark-gray text-start fw-500 lh-24 ms-15px sm-ms-10px">Very satisfied
                            clients .</span>
                    </div> --}}
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-5 position-relative pt-100 pb-100 text-dark-gray">
                    <div class="contact-form-style-03 position-relative ps-15 pe-15 xxl-ps-10 xxl-pe-10 lg-ps-5 lg-pe-5 overflow-hidden last-paragraph-no-margin"
                        data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h1 class="lh-36 mb-40px xs-mb-25px fw-bold" style="line-height: 65px !important;">
                            {{ $disiplin->headline_eng }}
                        </h1>
                        <div class="row row-cols-1 row-cols-sm-3">
                            <div class="col">
                                <ul class="p-0 m-0 list-style-02">
                                    @php
                                        $allItems = collect(explode(',', $disiplin->list));
                                        $firstHalf = $allItems->take(4);
                                    @endphp
                                    @foreach ($firstHalf as $item)
                                        <li class="pb-5px"><i
                                                class="fa-solid fa-genderless fs-12 me-10px"></i>{{ $item }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="p-0 m-0 list-style-02">
                                    @php
                                        $secondHalf = $allItems->slice(4, 4);
                                    @endphp
                                    @foreach ($secondHalf as $item)
                                        <li class="pb-5px"><i
                                                class="fa-solid fa-genderless fs-12 me-10px"></i>{{ $item }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="p-0 m-0 list-style-02">
                                    @php
                                        $thirdpart = $allItems->slice(8, 4);
                                    @endphp
                                    @foreach ($thirdpart as $item)
                                        <li class="pb-5px"><i
                                                class="fa-solid fa-genderless fs-12 me-10px"></i>{{ $item }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>






    <section class="position-relative" id="hardware">
        <div class="container">

            <div class="col tab-style-06">
                <ul
                    class="nav nav-tabs alt-font justify-content-center border-0 text-center text-uppercase alt-font fw-500 mb-5">
                    <li class="nav-item bg-white border-color-extra-medium-gray m-5px  xs-m-5px">
                        <a class="nav-link active fw-500" data-bs-toggle="tab" href="#tab_six1">Software</a>
                        <span class="tab-bg-active bg-dark-gray"></span>
                    </li>
                    <li class="nav-item bg-white border-color-extra-medium-gray m-5px  xs-m-5px">
                        <a class="nav-link fw-500" data-bs-toggle="tab" href="#tab_six2">Hardware</a>
                        <span class="tab-bg-active bg-dark-gray"></span>
                    </li>
                </ul>
                <div class="tab-content">
                    <!-- start tab content -->
                    <div class="tab-pane fade in active show" id="tab_six1">

                        <div class="row row-cols-1 row-cols-lg-6 row-cols-md-3 row-cols-sm-2 justify-content-center align-items-center"
                            data-anime='{ "el": "childs", "translateY": [50, 0], "translateX": [-50, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>

                            @foreach ($softwaredanhardware as $item)
                                @if ($item->type == 'software')
                                    <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                        <div class="categories-box">
                                            <div class="icon-box position-relative ">
                                                <a><img src="{{ $globalurl }}{{ $item->image }}"
                                                        class="border-top" /></a>
                                                <div
                                                    class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                                </div>
                                            </div>
                                            <a class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                                style="text-transform: capitalize">{{ $item->title }}</a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach




                        </div>
                    </div>
                    <!-- end tab content -->
                    <!-- start tab content -->
                    <div class="tab-pane fade in" id="tab_six2">
                        <div class="row row-cols-1 row-cols-lg-6 row-cols-md-3 row-cols-sm-2 justify-content-center align-items-center"
                            data-anime='{ "el": "childs", "translateY": [50, 0], "translateX": [-50, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>


                            @foreach ($softwaredanhardware as $item)
                                @if ($item->type == 'hardware')
                                    <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                        <div class="categories-box">
                                            <div class="icon-box position-relative ">
                                                <a><img src="{{ $globalurl }}{{ $item->image }}"
                                                        class="border-top" /></a>
                                                <div
                                                    class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                                </div>
                                            </div>
                                            <a class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                                style="text-transform: capitalize">{{ $item->title }}</a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <!-- end tab content -->
                </div>
            </div>

        </div>
    </section>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</x-layout>
