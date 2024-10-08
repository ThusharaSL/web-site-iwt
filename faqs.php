<?php
require_once 'includes/db-config.php';
$title = "FAQs - Gaxios";
include 'components/header.php';
?>

<div class="page">
<section class="section-padding">
    <div class="container">
        <div class="section-title text-center">

            <div class="wrapper">
            <h2 class="hero-title">Frequently Asked Questions</h2>
            <h4>
                Here are some common questions about our services.<br> If you have any other
                questions, feel free to <a href="contact-us.php">contact us</a>.
            </h4>

                <div class="section-padding">
            <h3 style="text-align:left;color: rgba(9,129,70,0.55);">General Questions</h3>

                <div class="faq">
                    <button class= "accordion">
                    1.What services does your agency offer ?
                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                    </button>
                    <div class="pannel">
                        <p>
                        We offer a range of digital marketing services including SEO, PPC advertising, social media marketing, content creation, email marketing, display advertising, and more.
                        </p>
                    </div>
                </div>

                <div class="faq">
                    <button class= "accordion">
                    2.How do you determine which services are right for my business?
                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                    </button>
                    <div class="pannel">
                        <p>
                        We conduct a thorough analysis of your business goals, target audience, industry trends, and budget to create a customized strategy that best fits your needs.
                        </p>
                    </div>
                </div>

                <div class="faq">
                    <button class= "accordion">
                    3.Do you work with all types of businesses?
                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                    </button>
                    <div class="pannel">
                        <p>
                        Yes, we work with a wide variety of businesses, including small startups, mid-sized companies, and large enterprises across different industries.Yes, we work with a wide variety of businesses, including small startups, mid-sized companies, and large enterprises across different industries.
                    </div>
                </div>

                <div class="faq">
                    <button class= "accordion">
                    4.What makes your agency different from others?
                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                    </button>
                    <div class="pannel">
                        <p>
                        Our agency combines a data-driven approach, creative strategy, and customer-centric focus to maximize the results of each campaign. We also prioritize transparency, keeping our clients informed at every step.
                        </p>
                    </div>
                </div>
                </div>


                <div class="section-padding">
                <h3 style="text-align:left;color: rgba(9,129,70,0.55);">Campaign Questions</h3>

                <div class="faq">
                    <button class= "accordion">
                    5.How long does it take to see results from a digital marketing campaign?
   
                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                    </button>
                    <div class="pannel">
                        <p>
                        Results vary based on the type of campaign and the marketing channels used. PPC and social media ads can generate leads almost immediately, while SEO and content marketing may take a few months to show significant results.
                        </p>
                    </div>                    
                </div> 

                <div class="faq">
                    <button class= "accordion">
                   6.Can I run multiple campaigns at once?
                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                    </button>
                    <div class="pannel">
                        <p>
                        Absolutely. We often recommend running multiple campaigns across different channels to maximize reach and effectiveness. Our team will help you manage and optimize each campaign.
                        </p>
                    </div>                    
                </div> 

                <div class="faq">
                    <button class= "accordion">
                    7.How do you measure the success of a campaign?
                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                    </button>
                    <div class="pannel">
                        <p>
                        We use key performance indicators (KPIs) such as click-through rate (CTR), conversion rate, cost per acquisition (CPA), return on ad spend (ROAS), and other relevant metrics, depending on the campaign goals.
                        </p>
                    </div>                    
                </div> 

                <div class="faq">
                    <button class= "accordion">
                    8.Do I have control over my advertising budget?
                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                    </button>
                    <div class="pannel">
                        <p>
                        Yes, you set the budget, and we provide recommendations based on industry standards. We work within your budget and monitor spending closely to ensure you’re getting the best possible ROI.
                        </p>
                    </div>                    
                </div>
                </div>

                <div class="section-padding">
                <h3 style="text-align:left;color: rgba(9,129,70,0.55);">Social Media Questions</h3>
                
                <div class="faq">
                    <button class= "accordion">
                    9.Which social media platforms should I advertise on?
                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                    </button>
                    <div class="pannel">
                        <p>
                        It depends on your target audience and business goals. We typically suggest platforms based on where your audience is most active, such as Facebook, Instagram, LinkedIn, Twitter, or TikTok.
                        </p>
                    </div>                    
                </div> 

                <div class="faq">
                    <button class= "accordion">
                    10.Can you create and manage content for my social media accounts?
    
                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                    </button>
                    <div class="pannel">
                        <p>
                        Yes, our team can create, post, and monitor content across your social media accounts. We also handle engagement, including responding to comments and messages as needed.
                        </p>
                    </div>                    
                </div>
                </div>


                <div class="section-padding">
                <h3 style="text-align:left;color: rgba(9,129,70,0.55);">SEO and Content Marketing Questions</h3>

                <div class="faq">
                    <button class= "accordion">
                    11.What is SEO, and why is it important?
                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                    </button>
                    <div class="pannel">
                        <p>
                        SEO (Search Engine Optimization) is the process of improving your website’s visibility on search engines like Google. It’s crucial for driving organic (unpaid) traffic to your site, increasing brand exposure, and reaching potential customers.
                        </p>
                    </div>                    
                </div> 

                <div class="faq">
                    <button class= "accordion">
                    12.How long does it take to see SEO results?
                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                    </button>
                    <div class="pannel">
                        <p>
                        SEO is a long-term strategy, and it can take anywhere from 3 to 6 months to start seeing substantial results. Our team will work on creating a steady and sustainable SEO strategy.
                        </p>
                    </div>                    
                </div>
                </div>

                <div class="section-padding">
                    <h3 style="text-align:left;color: rgba(9,129,70,0.55);">PPC and Display Advertising Questions
                    </h3>

                <div class="faq">
                    <button class= "accordion">
                        13.What is PPC, and how does it work?
                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                    </button>
                    <div class="pannel">
                        <p>
                        PPC (Pay-Per-Click) is a digital advertising model where you pay each time someone clicks on your ad. It’s commonly used on platforms like Google Ads, where ads appear in search results based on targeted keywords.
                        </p>
                    </div>                    
                </div> 

                <div class="faq">
                    <button class= "accordion">
                    14.What is the difference between PPC and display advertising?
                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                    </button>
                    <div class="pannel">
                        <p>
                        PPC ads appear in search engine results when users search for specific keywords. Display ads are visual ads (images, videos) that appear on websites across the internet, often targeted by user interests or browsing behavior.
                        </p>
                    </div>                    
                </div> 

                <div class="faq">
                    <button class= "accordion">
                    15.How often will I receive campaign reports?
    
                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                    </button>
                    <div class="pannel">
                        <p>
                        We provide detailed monthly reports, but you can also request weekly or bi-weekly updates based on your preferences.
                        </p>
                    </div>                    
                </div> 

                <div class="faq">
                    <button class= "accordion">
                    16.What’s included in a typical report?
                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                    </button>
                    <div class="pannel">
                        <p>
                        Reports include metrics such as impressions, clicks, conversions, ROI, and other KPIs relevant to your campaign. We also provide insights and recommendations for future optimization.
                        </p>
                    </div>                    
                </div> 

                <div class="faq">
                    <button class= "accordion">
                    17.Can I track the performance of my campaign myself?
    
                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                    </button>
                    <div class="pannel">
                        <p>
                        Yes, we can set up access to analytics dashboards and provide you with the tools and guidance needed to monitor the campaign in real-time.
                    </div>                    
                </div>
                    </>


                    <div class="section-padding">
                <h3 style="text-align:left;color: rgba(9,129,70,0.55);">Pricing and Payment Questions</h3>
                
                <div class="faq">
                    <button class= "accordion">
                    18.How is pricing determined for your services?
                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                    </button>
                    <div class="pannel">
                        <p>
                        Pricing is based on the services required, the scope of work, and the duration of the campaign. We provide customized quotes to fit your specific needs and budget.
                    </div>                    
                </div> 

                <div class="faq">
                    <button class= "accordion">
                    19.Are there any hidden fees?
                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                    </button>
                    <div class="pannel">
                        <p>
                        No, we believe in complete transparency. All fees are discussed upfront, and there are no hidden charges.
                    </div>                    
                </div> 
                
                <div class="faq">
                    <button class= "accordion">
                    20.What is your cancellation policy?
                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                    </button>
                    <div class="pannel">
                        <p>
                        We offer flexible contracts, and you can cancel at any time with a specified notice period. Details are included in our contract terms.
                        </p>
                    </div>                    
                </div>
                </div>

                    <div class="section-padding">
                <h3 style="text-align:left;color: rgba(9,129,70,0.55);">Other Questions</h3>
                
                <div class="faq">
                    <button class= "accordion">
                    21.Do you provide training or consulting for in-house marketing teams?
                    
    
                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                    </button>
                    <div class="pannel">
                        <p>
                        Yes, we offer training and consulting services to help empower your team with the skills and knowledge needed to manage campaigns in-house.
                    </div>                    
                </div> 

                <div class="faq">
                    <button class= "accordion">
                    22.How do you handle changes in digital advertising trends?
    
                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                    </button>
                    <div class="pannel">
                        <p>
                        Our team stays up-to-date with the latest trends and industry changes. We regularly adjust our strategies to ensure your campaigns remain effective.
                        </p>
                    </div>                    
                </div> 

                <div class="faq">
                    <button class= "accordion">
                    23.Can you help with website design and optimization?
                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                    </button>
                    <div class="pannel">
                        <p>
                        Yes, we provide website design, development, and optimization services to ensure your site is user-friendly and conversion-focused.
                    </div>                    
                </div> 

                <div class="faq">
                    <button class= "accordion">
                    24.Do you offer a free consultation?
                    
                    <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                    </button>
                    <div class="pannel">
                        <p>
                        Yes, we offer a free initial consultation to discuss your needs, goals, and how we can help you achieve them.
                        </p>
                    </div>                    
                </div>
                    </div>
        </div>
        </div>
    </div>
</section>
</div>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {

            this.classList.toggle("active");
            this.parentElement.classList.toggle("active");

            var pannel = this.nextElementSibling;

            if (pannel.style.display === "block") {
                pannel.style.display = "none";

            }
            else {
                pannel.style.display = "block";
            }

        });
    }
</script>
  
<?php
$conn->close();
include 'components/contact-us-wrapper.php';
include 'components/footer.php';
?>

