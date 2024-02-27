<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php //php可以劃區塊
    $age = isset($_GET['age']) ? intval($_GET['age']) : 0;
    if ($age >= 18) :
    ?>
        <h2>歡迎光臨</h2>
        <img src="https://cdn.britannica.com/79/232779-050-6B0411D7/German-Shepherd-dog-Alsatian.jpg" width="300">
    <?php
    else :
    ?>
        <h2>未滿年齡</h2>
        <img src="https://i.natgeofe.com/n/4f5aaece-3300-41a4-b2a8-ed2708a0a27c/domestic-dog_thumb_square.jpg?w=136&h=136" width="300">
    <?php endif; ?>
</body>
</html>