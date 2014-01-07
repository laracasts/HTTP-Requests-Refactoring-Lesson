<?php namespace Acme\Twitter;

use Guzzle\Http\Client;

class TwitterAPI {

    /**
     * @var Client
     */
    protected $client;

    /**
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Search Twitter globally
     *
     * @param $query
     *
     * @return array
     */
    public function search($query)
    {
        $response = $this->client->get("search/tweets.json?q=$query")->send();

        return $response->json();
    }
}
