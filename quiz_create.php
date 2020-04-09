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
                        required minlength="4" maxlength="256">
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
                    <input type="text" id="answer1_1" name="answer1_1" placeholder="Svar 1" required minlength="1"
                        maxlength="256">

                    <label for="number">Poäng:</label>
                    <input type="number" name="points1_1" id="points1_1" required min="0" max="9">
                    <br>

                    <label for="text">b.</label>
                    <input type="text" id="answer1_2" name="answer1_2" placeholder="Svar 2" required minlength="1"
                        maxlength="256">

                    <label for="number">Poäng:</label>
                    <input type="number" name="points1_2" id="points1_2" required min="0" max="9">
                    <br>

                    <label for="text">c.</label>
                    <input type="text" id="answer1_3" name="answer1_3" placeholder="Svar 3" required minlength="1"
                        maxlength="256">

                    <label for="number">Poäng:</label>
                    <input type="number" name="points1_3" id="points1_3" required min="0" max="9">
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
                    <input type="text" id="answer2_1" name="answer2_1" placeholder="Svar 1"  minlength="1"
                        maxlength="256">

                    <label for="number">Poäng:</label>
                    <input type="number" name="points2_1" id="points2_1"  min="0" max="9">
                    <br>

                    <label for="text">b.</label>
                    <input type="text" id="answer2_2" name="answer2_2" placeholder="Svar 2" minlength="1"
                        maxlength="256">

                    <label for="number">Poäng:</label>
                    <input type="number" name="points2_2" id="points2_2"  min="0" max="9">
                    <br>

                    <label for="text">c.</label>
                    <input type="text" id="answer2_3" name="answer2_3" placeholder="Svar 3"  minlength="1"
                        maxlength="256">

                    <label for="number">Poäng:</label>
                    <input type="number" name="points2_3" id="points2_3" min="0" max="9">
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
                    <input type="text" id="answer3_1" name="answer3_1" placeholder="Svar 1" minlength="1"
                        maxlength="256">

                    <label for="number">Poäng:</label>
                    <input type="number" name="points3_1" id="points3_1" min="0" max="9">
                    <br>

                    <label for="text">b.</label>
                    <input type="text" id="answer3_2" name="answer3_2" placeholder="Svar 2" minlength="1"
                        maxlength="256">

                    <label for="number">Poäng:</label>
                    <input type="number" name="points3_2" id="points3_2" min="0" max="9">
                    <br>

                    <label for="text">c.</label>
                    <input type="text" id="answer3_3" name="answer3_3" placeholder="Svar 3" minlength="1"
                        maxlength="256">

                    <label for="number">Poäng:</label>
                    <input type="number" name="points3_3" id="points3_3" min="0" max="9">
                    <br>

                </p>
              
                <!-- Category - value skickas i formuläret -->

                <p>
                    <select name="category" id="category">
                        <option value="category"> - Välj kategori - </option>
                        <option value="cat1">Personligt</option>
                        <option value="cat2">Underhållning</option>
                        <option value="cat3">Naturvetenskap</option>
                        <option value="cat4">Samhälle</option>
                        <option value="cat5">Humor</option>
                        <option value="cat6">Övrigt</option>
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
                    formData.append("answer1_1", document.getElementById("answer1_1").value); 
                    formData.append("points1_1", document.getElementById("points1_1").value); 
                    formData.append("answer1_2", document.getElementById("answer1_2").value); 
                    formData.append("points1_2", document.getElementById("points1_2").value); 
                    formData.append("answer1_3", document.getElementById("answer1_3").value); 
                    formData.append("points1_3", document.getElementById("points1_3").value); 
                    formData.append("question2", document.getElementById("question2").value); 
                    formData.append("answer2_1", document.getElementById("answer2_1").value); 
                    formData.append("points2_1", document.getElementById("points2_1").value); 
                    formData.append("answer2_2", document.getElementById("answer2_2").value); 
                    formData.append("points2_2", document.getElementById("points2_2").value); 
                    formData.append("answer2_3", document.getElementById("answer2_3").value); 
                    formData.append("points2_3", document.getElementById("points2_3").value); 
                    formData.append("question3", document.getElementById("question3").value); 
                    formData.append("answer3_1", document.getElementById("answer3_1").value); 
                    formData.append("points3_1", document.getElementById("points3_1").value); 
                    formData.append("answer3_2", document.getElementById("answer3_2").value); 
                    formData.append("points3_2", document.getElementById("points3_2").value); 
                    formData.append("answer3_3", document.getElementById("answer3_3").value); 
                    formData.append("points3_3", document.getElementById("points3_3").value); 

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
                // Hämta tabell quiz sorterat på id
                $sql = "SELECT * FROM quiz ORDER BY id DESC";
                $data = $link->query($sql);
            
                echo "<ul style='list-style-image: url(images/q5.png)'>";

                $i = 1;
                // loop för att hämta en rad i taget
                while($row = $data->fetch_assoc() and $i<=10){                               
                    echo "<li><b>", $row["header"], "</b> ", $row["header2"], "</li><br>";
                    $i += 1;
                }
                echo "</ul>";
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

                    
            <?php
            /*
                // Hämta tabell quiz sorterat på id
                $sql = "SELECT * FROM quiz ORDER BY id DESC";
                $data = $link->query($sql);
            
                echo "<ul style='list-style-image: url(images/q5.png)'>";

                $i = 1;
                // loop för att hämta en rad i taget
                while($row = $data->fetch_assoc() and $i<=10){                               
                    echo "<li><b>", $row["header"], "</b> ", $row["header2"], "</li><br>";
                    $i += 1;
                }
                echo "</ul>";*/
            ?>
            /*
                }
            };
            */
            </script>

        </aside>

    </div>

<?php
    include "footer.php";
?>