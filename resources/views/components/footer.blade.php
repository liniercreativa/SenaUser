 <!-- start footer -->
 @php
     use App\Models\Footer;

     $footer = Footer::where('id', 1)->first();
 @endphp
 <style>
     .rounded-image {
         width: 100%;
         border-radius: 20px;
     }
 </style>
 <div style="background-color: #f9f9f9;"
     class="footer-top pt-50px pb-50px sm-pt-35px sm-pb-35px border-bottom border-1 border-color-transparent-white-light">
     <div class="container">
         <div class="row align-items-center justify-content-center">
             <!-- start footer column -->
             <div class="col-xl-7 text-center text-xl-start lg-mb-30px sm-mb-20px">
                 <img class="rounded-image" src="{{ $globalurl }}{{ $footer->image_footer }}" style="width: 100%">
             </div>
             <!-- end footer column -->
             <!-- start footer column -->
             <div class="col-xl-5 text-center text-xl-end">
                 <h6 style="text-align: left; font-weight:bold; color:#000;">{{ $footer->nama_pt }}</h6>

                 <div class="row">
                     <div class="col-1">
                         <span class=""><i class="feather icon-feather-map-pin fs-28 me-5px"></i></span>
                     </div>
                     <div class="col-11">
                         <p class="w-85 xl-w-95 sm-w-100" style="color:#000;text-align:left;">
                             {{ $footer->alamat_pt }}
                             <br>
                             <a href="https://maps.app.goo.gl/WSKyxkG5dP7yT8H46" target="_blank"
                                 class="fs-14 text-dark-gray text-uppercase fw-600"
                                 style="color: #63A5BF;font-weight: bold;">
                                 <span class="" style="color: #63A5BF;font-weight: bold;">View
                                     on google map</span>
                             </a>
                         </p>
                     </div>
                 </div>


                 <div class="row">
                     <div class="col-6" style="text-align: left;">
                         <span class="fs-17 fw-400 d-block text-grey mb-5px">Member Of</span>
                         <img src="{{ $globalurl }}{{ $footer->image_member_of }}" style="width: 150px;">
                     </div>
                     <div class="col-6" style="text-align: left;">
                         <span class="fs-17 fw-400 d-block text-grey mb-5px">Subsidiary Of</span>
                         <img src="{{ $globalurl }}{{ $footer->image_subsidiary_of }}" style="width: 150px;">

                     </div>
                 </div>
             </div>
             <!-- end footer column -->
         </div>
     </div>
 </div>
 <footer class="footer-dark bg-dark-gray pt-10px pb-2 lg-pb-15px">

     <div class="container">
         <div class="row justify-content-center fs-17 fw-300 mt-5 mb-4 md-mt-45px md-mb-45px xs-mt-35px xs-mb-35px">
             <!-- start footer column -->
             <div class="col-6 col-lg-3 order-sm-1 md-mb-40px xs-mb-30px last-paragraph-no-margin">
                 <a href="#" class="footer-logo mb-15px d-inline-block"><img style="max-height: 70px"
                         src="{{ $globalurl }}{{ $footer->logo_footer }}"
                         data-at2x="{{ $globalurl }}{{ $footer->logo_footer }}" alt="" /></a>
                 {{-- <p class="w-85 xl-w-95 sm-w-100" style="color:#fff;">
                     PT SENA berfokus pada penyediaan layanan jasa engineering di
                     industri oil dan gas.
                 </p> --}}

             </div>
             <!-- end footer column -->
             <!-- start footer column -->
             <div class="col-6 col-lg-3 col-sm-4 xs-mb-30px order-sm-3 order-lg-2" style="color:#fff;">
                 {{-- <span class="fs-18 fw-400 d-block text-white mb-5px">Company</span> --}}
                 <ul style="color:#fff;">
                     <li><a href="{{ route('aboutus') }}" style="color:#fff;">ABOUT US</a></li>
                     <li><a href="{{ route('capability') }}" style="color:#fff;">CAPABILITY</a></li>
                     <li><a href="{{ route('experience') }}" style="color:#fff;">EXPERIENCE</a></li>
                 </ul>
             </div>
             <!-- end footer column -->
             <!-- start footer column -->
             <div class="col-6 col-lg-3 col-sm-4 xs-mb-30px order-sm-4 order-lg-3" style="color:#fff;">
                 <ul>
                     <li>
                         <a href="{{ route('contactus') }}" style="color:#fff;">CONTACT US </a>
                     </li>
                     <li>
                         <a href="#" style="color:#fff;">CAREER</a>
                     </li>
                 </ul>
             </div>
             <!-- end footer column -->
             <!-- start footer column -->
             <div class="col-6 col-lg-3 col-sm-4 xs-mb-30px order-sm-5 order-lg-4">
                 <span class="fs-18 fw-400 d-block text-white mb-5px">SOCIAL MEDIA</span>
                 <div class="elements-social social-icon-style-08">
                     <ul class="small-icon light">
                         <li><a class="instagram" href="{{ $footer->instagram_link }}" target="_blank"><i
                                     class="fa-brands fa-instagram"></i></a></li>
                         <li><a class="twitter" href="{{ $footer->youtube_link }}" target="_blank"><i
                                     class="fa-brands fa-youtube"></i></a></li>
                         <li><a class="dribbble" href="{{ $footer->linkedin_link }}" target="_blank"><i
                                     class="fa-brands fa-linkedin"></i></a></li>
                     </ul>
                 </div>
             </div>
             <!-- end footer column -->
             <!-- start footer column -->

             <!-- end footer column -->
         </div>
         <div class="row align-items-center fs-16 fw-300">
             <!-- start copyright -->
             <div class="col-md-12 last-paragraph-no-margin order-2 order-md-1 text-center text-md-start">
                 <p style="color:#fff; text-align: center;">
                     {{-- &COPY; Copyright {{ $currentYear }}
                     <a href="#" target="_blank" class="text-decoration-line-bottom text-white">PT SENA</a> --}}
                     {{ $footer->copyright }}
                 </p>
             </div>
             <!-- end copyright -->
             <!-- start footer menu -->
             {{-- <div class="col-md-8 text-md-end order-1 order-md-2 text-center text-md-end sm-mb-10px"></div> --}}
             <!-- end footer menu -->
         </div>
     </div>
 </footer>
 <!-- end footer -->
 <!-- start sticky column -->
 <!-- <div class="sticky-wrap z-index-1 d-none d-xl-inline-block" data-animation-delay="100" data-shadow-animation="true">
            <span class="fs-15 fw-500"><i class="feather icon-feather-mail icon-small me-10px align-middle"></i>Effective business solutions? — <a href="demo-business-contact.html" class="text-decoration-line-bottom fw-600">Get started now</a></span>
        </div> -->
 <!-- end sticky column -->
 <!-- start scroll progress -->
 <div class="scroll-progress d-none d-xxl-block">
     <a href="#" class="scroll-top" aria-label="scroll">
         <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
     </a>
 </div>
 <!-- end scroll progress -->
 <!-- javascript libraries -->
 <script type="text/javascript" src="{{ URL::asset('assets') }}/js/jquery.js"></script>
 <script type="text/javascript" src="{{ URL::asset('assets') }}/js/vendors.min.js"></script>
 <script type="text/javascript" src="{{ URL::asset('assets') }}/js/main.js"></script>

 <script>
     document.addEventListener('DOMContentLoaded', function() {
         // Handle section link clicks for all pages
         const sectionLinks = document.querySelectorAll('.section-link');

         sectionLinks.forEach(link => {
             link.addEventListener('click', function(e) {
                 e.preventDefault();
                 const sectionId = this.getAttribute('href').substring(1);

                 // Get parent dropdown and its main link
                 const parentDropdown = this.closest('.nav-item.dropdown');
                 const mainLink = parentDropdown.querySelector('.nav-link').href;

                 // Check if we're on the same page as the parent link
                 if (window.location.href.includes(mainLink)) {
                     // If we're on the same page, just scroll
                     scrollToSection(sectionId);
                 } else {
                     // If we're on a different page, navigate to new page with hash
                     window.location.href = mainLink + '#' + sectionId;
                 }
             });
         });

         // Handle scrolling if there's a hash in the URL when page loads
         if (window.location.hash) {
             setTimeout(() => {
                 const sectionId = window.location.hash.substring(1);
                 scrollToSection(sectionId);
             }, 300);
         }
     });

     function scrollToSection(sectionId) {
         const element = document.getElementById(sectionId);
         if (element) {
             const offset = 100;
             const elementPosition = element.getBoundingClientRect().top;
             const offsetPosition = elementPosition + window.scrollY - offset;

             window.scrollTo({
                 top: offsetPosition,
                 behavior: 'smooth'
             });
         }
     }


     window.addEventListener('scroll', function() {
         const scrollPosition = window.scrollY;
         const body = document.body;

         if (scrollPosition > 100) { // You can adjust this threshold value
             body.classList.add('scrolled');
         } else {
             body.classList.remove('scrolled');
         }
     });
 </script>



 </body>

 </html>
