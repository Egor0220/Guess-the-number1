<?php
session_start();
$min_ran = $_SESSION['min_ran'];
$max_ran = $_SESSION['max_ran'];
$matt = $_SESSION['matt'];
$end_matt = $_SESSION['end_matt'];

?>
<div class="container mt-auto">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <h1>Ты не ввёл своё предположение</h1>
    <h1>У вас осталось <?=$matt?> попыт<?=$end_matt?></h1>
        <form action="\checks\check_your_int.php" method="post">
            Не указывай числа:
        <?php
        if (count($_SESSION['your_guesses']) > 0)
        {
            sort($_SESSION['your_guesses']);
            for ($i = 0; $i < count($_SESSION['your_guesses']); $i++)
            {
                echo ($_SESSION['your_guesses'][$i] ). ", ";
            }
        }
        ?>
            ты их уже предполагал ранее
            <input placeholder="Еще раз введи в поле число от <?=$_SESSION['min_ran']?> до <?=$_SESSION['max_ran']?>, которое по вашему мнению загадал компьютер " type="number" min="<?=$min_ran?>" max="<?=$max_ran?>" name="your guess" class="form-control">
            <br> <input class="btn btn-Primary" type="submit"  value="Отправить данные" >
        </form>
</div>