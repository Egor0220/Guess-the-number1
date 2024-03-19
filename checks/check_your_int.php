<?php
session_start();
$your_guess = ($_POST['your_guess']);
settype($your_guess, "int");
$_SESSION['your_guess'] = $your_guess;
$rand_int = $_SESSION['rand_int'];
$matt = $_SESSION['matt'];
$x = 0;

if ($matt == $_SESSION['start_matt'])
{
    $_SESSION['your_guesses'] = [];
}

    for ($i = 0; $i < count($_SESSION['your_guesses']); $i++)
    {
        if ($your_guess == $_SESSION['your_guesses'][$i])
        {
            header('Location: \Guess the number\result\try again none.php');
            exit();
        }
    }
    if ($your_guess == "" || $your_guess == 0)
    {
        $_SESSION['your_guess'] = $your_guess;
        header('Location: \Guess the number\result\empty field.php');
        exit();
    }
    else if ($your_guess == $rand_int)
    {
        header('Location: \Guess the number\result\you win.php');
        exit();
    }
    else if ($your_guess < $rand_int)
    {
        $_SESSION['matt'] -= 1;
        if ($_SESSION['matt'] == 0)
        {
            header('Location: \Guess the number\result\you lose.php');
            exit();
        }
        $_SESSION['your_guess'] = $your_guess;
        header('Location: \Guess the number\result\try again less.php');
        exit();
    }
    else if ($your_guess > $rand_int)
    {
        $_SESSION['matt'] -=1;
        $_SESSION['your_guess'] = $your_guess;
        if ($_SESSION['matt'] == 0)
        {
            header('Location: \Guess the number\result\you lose.php');
            exit();
        }
        header ('Location: \Guess the number\result\try again more.php');
        exit();
    }


