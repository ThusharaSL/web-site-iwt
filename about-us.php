<?php
require_once 'includes/db-config.php';

$title = "About Us - Gaxios";
include 'components/header.php';
?>
<link rel="stylesheet" href="css\about-us.css">

<section class="section-padding">
            <div>
                <div class="container" style="position: relative; margin-top: 50px">
                    <div class="hero-content flex justify-between items-center column-wrapper">
                        <div class="column-item" style="height: 450px; border-radius: 5px; background: #cfcece">
                        <div class="image-holder-about img-about-1">

                        </div>
                        </div>
                        <div class="column-item">
                            <h1 class= "h1-header-about" >We provide affordable design services</h1>
                            
                        </div>

                    </div>
                </div>
            </div>
        </section>


<section class="section-padding" >
    <div>
        <div class="container">
            <div class="hero-content flex justify-between items-center column-wrapper" >
                <div class="image-contanainer" >
                    <h2 class="hero-title h1-header-about" >We rise to the challenge </h2>
                    <p class="about-text">
                        by providing affordable design services in Sri Lanka. We offer best possible outcome for your requirements coupled with great customer service experience.

                        Specializing in Creative Graphic Design and Website Design with marketing in mind we also specialize in Database Management, CMS (Content Management Systems – Joomla, WordPress), Digital media design, Search Engine Optimization (SEO), Social Media Design, Packaging Designing, Printing and Website Hosting. Superior, responsive customer service and our ability to work with our clients to meet their interactive needs is the key to our success.</p>
                </div>
                <div>
                <video style="height: 320px;" src="img\about-us\DesignzHub Creative Solutions.mp4" controls autoplay muted></video>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding cntainer-grid-section section-padding">
        <div class="container">
            <div class="hero-content flex justify-between items-center column-wrapper">
                <div class="image-contanainer">
                    <h2 class="hero-title" style= "color:#171f31;">This is how we work</h2>
                    <h2 style= "text-align: center;color: #666666; font-size: 16px">
                    Our goals are fueled by a genuine desire to help you succeed.
                    </h2>
                </div>
                </div>
            </div>
</section>

<section class="cntainer-grid-section section-padding">
    <div class="container">
        <div class="container-grid">
            <div class = "image-grid-class-1" >
                <img src="img/about-us/customer-service-icon.png" alt="">
                    <h4 style="margin: 15px;">Great Customer Service</h4>
                    <p class ="about-us-parahraph">At DesignzHub we understand how important reliable customer service is. We use this knowledge to build strong relationships with our clients by effective communication throughout the entire project process. Furthermore our support continues long after the project has been executed.

                    </p>

                </div>

                <div class = "image-grid-class-1">
                 <img src="img/about-us/quick-turnaround-time2.png">
                    <h4 style="margin: 15px;">Quick Turnaround Time</h4>
                    <p class ="about-us-parahraph">
                    We work attentively to provide a quick turnaround. We don’t tolerate delays, and are committed to your satisfaction. We understand that time is precious and always ticking. Therefor we believe it is your right to have your projects returned to you in a minimal amount of time.
                </p>

                </div>

                <div class = "image-grid-class-1" >
                <img src="img/about-us/honesty2.png" alt="">
                    <h4 style="margin: 15px;">Honest Approach</h4>
                    <p class ="about-us-parahraph">
                    As a professional creative unit we know the do’s and dont’s and the ins and outs of project management. We humbly share these with you throughout your projects and always look to provide the best possible solution with total honesty without beating around the bush.
                    </p>
                </div>
                

                <div  class ="image-grid-class-1" >
                 <img src="img/about-us/affordable.png" alt="">
                    <h4 style="margin: 15px;">Affordability in Mind</h4>
                    <p class ="about-us-parahraph">
                    We stand tall because we know what we do and we do it with pride. Therefore our services are not the cheapest. But we always work with our best ability to suit your budget. We only charge for what we really do and there are no hidden fees on our pricing structure.
                </p>
                </div>
            </div>
        </div>
    </section>

<section class="cntainer-grid-section">
<div class="container">
        <div class="container-grid">
            <div class = "customer-satis " >
                <h5> +105 </h5>
            </div>
                |
            <div class = "customer-satis "  >
                <h5> +1005 </h5>
            </div>
                |
            <div class = "customer-satis " >
                <h5> +1000 </h5>
            </div>
                |
            <div  class ="customer-satis " >
                <h5> 85 </h5>
            </div>
        </div>
    </div>
</section>

<section class="cntainer-grid-section">
<div class="container">
        <div class="container-grid">
            <div class = "customer-satis-tag " >
                <h4> Satisfied Customers </h4>
            </div>
                |
            <div class = "customer-satis-tag "  >
                <h4>Project Completed</h4>
            </div>
                |
            <div class = "customer-satis-tag " >
                <h4>Employees</h4>
            </div>
                |
            <div  class ="customer-satis-tag " >
                <h4> Awards Winning </h4>
            </div>
        </div>
    </div>
</section>
          

<div onclick="scrollToTop()" class = "to-top">^</div>
    <script>
        function scrollToTop() {
                window.scrollTo(0, 0);
                }
    </script>



<?php
$conn->close();
include 'components/contact-us-wrapper.php';
include 'components/footer.php';
?>

