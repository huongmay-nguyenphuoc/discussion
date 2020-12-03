<?php

function dbConnect() //connexion base données
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=discussion;charset=utf8', 'root', '');
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}



function userExists($login) // vérification login existant
{
    $db = dbConnect();
    $check = $db->prepare('SELECT * FROM utilisateurs WHERE login =?');
    $check->execute([$login]);
    $userExists = $check->rowCount();
    $user = $check->fetch();

    if ($userExists == 1) {
        return $user;
    } else {
        return 0;
    }
}


function sameLogin($login) // vérification login identique pour éviter un doublon
{
    if ($login != $_SESSION['login']) {
        return 1;
    } else {
        return 0;
    }
}


function updateUser($login, $hashed_password) // modification infos bdd
{
    $db = dbConnect();
    $insertnewdata = $db->prepare('UPDATE utilisateurs SET login = ?, password = ? WHERE id = ?');
    $insertnewdata->execute(array($login, $hashed_password, $_SESSION['id']));
    $_SESSION['login'] = $login;
    return 1;
}

function passwordExists($login, $password) // vérification bon password
{
    $db = dbConnect();
    $sqlcheck = $db->prepare('SELECT * from utilisateurs WHERE login =?');
    $sqlcheck->execute([$login]);
    $user = $sqlcheck->fetch();
    $auth = password_verify($_POST['password'], $user['password']);

    if ($auth == 1) {
        return 1;
    } else {
        return 0;
    }
}


function maxLenght($password, $login) // maximum caractères
{
    if (strlen($password) > 255 or strlen($login) > 255) {
        return 1;
    } else {
        return 0;
    }
}


function passwordConfirm($password, $passwordverif) // vérification passwords identiques
{
    if ($password === $passwordverif) {
        return 1;
    } else {
        return 0;
    }
}

function createUser($login, $hashed_password) //insertion utilisateur bdd
{
    $db = dbConnect();

    $sql = $db->prepare('INSERT INTO utilisateurs (login, password) VALUES (?,?)');
    $sql->execute(array($login, $hashed_password));
    return 1;
}


function createSession($login) // création variables de session
{
    $user = userExists($login);
    date_default_timezone_set("Europe/Paris");
    $_SESSION['login'] = $login;
    $_SESSION['date'] = date('d/m/Y H:i');
    $_SESSION['id'] = $user['id'];

    return $_SESSION;
}

function displayChat() // récupération messages dans bdd
{
    $db = dbConnect();
    $query = "SELECT message, login, date FROM messages 
    INNER JOIN utilisateurs ON utilisateurs.id = messages.id_utilisateur 
    ORDER BY messages.id;";

    $sql =  $db->prepare($query);
    $sql->execute();
    $res = $sql->fetchAll(PDO::FETCH_ASSOC);
    return $res;
}



function sendMessage($message) // insertion message dans bdd
{
    $db = dbConnect();
    date_default_timezone_set('Europe/Paris');
    $date = date("Y-m-d");

    $query = 'INSERT INTO messages (message, id_utilisateur, date) VALUES (?,?,?);';
    $sql = $db->prepare($query);
    $sql->execute(array($message, $_SESSION['id'], $date));
    return 1;
}
