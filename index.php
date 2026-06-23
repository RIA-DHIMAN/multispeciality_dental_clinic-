<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Avneesh Tyagi's Multispeciality Dental Care Clinic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<div class="container-fluid">
    <div class="hero-carousel-wrapper">
        
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
              <div class="carousel-item active">
    <div class="hero-bg-slide slide1"></div>
</div>

<div class="carousel-item">
    <div class="hero-bg-slide slide2"></div>
</div>

<div class="carousel-item">
    <div class="hero-bg-slide slide3"></div>
</div>

<div class="carousel-item">
    <div class="hero-bg-slide slide4"></div>
</div>
            </div>
        </div>
        <style>
            .hero-bg-slide{
    width:100%;
    height:100%;
    background-size:cover;
    background-position:top     center;
    background-repeat:no-repeat;
}

/* Desktop Images */
.slide1{
    background-image:linear-gradient(rgba(0, 0, 0, 0),rgba(0, 0, 0, 0)),
    url('./images/sliders/desk-1.jpeg');
}

.slide2{
    background-image:linear-gradient(rgba(0, 0, 0, 0),rgba(0, 0, 0, 0)),
    url('./images/sliders/desk-1.jpeg');
}

.slide3{
    background-image:linear-gradient(rgba(0, 0, 0, 0),rgba(0, 0, 0, 0)),
    url('./images/sliders/desk-1.jpeg');
}

.slide4{
    background-image:linear-gradient(rgba(0, 0, 0, 0),rgba(0, 0, 0, 0)),
    url('./images/sliders/desk-1.jpeg');
}

/* Mobile Images */
@media (max-width: 768px){

    .slide1{
        background-image:linear-gradient(rgba(0, 0, 0, 0),rgba(0, 0, 0, 0)),
        url('./images/sliders/mob-1.jpeg');
    }

    .slide2{
        background-image:linear-gradient(rgba(0, 0, 0, 0),rgba(0, 0, 0, 0)),
        url('./images/sliders/mob-1.jpeg');
    }

    .slide3{
        background-image:linear-gradient(rgba(0, 0, 0, 0),rgba(0, 0, 0, 0)),
        url('./images/sliders/mob-1.jpeg');
    }

    .slide4{
        background-image:linear-gradient(rgba(0, 0, 0, 0),rgba(0, 0, 0, 0)),
        url('./images/sliders/mob-1.jpeg');
    }
}
        </style>
        <script>
document.addEventListener("DOMContentLoaded", function () {
    const isMobile = window.innerWidth <= 768;

    const slides = document.querySelectorAll(".hero-bg-slide");

    if (isMobile) {
        slides[0].style.backgroundImage =
            "linear-gradient(rgba(0,0,0,.4),rgba(0,0,0,.3)), url('./images/sliders/mob-1.jpeg')";

        slides[1].style.backgroundImage =
            "linear-gradient(rgba(0,0,0,.4),rgba(0,0,0,.3)), url('./images/sliders/mob-1.jpeg')";

        slides[2].style.backgroundImage =
            "linear-gradient(rgba(0,0,0,.4),rgba(0,0,0,.3)), url('./images/sliders/mob-1.jpeg')";

        slides[3].style.backgroundImage =
            "linear-gradient(rgba(0,0,0,.4),rgba(0,0,0,.3)), url('./images/sliders/mob-1.jpeg')";
    }
});
</script>
    <div class="hero-container mt-0 pt-0 p-4 p-md-5">
        
        <?php include "./components/navbar.php" ?>
        <!-- Main Hero Body Content -->
        <div class="row hero-content align-items-end">
            <div class="col-lg-8">
                
                <!-- <div class="d-flex align-items-start gap-3 mb-4 scroll-up">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-white-50 mt-1">
                        <path d="M12 2v20M2 12h20M5.63 5.63l12.74 12.74M5.63 18.37L18.37 5.63"/>
                    </svg>
                    <p class="sub-invite mb-0 ">Modinagar's most trusted multispeciality implant & cosmetic dental centre.</p>
                </div>

                <h1 class="hero-title scroll-up">Precision Care.<br>Painless Treatment,</h1>

                <div class="mb-4">
                    <a href="#" class="tag-badge scroll-up">Implants</a>
                    <a href="#" class="tag-badge scroll-up">Digital X-Ray</a>
                    <a href="#" class="tag-badge scroll-up">Orthodontics</a>
                    <a href="#" class="tag-badge scroll-up">Painless RCT</a>
                    <a href="#" class="tag-badge scroll-up">Cosmetics</a>
                </div>

                <p class="hero-desc mb-0 scroll-up">
                    Led by Dr. Avneesh Tyagi — BDS, Certified Implantologist & Cosmetic Dentist. ✨ 
                    An infection-free, ultra-modern clinic built for comfort, precision, and lasting results.
                </p> -->
            </div>

            <div class="col-lg-4 position-relative scroll-up">
                <!-- Glassmorphic Review Card Box -->
                <div class="review-card">
                    <div class="review-rating mb-2">
                        4.9
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" class="svg" style=" color: #081c42;">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                        </svg>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="avatar-stack">
                            <img src="./images/test1.jpg" alt="User">
                            <img src="./images/test2.jpg" alt="User">
                            <img src="./images/test3.jpg" alt="User">
                            <div class="avatar-plus">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                                    <path d="M12 5v14M5 12h14"/>
                                </svg>
                            </div>
                        </div>
                        <div class="review-text">
                            Happy<br>Patients
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</div>

