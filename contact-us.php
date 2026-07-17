<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Avneesh Tyagi's Multispeciality Dental Care Clinic & Implant Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<div class="container-fluid">
    <div class="hero-container-contact p-4 p-md-5">
        
        <?php include "./components/navbar.php" ?>
        <!-- Main Hero Body Content -->
       <div class="row hero-content align-items-end">
   <div class="col-lg-10">

    <h1 class="hero-title scroll-up">Let’s connect. <br>Because Every Smile Matters</h1>

    <p class="hero-desc mb-0 scroll-up">
       We’re always here to answer your questions, address your concerns, and help you take the next step toward a healthier, more confident smile.
    </p>

    <div class="mt-4">
        <p class="clinic-hours mb-2 scroll-up">
            <strong>Hours:</strong> 9:30 A.M. – 2:00 P.M. | 5:30 P.M. – 8:00 P.M.
        </p>

        <p class="clinic-contact mb-2 scroll-up">
            <strong>Location:</strong> Shop no. 3 & 4 , K.N. Modi Complex, Near P.N.B., Modinagar.
        </p>
         <p class="clinic-contact mb-0 scroll-up">
             <strong>Call:</strong> 9457528557
        </p>
    </div>

</div>
</div>

    </div>
</div>
<section class="contact-section">
    <div class="container">
        <div class="row align-items-stretch g-4 lg-g-5">
            
            <!-- Left Grid Layout Block: Narrative & Content Asset Framework -->
            <div class="col-12 col-lg-6 d-flex flex-column justify-content-between">
                <div>
                    <span class="contact-badge">Get in Touch</span>
                    <h2 class="contact-main-title scroll-up">Let’s connect. Because Every Smile Matters</h2>
                    <p class="contact-lead-text scroll-up">
                        We’re always here to answer your questions, ease your concerns, and help you take the next step toward.
                    </p>
                </div>
                <div class="contact-img-wrapper mt-auto scroll-up">
                    <!-- Verbatim image filename element reference as observed in image_7fd54d.jpg -->
                    <img src="./images/bg.png" alt="Smiling medical professional inside workspace clinic">
                </div>
            </div>

            <!-- Right Grid Layout Block: Interactive Custom Messaging Form -->
            <div class="col-12 col-lg-6">
                <div class="contact-form-card scroll-up">
                    
                    <h3 class="form-card-title">Message Us</h3>
                    <p class="form-card-desc">We respond quickly, offer expert advice, and are just a message or call away.</p>
                    
                    <form action="#" method="POST" autocomplete="off" class="d-flex flex-column">
                        
                        <!-- Full Name Element Block -->
                        <div class="contact-custom-group">
                            <input type="text" id="form-name" placeholder=" " required>
                            <label for="form-name">Full Name</label>
                        </div>

                        <!-- Email Address Element Block -->
                        <div class="contact-custom-group">
                            <input type="email" id="form-email" placeholder=" " required>
                            <label for="form-email">Email Address</label>
                        </div>

                        <!-- Phone Number Element Block -->
                        <div class="contact-custom-group">
                            <input type="tel" id="form-phone" placeholder=" " required>
                            <label for="form-phone">Phone Number</label>
                        </div>

                        <!-- Multi-Line Text Message Block -->
                        <div class="contact-custom-group">
                            <textarea id="form-message" placeholder=" " required></textarea>
                            <label for="form-message">Your Message</label>
                        </div>

                        <!-- Submission Execution Component Trigger -->
                        <button type="submit" class="btn-submit-message mt-2">Send Message</button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</section>

<?php include "./components/footer.php"?>
<script src="./script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>