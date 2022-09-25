<table class="table">
    <thead>
    <tr>
        <th scope="col">Category</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($categories as $category): ?>
        <tr>
            <td>
                <a href="<?= url("account/categories/{$category->id}/view") ?>"><?= $category->title ?></a>
            </td>

            <td>
                <a href="<?= IMG_URL . $category->image ?>">
                    <img src="<?= IMG_URL . $category->image ?>" width="500"></a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
