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
    {{--  <x-slot:is_single>
        iya
    </x-slot:is_single> --}}


    <section class="ps-7 pe-7 xxl-ps-3 xxl-pe-3 xs-px-0 cover-background background-position-center-top"">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 col-md-10 text-center">
                <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px"
                    data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    News
                </h3>
            </div>
        </div>
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

                    <div class="text-center">
                        <a href="{{ url('news') }}"
                            class="btn btn-large btn-rounded btn-base-color btn-box-shadow box-shadow-large mt-20px ">Lihat
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- <section class="pt-5 ps-15 pe-15 xl-ps-2 xl-pe-2 lg-ps-2 lg-pe-2 sm-mx-0 bg-very-light-gray">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 col-md-10 text-center">
                <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px"
                    data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    Article
                </h3>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <ul
                        class="blog-classic blog-wrapper grid-loading grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
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
                                            class="card-link alt-font fs-12 text-uppercase text-dark-gray text-dark-gray-hover fw-700">More
                                            reading<i class="feather icon-feather-arrow-right icon-very-small"></i></a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                        @endForEach



                    </ul>
                </div>
            </div>
        </div>
    </section> --}}



    <section class=" md-pb-40px xs-pb-25px">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 col-md-10 text-center">
                <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px"
                    data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    Annual Report
                </h3>
            </div>
        </div>
        <div class="container"
            data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>

            <div class="row">
                <div class="col-12 filter-content p-md-0">
                    <ul
                        class="portfolio-simple portfolio-wrapper grid-loading grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-4col md-grid-2col sm-grid-1col xs-grid-1col gutter-extra-large text-center">
                        <li class="grid-sizer"></li>
                        <!-- start portfolio item -->


                        @foreach ($annualreport as $item)
                            <li class="grid-item {{ $item->tahun }} branding transition-inner-all">
                                <div
                                    class="services-box-style-03 last-paragraph-no-margin border-radius-6px overflow-hidden">
                                    <div class="position-relative">
                                        <a><img src="{{ $globalurl }}{{ $item->image }}" alt="" /></a>
                                    </div>
                                    <div class="bg-white">
                                        <div
                                            class="d-flex justify-content-center border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px position-relative text-center">
                                            <a href="#"
                                                class="btn btn-link btn-hover-animation-switch btn-medium fw-700 text-dark-gray text-uppercase"
                                                data-file-id="{{ $item->id }}">
                                                <span>
                                                    <span class="btn-text">Download</span>
                                                    <span class="btn-icon"><i
                                                            class="fa-solid fa-arrow-right"></i></span>
                                                    <span class="btn-icon"><i
                                                            class="fa-solid fa-arrow-right"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach


                        <!-- end portfolio item -->
                    </ul>


                    <div class="text-center">
                        <a href="{{ url('annualreport') }}"
                            class="btn btn-large btn-rounded btn-base-color btn-box-shadow box-shadow-large mt-20px ">Lihat
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Di bagian head -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        /* Modal Styles */
        .modal-content {
            border-radius: 15px;
        }

        .modal-header {
            background: linear-gradient(45deg, #63a5bf, #0d9dd6);
        }

        .modal-title {
            letter-spacing: -0.5px;
        }

        /* Form Styles */
        .form-floating>.form-control {
            border-radius: 10px;
            padding: 1rem;
            height: calc(3.5rem + 2px);
            transition: all 0.2s ease-in-out;
        }

        .form-floating>.form-control:focus {
            box-shadow: 0 0 0 0.25rem rgba(41, 55, 240, 0.1);
            border-color: #63a5bf;
        }

        .form-floating textarea.form-control {
            height: 100px;
        }

        .form-floating>label {
            padding: 1rem;
        }

        /* Button Styles */
        .btn-primary {
            background: linear-gradient(45deg, #63a5bf, #0d9dd6);
            border: none;
            padding: 0.8rem 2rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 5px 15px rgba(41, 55, 240, 0.2);
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        /* Animations */
        .modal.fade .modal-dialog {
            transform: scale(0.95);
            transition: transform 0.2s ease-out;
        }

        .modal.show .modal-dialog {
            transform: scale(1);
        }

        /* Loading State */
        .spinner-border {
            width: 1.2rem;
            height: 1.2rem;
        }

        /* Responsive Adjustments */
        @media (max-width: 576px) {
            .modal-dialog {
                margin: 0.5rem;
            }

            .modal-content {
                border-radius: 10px;
            }

            .modal-body {
                padding: 1.5rem;
            }
        }
    </style>

    <div class="modal fade" id="downloadModal" tabindex="-1" aria-labelledby="downloadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <!-- Modal Header -->
                <div class="modal-header bg-gradient-primary text-white border-0 px-4 py-3">
                    <h5 class="modal-title fs-4 fw-semibold" id="downloadModalLabel">
                        Download Annual Report
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body p-4">
                    <p class="text-muted mb-4">Please fill in your details to download the annual report.</p>

                    <form id="downloadForm">
                        <input type="hidden" id="id_annualreport" name="id_annualreport">

                        <!-- Name Field -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control border-0 bg-light" id="name" name="name"
                                placeholder="Name" required>
                            {{-- <label for="name">Name</label> --}}
                        </div>

                        <!-- Email Field -->
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control border-0 bg-light" id="email" name="email"
                                placeholder="Email" required>
                            {{-- <label for="email">Email</label> --}}
                        </div>

                        <!-- Company Field -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control border-0 bg-light" id="company" name="company"
                                placeholder="Institusi/Perusahaan" required>
                            {{-- <label for="company">Company</label> --}}
                        </div>

                        <!-- Phone Field -->
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control border-0 bg-light" id="phone" name="phone"
                                placeholder="Phone" required>
                            {{-- <label for="phone">Phone</label> --}}
                        </div>

                        <!-- Subject Field -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control border-0 bg-light" id="subject"
                                name="subject" placeholder="Subject" required>
                            {{-- <label for="subject">Subject</label> --}}
                        </div>

                        <!-- Message Field -->
                        <div class="form-floating mb-4">
                            <textarea class="form-control border-0 bg-light" id="message" name="message" rows="3" placeholder="Message"
                                style="height: 100px" required></textarea>
                            {{-- <label for="message">Message</label> --}}
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <span class="spinner-border spinner-border-sm me-2 d-none" role="status"
                                    aria-hidden="true"></span>
                                Download Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Di bagian bawah body, sebelum </body> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add event listener to download buttons
            document.querySelectorAll('.btn-hover-animation-switch').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Ambil id_annualreport dari data-file-id
                    const id_annualreport = this.getAttribute('data-file-id');

                    // Set nilai ke hidden input
                    document.getElementById('id_annualreport').value = id_annualreport;

                    // Tampilkan modal
                    const downloadModal = new bootstrap.Modal(document.getElementById(
                        'downloadModal'));
                    downloadModal.show();
                });
            });

            // Handle form submission
            document.getElementById('downloadForm').addEventListener('submit', function(e) {
                e.preventDefault();

                // Tampilkan loading state
                const submitButton = this.querySelector('button[type="submit"]');
                const originalButtonText = submitButton.innerHTML;
                submitButton.disabled = true;
                submitButton.innerHTML =
                    '<span class="spinner-border spinner-border-sm me-2"></span>Loading...';

                // Buat FormData object
                const formData = new FormData(this);

                // Kirim request ke server
                fetch('/submitdownload', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'Accept': 'application/json',
                        },
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log(formData);
                        if (data.success) {
                            // Close modal
                            const modal = bootstrap.Modal.getInstance(document.getElementById(
                                'downloadModal'));
                            modal.hide();

                            // Clear form
                            this.reset();

                            // Show success message
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: 'Form submitted successfully! File akan segera kami kirimkan ke Email anda.',
                                showConfirmButton: false,
                                timer: 2000
                            });

                            // Trigger file download
                            /* setTimeout(() => {
                                window.location.href = `/annual-report/download/${data.id}`;
                            }, 2000); */
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: data.message || 'An error occurred. Please try again.'
                            });
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'An error occurred. Please try again.'
                        });
                    })
                    .finally(() => {
                        // Reset button state
                        submitButton.disabled = false;
                        submitButton.innerHTML = originalButtonText;
                    });
            });
        });
    </script>
</x-layout>
