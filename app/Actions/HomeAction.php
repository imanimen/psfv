<?php

namespace App\Actions;

use Imanimen\SpeedRoutes\Abstracts\ActionAbstract;

class HomeAction extends ActionAbstract
{

    public function render()
    {
        return parent::render();
    }

    public function validation()
    {
        return parent::validation();
    }

    public function method()
    {
        return parent::METHOD_GET;
    }

}

