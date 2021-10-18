<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Keyword;


class KeywordTest extends TestCase
{

    use WithFaker;
    use RefreshDatabase;


    /** @test */
    public function create_keyword()
    {
        $this->withoutExceptionHandling();
        $response = $this->call('post', '/keywords', ['body' => $this->faker->name()]);
        $response->assertOk();
    }


    /** @test */
    public function get_keyword()
    {
        $this->withoutExceptionHandling();
        $keyword = Keyword::factory()->create();
        $response = $this->call('get', '/keywords');
        $response->assertOk();
    }

    /** @test */
    public function update_keyword()
    {
        $this->withoutExceptionHandling();
        $keyword = Keyword::factory()->create();
        $response = $this->call('put', '/keywords/' . $keyword->id, ['body' => $this->faker->name()]);
        $response->assertOk();
    }

    /** @test */
    public function delete_keyword()
    {
        $this->withoutExceptionHandling();
        $keyword = Keyword::factory()->create();
        $response = $this->call('delete', '/keywords/' . $keyword->id);
        $response->assertOk();
    }
}