<section class="about-section">
    <div class="container position-relative">
        
        <div class="floating-img-container img-left-side d-none d-md-block">
            <img src="./images/about1.avif" alt="Dental Care Left">
        </div>

        <div class="about-wrapper px-3">
            <span class="badge-about">About Us</span>
            
            <h2 class="about-heading scroll-up">
                Located at Shop no. 3 & 4 , K.N. Modi Complex, Near P.N.B., Modinagar, we've built a reputation on one principle — every patient deserves precision, comfort, and complete transparency. 
                <span class="text-dimmed">From your first consultation to your final follow-up, we're with you every step of the way.</span>
            </h2>

            <a href="./about.php" class="btn-learn-more scroll-up">
                <!-- <span class="svg-circle">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </span> -->
                Learn More About Us
            </a>
        </div>

        <div class="floating-img-container img-right-side d-none d-md-block">
            <img src="./images/about2.png" alt="Dental Care Right">
        </div>

        <div class="floating-img-wrapper d-flex d-md-none">
            <div class="floating-img-container img-left-side">
                <img src="./images/about1.avif" alt="Dental Care Left">
            </div>
            <div class="floating-img-container img-right-side">
                <img src="./images/about2.png" alt="Dental Care Right">
            </div>
        </div>

    </div>
</section>

<section class="aligners-section py-5 position-relative">
    <div class="container">
        
        <div class="row align-items-end mb-5">
            <div class="col-lg-7">
                <span class="badge-aligners mb-2 d-inline-block">Advanced Orthodontics</span>
                <h2 class="aligners-heading mb-0">The Modern Alternative to Braces — Clear Aligners</h2>
            </div>
            <div class="col-lg-5 mt-3 mt-lg-0">
                <p class="aligners-lead mb-0">
                    Straighten your teeth with micro-precision using custom-engineered, transparent tracking layouts designed for your lifestyle.
                </p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            
            <div class="col-md-6 col-lg-4">
                <div class="aligner-grid-card h-100">
                    <div class="aligner-card-header">
                        <div class="aligner-icon-box">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </div>
                        <span class="aligner-card-num">01</span>
                    </div>
                    <div class="aligner-card-body">
                        <h3 class="aligner-card-title">100% Virtually Invisible</h3>
                        <p class="aligner-card-text">
                            Premium medical-grade clear polymers ensure your corrective structural treatment remains completely confidential throughout your daily routine.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="aligner-grid-card h-100">
                    <div class="aligner-card-header">
                        <div class="aligner-icon-box">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                                <path d="M8 12h8"></path>
                            </svg>
                        </div>
                        <span class="aligner-card-num">02</span>
                    </div>
                    <div class="aligner-card-body">
                        <h3 class="aligner-card-title">Effortlessly Removable</h3>
                        <p class="aligner-card-text">
                            Maintain perfect oral hygiene without restrictions. Take your sets out cleanly whenever you eat, drink, brush your teeth, or attend special occasions.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="aligner-grid-card h-100">
                    <div class="aligner-card-header">
                        <div class="aligner-icon-box">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                            </svg>
                        </div>
                        <span class="aligner-card-num">03</span>
                    </div>
                    <div class="aligner-card-body">
                        <h3 class="aligner-card-title">3D Digital Mapping</h3>
                        <p class="aligner-card-text">
                            Preview your final smile transformation via predictive simulations before your custom aligner matrices are even sent to production.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="impact-section py-5">
    <div class="container">
        
        <span class="badge-impact">Numbers</span>
        <h2 class="impact-main-title scroll-up mb-5">Our Clinic, By the Numbers —<br>Results That Speak for Themselves</h2>

        <!-- Reconfigured Into a Single Row Grid -->
        <div class="row g-4 justify-content-center">
            
            <!-- Stat 1: Smiles Restored -->
            <div class="col-6 col-lg-3 scroll-up">
                <div class="impact-card h-100 d-flex flex-column justify-content-between p-3">
                    <div>
                        <!-- The data attributes pass the target values to the JS counter script -->
                        <div class="impact-stat d-inline-block" data-target="10000" data-suffix="+">0+</div>
                        <div class="impact-label mt-2">Smiles<br>Restored</div>
                    </div>
                    <p class="impact-text mt-3 mb-0">Thousands of patients across Modinagar — treated, transformed, and smiling with confidence.</p>
                </div>
            </div>

            <!-- Stat 2: Years of Practice -->
            <div class="col-6 col-lg-3 scroll-up">
                <div class="impact-card h-100 d-flex flex-column justify-content-between p-3">
                    <div>
                        <div class="impact-stat d-inline-block" data-target="15" data-suffix="+">0+</div>
                        <div class="impact-label mt-2">Years of<br>Practice</div>
                    </div>
                    <p class="impact-text mt-3 mb-0">Over a decade of specialised experience in implantology and cosmetic dentistry across the region.</p>
                </div>
            </div>

            <!-- Stat 3: Specialist Doctors -->
            <div class="col-6 col-lg-3 scroll-up">
                <div class="impact-card h-100 d-flex flex-column justify-content-between p-3">
                    <div>
                        <div class="impact-stat d-inline-block" data-target="5" data-suffix="+">0+</div>
                        <div class="impact-label mt-2">Specialist<br>Doctors</div>
                    </div>
                    <p class="impact-text mt-3 mb-0">A panel of specialists — orthodontist, oral surgeon, cosmetic dentist — all under one roof.</p>
                </div>
            </div>

            <!-- Stat 4: Emergency Support -->
            <div class="col-6 col-lg-3 scroll-up">
                <div class="impact-card h-100 d-flex flex-column justify-content-between p-3">
                    <div>
                        <div class="impact-stat dynamic-text mb-0" style="line-height: 1;">24/7</div>
                        <div class="impact-label mt-2">Emergency<br>Support</div>
                    </div>
                    <p class="impact-text mt-3 mb-0">Reach us anytime — 9837690770 or 9319128319 — for urgent dental care when you need it most.</p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ========================================== -->
