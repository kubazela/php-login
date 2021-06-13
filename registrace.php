<?php
require 'menu_skript.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Registrace</title>
</head>
<body>
    <h1>Registrace</h1>
    <?php echo menu()?>
    <form   action="reg_skript.php" method="POST">
        <table>
            <tr>
                <th align= "left">Křestní jméno</th>
                <td><input type="text" name="krestni" required></td>
            </tr>
            <tr>
                <th align= "left">Příjmení</th>
                <td><input type="text" name="prijmeni" required></td>
            </tr>
            <tr>
                <th align= "left">Přihlašovací jméno</th>
                <td><input type="text" name="login" required></td>
            </tr>
            <tr>
                <th align= "left">Heslo</th>
                <td><input type="password" name="heslo1" required></td>
            </tr>
            <tr>
                <th align= "left">Ověření hesla</th>
                <td><input type="password" name="heslo2" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="reg_button" value="Zaregistrovat se"></td>
            </tr>
        </table>
    </form>
</body>
</html>