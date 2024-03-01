<?php

namespace App\tests;

namespace App\tests;

use App\GraphQLClient;
use PHPUnit\Framework\TestCase;

class GraphQLClientTest extends TestCase
{

    /**
     * Test query method with valid data.
     */
    public function testQueryWithValidData()
    {
        // Create an instance of GraphQLClient
        $client = new GraphQLClient();

        // Define sample valid data
        $data = [
            'query' => /* @lang GraphQL*/ <<<'GRAPHQL'
            query { 
                property(id: "190517105") { 
                    price {
                        amount
                        currency {
                            name
                        }
                    } 
                } 
            }
            GRAPHQL
        ];

        // Perform the query
        $result = $client->query($data);

        // Assert that the result is not null
        $this->assertNotNull($result);

        // Assert that the result is an object
        $this->assertIsObject($result);

    }

    /**
     * Test query method with invalid data.
     */
    public function testQueryWithInvalidData()
    {
        // Create an instance of GraphQLClient
        $client = new GraphQLClient();

        // Define sample invalid data
        $invalidData = [
            'query' => /* @lang GraphQL*/ <<<'GRAPHQL'
                query { 
                    property(id: "0") { 
                        price {
                            amount
                            currency {
                                name
                            }
                        } 
                    } 
                }
                GRAPHQL
        ];

        // Perform the query with invalid data
        $result = $client->query($invalidData);

        // Assert that the result is null
         $this->assertNull($result->data->property);
    }
}