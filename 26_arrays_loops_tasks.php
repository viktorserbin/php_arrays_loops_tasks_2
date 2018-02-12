<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание php, урок 5</title>
    <link href='css/style.css' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="content">26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand). Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы. После вывести на экран элементы, которые больше ноля и у которых не парный индекс.<br /><br />
    <input type="button" value="Обновить страницу" onClick="window.location.reload()">
    <?php
    /**
     * 26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
     * Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы.
     * После вывести на экран элементы, которые больше ноля и у которых не парный индекс.
     *
     */
    $range=100;
    $array_size=10;
    $result=1;
    $result_table_even="Найденные значения больше нуля с парным идексом:<br />";
    $result_table_not_even="Найденные значения больше нуля с не парным идексом:<br />";
    $result_table="Найденные значения больше нуля с парным идексом:<br />";
    for ($i=0;$i<=$array_size;$i++){
        $numbers[] = rand(0,$range);
    }
    echo "<pre>".PHP_EOL;
    print_r($numbers,0);
    echo "</pre>".PHP_EOL;
    foreach ($numbers as $key => $value) {
        if ($value>0 and $key%2==0) {
            $result_table_even .= "Ключ <strong>{$key}</strong> значение <strong>{$value}</strong>. <br />".PHP_EOL;
            $result=$result*$value;
        }
        if ($value>0 and $key%2!=0) {
            $result_table_not_even .= "Ключ <strong>{$key}</strong> значение <strong>{$value}</strong>. <br />".PHP_EOL;
        }
    }
    echo "{$result_table_even}<br />";
    echo "Результат произведения: <strong>{$result}</strong><br /><br />";
    echo "{$result_table_not_even}<br /><br />";
    ?>
    <input type="button" value="Обновить страницу" onClick="window.location.reload()">
</div>
</body>
</html>