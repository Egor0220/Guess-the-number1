<?php
session_start();
require "C:\Users\user\PhpstormProjects\Guess the number\Blocks\header.php";

$title = "Выбор диапозона";
?>
<div class="container mt-2">
    <h1>Давай сыграем с тобой в игру угадай число, для начала выбери диапазон случайного числа </h1>

    <form action="/checks/check_range_select.php" method="get">

        <label>Введите минимальное число дипозона: </label>
        <input type="number" name="min" min="0" class="form-control">
        <label>Введите "0", если хотите, чтобы компьбтер сам опрделил мин. число диапозона</label><br><br>
        <label>Введите максимальное число дипозона: </label>
        <input type="number" name="max" min="0" class="form-control">
        <label>Введите "0", если хотите, чтобы компьбтер сам опрделил мин. число диапозона</label><br><br>
        <input type="submit" class="btn btn-Primary" value="Отправить данные">
    </form>
</div>
<?php
require 'C:\Users\user\PhpstormProjects\Guess the number\Blocks\footer.php';
?>

