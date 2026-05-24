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

<div class="container">
    <div class="hero-container p-4 p-md-5">
        
        <?php include "./components/navbar.php" ?>
        <!-- Main Hero Body Content -->
        <div class="row hero-content align-items-end">
            <div class="col-lg-8">
                
                <div class="d-flex align-items-start gap-3 mb-4">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-white-50 mt-1">
                        <path d="M12 2v20M2 12h20M5.63 5.63l12.74 12.74M5.63 18.37L18.37 5.63"/>
                    </svg>
                    <p class="sub-invite mb-0">Modinagar's most trusted multispeciality implant & cosmetic dental centre.</p>
                </div>

                <h1 class="hero-title">Precision Care.<br>Painless Treatment,</h1>

                <div class="mb-4">
                    <a href="#" class="tag-badge">Implants</a>
                    <a href="#" class="tag-badge">Digital X-Ray</a>
                    <a href="#" class="tag-badge">Orthodontics</a>
                    <a href="#" class="tag-badge">Painless RCT</a>
                    <a href="#" class="tag-badge">Cosmetics</a>
                </div>

                <p class="hero-desc mb-0">
                    Led by Dr. Avneesh Tyagi — BDS, Certified Implantologist & Cosmetic Dentist. ✨ 
                    An infection-free, ultra-modern clinic built for comfort, precision, and lasting results.
                </p>
            </div>

            <div class="col-lg-4 position-relative">
                <!-- Glassmorphic Review Card Box -->
                <div class="review-card">
                    <div class="review-rating mb-2">
                        4.9
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" class="text-white">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                        </svg>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="avatar-stack">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80" alt="User">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=100&q=80" alt="User">
                            <img src="https://images.unsplash.com/photo-1628157582853-a796fa650a6a?auto=format&fit=crop&w=100&q=80" alt="User">
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

<section class="about-section">
    <div class="container position-relative">
        
        <div class="floating-img-container img-left-side d-none d-md-block">
            <img src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?auto=format&fit=crop&w=400&q=80" alt="Dental Care Left">
        </div>

        <div class="about-wrapper px-3">
            <span class="badge-about">About Us</span>
            
            <h2 class="about-heading">
                Located at K.N. Modi Complex, Modinagar, we've built a reputation on one principle — every patient deserves precision, comfort, and complete transparency. 
                <span class="text-dimmed">From your first consultation to your final follow-up, we're with you every step of the way.</span>
            </h2>

            <a href="#" class="btn-learn-more">
                <span class="svg-circle">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </span>
                Learn More About Us
            </a>
        </div>

        <div class="floating-img-container img-right-side d-none d-md-block">
            <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?auto=format&fit=crop&w=400&q=80" alt="Dental Care Right">
        </div>

        <div class="floating-img-wrapper d-flex d-md-none">
            <div class="floating-img-container img-left-side">
                <img src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?auto=format&fit=crop&w=400&q=80" alt="Dental Care Left">
            </div>
            <div class="floating-img-container img-right-side">
                <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?auto=format&fit=crop&w=400&q=80" alt="Dental Care Right">
            </div>
        </div>

    </div>
</section>

