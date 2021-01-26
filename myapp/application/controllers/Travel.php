<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Travel extends CI_Controller
{
    public function go()
    {
        $this->load->library([
            'weather_forecast',
            'venue_search'
        ]);
        $cityName = $this->input->get('city');
        $countryCode = $this->input->get('country');
        $weather = $this->weather_forecast->getWeather($cityName, $countryCode);
        $categoryId = '4deefb944765f83613cdba6e';
        $venues = $this->venue_search->getVenues($cityName, $countryCode, $categoryId);

        $this->load->view('travel', [
            'weather' => $weather,
            'venues' => $venues,
        ]);
    }
}
