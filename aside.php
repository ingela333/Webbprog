<?php
// Hämta tabell quiz sorterat på id
$sql = "SELECT * FROM quiz ORDER BY id DESC";
$data = $link->query($sql);
            
// Punktlista av bilder 
echo "<ul style='list-style-image: url(images/q.jpg)'>";

$i = 1;
// loop för att hämta en rad i taget - max 10 st
while($row = $data->fetch_assoc() and $i<=10){                               
    $quizid = $row["ID"]; 
    echo "<li><a href='quiz.php?id=".$quizid."'><b>", $row["header"], "</b> ", $row["header2"], "</a></li><br>";
    $i += 1;
}
echo "</ul>";
?>