<!--       PREMIUM CLINICAL DIRECTORS SECTION   -->
<!-- ========================================== -->
<!-- <section class="doctor-section py-5 position-relative overflow-hidden">
    <div class="dr-ambient-glow"></div>

    <div class="container position-relative" style="z-index: 2;">
    
        <div class="row align-items-end mb-5 scroll-up">
            <div class="col-md-7">
                <span class="badge-dr-section mb-2 d-inline-block">Medical Leadership</span>
                <h2 class="dr-section-title mb-0">Meet Our Chief Medical Director & Specialist</h2>
            </div>
            <div class="col-md-5 mt-3 mt-md-0 text-start text-md-end">
                <p class="dr-section-lead text-dimmed mb-0">
                    Combining clinical expertise with cutting-edge medical tech to reshape patient experiences in Modinagar.
                </p>
            </div>
        </div>
       <div class="dr-profile-full-width scroll-up">
    <div class="row g-0 align-items-stretch">
        
        <div class="col-lg-6 position-relative">
            <div class="dr-full-image-container">
                <img src="https://i.pinimg.com/1200x/fe/da/86/feda86f97d839ea44399ac90e17e3af1.jpg" alt="Dr. Pradeep Raghav" class="dr-full-photo">
                
                <div class="dr-full-status">
                    <span class="status-pulse-dot"></span>
                    <span>Accepting New Patients • Orthodontist & Dentofacial Orthopedics</span>
                </div>
            </div>
        </div>

        <div class="col-lg-6 d-flex flex-column justify-content-center">
            <div class="dr-full-content-pane p-4 p-md-5">
                
                <div class="dr-full-header mb-4">
                    <span class="dr-full-badge mb-2 d-inline-block">Senior Specialist</span>
                    <h2 class="dr-full-name mb-1">Dr. Pradeep Raghav</h2>
                    <p class="dr-full-subtitle mb-0">BDS, MDS ORTHODONTICS (1998) | King George Medical College</p>
                </div>

                <hr class="dr-full-divider">

                <p class="dr-full-bio mb-4">
                    Dr. Pradeep Raghav is a highly experienced specialist in Orthodontics and Dentofacial Orthopedics. An alumnus of King George Medical College (Class of 1998), he brings over 27 years of clinical expertise to advanced smile corrections, malocclusion therapeutics, and jaw alignment transformations.
                </p>

                <div class="row g-4 dr-full-metrics mb-5">
                    <div class="col-sm-4 col-6">
                        <div class="metric-block">
                            <span class="metric-val">27</span>
                            <span class="metric-lbl">Years Experience</span>
                        </div>
                    </div>
                    <div class="col-sm-4 col-6">
                        <div class="metric-block">
                            <span class="metric-val">MDS</span>
                            <span class="metric-lbl">Orthodontics</span>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="metric-block">
                            <span class="metric-val">5.0 ★</span>
                            <span class="metric-lbl">Patient Rating</span>
                        </div>
                    </div>
                </div>

                <div class="dr-full-actions d-flex flex-wrap gap-3">
                    <a href="#book-appointment" class="btn-full-primary">
                        <span>Schedule Private Consultation</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                    <a href="tel:+919837690770" class="btn-full-secondary">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1 2 1.72z"/>
                        </svg>
                        Direct Call Support
                    </a>
                </div>

            </div>
        </div>

    </div>
</div>

    </div>
</section> -->

