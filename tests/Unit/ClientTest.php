<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;


class ClientTest extends TestCase
{
    /** @test */
    public function client_can_be_added()
    {
        $this->post('clientform', [
            'name' => 'Maciej',
            'surname' => 'Kowalski',
            'phone_number' => '321321321',
            'email' => 'mail@mail.pl',
            'address' => "Miasto 13",
            'date_of_birth' => '2000-10-10'
        ]);

        $response = $this->assertDatabaseHas('clients', [
            'name' => 'Maciej',
            'surname' => 'Kowalski',
            'phone_number' => '321321321',
            'email' => 'mail@mail.pl',
            'address' => "Miasto 13",
            'date_of_birth' => '2000-10-10'
        ]);
    }
}
