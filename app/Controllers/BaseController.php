<?php

namespace App\Controllers;

/*
 * BaseController
 */

use App\Services\Auth;
use App\Services\View;

class BaseController
{
    protected $view;
    protected $smarty;

    public function construct__()
    {
    }

    public function smarty()
    {
        $this->smarty = View::getSmarty();
        return $this->smarty;
    }

    public function view()
    {
        return $this->smarty();
    }

    /**
     * @param $response
     * @param $res
     * @return mixed
     */
    public function echoJson($response, $res)
    {
        return $response->getBody()->write(json_encode($res));
    }
}