<section class="values-section">
    <div class="container">
        <div class="row align-items-center g-4">
            
            <div class="col-lg-7">
                <div class="row g-4">
                    
                    <div class="col-sm-6">
                        <div class="d-flex flex-column gap-4">
                            
                            <!-- Card 1: Infection-Free Environment -->
                            <div class="value-card scroll-up">
                                <div class="value-icon-wrapper">
                                      <img width="60" src="./images/icons/6.png" alt="icons">
                                </div>
                                <h3 class="value-card-title">Infection-Free Clinic</h3>
                                <p class="value-card-text">Ultra-modern sterilisation protocols ensure a safe, hygienic environment every visit.</p>
                            </div>

                            <!-- Card 3: Personalised Treatment -->
                            <div class="value-card scroll-up">
                                <div class="value-icon-wrapper">
                                      <img width="60" src="./images/icons/8.png" alt="icons">
                                </div>
                                <h3 class="value-card-title">Personalised Treatment</h3>
                                <p class="value-card-text">Every plan is designed around your specific dental health — no templates, no shortcuts.</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-6 offset-col-down mt-4">
                        <div class="d-flex flex-column gap-4">

                            <!-- Card 2: Advanced Technology -->
                            <div class="value-card scroll-up">
                                <div class="value-icon-wrapper">
                                      <img width="60" src="./images/icons/7.png" alt="icons">
                                </div>
                                <h3 class="value-card-title">Advanced Technology</h3>
                                <p class="value-card-text">Digital X-Ray OPG &amp; RVG, Intra-Oral Camera, Rotary RCT — equipped for precise diagnostics.</p>
                            </div>

                            <!-- Card 4: Transparent & Trustworthy -->
                            <div class="value-card scroll-up">
                                <div class="value-icon-wrapper">
                                      <img width="60" src="./images/icons/9.png" alt="icons">
                                </div>
                                <h3 class="value-card-title">Transparent &amp; Trustworthy</h3>
                                <p class="value-card-text">Clear diagnosis, honest pricing — you'll always know exactly what to expect and why.</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-5 right-content-col ps-lg-5 scroll-up">
                <span class="badge-values">Core Values</span>
                <h2 class="values-main-title ">The Principles That Drive Every Treatment We Deliver</h2>
                <p class="values-description">
                    At Dr. Tyagi's clinic, quality is non-negotiable. Our values reflect a deep commitment to patient safety, clinical excellence, and genuine compassion.
                </p>
            </div>

        </div>
    </div>
</section>

