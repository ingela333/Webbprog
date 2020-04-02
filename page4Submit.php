<?php
    if (empty($_POST["username"]) or empty($_POST["password"])){
        echo "Du har glömt fylla i något värde";
        exit;
    }

    if ($_POST["username"] == "ingela" and $_POST["password"] == "ingela"){
        //echo "Rätt inloggning";
        // sessionen ska starta, läggs på varje sida 
        // för att se att användaren har rätt att vara på den här sidan
        session_start(); 
        $_SESSION["logged_in"] = true; // sparad på servern, ej användarens webbfönster
        header("location: page4LoggedIn.php"); // skicka användaren vidare
        exit;
    } else {
        echo "Fel inloggning";
    }
?>