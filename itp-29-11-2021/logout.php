<?php
session_start();
session_unset();
session_destroy();
setcookie("logout_notification", "Uspesno ste se odjavili", time() + 60, "/");
header("location:prijava.php");