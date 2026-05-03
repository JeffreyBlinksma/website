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
            <p>Much of the previously mentioned issues also play at my home. Although I do have access to cable internet, it follows the same path as my fibre line. Any digging activity that'd damage this is also likely to damage my cable internet line. VDSL has the same issue, never mind the fact that because my local loop is 4+ km long, I can only get 9/3 Mbps at best, which, for my usecase, is just straight up unacceptable.</p>
            <p>Because of the good experiences that I've had at work with this offer, I decided to order their consumer offering for use at home. Because one of my family members has a subscription at one of Odido's subsidiaries, I actually get a €5 discount, which means it actually only costs me €21 a month. For reference, I pay more for my normal cell service (although that's due to other reasons). Two days later, a box showed up with everything that's needed to get started with Odido Klik&Klaar, namely a Zyxel NR5307 and a SIM-card with the subscription preloaded on it. All I had to do was put the SIM card in, place it near a window and plug it in. After waiting a minute or two for it to boot up, I could connect an Ethernet cable and access the internet. Now the fun can begin.</p>
            <p>The first thing I did was log into the modem and disable the built-in Wi-Fi. Because I'm going to be using this in front of an existing network, my existing access points will be just fine. Because the NR5307 doesn't actually support passing through the WAN IP address, I'm stuck with NAT-in-NAT. This is fine for me, as long as I can pass through my web-based applications, since my PBX is hosted off-site. To make sure this is possible, the first thing I did was change the internal subnet to something that's less likely to overlap with networks that I have to interconnect with. To make sure that my port forwards still work properly, I placed my router in the DMZ. The DMZ on the NR5307 is IP based, so to make sure that this doesn't change, I gave my router a static IP address. This all takes care of being able to reach my services from the 5G uplink.</p>
        </main>
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
        <footer>
            <?php
            require($_SERVER['DOCUMENT_ROOT']."/parts/footer.php");
            ?>
        </footer>
    </body>
</html>