<section class="services-section">
    <div class="container">
        
        <div class="d-flex align-items-end justify-content-between mb-5 header-flex-row">
            <div>
                <span class="badge-services scroll-up">Our Services</span>
                <h2 class="services-title scroll-up">Comprehensive Dental Care Under One Roof</h2>
            </div>
            
            <div class="carousel-controls-wrapper">
                <div class="btn-carousel-ctrl" id="slidePrev">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="19" y1="12" x2="5" y2="12"></line>
                        <polyline points="12 19 5 12 12 5"></polyline>
                    </svg>
                </div>
                <div class="btn-carousel-ctrl" id="slideNext">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </div>
            </div>
        </div>

        <div class="slider-viewport">
            <div class="slider-track" id="sliderTrack">
                
                <!-- Card 1: Dental Implants -->
                <div class="slider-card-item scroll-up">
                    <div class="service-card">
                        <div>
                            <div class="service-icon-box">
                                <img width="60" src="./images/icons/1.png" alt="icons">
                            </div>
                            <h3 class="service-card-title">Dental Implants</h3>
                            <p class="service-card-desc">Restore missing teeth with titanium implants — natural-looking, permanent, and built to last a lifetime.</p>
                            <a href="#" class="btn-view-details">
                                <span class="svg-blue-dot">
                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                                        <path d="M5 12h14M12 5l7 7-7 7"/>
                                    </svg>
                                </span>
                                View Details
                            </a>
                        </div>
                        <img src="./images/about1.avif" alt="Dental Implants" class="service-card-img">
                    </div>
                </div>

                <!-- Card 2: Root Canal Treatment -->
                <div class="slider-card-item scroll-up">
                    <div class="service-card">
                        <div>
                            <div class="service-icon-box">
                                <img width="60" src="./images/icons/2.png" alt="icons">
                            </div>
                            <h3 class="service-card-title">Painless RCT</h3>
                            <p class="service-card-desc">Rotary instrument-assisted Root Canal Treatment — fast, precise, and completely pain-free under expert care.</p>
                            <a href="#" class="btn-view-details">
                                <span class="svg-blue-dot">
                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                                        <path d="M5 12h14M12 5l7 7-7 7"/>
                                    </svg>
                                </span>
                                View Details
                            </a>
                        </div>
                        <img src="./images/about2.png" alt="Root Canal Treatment" class="service-card-img">
                    </div>
                </div>

                <!-- Card 3: Orthodontic Treatment -->
                <div class="slider-card-item scroll-up">
                    <div class="service-card">
                        <div>
                            <div class="service-icon-box">
                                 <img width="60" src="./images/icons/3.png" alt="icons">
                            </div>
                            <h3 class="service-card-title">Orthodontic Treatment</h3>
                            <p class="service-card-desc">Braces and alignment solutions for crooked or misaligned teeth — guided by specialist Dr. Pradeep Raghav.</p>
                            <a href="#" class="btn-view-details">
                                <span class="svg-blue-dot">
                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                                        <path d="M5 12h14M12 5l7 7-7 7"/>
                                    </svg>
                                </span>
                                View Details
                            </a>
                        </div>
                        <img src="./images/1.png" alt="Orthodontic Treatment" class="service-card-img">
                    </div>
                </div>

                <!-- Card 4: Crown & Bridge -->
                <div class="slider-card-item scroll-up">
                    <div class="service-card">
                        <div>
                            <div class="service-icon-box">
                                 <img width="60" src="./images/icons/4.png" alt="icons">
                            </div>
                            <h3 class="service-card-title">Crown &amp; Bridge</h3>
                            <p class="service-card-desc">Custom crowns and fixed bridges that seamlessly restore function and aesthetics to damaged or missing teeth.</p>
                            <a href="#" class="btn-view-details">
                                <span class="svg-blue-dot">
                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                                        <path d="M5 12h14M12 5l7 7-7 7"/>
                                    </svg>
                                </span>
                                View Details
                            </a>
                        </div>
                        <img src="./images/2.png" alt="Crown & Bridge" class="service-card-img">
                    </div>
                </div>

                <!-- Card 5: Teeth Bleaching & Cosmetic Fillings -->
                <div class="slider-card-item scroll-up">
                    <div class="service-card">
                        <div>
                            <div class="service-icon-box">
                                 <img width="60" src="./images/icons/5.png" alt="icons">
                            </div>
                            <h3 class="service-card-title">Bleaching &amp; Cosmetic Fillings</h3>
                            <p class="service-card-desc">Professional teeth bleaching and UV light-cured cosmetic fillings for a noticeably brighter, natural-looking smile.</p>
                            <a href="#" class="btn-view-details">
                                <span class="svg-blue-dot">
                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                                        <path d="M5 12h14M12 5l7 7-7 7"/>
                                    </svg>
                                </span>
                                View Details
                            </a>
                        </div>
                        <img src="./images/3.png" alt="Bleaching & Cosmetic Fillings" class="service-card-img">
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<section class="choose-section">
    <div class="container text-center">
        
        <span class="badge-choose">Why Choose Us</span>
        <h2 class="choose-main-title scroll-up">Decades of Expertise.<br>A Team You Can Trust.</h2>
        <p class="choose-description scroll-up">
            From advanced diagnostics to painless extractions, every procedure at our clinic is performed with clinical precision, genuine empathy, and respect for your time.
        </p>

        <div class="row align-items-center text-start g-lg-5 ">
            
            <div class="col-lg-6">
                <div class="choose-list-wrapper scroll-up">
                    
                    <div class="choose-list-item">
                        <div class="choose-item-number">01<span>/</span></div>
                        <h3 class="choose-item-title">Certified Implantologist &amp; Cosmetic Dentist</h3>
                    </div>

                    <div class="choose-list-item">
                        <div class="choose-item-number">02<span>/</span></div>
                        <h3 class="choose-item-title">Digital X-Ray &amp; Intra-Oral Camera Diagnostics</h3>
                    </div>

                    <div class="choose-list-item">
                        <div class="choose-item-number">03<span>/</span></div>
                        <h3 class="choose-item-title">Strict Sterile &amp; Infection-Free Protocols</h3>
                    </div>

                    <div class="choose-list-item">
                        <div class="choose-item-number">04<span>/</span></div>
                        <h3 class="choose-item-title">Specialist Panel — Orthodontist, Oral Surgeon &amp; More</h3>
                    </div>

                    <div class="choose-list-item">
                        <div class="choose-item-number">05<span>/</span></div>
                        <h3 class="choose-item-title">24/7 Emergency Support Available</h3>
                    </div>

                </div>
            </div>

            <div class="col-lg-6 image-col-spacer">
                <div class="choose-image-container scroll-up">
                    <img src="./images/4.jpg" alt="Dr. Avneesh Tyagi" class="choose-main-img">
                    
                    <div class="glass-trust-card">
                        <div class="glass-trust-label">Trusted by</div>
                        <div class="glass-trust-counter">20k+</div>
                        
                        <div class="avatar-overlap-group">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&h=100&q=80" alt="User Avatar 1" class="avatar-thumb" style="z-index: 5;">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=100&h=100&q=80" alt="User Avatar 2" class="avatar-thumb" style="z-index: 4;">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=100&h=100&q=80" alt="User Avatar 3" class="avatar-thumb" style="z-index: 3;">
                            <div class="avatar-plus-trigger">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                            </div>
                            <span class="avatar-group-text">Happy Patient</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- ========================================== -->
