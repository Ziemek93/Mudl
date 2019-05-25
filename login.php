<?php
session_start();

require_once('Connect/connect.php');

$_SESSION['errorMessage'] = '';
$password = htmlspecialchars($_POST['password'], ENT_QUOTES);
$login = htmlspecialchars($_POST['login'], ENT_QUOTES);

$bool = FALSE;



login();

function login()
{
    global $password, $login;

    try {
        $query = Connect()->prepare("SELECT Id_u, Login, Type, Name, Password FROM USERS WHERE Login = :login");
        $query->bindValue(':login', $login, PDO::PARAM_STR);
        $query->execute();

        if ($query->rowCount()) {
            $query = $query->fetch();

            $bool = CheckPasswd($password, $query['Password']);
            if ($bool) {
                $_SESSION['login'] = $login;
                $_SESSION['name'] = $query['Name'];
                $_SESSION['id'] = $query['Id_u'];
                $_SESSION['Type'] = $query['Type'];
            }
        } else {
            $_SESSION['errorMessage'] = "Wrong login or password";
        }
        exit(header("Location: index.php"));
    } catch (PDOException $e) {
        $_SESSION['errorMessage'] = "Sorry: Connect error:" . $e->getMessage();
        exit(header("Location: index.php"));
    }
}



function CheckPasswd($stringOne, $stringTwo)
{
    if (password_verify($stringOne, $stringTwo)) {

        return TRUE;
    } else return FALSE;
}
