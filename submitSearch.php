<?php

// ta emot värdena
//echo "hej";
//echo $_POST["keyword"];
//echo $_POST["category"];


//// Validering data innan uppdatering i db
function validate_data($data){
    $data = trim($data); // tar bort tomma mellanslag och enter
    $data = stripslashes($data); // gör om citattecken till slashes
    $data = htmlspecialchars($data); // tar bort skadlig kod 
    return $data;
}


$keyword = validate_data($_POST["keyword"]);
//$category = $_POST["category"];



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

$keyword = trim ($_POST['keyword']);

// Sökning på tabell quiz
// Hämta många poster med keyword (ORDER BY header => Fatal error: Uncaught error)
$sql = "SELECT * FROM quiz WHERE header LIKE '%$keyword%' or header2 LIKE '%$keyword%' or author LIKE '%$keyword%'";

$data = $link->query($sql);

echo "<br><br>";

// Visa rubrik
echo "<table>", "<thead>", "<tr>";

// Visa tabellraders rubriker
echo "<th>Quiz</th>";
echo "<th>Skapare</th>";
echo "<th>Kategori</th>";
echo "<th>Kört antal gånger</th>";
echo "</tr>"; "</thead>"; // Avslut tabellrad
            
// loop för att hämta en rad i taget
while($row = $data->fetch_assoc()){
    // spara id till "a href" för att hämta i quiz.php                               
    $quizid = $row["ID"]; 

    echo "<tr>";
    echo "<td><a href='quiz.php?id=".$quizid."'><b>", $row["header"], "</b> ", $row["header2"], "</a></td>";
    echo "<td>", $row["author"], "</td>";
    echo "<td>", $row["category"], "</td>";
    echo "<td>", $row["run"], "</td>";  
    echo "<tbody>", "<tr>";
}

// Avslut tabell
echo "</tbody>", "</table>";
echo "<br><br>";

?>