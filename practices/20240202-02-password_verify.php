<?php

$hash = '$2y$10$yqdyNKwNjn7KhWmz1jK.meqD6J71lKODzMmcErasRz5dwUHNDJy/S';

$pw = '234567';

var_dump(password_verify($pw, $hash));
