<?php
require_once 'includes/db-config.php';

$title = "Web Development - Gaxios";
include 'components/header.php';
?>

<?php
require_once 'includes/db-config.php';

$title = "Web Development - Gaxios";
include 'components/header.php';
?>

<link rel="stylesheet" href="css/web-development.css">


<div class="web-d">
    <div class="page">
        <div>
            <div>
                <div class="container-h" data-autoplay="true">
                    <div class="slide">
                        <img src="img/ui-ux-design/5808670.jpg" alt="design tool" />
                    </div>
                    <div class="slide">
                        <img src="img/ui-ux-design/1.jpg" alt="design" />
                    </div>
                    <div class="slide">
                        <img src="img/ui-ux-design/2.jpg" alt="design" />
                    </div>
                    <div class="slide">
                        <img src="img/ui-ux-design/3.jpg" alt="design" />
                    </div>
                    <!-- Dots for carousel -->
                    <div class="dots_container" id="indicator"></div>
                </div>
            </div>


            <section class="section-padding">
                <div>
                    <div class="container">
                        <div class="hero-content flex justify-between items-c  enter column-wrapper items-center">
                            <div class="column-item">
                                <h2 class="hero-title">UI/UX Design</h2>
                                <p class="hero-text">Our design process starts with in-depth research to understand your audience. We conduct interviews, surveys, and competitor analysis to uncover user needs and pain points. This phase ensures that the solution is built around real user requirements.</p>
                            </div>
                            <div class="column-item" style="height: 400px; border-radius: 5px; background: #cfcece">
                                <div class="image-holder img-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Our Tools Section -->
            <div class=" container ">
                <!-- Our Process Section -->
                <section class="process">
                    <h2 style="font-size: 35px; margin-top: 20px; margin-bottom: 20px;">Our Process</h2>
                    <!-- Step 1 (Text left, image right) -->
                    <div class="step-1">
                        <div class="step-text">
                            <h3>Step 1</h3>
                            <p>Our design process starts with in-depth research to understand your audience. We conduct interviews, surveys, and competitor analysis to uncover user needs and pain points. This phase ensures that the solution is built around real user requirements.</p>
                        </div>
                        <div class="step-image">
                            <img src="img/ui-ux-design/4.jpg" alt="Step 2 image">
                        </div>
                    </div>

                    <!-- Step 2 (Image left, text right) -->
                    <div class="step-2">
                        <div class="step-image">
                            <img src="img/ui-ux-design/5.jpg" alt="Step 2 image">
                        </div>
                        <div class="step-text">
                            <h3>Step 2</h3>
                            <p>Next, we create wireframes and prototypes to outline the structure of the design. This step helps to visualize content hierarchy and user flow. Our clickable prototypes offer a glimpse into how the final product will function.</p>
                        </div>
                    </div>

                    <!-- Step 1 (Text left, image right) -->
                    <div class="step-1">
                        <div class="step-text">
                            <h3>Step 3</h3>
                            <p>With the user flows established, we focus on the visual design. We craft interfaces that are not only aesthetically pleasing but also intuitive and accessible. Every design element, from color schemes to typography, aligns with your brand’s voice.</p>
                        </div>
                        <div class="step-image">
                            <img src="img/ui-ux-design/5.jpg" alt="Step 2 image">
                        </div>
                    </div>

                    <!-- Step 2 (Image left, text right) -->
                    <div class="step-2">
                        <div class="step-image">
                            <img src="img/ui-ux-design/6.jpg" alt="Step 2 image">
                        </div>

                        <div class="step-text">
                            <h3>Step 4</h3>
                            <p>Before the final release, we conduct rigorous usability testing to gather feedback and make necessary iterations. Our goal is to refine the experience, ensuring that the end product is user-friendly and meets business objectives.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>


        <?php
        $conn->close();
        include 'components/contact-us-wrapper.php';
        include 'components/footer.php';
        ?>

        <!-- JS -->
        <script src="js/Carusal.js"></script>