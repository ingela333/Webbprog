<!DOCTYPE html>
<html lang="sv">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="styles/style.css"> 
    <link href="https://fonts.googleapis.com/css?family=Marck+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat+Brush&display=swap" rel="stylesheet">

<style>

    nav ul li a.active {
        color: lightyellow;
    }

</style>

</head>

<body>

  <header>  
 <!--   <header style="background-image: url(images/bg2.jpg)"> -->
    
        <!-- Toppbild - huvudrubrik -->

        <h1 style="font-size: 100px">
            <a href="index.php">QUIZMANI</a>
        </h1>

    </header>

    <nav>
        <!-- Toppmeny - navigation till olika sidor -->

        <ul>
            <li><a href="quiz.php" <?php if ($menuItem == 1){ echo 'class="active"'; } ?>>Quiz</a></li>
            <li>|</li>
            <li><a href="quiz_create.php" <?php if ($menuItem == 2){ echo 'class="active"'; } ?>>Skapa quiz</a></li>
            <li>|</li>
            <li><a href="quiz_all.php" <?php if ($menuItem == 3){ echo 'class="active"'; } ?>>Alla quiz</a></li>
            <li>|</li>
            <li><a href="highscore.php" <?php if ($menuItem == 4){ echo 'class="active"'; } ?>>Highscore</a></li>
            <li>|</li>
            <li><a href="gallery.php" <?php if ($menuItem == 5){ echo 'class="active"'; } ?>>Galleri</a></li>
            <li>|</li>
            <li><a href="page3.php" <?php if ($menuItem == 6){ echo 'class="active"'; } ?>>Sida 3</a></li>
            <li>|</li>
            <li><a href="page4.php" <?php if ($menuItem == 7){ echo 'class="active"'; } ?>>Sida 4</a></li>
            <li>|</li>
            <li><a href="page5.php" <?php if ($menuItem == 8){ echo 'class="active"'; } ?>>Sida 5</a></li>
            <li>|</li>
            <li><a href="search.php" <?php if ($menuItem == 9){ echo 'class="active"'; } ?>>Sök quiz</a></li>

       </ul>

    </nav>