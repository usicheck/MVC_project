<?php Core\View::render('layout/header', ['admin' => true]); ?>
<div class="container">
    <div class="row">
        <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="card w-75 mt-5">
                <h5 class="card-header">Update post</h5>
                <div class="card-body">
                    <form action="<?= url("admin/posts/{$post->id}/update") ?>" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" value="<?= $post->title ?>" class="form-control" id="title">
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Description</label>
                            <textarea name="content" id="content" cols="30" rows="10" class="form-control"><?= $post->content ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
Core\View::render('layout/footer');
