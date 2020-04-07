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

            <!-- Form -->
            <form action="" method="POST">

                <!-- Headers -->

                <p>
                    <input type="text" id="header" name="header1" placeholder="Ställ din quiz-fråga här" required
                        minlength="4" maxlength="256"><br>

                    <input type="text" id="header2" name="header2" placeholder="Fyll i en underrubrik (frivilligt)"
                        required minlength="4" maxlength="256">
                </p>

                <p>
                    <label for="text">Skapat av:</label>

                    <input type="text" id="created_by" name="created_by" placeholder="Fyll i din signatur" required>
                </p>

                <!-- Question 1 -->

                <p>
                    <label for="text">1.</label>
                    <input type="text" id="question" name="question1" placeholder="Fyll i fråga 1 här" required
                        minlength="4" maxlength="256">
                </p>

                <!-- Answers to question 1 -->

                <p>
                    <label for="text">a.</label>
                    <input type="text" id="answer" name="answer1_1" placeholder="Svar 1" required minlength="1"
                        maxlength="256">

                    <label for="number">Poäng:</label>
                    <input type="number" name="points1_1" id="points" required min="0" max="9">
                    <br>

                    <label for="text">b.</label>
                    <input type="text" id="answer" name="answer1_2" placeholder="Svar 2" required minlength="1"
                        maxlength="256">

                    <label for="number">Poäng:</label>
                    <input type="number" name="points1_2" id="points" required min="0" max="9">
                    <br>

                    <label for="text">c.</label>
                    <input type="text" id="answer" name="answer1_3" placeholder="Svar 3" required minlength="1"
                        maxlength="256">

                    <label for="number">Poäng:</label>
                    <input type="number" name="points1_3" id="points" required min="0" max="9">
                    <br>
                </p>


                <!-- Question 2 -->

                <p>
                    <label for="text">2.</label>
                    <input type="text" id="question" name="question2" placeholder="Fyll i fråga 2 här" required
                        minlength="4" maxlength="256">
                </p>

                <!-- Answers to question 2 -->

                <p>
                    <label for="text">a.</label>
                    <input type="text" id="answer" name="answer2_1" placeholder="Svar 1" required minlength="1"
                        maxlength="256">

                    <label for="number">Poäng:</label>
                    <input type="number" name="points2_1" id="points" required min="0" max="9">
                    <br>

                    <label for="text">b.</label>
                    <input type="text" id="answer" name="answer2_2" placeholder="Svar 2" required minlength="1"
                        maxlength="256">

                    <label for="number">Poäng:</label>
                    <input type="number" name="points2_2" id="points" required min="0" max="9">
                    <br>

                    <label for="text">c.</label>
                    <input type="text" id="answer" name="answer2_3" placeholder="Svar 3" required minlength="1"
                        maxlength="256">

                    <label for="number">Poäng:</label>
                    <input type="number" name="points2_3" id="points" required min="0" max="9">
                    <br>

                </p>

                <!-- Question 3 -->

                <p>
                    <label for="text">3.</label>
                    <input type="text" id="question" name="question3" placeholder="Fyll i fråga 3 här" required
                        minlength="4" maxlength="256">
                </p>

                <!-- Answers to question 3 -->

                <p>
                    <label for="text">a.</label>
                    <input type="text" id="answer" name="answer3_1" placeholder="Svar 1" required minlength="1"
                        maxlength="256">

                    <label for="number">Poäng:</label>
                    <input type="number" name="points3_1" id="points" required min="0" max="9">
                    <br>

                    <label for="text">b.</label>
                    <input type="text" id="answer" name="answer3_2" placeholder="Svar 2" required minlength="1"
                        maxlength="256">

                    <label for="number">Poäng:</label>
                    <input type="number" name="points3_2" id="points" required min="0" max="9">
                    <br>

                    <label for="text">c.</label>
                    <input type="text" id="answer" name="answer3_3" placeholder="Svar 3" required minlength="1"
                        maxlength="256">

                    <label for="number">Poäng:</label>
                    <input type="number" name="points3_3" id="points" required min="0" max="9">
                    <br>

                </p>

                <!-- Category -->

                <p>
                    <select name="category" id="category">
                        <option value="cat"> - Välj kategori - </option>
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
                        <label for="text" id="label_result">0-33%</label>
                    </div>

                    <div class="result_text">
                        <input type="text" id="result" name="result1" placeholder="Fyll i lågt testresultat" required
                            minlength="1" maxlength="256">
                    </div>
                </p>

                <p>
                    <div class="result_label">
                        <label for="text" id="label_result">34-67%</label>
                    </div>

                    <div class="result_text">
                        <input type="text" id="result" name="result2" placeholder="Fyll i mellan testresultat" required
                            minlength="1" maxlength="256"><br>
                    </div>
                </p>

                <p>
                    <div class="result_label">
                        <label for="text" id="label_result">68-100%</label>
                    </div>

                    <div class="result_text">
                        <input type="text" id="result" name="result3" placeholder="Fyll i högt testresultat" required
                            minlength="1" maxlength="256">
                    </div>
                </p>

                <!-- Submit -->

                <input type="submit" value="Skapa quiz!">

                <p></p>

            </form>


        </main>

        <aside>
            <!-- Aside   
            -->

            <h4>Senast skapade quiz</h4>

            <p>

               <?php
                // Hämta tabell quiz_head sorterat på skapandedatum
                $sql = "SELECT * FROM quiz_head ORDER BY created DESC";
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

        </aside>

    </div>

<?php
    include "footer.php";
?>