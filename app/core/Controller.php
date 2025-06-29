<?php

class Controllers
{
    function view($view, $data = [])
    {
        require_once '../app/view/' . $view . '.php';
    }

    function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}
