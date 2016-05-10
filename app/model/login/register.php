<?php

/**
 * Created by model Register PhpStorm.
 * User: Леонид
 * Date: 01.05.2016
 * Time: 20:56
 */
namespace App\Model\Login;

use App\Components as Components;
use App\Model as Model;

class Register
{

    public static function register()
    {
        $err = array();
        if (isset($_POST['submit'])) {
            session_start();
            $hash = Components\Hash::getCode(12);
            $db = Components\Db::getConnection();
            # проверям логин
            if (!preg_match("/^[a-zA-Z0-9]+$/", $_POST['login'])) {
                $err[] = "Логин может состоять только из букв английского алфавита и цифр";
            }
            if (strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30) {
                $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
            }
            # проверяем пароль
            if (!preg_match("/^[a-zA-Z0-9]+$/", $_POST['password'])) {
                $err[] = "Пароль может состоять только из букв английского алфавита и цифр";
            }
            if (strlen($_POST['password']) < 8 or strlen($_POST['password']) > 30) {
                $err[] = "Пароль должен быть не меньше 8-ми символов и не больше 30";
            }
            if ($_POST['password'] != $_POST['passwordTwo']) {
                $err[] = "Ваши пароли не совподают";
            }
            # Проверка ввода email
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $err[] = "Email указан не правильно";
            }
            # Проверка на соглашение с правилами данного проекта
            if (!isset($_POST['valid'])) {
                $err[] = "Вы не согласились с условиями регистрации данного проекта";
            }
            # проверяем, сущестует ли пользователь с таким именем и почтой
            $login = $_POST['login'];
            $email = $_POST['email'];
            //Проверка на наличие пользователя с одинаковым именем
            $result = $db->prepare("SELECT COUNT(user_id) FROM users WHERE user_login=:login OR user_email=:email");
            $result->bindParam(":login", $login);
            $result->bindParam(":email", $email);
            $result->execute();
            /*print_r($result->fetch());*/
            if (empty($result->fetch())) {
                $err[] = "Пользователь с таким логином или почтой уже существует в базе данных";
            }
            # Если нет ошибок, то добавляем в БД нового пользователя
            if (empty($err)) {

                # Убераем лишние пробелы и делаем двойное шифрование
                $password = trim($_POST['password']);
                $password =  password_hash($password, PASSWORD_DEFAULT);
                $registerDate = array(
                    ':login' => $login,
                    ':email' => $email,
                    ':password' => $password,
                    ':hash' => $hash
                );
                //Добавляем пользователя в базу данных
                $result = $db->prepare("INSERT INTO users SET user_login=:login, user_password=:password, user_email=:email, user_hash=:hash");
                $result->execute($registerDate);

                //Запрос к таблице юзеров на получение id пользователя
                $result = $db->prepare('SELECT user_id FROM users WHERE user_login=:login');
                $result->bindParam(':login', $login);
                $result->execute();
                $userBase = $result->fetch();
                if(!empty($userBase)) {
                    //Открываем сессию и записываем туда данные пользователя.

                    $_SESSION['user_id'] = $userBase['user_id'];
                    $_SESSION['user_login'] = $login;
                    $_SESSION['user_hash'] = $hash;

                    /** Выбираем зарегестрированного пользователя
                     *  из базы данных
                     * и присваеваем ему группу пользователя и добавляем в бд группы*/
                    $group = 0; //Группа пользователя при регистрации в системе. (0) = пользователь
                    $id = $userBase['user_id'];
                    $userParam = array(
                        ':id' => $id,
                        ':type_group' => $group
                    );
                    $resultGroup = $db->prepare('INSERT INTO user_group (user_id, type_id) SELECT user_id, type_id FROM users INNER JOIN user_type WHERE user_id=:id AND type_id=:type_group');


                    $resultGroup->execute($userParam);
                    if(empty($resultGroup)){
                        $err[] = 'Ошибка запроса, на добавление в группу пользователя';
                        return $err;
                    }
                    else {
                    header("Location: /admin");
                    exit();
                    }
                }
            }
            else
            {
                return $err;
            }
        }
        return $err;
    }
}
