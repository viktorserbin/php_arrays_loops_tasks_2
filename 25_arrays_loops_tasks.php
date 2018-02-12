<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание php, урок 5</title>
    <link href='css/style.css' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="content">25. Ваше задание создать массив, наполнить это случайными значениями (функция rand), найти максимальное и минимальное значение и поменять их местами.<br /><br />
    <input type="button" value="Обновить страницу" onClick="window.location.reload()">
<?php
/**
 * 25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
 * найти максимальное и минимальное значение и поменять их местами.
 */
$range=1000;
$array_size=10;
for ($i=0;$i<=$array_size;$i++){
    $numbers[] = rand(0,$range);
}
echo "<pre>".PHP_EOL;
print_r($numbers,0);
echo "</pre>".PHP_EOL;
foreach ($numbers as $key => $value) {
    if ($key==0) {
        $key_min = $key;
        $key_max = $key;
        $value_min = $value;
        $value_max = $value;
    }
    elseif ($key!=0){
        if ($value<$value_min) {
            $key_min=$key;
            $value_min=$value;
        }
        if ($value>$value_max) {
            $key_max=$key;
            $value_max=$value;
        }
    }
}
echo "Минимум ключ <strong>{$key_min}</strong> значение <strong>{$value_min}</strong>. <br />";
echo "Максимум ключ <strong>{$key_max}</strong> значение <strong>{$value_max}</strong>. <br />";
$numbers[$key_min] = $value_max;
$numbers[$key_max] = $value_min;
echo "<pre>".PHP_EOL;
print_r($numbers,0);
echo "</pre>".PHP_EOL;
?>
    <input type="button" value="Обновить страницу" onClick="window.location.reload()">
</div>
</body>
</html>