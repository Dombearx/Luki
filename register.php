<?php

	session_start();
	
	if ((!isset($_POST['login'])) || (!isset($_POST['password'])|| (!isset($_POST['password_repeat']))))
	{
		header('Location: index.php');
		exit();
	}

	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		$login = $_POST['login'];
        $haslo = $_POST['password'];
        $haslo_powt = $_POST['password_repeat'];


		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
        $haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
        $haslo_powt = htmlentities($haslo_powt, ENT_QUOTES, "UTF-8");

        if(strlen($login)<3 || strlen($haslo)<3){
            $_SESSION['error']="Zbyt krótki login lub hasło";
            header('Location: index.php');
            exit();
        }

        if($haslo == $haslo_powt){

            $haslo_hash = password_hash($haslo, PASSWORD_DEFAULT);

            $rezultat = $polaczenie->query("SELECT id FROM users WHERE login='$login'");
            if($rezultat->num_rows > 0){
                $_SESSION['error']="Istnieje już taki użytkownik";
                header('Location: index.php');
                exit();
            }

            if ($rezultat = @$polaczenie->query(
                sprintf("INSERT INTO users (login, password, type) VALUES ('%s', '%s', 'user')",        
                mysqli_real_escape_string($polaczenie,$login),
                mysqli_real_escape_string($polaczenie,$haslo_hash))))
                {
                    echo "Konto zostało utworzone";
                    
                } else {
                    echo "Błąd";
                }
        } else {
            $_SESSION['error']="Hasła są różne";
            header('Location: index.php');
            exit();
        }
	

		
		$polaczenie->close();
	}
	
?>
    
