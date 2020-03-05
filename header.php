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
        <!-- Toppbild - huvudrubrik -->

        <h1 style="font-size: 120px">
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
        </ul>

    </nav>