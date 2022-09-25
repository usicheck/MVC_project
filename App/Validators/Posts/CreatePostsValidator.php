<?php

namespace App\Validators\Posts;

class CreatePostsValidator extends \App\Validators\Base\BaseValidator
{
    protected array $errors = [
        'title_error' => 'Title is not valid',
        'content_error' => 'Description is not valid'
    ];

    protected array $rules = [
        'title' => '/[\w\s\t\r\n]{4,100}/',
        'content' => '/[\w\s\t\r\n]{3,}/'
    ];
}
