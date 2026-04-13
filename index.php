<!DOCTYPE HTML>
<html lang="en">
    <head>
        <?php
            require($_SERVER['DOCUMENT_ROOT']."/parts/meta.php");
        ?>
        <meta property="og:title" content="Jeffrey Blinksma">
        <meta property="og:description" content="Computer-breaking ICT consultant and student based in the Netherlands.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://jeffrey.blinksma.eu/">
        <meta property="profile:first_name" content="Jeffrey">
        <meta property="profile:last_name" content="Blinksma">
        <meta property="profile:name" content="Jeffrey Blinksma">
        <script type="application/ld+json">
            {
                "@context": "http://schema.org/",
                "@type": "Person",
                "name": "Jeffrey Blinksma",
                "url": "https://jeffrey.blinksma.eu",
                "sameAs": [
                    "https://glauca.space/@jeffreyblinksma",
                    "https://linkedin.com/in/jeffreyblinksma",
                    "https://github.com/JeffreyBlinksma"
                ]
            }
        </script>
        <title>Jeffrey Blinksma</title>
        <link rel="stylesheet" href="/assets/style.css">
    </head>
    <body>
        <?php
            require($_SERVER['DOCUMENT_ROOT']."/parts/sidebar.php");
        ?>
        <main>
            <h1>Hi! I'm Jeff.</h1>
            <p class="subtitle">I'm currently an <i>ICT Consultant</i> based in the Netherlands.</p>
            <p>Outside of that I spend my time working on, with and breaking computers, reading about financial crises, expanding my ever-growing digital music library, getting platinum trophies in games, automating my house and making stupid little computer programs.</p>
            
            <div class="twocolumn">
                <div>
                    <h2>Posts</h2>
                    <h3>Personal and work-related guides, notes and projects</h3>
                    <?php
                        require($_SERVER['DOCUMENT_ROOT']."/parts/posts.php");
                    ?>
                </div>
                
                <div class="coverbox" aria-hidden="true">
                    <?php
                        $art = array_diff(scandir($_SERVER['DOCUMENT_ROOT'].'/assets/coverart'), array('..', '.', '.gitignore'));
                        shuffle($art);
                        foreach ($art as $file) {
                            echo "<img src='/assets/coverart/".$file."' alt='' loading='lazy'>";
                        }
                    ?>
                </div>
            </div>
        </main>
        <footer>
            <?php
                require($_SERVER['DOCUMENT_ROOT']."/parts/footer.php");
            ?>
        </footer>
    </body>
</html>
