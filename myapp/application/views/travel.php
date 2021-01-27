<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * The travel template is called by the location/travel controller
 * Here we display the Weather Forecast of the location, and possible venues of interest we can find close by
 */
?>

<?php $this->load->view('base/header', ['selectedCity' => $selectedCity]) ?>

    <!-- Masthead -->
    <header class="masthead text-white text-center" style="background-image: url('<?php echo $mastheadImageLink ?>');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5"><?php echo $selectedCity ?>, <?php echo $selectedCountry ?></h1>
                    <p class="h3">Here is the weather for <?php echo $selectedCity ?> and some suggestions for places you can explore and enjoy!</p>
                </div>
            </div>
        </div>
    </header>


    <!-- Weather Grid -->
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12">
                    <span class="h1">Weather Forecast</span>
                </div>
            </div>
            <div class="row">
            <?php foreach ($weather as $forecast): ?>
                <div class="col-lg-2">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="">
                            <img class="img-fluid" alt="<?php echo $forecast['weather'][0]['main'] ?>" src="<?php echo $forecast['weather'][0]['icon_link'] ?>" />
                        </div>
                        <h3><?php echo date('m/d gA', strtotime($forecast['dt_txt'])) ?></h3>
                        <p class="lead mb-0"><?php echo $forecast['weather'][0]['description'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Venue Showcase -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row mb-5 text-center">
                <div class="col-lg-12">
                    <span class="h1">Places</span>
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
