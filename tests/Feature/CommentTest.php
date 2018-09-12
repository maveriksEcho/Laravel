<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommentTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test.
     *
     * @return void
     */
    public function test_user_send_comment()
    {
        $user = factory(\App\User::class)->create();

        $post =  factory(\App\Post::class)->create();

        $response = $this->actingAs($user, 'web')->post('/comment', [
             'content' => 'Some comment' ,
             'post_id' => $post->id,
             'parent_id' => 0,
             'created_by' => $user->id
        ]);

        $response->assertStatus(302);
        $this->assertEquals(1, $post->comments()->count());
        tap($post->comments()->first(), function ($comment) use ($user,$post) {
            $this->assertEquals('Some comment', $comment->content);
            $this->assertEquals(0, $comment->parent_id);
            $this->assertEquals($user->id, $comment->created_by);
            $this->assertEquals($post->id, $comment->post_id);
        });

    }
}
