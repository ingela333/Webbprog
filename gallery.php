<?php
    $title = "Quizmani";
    $menuItem = 5;
    include "header.php";
?>

    <div id="page" class="container">

        <main>
            <!-- Main - Galleri med bilder -->

            <h1>Galleri</h1>

            <!-- Div-element för ett galleri -->
            <div class="gallery container">

                <!-- Figure element 1 för bild och bildtext -->
                <figure class="item">

                    <!-- Bild -->
                    <img src="images/quiz_ex1.PNG" alt="Ex 1">

                    <!-- Bildtext -->
                    <figcaption>
                        Exempel 1
                    </figcaption>

                </figure>

                <!-- Figure element 2 för bild och bildtext -->
                <figure class="item">

                    <!-- Bild -->
                    <img src="images/quiz_ex2.PNG" alt="Ex 2">

                    <!-- Bildtext -->
                    <figcaption>
                        Exempel 2
                    </figcaption>

                </figure>

                <!-- Figure element 3 för bild och bildtext -->
                <figure class="item">

                    <!-- Bild -->
                    <img src="images/quiz_ex3.PNG" alt="Ex 3">

                    <!-- Bildtext -->
                    <figcaption>
                        Exempel 3
                    </figcaption>

                </figure>

                <!-- Figure element 4 för bild och bildtext -->
                <figure class="item">

                    <!-- Bild -->
                    <img src="images/quiz_ex4.PNG" alt="Ex 4">

                    <!-- Bildtext -->
                    <figcaption>
                        Exempel 4
                    </figcaption>

                </figure>

            </div>

        </main>

        <aside>
                <!-- Aside -->
    
                <h4 style="margin-top: 6em" class="aside aside_gallery">
                    Exempelbilder på att skapa quiz</h4>
    
            </aside>
    
    </div>

<?php
    include "footer.php";
?>