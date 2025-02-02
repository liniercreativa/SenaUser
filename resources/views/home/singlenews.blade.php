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


    <x-slot:is_single>
        iya
    </x-slot:is_single>


    <section class="pb-0 pt-40px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h2 class="alt-font fw-600 ls-minus-2px text-dark-gray mx-auto mb-5">
                        {{ $news->title }}
                    </h2>
                    <i
                        class="feather icon-feather-more-horizontal- icon-double-large text-light-gray d-inline-block mb-5 d-inline-block"></i>
                </div>
            </div>
        </div>
    </section>

    <section class="half-section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {{-- <img class="border-radius-6px"
                        src="https://dashboardsena.liniercreativa.my.id/upload/image/news_1730269358.jpg" alt=""
                        style="width : 100%" /> --}}
                    <img class="border-radius-6px" src="{{ $globalurl }}{{ $news->image }}" alt=""
                        style="width : 100%" />
                </div>
            </div>
        </div>
    </section>



    <section class="py-0 pb-40px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="dropcap-style-02 last-paragraph-no-margin">
                        {!! $news->content !!}
                        <!-- <div class="h-3px w-100 bg-dark-gray"></div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-very-light-gray">
        <div class="container">
            <div class="row justify-content-center mb-2">
                <div class="col-12 col-lg-7 text-center">
                    <span class="fs-15 fw-500 text-uppercase d-inline-block">You may also like</span>
                    <h4 class="text-dark-gray fw-600">Related posts</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12 px-md-0">
                    <ul class="blog-classic blog-wrapper grid-loading grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large"
                        data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <li class="grid-sizer"></li>
                        <!-- start blog item -->
                        @foreach ($newsall as $item)
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
                                                class="blog-date text-dark-gray-hover">{{ $item->created_at->format('d M Y') }}</a></span>
                                        <a href="{{ url('detail/' . $item->slug) }}"
                                            class="card-title mb-10px fw-600 fs-17 lh-26 text-dark-gray text-dark-gray-hover d-inline-block w-95">
                                            {{ $item->title }}</a>
                                        {!! Str::words($item->content, 10) !!}
                                        <a href="{{ url('detail/' . $item->slug) }}"
                                            class="card-link alt-font fs-12 text-uppercase text-dark-gray text-dark-gray-hover fw-700">Selengkapnya<i class="feather icon-feather-arrow-right icon-very-small"></i></a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                        @endForEach
                    </ul>
                </div>
            </div>
        </div>
    </section>
</x-layout>
