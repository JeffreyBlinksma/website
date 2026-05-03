<!DOCTYPE HTML>
<html lang="en">
    <head>
        <?php
        require($_SERVER['DOCUMENT_ROOT']."/parts/meta.php");
        ?>
        <meta name="title" property="og:title" content="Failover internet at home">
        <meta name="description" property="og:description" content="Computer-breaking ICT consultant and student based in the Netherlands.">
        <meta property="og:type" content="article">
        <meta name="date" property="article:published_time" content="2026-05-03">
        <title>Failover internet at home | Jeffrey Blinksma</title>
        <link rel="stylesheet" href="/assets/style.css">
    </head>
    <body>
        <?php
            require($_SERVER['DOCUMENT_ROOT']."/parts/sidebar.php");
        ?>
        <main>
            <h1>Failover internet at home</h1>
            <p class="subtitle"><i>3 May 2026</i></p>
            <a href="/posts">← back to posts</a>
            <p>Although I have a very stable <abbr title="Fibre to the Home">FttH</abbr> internet connection, outages are sadly unavoidable. My current primary provider has been great on this front, with me only having 2 provider-side outages in the last two years. Sadly, due to the subpar positioning of the underground cabling in my area, cable breaks tend to happen almost every time that construction work goes on in my area. Solely due to this, we've had multiple hours-long outages in the last year. Because we have a resurfacing of the entire street coming up soon, this would be a great occasion to finally set up a proper backup internet connection.</p>
            <p>A second factor in the decision to install a failover internet connection is the composition of my household. Sure, for most people on the more tech-literate side of the spectrum, turning on a hotspot on your phone and connecting an Apple TV to it isn't that difficult. Sadly, due to disability, this just isn't realistic for all members of my household. Coming home after a long day of work and having the internet and television not working is also just not a great experience.</p>
            <p>Having two internet uplinks for an occasional outage sounds expensive, and it generally can be. A customer at work recently put forward this case to me. They were having the same problems at their headquarters, having had multiple fibre breaks in the last year, each lasting multiple days until their internet service was recovered. For a home internet connection, this is irritating, to say the least. For a transport company, this means an enormous profit loss.</p>
            <p>Careful consideration has to be taken when picking a backup internet uplink. Take my customer for example: they are located in an industrial estate, which generally means that our options are generally limited to either very expensive or old technologies. Cable internet, for example, generally isn't available in industrial estates in the Netherlands. <abbr title="Fibre to the Home">FttH</abbr> availability depends on the estate, and is in use as the primary internet uplink already. <abbr title="(Bonded) (Vectored) Very high-speed Digital Subscriber Line 2">(B)(V)VDSL2</abbr> is nearly ubiquitous in the Netherlands, <a href="https://web.archive.org/web/20260503200901/https://www.kpn.com/glasvezelnetwerk/alles-over-glasvezel/glasvezel-vervangt-koper">but is slowly getting decommissioned</a>, and quickly falls off speed-wise with longer local loops. <abbr title="Fibre to the Office">FttO</abbr> is almost always an option, is generally ran deeper in the ground and has a much better SLA, but is also much more expensive and (generally) still has the same single point of failure risks that cheaper connections also have. One of our service providers also provide managed 5G solutions, but these are also quite costly.</p>
            <p>After digging through said service provider's portfolio some more, I discovered that <span class="tooltip" title="Formerly T-Mobile Netherlands">Odido</span> has a cheap <abbr title="Fixed Wireless Access">FWA</abbr> offer based on the lesser-used parts of their 5G cellular network. Although this offer has significant drawbacks for a corporate setting (dynamic IP that changes every 24 hours, limited selection of available ports, very specific modem requirements), it's a fair trade-off compared to the price, with it being €27,50 per month for businesses, and €26,- for personal use. Speeds obviously tends to vary based on reception, having personally seen it vary from 100/30 Mbps at 1.5km from a tower with an indoor modem and no LoS, to 700/100 at 100m from a tower with an outdoor modem and with LoS (rated speed is 300/30).</p>
        </main>
        <footer>
            <?php
            require($_SERVER['DOCUMENT_ROOT']."/parts/footer.php");
            ?>
        </footer>
    </body>
</html>
