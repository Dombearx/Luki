<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanko</title>

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

            <div>
                Login
            </div> 
            <input type="text", name="login">         
            <div>
                Hasło
            </div>
            <input type="password", name="password">          
            <div>
                <input type="submit", value="Zaloguj">
            </div>

        </form>
    </div>

        <a href="./rejestracja.php">Rejestracja</a>

    
        </form>
    </div>
</body>
</html>