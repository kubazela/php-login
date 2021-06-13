<?php
    require 'menu_skript.php';
    session_start();

    //Deklarace proměnných pro předcházení chyb
    $log_jmeno = ""; //Přihlašovací jméno
    $log_heslo = ""; //Heslo

    if(isset($_POST['log_button'])){
        $log_jmeno = htmlspecialchars($_POST['log_jmeno']);
        $log_heslo = htmlspecialchars($_POST['log_heslo']);

        //Spojení s databází
        $con = mysqli_connect("localhost", "uzivatel", "heslo", "mujwebdb");
        if(mysqli_connect_errno()){
            echo "Nepodařilo se připojit: " . mysqli_connect_errno();
        }

        //Hlednání stejného uživatele
        $stejny = mysqli_query($con, "SELECT login, heslo FROM users WHERE login='$log_jmeno' AND heslo='$log_heslo'");

        if(mysqli_num_rows($stejny) == 1) {
            $_SESSION['log_jmeno'] = $log_jmeno;
            $_SESSION['log_heslo'] = $log_heslo;

            header("Location: pro_reg.php");
            exit();
        }else{
            echo "Zadal jste špatné přihlašovací údaje";
        }
    }
?>