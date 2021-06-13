<?php
require 'menu_skript.php';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Pro registrované</title>
</head>
<body>
    <h1>Pro registrované</h1>
    <?php echo menu()?>
    <?php
        if($_SESSION['log_jmeno'] == "" && $_SESSION['log_heslo'] == ""){
            echo "Piřihlašte se <a href='login.php'>zde</a>";
            die;
        }else{
            echo "Vtejte uživateli <b>" . $_SESSION['log_jmeno'] . "</b>, jste přihlášen, a proto zde vidíte své jméno";
        }
    ?>
</body>
</html>
