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

    <section id="down-section" class="background-position-center-top sm-background-image-none"
        style="background-image: url('images/vertical-line-bg.svg')">
        <div class="container">
            <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large"
                data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <li class="grid-sizer"></li>
                @foreach ($news as $item)
                    <!-- start blog item -->
                    <li class="grid-item">
                        <div
                            class="card border-0 border-radius-4px box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                            <div class="blog-image">
                                <a href="{{ url('detail/' . $item->slug) }}" class="d-block"><img
                                        src="{{ $globalurl }}{{ $item->image }}" alt="" /></a>
                                <div class="blog-categories">
                                    <a href="demo-startup-blog.html"
                                        class="categories-btn bg-white text-dark-gray text-dark-gray-hover text-uppercase alt-font fw-700">Investor</a>
                                </div>
                            </div>
                            <div class="card-body p-13 md-p-11">
                                <a href="{{ url('detail/' . $item->slug) }}"
                                    class="card-title mb-15px alt-font fw-700 fs-18 lh-30 text-dark-gray text-dark-gray-hover d-inline-block">{{ $item->title }}</a>
                                <p>{!! Str::words($item->content, 10) !!}</p>
                                <div
                                    class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase">
                                    <div class="me-auto">
                                        <span
                                            class="blog-date d-inline-block">{{ $item->created_at->format('d-m-Y') }}</span>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                @endForEach


            </ul>

        </div>
    </section>


</x-layout>
