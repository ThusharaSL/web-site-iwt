<?php
require_once 'includes/db-config.php';

$title = "Contact Us - Gaxios";
include 'components/header.php';
?>

<?php
$services = [];
//fetch all services
$sql = "SELECT * FROM Service";
$sresult = $conn->query($sql);

if ($sresult && $sresult->num_rows > 0) {
    // Output data of each row
    while($row = $sresult->fetch_assoc()) {
        $services[] = $row;
    }
}

if (isset($_GET["message"])) {
    $message = $_GET["message"];
    if ($message == "InquiryAdded") {
        echo "<script type='text/javascript'>showToast('Inquiry recorded. One of our agent will contact you ASAP!', 4000, 'success');</script>";
    }
}
?>

<style>
        .container-h {
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
        }
        nav a {
            margin-left: 20px;
            text-decoration: none;
            color: #333;
        }
        .contact-content {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
        }
        .contact-info, .contact-form {
            flex: 1;
        }
        .contact-form {
            margin-left: 50px;
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        .subtitle {
            color: #666;
            margin-bottom: 30px;
        }
        .location {
            margin-bottom: 30px;
        }
        .location h3 {
            margin-bottom: 10px;
        }
        form input{
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            height: 50px;
        }
        form input, form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        footer {
            margin-top: 50px;
            padding: 20px 0;
            border-top: 1px solid #ddd;
        }
        .contact-form input:focus,
    .contact-form textarea:focus {
        outline: none;
        border-color: #007bff;
    }

    .contact-form input.error,
    .contact-form textarea.error {
        border-color: red;
    }

    .contact-form .error-message {
        color: red;
        font-size: 12px;
        margin-top: -10px;
        margin-bottom: 10px;
    }
    </style>
</head>

<body>
<div class="page">
<section>
    <div class="container-h">
        <div class="contact-content">
            <div class="contact-info">
                <h1 style="color:#000000;">Contact Us</h1>
                <p class="subtitle">
                    We are here to help and answer any question you might have. We look forward to hearing from you.
                </p>

                <div class="location">
                    <h3>Colombo (Sri Lanka)</h3>
                    <p>Cinnamon Gardens, Colombo 7</p>
                    <p>
                        <a href="https://maps.app.goo.gl/1KbcF58SpQdRSfhf8" target="_blank"
                           style="text-decoration: none"><i class="fa fa-compass" aria-hidden="true"
                                                            style="margin-right: 5px"></i>
                            Directions</a>
                    </p>
                </div>
                
                <div class="location">
                    <h3>California (United States)</h3>
                    <p>8494 East Branch St.</p>
                    <p>Spring Valley, CA 91977</p>
                    <p>
                        <a href="https://maps.app.goo.gl/7Dmi6JEXnVADqnhA6" target="_blank"
                           style="text-decoration: none"><i class="fa fa-compass" aria-hidden="true"
                                                            style="margin-right: 5px"></i>
                            Directions</a>
                    </p>
                </div>
            </div>
            
            <div class="contact-form">
                <h2 style="margin-bottom: 20px; font-size: 20px">Let's Talk About Your Project!</h2>
                <form action="includes/add-inquiry.inc.php" method="POST">
                    <label>
                        <input type="text" name="Name" placeholder="Name" required>
                    </label>
                    <label>
                        <input type="email" name="Email" placeholder="Email" required>
                    </label>
                    <label>
                        <input type="text" name="Company" placeholder="Company">
                    </label>
                    <div class="form-control">
                        <div class="form-input" style="width: 100%">
                            <label for="service"></label><select style="width: 100%" id="service" name="Project" required>;
                                <option value="">Select Service</option>';
                                <?php
                                foreach ($services as $service) {
                                echo "<option "." value='".$service['Service_ID']."'>".$service['Service_Name']."</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <textarea name='Description' rows="5" placeholder="What's on your mind?" required></textarea>
                    <button class="btn-primary" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"
                                                                 style="margin-right: 10px; color: #fff"
                        ></i>Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>
</div>
<!--<script>-->
<!--    document.addEventListener('DOMContentLoaded', function() {-->
<!--    const form = document.querySelector('.contact-form form');-->
<!--    const nameInput = form.querySelector('input[placeholder="Name"]');-->
<!--    const emailInput = form.querySelector('input[placeholder="Email"]');-->
<!--    const companyInput = form.querySelector('input[placeholder="Company"]');-->
<!--    const messageTextarea = form.querySelector('textarea');-->
<!---->
<!--    // Create error message elements-->
<!--    const errorElements = {};-->
<!--    [nameInput, emailInput, companyInput, messageTextarea].forEach(input => {-->
<!--        const errorDiv = document.createElement('div');-->
<!--        errorDiv.className = 'error-message';-->
<!--        errorDiv.style.color = 'red';-->
<!--        errorDiv.style.fontSize = '12px';-->
<!--        errorDiv.style.marginTop = '-10px';-->
<!--        errorDiv.style.marginBottom = '10px';-->
<!--        errorDiv.style.display = 'none';-->
<!--        input.parentNode.insertBefore(errorDiv, input.nextSibling);-->
<!--        errorElements[input.placeholder.toLowerCase()] = errorDiv;-->
<!--    });-->
<!---->
<!--    function validateEmail(email) {-->
<!--        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;-->
<!--        return re.test(email.toLowerCase());-->
<!--    }-->
<!---->
<!--    function showError(input, message) {-->
<!--        const errorDiv = errorElements[input.placeholder.toLowerCase()];-->
<!--        errorDiv.textContent = message;-->
<!--        errorDiv.style.display = 'block';-->
<!--        input.style.borderColor = 'red';-->
<!--    }-->
<!---->
<!--    function clearError(input) {-->
<!--        const errorDiv = errorElements[input.placeholder.toLowerCase()];-->
<!--        errorDiv.style.display = 'none';-->
<!--        input.style.borderColor = '#ddd';-->
<!--    }-->
<!---->
<!--    function validateForm() {-->
<!--        let isValid = true;-->
<!---->
<!--        // Clear all previous errors-->
<!--        Object.values(errorElements).forEach(errorDiv => {-->
<!--            errorDiv.style.display = 'none';-->
<!--        });-->
<!--        [nameInput, emailInput, companyInput, messageTextarea].forEach(input => {-->
<!--            input.style.borderColor = '#ddd';-->
<!--        });-->
<!---->
<!--        // Name validation-->
<!--        if (nameInput.value.trim().length < 2) {-->
<!--            showError(nameInput, 'Name must be at least 2 characters long');-->
<!--            isValid = false;-->
<!--        }-->
<!---->
<!--        // Email validation-->
<!--        if (!validateEmail(emailInput.value.trim())) {-->
<!--            showError(emailInput, 'Please enter a valid email address');-->
<!--            isValid = false;-->
<!--        }-->
<!---->
<!--        // Company validation-->
<!--        if (companyInput.value.trim().length > 0 && companyInput.value.trim().length < 2) {-->
<!--            showError(companyInput, 'Company name must be at least 2 characters long');-->
<!--            isValid = false;-->
<!--        }-->
<!---->
<!--        // Message validation-->
<!--        if (messageTextarea.value.trim().length < 10) {-->
<!--            showError(messageTextarea, 'Message must be at least 10 characters long');-->
<!--            isValid = false;-->
<!--        }-->
<!---->
<!--        return isValid;-->
<!--    }-->
<!---->
<!--    // Add input event listeners validation-->
<!--    nameInput.addEventListener('input', () => {-->
<!--        if (nameInput.value.trim().length >= 2) {-->
<!--            clearError(nameInput);-->
<!--        }-->
<!--    });-->
<!---->
<!--    emailInput.addEventListener('input', () => {-->
<!--        if (validateEmail(emailInput.value.trim())) {-->
<!--            clearError(emailInput);-->
<!--        }-->
<!--    });-->
<!---->
<!--    companyInput.addEventListener('input', () => {-->
<!--        if (companyInput.value.trim().length === 0 || companyInput.value.trim().length >= 2) {-->
<!--            clearError(companyInput);-->
<!--        }-->
<!--    });-->
<!---->
<!--    messageTextarea.addEventListener('input', () => {-->
<!--        if (messageTextarea.value.trim().length >= 10) {-->
<!--            clearError(messageTextarea);-->
<!--        }-->
<!--    });-->
<!---->
<!--    // Form submission-->
<!--    form.addEventListener('submit', function(e) {-->
<!--        e.preventDefault();-->
<!--        -->
<!--        if (validateForm()) {-->
<!--            alert('Form submitted successfully!');-->
<!--        }-->
<!--    });-->
<!--});-->
<!--    </script>-->


<?php
$conn->close();
include 'components/footer.php';
?>

