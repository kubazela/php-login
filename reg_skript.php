<?php
session_start();
//Deklarace proměnných pro předcházení chyb
$krestni = ""; //Křestní jméno
$prijemni = ""; //Příjmení
$login = ""; //Přihlašovací jméno
$heslo1 = ""; //Heslo 1
$heslo2 = ""; //Heslo 2

if(isset($_POST['reg_button'])){
    $krestni = htmlspecialchars($_POST['krestni']);   //Odstraní HTML tagy

    $prijmeni = htmlspecialchars($_POST['prijmeni']);

    $login = htmlspecialchars($_POST['login']);

    $heslo1 = htmlspecialchars($_POST['heslo1']);

    $heslo2 = htmlspecialchars($_POST['heslo2']);


    //Spojení s databází
    $con = mysqli_connect("localhost", "uzivatel", "heslo", "mujwebdb");
    if(mysqli_connect_errno()){
        echo "Nepodařilo se připojit: " . mysqli_connect_errno();
    }

    //Hlednání stejného uživatele
    $stejny = mysqli_query($con, "SELECT login FROM users WHERE login='$login'");

    if(mysqli_num_rows($stejny) != 0){
        echo "Uživatel " . $login . " už existuje";
    }elseif($heslo1 != $heslo2){
        echo "Hesla se neshodují";
    }else{
        //Vkládání proměnných do db
        if (mysqli_query($con,"INSERT INTO users(krestni, prijmeni, login, heslo) VALUES('$krestni', '$prijmeni', '$login', '$heslo1')")) {
            //echo "Úspěšně vloženo";
            $_SESSION['log_jmeno'] = $login;
            $_SESSION['log_heslo'] = $heslo1;
            header("Location: pro_reg.php");
            exit();
        }else{
            echo "Nepodařilo se vložit data";
        }
    }
    }
?>