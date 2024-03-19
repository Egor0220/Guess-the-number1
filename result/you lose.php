<?php

session_start();
$min_ran = $_SESSION['min_ran'];
$max_ran = $_SESSION['max_ran'];
$matt = $_SESSION['matt'];
$end_matt = $_SESSION['end_matt'];
$your_guess = $_SESSION['your_guess'];
$rand_int = $_SESSION['rand_int'];
if ($your_guess < $rand_int)
{
    $text = "меньше";
}
else
{
    $text = "больше";
}
?>
<div class="container mt-auto">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<h1>Твое число было <?=$text?> загаданного</h1>
<h1>К сожалению у тебя закончились попытки, компьютер загодал число <?=$_SESSION['rand_int']?></h1>
<form action="\game\home page.php" method="post">
    <input type="submit" value="Начать игру заново" class="btn btn-Primary">
</form>
</div>

