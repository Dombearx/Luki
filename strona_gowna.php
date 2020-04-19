<!-- Wielkie ambitne planY: -->

<!-- Lista ćwiczeń:  -->
    <!-- Nazwę -->
    <!-- Liczba serii -->
    <!-- Liczba powtózeń w serii -->
    <!-- Opis ćwiczenia - pojawia się po kilkincięu w ćwiczenei -->


<!-- Jakieś coś do wpisanai ile wykonano rzeczywiście serii, ile powtórzeń i komnetarz opcjonalnei -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona Gówna</title>

    <link rel="stylesheet" type="text/css" href="./style.css">
    
</head>
<body>

<div class="menu top">
    <div class="button"><a href="./index.php"> Logowanie</a></div>
</div>

<div class="main">

<h2>Ćwiczenia</h2>

<!-- Lista ćwiczeń:  -->

<ol>

        <!-- Pierwsze ćwiczenie/pierwszy element numerowanej listy -->
        <li class="cwiczenie" id="cwiczenie1">Nazwa Ćwiczenia

        <ul>
            <li>Liczba serii : </li>
            <li>Liczba powtózeń w serii</li>

            <!-- Rozwijanie opisu -->
            <a href="#opis1">Opis ćwiczenia</a>

            <li class="opis" id="opis1">Opis ćwiczenia pojawiający się po kliknięciu

            <br>
        
            <a href="#cwiczenie1" class="dont_wrap">Schowaj tekst</a>
        <!-- Zakończenie pierwszego ćwiczenia -->
            </li>

        </ul>

        <!-- Ćwiczenie drugie -->
        <li class="cwiczenie" id="cwiczenie2">Nazwa Ćwiczenia

        <ul>
            <li>Liczba serii : </li>
            <li>Liczba powtózeń w serii</li>

            <!-- Rozwijanie opisu -->
            <a href="#opis2">Opis ćwiczenia</a>

            <li class="opis" id="opis2">Opis ćwiczenia pojawiający się po kliknięciu

            <br>
        
            <a href="#cwiczenie2" class="dont_wrap">Schowaj tekst</a>

            </li>

        </ul>

        <li class="cwiczenie" id="cwiczenie3">Nazwa Ćwiczenia

        <ul>
            <li>Liczba serii : </li>
            <li>Liczba powtózeń w serii</li>

            <!-- Rozwijanie opisu -->
            <a href="#opis3">Opis ćwiczenia</a>

            <li class="opis" id="opis3">Opis ćwiczenia pojawiający się po kliknięciu

            <br>
        
            <a href="#cwiczenie3" class="dont_wrap">Schowaj tekst</a>

            </li>

        </ul>

        <div class="tables" id="tabela_cwiczenia">
            <table>
                <tr>
                    <th>Nazwa Ćwiczenia</th>
                    <th>Liczba serii </th>
                    <th>Liczba powtorzen</th>
                </tr>         
                <tr>
                    <td><a href="#op_tab_1" class="pokaz_opis">Pompki</a></td>
                    <td>3</td>
                    <td>5</td>
                </tr>
                <tr>
                <td><a href="#op_tab_2" class="pokaz_opis">Podciagniecia</a></td>
                    <td>2</td>
                    <td>1</td>
                </tr>
                <tr >
                    <!-- UKRYTE OPISY ĆWICZEŃ -->
                    <td class="opis_table" id="op_tab_1">Opis ukryty1 <a href="#tabela_cwiczenia"> Schowaj opis</a> </td>
                    <td class="opis_table" id="op_tab_2">Opis ukryty2 <a href="#tabela_cwiczenia"> Schowaj opis</a> </td>

                </tr>
            </table>
        </div>


    
</ol>



</div>
    
</body>
</html>