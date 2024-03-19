<?php
session_start();
$matt = $_POST['matt'];
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
if (is_null($_POST['difficult']))
{
    $_POST['difficult'] = "";
}
$difficult = $_POST['difficult'];
if ($difficult == "easy")
{
    $_SESSION['matt'] = floor(($_SESSION['max_ran'] - $_SESSION['min_ran'] + 1) / 10 * 6);
    header('Location: \Guess the number\game\Game.php');
    exit();
}
else if ($difficult == "middle")
{
    $_SESSION['matt'] = floor(($_SESSION['max_ran'] - $_SESSION['min_ran'] + 1) / 10 * 3);
    header('Location: \Guess the number\game\Game.php');
    exit();
}
else if ($difficult == "hard")
{
    $_SESSION['matt'] = floor(($_SESSION['max_ran'] - $_SESSION['min_ran'] + 1) / 10 * 1);
    header('Location: \Guess the number\game\Game.php');
    exit();
}
else if ($matt == "" || $matt == 0)
{
    $_SESSION['matt'] = rand(1,floor($_SESSION['max_matt']));
    header('Location: \Guess the number\game\Game.php');
    exit();
}
else
{
    $_SESSION['matt'] = $matt;
    header('Location: \Guess the number\game\Game.php');
    exit();
}

