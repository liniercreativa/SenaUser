<!DOCTYPE html>
<html class="no-js" lang="en">



<head>
    <title>PT. Solusi Energy Nusantara</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png" />
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- style sheets and font icons -->
    <link rel="stylesheet" href="{{ URL::asset('assets') }}/css/vendors.min.css" />
    <link rel="stylesheet" href="{{ URL::asset('assets') }}/css/icon.min.css" />
    <link rel="stylesheet" href="{{ URL::asset('assets') }}/css/style.css?v=<?php echo rand(); ?>" />
    <link rel="stylesheet" href="{{ URL::asset('assets') }}/css/responsive.css" />
    <link rel="stylesheet" href="{{ URL::asset('assets') }}/demos/business/business.css?v=<?php echo rand(); ?>" />
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body data-mobile-nav-style="classic">



    <header class="header-with-topbar">
        <nav class="navbar navbar-expand-lg header-transparent bg-transparent header-reverse" data-header-hover="light">
            <div class="container-fluid" style="padding-left:0px !important;">
                <div class="col-auto col-xxl-3 col-lg-2 me-lg-0 me-auto" style="padding-left:0px !important;">
                    <a class="navbar-brand" href="{{ route('index') }}">
                        <img src="{{ $logo }}" data-at2x="{{ $logo }}" alt=""
                            class="default-logo">
                        <img src="{{ $logo }}" data-at2x="{{ $logo }}" alt="" class="alt-logo">
                        <img src="{{ $logo }}" data-at2x="{{ $logo }}" alt=""
                            class="mobile-logo">
                    </a>
                </div>
                <div class="col-auto menu-order position-static">
                    <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <style>
                        .activedd {
                            color: #63A5BF !important;
                        }

                        .language-switcher {
                            margin-left: 15px;
                            display: flex;
                            align-items: center;
                        }

                        .language-switcher a {
                            padding: 5px 8px;
                            text-decoration: none;
                            color: #333;
                            transition: all 0.3s ease;
                        }

                        .language-switcher a.active {
                            font-weight: bold;
                            color: #63A5BF;
                        }

                        .language-switcher a:hover {
                            color: #63A5BF;
                        }
                    </style>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav fw-600">
                            @php
                                $lang = session('lang', 'id');
                            @endphp

                            <li class="nav-item">
                                <a href="{{ route('index') }}"
                                    class="{{ Request::routeIs('index') ? 'activedd' : '' }} nav-link">
                                    {{ $lang == 'id' ? 'Beranda' : 'Home' }}
                                </a>
                            </li>

                            <!-- About Us -->
                            <li class="nav-item dropdown simple-dropdown">
                                <a href="{{ route('aboutus') }}"
                                    class="{{ Request::routeIs('aboutus') ? 'activedd' : '' }} nav-link">
                                    {{ $lang == 'id' ? 'Tentang Kami' : 'About Us' }}
                                </a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink6"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink6">
                                    <li class="dropdown">
                                        <a href="#visimisi" class="section-link" data-section="visimisi">
                                            {{ $lang == 'id' ? 'Visi & Misi' : 'Vision & Mission' }}
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#ourculture" class="section-link" data-section="ourculture">
                                            {{ $lang == 'id' ? 'Budaya Kami' : 'Our Culture' }}
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#bod" class="section-link" data-section="bod">
                                            {{ $lang == 'id' ? 'Direksi & Komisaris' : 'BOD & BOC' }}
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#awards" class="section-link" data-section="awards">
                                            {{ $lang == 'id' ? 'Penghargaan & Sertifikasi' : 'Awards & Certification' }}
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Capability -->
                            <li class="nav-item dropdown simple-dropdown">
                                <a href="{{ route('capability') }}"
                                    class="{{ Request::routeIs('capability') ? 'activedd' : '' }} nav-link">
                                    {{ $lang == 'id' ? 'Kapabilitas' : 'Capability' }}
                                </a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink6"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink6">
                                    <li class="dropdown">
                                        <a href="#disiplin" class="section-link" data-section="disiplin">
                                            {{ $lang == 'id' ? 'Disiplin' : 'Our Discipline' }}
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#engineering" class="section-link" data-section="engineering">
                                            {{ $lang == 'id' ? 'Teknik' : 'Engineering' }}
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#inspection" class="section-link" data-section="inspection">
                                            {{ $lang == 'id' ? 'Inspeksi' : 'Inspection' }}
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#survey" class="section-link" data-section="survey">
                                            {{ $lang == 'id' ? 'Survei' : 'Survey' }}
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#consultant" class="section-link" data-section="consultant">
                                            {{ $lang == 'id' ? 'Konsultan' : 'Consultant' }}
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#software" class="section-link" data-section="software">
                                            {{ $lang == 'id' ? 'Perangkat Lunak' : 'Software' }}
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#hardware" class="section-link" data-section="hardware">
                                            {{ $lang == 'id' ? 'Perangkat Keras' : 'Hardware' }}
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Experience -->
                            <li class="nav-item dropdown simple-dropdown">
                                <a href="{{ route('experience') }}"
                                    class="{{ Request::routeIs('experience') ? 'activedd' : '' }} nav-link">
                                    {{ $lang == 'id' ? 'Pengalaman' : 'Experience' }}
                                </a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink6"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink6">
                                    <li class="dropdown">
                                        <a href="#upstream" class="section-link" data-section="upstream">
                                            {{ $lang == 'id' ? 'Hulu' : 'Upstream' }}
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#petrochemical" class="section-link" data-section="petrochemical">
                                            {{ $lang == 'id' ? 'Petrokimia & Kilang' : 'Petrochemical & Refinery' }}
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#downstream" class="section-link" data-section="downstream">
                                            {{ $lang == 'id' ? 'Hilir' : 'Downstream' }}
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#client" class="section-link" data-section="client">
                                            {{ $lang == 'id' ? 'Klien Berharga' : 'Valuable Client' }}
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Media & Investor -->
                            <li class="nav-item dropdown simple-dropdown">
                                <a href="{{ route('mediainvestor') }}"
                                    class="{{ Request::routeIs('mediainvestor') ? 'activedd' : '' }} nav-link">
                                    {{ $lang == 'id' ? 'Media & Investor' : 'Media & Investor' }}
                                </a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink6"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink6">
                                    <li class="dropdown">
                                        <a href="{{ route('news') }}">
                                            {{ $lang == 'id' ? 'Berita' : 'News' }}
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ route('investor') }}">
                                            {{ $lang == 'id' ? 'Investor' : 'Investor' }}
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ route('annualreport') }}">
                                            {{ $lang == 'id' ? 'Laporan Tahunan' : 'Annual Report' }}
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Contact Us -->
                            <li class="nav-item">
                                <a href="{{ route('contactus') }}"
                                    class="{{ Request::routeIs('contactus') ? 'activedd' : '' }} nav-link">
                                    {{ $lang == 'id' ? 'Hubungi Kami' : 'Contact Us' }}
                                </a>
                            </li>

                            <!-- Career -->
                            <li class="nav-item">
                                <a href="https://karirsena.pt-sena.co.id" class="nav-link" target="_blank">
                                    {{ $lang == 'id' ? 'Karir' : 'Career' }}
                                </a>
                            </li>

                            <!-- Language Switcher -->
                            <div class="language-switcher">
                                <a href="{{ url()->current() }}?lang=id"
                                    class="{{ $lang == 'id' ? 'active' : '' }}"><img style="width: 30px;"
                                        src="{{ URL::asset('assets') }}/image/indonesia-flag.png"></a> |
                                <a href="{{ url()->current() }}?lang=en"
                                    class="{{ $lang == 'en' ? 'active' : '' }}"><img style="width: 30px;"
                                        src="{{ URL::asset('assets') }}/image/united-kingdom.png"></a>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
