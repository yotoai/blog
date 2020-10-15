<?php


namespace App\Services;


use Elasticsearch\ClientBuilder;

class ElasticService
{
    private $client;

    public function __construct()
    {
        $this->client = ClientBuilder::create()->build();
    }

    public function client()
    {
        return $this->client;
    }


    public function createIndex($params)
    {
        return $this->client->indices()->create($params);
    }
}