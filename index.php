<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="./style.css">
    
</head>
<body>

    <?php
        if(isset($_SESSION['error'])){
            echo "".$_SESSION['error'];
        }
    ?>

    <div class="Logowanie">
        <form action="login.php", method="post">
            <div id="insert_login">
                Login: <input type="text", name="login">
            </div>
            <div id="insert_password">
            Hasło: <input type="text", name="password">
            </div>
            <div id="confirm_button">
                <input type="submit", value="Zaloguj">
            </div>
        </form>
    </div>

    <div class="Rejestracja">
        <form action="register.php", method="post">
            Login: <input type="text", name="login">
            Hasło: <input type="text", name="password">
            Powtórz hasło: <input type="text", name="password_repeat">
            <input type="submit", value="Utwórz konto">
        </form>
    </div>
</body>
</html>