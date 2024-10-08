<?php
require_once 'includes/db-config.php';

$title = "Brand Management - Gaxios";
include 'components/header.php';
?>

<link rel="stylesheet" href="css/brand-management.css">


<div class="web-d">
<div class="page">
    <div>
        <div>
            <div class="container-h" data-autoplay="true">
                <div class="slide"> 
                    <img src="img\brand-management\branding-advertisment-copyright-value-profile-concept.jpg" alt="Brand management"  style="background:#000;">
                </div>
                <div class="slide">
                    <img src="img/brand-management/corporate-management-strategy-solution-branding-concept.jpg" alt="brand management" style="background:#000;">
                </div>
                <div class="slide">
                    <img src="img\brand-management\communication-conference-sharing-conversation-meeting.jpg" alt="Brand-Asset-Management" style="background:#000;">
                </div>
                <div class="slide">
                    <img src="img/brand-management/strategist.jpg" alt="strategist" style="background:#000;">
                </div>
                <!-- Dots for carousel -->
            <div class="dots_container" id="indicator"></div>
        </div>
    </div>

    <!--Brand Management-->
    <section class="section-padding">
        <div>
            <div class="container">
                <div class="hero-content flex justify-between items-c  enter column-wrapper items-center">
                    <div class="column-item">
                        <h2 class="hero-title">Brand Management</h2>
                        <p class="hero-text">Our comprehensive brand management services are designed to help your business grow by improving your brand presence,
                        increasing customer engagement, and driving sales. With a dedicated team of experts, we ensure that your marketing strategies are tailored to meet your business goals.</p>
                    </div>
                    <div class="column-item" style="height: 400px; border-radius: 10px; background: #cfcece">
                        <img src="img/brand-management/brand.jpg" alt="brand" width="100%" height="100%"
                             style="background:#000; border-radius: 10px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Clients Section -->
    <div class=" container "> 

        <section class="tools">
            <div class="section-title text-center section-padding" style="padding-bottom: 0">
                <h2 class="hero-title">Our Clients</h2>
                <p>
                    We have served over 300+ brands
                </p>
            </div>
            <div class="tool-images">
                <div class="tool" style="background-image: url('img/brand-management/amazon.webp'); width: 15%; height: 100%;"></div>
                <div class="tool" style="background-image: url('img/brand-management/Hyundai.png'); width: 15%; height: 100%;"></div>
                <div class="tool" style="background-image: url('img/brand-management/canon.jpg'); width: 15%; height: 100%;"></div>
                <div class="tool" style="background-image: url('img/brand-management/starbucks.jpeg'); width: 15%; height: 100%;"></div>
                <div class="tool" style="background-image: url('img/brand-management/daraz.jpg'); width: 15%; height: 100%;"></div>
        </section>

        
    <!-- Our Process Section -->
    <section class="process">
            <h2>Our Process</h2>
        <!-- Step 1 (Text left, image right) -->
        <div class="step-1">
            <div class="step-text">
                <h3>Brand Discovery</h3>
                <p>We begin by understanding your business and brand through research and analysis.
                    This discovery phase helps us uncover your brand’s unique qualities, market position, and target audience, 
                    ensuring the strategy aligns with your goals.</p>
            </div>
            <div class="step-image">
                <img src="img/brand-management/brand discovery.jpg" alt="brand discovery" width="100%" height="100%" style="background:#000;">
            </div>
        </div>

        <!-- Step 2 (Image left, text right) -->
        <div class="step-2">
            <div class="step-image">
                <img src="img/brand-management/brand strategy.png" alt="brand strategy" width="100%" height="100%" style="background:#000;">
            </div>
            <div class="step-text">
                <h3>Strategy Development</h3>
                <p>We craft a comprehensive brand strategy, including core messaging, 
                    brand positioning, and visual identity guidelines. This strategy ensures your brand resonates with your audience and stands out from competitors.</p>
            </div>
        </div>

        <!-- Step 3 (Text left, image right) -->
            <div class="step-1">
            <div class="step-text">
                <h3>Creative Execution</h3>
                <p>We bring your brand to life through logos, design elements, and brand assets that align with your strategy. 
                These creative assets maintain consistency and help your brand create a memorable impression across all platforms.</p>
            </div>
            <div class="step-image">
                <img src="img/brand-management/creative execution.jpg" alt="creative execution" width="100%" height="100%" style="background:#000;">
            </div>
        </div>

        <!-- Step 4 (Image left, text right) -->
        <div class="step-2">
            <div class="step-image">
               <img src="img/brand-management/launch.webp" alt="launch" width="100%" height="100%" style="background:#000;">
            </div>

            <div class="step-text">
                <h3>Brand Launch and Rollout</h3>
                <p>We help you successfully launch or rebrand, creating excitement across all channels. 
                Whether it's online or offline, we ensure that your brand's message is communicated effectively to your target audience.</p>
            </div>
        </div>

        <!-- Step 5 (Text left, image right) -->
        <div class="step-1">
            <div class="step-text">
                <h3>Monitoring and Evolution</h3>
                <p>After launch, we continuously monitor your brand's performance. We track key metrics, gather feedback, 
                and provide recommendations to evolve your brand over time, ensuring it stays relevant and competitive.</p>
            </div>
            <div class="step-image">
                <img src="img/brand-management/Evalution.png" alt="Evalution" width="100%" height="100%" style="background:#000;">
            </div>
        </div>
    </section>

    <!-- Made in Gaxios Section -->
    <div class="three-boxes">
        <div class="section-title text-center section-padding">
            <h2 class="hero-title">Packages</h2>
            <p>
                Choose the package that best suits your brand's needs.
            </p>
        </div>
    <div class="grid-container">
        <div class="box tall" style="background-image: url('img/brand-management/starter.png');"></div>
        <div class="box tall" style="background-image: url('img/brand-management/growth.png');"></div>
        <div class="box tall" style="background-image: url('img/brand-management/premium.png');"></div>
    </div>
    </div>
</div>

</div>

<?php
$conn->close();
include 'components/contact-us-wrapper.php';
include 'components/footer.php';
?>

<!-- JS -->
<script src="js/Carusal.js"></script>