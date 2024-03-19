<?php
session_start();
?>
<header>
    <a href="C:\Users\user\PhpstormProjects\Guess the number\game\home page.php">Начальная страница</a> |
    <a href="C:\Users\user\PhpstormProjects\Guess the number\game\range select.php">Начать игру</a><br>
</header>
<?php
$man_matt = $_SESSION["max_matt"];
$min_ran = $_SESSION['min_ran'];
$max_ran = $_SESSION['max_ran'];
$matt = $_SESSION['matt'];
$_SESSION['start_matt'] = $_SESSION['matt'];
$_SESSION['rand_int'] = rand($min_ran, $max_ran);
$end_word = ["ка","ки","ок"];
$num_of_end_ka = [1,1,1,1,1,1,1,1,1,1,1];
$num_of_end_ki = [2,2,2,3,4,4,4,4,4,4,4];
$num_of_end_ok = [0,5,5,5,5,5,6,7,8,9,9];
$num_of_end_ok2 = [10,11,12,13,14,15,16,17,18,19,20];
$end_matt = "";
$_SESSION['matt'] = $matt;
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
$_SESSION['end_matt'] = $end_matt;
?>
<div class="container mt-2">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <h1>Компьютер загадал случаеное число в диопазон от <?=$min_ran?> до <?=$max_ran?></h1>
    <h1>У вас есть <?=$matt?> попыт<?=$end_matt?></h1>
    <form action="\checks\check_your_int.php" method="post">
        <input type="number" min="<?=$min_ran?>" max="<?=$max_ran?>" name="your guess" class="form-control" placeholder="Введите в поле число, которое по вашему мнению загадал компьютер"><br>
        <input type="submit" value="Отправить данные" class="btn btn-Primary">
    </form>
<div>
