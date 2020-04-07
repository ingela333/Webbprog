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
            // hämta en specifik post ur databasen
            // formulera SQL-frågan
            $sql = "SELECT * FROM quiz_head WHERE ID = 1";
            // kör frågan
            $data = $link->query($sql);
            // hämta en rad ur svarsdatan - en array med kolumnnamn
            $row = $data->fetch_assoc();
            // spara värden
            $header = $row["header"];
            $header2 = $row["header2"];

            $i = 1;

            // Hämta många poster
            $sql = "SELECT * FROM quiz_question WHERE id = 1"; // $row["id"]
            $data = $link->query($sql);
            // loop för att hämta en rad i taget
            while($row = $data->fetch_assoc()){
                switch ($i) {
                    case 1:
                $question1 = $row["question1"];
                $answer1_1 = $row["answer1_1"];
                $answer1_2 = $row["answer1_2"];
                $answer1_3 = $row["answer1_3"];
                    case 2:
                $question2 = $row["question2"];
                $answer2_1 = $row["answer2_1"];
                $answer2_2 = $row["answer2_2"];
                $answer2_3 = $row["answer2_3"];
                    case 3:
                $question3 = $row["question3"];
                $answer3_1 = $row["answer3_1"];
                $answer3_2 = $row["answer3_2"];
                $answer3_3 = $row["answer3_3"];
                }

                $i = $i + 1;
                   
        //echo "<p>";
        //echo $row["author"], "<br>", $row["header"], "<br>", $row["category"], "<br>", $row["run"];
        //echo "</p>";
            }
            echo "<br><br>";

/*
    // Uppdatera en post
    //$sql = "UPDATE pizza SET category = 'C' WHERE ID = 6";
    //$link->query($sql);


                // Hämta många poster sorterat på category
                $sql = "SELECT * FROM quiz_head ORDER BY category, header";
                $data = $link->query($sql);

                $cat = " ";
                // loop för att hämta en rad i taget
                while($row = $data->fetch_assoc()){
                    if($row["category"] !== $cat) {              
                        echo "<h3>", $row["category"], "</h3>";  
                        $cat = $row["category"]; 
                    }

                    echo "<b>", $row["header"], "</b> ", $row["header2"], "<br>";            
                }
                echo "<br><br>";
                */

            ?>

        <!-- Form -->
          <form action="" method="POST">

            <!-- Headers -->

            <!--<div id="header1"></div>
            <div id="header2"></div> -->

            <?php
            echo "<h2>", $header, "</h2>";
            echo "<h3>", $header2, "</h3><br>";
            // echo $row["author"], "<br>", $row["header"], "<br><br>";
            ?>

            <!-- Question 1 -->

            <p>
                
                <?php
                    echo "<h5> 1. ", $question1,"</h5><br>";
                ?>

                <label>
                    <input type="radio" name="answer1_1" value="<?php echo $answer1_1; ?>"><?php echo $answer1_1; ?>
                </label><br>

                <label>
                    <input type="radio" name="answer1_2" value="<?php echo $answer1_2; ?>"><?php echo $answer1_2; ?>
                </label><br>

                <label>
                    <input type="radio" name="answer1_3" value="<?php echo $answer1_3; ?>"><?php echo $answer1_3; ?>
                </label><br><br>

            </p>

                <!-- Question 2 -->
                
                <?php
                    echo "<h5> 2. ", $question2,"</h5><br>";
                ?>

                    <label>
                    <input type="radio" name="answer2_1" value="<?php echo $answer2_1; ?>"><?php echo $answer2_1; ?>
                    </label><br>

                    <label>
                    <input type="radio" name="answer2_3" value="<?php echo $answer2_2; ?>"><?php echo $answer2_2; ?>
                    </label><br>

                    <label>
                    <input type="radio" name="answer2_3" value="<?php echo $answer2_3; ?>"><?php echo $answer2_3; ?>
                    </label><br><br>

                <!-- Question 3 -->

                <?php
                    echo "<h5> 3. ", $question3,"</h5><br>";
                    ?>

                    <label>
                    <input type="radio" name="answer3_1" value="<?php echo $answer3_1; ?>"><?php echo $answer3_1; ?>
                    </label><br>

                    <label>
                    <input type="radio" name="answer3_2" value="<?php echo $answer3_2; ?>"><?php echo $answer3_2; ?>
                    </label><br>

                    <label>
                    <input type="radio" name="answer3_3" value="<?php echo $answer3_3; ?>"><?php echo $answer3_3; ?>
                    </label><br><br>



                <!-- Test result -->


                <!-- Submit -->

                <input type="submit" value="Klar!">

                <p></p>

            </form>

            <script>
                //  var errorDiv = document.querySelector("#errorDiv");
                header1.innerHTML = "<h2>Huvudrubrik fråga?</h2>";
                header2.innerHTML = "<h3>Underrubrik</h3><br>";
                question1.innerHTML = "Fråga nr 1?<br>";
                //document.write("<h1>Hello world!</h1><br>");
            </script>

        </main>

        <aside>
            <!-- Aside -->

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