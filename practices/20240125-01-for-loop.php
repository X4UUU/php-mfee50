<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <?php for($i=1;$i<=9;$i++): ?>
        <tr>
            <td><?php /*?= 等同於使用echo*/echo $i?></td>
        </tr>
        <?php endfor ?>
    </table>
</body>
</html>