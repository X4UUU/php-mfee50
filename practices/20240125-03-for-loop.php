<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <?php for($i=2 ;$i<=9 ;$i++): ?>
        <tr>
            <?php for($k =1;$k<= 9;$k++):?>
                <td><?=/*製作九九乘法表*/ "$i * $k =".$i*$k?></td>
                <?php endfor?>
        </tr>
        <?php endfor ?>
    </table>
</body>
</html>