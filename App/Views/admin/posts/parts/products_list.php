
<table class="table">
    <thead>
    <tr>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Created at</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($posts as $post): ?>
        <tr>
            <th scope="row"><a href="<?= IMG_URL . $post->thumbnail ?>" >
                    <img src="<?= IMG_URL . $post->thumbnail ?>" width="500"></a></th>
            <td>
                <a href="<?= url("admin/posts/{$post->id}/view") ?>"><?= $post->title ?></a>
            </td>
            <td><?= $post->created_at ?></td>

            <td>
                <a href="<?= url("admin/posts/{$post->id}/edit") ?>" class="btn btn-info">Edit</a>
                <form action="<?= url("admin/posts/{$post->id}/destroy") ?>" method="post">
                    <button class="btn btn-danger">Remove</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
