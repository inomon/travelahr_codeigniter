<?php

use GuzzleHttp\Client;

class Venue_Search
{
    /**
     * @var $client Client
     */
    private $client;

    public function __construct()
    {
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://api.foursquare.com',
            // 'debug' => true,
        ]);
    }

    public function getVenues($cityName, $countryCode, $categoryId)
    {
        $response = $this->getApi(
            sprintf(
                '/v2/venues/search?near=%s,%s&limit=5&categoryId=%s&client_id=%s&client_secret=%s&v=%s',
                $cityName,
                $countryCode,
                $categoryId,
                env('FOURSQUARE_CLIENT_ID'),
                env('FOURSQUARE_CLIENT_SECRET'),
                date('Ymd')
            )
        );

        return json_decode($response->getBody(), true);
    }

    private function getApi($uri)
    {
        try {
            $response = $this->client->get($uri);
            // var_dump($response->getStatusCode());exit;
            if ($response->getStatusCode() !== 200) {
                // throw new \CodeIgniter('Foursquare API response error');
                show_error('Foursquare API response error', 400);
            }
        } catch (Exception $e) {
            // var_dump($this->client->getMessage());exit;
            show_error($e->getMessage());
        }

        return $response;
    }
}
