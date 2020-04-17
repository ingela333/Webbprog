<?php
    $title = "Quizmani - highscore";
    $menuItem = 4;
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
            Highscore!
        </h1>

        <?php
            // Hämta tabell quiz sorterat på antal gånger DESC
            $sql = "SELECT * FROM quiz ORDER BY run DESC";
            $data = $link->query($sql);
            
            // Visa rubrik
            echo "<h3>Quiz som har testats flest gånger</h3>";                        
            echo "<table>", "<thead>", "<tr>";

            // Visa tabellraders rubriker
            echo "<th>Rank</th>";
            echo "<th>Quiz</th>";
            echo "<th>Skapare</th>";
            echo "<th>Kategori</th>";
            echo "<th>Antal</th>";
            echo "</tr>"; "</thead>"; // Avslut tabellrad
            
            $rank = 1;
            // loop för att hämta en rad i taget - max 50 st
            while($row = $data->fetch_assoc() and $rank<=50){  
                $quizid =  $row["ID"];                            
                echo "<tbody>", "<tr>";
                echo "<td><i>", $rank, "</i></td>";
                echo "<td><a href='quiz.php?id=".$quizid."'><b>", $row["header"], "</b> ", $row["header2"], "</a></td>";
                echo "<td>", $row["author"], "</td>";
                echo "<td>", $row["category"], "</td>";
                echo "<td>", $row["run"], "</td>";
                echo "</tr>";
                $rank = $rank + 1;
            }
            
            // Avslut tabell
            echo "</tbody>", "</table>";

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