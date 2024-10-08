<?php
require_once 'includes/db-config.php';

$title = "Services - Gaxios";
include 'components/header.php';
?>

<div class="page">
    <section class="services-section">
        <div class="container">
            <h2 class="services-title">Our Services</h2>
            <div class="services-grid">
                <!-- Graphic Design -->
                <div class="service-box">
                    <a href="graphic-design.php" style="text-decoration: none; color: inherit;">
                        <img src="img/graphic design.jpg" alt="Graphic Design" class="service-image">
                        <h3>Graphic Design</h3>
                        <p>Running a social media account is time-consuming, that’s why we do it for you so you can focus on what you specialize in.</p>
                        <p><strong>Our account management services include:</strong></p>
                        <ul>
                            <li>Weekly scheduled customized posts</li>
                            <li>Story updates</li>
                            <li>Creation of organized feed content</li>
                            <li>Community management</li>
                            <li>Weekly reporting & tracking</li>
                        </ul>
                    </a>
                </div>

                <!-- UI/UX Design -->
                <div class="service-box">
                    <a href="ui-ux.php" style="text-decoration: none; color: inherit;">
                        <img src="img/UI UX Design.jpg" alt="UI/UX Design" class="service-image">
                        <h3>UI/UX Design</h3>
                        <p>Are you struggling with creating engaging content? Let our team elevate your online presence.</p>
                        <p><strong>Our content creation services include:</strong></p>
                        <ul>
                            <li>Custom engaging graphics</li>
                            <li>Short-form videos</li>
                            <li>Strategic content plan</li>
                            <li>SEO optimized visuals</li>
                        </ul>
                    </a>
                </div>

                <!-- Web Development -->
                <div class="service-box">
                    <a href="web-development.php" style="text-decoration: none; color: inherit;">
                        <img src="img/web development.jpg" alt="Web Development" class="service-image">
                        <h3>Web Development</h3>
                        <p>We build tailored websites that drive your brand’s personality and engage with your audience effectively.</p>
                        <p><strong>We offer:</strong></p>
                        <ul>
                            <li>Custom-built websites</li>
                            <li>Clear design goals</li>
                            <li>Social media integration</li>
                            <li>Ongoing support</li>
                        </ul>
                    </a>
                </div>

                <!-- Brand Management -->
                <div class="service-box">
                    <a href="brand-management.php" style="text-decoration: none; color: inherit;">
                        <img src="img/brand management.jpg" alt="Brand Management" class="service-image">
                        <h3>Brand Management</h3>
                        <p>We help you build a genuine and active online community that stays engaged with your brand.</p>
                        <p><strong>Our community engagement services include:</strong></p>
                        <ul>
                            <li>Personalized responses to comments and messages</li>
                            <li>Collaborate with influencers</li>
                            <li>Share stories and testimonials</li>
                        </ul>
                    </a>
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

