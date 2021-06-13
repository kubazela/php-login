<?php
require 'menu_skript.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Přihlášení</title>
</head>
<body>
    <h1>Přihlášení</h1>
    <?php echo menu()?>
    <form action="login_skript.php" method="POST">
        <table>
            <tr>
                <th align="left">Přihlašovací jméno</th>
                <td><input type="text" name="log_jmeno"></td>
            </tr>
            <tr>
                <th align="left">Heslo</th>
                <td><input type="password" name="log_heslo"></td>
            </tr>
            <tr>
                <td><input type="submit" name="log_button" value="Přihlásit se"></td>
            </tr>
        </table>
    </form>
</body>
</html>