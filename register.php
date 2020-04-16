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

        if($haslo == $haslo_powt){
            if ($rezultat = @$polaczenie->query(
                sprintf("INSERT INTO users (login, password, type) VALUES ('%s', '%s', 'user')",        
                mysqli_real_escape_string($polaczenie,$login),
                mysqli_real_escape_string($polaczenie,$haslo))))
                {
                    echo "Konto zostało utworzone";
                    
                } else {
                    echo "Błąd";
                }
        } else {
            header('Location: index.php');
            exit();
        }
	

		
		$polaczenie->close();
	}
	
?>
    
