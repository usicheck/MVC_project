<?php
/**
 * @var $router Core\Router
 */
$router->add('', [
   'controller' => \App\Controllers\HomeController::class,
    'action' => 'index',
    'method' => 'GET'
]);
$router->add('login', ['controller' => \App\Controllers\AuthController::class, 'action' => 'login', 'method' => 'GET']);
$router->add('logout', ['controller' => \App\Controllers\AuthController::class, 'action' => 'logout', 'method' => 'GET']);
$router->add('registration', ['controller' => \App\Controllers\AuthController::class, 'action' => 'registration', 'method' => 'GET']);
$router->add('auth/verify', ['controller' => \App\Controllers\AuthController::class, 'action' => 'verify', 'method' => 'POST']);
$router->add('users/store', ['controller' => \App\Controllers\UsersController::class, 'action' => 'store', 'method' => 'POST']);
$router->add('', ['controller' => \App\Controllers\PostsController::class, 'action' => 'indexUser', 'method' => 'GET']);
$router->add('posts/{id:\d+}/view', ['controller' => \App\Controllers\PostsController::class, 'action' => 'view', 'method' => 'GET']);



$router->add('admin/dashboard', ['controller' => \App\Controllers\Admin\DashboardController::class, 'action' => 'index', 'method' => 'GET']);
$router->add('account/dashboard', ['controller' => \App\Controllers\Admin\DashboardController::class, 'action' => 'indexUser', 'method' => 'GET']);

$router->add('admin/posts', ['controller' => \App\Controllers\Admin\PostsController::class, 'action' => 'index', 'method' => 'GET']);
$router->add('admin/posts/create', ['controller' => \App\Controllers\Admin\PostsController::class, 'action' => 'create', 'method' => 'GET']);
$router->add('admin/posts/{id:\d+}/edit', ['controller' => \App\Controllers\Admin\PostsController::class, 'action' => 'edit', 'method' => 'GET']);
$router->add('admin/posts/store', ['controller' => \App\Controllers\Admin\PostsController::class, 'action' => 'store', 'method' => 'POST']);
$router->add('admin/posts/{id:\d+}/update', ['controller' => \App\Controllers\Admin\PostsController::class, 'action' => 'update', 'method' => 'POST']);
$router->add('admin/posts/{id:\d+}/view', ['controller' => \App\Controllers\Admin\PostsController::class, 'action' => 'view', 'method' => 'GET']);
$router->add('admin/posts/{id:\d+}/destroy', ['controller' => \App\Controllers\Admin\PostsController::class, 'action' => 'destroy', 'method' => 'POST']);




$router->add('admin/categories', ['controller' => \App\Controllers\Admin\CategoriesController::class, 'action' => 'index', 'method' => 'GET']);
$router->add('admin/categories/create', ['controller' => \App\Controllers\Admin\CategoriesController::class, 'action' => 'create', 'method' => 'GET']);
$router->add('admin/categories/{id:\d+}/edit', ['controller' => \App\Controllers\Admin\CategoriesController::class, 'action' => 'edit', 'method' => 'GET']);
$router->add('admin/categories/store', ['controller' => \App\Controllers\Admin\CategoriesController::class, 'action' => 'store', 'method' => 'POST']);
$router->add('admin/categories/{id:\d+}/update', ['controller' => \App\Controllers\Admin\CategoriesController::class, 'action' => 'update', 'method' => 'POST']);
$router->add('admin/categories/{id:\d+}/destroy', ['controller' => \App\Controllers\Admin\CategoriesController::class, 'action' => 'destroy', 'method' => 'POST']);
$router->add('admin/categories/{id:\d+}/view', ['controller' => \App\Controllers\Admin\CategoriesController::class, 'action' => 'view', 'method' => 'GET']);




$router->add('account/posts', ['controller' => \App\Controllers\Account\PostsController::class, 'action' => 'index', 'method' => 'GET']);
$router->add('account/posts/create', ['controller' => \App\Controllers\Account\PostsController::class, 'action' => 'create', 'method' => 'GET']);
$router->add('account/categories', ['controller' => \App\Controllers\Account\CategoriesController::class, 'action' => 'index', 'method' => 'GET']);
$router->add('account/posts/{id:\d+}/view', ['controller' => \App\Controllers\Account\PostsController::class, 'action' => 'view', 'method' => 'GET']);
$router->add('account/categories/{id:\d+}/view', ['controller' => \App\Controllers\Account\CategoriesController::class, 'action' => 'view', 'method' => 'GET']);
$router->add('account/posts/store', ['controller' => \App\Controllers\Account\PostsController::class, 'action' => 'store', 'method' => 'POST']);

