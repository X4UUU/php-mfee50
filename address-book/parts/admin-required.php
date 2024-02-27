<?php

if (!isset($_SESSION)) {
    # code...
    session_start();
}
if (!isset($_SESSION['admin'])) {
    # code...
    header('Location: index_.php');
    exit;
}