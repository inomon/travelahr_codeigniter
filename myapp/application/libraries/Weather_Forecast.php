<?php

use GuzzleHttp\Client;

class Weather_Forecast
{
    /**
     * @var $client Client
     */
    private $client;

    public function __construct()
    {
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://api.openweathermap.org',
            // 'debug' => true,
        ]);
    }

    public function getWeather($cityName, $countryCode)
    {
        $response = $this->getApi(
            sprintf(
                '/data/2.5/forecast?q=%s,%s&appid=%s',
                $cityName,
                $countryCode,
                env('OPENWEATHER_API_KEY')
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
