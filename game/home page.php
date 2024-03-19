<?php
session_start();
session_destroy();
$title = "Начальная страница";
require "C:\Users\user\PhpstormProjects\Guess the number\Blocks\header.php";
?>
    <title><?=$title ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <div class="container mt-auto">
        <h1>Главное меню</h1>
        <form action="/Guess the number/game/range%20select.php" method="post">
            <input type="submit" value="Начать игру" class="btn btn-Primary">
        </form>
    </div>
<?php
require 'C:\Users\user\PhpstormProjects\Guess the number\Blocks\footer.php';
?>