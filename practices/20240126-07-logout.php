<?php
session_start();
unset($_SESSION["user"]);
#session_destroy();,清除所有的session,適用於購物車系統
header("Location: 20240126-06-login.php");#跳回登入頁面

