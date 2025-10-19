<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ООП </h1>
    <b>ООП</b> - Объектно Ореинтированное Програмирование

    Объект - набор свойств

    <hr>

    <h2>Структуризация</h2>

    Первое что нужно(прихоидтся) делать в рамках ООП, выделять объекты, которые присутсвуют в алгоритмах

    //Привер: программы, графического илюстратора, простенький, рисуем только прямыми линиями
    Решение: выделяем 2 структуры

    <ol>
        <li>
            Точка состоящая из
            <ul>
                <li>x - Горизотальной координаты </li>
                <li>y - Вериткальной координаты </li>
            </ul>
        </li>

        <li>
            Линия - состоящая из
            <ul>
                <li>p1 - Точка начала </li>
                <li>p2 - Точка конца </li>
                <li>w - Ширина </li>
                <li>color - цвет </li>
            </ul>
        </li>

        <li>
            Картина - состоящая из
            <ul>
                <li>lines - Набор(массив) линий </li>
                
            </ul>
        </li>
</ol>

 //Для того чтобы создать структуру используектся следующий синтаксис

 <pre>
    <code>
        class NAME_STRUCT {
            public TYPE NAME_FILED;
            public TYPE NAME_FILED1;
            public TYPE NAME_FILED2;
        }
    </code>
 </pre>

 <ul>
    <li>
        NAME_STRUCT - название структуры
    </li>

    <li>
        NAME_FILED_I - название поля структуры(Основная часть)
    </li>

    <li>
        TYPE - Тип поля структуры(int, string, ...)
    </li>
 </ul>

    <?php
        class Point {
            public int $x;
            public int $y;
        }
        //Пример
        $example_point = new Point();

        //Работа с полями структуры
        $example_point -> x = 100;
        $example_point -> y = 9;
    ?>

    <?php
        class Line {
            public Point $p1;

            public Point $p2;

            public int $weight;

            public string $colro;
        }

        $example_line = new Line();

        $example_line -> weight = 2;
        $example_line -> colro = 'red';
        
        $example_line->p1 = new Point();
        $example_line->p1->x = 44;
        $example_line->p1->y = 44;

        $example_line->p2 = $example_point;
    ?>

    <?php
        class Canvas {
            public array $lines;
        }
    ?>
    
</body>
</html>