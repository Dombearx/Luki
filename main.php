<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
</head>

<body>
	
<?php

    if($_SESSION['type'] == "admin"){
        echo "<p>Administrator:  ".$_SESSION['user'].'!';
        echo "<p>Typ ".$_SESSION['type'].'!';
    } else {
        echo "<p>Witaj ".$_SESSION['user'].'!';
        echo "<p>Typ ".$_SESSION['type'].'!';
    }



	#echo "<p>Witaj ".$_SESSION['user'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>';
	#echo "<p><b>Drewno</b>: ".$_SESSION['drewno'];
	#echo " | <b>Kamień</b>: ".$_SESSION['kamien'];
	#echo " | <b>Zboże</b>: ".$_SESSION['zboze']."</p>";
	
	#echo "<p><b>E-mail</b>: ".$_SESSION['email'];
	#echo "<br /><b>Dni premium</b>: ".$_SESSION['dnipremium']."</p>";
	
?>

</body>
</html>