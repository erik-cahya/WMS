<?php

namespace wms\app\controllers;

use wms\app\core\Controller;

class Logout extends Controller
{

    public function __construct()
    {
        $_SESSION = [];
        session_unset();
        session_destroy();

        header("Location:" . BASEURL);
        exit;
    }
}
