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

    // Variabler för quiz_head  (sök UPD)
    $author = validate_data($_POST["author"]);
    $header = validate_data($_POST["header"]);
    $header2 = validate_data($_POST["header2"]);
    $category = validate_data($_POST["category"]);
    $result1 = validate_data($_POST["result1"]);
    $result2 = validate_data($_POST["result2"]);
    $result3 = validate_data($_POST["result3"]);

    // Variabler för quiz_question
    //$id = validate_data($_POST["id"]);
    $question1 = validate_data($_POST["question1"]);
    $answer1_1 = validate_data($_POST["answer1_1"]);
    $points1_1 = validate_data($_POST["points1_1"]);
    $answer1_2 = validate_data($_POST["answer1_2"]);
    $points1_2 = validate_data($_POST["points1_2"]);
    $answer1_3 = validate_data($_POST["answer1_3"]);
    $points1_3 = validate_data($_POST["points1_3"]);
    $question2 = validate_data($_POST["question2"]);
    $answer2_1 = validate_data($_POST["answer2_1"]);
    $points2_1 = validate_data($_POST["points2_1"]);
    $answer2_2 = validate_data($_POST["answer2_2"]);
    $points2_2 = validate_data($_POST["points2_2"]);
    $answer2_3 = validate_data($_POST["answer2_3"]);
    $points2_3 = validate_data($_POST["points2_3"]);
    $question3 = validate_data($_POST["question3"]);
    $answer3_1 = validate_data($_POST["answer3_1"]);
    $points3_1 = validate_data($_POST["points3_1"]);
    $answer3_2 = validate_data($_POST["answer3_2"]);
    $points3_2 = validate_data($_POST["points3_2"]);
    $answer3_3 = validate_data($_POST["answer3_3"]);
    $points3_3 = validate_data($_POST["points3_3"]);


    
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
    $sql = "INSERT INTO quiz_question (id, question1, answer1_1, points1_1, answer1_2, points1_2, answer1_3, points1_3,
    question2, answer2_1, points2_1, answer2_2, points2_2, answer2_3, points2_3, 
    question3, answer3_1, points3_1, answer3_2, points3_2, answer3_3, points3_3) 
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    // förbereder en fråga
    $sql_statement = $link->prepare($sql);

    // s = string, i = integer, d = double (float), b = blob   (sök UPD: 2 ställen $author och "s")
    // väljer vilka variabler som ? motsvarar 
    $sql_statement->bind_param("issisisissisisissisisi", $id, 
                    $question1, $answer1_1, $points1_1, $answer1_2, $points1_2, $answer1_3, $points1_3,
                    $question2, $answer2_1, $points2_1, $answer2_2, $points2_2, $answer2_3, $points2_3, 
                    $question3, $answer3_1, $points3_1, $answer3_2, $points3_2, $answer3_3, $points3_3);  

    // variabler här
    // $id = 

    // kör vår förberedda fråga
    $sql_statement->execute(); // utför den förberedda frågan
  */




    // Lägga till post i quiz, säkert sätt. (sök UPD: 2 ställen id och ?)
    $sql = "INSERT INTO quiz (id, author, header, header2, category, result1, result2, result3,
    question1, answer1_1, points1_1, answer1_2, points1_2, answer1_3, points1_3,
    question2, answer2_1, points2_1, answer2_2, points2_2, answer2_3, points2_3, 
    question3, answer3_1, points3_1, answer3_2, points3_2, answer3_3, points3_3) 
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    // förbereder en fråga
    $sql_statement = $link->prepare($sql);

    // s = string, i = integer, d = double (float), b = blob   (sök UPD: 2 ställen $author och "s")
    // väljer vilka variabler som ? motsvarar 
    $sql_statement->bind_param("isssssssssisisissisisissisisi", $id, $author, $header, $header2, $category, $result1, $result2, $result3, 
                    $question1, $answer1_1, $points1_1, $answer1_2, $points1_2, $answer1_3, $points1_3,
                    $question2, $answer2_1, $points2_1, $answer2_2, $points2_2, $answer2_3, $points2_3, 
                    $question3, $answer3_1, $points3_1, $answer3_2, $points3_2, $answer3_3, $points3_3);  

    // variabler här
    // $id = 

    // kör vår förberedda fråga
    $sql_statement->execute(); // utför den förberedda frågan


    echo "<h4>JIPPIE!!</h4>";
    echo "&nbsp;&nbsp;&nbsp; Quiz <b>", $header, " ", $header2, "</b> skapat av <b>", $author, "</b>";

?>