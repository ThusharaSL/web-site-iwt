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
                    <img src="img\web-development-tools-images\—Pngtree—programming on laptop screen the_13305824.jpg" alt="nature" />
                </div>
                <div class="slide">
                    <img src="img\web-development-tools-images\—Pngtree—3d rendered display background showcasing_5785058.jpg" alt="nature" />
                </div>
                <div class="slide">
                    <img src="img\web-development-tools-images\programming-background-collage.jpg" alt="nature" />
                </div>
                <div class="slide">
                    <img src="img\web-development-tools-images\programming-background-collage (1).jpg" alt="nature" />
                </div>
               
            <div class="dots_container" id="indicator"></div>
        </div>
    </div>

    
    <section class="section-padding">
        <div>
            <div class="container">
                <div class="hero-content flex justify-between items-c  enter column-wrapper items-center">
                    <div class="column-item">
                        <h2 class="hero-title">Web Development</h2>
                        <p class="hero-text">We are a multidisciplinary digital marketing agency, consulting studio and creative production house based in Colombo. Being a hybrid between a traditional advertising agency and a digital media agency, we follow a creative approach that revolves around data driven insights to power ROI effective executions. Our way of thinking creates value in our interactions with all our stake holders and gets us to our most creative, exciting and effective work</p>
                    </div>
                    <div class="column-item" style="height: 400px; border-radius: 5px; background: #cfcece">
                        <div class="image-holder img-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class=" container "> 

        <section class="tools">
            <h2 class="hero-title">Our Tools</h2>
            <div class="tool-images">
                <div class="tool-w"><img src="img\web-development-tools-images\1.jpg" alt=""></div>
                <div class="tool-w"><img src="img\web-development-tools-images\2.png" alt=""></div>
                <div class="tool-w"><img src="img\web-development-tools-images\3.jpg" alt=""></div>
                <div class="tool-w"><img src="img\web-development-tools-images\4.jpg" alt=""></div>
                <div class="tool-w"><img src="img\web-development-tools-images\5.jpg" alt=""></div>
            </div>
        </section>

        
 
    <section class="process section-padding">
            <h2 class="hero-title" style="margin-bottom: 50px;">Our Process</h2>
        <div class="step-1">
            <div class="step-text">
                <h3>Initial Consultation and Research</h3>
                <p>Our process begins with a detailed consultation to understand your business goals, target audience, and unique requirements. We dive deep into researching your industry, competitors, and market trends to develop a strategic approach that aligns with your objectives.</p>
            </div>
            <div class="step-image">
                <img src="img\web-development-body-images\apps-workplace-social-media-holding-profession.jpg" alt="Step 2 image">
            </div>
        </div>

        
        <div class="step-2">
        <div class="step-image">
                <img src="img/web-development-body-images/close-up-hand-analyzing-instagram-application-graph.jpg" alt="Step 2 image">
            </div>
            <div class="step-text">
                <h3>Planning and Strategy</h3>
                <p>Based on our research, we create a comprehensive web development strategy. This includes mapping out the structure, content, and functionality of your website to ensure it is user-friendly and optimized for conversions. We focus on aligning every aspect of the site with your marketing goals.</p>
            </div>
        </div>

            
            <div class="step-1">
            <div class="step-text">
                <h3>Design and Development</h3>
                <p>Once the strategy is approved, our design team creates a visually stunning, responsive layout that reflects your brand identity. Simultaneously, our development team builds the site using the latest technologies, ensuring fast load times, mobile compatibility, and SEO optimization.</p>
            </div>
            <div class="step-image">
                <img src="img/web-development-body-images/creative-team-having-discussion-social-media-application.jpg" alt="Step 2 image">
            </div>
        </div>

       
        <div class="step-2">
            <div class="step-image">
                <img src="img/web-development-body-images/group-diverse-people-brainstorming-together.jpg" alt="Step 2 image">
            </div>

            <div class="step-text">
                <h3>Testing, Launch, and Ongoing Support</h3>
                <p>Before the official launch, we thoroughly test every element of your website to ensure top performance, security, and functionality across all devices. After the launch, our commitment doesn't end. We continue to monitor your site, providing ongoing support, updates, and maintenance to ensure it remains optimized and performs at its best. Additionally, we offer continuous digital marketing services to help grow your online presence and reach your business goals.</p>
            </div>
        </div>
    </section>

    <!-- Made in Gaxios Section -->
    <div class="six-boxes">
    <h2 class="hero-title">Design Examples</h2>
    <div class="grid-container">
        <div class="box small"><img src="img\web-development-example-images\1.jpg" alt=""></div>
        <div class="box tall"><img src="img\web-development-example-images\2.jpeg" alt=""></div>
        <div class="box small"><img src="img\web-development-example-images\3.jpeg" alt=""></div>
        <div class="box tall"><img src="img\web-development-example-images\4.jpeg" alt=""></div>
        <div class="box small"><img src="img\web-development-example-images\html-template-preview-107805.jpg" alt=""></div>
        <div class="box small"><img src="img\web-development-example-images\free-design-proposal-templates.jpg" alt=""></div>
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
