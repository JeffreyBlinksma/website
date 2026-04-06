<!DOCTYPE HTML>
<html lang="en">
    <head>
        <?php
        require($_SERVER['DOCUMENT_ROOT']."/parts/meta.php");
        ?>
        <meta name="title" property="og:title" content="The third test post">
        <meta name="description" property="og:description" content="The PHP code seems to be fine, but the CSS needs to be fine tuned.">
        <meta property="og:type" content="article">
        <meta name="date" property="article:published_time" content="1990-01-01">
        <title>Test post | Jeffrey Blinksma</title>
        <link rel="stylesheet" href="/assets/style.css">
    </head>
    <body>
        <?php
            require($_SERVER['DOCUMENT_ROOT']."/parts/sidebar.php");
        ?>
        <main>
            <h1>Test post</h1>
        </main>
        <footer>
            <?php
            require($_SERVER['DOCUMENT_ROOT']."/parts/footer.php");
            ?>
        </footer>
    </body>
</html>
