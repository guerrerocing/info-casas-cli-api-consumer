<?php

namespace App;


use GuzzleHttp\Client;

class GraphQLClient
{
    private Client $httpClient;
    public function __construct()
    {

        $this->httpClient = new Client();
    }

    public function query(string|array $data): mixed
    {

        if (is_string($data)) {
            $data = ['query' => $data];
        }

        $headers = [
            'X-Origin' => "www.infocasas.com.uy",
            'accept' => 'application/json',
        ];

        $response = $this->httpClient->request('POST', "https://graph.infocasas.com.uy/graphql", [
            'headers' => $headers,
            'json' => $data,
        ]);

        return json_decode($response->getBody()->getContents());
    }
}