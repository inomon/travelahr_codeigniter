<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Ino Monares <ino.monares@gmail.com>
 *
 * Controller handling the travel actions, and calls the weather and venue library to search for data
 */
class Travel extends CI_Controller
{
    public function go()
    {
        // load needed libraries by the action
        $this->load->library([
            'weather_forecast',
            'venue_search'
        ]);

        // only the CITY has a selectable dropdown on the UI
        // the COUNTRY value is provided through a hidden field
        // furthe improvements can be done by making these two fields provided in tandem
        // through a autocomplete fuzzy location search
        $cityName = $this->input->get('city');
        $countryCode = $this->input->get('country');

        $weather = $this->weather_forecast->getWeather($cityName, $countryCode);
        // pass category IDs here, so that there is a possible solution to have them queried & passed via request parameters
        // as well as the query limit for venues
        $venues = $this->venue_search->getVenues($cityName, $countryCode, env('FOURSQUARE_CATEGORIES'), 20);
        // the masthead image is used as a representation for the current city that was searched
        // this is from the first venue queried from the 4sq API
        $mastheadImageLink = ($venues) ? $venues['masthead_image_link'] : '';

        $this->load->view('travel', [
            'weather' => $weather,
            'venues' => $venues,
            'showFooterForm' => false,
            'pageName' => sprintf('%s, %s', $cityName, $countryCode),
            'selectedCity' => $cityName,
            'selectedCountry' => $countryCode,
            'mastheadImageLink' => $mastheadImageLink,
        ]);
    }
}
