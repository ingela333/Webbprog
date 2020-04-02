<?php
    $title = 'Sida 5';
    $menuItem = 8;
    include 'header.php';
?>

<p>Det här är sida 5 med databas!</p>

<?php
    $server = "localhost"; // ansluta till server, vår dator
    $username = "ingela333"; // "johannes"; 
    $password = "phpmyadmin,01"; // "losenord1";
    $db = "ingela333"; // "johannes";

    // skapa kontakt med databas
    $link = new mysqli($server, $username, $password, $db);

    // testa kontakten - om det finns något fel: skriv ut felet
    if ($link->connect_error){
        echo $link->connect_error;
        exit;
    }
    // kommer ni hit i koden så fungerar databaskontakten!

    // hämta en specifik post ur databasen
    // formulera SQL-frågan
    $sql = "SELECT * FROM quiz_head WHERE ID = 1";
    // kör frågan
    $data = $link->query($sql);
    // hämta en rad ur svarsdatan - en array med kolumnnamn
    $row = $data->fetch_assoc();
    // testa att skriva ut ett värde
    echo "<h3>Skriv ut en post</h3>";
    echo $row["author"], "<br>", $row["header"], "<br><br>";


    // Hämta många poster
    // Hämta utan sortering
    //$sql = "SELECT * FROM pizza";
    // Hämta med flera val och sortering ASC/DESC
    //$sql = "SELECT * FROM pizza" WHERE price = 80 AND category = ”B” ORDER BY name DESC";
    // Hämta med sortering
    $sql = "SELECT * FROM quiz_head ORDER BY category";
    $data = $link->query($sql);
    // loop för att hämta en rad i taget
    echo "<h3>Skriv ut flera poster</h3>";
    while($row = $data->fetch_assoc()){
        echo "<p>";
        echo $row["author"], "<br>", $row["header"], "<br>", $row["category"], "<br>", $row["run"];
        echo "</p>";
    }
    echo "<br><br>";


    // Uppdatera en post
    //$sql = "UPDATE pizza SET category = 'C' WHERE ID = 6";
    //$link->query($sql);

    // Ta bort en post
    //$sql = "DELETE FROM pizza WHERE ID = 6";
    //$link->query($sql);

    // Lägga till en post, osäkert sätt
    //$sql = "INSERT INTO pizza (name, topping, category, price) VALUES ('Johannes special', 'Jalapeno, köttfärs', 'B', 85)";
    //$link->query($sql);



    // Lägga till post, säkert sätt. Från en besökare tex.
    //$sql = "INSERT INTO pizza (name, topping, category, price) VALUES (?,?,?,?)";

    // förbereder en fråga
    //$sql_statement = $link->prepare($sql);

    // s = string, i = integer, d = double (float), b = blob
    // väljer vilka variabler som ? motsvarar
    //$sql_statement->bind_param("sssi", $name, $topping, $category, $price); // "sssi" = string, string, string, integer
    
    // sätt variablerna
    //$name = 'Johannes special 2';
    //$topping = 'Jalepeno, tacosås';
    //$category = 'B';
    //$price = 90;

    // kör vår förberedda fråga
    //$sql_statement->execute(); // utför den förberedda frågan
?>



<?php
    include 'footer.php';
?>