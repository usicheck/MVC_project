<?php Core\View::render('layout/header'); ?>
<div class="container">
    <div class="row">
        <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="card w-50 mt-5">
                <h5 class="card-header">Login</h5>
                <div class="card-body">
                    <p style="color: red;"><?= $_SESSION['auth']['login']['error'] ?? '' ?></p>
                    <form action="<?= url('auth/verify') ?>" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   id="exampleInputEmail1"
                                   aria-describedby="emailHelp"
                                   value="<?= $_SESSION['auth']['login']['email'] ?? '' ?>"
                            >
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="<?= url('registration') ?>">Create an account</a>
                    </form>
                    <?php $_SESSION['auth']=[]; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php Core\View::render('layout/footer'); ?>
