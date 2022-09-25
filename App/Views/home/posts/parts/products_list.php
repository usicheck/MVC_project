
<table class="table">
    <thead>
    <tr>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Created at</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($posts as $post): ?>
        <tr>
            <th scope="row"><a href="<?= IMG_URL . $post->thumbnail ?>" >
                    <img src="<?= IMG_URL . $post->thumbnail ?>" width="500"></a></th>
            <td>
                <a href="<?= url("posts/{$post->id}/view") ?>"><?= $post->title ?></a>
            </td>
            <td><?= $post->created_at ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
