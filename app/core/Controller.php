<?php

namespace wms\app\core;

class Controller
{
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';

        $model2 = '\\wms\\app\\models\\' . $model;

        return new $model2;
    }
}
