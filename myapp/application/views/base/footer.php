<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Footer for the base template, contains the testimonials and the call-to-action for the landing page
 */
?>
    <?php if (isset($showFooterForm) && $showFooterForm): ?>
        <!-- Testimonials -->
        <section class="testimonials text-center bg-light">
            <div class="container">
            <h2 class="mb-5">What people are saying...</h2>
            <div class="row">
                <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="/assets/theme/landing-page/img/testimonials-1.jpg" alt="">
                    <h5>Margaret E.</h5>
                    <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
                </div>
                </div>
                <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="/assets/theme/landing-page/img/testimonials-2.jpg" alt="">
                    <h5>Fred S.</h5>
                    <p class="font-weight-light mb-0">"It's just amazing. I've been using it so much!"</p>
                </div>
                </div>
                <div class="col-lg-4">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="/assets/theme/landing-page/img/testimonials-3.jpg" alt="">
                    <h5>Sarah W.</h5>
                    <p class="font-weight-light mb-0">"Thanks so much for suggesting that place!"</p>
                </div>
                </div>
            </div>
            </div>
        </section>
        <!-- Call to Action -->
        <section class="call-to-action text-white text-center mt-5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h2 class="mb-4">Lets go!</h2>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <?php $this->load->view('base/places_form') ?>
                </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- Footer -->
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
            <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                <ul class="list-inline mb-2">
                <li class="list-inline-item">
                    <a href="#">About</a>
                </li>
                <li class="list-inline-item">&sdot;</li>
                <li class="list-inline-item">
                    <a href="#">Contact</a>
                </li>
                <li class="list-inline-item">&sdot;</li>
                <li class="list-inline-item">
                    <a href="#">Terms of Use</a>
                </li>
                <li class="list-inline-item">&sdot;</li>
                <li class="list-inline-item">
                    <a href="#">Privacy Policy</a>
                </li>
                </ul>
                <p class="text-muted small mb-4 mb-lg-0">&copy; travelAHHR 2021. All Rights Reserved.</p>
            </div>
            <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                <ul class="list-inline mb-0">
                <li class="list-inline-item mr-3">
                    <a href="#">
                    <i class="fab fa-facebook fa-2x fa-fw"></i>
                    </a>
                </li>
                <li class="list-inline-item mr-3">
                    <a href="#">
                    <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#">
                    <i class="fab fa-instagram fa-2x fa-fw"></i>
                    </a>
                </li>
                </ul>
            </div>
            </div>
        </div>
    </footer>

</body>
</html>
