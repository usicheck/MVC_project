<?php

namespace App\Controllers\Account;

use App\Models\Category;
use App\Models\Post;
use App\Services\FileUploaderService;
use App\Validators\Categories\CreateCategoryValidator;
use Core\View;

class CategoriesController extends BaseController
{
    public function index()
    {
        $categories = Category::all()->get();
        View::render('account/categories/index', compact('categories')); // ['categories' => $categories]
    }

    public function view(int $id)
    {
        $postsView = Post::findByFetchAll('category_id',$id);
        View::render("account/categories/view", compact('postsView'));

    }

    public function store()
    {
        $fields = filter_input_array(INPUT_POST, $_POST, true);
        $validator = new CreateCategoryValidator();

        if (!empty($_FILES['image'])) {
            $fields['image'] = FileUploaderService::upload($_FILES['image']);
        }

        if (!$validator->validate($fields)) {
            dd($fields, $validator->getErrors());
        }

        if (Category::create($fields)) {
            redirect('account/categories');
        } else {
            $_SESSION['categories']['create']['error'] = 'Oops something went wrong';
            redirectBack();
        }
    }
}
