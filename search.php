<?php
    $title = "Sök quiz";
    $menuItem = 6;
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
            Sök quiz!
        </h1>

        <!-- Form  (sök UPD) -->
        <form action="submitSearch.php" method="POST" id="formSearch">

        <h3>Sök quiz!</h3>

        <p>
            <input type="text" id="keyword" name="keyword" placeholder="Sök quiz/skapare/kategori">
        </p>
              
        <!-- Submit -->

        <input type="submit" value="Sök!">

        <div id="result"></div>

        <p></p>

        </form>

        <script>
            // Skicka asynkront när sidan redan är laddad!
            function sendAjax(event){ // ta emot eventet Submit, annars skickas form som vanligt
                event.preventDefault(); // så ta bort default att skicka vid submit
               
                // skapa data att skicka (sök UPD)
                var formData = new FormData();

                // data till tabell quiz
                formData.append("keyword", document.getElementById("keyword").value); 
                // formData.append("author", document.getElementById("author").value); 
                // formData.append("header", document.getElementById("header").value); 
                // formData.append("category", document.getElementById("category").value); 

                // AJAX - skapa objekt XML/http request för att kunna hämta data gm objektet efter att sidan är laddad
                var xhttp = new XMLHttpRequest();

                // lyssningsfunktion onreadystatechange när något ska skickas/ta emot
                xhttp.onreadystatechange = function () {
                    // vilken förändring har skett? (1=initiering, 2=kontakt med server, 3=processing, 4=fått svar)
                    // kolla också status 200 för att allt är ok (403 forbidden, 404 sidan finns ej)
                    if (this.readyState == 4 && this.status == 200) {
                        // Här läggs allt som ska göras när man hämtat objektet!!! Samma som i
                        document.getElementById("result").innerHTML = this.responseText;
                    }
                };

                // göra ett anrop till xhttp 
                // hämta data från annan sida med GET, 
                // url adress var vi ska hämta ifrån,
                // asynkront eller inte - true (sidan fryser inte och väntar på svar, kan göra annat medan)
                xhttp.open("POST", "http://localhost/php/submitSearch.php");
                xhttp.send(formData); // skickar iväg förfrågan
            }

            document.getElementById("formSearch").addEventListener('submit', sendAjax);

        </script>

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