<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommentStoreRequest;
use App\Http\Requests\CommentUpdateRequest;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::get();
        return view('admin.comments.index', [
            'comments' => $comments,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function activate(Comment $comment, Request $request)
    {
        $comment->update([
            "active" => 1
        ]);
        $request->session()->flash('message', __('comments.massages.activated_successfully'));
        return redirect(route('admin.comments.index'));
    }

    public function deactivate(Comment $comment, Request $request)
    {
        $comment->update([
            "active" => 0
        ]);
        $request->session()->flash('message', __('comments.massages.deactivated_successfully'));
        return redirect(route('admin.comments.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
    }
}
