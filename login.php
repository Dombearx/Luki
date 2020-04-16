<?php
    /******************************************************
    * connection.php
    * konfiguracja połączenia z bazą danych
    ******************************************************/

    function connection() {
        // serwer
        $mysql_server = "localhost";
        // admin
        $mysql_admin = "uzytkownik";
        // hasło
        $mysql_pass = "haslo";
        // nazwa baza
        $mysql_db = "baza_danych";
        // nawiązujemy połączenie z serwerem MySQL
        @mysql_connect($mysql_server, $mysql_admin, $mysql_pass)
        or die('Brak połączenia z serwerem MySQL.');
        // łączymy się z bazą danych
        @mysql_select_db($mysql_db)
        or die('Błąd wyboru bazy danych.');
    }

    $login = $_POST['login'];
    $password = $_POST['password'];

    echo $login." ".$password;

<<<<<<< HEAD
?>
=======
?> 
>>>>>>> a8a85f3c5209f9e232c11a1324db2e138e4e10e4
