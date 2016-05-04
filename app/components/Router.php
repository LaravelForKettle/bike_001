<?php
/**
 * Created by PhpStorm.
 * User: Леонид
 * Date: 30.04.2016
 * Time: 19:55
 */

namespace App\Components;

use App\Config\Rout As Rout;
use App\Controller;
use Twig;
class Router extends Rout
{
    private $rout;
    private $project_name = 'App';
    private $package_name = 'Controller';

    public function __construct()
        {
            //Запись маршрутов
            $this->rout = $this->getRout();
        }


    private function getUrl ()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }
    public function rout()
    {
        $uri = $this->getUrl();
        $result = NULL;
        if (array_key_exists($uri,  $this->rout ))
        {
           /* echo '<pre>';
            echo $uri.'<br>';
            echo $this->rout[$uri];
            echo '</pre>';*/
            $segments = explode('/', $this->rout[$uri]);
            $controllerName = array_shift($segments).'Controller';

            $controllerName = ucfirst($controllerName);
            $actionName = 'action'.ucfirst(array_shift($segments));
            $parameters = $segments;
            $fullNameClass = $this->project_name . '\\' . $this->package_name . '\\' . $controllerName;

            $controllerObject = new $fullNameClass();

            if (method_exists($fullNameClass,  $actionName))
            {
               call_user_func_array(array($controllerObject, $actionName), $parameters);
            };


        }
        else {
            $rrClassName = 'Errors404';
            $fullClassErr = $this->project_name . '\\' . $this->package_name . '\\' . $rrClassName;
            $rr_err = new $fullClassErr;
            $rr_err->getPage404();
            //echo '<p>Страница не существует</p>';
        }
    }
}
