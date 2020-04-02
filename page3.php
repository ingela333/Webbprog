<?php
    $title = "Sida 6 exempel";
    $menuItem = 6;
    include "header.php";
?>

<div id="page" class="container">

    <main>
        <!-- Main - Välkommen -->

        <h1>
            Välkommen till Quizmani!
        </h1>

        <p>Sida 3 som hanterar formulärdata med PHP</p>

        <form action="page3Submit.php" method="POST" id="form1">
            Namn: <input type="text" name="name" id="name"><br>
            Kurs: <br>
            <select name="course" id="course">
            <option value="1">Programmering</option>
            <option value="2">Esport</option>
            <option value="3">Keramik</option>
            </select><br>
            Kommentar: <br>
            <textarea name="comment" id="comment" cols="30" rows="10"></textarea><br>
            <input type="submit" value="Skicka">
            <div id="result"></div>
        </form>

        <script>
        
            function sendAjax(event){ // ta emot eventet Submit, annars skickas form som vanligt
                event.preventDefault(); // så ta bort default att skicka vid submit
                   
            var formData = new FormData();
            formData.append("name", document.getElementById("name").value); // skapa data att skicka
            formData.append("course", document.getElementById("course").value); // skapa data att skicka
            formData.append("comment", document.getElementById("comment").value); // skapa data att skicka
           
           
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
            xhttp.open("POST", "http://localhost/php/page3Submit.php");
            xhttp.send(formData); // skickar iväg förfrågan

            }
            
            document.getElementById("form1").addEventListener('submit', sendAjax);
                  
        </script>

    </main>

    <aside>
        <!-- Aside -->

    </aside>

</div>

<?php
    include "footer.php";
?>