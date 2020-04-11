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