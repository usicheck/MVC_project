<?php Core\View::render('layout/header'); ?>
<table class="table">
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col">Title</th>
        <th scope="col">Created at</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($postsView as $postView): ?>
        <tr>
            <th scope="row">
                <a href="<?= IMG_URL . $postView['thumbnail'] ?>" >
                    <img src="<?= IMG_URL . $postView['thumbnail'] ?>" class="card-img-top" width="500"></a>
            </th>
            <td><a href="<?= url("admin/posts/{$postView['id']}/view") ?>"><?= $postView['title'] ?></a></td>

            <td><?= $postView['created_at'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php Core\View::render('layout/footer');?>

