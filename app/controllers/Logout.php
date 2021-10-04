<?php

namespace wms\app\controllers;

use MainPage;
use wms\app\core\Controller;
use wms\app\core\setSession;

class Logout extends Controller
{

    public function __construct()
    {
        session_start();

        $_SESSION = [];
        session_unset();
        session_destroy();

        header("Location:" . BASEURL . "/login");
        exit;
    }
}
