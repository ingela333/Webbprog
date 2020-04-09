<?php

// ta emot värdena
// echo "hej";
echo $_POST["qid"];
echo $_POST["run"];
echo $_POST["r1"]; //r1a
echo $_POST["r2"]; //r2b
echo $_POST["r3"], "<br>"; //r3c

$qid = $_POST["qid"];
$run = $_POST["run"];
$r1 = $_POST["r1"];
$r2 = $_POST["r2"];
$r3 = $_POST["r3"];




//// Anslutning till databas

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



// hämta poäng för de olika svaren
// hämta en specifik post ur databasen
// formulera SQL-frågan
$sql = "SELECT * FROM quiz WHERE ID = $qid"; //112
// kör frågan
$data = $link->query($sql);
// hämta en rad ur svarsdatan - en array med kolumnnamn
$row = $data->fetch_assoc();
            
// spara värden    
$points1_1 = $row["points1_1"];
$points1_2 = $row["points1_2"];
$points1_3 = $row["points1_3"];
$points2_1 = $row["points2_1"];
$points2_2 = $row["points2_2"];
$points2_3 = $row["points2_3"];
$points3_1 = $row["points3_1"];
$points3_2 = $row["points3_2"];
$points3_3 = $row["points3_3"];
$result1 = $row["result1"];
$result2 = $row["result2"];
$result3 = $row["result3"];
$run = $row["run"];


// Räkna ut vilket testresultat som ska visas
// alla poäng totalt
$points_tot = $points1_1 + $points1_2 + $points1_3 + $points2_1 + $points2_2 +
$points2_3 + $points3_1 + $points3_2 + $points3_3;

echo $points_tot;
/*
$points = 0;
// räkna ihop de 3 poängen
    if ($r1 = 'a') {
        $points += $points1_1; // 5
     } elseif ($r1 = 'b') {
        $points += $points1_2; // 0
     } elseif ($r1 = 'c') {
        $points += $points1_3; // 9
    }

    echo $points;

    if ($r1a = 'a') {
        $points += $points2_1;
    }
    if ($r1b = 'b') {
        $points += $points2_2;
    }
    if ($r1c = 'c') {
        $points += $points2_3;
    }
    if ($r1a = 'a') {
        $points += $points3_1;
    }
    if ($r1b = 'b') {
        $points += $points3_2;
    }
    if ($r1c = 'c') {
        $points += $points3_3;
    } */


// vilken procent för att få fram rätt testresultat att visa (0-33, 34-67, 68-100%)
 $resultx = $row["result1"];


    //// Uppdatering av databasen

    $run += 1; // addera run med 1

    // Uppdatera en post i quiz med run - hur många gånger som testet är kört
    $sql = "UPDATE quiz SET run = $run WHERE ID = 112";
    $link->query($sql);


    echo "<h4>Testresultat!</h4>";
    echo "&nbsp;&nbsp;&nbsp;<b>", $resultx, "</b>";

?>