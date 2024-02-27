---------------------------------------------------------------
URL 連結的格式
1. 完整
http://localhost/php-mfee50/address-book/list.php?page=10#abc
2. 省略協定
//localhost/php-mfee50/address-book/list.php?page=10#abc
3. 省略主機
/php-mfee50/address-book/list.php?page=10#abc
4. 省略路徑
list.php?page=10#abc
5. 省略資源檔
?page=10#abc
6.只剩頁面內的連結
#abc
---------------------------------------------------------------
1. 公開的編碼(可逆，不需要 key)
   base64
2.hash 雜湊(不可逆，不需要 key)
   md5, shal, sha256, bcrypt
3.加解密(可逆, 需要 key)
   blowfish, ssl