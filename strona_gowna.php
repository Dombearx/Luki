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

        <!-- TABELE Z ĆWICZENIAMI -->

        <div id="tabele_cwiczenia">
            <table>
                <tr>
                    <!-- Tytuły tabeli -->
                    <th>Nazwa Ćwiczenia</th>
                    <th>Liczba serii </th>
                    <th>Liczba powtorzen</th>
                </tr>         
                <tr>
                    <!-- Ćwiczenie z linkiem do rozwinięcia opisu -->
                    <td><a href="#op_tab_1" class="pokaz_opis">Pompki</a></td>
                    <td>3</td>
                    <td>5</td>
                </tr>
                <tr>
                    <!-- Ćwiczenie z linkiem do rozwinięcia opisu -->
                    <td><a href="#op_tab_2" class="pokaz_opis">Podciagniecia</a></td>
                    <td>2</td>
                    <td>1</td>
                </tr>

                <tr>
                    <!-- UKRYTE OPISY ĆWICZEŃ -->

                    <!-- OPIS 1  -->
                    <td class="opis_table" id="op_tab_1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus asperiores omnis accusantium facere, id ipsa doloribus vel? Nemo quia tenetur quod assumenda dignissimos, est modi sed, iste eaque asperiores cum.
                    <!-- Ukrywanie opisu -->
                    <a href="#tabela_cwiczenia" class="schowaj_opis"> Schowaj opis</a> </td>

                    <!-- OPIS 2 -->
                    <td class="opis_table" id="op_tab_2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni sit molestias aperiam odit vero, distinctio accusamus culpa possimus nostrum temporibus ducimus voluptatum dicta quae aliquam amet tempora natus perspiciatis quasi.
                    <!-- Ukrywanie opisu -->
                    <a href="#tabela_cwiczenia" class="schowaj_opis"> Schowaj opis</a> </td>

                </tr>
            </table>

            <table>
                <tr>
                    <!-- Tytuły tabeli -->
                    <th>Ile wykonałem serii</th>
                    <th>Ile wykonałem powtórzeń</th>
                </tr>

                <tr>
                <td>    
                        <!-- Input do wprowadzania serii ćwiczenia 1 -->
                        <input type="text">
                        <!-- Potwierdź wprowadzone serie ćwiczenia 1 -->
                        <input class="confirm_button bg_white ok_button" type="submit" value="ok">    
                    </td>
                    <td>
                        <!-- Input do wprowadzania powtórzeń ćwiczenia 1 -->
                        <input type="text">
                        <!-- Potwierdź wprowadzone powtórzenia ćwiczenia 1 -->
                        <input class="confirm_button bg_white ok_button" type="submit" value="ok">    
                    </td>
                </tr>

                <tr>
                <td>
                        <!-- Input do wprowadzania serii ćwiczenia 2 -->
                        <input type="text">
                        <!-- Potwierdź wprowadzone serie ćwiczenia 2 -->
                        <input class="confirm_button bg_white ok_button" type="submit" value="ok">    
                    </td>
                    <td>
                        <!-- Input do wprowadzania serii ćwiczenia 2 -->
                        <input type="text">
                        <!-- Potwierdź wprowadzone serie ćwiczenia 2 -->
                        <input class="confirm_button bg_white ok_button" type="submit" value="ok">    
                    </td>
                </tr>

            </table>
        </div>  
</ol>



</div>
    
</body>
</html>