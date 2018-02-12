<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание php, урок 5</title>
    <link href='css/style.css' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="content">Вам нужно разработать программу, которая считала бы количество вхождений какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза.<br /><br />
<?php
/**
24. Вам нужно разработать программу, которая считала бы количество вхождений какой­нибуть
 * выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза.
 */
$result = 0;
if ($_POST){
    $find_this_number = trim($_REQUEST['find_this_number']);
    $my_number = trim($_REQUEST['my_number']);
//    $my_number = str_replace ("-","", $my_number);
    $demo_my_number = str_replace ($find_this_number,
        "<span style=\"color:#FFFF00\">{$find_this_number}</span>",
        $my_number);
    /**    $i=0;
    while($i < strlen($my_number)) {
        if ($my_number{$i}==$find_this_number) $result++;
        $i++;
    }
 */
    $result=preg_match_all("/{$find_this_number}/",$my_number);
    $last_char = substr($result, -1);
    $add_letter_a=".";
    $ends_on_a=array(2, 3, 4);
    $ends_true=in_array($last_char,$ends_on_a);
    if ($ends_true) {
        $add_letter_a="а.";
    }
    if ($result>11 and $result<15) {
        $add_letter_a=".";
    }
    echo "<p>Цифра <strong>{$find_this_number}</strong> встречается в числе <strong>{$demo_my_number}</strong> : <strong>{$result}</strong> раз{$add_letter_a}</strong></p>";}

?>
    <p>Введите число</p>
    <form action="24_arrays_loops_tasks.php" method="POST">
        <fieldset>
            <label for="my_number">Произвольное число</label>
            <input type="number" name="my_number" size="20" /><br />
            <label for="find_this_number">Найти это число</label>
            <input type="number" name="find_this_number" size="20" /><br />
        </fieldset>
        <br />
        <fieldset>
            <input type="submit" value="Отправить" />
            <input type="reset" value="Осистить" />
        </fieldset>
    </form>
<!--
<br />

<input type="button" value="Обновить страницу" onClick="window.location.reload()">
-->

</div>
</body>
</html>