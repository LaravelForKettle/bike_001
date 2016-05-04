<?php
/**
 * Created by PhpStorm.
 * User: Леонид
 * Date: 01.05.2016
 * Time: 19:08
 */

namespace App\Config;

use App\Config\Routes As Routes;
class Rout extends Routes {
    protected $routes;
    protected function getRout() {
        $this->routes = new Routes('News');
        $this->routes->addRouts('login','login/index');// actionIndex
        $this->routes->addRouts('','site/index');
        return $this->routes->Routs();
    }
}