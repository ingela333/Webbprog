<?php
    $title = "Quizmani";
    $menuItem = 0;
    include "header.php";

    $server = "localhost"; // ansluta till server, vår dator
    $username = "ingela333";  
    $password = "phpmyadmin,01"; 
    $db = "ingela333"; 

    // skapa kontakt med databas
    $link = new mysqli($server, $username, $password, $db);

    // testa kontakten - om det finns något fel: skriv ut felet
    if ($link->connect_error){
        echo $link->connect_error;
        exit;
    }
    // kommer man hit i koden så fungerar databaskontakten! 
?>

<div id="page" class="container">

    <main>
        <!-- Main - Välkommen -->

        <h1>
            Välkommen till Quizmani!
        </h1>

        <p>Här kan du skapa egna quiz eller svara på andras quiz.</p>

    </main>

    <aside>
        <!-- Aside -->

        <h4>Senast skapade quiz</h4>

        <p>

            <?php
                include "aside.php";
            ?>

            </p>

        </aside>


</div>

<?php
    include "footer.php";
?>