<?php
require_once 'includes/db-config.php';

$title = "Privacy Policy - Gaxios";
include 'components/header.php';
?>

<div class="page">
<!-- Hero Section -->
<section class="privacy-policy-hero">
    <div class="container" style="text-align: center; margin-top: 50px; margin-bottom: 100px;">
        <section class="privacy-policy" style="padding: 0 200px; background-color: #fff;">
            <div>
                <h2 class="privacy-policy-h2 text-center">Privacy Policy</h2>
                <p class="privacy-policy-text-1" style=" margin-top: 20px">
                    At gaxios, we collect various types of information to provide and improve our services. This includes personal details such as your name, email address, phone number, and billing information when you interact with our services. Additionally, we collect non-personal information, which may include your device type, IP address, browser type, and data regarding your interactions with our website. We also gather information related to your interactions with advertisements, such as clicks and preferences, to optimize your experience and improve the performance of our ad campaigns.
                </p>
                <h2 class="privacy-policy-subtitle">Use</h2>
                <p class="privacy-policy-text">
                At gaxios, we collect various types of information to provide and improve our services. This includes personal details such as your name, email address, phone number, and billing information when you interact with our services. Additionally, we collect non-personal information, which may include your device type, IP address, browser type, and data regarding your interactions with our website. We also gather information related to your interactions with advertisements, such as clicks and preferences, to optimize your experience and improve the performance of our ad campaigns.
                </p>

                <h2 class="privacy-policy-subtitle">Cookie Policy</h2>
                
                <h3 class="privacy-policy-subsubtitle">What are cookies?</h3>
                <p class="privacy-policy-text">
                Cookies are small text files that are placed on your device when you visit our website. These files help us recognize your device and remember your preferences, making your experience more efficient and personalized. Cookies allow us to offer tailored content, track user activity, and ensure the optimal performance of our platform.</p>

                <h3 class="privacy-policy-subsubtitle">Cookies and personal data</h3>
                <p class="privacy-policy-text">
                Cookies can collect personal data, such as your preferences and interaction history with our site. This information enables us to display more relevant advertisements and improve your overall experience. Additionally, cookies help us monitor the performance of our site and advertising campaigns, providing valuable insights for continuous improvement.
                </p>

                <h3 class="privacy-policy-subsubtitle">Controlling cookies from your browser</h3>
                <p class="privacy-policy-text">
                You have control over the use of cookies through your browser settings. Most browsers provide options to block or delete cookies, allowing you to manage your privacy preferences. However, please be aware that disabling cookies may affect the functionality of certain features on our website. Depending on your browser, you can manage cookies in the settings section.
                </p>

                <h2 class="privacy-policy-subtitle">Security</h2>
                <p class="privacy-policy-text">
                We are committed to safeguarding your personal information. We use various security measures, including encryption, firewalls, and secure server protocols, to protect your data from unauthorized access, misuse, or disclosure. While we employ advanced security practices, it is important to note that no method of data transmission over the internet or electronic storage is completely secure. As a result, we cannot guarantee absolute security but strive to uphold the highest level of protection.
                </p>

                <h2 class="privacy-policy-subtitle">Unsubscribe Information</h2>
                <p class="privacy-policy-text">
                If you wish to stop receiving promotional communications from us, you can opt-out at any time. You can unsubscribe by clicking the "Unsubscribe" link in our emails or by contacting us directly at [Your Email Address]. Please note that even after unsubscribing from promotional content, you may still receive important account-related or transactional messages from us.
                </p>
            </div>
        </section>
</div>

<!-- Contact Us and Footer -->
<?php
$conn->close();
include 'components/contact-us-wrapper.php';
include 'components/footer.php';
?>