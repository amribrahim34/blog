<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Category;
use App\Models\User;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    /** @test */
    public function create_category()
    {
        $user = User::factory()->create(['is_admin' => 1]);
        $this->withoutExceptionHandling();
        $response = $this->actingAs($user)->call('post', '/admin/categories', ['body' => $this->faker->name()]);
        $response->assertOk();
    }


    /** @test */
    public function get_category()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create(['is_admin' => 1]);
        $category = Category::factory()->create();
        $response = $this->actingAs($user)->call('get', '/admin/categories');
        $response->assertOk();
    }

    /** @test */
    public function update_category()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create(['is_admin' => 1]);
        $category = Category::factory()->create();
        $response = $this->actingAs($user)->call('put', '/admin/categories/' . $category->id, ['body' => $this->faker->name()]);
        $response->assertOk();
    }

    /** @test */
    public function delete_category()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create(['is_admin' => 1]);
        $category = Category::factory()->create();
        $response = $this->actingAs($user)->call('delete', '/admin/categories/' . $category->id);
        $response->assertOk();
    }
}
