<?php if(isset($_COOKIE["logout_notification"])): ?>
<div> <?= $_COOKIE["logout_notification"]; ?></div>
<?php setcookie("logout_notification", "", time() - 3600);
endif; ?>


<?php if(isset($_COOKIE["login_notification"])): ?>
<div> <?= $_COOKIE["login_notification"];?></div>
<?php setcookie("login_notification", "", time() - 3600);
endif; ?>


<?php if(isset($_COOKIE["register_notification"])): ?>
<div> <?= $_COOKIE["register_notification"] ?></div>
<?php setcookie("register_notification", "", time() - 3600); endif;?>

<?php if(isset($_COOKIE["error_notification"])): ?>
<div> <?= $_COOKIE["error_notification"]; ?></div>
<?php setcookie("error_notification", "", time() - 3600,"/"); endif;?>