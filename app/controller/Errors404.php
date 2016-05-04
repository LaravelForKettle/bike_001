<?php
/**
 * Created by PhpStorm.
 * User: Леонид
 * Date: 02.05.2016
 * Time: 16:51
 */

namespace App\Controller;


class Errors404
{
    function getPage404() {

        require ROOT.'/view/page404.php';
    }
}