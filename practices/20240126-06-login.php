<?php
session_start();
$users = [
    'shin' => [
        'pw' => '1234',
        'nickname' => '小新',
    ],
    'ming' => [
        'pw' => '3456',
        'nickname' => '大明',
    ],
];
#如果有表單送出，並且有account這個欄位
if (isset($_POST['account'])) {
    $account = $_POST['account'];
    $password = $_POST['password'] ?? '';
    #確認帳號對不對
    if (!empty($users[$account])) {
        #帳號是正確的
        $user = $users[$account];
        if ($password == $user['pw']) {
            #密碼是對的
            $_SESSION['user'] = [
                'account' => $account,
                'nickname' => $user['nickname'],
            ];
        } else {
            #密碼是錯的
        }
    } else {
        #帳號是錯的

    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($_SESSION['user'])): ?>
        <div>
            <?= $_SESSION['user']['nickname'] ?>,你好!
        </div>
        <p><a href="20240126-07-logout.php">登出</a></p>
    <?php else: ?>
        <?php if (isset($_POST['account'])): ?>
            <div style="color:red">帳號或密碼錯誤</div>
        <?php endif ?>

        <form name="form1" method="post">
            <input type="text" name="account" placeholder="帳號" value="<?= htmlentities($_POST['account'])?? ''?>">
            <br>
            <input type="password" name="password" placeholder="密碼" value="<?= htmlentities($_POST['password'])?? ''?>">
            <br>
            <!--<button type="button">不是 submit 的按鈕</button>-->
            <br>
            <input type="submit" value="登入">
        </form>
    <?php endif ?>

</body>

</html>