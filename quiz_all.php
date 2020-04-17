<?php
    $title = "Quizmani";
    $menuItem = 3;
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

?>

    <div id="page" class="container">

        <main>
            <!-- Main - Välkommen -->

            <h1>
                Alla quiz!
            </h1>

            <?php
                // Hämta många poster sorterat på category
                $sql = "SELECT * FROM quiz ORDER BY category, header";
                $data = $link->query($sql);

                $cat = " ";
                // loop för att hämta en rad i taget
                while($row = $data->fetch_assoc()){
                    if($row["category"] !== $cat) {              
                        echo "<br><h4>", $row["category"], "</h4>";  
                        $cat = $row["category"]; 
                    }
                    $quizid = $row["ID"];
                    echo "<a href='quiz.php?id=".$quizid."'><b>", $row["header"], "</b> ", $row["header2"], "</a><br>";
                }
                echo "<br><br>";

            ?>
        
        </main>

        <aside>
            <!-- Aside -->

        </aside>

    </div>

<?php
    include "footer.php";
?>