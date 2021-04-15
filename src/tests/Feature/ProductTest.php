<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /** @test */
    public function only_status_200_can_return_true()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function loading_page_loads_correctly()
    {
        $response = $this->get('/');

        // Valida algum tipo de conteúdo em alguma parte da pagina
        $response->assertSee('Laracasts offers');
    }

    
}
