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
    {{-- <x-slot:is_single>
        iya
    </x-slot:is_single> --}}



    <section class="pt-5 ps-7 pe-7 xxl-ps-3 xxl-pe-3 xs-px-0 cover-background background-position-center-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <ul
                        class="blog-classic blog-wrapper grid-loading grid grid-4col xl-grid-4col lg-grid-4col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                        <li class="grid-sizer"></li>

                        @foreach ($news as $item)
                            <!-- start blog item -->
                            <li class="grid-item">
                                <div class="card bg-transparent border-0 h-100">
                                    <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                        <a href="{{ url('detail/' . $item->slug) }}"><img
                                                src="{{ $globalurl }}{{ $item->image }}" alt="" /></a>
                                    </div>
                                    <div class="card-body px-0 pt-30px pb-30px">
                                        <span class="fs-13 text-uppercase mb-5px d-block">
                                            <a href="{{ url('detail/' . $item->slug) }}"
                                                class="blog-date text-dark-gray-hover">{{ $item->created_at->format('d-m-Y') }}</a></span>
                                        <a href="{{ url('detail/' . $item->slug) }}"
                                            class="card-title mb-10px fw-600 fs-17 lh-26 text-dark-gray text-dark-gray-hover d-inline-block w-95">
                                            {{ $item->title }}</a>
                                        {!! Str::words($item->content, 10) !!}
                                        <a href="{{ url('detail/' . $item->slug) }}"
                                            class="card-link alt-font fs-12 text-uppercase text-dark-gray text-dark-gray-hover fw-700">Selengkapnya<i
                                                class="feather icon-feather-arrow-right icon-very-small"></i></a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                        @endForEach



                    </ul>
                </div>
                {{-- <div class="col-12 mt-2 d-flex justify-content-center">
                    <ul class="pagination pagination-style-01 fs-13 fw-500 mb-0">
                        <li class="page-item">
                            <a class="page-link" href="#"><i
                                    class="feather icon-feather-arrow-left fs-18 d-xs-none"></i></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">01</a></li>
                        <li class="page-item active">
                            <a class="page-link" href="#">02</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item"><a class="page-link" href="#">04</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i
                                    class="feather icon-feather-arrow-right fs-18 d-xs-none"></i></a>
                        </li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </section>
</x-layout>
