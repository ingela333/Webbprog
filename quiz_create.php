<?php
    $title = "Quizmani - skapa quiz";
    $menuItem = 2;
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
            <!-- Main -->

            <h1>
                Skapa ditt eget quiz!
            </h1>

            <!-- Form  (sök UPD) -->
            <form action="submitCreate.php" method="POST" id="formCreate">

                <!-- Headers  - name skickas i formuläret -->

                <p>
                    <input type="text" id="header" name="header" placeholder="Ställ din quiz-fråga här" required
                        minlength="4" maxlength="256"><br>

                    <input type="text" id="header2" name="header2" placeholder="Fyll i en underrubrik (frivilligt)"
                        minlength="4" maxlength="256">
                </p>

                <p>
                    <label for="text">Skapat av:</label>

                    <input type="text" id="author" name="author" placeholder="Fyll i din signatur" required>
                </p>

                <!-- Question 1 - name skickas i formuläret -->

                <p>
                    <label for="text">1.</label>

                    <input type="text" id="question1" name="question1" placeholder="Fyll i fråga 1 här" required
                        minlength="1" maxlength="256">
                </p>

                <!-- Answers to question 1 -->

                <p>
                    <label for="text">a.</label>
                    <input type="text" id="answer1a" name="answer1a" placeholder="Svar 1" required minlength="1"
                        maxlength="256">

                    <label for="number">Poäng:</label>
                    <input type="number" name="points1a" id="points1a" required min="0" max="9">
                    <br>

                    <label for="text">b.</label>
                    <input type="text" id="answer1b" name="answer1b" placeholder="Svar 2" required minlength="1"
                        maxlength="256">

                    <label for="number">Poäng:</label>
                    <input type="number" name="points1b" id="points1b" required min="0" max="9">
                    <br>

                    <label for="text">c.</label>
                    <input type="text" id="answer1c" name="answer1c" placeholder="Svar 3" required minlength="1"
                        maxlength="256">

                    <label for="number">Poäng:</label>
                    <input type="number" name="points1c" id="points1c" required min="0" max="9">
                    <br>
                </p>

                <!-- Question 2 -->

                <p>
                    <label for="text">2.</label>
                    <input type="text" id="question2" name="question2" placeholder="Fyll i fråga 2 här" 
                        minlength="4" maxlength="256">
                </p>

                <!-- Answers to question 2 -->

                <p>
                    <label for="text">a.</label>
                    <input type="text" id="answer2a" name="answer2a" placeholder="Svar 1"  minlength="1"
                        maxlength="256">

                    <label for="number">Poäng:</label>
                    <input type="number" name="points2a" id="points2a"  min="0" max="9">
                    <br>

                    <label for="text">b.</label>
                    <input type="text" id="answer2b" name="answer2b" placeholder="Svar 2" minlength="1"
                        maxlength="256">

                    <label for="number">Poäng:</label>
                    <input type="number" name="points2b" id="points2b"  min="0" max="9">
                    <br>

                    <label for="text">c.</label>
                    <input type="text" id="answer2c" name="answer2c" placeholder="Svar 3"  minlength="1"
                        maxlength="256">

                    <label for="number">Poäng:</label>
                    <input type="number" name="points2c" id="points2c" min="0" max="9">
                    <br>

                </p>
               
                <!-- Question 3 -->

                <p>
                    <label for="text">3.</label>
                    <input type="text" id="question3" name="question3" placeholder="Fyll i fråga 3 här" 
                        minlength="4" maxlength="256">
                </p>
               
                <!-- Answers to question 3 -->

                <p>
                    <label for="text">a.</label>
                    <input type="text" id="answer3a" name="answer3a" placeholder="Svar 1" minlength="1"
                        maxlength="256">

                    <label for="number">Poäng:</label>
                    <input type="number" name="points3a" id="points3a" min="0" max="9">
                    <br>

                    <label for="text">b.</label>
                    <input type="text" id="answer3b" name="answer3b" placeholder="Svar 2" minlength="1"
                        maxlength="256">

                    <label for="number">Poäng:</label>
                    <input type="number" name="points3b" id="points3b" min="0" max="9">
                    <br>

                    <label for="text">c.</label>
                    <input type="text" id="answer3c" name="answer3c" placeholder="Svar 3" minlength="1"
                        maxlength="256">

                    <label for="number">Poäng:</label>
                    <input type="number" name="points3c" id="points3c" min="0" max="9">
                    <br>

                </p>
              
                <!-- Category - value skickas i formuläret -->

                <p>
                    <select name="category" id="category" required>
                        <option value="Övrigt"> - Välj kategori - </option>
                        <option value="Personligt">Personligt</option>
                        <option value="Underhållning">Underhållning</option>
                        <option value="Naturvetenskap">Naturvetenskap</option>
                        <option value="Samhälle">Samhälle</option>
                        <option value="Humor">Humor</option>
                        <option value="Övrigt">Övrigt</option>
                    </select>
                </p>
              
                <!-- Test result -->
                <p>
                <div class="result_label">
                        <label for="text">0-33%</label>
                        </div>

                        <div class="result_text">
                        <input type="text" id="result1" name="result1" placeholder="Fyll i lågt testresultat"
                            minlength="1" maxlength="256">
                            </div>
                </p>

                <p>
                    <div class="result_label">
                        <label for="text" id="label_result">34-67%</label>
                    </div>

                    <div class="result_text">
                        <input type="text" id="result2" name="result2" placeholder="Fyll i mellan testresultat"
                            minlength="1" maxlength="256"><br>
                    </div>
                </p>

                <p>
                    <div class="result_label">
                        <label for="text" id="label_result">68-100%</label>
                    </div>

                    <div class="result_text">
                        <input type="text" id="result3" name="result3" placeholder="Fyll i högt testresultat"
                            minlength="1" maxlength="256">
                    </div>
                </p>
               
                <!-- Submit -->

                <input type="submit" value="Skapa quiz!">

                <div id="result"></div>

                <p></p>

            </form>

            <script>
                
                // Skicka asynkront när sidan redan är laddad!
                function sendAjax(event){ // ta emot eventet Submit, annars skickas form som vanligt
                    event.preventDefault(); // så ta bort default att skicka vid submit
               
                    // skapa data att skicka (sök UPD)
                    var formData = new FormData();

                    // data till tabell quiz (tidigare quiz_head)
                    formData.append("author", document.getElementById("author").value); 
                    formData.append("header", document.getElementById("header").value); 
                    formData.append("header2", document.getElementById("header2").value); 
                    formData.append("category", document.getElementById("category").value); 
                    formData.append("result1", document.getElementById("result1").value); 
                    formData.append("result2", document.getElementById("result2").value); 
                    formData.append("result3", document.getElementById("result3").value); 

                    // data till tabell quiz (tidigare quiz_questions)
                    formData.append("question1", document.getElementById("question1").value); 
                    formData.append("answer1a", document.getElementById("answer1a").value); 
                    formData.append("points1a", document.getElementById("points1a").value); 
                    formData.append("answer1b", document.getElementById("answer1b").value); 
                    formData.append("points1b", document.getElementById("points1b").value); 
                    formData.append("answer1c", document.getElementById("answer1c").value); 
                    formData.append("points1c", document.getElementById("points1c").value); 
                    formData.append("question2", document.getElementById("question2").value); 
                    formData.append("answer2a", document.getElementById("answer2a").value); 
                    formData.append("points2a", document.getElementById("points2a").value); 
                    formData.append("answer2b", document.getElementById("answer2b").value); 
                    formData.append("points2b", document.getElementById("points2b").value); 
                    formData.append("answer2c", document.getElementById("answer2c").value); 
                    formData.append("points2c", document.getElementById("points2c").value); 
                    formData.append("question3", document.getElementById("question3").value); 
                    formData.append("answer3a", document.getElementById("answer3a").value); 
                    formData.append("points3a", document.getElementById("points3a").value); 
                    formData.append("answer3b", document.getElementById("answer3b").value); 
                    formData.append("points3b", document.getElementById("points3b").value); 
                    formData.append("answer3c", document.getElementById("answer3c").value); 
                    formData.append("points3c", document.getElementById("points3c").value); 

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
                    xhttp.open("POST", "http://localhost/php/submitCreate.php");
                    xhttp.send(formData); // skickar iväg förfrågan
                }

                document.getElementById("formCreate").addEventListener('submit', sendAjax);
              
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

            <script>
            // ladda om sidan med Ajax?
            /*
            // lyssningsfunktion onreadystatechange när något ska skickas/ta emot
            xhttp.onreadystatechange = function () {

            // vilken förändring har skett? (1=initiering, 2=kontakt med server, 3=processing, 4=fått svar)
            // kolla också status 200 för att allt är ok (403 forbidden, 404 sidan finns ej)
                if (this.readyState == 4 && this.status == 200) {
                // Här läggs allt som ska göras när man hämtat objektet!!! Samma som i
                  //  document.getElementById("result").innerHTML = this.responseText;
                  //  event.load();
            /*
            </script>

        </aside>

    </div>

<?php
    include "footer.php";
?>