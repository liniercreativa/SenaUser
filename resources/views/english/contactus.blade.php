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

    <section class="bg-white">
        <div class="container">
            <div class="row justify-content-center mb-2">
                <div class="col-lg-6 col-md-8 text-center">
                    <span
                        class="fs-15 mb-5px text-gradient-fast-pink-light-yellow fw-700 d-inline-block text-uppercase ls-1px">
                        Contact Us
                    </span>
                    <h2 class="ls-minus-1px text-dark-gray fw-600">Get In Touch</h2>
                </div>
            </div>
            <div class="row">
                <div class="col tab-style-03">
                    <ul
                        class="nav nav-tabs justify-content-center text-center fw-500 border-color-light-medium-gray mb-7">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#tab_third1">Business Inquiries</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab_third2">General Questions</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- start tab content -->
                        <div class="tab-pane fade in active show" id="tab_third1">
                            <div class="row align-items-center justify-content-center g-0">
                                <div class="col-xl-10 col-lg-12">
                                    <!-- start contact form -->
                                    <form class="row contact-form-style-02 formbisnis">
                                        <div class="col-md-6 mb-30px">
                                            <input
                                                class="input-name border-radius-4px border-color-white box-shadow-double-large form-control required"
                                                type="text" name="name" placeholder="Your Name*" />
                                        </div>
                                        <div class="col-md-6 mb-30px">
                                            <input
                                                class="border-radius-4px border-color-white box-shadow-double-large form-control required"
                                                type="email" name="email" placeholder="email*" />
                                        </div>
                                        <div class="col-md-12 mb-30px">
                                            <input
                                                class="border-radius-4px border-color-white box-shadow-double-large form-control required"
                                                type="text" name="company" placeholder="Company" />
                                        </div>
                                        <div class="col-md-12 mb-30px">
                                            <input
                                                class="border-radius-4px border-color-white box-shadow-double-large form-control required"
                                                type="number" name="telephone" placeholder="Telephone" />
                                        </div>
                                        <div class="col-md-12 mb-30px">
                                            <input
                                                class="border-radius-4px border-color-white box-shadow-double-large form-control required"
                                                type="text" name="subject" placeholder="Your Subject" />
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <textarea class="border-radius-4px border-color-white box-shadow-double-large form-control" cols="40"
                                                rows="4" name="message" placeholder="Your message"></textarea>
                                        </div>
                                        <div class="col-xl-6 col-md-7">
                                            <p class="mb-0 fs-14 lh-26 text-center text-md-start w-90 md-w-100">
                                                We are committed to protecting your privacy. We will
                                                never collect information about you without your
                                                explicit consent.
                                            </p>
                                        </div>
                                        <div class="col-xl-6 col-md-5 text-center text-md-end sm-mt-20px">
                                            <input type="hidden" name="redirect" value="" />
                                            <button
                                                class="btn btn-extra-large btn-base-color left-icon btn-box-shadow btn-rounded d-inline-block align-middle xs-m-10px"
                                                type="submit">
                                                <span>
                                                    <span class="btn-double-text" data-text="Book appointment">Send
                                                        Message</span>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-results mt-20px d-none"></div>
                                        </div>
                                    </form>
                                    <!-- end contact form -->
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab_third2">
                            <div class="row align-items-center justify-content-center g-0">
                                <div class="col-xl-10 col-lg-12">
                                    <!-- start contact form -->
                                    <form class="row contact-form-style-02 formumum">
                                        <div class="col-md-6 mb-30px">
                                            <input
                                                class="input-name border-radius-4px border-color-white box-shadow-double-large form-control required"
                                                type="text" name="nameumum" placeholder="Your Name*" />
                                        </div>
                                        <div class="col-md-6 mb-30px">
                                            <input
                                                class="border-radius-4px border-color-white box-shadow-double-large form-control required"
                                                type="email" name="emailumum" placeholder="email*" />
                                        </div>
                                        <div class="col-md-12 mb-30px">
                                            <input
                                                class="border-radius-4px border-color-white box-shadow-double-large form-control required"
                                                type="text" name="companyumum" placeholder="Company" />
                                        </div>
                                        <div class="col-md-12 mb-30px">
                                            <input
                                                class="border-radius-4px border-color-white box-shadow-double-large form-control required"
                                                type="number" name="telephoneumum" placeholder="Telephone" />
                                        </div>
                                        <div class="col-md-12 mb-30px">
                                            <input
                                                class="border-radius-4px border-color-white box-shadow-double-large form-control required"
                                                type="text" name="subjectumum" placeholder="Your Subject" />
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <textarea class="border-radius-4px border-color-white box-shadow-double-large form-control" cols="40"
                                                rows="4" name="messageumum" placeholder="Your message"></textarea>
                                        </div>
                                        <div class="col-xl-6 col-md-7">
                                            <p class="mb-0 fs-14 lh-26 text-center text-md-start w-90 md-w-100">
                                                We are committed to protecting your privacy. We will
                                                never collect information about you without your
                                                explicit consent.
                                            </p>
                                        </div>
                                        <div class="col-xl-6 col-md-5 text-center text-md-end sm-mt-20px">
                                            <input type="hidden" name="redirect" value="" />
                                            <button
                                                class="btn btn-extra-large btn-base-color left-icon btn-box-shadow btn-rounded d-inline-block align-middle xs-m-10px"
                                                type="submit">
                                                <span>
                                                    <span class="btn-double-text" data-text="Book appointment">Send
                                                        Message</span>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-results mt-20px d-none"></div>
                                        </div>
                                    </form>
                                    <!-- end contact form -->
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab_third3">
                            <div class="row align-items-center justify-content-center g-0">
                                <div class="col-lg-6 col-md-11 position-relative md-mb-30px">
                                    <figure class="mb-0">
                                        <img src="https://via.placeholder.com/580x475" alt=""
                                            class="w-95 border-radius-6px" />
                                        <figcaption
                                            class="position-absolute bottom-90px right-minus-50px xs-bottom-10px xs-right-minus-15px xs-w-140px">
                                            <img src="images/demo-spa-salon-facility-bg.png" class="animation-float"
                                                alt="" />
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-lg-5 col-md-11 offset-lg-1">
                                    <span
                                        class="fs-15 mb-15px text-gradient-fast-pink-light-yellow fw-700 d-inline-block text-uppercase ls-1px">Private
                                        beach</span>
                                    <h3 class="ls-minus-1px text-dark-gray w-100 fw-600">
                                        The best luxury beach for spa massage.
                                    </h3>
                                    <p class="mb-35px w-95 sm-w-100">
                                        A design-led approach guides the team, implementing
                                        practices, products and services that are thoughtful and
                                        environmentally sound. family of professionals that
                                        creates intelligent designs that help the face of
                                        hospitality.
                                    </p>
                                    <a href="#"
                                        class="btn btn-medium btn-switch-text btn-round-edge btn-transparent-light-gray">
                                        <span>
                                            <span class="btn-double-text" data-text="Explore more">Explore more</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab_third4">
                            <div class="row align-items-center justify-content-center g-0">
                                <div class="col-lg-6 col-md-11 position-relative md-mb-30px">
                                    <figure class="mb-0">
                                        <img src="https://via.placeholder.com/580x475" alt=""
                                            class="w-95 border-radius-6px" />
                                        <figcaption
                                            class="position-absolute bottom-90px right-minus-50px xs-bottom-10px sm-right-minus-20px xs-right-minus-10px xs-w-140px">
                                            <img src="images/demo-spa-salon-facility-bg.png" class="animation-float"
                                                alt="" />
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-lg-5 col-md-11 offset-lg-1">
                                    <span
                                        class="fs-15 mb-15px text-gradient-fast-pink-light-yellow fw-700 d-inline-block text-uppercase ls-1px">Sauna
                                        bath</span>
                                    <h3 class="ls-minus-1px text-dark-gray w-100 fw-600">
                                        Saunas improve your health and wellness.
                                    </h3>
                                    <p class="mb-35px w-95 sm-w-100">
                                        A design-led approach guides the team, implementing
                                        practices, products and services that are thoughtful and
                                        environmentally sound. family of professionals that
                                        creates intelligent designs that help the face of
                                        hospitality.
                                    </p>
                                    <a href="#"
                                        class="btn btn-medium btn-switch-text btn-round-edge btn-transparent-light-gray">
                                        <span>
                                            <span class="btn-double-text" data-text="Explore more">Explore more</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-0 mb-35px">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xl-6 col-lg-7 cover-background md-h-500px sm-h-400px md-mb-50px"
                    style="background-image:url('{{ $globalurl }}{{ $contact->featured_image }}')">
                    {{-- <div
                        class="position-absolute text-center blur-box right-30px bottom-30px sm-right-15px sm-bottom-15px pt-35px pb-35px ps-45px pe-45px sm-p-20px bg-white-transparent counter-style-04 d-flex align-items-center border-radius-6px">
                        <h2 class="vertical-counter d-inline-flex alt-font text-dark-gray fw-700 mb-0 ls-minus-2px"
                            data-text="+" data-to="100"></h2>
                        <span class="w-180px text-dark-gray text-start fw-500 lh-24 ms-15px sm-ms-10px">Very satisfied
                            clients .</span>
                    </div> --}}
                </div>
                <div class="col-xxl-4 col-xl-5 col-lg-5 position-relative">
                    <div class="contact-form-style-03 position-relative ps-15 pe-15 xxl-ps-10 xxl-pe-10 lg-ps-5 lg-pe-5 overflow-hidden last-paragraph-no-margin"
                        data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="mb-10px">
                            <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                            <span
                                class="text-gradient-base-color fs-15 alt-font fw-700 ls-05px text-uppercase d-inline-block align-middle">Get
                                in touch with us</span>
                        </div>
                        <h2 class="text-dark-gray alt-font fw-600 w-90 xxl-w-100 ls-minus-2px">{{ $contact->ho_city }}
                        </h2>
                        <p class="mb-10px lg-w-90">
                            {{ $contact->ho_address }}
                        </p>
                        <div class="separator-line-1px bg-extra-medium-gray w-70 mt-20px mb-20px md-w-100"></div>
                        <div class="d-block">
                            <span class="text-dark-gray fw-600">E:</span>
                            <a href="mailto:{{ $contact->ho_email }}"> {{ $contact->ho_email }} </a>
                        </div>
                        <div class="d-block mb-5px">
                            <span class="text-dark-gray fw-600">T:</span>
                            <a href="tel:12345678910">{{ $contact->ho_phone }} </a>
                        </div>
                        <a href="{{ $contact->ho_linkmap }}" target="_blank"
                            class="fs-14 text-dark-gray text-uppercase fw-600">
                            <span class=""><i class="feather icon-feather-map-pin fs-14 me-5px"></i>View
                                on google map</span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- end section -->
    <!-- start section -->

    <!-- end section -->
    <!-- start section -->
    {{-- <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center elements-social social-icon-style-06">
                    <div class="fs-22 mb-30px text-dark-gray">
                        Connect with <span class="fw-600">social media</span>
                    </div>
                    <ul class="extra-large-icon fw-600"
                        data-anime='{ "el": "childs", "translateX": [10, 0], "opacity": [0,1], "duration": 300, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <li>
                            <a class="facebook" href="https://www.facebook.com" target="_blank"><span
                                    class="brand-label text-dark-gray">Fb</span><span
                                    class="brand-icon fa-brands fa-facebook-f"></span></a>
                        </li>

                        <li>
                            <a class="twitter" href="http://www.twitter.com" target="_blank"><span
                                    class="brand-label text-dark-gray">Tw</span><span
                                    class="brand-icon fa-brands fa-twitter"></span></a>
                        </li>
                        <li>
                            <a class="behance" href="http://www.Youtube.com" target="_blank"><span
                                    class="brand-label text-dark-gray">Yt</span><span
                                    class="brand-icon fa-brands fa-youtube"></span></a>
                        </li>
                        <li>
                            <a class="pinterest" href="https://in.pinterest.com" target="_blank"><span
                                    class="brand-label text-dark-gray">Ig</span><span
                                    class="brand-icon fa-brands fa-instagram"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="p-0">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-md-12">
                    {!! $contact->map !!}
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.formbisnis').on('submit', function(e) {
                e.preventDefault();

                // Reset previous error states
                $('.is-invalid').removeClass('is-invalid');
                $('.invalid-feedback').remove();

                let formData = {
                    name: $('input[name="name"]').val(),
                    email: $('input[name="email"]').eq(0).val(), // Get first email field
                    company: $('input[placeholder="Company"]').val(),
                    telephone: $('input[placeholder="Telephone"]').val(),
                    subject: $('input[placeholder="Your Subject"]').val(),
                    message: $('textarea[name="message"]').val(),
                    _token: $('meta[name="csrf-token"]').attr('content')
                };

                $.ajax({
                    type: 'POST',
                    url: '/bisnisstore',
                    data: formData,
                    success: function(response) {
                        // Show success message
                        $('.form-results')
                            .removeClass('d-none alert-danger')
                            .addClass('alert alert-success')
                            .html(response.message);

                        // Reset form
                        $('.contact-form-style-02')[0].reset();

                        // Hide success message after 5 seconds
                        setTimeout(function() {
                            $('.form-results').addClass('d-none');
                        }, 5000);
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;

                            // Display validation errors
                            Object.keys(errors).forEach(function(key) {
                                let input = $(`[name="${key}"]`);
                                input.addClass('is-invalid');
                                input.after(
                                    `<div class="invalid-feedback">${errors[key][0]}</div>`
                                );
                            });
                        }

                        // Show error message
                        $('.form-results')
                            .removeClass('d-none alert-success')
                            .addClass('alert alert-danger')
                            .html(xhr.responseJSON.message);
                    }
                });
            });
        });


        $(document).ready(function() {
            $('.formumum').on('submit', function(e) {
                e.preventDefault();

                // Reset previous error states
                $('.is-invalid').removeClass('is-invalid');
                $('.invalid-feedback').remove();

                let formData = {
                    name: $('input[name="nameumum"]').val(),
                    email: $('input[name="emailumum"]').eq(0).val(), // Get first email field
                    company: $('input[name="companyumum"]').val(),
                    telephone: $('input[name="telephoneumum"]').val(),
                    subject: $('input[name="subjectumum"]').val(),
                    message: $('textarea[name="messageumum"]').val(),
                    _token: $('meta[name="csrf-token"]').attr('content')
                };

                $.ajax({
                    type: 'POST',
                    url: '/umumstore',
                    data: formData,
                    success: function(response) {
                        // Show success message
                        $('.form-results')
                            .removeClass('d-none alert-danger')
                            .addClass('alert alert-success')
                            .html(response.message);

                        // Reset form
                        $('.contact-form-style-02')[0].reset();

                        // Hide success message after 5 seconds
                        setTimeout(function() {
                            $('.form-results').addClass('d-none');
                        }, 5000);
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;

                            // Display validation errors
                            Object.keys(errors).forEach(function(key) {
                                let input = $(`[name="${key}"]`);
                                input.addClass('is-invalid');
                                input.after(
                                    `<div class="invalid-feedback">${errors[key][0]}</div>`
                                );
                            });
                        }

                        // Show error message
                        $('.form-results')
                            .removeClass('d-none alert-success')
                            .addClass('alert alert-danger')
                            .html(xhr.responseJSON.message);
                    }
                });
            });
        });
    </script>
</x-layout>
