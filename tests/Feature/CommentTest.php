<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

class CommentTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;


    /** @test */
    public function get_all_comments()
    {
        $comment = comment::factory()->create();
        $response = $this->call('get', '/admin/comments');
        $response->assertOk();
    }

    /** @test */
    public function create_comment()
    {
        $response = $this->call('post', '/admin/comments', $this->comment_array());
        $response->assertOk();
    }

    /** @test */
    public function get_comment()
    {
        $comment = comment::factory()->create();
        $response = $this->call('get', '/admin/comments/' . $comment->id);
        $response->assertOk();
    }

    /** @test */
    public function edit_comment()
    {
        $comment = comment::factory()->create();
        $response = $this->call('put', '/admin/comments/' . $comment->id, $this->comment_array());
        $response->assertOk();
    }

    /** @test */
    public function delete_comment()
    {
        $comment = comment::factory()->create();
        $response = $this->call('delete', '/admin/comments/' . $comment->id);
        $response->assertOk();
    }

    private function comment_array()
    {
        $user = User::factory()->create();
        $post = Post::factory()->create();
        return [
            'body' => $this->faker->sentence(),
            'post_id' => $post->id,
            'user_id' => $user->id,
        ];
    }
}
