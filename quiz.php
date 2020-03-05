<?php
    $title = "Quizmani";
    $menuItem = 1;
    include "header.php";
?>

<div id="page" class="container">

    <main>
        <!-- Main -->

        <h1>
            Testa ett quiz!
        </h1>


        <!-- Form -->
          <form action="" method="POST">

            <!-- Headers -->

            <div id="header1"></div>
            <div id="header2"></div>

            <!-- Question 1 -->

            <p>
                <div id="question1"></div>
                <label>
                    <input type="radio" name="answer1" id="" value="answer1_1">
                    Hemsida
                </label><br>

                <label>
                    <input type="radio" name="answer1" id="" value="answer1_2">
                        Vän
                </label><br>

                <label>
                    <input type="radio" name="answer1" id="" value="answer1_3">
                        Faster i Norrland
                </label><br><br>

            </p>

                <!-- Question 2 -->

                <p>
                    <div id="question2"></div>
                    <label>
                        <input type="radio" name="answer2" id="" value="answer2_1">
                        Svar 1
                    </label><br>

                    <label>
                        <input type="radio" name="answer2" id="" value="answer2_2">
                        Svar 2
                    </label><br>

                    <label>
                        <input type="radio" name="answer2" id="" value="answer2_3">
                        Svar 3
                    </label><br><br>

                </p>

                <!-- Question 3 -->

                <p>
                    <div id="question3"></div>
                    <label>
                        <input type="radio" name="answer3" id="" value="answer3_1">
                        Svar 1
                    </label><br>

                    <label>
                        <input type="radio" name="answer3" id="" value="answer3_2">
                        Svar 2
                    </label><br>

                    <label>
                        <input type="radio" name="answer3" id="" value="answer3_3">
                        Svar 3
                    </label><br><br>

                </p>


                <!-- Test result -->


                <!-- Submit -->

                <input type="submit" value="Klar!">

                <p></p>

            </form>

            <script>
                //  var errorDiv = document.querySelector("#errorDiv");
                header1.innerHTML = "<h2>Huvudrubrik fråga?</h2>";
                header2.innerHTML = "<h3>Underrubrik</h3><br>";
                question1.innerHTML = "Fråga nr 1?<br>";
                //document.write("<h1>Hello world!</h1><br>");
            </script>

        </main>

        <aside>
            <!-- Aside -->

            <h4>Senast skapade quiz</h4>

            <p>
                <ol>
                    <li>Lorem, ipsum.</li>
                    <li>Lorem, ipsum dolor.</li>
                    <li>Lorem.</li>
                </ol>


            </p>

        </aside>

        <?php
    include "footer.php";
?>