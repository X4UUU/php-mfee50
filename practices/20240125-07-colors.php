<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            width: 30px;
            height: 30px;
        }
    </style>
</head>

<body style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMhE8q976gpuyGmO_ZwB42_hDjhRc_4-ip4Q&usqp=CAU)">
    <table border="1">
        <?php for ($i = 0; $i < 16; $i++): ?>
            <tr>
                <?php for ($k = 0; $k < 16; $k++): 
                    $a = rand(0,15);
                    #$g = rand(0,15);
                    #$b = rand(0,15);
                    ?>
                    <td style="background-color: <?= sprintf('#A0A%X', $a) ?>;"></td>
                <?php endfor ?>
            </tr>
        <?php endfor ?>
    </table>
</body>

</html>