<section class="values-section">
    <div class="container">
        <div class="row align-items-center g-4">
            
            <div class="col-lg-7">
                <div class="row g-4">
                    
                    <div class="col-sm-6">
                        <div class="d-flex flex-column gap-4">
                            
                            <!-- Card 1: Infection-Free Environment -->
                            <div class="value-card">
                                <div class="value-icon-wrapper">
                                    <svg width="46" height="46" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 2C8 2 5 5 5 9c0 3 1.5 5.5 3.5 7l.5 3h6l.5-3C17.5 14.5 19 12 19 9c0-4-3-7-7-7z"/>
                                        <path d="M9 12h6M12 9v6"/>
                                    </svg>
                                </div>
                                <h3 class="value-card-title">Infection-Free Clinic</h3>
                                <p class="value-card-text">Ultra-modern sterilisation protocols ensure a safe, hygienic environment every visit.</p>
                            </div>

                            <!-- Card 3: Personalised Treatment -->
                            <div class="value-card">
                                <div class="value-icon-wrapper">
                                    <svg width="46" height="46" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 11V6a4 4 0 0 1 8 0v5M8 11V9a4 4 0 0 1 4-4M4 13a8 8 0 0 1 15.3-3.1"/>
                                        <path d="M12 11v10M8 15v4M16 14v5M20 16v2"/>
                                    </svg>
                                </div>
                                <h3 class="value-card-title">Personalised Treatment</h3>
                                <p class="value-card-text">Every plan is designed around your specific dental health — no templates, no shortcuts.</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-6 offset-col-down">
                        <div class="d-flex flex-column gap-4">

                            <!-- Card 2: Advanced Technology -->
                            <div class="value-card">
                                <div class="value-icon-wrapper">
                                    <svg width="46" height="46" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M9 18h6M10 21h4"/>
                                        <path d="M12 3a7 7 0 0 0-7 7c0 2.5 1.5 4.5 3 5.5l.5 2.5h7l.5-2.5c1.5-1 3-3 3-5.5a7 7 0 0 0-7-7z"/>
                                        <path d="M12 7v4M10 9h4"/>
                                    </svg>
                                </div>
                                <h3 class="value-card-title">Advanced Technology</h3>
                                <p class="value-card-text">Digital X-Ray OPG &amp; RVG, Intra-Oral Camera, Rotary RCT — equipped for precise diagnostics.</p>
                            </div>

                            <!-- Card 4: Transparent & Trustworthy -->
                            <div class="value-card">
                                <div class="value-icon-wrapper">
                                    <svg width="46" height="46" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="5" y="10" width="14" height="11" rx="2"/>
                                        <path d="M7 10V6a5 5 0 0 1 10 0v4M12 14v3"/>
                                    </svg>
                                </div>
                                <h3 class="value-card-title">Transparent &amp; Trustworthy</h3>
                                <p class="value-card-text">Clear diagnosis, honest pricing — you'll always know exactly what to expect and why.</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-5 right-content-col ps-lg-5">
                <span class="badge-values">Core Values</span>
                <h2 class="values-main-title">The Principles That Drive Every Treatment We Deliver</h2>
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
                <span class="badge-services">Our Services</span>
                <h2 class="services-title">Comprehensive Dental Care Under One Roof</h2>
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
                <div class="slider-card-item">
                    <div class="service-card">
                        <div>
                            <div class="service-icon-box">
                                <svg width="42" height="42" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2C8.5 2 6 4.5 6 8c0 2.5 1 4.5 2.5 6 .5.5 1 .5 1 1v4c0 1 1 2 2.5 2s2.5-1 2.5-2v-4c0-.5.5-.5 1-1 1.5-1.5 2.5-3.5 2.5-6 0-3.5-2.5-6-6-6z"/>
                                    <path d="M12 19v3M10 21h4"/>
                                </svg>
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
                        <img src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?auto=format&fit=crop&w=500&q=80" alt="Dental Implants" class="service-card-img">
                    </div>
                </div>

                <!-- Card 2: Root Canal Treatment -->
                <div class="slider-card-item">
                    <div class="service-card">
                        <div>
                            <div class="service-icon-box">
                                <svg width="42" height="42" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2C8.5 2 6 4.5 6 8c0 2.5 1 4.5 2.5 6l1 3.5c.2.8.8 1.5 1.5 1.5h2c.7 0 1.3-.7 1.5-1.5l1-3.5c1.5-1.5 2.5-3.5 2.5-6 0-3.5-2.5-6-6-6z"/>
                                    <path d="M9 8h6M12 6v6"/>
                                </svg>
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
                        <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?auto=format&fit=crop&w=500&q=80" alt="Root Canal Treatment" class="service-card-img">
                    </div>
                </div>

                <!-- Card 3: Orthodontic Treatment -->
                <div class="slider-card-item">
                    <div class="service-card">
                        <div>
                            <div class="service-icon-box">
                                <svg width="42" height="42" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2C8.5 2 6 4.5 6 8c0 3.5 2.5 6 6 6s6-2.5 6-6-2.5-6-6-6z"/>
                                    <path d="M4 8h16M7 8v3M12 8v3M17 8v3"/>
                                </svg>
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
                        <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=500&q=80" alt="Orthodontic Treatment" class="service-card-img">
                    </div>
                </div>

                <!-- Card 4: Crown & Bridge -->
                <div class="slider-card-item">
                    <div class="service-card">
                        <div>
                            <div class="service-icon-box">
                                <svg width="42" height="42" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 9l3 3 3-3 3 3 3-3 3 3 3-3v9H3z"/>
                                    <path d="M3 6h18"/>
                                </svg>
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
                        <img src="https://images.unsplash.com/photo-1447479456533-40b35ed0d96d?auto=format&fit=crop&w=500&q=80" alt="Crown & Bridge" class="service-card-img">
                    </div>
                </div>

                <!-- Card 5: Teeth Bleaching & Cosmetic Fillings -->
                <div class="slider-card-item">
                    <div class="service-card">
                        <div>
                            <div class="service-icon-box">
                                <svg width="42" height="42" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2C8.5 2 6 4.5 6 8c0 2.5 1 4.5 2.5 6 .5.5 1 .5 1 1v4c0 1 1 2 2.5 2s2.5-1 2.5-2v-4c0-.5.5-.5 1-1 1.5-1.5 2.5-3.5 2.5-6 0-3.5-2.5-6-6-6z"/>
                                </svg>
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
                        <img src="https://images.unsplash.com/photo-1606811841689-23dfddce3e95?auto=format&fit=crop&w=500&q=80" alt="Bleaching & Cosmetic Fillings" class="service-card-img">
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<section class="choose-section">
    <div class="container text-center">
        
        <span class="badge-choose">Why Choose Us</span>
        <h2 class="choose-main-title">Decades of Expertise.<br>A Team You Can Trust.</h2>
        <p class="choose-description">
            From advanced diagnostics to painless extractions, every procedure at our clinic is performed with clinical precision, genuine empathy, and respect for your time.
        </p>

        <div class="row align-items-center text-start g-lg-5">
            
            <div class="col-lg-6">
                <div class="choose-list-wrapper">
                    
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
                <div class="choose-image-container">
                    <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&w=800&h=620&q=80" alt="Dr. Avneesh Tyagi" class="choose-main-img">
                    
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

