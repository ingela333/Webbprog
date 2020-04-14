<?php
    $title = "Quizmani";
    $menuItem = 1;
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
            Testa ett quiz!
        </h1>

        <?php
            // hämta sparad quizid från submitRun.php
            session_start();

            // Kolla om något id är skickat med "a href" från submitSearch.php
            if(isset($_GET["id"])) {
                // echo "1 ", $_GET['id'];
                $quizid = $_GET['id']; // hämta ID från a href submitSearch.php
                // hämta en specifik post ur databasen
                $sql = "SELECT * FROM quiz WHERE ID = $quizid";

            // Annars: kolla om något id är skickat som variabel från submitRun.php
            } else if (isset($_SESSION["quizid"])) {
                // echo "2 ";
                $quizid = $_SESSION["quizid"];

                // hämta en specifik post ur databasen
                $sql = "SELECT * FROM quiz WHERE ID = $quizid";

            } else {
                // echo "3";
                // hämta en random post ur databasen
                //$sql = "SELECT * FROM quiz WHERE ID = 1";
                $sql = "SELECT * FROM quiz ORDER BY RAND() LIMIT 1";
            }

            // kör frågan
            $data = $link->query($sql);
            // hämta en rad ur svarsdatan - en array med kolumnnamn
            $row = $data->fetch_assoc();
            
            // spara värden    

            // till formuläret
            $header = $row["header"];
            $header2 = $row["header2"]; 
            $question1 = $row["question1"];
            $answer1a = $row["answer1a"];
            $answer1b = $row["answer1b"];
            $answer1c = $row["answer1c"];
            $question2 = $row["question2"];
            $answer2a = $row["answer2a"];
            $answer2b = $row["answer2b"];
            $answer2c = $row["answer2c"];
            $question3 = $row["question3"];
            $answer3a = $row["answer3a"];
            $answer3b = $row["answer3b"];
            $answer3c = $row["answer3c"];

            // vid submit - variabler som ska skickas till submitRun.php via Ajax
            $qid = $row["ID"];
            $run = $row["run"]; 
        ?>

        <!-- Form -->
        <form action="submitRun.php" method="POST" id="formRun">

            <!-- Headers -->

            <!--<div id="header1"></div>
            <div id="header2"></div> -->

            <?php
            echo "<h2>", $header, "</h2>";
            echo "<h3>", $header2, "</h3><br>";
            // echo $row["author"], "<br>", $row["header"], "<br><br>";
            ?>

            <!-- Question 1 -->
                
                <?php echo "<h5> 1. ", $question1,"</h5><br>"; ?>

                <label>
                    <input type="radio" name="radio1" value="r1a" id="r1a" required><?php echo $answer1a; ?>
                </label><br>

                <label>
                    <input type="radio" name="radio1" value="r1b" id="r1b"><?php echo $answer1b; ?>
                </label><br>

                <label>
                    <input type="radio" name="radio1" value="r1c" id="r1c"><?php echo $answer1c; ?>
                </label><br><br>

            

                <!-- Question 2 -->
                
                <?php echo "<h5> 2. ", $question2,"</h5><br>"; ?>

                <label>
                    <input type="radio" name="radio2" value="r2a" id="r2a" required><?php echo $answer2a; ?>
                </label><br>

                <label>
                    <input type="radio" name="radio2" value="r2b" id="r2b"><?php echo $answer2b; ?>
                </label><br>

                <label>
                    <input type="radio" name="radio2" value="r2c" id="r2c"><?php echo $answer2c; ?>
                </label><br><br>



                <!-- Question 3 -->

                <?php echo "<h5> 3. ", $question3,"</h5><br>"; ?>

                <label>
                    <input type="radio" name="radio3" value="r3a" id="r3a" required><?php echo $answer3a; ?>
                </label><br>

                <label>
                    <input type="radio" name="radio3" value="r3b" id="r3b"><?php echo $answer3b; ?>
                </label><br>

                <label>
                    <input type="radio" name="radio3" value="r3c" id="r3c"><?php echo $answer3c; ?>
                </label><br><br>



                <!-- Test result -->


                <!-- Submit -->

                <input type="submit" value="Klar!">

                <div id="result"></div>

                <p></p>

            </form>

            <script>

                // Skicka asynkront när sidan redan är laddad!
                function sendAjax(event){ // ta emot eventet Submit, annars skickas form som vanligt
                event.preventDefault(); // så ta bort default att skicka vid submit

                // skapa data att skicka (sök UPD)
                var formData = new FormData();
                var qid = <?php echo $qid ?>; 
                var run = <?php echo $run ?>;                  // kolla vilka radio buttons som är valda
             //   var radio1Check = document.querySelector("input[name='radio1']:checked").value;
             //   var radio2Check = document.querySelector("input[name='radio2']:checked").value;
             //   var radio3Check = document.querySelector("input[name='radio3']:checked").value;


                // data till tabell quiz 
                formData.append("qid", qid); 
                formData.append("run", run); 
                formData.append("r1", document.querySelector("input[name='radio1']:checked").value); 
                formData.append("r2", document.querySelector("input[name='radio2']:checked").value); 
                formData.append("r3", document.querySelector("input[name='radio3']:checked").value);

             /* formData.append("r1a", document.getElementById("r1a").value); 
                formData.append("r1b", document.getElementById("r1b").value); 
                formData.append("r1c", document.getElementById("r1c").value); 
                formData.append("r2a", document.getElementById("r2a").value); 
                formData.append("r2b", document.getElementById("r2b").value); 
                formData.append("r2c", document.getElementById("r2c").value); 
                formData.append("r3a", document.getElementById("r3a").value); 
                formData.append("r3b", document.getElementById("r3b").value); 
                formData.append("r3c", document.getElementById("r3c").value); */

                // AJAX - skapa objekt XML/http request för att kunna hämta data gm objektet efter att sidan är laddad
                var xhttp = new XMLHttpRequest();

                // lyssningsfunktion onreadystatechange när något ska skickas/ta emot
                xhttp.onreadystatechange = function () {
                    // vilken förändring har skett? (1=initiering, 2=kontakt med server, 3=processing, 4=fått svar)
                    // kolla också status 200 för att allt är ok (403 forbidden, 404 sidan finns ej)
                    if (this.readyState == 4 && this.status == 200) {
                    // Här läggs allt som ska göras när man hämtat objektet!!! Samma som i
                        document.getElementById("result").innerHTML = this.responseText; //Lägg i: div id = "result"
                    }
                };

                // göra ett anrop till xhttp 
                // hämta data från annan sida med GET, 
                // url adress var vi ska hämta ifrån,
                // asynkront eller inte - true (sidan fryser inte och väntar på svar, kan göra annat medan)
                xhttp.open("POST", "http://localhost/php/submitRun.php");
                xhttp.send(formData); // skickar iväg förfrågan
                }

                document.getElementById("formRun").addEventListener('submit', sendAjax);

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