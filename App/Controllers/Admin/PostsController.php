<?php

namespace App\Controllers\Admin;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Services\FileUploaderService;
use App\Validators\Posts\CreatePostsValidator;
use Core\View;


class PostsController extends BaseController
{
    public function index()
    {
        $posts = Post::all()->get();
        View::render('admin/posts/index', compact('posts'));
    }

    public function view(int $id)
    {
        $postsView = Post::find($id);
        View::render("admin/posts/view", compact('postsView'));

    }
    public function create()
    {
        View::render('admin/posts/create');
    }


    public function edit(int $id)
    {
        $post = Post::find($id);
        View::render('admin/posts/edit', compact('post'));
    }

    public function update(int $id)
    {
        $post=Post::find($id);
        $fields = filter_input_array(INPUT_POST, $_POST, true);
        $post->update($fields);

        redirect('admin/posts');
    }

    public function destroy(int $id)
    {
        $post = Post::all()->delete($id);

        redirect('admin/posts');
    }

    public function store()
    {
        $fields = filter_input_array(INPUT_POST, $_POST, true);
        $validator = new CreatePostsValidator();

        if (!empty($_FILES['thumbnail'])) {
            $fields['thumbnail'] = FileUploaderService::upload($_FILES['thumbnail']);
        }

        $category_id = Category::all()->select(['id'])->where('title', '=', $fields['category_name'])->getPost();
        if (!empty($category_id)) {
            $fields['category_id'] = $category_id[0]['id'];
        }

        if (!$validator->validate($fields)) {
            dd($fields, $validator->getErrors());
        }
        $fields['author_id'] = $_SESSION['user_data']['id'];
        unset($fields['category_name']);
        if (Post::create($fields)) {
            redirect('admin/posts');
        } else {
            $_SESSION['posts']['create']['error'] = 'Oops something went wrong';
            redirectBack();
        }
    }

    public function indexAccount()
    {
        $posts = Post::all()->get();
        View::render('account/posts/index', compact('posts'));
    }

    public function createAccount()
    {
        View::render('account/posts/create');
    }
    public function storeAccount()
    {
        $fields = filter_input_array(INPUT_POST, $_POST, true);
        $validator = new CreatePostsValidator();

        if (!empty($_FILES['thumbnail'])) {
            $fields['thumbnail'] = FileUploaderService::upload($_FILES['thumbnail']);
        }

        $category_id = Category::all()->select(['id'])->where('title', '=', $fields['category_name'])->getPost();
        if (!empty($category_id)) {
            $fields['category_id'] = $category_id[0]['id'];
        }

        if (!$validator->validate($fields)) {
            dd($fields, $validator->getErrors());
        }
        unset($fields['category_name']);
        if (Post::create($fields)) {
            redirect('account/posts');
        } else {
            $_SESSION['posts']['create']['error'] = 'Oops something went wrong';
            redirectBack();
        }
    }
}
