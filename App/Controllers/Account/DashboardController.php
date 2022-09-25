<?php

namespace App\Controllers\Account;

use App\Helpers\SessionHelper;
use Core\View;

class DashboardController extends BaseController
{

    public function index()
    {
        View::render('account/dashboard');
    }

    public function indexUser()
    {

        View::render('account/dashboard');
    }

}
