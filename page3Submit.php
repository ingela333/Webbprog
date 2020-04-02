<?php
    /* echo $_POST["name"];
    echo $_POST["comment"];
    echo $_POST["course"]; 

    $comment = $_POST["comment"]; // spara ner värde i comment i egen variabel
    $comment = trim($comment); // tar bort tomma mellanslag och enter
    $comment = stripslashes($comment); // gör om citattecken till slashes    
    $comment = htmlspecialchars($comment)// ta bort skadlig kod med funktion 

    $comment = $_POST["comment"];*/

    // echo $comment;

    // Gör om till funktion istället för anrop för validering av varje värde
    function validate_data($data){
        $data = trim($data); // tar bort tomma mellanslag och enter
        $data = stripslashes($data); // gör om citattecken till slashes
        $data = htmlspecialchars($data); // tar bort skadlig kod 
        return $data;
    }

    $name = validate_data($_POST["name"]);
    $course = validate_data($_POST["course"]);
    $comment = validate_data($_POST["comment"]);

    echo $name, ": ", $comment;
?> 