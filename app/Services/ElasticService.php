<?php


namespace App\Services;


use Elasticsearch\ClientBuilder;

class ElasticService
{
<<<<<<< HEAD
    private static $client;

    public function __construct()
    {
        self::$client = ClientBuilder::create()->build();
    }

    public static function client()
    {
        return self::$client;
=======
    private $client;

    public function __construct()
    {
        $this->client = ClientBuilder::create()->build();
    }

    public function client()
    {
        return $this->client;
>>>>>>> cd7d4f2c56d8a81be5c90ef662019cfc1542d815
    }


    public function createIndex($params)
    {
<<<<<<< HEAD
        return self::$client->indices()->create($params);
=======
        return $this->client->indices()->create($params);
>>>>>>> cd7d4f2c56d8a81be5c90ef662019cfc1542d815
    }
}