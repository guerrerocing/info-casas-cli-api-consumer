<?php

require __DIR__ .'/vendor/autoload.php';


use App\GraphQLClient;

if(isset($argv[1])) {
    // The first argument is at index 1
    $id = $argv[1];
    $client = new GraphQLClient();

    $response = $client->query([
        'query' => /* @lang GraphQL*/ <<<'GRAPHQL'
                    query ($id: ID!) {
                        property(id: $id) {
                            price {
                                amount
                                currency {
                                    name
                                }
                            }
                        }
                    }
                GRAPHQL,
                'variables' => [
                    'id' => $id,
                ],
    ]);

if(isset($response->data->property->price)) {
    echo "{$response->data->property->price->currency->name} {$response->data->property->price->amount}";
} else {
    echo "Price not found for ID: $id";
}


} else {
    echo "No ID provided.";
}