<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Models\Product;
use App\Models\Client;

class ProductClientTest extends TestCase
{
    /** @test */
    public function can_client_buy_product()
    {
        $client = Client::factory()->create();

        $product = Product::factory()->create([
            'isAvailable' => false,
            'client_id' => $client->id
        ]);

        $response = $this->assertDatabaseHas('products', [
            'isAvailable' => false,
            'client_id' => $client->id
        ]);
    }
}
