<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>常數</title>
</head>
<body>
    <h2>
    <?php
    define('MY_NAME','Cheng');#建立自訂常數(常數名稱,常數內容)，其內容的值可以是數字或字串
    echo 12 + 34;
    echo '<br>';
    echo __DIR__. '<br>';#目前的PHP檔所在的磁碟路徑資料夾
    echo __FILE__. '<br>';#PHP檔的磁碟路徑(包含檔名)
    echo __LINE__. '<br>';#目前所在的行數
    //小點為字串串接
    echo MY_NAME;
    ?>
    </h2>
</body>
</html>