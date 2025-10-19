<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>
            <a href='/variable'>Переменные</a>
        </li>
        <li>
            <a href="/contact">Друзья</a>
        </li>
        <li>
            <a href="/loops">За деньги да</a>
        </li>
        <li>
            <a href="/array">Массивы</a>
        </li>
        <li>
            <a href="/array/object">Ассациотивные массивы</a>
        </li>
    </ul>

        <?php
            echo rand(0, 1000);
        ?>
        <h1>
            <?php
            $left_bounc = rand(0, 1000);
            echo $left_bounc;
            echo '-';
            echo rand ($left_bounc, 2 * $left_bounc);
        ?>
        </h1>       
    
</body>
</html>