<?php

    namespace App\Config;
    use App\Controller;
    //Создание класса маршруты
        class Routes {
            private $direct; //Дирректория маршрута
            private $link; //
            private $categoryRout = array();
            private $nameRout;
            public function __construct($nameRout)
            {
                $this->nameRout = $nameRout;

            }
            public function addRouts($direct, $link) {
                $this->direct = $direct;
                $this->link = $link;
                $this->categoryRout[$this->direct] = $this->link;

            }
            public function Routs() {
                return $this->categoryRout;
            }
        };

