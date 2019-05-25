<?php
session_start();

require_once('Connect/connect.php');

$_SESSION['errorMessage'] = '';
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$password = htmlspecialchars($_POST['password'], ENT_QUOTES);
$login = htmlspecialchars($_POST['login'], ENT_QUOTES);
$choice = htmlspecialchars($_POST['choice'], ENT_QUOTES);
$password = password_hash(htmlspecialchars($password, ENT_QUOTES), PASSWORD_ARGON2I); // hash



if ($choice != 'V' && $choice != 'S') {
    $_SESSION['errorMessage'] = 'Choice = ' . $choice;
    exit(header("Location: index.php"));
}

createU();


function createU()
{
    global $name, $password, $login, $choice;

    try {
        $query = Connect()->prepare("INSERT INTO Users (Id_u, Name, Login, Password, Admin, Type) VALUES (NULL, :name, :login, :password, 0, :choice)");
        $query->bindValue(':name', $name, PDO::PARAM_STR);
        $query->bindValue(':login', $login, PDO::PARAM_STR);
        $query->bindValue(':password', $password, PDO::PARAM_STR);
        $query->bindValue(':choice', $choice, PDO::PARAM_STR);
        $query->execute();
    } catch (PDOException $e) {
        $_SESSION['errorMessage'] = "Sorry: Connect error:" . $e->getMessage();
        exit(header("Location: index.php"));
    }
}
