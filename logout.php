<?php
    require 'menu_skript.php';
    $_SESSION['log_jmeno'] = "";
    $_SESSION['log_heslo'] = "";
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Odhlášení</title>
</head>
<body>
    <h1>Uživatel byl odhlášen</h1>
    <?php echo menu();?>
    Můžete se <a href="login.php">přihlásit zde</a>

</body>
</html>
