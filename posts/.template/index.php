<!DOCTYPE HTML>
<html lang="en">
    <head>
        <?php
        require($_SERVER['DOCUMENT_ROOT']."/parts/meta.php");
        ?>
        <meta name="title" property="og:title" content="Template post">
        <meta name="description" property="og:description" content="Computer-breaking ICT consultant and student based in the Netherlands.">
        <meta property="og:type" content="article">
        <meta name="date" property="article:published_time" content="1970-01-01">
        <title>Template post | Jeffrey Blinksma</title>
        <link rel="stylesheet" href="/assets/style.css">
    </head>
    <body>
        <?php
            require($_SERVER['DOCUMENT_ROOT']."/parts/sidebar.php");
        ?>
        <main>
            <h1>Test post</h1>
            <p class="subtitle"><i>1 January 1970</i></p>
            <a href="/posts">← back to posts</a>
            <p>words words words content content content</p>
            <section>
                <h2>Comments</h2>
                <script src="https://giscus.app/client.js"
                        data-repo="JeffreyBlinksma/website"
                        data-repo-id="R_kgDORbwP2Q"
                        data-category="Comments"
                        data-category-id="DIC_kwDORbwP2c4C8RbU"
                        data-mapping="og:title"
                        data-strict="0"
                        data-reactions-enabled="1"
                        data-emit-metadata="0"
                        data-input-position="bottom"
                        data-theme="preferred_color_scheme"
                        data-lang="en"
                        data-loading="lazy"
                        crossorigin="anonymous"
                        async>
                </script>
            </section>
        </main>
        <footer>
            <?php
            require($_SERVER['DOCUMENT_ROOT']."/parts/footer.php");
            ?>
        </footer>
    </body>
</html>
