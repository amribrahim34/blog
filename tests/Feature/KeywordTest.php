<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Keyword;
use App\Models\User;


class KeywordTest extends TestCase
{

    use WithFaker;
    use RefreshDatabase;


    /** @test */
    public function create_keyword()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create(['is_admin' => 1]);
        $response = $this->actingAs($user)->call('post', '/admin/keywords', ['body' => $this->faker->name()]);
        $response->assertOk();
    }


    /** @test */
    public function get_keyword()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create(['is_admin' => 1]);
        $keyword = Keyword::factory()->create();
        $response = $this->actingAs($user)->call('get', '/admin/keywords');
        $response->assertOk();
    }

    /** @test */
    public function update_keyword()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create(['is_admin' => 1]);
        $keyword = Keyword::factory()->create();
        $response = $this->actingAs($user)->call('put', '/admin/keywords/' . $keyword->id, ['body' => $this->faker->name()]);
        $response->assertOk();
    }

    /** @test */
    public function delete_keyword()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create(['is_admin' => 1]);
        $keyword = Keyword::factory()->create();
        $response = $this->actingAs($user)->call('delete', '/admin/keywords/' . $keyword->id);
        $response->assertOk();
    }
}
