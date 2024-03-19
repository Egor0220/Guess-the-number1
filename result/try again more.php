<?php
session_start();
$min_ran = $_SESSION['min_ran'];
$max_ran = $_SESSION['max_ran'];
$matt = $_SESSION['matt'];
$end_matt = $_SESSION['end_matt'];
$end_word = ["ка","ки","ок"];
$num_of_end_ka = [1,1,1,1,1,1,1,1,1,1,1];
$num_of_end_ki = [2,2,2,3,4,4,4,4,4,4,4];
$num_of_end_ok = [0,5,5,5,5,5,6,7,8,9,9];
$num_of_end_ok2 = [10,11,12,13,14,15,16,17,18,19,20];
$end_matt = "";
$matt_str = (string)$matt;
for ($i = 0; $i < count($num_of_end_ok2); $i++)
{
    if ($matt == $num_of_end_ok2[$i] || $matt_str[-1] == $num_of_end_ok[$i])
    {
        $end_matt = "ок";
        break;
    }
    else if ($matt_str[-1] == $num_of_end_ki[$i])
    {
        $end_matt = "ки";
        break;
    }
    else if ($matt_str[-1] == $num_of_end_ka[$i])
    {
        $end_matt = "ка";
        break;
    }

}

?>
<div class="container mt-auto">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<h1>Твое число было больше загаданного</h1>
<h1>У вас осталось <?=$matt?> попыт<?=$end_matt?></h1><br>
<form action="\checks\check_your_int.php" method="post">
        Не указывай числа:
        <?php
        sort($_SESSION['your_guesses']);
        for ($i = 0; $i < count($_SESSION['your_guesses']); $i++)
        {
            echo $_SESSION['your_guesses'][$i] . ",";
        }
        ?> ты их уже предполагал ранее
    <input type="number" min="<?=$min_ran?>" max="<?=$max_ran?>" name="your guess" class="form-control">
    <br><input placeholder="Еще раз введите в поле число от <?=$_SESSION['min_ran']?> до <?=$_SESSION['max_ran']?>, которое по вашему мнению загадал компьютер" type="submit" class="btn btn-Primary" value="Отправить данные" >
</form>
</div>