<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Tests\TestCase;

class PostTest extends TestCase
{
    use WithFaker;
    // use RefreshDatabase;


    /** @test */
    public function create_post()
    {
        $response = $this->call('post', '/posts', $this->post_array());
        $response->assertOk();
    }

    /** @test */
    public function get_post()
    {
        $post = Post::factory()->create();
        $response = $this->call('get', '/posts/' . $post->id);
        $response->assertOk();
    }

    /** @test */
    public function edit_post()
    {
        $post = Post::factory()->create();
        $response = $this->call('put', '/posts/' . $post->id, $this->post_array());
        $response->assertOk();
    }

    /** @test */
    public function delete_post()
    {
        $post = Post::factory()->create();
        $response = $this->call('delete', '/posts/' . $post->id);
        $response->assertOk();
    }

    private function post_array()
    {
        $user = User::factory()->create();
        $category = Category::factory()->create();
        return [
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
            'category_id' => $category->id,
            'user_id' => $user->id,
        ];
    }
}
