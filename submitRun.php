<?php

// ta emot värdena
// echo "hej";
// echo $_POST["qid"];
// echo $_POST["run"];
// echo $_POST["r1"]; //r1a
// echo $_POST["r2"]; //r2b
// echo $_POST["r3"], "<br>"; //r3c

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



//// Räkna ut resultat för de olika svaren

/// hämta en specifik post ur databasen

// formulera SQL-frågan
$sql = "SELECT * FROM quiz WHERE ID = $qid"; //112
// kör frågan
$data = $link->query($sql);
// hämta en rad ur svarsdatan - en array med kolumnnamn
$row = $data->fetch_assoc();
            
// spara värden    
$points1a = $row["points1a"];
$points1b = $row["points1b"];
$points1c = $row["points1c"];
$points2a = $row["points2a"];
$points2b = $row["points2b"];
$points2c = $row["points2c"];
$points3a = $row["points3a"];
$points3b = $row["points3b"];
$points3c = $row["points3c"];
$result1 = $row["result1"];
$result2 = $row["result2"];
$result3 = $row["result3"];
$run = $row["run"];


/// Räkna ut vilket testresultat som ska visas

// högsta poäng för varje fråga
$high1 = max($points1a, $points1b, $points1c);
$high2 = max($points2a, $points2b, $points2c);
$high3 = max($points3a, $points3b, $points3c);

// räkna förhållandet mellan poängen och högsta poäng för varje fråga
// fråga 1
$points = 0;

switch ($r1) {
    case 'r1a':
        $ratio1 = $points1a / $high1; // 5/9
        //echo $points;
    break;   

    case 'r1b':
        $ratio1 = $points1b / $high1; // 0/9
    break;   

    case 'r1c':
        $ratio1 = $points1c / $high1; // 9/9
    break;   
}

// fråga 2
$points = 0;

switch ($r2) {
    case 'r2a':
        $ratio2 = $points2a / $high2; // 5/9
        //echo $points;
    break;   
 
    case 'r2b':
        $ratio2 = $points2b / $high2; // 9/9
    break;   

    case 'r2c':
        $ratio2 = $points2c / $high2; // 0/9
    break;   
}

// fråga 3
$points = 0;

switch ($r3) {
    case 'r3a':
        $ratio3 = $points3a / $high3; // 3/7
        //echo $points;
    break;   

    case 'r3b':
        $ratio3 = $points3b / $high3; // 7/7
    break;   

    case 'r3c':
        $ratio3 = $points3c / $high3; // 5/7
    break;   
}

// alla frågors totala förhållandet av alla poäng
$ratio = ($ratio1 + $ratio2 + $ratio3) / 3;

// visa testresultat beroende på totala förhållande (proc: 0-33, 34-67, 68-100%)

if ($ratio<=0.33) {
    $resultx = $row["result1"];   

} else if ($ratio<=0.67) {
    $resultx = $row["result2"];   

} else {
    $resultx = $row["result3"];   
   
}

   


    //// Uppdatering av databasen

    $run += 1; // addera run med 1

    // Uppdatera en post i quiz med run - hur många gånger som testet är kört
    $sql = "UPDATE quiz SET run = $run WHERE ID = 112";
    $link->query($sql);


    echo "<h4>Testresultat!</h4>";
    echo "&nbsp;&nbsp;&nbsp;<b>", $resultx, "</b>";

?>