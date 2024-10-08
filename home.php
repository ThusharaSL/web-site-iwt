<?php

require_once 'includes/db-config.php';

$title = "Home - Gaxios";
include 'components/header.php';
?>

<div class="home">
<section class="hero-overlay">
    <div class="hero">
    <div class="container hero-text-container">
        <h1 class="hero-txt">We have helped 300+ brands across 10 countries, achieve Digital Success</h1>
        <a href="contact-us.php"><button class="btn-primary">TALK TO US</button></a>
    </div>
    </div>
</section>

<!--Who we are section-->
<section class="section-padding">
    <div>
        <div class="container">
            <div class="hero-content flex justify-between items-c  enter column-wrapper items-center">
                <div class="column-item">
                    <h2 class="hero-title">Who we are</h2>
                    <p class="hero-text">We are a multidisciplinary digital marketing agency, consulting studio and creative production house based in Colombo. Being a hybrid between a traditional advertising agency and a digital media agency, we follow a creative approach that revolves around data driven insights to power ROI effective executions. Our way of thinking creates value in our interactions with all our stake holders and gets us to our most creative, exciting and effective work</p>
                </div>
                <div class="column-item" style="height: 400px; border-radius: 5px; background: #cfcece">
                    <div class="image-holder img-1"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--section seperator title-->
<section class="section-padding">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="hero-title">What we do</h2>
            <p>What are the areas we have experience</p>
        </div>
    </div>
</section>

<!--Branding and Identity Exploration section-->
<section class="section-padding">
    <div>
        <div class="container">
            <div class="hero-content flex justify-between items-center column-wrapper">
                <div class="column-item" style="height: 400px; border-radius: 5px; background: #cfcece">
                    <div class="image-holder img-2"></div>
                </div>
                <div class="column-item">
                    <h2 class="hero-title">Branding and Identity Exploration</h2>
                    <p class="hero-text">The fundamental of any successful business is a story with a carefully curated message that positions you to the right target market. We use data and insights coupled with creative developments for this purpose.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Paid Media & Inbound Campaigns section-->
<section class="section-padding">
    <div>
        <div class="container">
            <div class="hero-content flex justify-between items-center column-wrapper">
                <div class="column-item">
                    <h2 class="hero-title">Paid Media & Inbound Campaigns</h2>
                    <p class="hero-text">Our outreach campaigns can be classified into 2 main categories:
                        Inbound Marketing campaigns to rank your business organically on Search Engines
                        Paid Campaigns to get your business out there through Paid Search and Paid Social.</p>
                </div>
                <div class="column-item" style="height: 400px; border-radius: 5px; background: #cfcece">
                    <div class="image-holder img-3"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Creative Design, Video & Experience section-->
<section class="section-padding">
    <div>
        <div class="container">
            <div class="hero-content flex justify-between items-center column-wrapper">
                <div class="column-item" style="height: 400px; border-radius: 5px; background: #cfcece">
                    <div class="image-holder img-4"></div>
                </div>
                <div class="column-item">
                    <h2 class="hero-title">Creative Design, Video & Experience</h2>
                    <p class="hero-text">With a promising team of creative designers and copywriters, our capabilities extend across a variety; Design, Illustration, Video Animation & Production, UI/UX and all types of Copywriting.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--section seperator title-->
<section class="section-padding">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="hero-title">Meet Our Clients</h2>
            <p>We have served over 300+ brands</p>
        </div>
        <div class="flex justify-between items-center" style="padding-top: 30px;">
            <div class="client-logo">
                <img src="img/FedEx.png" alt="client1" width="100%" height="125%" style="background:#000;"/>
            </div>
            <div class="client-logo">
                <img src="img/daraz.jpg" alt="client2" width="100%" height="120%" style="background:#000;"/>
            </div>
            <div class="client-logo">
                <img src="img/canon.jpg" alt="client3" width="100%" height="120%" style="background:#000;"/>
            </div>
            <div class="client-logo">
                <img src="img/Louis-Vuitton.png" alt="client4" width="100%" height="120%" style="background:#000;"/>
            </div>
            <div class="client-logo">
                <img src="img/Hyundai.png" alt="client5" width="100%" height="120%" style="background:#000;"/>
            </div>  
            <div class="client-logo">
                <img src="img/starbucks.jpeg" alt="client6" width="100%" height="120%" style="background:#000;"/>
            </div>  
            <div class="client-logo">
                <img src="img/amazon.webp" alt="client7" width="100%" height="120%" style="background:#000;"/>
            </div>  
            <div class="client-logo">
                <img src="img/LG.webp" alt="client8" width="100%" height="120%" style="background:#000;"/>
            </div>
        </div>
    </div>
</section>
</div>


<?php
$conn->close();
include 'components/contact-us-wrapper.php';
include 'components/footer.php';
?>