<!--       PREMIUM CLINICAL TEAM SECTION        -->
<!-- ========================================== -->
<section class="team-section py-5 position-relative">
    <div class="container">
        <div class="row align-items-end mb-5 scroll-up">
            <div class="col-md-7">
                <span class="badge-team-section mb-2 d-inline-block">Expert Panel</span>
                <h2 class="team-section-title mb-0">Our Medical Specialists</h2>
            </div>
            <div class="col-md-5 mt-3 mt-md-0 text-start text-md-end">
                <p class="team-section-lead text-dimmed mb-0">
                    A dedicated group of certified clinical specialists collaborating to deliver precision care under one roof.
                </p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            
            <div class="col-md-6 col-lg-4 scroll-up">
                <div class="team-card h-100">
                    <div class="team-image-wrapper">
                        <img src="./images/team/1.png" alt="Dr. Pradeep Raghav" class="team-photo">
                    </div>
                    <div class="team-body">
                        <div class="team-meta">
                            <h3 class="team-name">Dr. Pradeep Raghav</h3>
                            <span class="team-designation">BDS, MDS Orthodontics (1998)</span>
                        </div>
                        <p class="team-desc">
                            Specializing in Orthodontics and Dentofacial Orthopedics. Graduated from King George Medical College with 27 years of extensive clinical experience.
                        </p>
                        <div class="team-actions">
                            <a href="tel:+919837690770" class="team-action-btn" aria-label="Call Doctor">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1 2 1.72z"/>
                                </svg>
                            </a>
                            <a href="mailto:pradeep@digitalreach.digital" class="team-action-btn" aria-label="Email Doctor">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                    <polyline points="22,6 12,13 2,6"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 scroll-up">
                <div class="team-card h-100">
                    <div class="team-image-wrapper">
                        <img src="./images/team/2.png" alt="Dr. Santosh Kumar Kumhar" class="team-photo">
                    </div>
                    <div class="team-body">
                        <div class="team-meta">
                            <h3 class="team-name">Dr. Santosh Kumar Kumhar</h3>
                            <span class="team-designation">BDS, MDS Oral & Maxillofacial Surgeon</span>
                        </div>
                        <p class="team-desc">
                            B.D.S from MRDC Faridabad (2007-2012) and M.D.S from IDST Modinagar (2013-2016). Specializes in complex extractions and facial trauma surgery.
                        </p>
                        <div class="team-actions">
                            <a href="tel:+919837690770" class="team-action-btn" aria-label="Call Doctor">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1 2 1.72z"/>
                                </svg>
                            </a>
                            <a href="mailto:santosh@digitalreach.digital" class="team-action-btn" aria-label="Email Doctor">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                    <polyline points="22,6 12,13 2,6"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Member 3: Dr. Sunaina Saraswat -->
            <div class="col-md-6 col-lg-4 scroll-up">
                <div class="team-card h-100">
                    <div class="team-image-wrapper">
                        <img src="./images/team/3.png" alt="Dr. Sunaina Saraswat" class="team-photo">
                    </div>
                    <div class="team-body">
                        <div class="team-meta">
                            <h3 class="team-name">Dr. Sunaina Saraswat</h3>
                            <span class="team-designation">B.D.S, Dental Surgeon</span>
                        </div>
                        <p class="team-desc">
                            Completed her B.D.S tracking from 2014–2019 at IDST Modinagar, Ghaziabad. Expert in root fillings, restorative work, and preventive medicine.
                        </p>
                        <div class="team-actions">
                            <a href="tel:+919837690770" class="team-action-btn" aria-label="Call Doctor">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1 2 1.72z"/>
                                </svg>
                            </a>
                            <a href="mailto:sunaina@digitalreach.digital" class="team-action-btn" aria-label="Email Doctor">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                    <polyline points="22,6 12,13 2,6"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Member 4: Dr. Shreya -->
            <div class="col-md-6 col-lg-4 scroll-up">
                <div class="team-card h-100">
                    <div class="team-image-wrapper">
                        <img src="./images/team/4.png" alt="Dr. Shreya" class="team-photo">
                    </div>
                    <div class="team-body">
                        <div class="team-meta">
                            <h3 class="team-name">Dr. Shreya</h3>
                            <span class="team-designation">B.D.S, Periodontist & Implantologist</span>
                        </div>
                        <p class="team-desc">
                            Clinical practitioner specializing comprehensively in surgical implant placements, bone management, and comprehensive periodontal gum health therapies.
                        </p>
                        <div class="team-actions">
                            <a href="tel:+919837690770" class="team-action-btn" aria-label="Call Doctor">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1 2 1.72z"/>
                                </svg>
                            </a>
                            <a href="mailto:shreya@digitalreach.digital" class="team-action-btn" aria-label="Email Doctor">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                    <polyline points="22,6 12,13 2,6"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Member 5: Dr. Akash Raj -->
            <div class="col-md-6 col-lg-4 scroll-up">
                <div class="team-card h-100">
                    <div class="team-image-wrapper">
                        <img src="./images/team/5.png" alt="Dr. Akash Raj" class="team-photo">
                    </div>
                    <div class="team-body">
                        <div class="team-meta">
                            <h3 class="team-name">Dr. Akash Raj</h3>
                            <span class="team-designation">B.D.S (BHU), M.D.S Prosthodontist & Implantologist</span>
                        </div>
                        <p class="team-desc">
                            Earned his B.D.S from BHU (2009–2014) and M.D.S from IDST Modinagar (2017–2020). Specializes in crowns, bridges, and advanced full-mouth restorations.
                        </p>
                        <div class="team-actions">
                            <a href="tel:+919837690770" class="team-action-btn" aria-label="Call Doctor">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1 2 1.72z"/>
                                </svg>
                            </a>
                            <a href="mailto:akash@digitalreach.digital" class="team-action-btn" aria-label="Email Doctor">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                    <polyline points="22,6 12,13 2,6"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="cases-section">
    <div class="container">
        
        <div class="d-flex align-items-end justify-content-between mb-5 header-row-flex">
            <div>
                <span class="badge-cases">Case Study</span>
                <h2 class="cases-title scroll-up">Real Patients. Real Results. Life-Changing Smiles.</h2>
            </div>
            <div>
                <a href="#" class="btn-see-all">
                    <span class="cta-white-circle">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </span>
                    See All Case Studies
                </a>
            </div>
        </div>

        <div class="row g-4">
            
            <!-- Card 1: Full Mouth Scanning & Gum Treatment -->
            <div class="col-lg-4 col-md-6">
                <div class="case-card scroll-up">
                    <div>
                        <div class="row g-3 align-items-start">
                            <div class="col-7">
                                <h3 class="case-card-title">Gum Disease Reversal &amp; Full Scan</h3>
                                <ul class="case-meta-list">
                                    <li><strong>Patient:</strong> Rekha S. (Age 38)</li>
                                    <li><strong>Treatment:</strong> Ultrasonic Cleaning + Full Mouth Scan</li>
                                    <li><strong>Timeline:</strong> 2 Months</li>
                                </ul>
                                <a href="#" class="btn-case-details">
                                    <span class="cta-blue-circle">
                                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </span>
                                    View Details
                                </a>
                            </div>
                            <div class="col-5">
                                <img src="./images/5.jpg" alt="Gum Treatment" class="case-img">
                            </div>
                        </div>
                    </div>
                    
                    <div class="case-metrics-panel">
                        <div class="metric-cell">
                            <span class="metric-label">Bleeding reduced</span>
                            <div class="metric-value">90%</div>
                        </div>
                        <div class="metric-cell">
                            <span class="metric-label">Clarity improved</span>
                            <div class="metric-value">30%</div>
                        </div>
                        <div class="metric-cell">
                            <span class="metric-label">Treatment success</span>
                            <div class="metric-value">9.8/10</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2: Single Implant + Crown by Dr. Avneesh -->
            <div class="col-lg-4 col-md-6">
                <div class="case-card scroll-up">
                    <div>
                        <div class="row g-3 align-items-start">
                            <div class="col-7">
                                <h3 class="case-card-title">Single Implant &amp; Crown Restoration</h3>
                                <ul class="case-meta-list">
                                    <li><strong>Patient:</strong> Amit K. (Age 44)</li>
                                    <li><strong>Treatment:</strong> Titanium Implant + Ceramic Crown</li>
                                    <li><strong>Timeline:</strong> 8 Months</li>
                                </ul>
                                <a href="#" class="btn-case-details">
                                    <span class="cta-blue-circle">
                                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </span>
                                    View Details
                                </a>
                            </div>
                            <div class="col-5">
                                <img src="./images/6.jpg" alt="Implant & Crown" class="case-img">
                            </div>
                        </div>
                    </div>
                    
                    <div class="case-metrics-panel">
                        <div class="metric-cell">
                            <span class="metric-label">Implants placed</span>
                            <div class="metric-value">1</div>
                        </div>
                        <div class="metric-cell">
                            <span class="metric-label">Bite restored</span>
                            <div class="metric-value">100%</div>
                        </div>
                        <div class="metric-cell">
                            <span class="metric-label">Treatment success</span>
                            <div class="metric-value">9.7/10</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3: Orthodontic Alignment by Dr. Pradeep Raghav -->
            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="case-card scroll-up">
                    <div>
                        <div class="row g-3 align-items-start">
                            <div class="col-7">
                                <h3 class="case-card-title">Full Orthodontic Alignment</h3>
                                <ul class="case-meta-list">
                                    <li><strong>Patient:</strong> Priya M. (Age 22)</li>
                                    <li><strong>Treatment:</strong> Metal Braces + Retainer</li>
                                    <li><strong>Timeline:</strong> 18 Months</li>
                                </ul>
                                <a href="#" class="btn-case-details">
                                    <span class="cta-blue-circle">
                                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </span>
                                    View Details
                                </a>
                            </div>
                            <div class="col-5">
                                <img src="./images/7.jpg" alt="Orthodontic Alignment" class="case-img">
                            </div>
                        </div>
                    </div>
                    
                    <div class="case-metrics-panel">
                        <div class="metric-cell">
                            <span class="metric-label">Alignment score</span>
                            <div class="metric-value">A+</div>
                        </div>
                        <div class="metric-cell">
                            <span class="metric-label">Confidence boost</span>
                            <div class="metric-value">High</div>
                        </div>
                        <div class="metric-cell">
                            <span class="metric-label">Treatment success</span>
                            <div class="metric-value">10/10</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<section class="testimonials-section">
    <div class="container">
        
        <span class="badge-testimonials">Testimonials</span>
        <h2 class="testimonials-title scroll-up">What Our Patients Say</h2>

        <div class="row g-4">
            
            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card scroll-up card-immersive">
                    <div class="author-profile-box">
                        <img src="./images/test1.jpg" alt="Rajesh V." class="author-avatar">
                        <h3 class="author-name">Rajesh V.</h3>
                    </div>
                    <div>
                        <div class="quote-icon-mark">"</div>
                        <p class="testimonial-quote-text">
                            I was terrified of implants — but Dr. Tyagi's calm, clear explanation put me completely at ease. The result is truly life-changing.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card scroll-up card-immersive2">
                    <div class="author-profile-box">
                        <img src="./images/test2.jpg" alt="Sunil B." class="author-avatar">
                        <h3 class="author-name">Sunil B.</h3>
                    </div>
                    <div>
                        <div class="quote-icon-mark">"</div>
                        <p class="testimonial-quote-text">
                            Had RCT done here — zero pain, incredibly smooth process. The rotary instrument technique made all the difference. Highly recommended.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="testimonial-card scroll-up card-immersive3">
                    <div class="author-profile-box">
                        <img src="./images/test3.jpg" alt="Neha R." class="author-avatar">
                        <h3 class="author-name">Rajveer R.</h3>
                    </div>
                    <div>
                        <div class="quote-icon-mark">"</div>
                        <p class="testimonial-quote-text">
                            The digital X-ray and full scan gave such clarity on my dental health. Mrs. Archana Tyagi is wonderfully warm and thorough — I trust this clinic completely.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="articles-section">
    <div class="container">
        
        <div class="d-flex align-items-end justify-content-between mb-5 header-row-flex">
            <div>
                <span class="badge-articles">Articles</span>
                <h2 class="articles-title scroll-up">Dental Insights — Tips, Guides &amp; Expert Advice</h2>
            </div>
            <div>
                <a href="#" class="btn-view-all">
                    <span class="cta-white-circle">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </span>
                    View All
                </a>
            </div>
        </div>

        <div class="premium-bento-grid">
            
            <!-- Card 1: Wide -->
            <div class="bento-card scroll-up span-wide">
                <div class="bento-img-frame">
                    <img src="https://images.unsplash.com/photo-1551076805-e1869033e561?auto=format&fit=crop&w=800&h=500&q=80" alt="Dental Implants Guide" class="bento-img">
                </div>
                <div>
                    <div class="bento-meta-row">
                        <span class="bento-category">Implantology</span>
                        <span class="meta-dot"></span>
                        <span class="bento-date">March 15, 2025</span>
                    </div>
                    <h3 class="bento-card-title">Are Dental Implants Right for You? A Complete Patient Guide</h3>
                    <p class="bento-card-excerpt">Wondering if you're a candidate for implants? Dr. Tyagi walks through eligibility, the procedure, recovery, and what makes titanium implants the gold standard for missing tooth replacement.</p>
                </div>
                <a href="#" class="btn-read-more">
                    <span class="cta-blue-circle">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </span>
                    Read More
                </a>
            </div>

            <!-- Card 2: Normal -->
            <div class="bento-card scroll-up span-normal">
                <div class="bento-img-frame">
                    <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=500&h=400&q=80" alt="RCT Myths" class="bento-img">
                </div>
                <div>
                    <div class="bento-meta-row">
                        <span class="bento-category">Painless RCT</span>
                        <span class="meta-dot"></span>
                        <span class="bento-date">February 8, 2025</span>
                    </div>
                    <h3 class="bento-card-title">5 Myths About Root Canal Treatment — Debunked</h3>
                    <p class="bento-card-excerpt">Modern rotary RCT is nothing like what you've heard. Here's what actually happens — and why it's virtually painless today.</p>
                </div>
                <a href="#" class="btn-read-more">
                    <span class="cta-blue-circle">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </span>
                    Read More
                </a>
            </div>

            <!-- Card 3: Normal -->
            <div class="bento-card scroll-up span-normal">
                <div class="bento-img-frame">
                    <img src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?auto=format&fit=crop&w=500&h=400&q=80" alt="Children's Dental Care" class="bento-img">
                </div>
                <div>
                    <div class="bento-meta-row">
                        <span class="bento-category">Oral Hygiene</span>
                        <span class="meta-dot"></span>
                        <span class="bento-date">January 20, 2025</span>
                    </div>
                    <h3 class="bento-card-title">When Should Your Child First See a Dentist?</h3>
                    <p class="bento-card-excerpt">Early visits prevent bigger problems. Our specialists share what parents need to know about baby teeth, alignment, and preventive care timelines.</p>
                </div>
                <a href="#" class="btn-read-more">
                    <span class="cta-blue-circle">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </span>
                    Read More
                </a>
            </div>

            <!-- Card 4: Wide -->
            <div class="bento-card scroll-up span-wide">
                <div class="bento-img-frame">
                    <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?auto=format&fit=crop&w=800&h=500&q=80" alt="Digital Diagnostics" class="bento-img">
                </div>
                <div>
                    <div class="bento-meta-row">
                        <span class="bento-category">Technology</span>
                        <span class="meta-dot"></span>
                        <span class="bento-date">December 5, 2024</span>
                    </div>
                    <h3 class="bento-card-title">How Digital X-Ray OPG &amp; RVG Is Transforming Dental Diagnosis</h3>
                    <p class="bento-card-excerpt">Lower radiation, sharper images, instant results — digital radiography is changing how dentists detect problems early. Here's what it means for your next visit to our clinic.</p>
                </div>
                <a href="#" class="btn-read-more">
                    <span class="cta-blue-circle">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </span>
                    Read More
                </a>
            </div>

        </div>
    </div>
</section>

<?php include "./components/footer.php"?>
<script src="./script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>