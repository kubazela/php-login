
<?php
session_start();
    function menu(){
        echo "<ul>
                <li><a href='registrace.php'>Registrace</a></li>
                <li><a href='pro_reg.php'>Pro registrované</a></li>
                <li><a href='logout.php'>Odhlásit se</a></li>
                ";
             if($_SESSION['log_jmeno'] != "" && $_SESSION['log_heslo'] != ""){
                 echo "<li><a href='prvni.php'>Stranka, kterou vidí jen přihlášení</a>";
                 echo "<li><a href='druha.php'>Stranka, kterou vidí všichni</a>";
             }else{
                 echo "<li><a href='druha.php'>Stranka, kterou vidí všichni</a>";
             }
             echo "</ul>";
    }
?>