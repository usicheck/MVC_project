<?php
$categories = \App\Models\Category::select(['title'])->getPost();
$maxCategories = count($categories);
?>


<?php Core\View::render('layout/header', ['admin' => true]); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="card w-75 mt-5">
                    <h5 class="card-header">Create new post</h5>
                    <div class="card-body">
                        <form action="<?= url('admin/posts/store') ?>" method="POST" enctype="multipart/form-data">
                            <label for="category_name" class="form-label">Category</label>
                            <select multiple class="form-control" name="category_name" id="category_name" >
                                <?php
                                $i = 0;
                                while ($i < $maxCategories) { ?>
                                    <option> <?php
                                        $title = json_encode($categories[$i]['title'], JSON_UNESCAPED_UNICODE);
                                        echo (preg_replace('/"/','',$title));
                                        $i++;
                                        ?>
                                    </option>
                                <?php } ?>
                            </select>
                            <div class="mb-3">
                                <label for="title" class="form-label">Post's name</label>
                                <input type="text" name="title" class="form-control" id="title"
                                       placeholder="Post's name">
                            </div>
                            <div class="mb-3">
                                <label for="content" class="form-label">Content</label>
                                <textarea name="content" id="content" cols="30" rows="10" class="form-control"
                                          placeholder="Content"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="thumbnail" class="form-label">Image</label>
                                <input type="file" name="thumbnail" class="form-control" id="thumbnail">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
Core\View::render('layout/footer');
