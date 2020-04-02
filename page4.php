<?php
    $title = "Sida 4";
    $menuItem = 7;
    include "header.php";
?>

<div id="page" class="container">

    <main>
        <!-- Main - Välkommen -->

        <h1>
            Välkommen till Quizmani!
        </h1>

        <p>Sida 4 som testar sessioner</p>

        <form action="page4Submit.php" method="POST">
            Användarnamn: <br><input type="text" name="username" id="username"><br>
            Lösenord: <br><input type="password" name="password" id="password"><br><br>

            <input type="submit" value="Logga in">

        </form>


    </main>

    <aside>
        <!-- Aside -->

    </aside>

</div>

<?php
    include "footer.php";
?>