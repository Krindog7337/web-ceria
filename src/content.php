<?php

$navbar = "../src/pages/navbar.php";

$footer = "../src/pages/footer.php";

if (empty($_GET['p'])) {
    $content = "../src/pages/home.php";
} elseif ($_GET['p'] == 'quiz') {
    $content = "../src/pages/quiz.php";
} elseif ($_GET['p'] == 'video') {
    $content = "../src/pages/video.php";
} elseif ($_GET['p'] == 'article') {
    $content = "../src/pages/article.php";
} elseif ($_GET['p'] == 'about') {
    $content = "../src/pages/about.php";
} elseif ($_GET['p'] == 'ai') {
    $content = "../src/pages/ai.php";
}