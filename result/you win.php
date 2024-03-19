<?php
session_start();
$matt = $_SESSION['matt'];
$end_matt = $_SESSION['end_matt'];
$num_of_end_ka = [1,1,1,1,1,1,1,1,1,1,1];
$num_of_end_ki = [2,2,2,3,4,4,4,4,4,4,4];
$num_of_end_ok = [0,5,5,5,5,5,6,7,8,9,9];
$num_of_end_ok2 = [10,11,12,13,14,15,16,17,18,19,20];
$final_matt = $_SESSION['start_matt']-$matt+1;
$final_matt_str = (string)$final_matt;
for ($i = 0; $i < count($num_of_end_ok2); $i++)
{
    if ($final_matt == $num_of_end_ok2[$i] || [-1] == $num_of_end_ok[$i])
    {
        $end_matt = "ок";
        break;
    }
    else if ($final_matt_str[-1] == $num_of_end_ki[$i])
    {
        $end_matt = "ки";
        break;
    }
    else if ($final_matt_str[-1] == $num_of_end_ka[$i])
    {
        $end_matt = "ка";
        break;
    }

}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<div class="container mt-2">
    <h1>Поздравляю,ты выиграл, компьютер загадал число: <?=$_SESSION['rand_int']?><br>Тебе понадобилось всего <?=$_SESSION['start_matt']-$matt+1?> попыт<?=$end_matt?></h1>
    <form action="\game\home page.php">
        <input type="submit" class="btn btn-Primary value="Прейти на главный экран">
    </form>
</div>
