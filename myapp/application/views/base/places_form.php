<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * This base template has the location search form
 * This is a very flexible form, that it can be changed into an autocomplete fuzzy location search field so that we can fetch a location name (city & country code)
 * For now, it will only house the required list of cities based on the project details
 */
?>
<form action="/travel-to" method="get">
    <div class="form-row">
        <div class="col-12 col-md-7 mb-2 mb-md-0">
            <input type="hidden" name="country" value="JP">
            <select name="city" class="form-control form-control-lg">
                <option value="Kyoto" <?php echo isset($selectedCity) && $selectedCity === 'Kyoto' ? 'selected' : '' ?>>Kyoto</option>
                <option value="Nagoya" <?php echo isset($selectedCity) && $selectedCity === 'Nagoya' ? 'selected' : '' ?>>Nagoya</option>
                <option value="Osaka" <?php echo isset($selectedCity) && $selectedCity === 'Osaka' ? 'selected' : '' ?>>Osaka</option>
                <option value="Sapporo" <?php echo isset($selectedCity) && $selectedCity === 'Sapporo' ? 'selected' : '' ?>>Sapporo</option>
                <option value="Tokyo" <?php echo isset($selectedCity) && $selectedCity === 'Tokyo' ? 'selected' : '' ?>>Tokyo</option>
                <option value="Yokohama" <?php echo isset($selectedCity) && $selectedCity === 'Yokohama' ? 'selected' : '' ?>>Yokohama</option>
            </select>
        </div>
        <div class="col-12 col-md-5">
            <button type="submit" class="btn btn-block btn-lg btn-primary"><i class="icon-plane"></i></button>
        </div>
    </div>
</form>
