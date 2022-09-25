<?php

namespace App\Controllers\Admin;

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
        View::render('admin/categories/index', compact('categories')); // ['categories' => $categories]
    }
    public function view(int $id)
    {
        $postsView = Post::findByFetchAll('category_id',$id);
        View::render("admin/categories/view", compact('postsView'));

    }
    public function create()
    {
        View::render('admin/categories/create');
    }

    public function edit(int $id)
    {
        $category = Category::find($id);
        View::render('admin/categories/edit', compact('category'));
    }


    public function update(int $id)
    {
        $category=Category::find($id);
        $fields = filter_input_array(INPUT_POST, $_POST, true);
        $category->update($fields);

        redirect('admin/categories');
    }
    public function destroy(int $id)
    {
        $post = Category::all()->delete($id);
        redirect('admin/categories');
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
            redirect('admin/categories');
        } else {
            $_SESSION['categories']['create']['error'] = 'Oops something went wrong';
            redirectBack();
        }
    }
}
