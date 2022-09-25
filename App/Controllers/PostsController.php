<?php

namespace App\Controllers;

use App\Models\Post;
use Core\Controller;
use Core\View;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all()->get();
        View::render('posts/index', compact('posts'));

    }

    public function indexUser()
    {
        $posts = Post::all()->get();
        View::render('home/posts/index', compact('posts'));

    }

    public function show(int $id)
    {
        $post = Post::find($id);
        View::render('posts/show', compact('post'));
    }

    public function view(int $id)
    {
        $postsView = Post::find($id);
        View::render("account/posts/view", compact('postsView'));

    }


}
