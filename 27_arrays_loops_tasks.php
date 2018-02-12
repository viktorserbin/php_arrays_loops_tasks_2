<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание php, урок 5</title>
    <link href='css/style.css' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="content">27. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице. Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green'). Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число.
    <br /><br />
    <input type="button" value="Обновить страницу" onClick="window.location.reload()">
    <br /><br />
    <?php
    /**
     * 27. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице,
     * $cols - кол-во столбцов в таблице. Есть список цветов,
     * в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
     * Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols,
     * в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число.
     */
    $range=1000;
    $cols=10;
    $rows=10;
    $colors = array('red','yellow','blue','gray','maroon','brown','green');
    for ($i=0;$i<=$rows;$i++){
      for ($j=0;$j<=$cols;$j++) {
          $numbers[$i][$j] = rand(0, $range);
      }
    }
    $table="<table border='1'>".PHP_EOL;
    for($tr=1;$tr<=$rows;$tr++){
        $table.="<tr>".PHP_EOL;
        $td=1;
        for ($td=1;$td<=$cols;$td++){
            $td_color=$colors[rand(0,5)];
            $table.="<td style='background-color:{$td_color}'>{$numbers[$tr][$td]}</td>".PHP_EOL;
        }
        $table.="</tr>".PHP_EOL;
    }
    $table.="</table>".PHP_EOL;
    echo $table;
    echo "<br />";

    ?>
    <input type="button" value="Обновить страницу" onClick="window.location.reload()">
</div>
</body>
</html>