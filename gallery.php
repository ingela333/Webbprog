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
                    <img src="images/quiz_ex1.jpg" alt="Ex 1">

                    <!-- Bildtext -->
                    <figcaption>
                        Välkommen till Quizmani! Samt sökfunktion.
                    </figcaption>

                </figure>

                <!-- Figure element 2 för bild och bildtext -->
                <figure class="item">

                    <!-- Bild -->
                    <img src="images/quiz_ex2.jpg" alt="Ex 2">

                    <!-- Bildtext -->
                    <figcaption>
                        Sökfunktion. Senast skapade quiz.
                    </figcaption>

                </figure>

                <!-- Figure element 3 för bild och bildtext -->
                <figure class="item">

                    <!-- Bild -->
                    <img src="images/quiz_ex3.jpg" alt="Ex 3">

                    <!-- Bildtext -->
                    <figcaption>
                        Testa ett quiz!
                    </figcaption>

                </figure>

                <!-- Figure element 4 för bild och bildtext -->
                <figure class="item">

                    <!-- Bild -->
                    <img src="images/quiz_ex4.jpg" alt="Ex 4">

                    <!-- Bildtext -->
                    <figcaption>
                        Skapa eget quiz (övre delen) - rubriker, frågor, svar och poäng
                    </figcaption>

                </figure>

            </div>

            <p></p>

            <div class="gallery container">
            
                <!-- Figure element 4 för bild och bildtext -->
                <figure class="item">

                <!-- Bild -->
                <img src="images/quiz_ex5.jpg" alt="Ex 5">

                <!-- Bildtext -->
                <figcaption>
                Skapa eget quiz (nedre delen) - kategori och testresultat 
                </figcaption>

                </figure>
               
                <!-- Figure element 4 för bild och bildtext -->
                <figure class="item">

                <!-- Bild -->
                <img src="images/quiz_ex6.jpg" alt="Ex 6">

                <!-- Bildtext -->
                <figcaption>
                    Alla quiz!
                </figcaption>

                </figure>

                <!-- Figure element 4 för bild och bildtext -->
                <figure class="item">

                <!-- Bild -->
                <img src="images/quiz_ex7.jpg" alt="Ex 7">

                <!-- Bildtext -->
                <figcaption>
                    Highscore!
                </figcaption>

                </figure>

                <!-- Figure element 4 för bild och bildtext -->
                <figure class="item">

                <!-- Bild -->
                <img src="images/quiz_ex8.jpg" alt="Ex 8">

                <!-- Bildtext -->
                <figcaption>
                    Senast skapade quiz!
                </figcaption>

                </figure>

            </div>

        </main>

        <aside>
            <!-- Aside -->
    
            <h4 style="margin-top: 6em" class="aside aside_gallery">
                Exempelbilder
            </h4>

            <p>
                Här finns några exempel på bilder från olika sidor här på Quizmani.
            </p>
    
        </aside>
    
    </div>

<?php
    include "footer.php";
?>