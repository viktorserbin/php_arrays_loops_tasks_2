<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание php, урок 5</title>
    <link href='css/style.css' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="content">28. Вывести таблицу умножения с помощью двух циклов for.<br /><br />
    <?php
    /** 28. Вывести таблицу умножения с помощью двух циклов for.
     *
     */
    $cols=10;
    $rows=10;
    $tr=1;
    echo "<strong> <p>Вывести таблицу умножения с помощью двух циклов for.</strong> </p><br />".PHP_EOL;
    echo "<table border='1'>".PHP_EOL;

    for($tr=1;$tr<=$rows;$tr++){
        echo "<tr>".PHP_EOL ;
        $td=1;
        for ($td=1;$td<=$cols;$td++){
            echo "<td>".$td."*".$tr." = ".$tr*$td."</td>".PHP_EOL;
        }
        echo "</tr>".PHP_EOL;
    }
    echo "</table>".PHP_EOL;
    echo "<br />";

    ?>
</div>
</body>
</html>