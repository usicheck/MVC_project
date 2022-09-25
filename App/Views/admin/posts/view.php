<?php

use App\Models\User;

$postCreaterName = User::all()->select(['name'])->where('id', '=', $postsView->author_id)->getPost();
$postCreaterSurname = User::all()->select(['surname'])->where('id', '=', $postsView->author_id)->getPost();

$content = preg_replace('/(\. )/','.<p>',$postsView->content);
?>

<div class="card mb-3">
    <div class="card-body">
        <h2 class="card-title"><?= $postsView->title; ?></h2>
        <a href="<?= IMG_URL . $postsView->thumbnail ?>" >
            <img src="<?= IMG_URL . $postsView->thumbnail ?>" class="card-img-top" width="95%"></a>
        <p class="card-text"><?= $content; ?></p>
        <p class="card-text"><small class="text-muted">Post created by <?= $postCreaterName[0]['name'] . ' ' . $postCreaterSurname[0]['surname']; ?></small></p>
        <p class="card-text"><small class="text-muted">Post created <?= $postsView->created_at; ?></small></p>
    </div>
</div>
