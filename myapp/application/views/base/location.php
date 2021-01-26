
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * This is the base template for the LOCATIONS - called venues from 4sqr
 * We show here the title, short address, and the representative photo, as well as a Google Maps search link - based on location name/short address/coordinates
 */
?>
<div class="row no-gutters">
    <div class="col-lg-6 <?php echo ($index % 2 == 0) ? 'order-lg-2' : '' ?> text-white showcase-img" style="background-image: url('<?php echo $venue['photo']['photo_link'] ?>'); background-position: center;"></div>
    <div class="col-lg-6 <?php echo ($index % 2 == 0) ? 'order-lg-1' : '' ?> my-auto showcase-text">
        <h2>
            <span class="category-icon-link">
                <img class="img-fluid" alt="<?php echo $venue['name'] ?>" src="<?php echo $venue['category_icon_link'] ?>" />
            </span>
            <?php echo $venue['name'] ?>
        </h2>
        <p class="lead mb-0"><?php echo $venue['location']['address'] ?> <?php echo isset($venue['location']['crossStreet']) ? $venue['location']['crossStreet'] : '' ?> </p>
        <div class="mapping-pin mt-5">
            <a target="window" class="stretched-link" href="https://www.google.com/maps/search/<?php echo urlencode(sprintf('%s, %s "%s,%s"', $venue['name'], $venue['location']['address'], $venue['location']['lat'], $venue['location']['lng'])) ?>"> Look for this on Google Maps <i class="fa fa-map-marker-alt"></i> </a>
        </div>
    </div>
</div>
