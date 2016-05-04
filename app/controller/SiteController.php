<?php
/**
 * Created index home page controller
 * User: Леонид
 * Date: 01.05.2016
 * Time: 21:22
 */
namespace App\Controller;

class SiteController {

    public function actionIndex() {

        require_once ROOT . '/view/index.php';

        return TRUE;
    }
}