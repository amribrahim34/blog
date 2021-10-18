<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Category;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    /** @test */
    public function create_category()
    {
        $this->withoutExceptionHandling();
        $response = $this->call('post', '/admin/categories', ['body' => $this->faker->name()]);
        $response->assertOk();
    }


    /** @test */
    public function get_category()
    {
        $this->withoutExceptionHandling();
        $category = Category::factory()->create();
        $response = $this->call('get', '/admin/categories');
        $response->assertOk();
    }

    /** @test */
    public function update_category()
    {
        $this->withoutExceptionHandling();
        $category = Category::factory()->create();
        $response = $this->call('put', '/admin/categories/' . $category->id, ['body' => $this->faker->name()]);
        $response->assertOk();
    }

    /** @test */
    public function delete_category()
    {
        $this->withoutExceptionHandling();
        $category = Category::factory()->create();
        $response = $this->call('delete', '/admin/categories/' . $category->id);
        $response->assertOk();
    }
}
