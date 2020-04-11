<?php 

 //   echo $_POST["header"];  // ta emot värdena i name (ej id som i GetElementId), skriv på skärm
 //   echo $_POST["header2"];
 //   echo $_POST["question1"];	// i select option är det value

//// Validering data innan uppdatering i db
    function validate_data($data){
        $data = trim($data); // tar bort tomma mellanslag och enter
        $data = stripslashes($data); // gör om citattecken till slashes
        $data = htmlspecialchars($data); // tar bort skadlig kod 
        return $data;
    }

    // Variabler för quiz (tidigare quiz_head)  (sök UPD)
    $author = validate_data($_POST["author"]);
    $header = validate_data($_POST["header"]);
    $header2 = validate_data($_POST["header2"]);
    $category = validate_data($_POST["category"]);
    $result1 = validate_data($_POST["result1"]);
    $result2 = validate_data($_POST["result2"]);
    $result3 = validate_data($_POST["result3"]);

    // Variabler för quiz (tidigare quiz_question)
    //$id = validate_data($_POST["id"]);
    $question1 = validate_data($_POST["question1"]);
    $answer1a = validate_data($_POST["answer1a"]);
    $points1a = validate_data($_POST["points1a"]);
    $answer1b = validate_data($_POST["answer1b"]);
    $points1b = validate_data($_POST["points1b"]);
    $answer1c = validate_data($_POST["answer1c"]);
    $points1c = validate_data($_POST["points1c"]);
    $question2 = validate_data($_POST["question2"]);
    $answer2a = validate_data($_POST["answer2a"]);
    $points2a = validate_data($_POST["points2a"]);
    $answer2b = validate_data($_POST["answer2b"]);
    $points2b = validate_data($_POST["points2b"]);
    $answer2c = validate_data($_POST["answer2c"]);
    $points2c = validate_data($_POST["points2c"]);
    $question3 = validate_data($_POST["question3"]);
    $answer3a = validate_data($_POST["answer3a"]);
    $points3a = validate_data($_POST["points3a"]);
    $answer3b = validate_data($_POST["answer3b"]);
    $points3b = validate_data($_POST["points3b"]);
    $answer3c = validate_data($_POST["answer3c"]);
    $points3c = validate_data($_POST["points3c"]);

    
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

 



    //// Uppdatering av databasen

/*
    //$link->begin_transaction();
    // Lägga till en post, osäkert sätt
    $sql = "INSERT INTO quiz_head (author, header, header2, category, result1, result2, result3) 
            VALUES ('$author', '$header', '$header2', '$category', '$result1', '$result2','$result3')";
    $link->query($sql);

    if ($link->query($sql) === TRUE) { // $link->query($sql)
        $id = $link->insert_id; // last_id
      echo "New record created successfully. Last inserted ID is: " . $id;
    } else {
        echo "Error: " . $sql . "<br>" . $link->error;
    }

    //$sql_statement->commit();


?>

<?php
    //$stmt = $this->conn->prepare("INSERT INTO users(userName,userEmail,userPass)  VALUES(?,?,?);");
    //$sonuc = $stmt->execute([$username,$email,$pass]);
    //$LAST_ID = $this->conn->lastInsertId();


    // Lägga till post i quiz_head, säkert sätt. Från en besökare tex.  (sök UPD: 2 ställen author och ?)
    $sql = "INSERT INTO quiz_head (author, header, header2, category, result1, result2, result3) VALUES (?,?,?,?,?,?,?)";


    // förbereder en fråga
    $sql_statement = $link->prepare($sql);

    // s = string, i = integer, d = double (float), b = blob   (sök UPD: 2 ställen $author och "s")
    // väljer vilka variabler som ? motsvarar 
    $sql_statement->bind_param("sssssss", $author, $header, $header2, $category, $result1, $result2, $result3);  // $run,

    //$run = 0;
 
    // kör vår förberedda fråga
    $sql_statement->execute(); // utför den förberedda frågan



    // Lägga till post i quiz_question, säkert sätt. (sök UPD: 2 ställen id och ?)
    $sql = "INSERT INTO quiz_question (id, question1, answer1a, points1a, answer1b, points1b, answer1c, points1c,
    question2, answer2a, points2a, answer2b, points2b, answer2c, points2c, 
    question3, answer3a, points3a, answer3b, points3b, answer3c, points3c) 
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    // förbereder en fråga
    $sql_statement = $link->prepare($sql);

    // s = string, i = integer, d = double (float), b = blob   (sök UPD: 2 ställen $author och "s")
    // väljer vilka variabler som ? motsvarar 
    $sql_statement->bind_param("issisisissisisissisisi", $id, 
                    $question1, $answer1a, $points1a, $answer1b, $points1b, $answer1c, $points1c,
                    $question2, $answer2a, $points2a, $answer2b, $points2b, $answer2c, $points2c, 
                    $question3, $answer3a, $points3a, $answer3b, $points3b, $answer3c, $points3c);  

    // variabler här
    // $id = 

    // kör vår förberedda fråga
    $sql_statement->execute(); // utför den förberedda frågan
  */




    // Lägga till post i quiz, säkert sätt. (sök UPD: 2 ställen id och ?)
    $sql = "INSERT INTO quiz (id, author, header, header2, category, result1, result2, result3,
    question1, answer1a, points1a, answer1b, points1b, answer1c, points1c,
    question2, answer2a, points2a, answer2b, points2b, answer2c, points2c, 
    question3, answer3a, points3a, answer3b, points3b, answer3c, points3c) 
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    // förbereder en fråga
    $sql_statement = $link->prepare($sql);

    // s = string, i = integer, d = double (float), b = blob   (sök UPD: 2 ställen $author och "s")
    // väljer vilka variabler som ? motsvarar 
    $sql_statement->bind_param("isssssssssisisissisisissisisi", $id, $author, $header, $header2, $category, $result1, $result2, $result3, 
                    $question1, $answer1a, $points1a, $answer1b, $points1b, $answer1c, $points1c,
                    $question2, $answer2a, $points2a, $answer2b, $points2b, $answer2c, $points2c, 
                    $question3, $answer3a, $points3a, $answer3b, $points3b, $answer3c, $points3c);  

    // variabler här
    // $id = 

    // kör vår förberedda fråga
    $sql_statement->execute(); // utför den förberedda frågan


    echo "<h4>JIPPIE!!</h4>";
    echo "&nbsp;&nbsp;&nbsp; Quiz <b>", $header, " ", $header2, "</b> skapat av <b>", $author, "</b>";

?>