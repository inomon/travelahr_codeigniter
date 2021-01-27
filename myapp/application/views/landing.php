<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Landing/home page for the website
 * This contains a quick list of venues and and easy to see dropdown list of locations
 */
?>

<?php $this->load->view('base/header') ?>

    <!-- Masthead -->
    <header class="masthead text-white text-center mb-5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
            <div class="col-xl-9 mx-auto">
                <h1 class="mb-5">Look for places in Japan! <br />Visit and enjoy!</h1>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <?php $this->load->view('base/places_form') ?>
            </div>
            </div>
        </div>
    </header>

    <!-- Venue Showcase -->
    <section class="showcase mt-5">
        <div class="container-fluid p-0">
            <div class="row mb-5 text-center">
                <div class="col-lg-12">
                    <span class="h1">Places you can visit and enjoy</span>
                </div>
            </div>
            <?php foreach ($venues as $index => $venue): ?>
                <?php if ($index != 'masthead_image_link'): ?>
                    <?php $this->load->view('base/location', ['index' => $index, 'venue' => $venue]) ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>

<?php $this->load->view('base/footer') ?>
