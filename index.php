<?php

session_start();

include ('classes/StaticHTML.class.php');

$page = new StaticHTML();
$username = "Julian";
$password = "fls";
$usernameSUB;
$passwordSUB;

print $page->head('Startseite');

if (!isset($_SESSION['zaehler'])) {
    $_SESSION['zaehler'] = 0;
} else {
    $_SESSION['zaehler']++;
}

if (isset($_POST)) {
    $usernameSUB = filter_input(INPUT_POST, 'username' , FILTER_SANITIZE_STRING );
    $passwordSUB = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING );
    
    if($usernameSUB == $username && $passwordSUB == $password) {
        $_SESSION['username'] = $username;
    } else {
        print '<p>Bitte Password und Nutzername Korrekt eingeben</p>';
    }
}

if ($_SESSION['zaehler'] <= 10) {
    print '<h1>DU HAST 10 MAL REINGEKACKT HAUUUUU ABBBBB</h1>';
    session_destroy();
}

if (!isset($_SESSION['username'])) {
    print 
        '<form action="index.php" method="POST">
        <label>Benutzer</label name="username"> <br>
        <input type="text" name="username"> <br>
        <label>Passwort</label> <br>
        <input type="password" name="password"> <br> <br>
        <input type="submit" value="Submit" name="submit"/> <br> <br>
    ';
} else  {
    print '<h1> Wilkommen, ' .$_SESSION['username']. '</h1>';
    session_destroy();
}

print $_SESSION['zaehler'];

print $page->foot();

