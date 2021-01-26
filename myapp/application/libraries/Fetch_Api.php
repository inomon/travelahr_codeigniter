<?php defined('BASEPATH') OR exit('No direct script access allowed');

use GuzzleHttp\Client;

/**
 * @author Ino Monares <ino.monares@gmail.com>
 *
 * Wrapper for all API fetching actions
 */
class Fetch_Api
{
    /**
     * @var $client Client
     */
    private $client;

    /**
     * @var $baseUri string
     */
    public $baseUri = '';

    /**
     * @var $cacheScope string
     */
    public $cacheScope = '';

    /**
     * @var $ciInstance \CI_Controller
     */
    private $ciInstance = null;

    /**
     * This initializes the CI instane for the API and the drives needed for CACHING data
     * We will need to cache data, since we want to preserve data that we have previously fetch and to not overload our usage (currently using free tier)
     * This is where the GuzzleHttp client is also initialized
     */
    public function __construct()
    {
        $this->ciInstance =& get_instance();
        // if APC is available use it, if not, fallback to file CACHING
        $this->ciInstance->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
        $this->client = new Client();
    }

    /**
     * Set cache data based on URI pinged by the API
     * This is so we have cached data and wont need to overload our API usage
     *
     * @param string $uri
     * @param GuzzleHttp\Stream $data
     *
     * @return void
     */
    public function setUriCache($uri, $data)
    {
        // transform an GuzzleHttp object into a JSON string
        $data = json_encode(json_decode($data, true));
        $cacheScope = $this->cacheScope . md5($uri);
        log_message('info', self::class.': setUriCache: '.$this->baseUri.$uri);
        $this->ciInstance->cache->save($cacheScope, $data, 120, true);
    }

    /**
     * Return our previously cached data based on the API being fetched and the `uri` that was pinged
     *
     * @param string $uri
     *
     * @return string
     */
    public function getUriCache($uri)
    {
        $cacheScope = $this->cacheScope . md5($uri);
        log_message('info', self::class.': getUriCache: '.$this->baseUri.$uri);
        if ($cache = $this->ciInstance->cache->get($cacheScope)) {
            return $cache;
        }

        return false;
    }

    /**
     * Get API response via our GuzzleHttp client
     * We also fallback to cached data, if possible
     * Then for every successfull ping, we store the data for CACHING (TTL=120 seconds)
     *
     * @param string $uri
     *
     * @return GuzzleHttp\Stream
     */
    public function getApi($uri)
    {
        log_message('info', self::class.': getApi: '.$this->baseUri.$uri);

        if ($cache = $this->getUriCache($uri)) {
            log_message('info', self::class.': get cache: '.$this->baseUri.$uri);
            return $cache;
        }

        try {
            $response = $this->client->get($this->baseUri . $uri);
            if ($response->getStatusCode() !== 200) {
                show_error('API response error', 400);
            }
        } catch (Exception $e) {
            show_error($e->getMessage());
        }

        $this->setUriCache($uri, $response->getBody());

        return $response->getBody();
    }
}
