<?php

 namespace App\Config;


     class Config {

        public function er_report ()
        {

            ini_set('display_errors', 1);
            error_reporting(E_ALL);


        }

    }