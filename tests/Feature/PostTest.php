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
    use RefreshDatabase;


    /** @test */
    public function create_post()
    {
        $user = User::factory()->create(['is_admin' => 1]);
        $response = $this->actingAs($user)->call('post', '/admin/posts', $this->post_array());
        $response->assertOk();
    }

    /** @test */
    public function get_post()
    {
        $user = User::factory()->create(['is_admin' => 1]);
        $post = Post::factory()->create();
        $response = $this->actingAs($user)->call('get', '/admin/posts/' . $post->id);
        $response->assertOk();
    }

    /** @test */
    public function edit_post()
    {
        $user = User::factory()->create(['is_admin' => 1]);
        $post = Post::factory()->create();
        $response = $this->actingAs($user)->call('put', '/admin/posts/' . $post->id, $this->post_array());
        $response->assertOk();
    }

    /** @test */
    public function delete_post()
    {
        $user = User::factory()->create(['is_admin' => 1]);
        $post = Post::factory()->create();
        $response = $this->actingAs($user)->call('delete', '/admin/posts/' . $post->id);
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
