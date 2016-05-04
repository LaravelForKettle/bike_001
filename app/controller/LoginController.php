<?php
/**
 * Created Login Controller
 * User: Леонид
 * Date: 01.05.2016
 * Time: 20:35
 */
namespace App\Controller;

class LoginController {
    public function actionIndex() {


        require ROOT.'/view/auth/login.php';
        return TRUE;
    }
}