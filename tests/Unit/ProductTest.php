<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    /** @test */
    public function only_available_products_are_shown_on_the_showproducts_view()
    {
        $availableproduct = Product::factory()->create([
            'isAvailable' => true
        ]);

        $unavailableproduct = Product::factory()->create([
            'isAvailable' => false
        ]);

        $response = $this->get('showProducts');

        $response->assertStatus(200)
                ->assertSeeText($availableproduct->name)
                ->assertDontSeeText($unavailableproduct->name);
    }
}
