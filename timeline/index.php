<!DOCTYPE HTML>
<html lang="en">
    <head>
        <?php
            require($_SERVER['DOCUMENT_ROOT']."/parts/meta.php");
        ?>
        <title>Timeline | Jeffrey Blinksma</title>
        <link rel="stylesheet" href="/assets/style.css">
    </head>
    <body>
        <?php
            require($_SERVER['DOCUMENT_ROOT']."/parts/sidebar.php");
        ?>
        <main>
            <h1>Timeline</h1>
            <p class="subtitle"><i>Past versions of this website</i></p>

            <h2 class="ul-blue">v2 (2024 - 2026)</h2>
            <p>My first proper website. Fully handcoded with no underlying framework. Started off as a small single page, but over time multiple sections got added, like the <i>Volunteering</i> section and the <i>Music played</i> tracker, which, as my intro into JavaScript, monitored my ListenBrainz and was updated automatically when my last played track changed.</p>
            <a href="v2/"><img class="full" src="/timeline/assets/screenshot_v2.webp" alt="Screenshot of version 2" loading="lazy" style="aspect-ratio: 4/3;"></a>

            <h2 class="ul-green">v1 (ca. 2021 - 2024)</h2>
            <p>The original version of my website. This was a modified template built by HTML5 UP and adapted for my use case.</p>
            <a href="v1/"><img class="full" src="/timeline/assets/screenshot_v1.webp" alt="Screenshot of version 1" loading="lazy" style="aspect-ratio: 4/3;"></a>
        </main>
        <footer>
            <?php
                require($_SERVER['DOCUMENT_ROOT']."/parts/footer.php");
            ?>
        </footer>
    </body>
</html>
