<?php
session_start();
if (!$_SESSION['login']) {
    header("Location: ../login.php");
    exit();
}
    header("Location: ../restaurantslist.php");
    exit();
}