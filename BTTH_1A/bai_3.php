<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bai_3</title>
    <style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Tên Khóa Học</th>
        </tr>
        <?php
            $arrs = ['PHP', 'HTML', 'CSS', 'JS', 'Python'];
            for ($i = 0; ($i < count($arrs)); $i++)  {
                echo '<tr>';
                echo "<td>$arrs[$i]</td>";
                echo '</tr>';
            }
        ?>

    </table>
</body>

</html>