<?php
session_start();

$title = "Определение количества попыток";
include "C:\Users\user\PhpstormProjects\Guess the number\Blocks\header.php";
$_SESSION['max_matt'] = floor(($_SESSION['max_ran']-$_SESSION['min_ran']+1)/2);
$max_matt = floor($_SESSION['max_matt']);
$_SESSION['difficult'] = "";
?>
<div class="container mt-2">
    <h1>Теперь определимся с кол-вом попыток</h1>
    <form action="/Guess the number/checks/check_matt.php" method="post">
        <label>Твое количество попыток должно быть не больше чем <?=($max_matt)?></label><br>
        <input type="number" name="matt" min="0" placeholder="Ведите желаемое количстов попыток" class="form-control" max=<?=$max_matt?>>
        <br><label>Если хотите оставить выбор за рандомом, оставтье поле путым, или введите "0" <br>
        Также можете выбрать один из вариантов сложности: <br></label><br>

        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="difficult" value="easy" id="btnradio1" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio1">Легкая</label>

            <input type="radio" class="btn-check" name="difficult" value="middle" id="btnradio2" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio2">Средняя</label>

            <input type="radio" class="btn-check" name="difficult" value="hard" id="btnradio3" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio3">Тяжелая</label>
        </div>
        <br><br>
        <input type="submit" value="Отправить данные" class="btn btn-Primary"><br><br>



    </form>
</div>


<?php
require 'C:\Users\user\PhpstormProjects\Guess the number\Blocks\footer.php';
?>
