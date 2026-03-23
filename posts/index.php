<!DOCTYPE HTML>
<html lang="en">
<head>
    <?php
    require($_SERVER['DOCUMENT_ROOT']."/parts/meta.php");
    ?>
    <title>Posts | Jeffrey Blinksma</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
<?php
require($_SERVER['DOCUMENT_ROOT']."/parts/sidebar.php");
?>
<main>
    <h1>Posts</h1>
    <p class="subtitle"><i>Personal and work-related guides, notes and projects</i></p>
    <?php
        require($_SERVER['DOCUMENT_ROOT']."/parts/posts.php");
    ?>
</main>
</body>
</html>
