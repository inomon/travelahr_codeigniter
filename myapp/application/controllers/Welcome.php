<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Ino Monares <ino.monares@gmail.com>
 *
 * Controller handling the landing page of the site
 */
class Welcome extends CI_Controller
{
    public function index()
    {
        $this->load->library([
            'venue_search'
        ]);

        // we generate a default list of sample venues/places for the landing page
        $venues = $this->venue_search->getVenues('Tokyo', 'JP', env('FOURSQUARE_CATEGORIES'), 10);

        $this->load->view('landing', [
            'venues' => $venues,
            'showFooterForm' => true,
        ]);
    }
}
