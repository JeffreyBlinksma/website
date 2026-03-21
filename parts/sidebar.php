<aside>
    <section>
        <h1>Jeffrey Blinksma</h1>
    </section>
    <?php
//    <section>
//        <h2>About me</h2>
//        <p>
//            I'm Jeff. I'm currently an <i>ICT Consultant</i> based in the Netherlands, implementing and maintaining diverse types of network environments.
//        </p>
//    </section>
    ?>
    <section>
        <nav>
            <a href="/">Home</a>
            <a href="/about/">About me</a>
            <a href="/posts/">Posts</a>
            <a href="/gear/">Gear</a>
            <a href="/visited/">Places visited</a>
            <?php
            // <a href="">Timeline</a>
            ?>
        </nav>
    </section>
    <section class="footer">
        v3.0.1 | <?php
            if (file_exists($_SERVER['DOCUMENT_ROOT']."/.deploy-revision")) {
                $hash = file_get_contents($_SERVER['DOCUMENT_ROOT']."/.deploy-revision");
                echo substr($hash, 0, 7);
            } else {
                echo "No commit hash (running local?)";
            }
        ?>
    </section>
</aside>
