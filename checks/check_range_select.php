<?php
session_start();
$min_ran = $_GET['min'];
$max_ran = $_GET['max'];
if (($max_ran == "" || $max_ran == 0) && ($min_ran == "" || $min_ran == 0))
{
    $_SESSION['min_ran'] = 1;
    $_SESSION['max_ran'] = 10;
    header('Location: /Guess the number/game/matt.php');
    exit;
}
else if ($max_ran == "" || $max_ran == 0)
{
    $_SESSION['max_ran'] = rand(1,100);
    $_SESSION['min_ran'] = $min_ran;
    header('Location: /Guess the number/game/matt.php');
    exit;
}
else if ($min_ran == "" || $min_ran == 0)
{
    $_SESSION['min_ran'] = rand(1,$max_ran);
    $_SESSION['max_ran'] = $max_ran;
    header('Location: /Guess the number/game/matt.php');
    exit;
}
if ($max_ran < $min_ran)
{
    echo "Ваше минимальное число больше максимального";
}
else if ($max_ran == $min_ran) {
    echo "Ваше минимальные числа одинаковы";
}
else
{
    $_SESSION['min_ran'] = $min_ran;
    $_SESSION['max_ran'] = $max_ran;
    header('Location: /Guess the number/game/matt.php');
    exit;
}
?>
    <form action="/Guess the number/game/range select.php" method="get">
        <input type="submit" value="Попробовать снова" class='btn btn-Primary' >

    </form>