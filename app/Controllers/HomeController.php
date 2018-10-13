<?php

namespace App\Controllers;

/*
 *  HomeController
 */

class HomeController extends BaseController
{

    public function index()
    {
        return $this->view()->display('index.tpl');
    }
}
