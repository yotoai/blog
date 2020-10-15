<?php


namespace App\Services;


use Elasticsearch\ClientBuilder;

class ElasticService
{
    private static $client;

    public function __construct()
    {
        self::$client = ClientBuilder::create()->build();
    }

    public static function client()
    {
        return self::$client;
    }


    public function createIndex($params)
    {
        return self::$client->indices()->create($params);
    }
}