<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <!-- Menu -->
            <div class="footermenubox">
                <h3 class="footer-title">Menu</h3>
                <ul class="footer-menu">
                    <li>
                        <a href="{{url('/')}}" class="selected">Home</a>
                    </li>
                    <li>
                        <a href="{{url('/about-sie')}}">About Us</a>
                    </li>
                    <li>
                        <a href="{{url('/')}}">Program</a>
                    </li>
                    <li>
                        <a href="{{url('/')}}">Events</a>
                    </li>
                    <li>
                        <a href="{{url('/contact-us')}}">Contact us</a>
                    </li>
                </ul>
            </div>
            <!-- Quick Links -->
            <div class="footermenubox">
                <h3 class="footer-title">Quick Links</h3>
                <ul class="quick-links m-0 p-0">
                    <li>
                        <a target="_blank" href="https://www.siu.edu.in/">
                            SIU
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.symbiosis.ac.in/">
                            Symbiosis Society
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/life-at-sie')}}">Life at SIE</a>
                    </li>
                </ul>
            </div>
            <!-- Contact -->
            <div class="footercontactbox">
                <h3 class="footer-title">Contact Us</h3>
                <div class="contact-item">
                    <div class="footericon_box">
                        <img src="{{ asset('assets/images/location.webp') }}" alt="">
                    </div>

                    <p>
                        Plot No. 470/1 & 2, CTS No. 1089/1 & 2, Richardson Rd, Opposite
                        Chittaranjan Vatika Hare Krishna Ma, Model Colony, Shivajinagar,
                        Pune, Maharashtra 411016
                    </p>
                </div>
                <div class="contact-item">
                    <div class="footericon_box">
                        <img src="{{ asset('assets/images/email.webp') }}" alt="">
                    </div>
                    <a href="mailto:info_sie@siu.edu.in"> info_sie@siu.edu.in </a>
                </div>
                <div class="contact-item">
                    <div class="footericon_box">
                        <img src="{{ asset('assets/images/call.webp') }}" alt="">
                    </div>
                    <a href="tel:+917391086788"> +91-7391086788 </a>
                </div>
            </div>
            <div class="footercontactbox">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d93463.79703948293!2d73.73546579168551!3d18.543213544390493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sPlot%20No.%20470%2F1%20%26%202%2C%20CTS%20No.%201089%2F1%20%26%202%2C%20Richardson%20Rd%2C%20Opposite%20Chittaranjan%20Vatika%20Hare%20Krishna%20Ma%2C%20Model%20Colony%2C%20Shivajinagar%2C%20Pune%2C%20Maharashtra%20411016!5e1!3m2!1sen!2sin!4v1779699250307!5m2!1sen!2sin"
                    width="100%" height="270" style="border: 0; border-radius: 30px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!-- Bottom Footer -->
        <div class="footer-bottom">
            <p>© 2026 Symbiosis Institute of Education. All rights reserved.</p>
            <div class="crafted_by">
                Crafted By <a target="_blank" href="https://www.evonix.co/"><img
                        src="{{ asset('assets/images/logo-new.webp') }}" alt=""></a>
            </div>
        </div>
    </div>
</footer>



<!--  SLIDERS-START -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="{{asset('assets/js/script.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>


<script>
    function eventMobileSlider() {

        $('.mobile-event-slider').each(function () {

            if ($(window).width() < 992) {

                $(this).addClass('owl-carousel');

                if (!$(this).hasClass('owl-loaded')) {
                    $(this).owlCarousel({
                        items: 1,
                        loop: true,
                        margin: 10,
                        nav: false,
                        dots: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        autoHeight: true
                    });
                }

            } else {

                if ($(this).hasClass('owl-loaded')) {
                    $(this).trigger('destroy.owl.carousel');
                    $(this).removeClass('owl-carousel owl-loaded');
                    $(this).find('.owl-stage-outer').children().unwrap();
                }

            }

        });

    }

    $(document).ready(function () {
        eventMobileSlider();
    });

    $(window).resize(function () {
        eventMobileSlider();
    });
</script>