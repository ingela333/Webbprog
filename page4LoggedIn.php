<?php
    // sessionen ska starta, läggs på varje sida 
    // för att se att användaren har rätt att vara på den här sidan
    session_start();

    // Om man skriver Page4LoggedIn.php direkt i länken så kommer man till Page 4 man ej är behörig!
    // kolla att INTE session är satt (is set), eller INTE = true
    if (!isset($_SESSION["logged_in"]) or $_SESSION["logged_in"] !== true){
        // ej behörig att vara på denna sida - skicka tillbaka till page 4
        header("location: page4.php");
        exit; // avbryt hela kodkörandet
    }

    $title = 'Sida 4 inloggad';
    $menuItem = 7;
    include 'header.php';
?>

<p>Det här är sida 4 som kräver inloggning!</p>
<a href="page4Logout.php">Logga ut</a>

<?php
    include 'footer.php';
?>