<section class="impact-section">
    <div class="container">
        
        <span class="badge-impact">Numbers</span>
        <h2 class="impact-main-title">Our Clinic, By the Numbers —<br>Results That Speak for Themselves</h2>

        <div class="impact-table-wrapper">
            
            <!-- Row 1: Smiles Restored -->
            <div class="impact-row row g-3">
                <div class="col-md-4">
                    <div class="impact-label">Smiles<br>Restored</div>
                </div>
                <div class="col-md-4 text-start text-md-center text-lg-start ps-lg-5">
                    <div class="impact-stat">10,000+</div>
                </div>
                <div class="col-md-4 d-flex justify-content-md-start justify-content-lg-end">
                    <p class="impact-text">Thousands of patients across Modinagar — treated, transformed, and smiling with confidence.</p>
                </div>
            </div>

            <!-- Row 2: Years of Practice -->
            <div class="impact-row row g-3">
                <div class="col-md-4">
                    <div class="impact-label">Years of<br>Practice</div>
                </div>
                <div class="col-md-4 text-start text-md-center text-lg-start ps-lg-5">
                    <div class="impact-stat">15+</div>
                </div>
                <div class="col-md-4 d-flex justify-content-md-start justify-content-lg-end">
                    <p class="impact-text">Over a decade of specialised experience in implantology and cosmetic dentistry across the region.</p>
                </div>
            </div>

            <!-- Row 3: Specialist Doctors -->
            <div class="impact-row row g-3">
                <div class="col-md-4">
                    <div class="impact-label">Specialist<br>Doctors</div>
                </div>
                <div class="col-md-4 text-start text-md-center text-lg-start ps-lg-5">
                    <div class="impact-stat">5+</div>
                </div>
                <div class="col-md-4 d-flex justify-content-md-start justify-content-lg-end">
                    <p class="impact-text">A panel of specialists — orthodontist, oral surgeon, cosmetic dentist — all under one roof for complete care.</p>
                </div>
            </div>

            <!-- Row 4: Emergency Support -->
            <div class="impact-row row g-3">
                <div class="col-md-4">
                    <div class="impact-label">Emergency<br>Support</div>
                </div>
                <div class="col-md-4 text-start text-md-center text-lg-start ps-lg-5">
                    <div class="impact-stat">24/7</div>
                </div>
                <div class="col-md-4 d-flex justify-content-md-start justify-content-lg-end">
                    <p class="impact-text">Reach us anytime — 9837690770 or 9319128319 — for urgent dental care when you need it most.</p>
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
                <h2 class="cases-title">Real Patients. Real Results. Life-Changing Smiles.</h2>
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
                <div class="case-card">
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
                                <img src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?auto=format&fit=crop&w=300&h=400&q=80" alt="Gum Treatment" class="case-img">
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
                <div class="case-card">
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
                                <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?auto=format&fit=crop&w=300&h=400&q=80" alt="Implant & Crown" class="case-img">
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
                <div class="case-card">
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
                                <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=300&h=400&q=80" alt="Orthodontic Alignment" class="case-img">
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
        <h2 class="testimonials-title">What Our Patients Say</h2>

        <div class="row g-4">
            
            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card card-immersive">
                    <div class="author-profile-box">
                        <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?auto=format&fit=crop&w=100&h=100&q=80" alt="Rajesh V." class="author-avatar">
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
                <div class="testimonial-card card-minimal">
                    <div class="author-profile-box">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=100&h=100&q=80" alt="Sunil B." class="author-avatar">
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
                <div class="testimonial-card card-minimal">
                    <div class="author-profile-box">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=100&h=100&q=80" alt="Neha R." class="author-avatar">
                        <h3 class="author-name">Neha R.</h3>
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
                <h2 class="articles-title">Dental Insights — Tips, Guides &amp; Expert Advice</h2>
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
            <div class="bento-card span-wide">
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
            <div class="bento-card span-normal">
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
            <div class="bento-card span-normal">
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
            <div class="bento-card span-wide">
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