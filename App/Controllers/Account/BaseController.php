<?php

namespace App\Controllers\Account;

use App\Helpers\SessionHelper;

class BaseController extends \Core\Controller
{
    public function before(string $action): bool
    {
        return !SessionHelper::isAdmin();
    }
}