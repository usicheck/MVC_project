<table class="table">
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col">Category</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($categories as $category): ?>
        <tr>
            <td>
                <a href="<?= IMG_URL . $category->image ?>">
                    <img src="<?= IMG_URL . $category->image ?>" width="500"></a>
            </td>
            <td>
                <a href="<?= url("admin/categories/{$category->id}/view") ?>"><?= $category->title ?></a>
            </td>


            <td>
                <a href="<?= url("admin/categories/{$category->id}/edit") ?>" class="btn btn-info">Edit</a>
                <form action="<?= url("admin/categories/{$category->id}/destroy") ?>" method="post">
                    <button class="btn btn-danger">Remove</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>


