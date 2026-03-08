<!DOCTYPE HTML>
<html lang="en">
<head>
    <?php
    require("../parts/meta.php");
    ?>
    <title>Jeffrey Blinksma</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<?php
require("../parts/sidebar.php");
?>
<main>
    <h1>Posts</h1>
    <p class="subtitle"><i>Personal and work-related guides, notes and projects</i></p>
    <?php
        require("parts/posts.php");
    ?>
</main>
</body>
</html>
