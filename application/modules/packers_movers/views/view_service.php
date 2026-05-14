<?php
$this->load->database();
$this->load->helper('text');
$st = strtolower(str_replace(" ", "-", $state));
$this->load->helper('text');
include 'city_content.php';
$ctlink = strtolower(str_replace(" ", "-", $city));
if (file_exists("./application/modules/packers_movers/views/data/$st.php")) {
    include "data/$st.php";
} else {
    redirect("error?Invalid+Request");
}
foreach ($cities as $ct) {
    if (@$ct['nm'] == $city) {
        $lat = $ct['lat'];
        $lon = $ct['lon'];
        $state_code = $ct['sc'];
        break;
    }
}
$state = ucwords($state);
$city = ucwords($city);
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="<?= base_url('assets/css/view_service.css') ?>">


<section class="eg-hero-slider city-page-slider" aria-label="City Specific Relocation Slider">
    <!-- Radio Controllers -->
    <input type="radio" name="hero-slide" id="h-slide1" class="d-none" checked>
    <input type="radio" name="hero-slide" id="h-slide2" class="d-none">
    <input type="radio" name="hero-slide" id="h-slide3" class="d-none">

    <!-- Breadcrumbs Overlay -->
    <nav class="breadcrumb-nav-city" data-animate="fade-down">
        <div class="container">
            <ol class="breadcrumb-custom-city">
                <li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= site_url('branches') ?>">Branches</a></li>
                <li class="breadcrumb-item"><a href="<?= site_url(strtolower(str_replace(" ", "-", $state))) ?>"><?= $state ?></a></li>
                <li class="breadcrumb-item active text-orange fw-bold"><?= $city ?></li>
            </ol>
        </div>
    </nav>

    <div class="eg-slider-inner">
        <!-- Slide 1: Primary City Service -->
        <article class="eg-slide slide-1">
            <div class="hero-bg" style="background-image: url('<?= base_url('assets/images/city/banner1.png') ?>');"></div>
            <div class="hero-overlay"></div>
            <div class="container position-relative z-index-10">
                <div class="row align-items-center min-vh-100 pt-5">
                    <div class="col-lg-7 text-white">
                        <header class="mb-4 mt-5">
                            <span class="badge bg-orange text-dark mb-3 px-3 py-2 fw-bold">LOCAL EXPERTS IN <?= strtoupper($city) ?></span>
                            <h1 class="display-3 fw-black mb-3">Egati <span class="text-orange">Packers and Movers</span> in <?= $city ?></h1>
                            <p class="lead opacity-75">Experience the gold standard of relocation in <?= $city ?>. Our premium team ensures every item is handled with surgical precision.</p>
                        </header>
                        
                        <div class="row g-4 mb-5">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-box-sm bg-white-10 rounded"><i class="bi bi-shield-check text-orange"></i></div>
                                    <div><strong class="d-block text-white">Elite Security</strong><small class="text-white-50">Premium Transit Insurance</small></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-box-sm bg-white-10 rounded"><i class="bi bi-truck text-orange"></i></div>
                                    <div><strong class="d-block text-white">Smart Logistics</strong><small class="text-white-50">AI-Optimized Routing in <?= $city ?></small></div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-3">
                            <a href="tel:<?= $phone ?>" class="btn btn-orange-lg px-4 py-3 fw-bold rounded-pill shadow-lg">Call <?= $city ?> Hub <i class="bi bi-telephone-fill ms-2"></i></a>
                            <label for="h-slide2" class="btn btn-outline-light px-4 py-3 fw-bold rounded-pill">Next Service <i class="bi bi-chevron-right ms-2"></i></label>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-5 mt-lg-0">
                        <?php $this->load->view('contacts/quoteform') ?>
                    </div>
                </div>
            </div>
        </article>

        <!-- Slide 2: Home Shifting Special -->
        <article class="eg-slide slide-2">
            <div class="hero-bg" style="background-image: url('<?= base_url('assets/images/city/banner2.png') ?>');"></div>
            <div class="hero-overlay"></div>
            <div class="container position-relative z-index-10">
                <div class="row align-items-center min-vh-100 pt-5">
                    <div class="col-lg-7 text-white">
                        <header class="mb-4 mt-5">
                            <span class="badge bg-orange text-dark mb-3 px-3 py-2 fw-bold">PREMIUM HOME SHIFTING</span>
                            <h2 class="display-3 fw-black mb-3">Luxury <span class="text-orange">Home Moving</span> <?= $city ?></h2>
                            <p class="lead opacity-75">Your home is your sanctuary. In <?= $city ?>, we provide white-glove shifting services for your most precious belongings.</p>
                        </header>
                        
                        <div class="row g-4 mb-5">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-box-sm bg-white-10 rounded"><i class="bi bi-box-seam text-orange"></i></div>
                                    <div><strong class="d-block text-white">5-Layer Packing</strong><small class="text-white-50">Ultimate Fragile Care</small></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-box-sm bg-white-10 rounded"><i class="bi bi-house-check text-orange"></i></div>
                                    <div><strong class="d-block text-white">Zero-Damage</strong><small class="text-white-50">Our Promise in <?= $city ?></small></div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-3">
                            <a href="tel:<?= $phone ?>" class="btn btn-orange-lg px-4 py-3 fw-bold rounded-pill shadow-lg">Get Free Quote <i class="bi bi-lightning-fill ms-2"></i></a>
                            <label for="h-slide3" class="btn btn-outline-light px-4 py-3 fw-bold rounded-pill">Vehicle Logistics <i class="bi bi-chevron-right ms-2"></i></label>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-5 mt-lg-0">
                        <?php $this->load->view('contacts/quoteform') ?>
                    </div>
                </div>
            </div>
        </article>

        <!-- Slide 3: Car & Bike Transport -->
        <article class="eg-slide slide-3">
            <div class="hero-bg" style="background-image: url('<?= base_url('assets/images/city/banner3.png') ?>');"></div>
            <div class="hero-overlay"></div>
            <div class="container position-relative z-index-10">
                <div class="row align-items-center min-vh-100 pt-5">
                    <div class="col-lg-7 text-white">
                        <header class="mb-4 mt-5">
                            <span class="badge bg-orange text-dark mb-3 px-3 py-2 fw-bold">VEHICLE LOGISTICS</span>
                            <h2 class="display-3 fw-black mb-3">Enclosed <span class="text-orange">Vehicle Transport</span></h2>
                            <p class="lead opacity-75">Relocating your vehicle from <?= $city ?>? We use specialized carriers with real-time GPS tracking for total peace of mind.</p>
                        </header>
                        
                        <div class="row g-4 mb-5">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-box-sm bg-white-10 rounded"><i class="bi bi-truck text-orange"></i></div>
                                    <div><strong class="d-block text-white">GPS Live Tracking</strong><small class="text-white-50">Track from <?= $city ?></small></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-box-sm bg-white-10 rounded"><i class="bi bi-shield-lock text-orange"></i></div>
                                    <div><strong class="d-block text-white">Full Insurance</strong><small class="text-white-50">Comprehensive Coverage</small></div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-3">
                            <a href="tel:<?= $phone ?>" class="btn btn-orange-lg px-4 py-3 fw-bold rounded-pill shadow-lg">Enquire Now <i class="bi bi-telephone-fill ms-2"></i></a>
                            <label for="h-slide1" class="btn btn-outline-light px-4 py-3 fw-bold rounded-pill">Main Service <i class="bi bi-arrow-left ms-2"></i></label>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-5 mt-lg-0">
                        <?php $this->load->view('contacts/quoteform') ?>
                    </div>
                </div>
            </div>
        </article>
    </div>

    <!-- Navigation Dots -->
    <nav class="slider-controls" aria-label="Slider Navigation">
        <label for="h-slide1" class="ctrl-dot" aria-label="Go to slide 1"></label>
        <label for="h-slide2" class="ctrl-dot" aria-label="Go to slide 2"></label>
        <label for="h-slide3" class="ctrl-dot" aria-label="Go to slide 3"></label>
    </nav>
</section>
<!-- About Us Section -->
<section class="about-section" id="about">
    <div class="about-shape"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-image-grid">
                    <div class="about-img-1">
                        <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&q=80&w=800" alt="Moving logistics in <?= $city ?>">
                    </div>
                    <div class="about-experience-card">
                        <div class="about-exp-num">10+</div>
                        <div class="about-exp-text">
                            <span class="d-block fw-bold text-dark">Years Of</span>
                            <span class="d-block text-muted">Excellence</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-wrapper">
                    <span class="about-tag">Since 2014</span>
                    <h2 class="about-title">Leading the Future of <span>Seamless Relocation</span> in <?= $city ?></h2>
                    <p class="lead fw-bold text-primary mb-4">We don't just move boxes, we move lives with precision and care in <?= $city ?>.</p>
                    <p class="text-muted mb-5">At Egati Relocation, we've spent a decade perfecting the art of transition. Our mission is to transform the stress of moving into a seamless, high-end experience through technology-driven logistics and elite customer service for the <?= $city ?> community.</p>
                    
                    <div class="about-features">
                        <div class="about-f-item">
                            <div class="about-f-icon"><i class="fas fa-user-shield"></i></div>
                            <div>
                                <h6 class="mb-0 fw-bold">Safe & Insured</h6>
                                <small class="text-muted">Total asset protection</small>
                            </div>
                        </div>
                        <div class="about-f-item">
                            <div class="about-f-icon"><i class="fas fa-clock"></i></div>
                            <div>
                                <h6 class="mb-0 fw-bold">On-Time Always</h6>
                                <small class="text-muted">Precision scheduling in <?= $city ?></small>
                            </div>
                        </div>
                        <div class="about-f-item">
                            <div class="about-f-icon"><i class="fas fa-box-open"></i></div>
                            <div>
                                <h6 class="mb-0 fw-bold">Smart Packing</h6>
                                <small class="text-muted">Eco-grade materials</small>
                            </div>
                        </div>
                        <div class="about-f-item">
                            <div class="about-f-icon"><i class="fas fa-headset"></i></div>
                            <div>
                                <h6 class="mb-0 fw-bold">24/7 Support</h6>
                                <small class="text-muted">Local <?= $city ?> assistance</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section (City Page Unique) -->
<section class="city-process-section py-5" id="how-it-works">
    <div class="container">
        <div class="text-center mb-5 pb-4">
            <span class="about-tag">Execution Roadmap</span>
            <h2 class="about-title">How We Move You in <span><?= $city ?></span></h2>
            <p class="text-muted mx-auto" style="max-width: 600px;">Our specialized local process for <?= $city ?> ensures a stress-free transition from start to finish.</p>
        </div>

        <div class="city-roadmap">
            <!-- Step 1 -->
            <div class="roadmap-step">
                <div class="roadmap-icon-wrap">
                    <div class="roadmap-icon"><i class="fas fa-search-location"></i></div>
                    <div class="roadmap-number">01</div>
                </div>
                <div class="roadmap-content">
                    <h4>Local Assessment</h4>
                    <p>On-site or virtual survey of your assets in <?= $city ?> to provide a precise, no-hidden-cost quote.</p>
                </div>
                <div class="roadmap-connector"></div>
            </div>

            <!-- Step 2 -->
            <div class="roadmap-step">
                <div class="roadmap-icon-wrap">
                    <div class="roadmap-icon"><i class="fas fa-box-open"></i></div>
                    <div class="roadmap-number">02</div>
                </div>
                <div class="roadmap-content">
                    <h4>Premium Packing</h4>
                    <p>Surgical-grade packing by our <?= $city ?> experts using high-end materials for maximum protection.</p>
                </div>
                <div class="roadmap-connector"></div>
            </div>

            <!-- Step 3 -->
            <div class="roadmap-step">
                <div class="roadmap-icon-wrap">
                    <div class="roadmap-icon"><i class="fas fa-truck-moving"></i></div>
                    <div class="roadmap-number">03</div>
                </div>
                <div class="roadmap-content">
                    <h4>Smart Transit</h4>
                    <p>Secure GPS-tracked transportation optimized for the quickest routes through <?= $city ?> traffic.</p>
                </div>
                <div class="roadmap-connector"></div>
            </div>

            <!-- Step 4 -->
            <div class="roadmap-step">
                <div class="roadmap-icon-wrap">
                    <div class="roadmap-icon"><i class="fas fa-home"></i></div>
                    <div class="roadmap-number">04</div>
                </div>
                <div class="roadmap-content">
                    <h4>Perfect Setup</h4>
                    <p>Careful unloading and full assembly of your items at your new <?= $city ?> destination.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section (City Page Redesigned) -->
<section class="city-why-section py-5" id="why-choose-us">
    <div class="container">
        <div class="row align-items-center">
            <!-- Content Side -->
            <div class="col-lg-6">
                <div class="why-content-wrap">
                    <span class="about-tag">The Elite Advantage</span>
                    <h2 class="about-title">Why <span><?= $city ?></span> Trusts Egati Relocation</h2>
                    <p class="text-muted mb-5">We've redefined the moving industry in <?= $city ?> by combining technology-driven logistics with a personal touch. Here's why we are the preferred choice for elite relocations.</p>

                    <div class="why-feature-list">
                        <!-- Feature 1 -->
                        <div class="why-feature-item">
                            <div class="why-feature-icon"><i class="fas fa-user-shield"></i></div>
                            <div class="why-feature-text">
                                <h6>Elite Security & Insurance</h6>
                                <p>Full transit protection and GPS tracking for every move in <?= $city ?>.</p>
                            </div>
                        </div>
                        <!-- Feature 2 -->
                        <div class="why-feature-item">
                            <div class="why-feature-icon"><i class="fas fa-medal"></i></div>
                            <div class="why-feature-text">
                                <h6>Certified Local Experts</h6>
                                <p>Our <?= $city ?> team is highly trained and background-verified.</p>
                            </div>
                        </div>
                        <!-- Feature 3 -->
                        <div class="why-feature-item">
                            <div class="why-feature-icon"><i class="fas fa-search-dollar"></i></div>
                            <div class="why-feature-text">
                                <h6>Guaranteed Fixed Pricing</h6>
                                <p>No hidden costs or last-minute surprises for your <?= $city ?> move.</p>
                            </div>
                        </div>
                        <!-- Feature 4 -->
                        <div class="why-feature-item">
                            <div class="why-feature-icon"><i class="fas fa-hand-holding-heart"></i></div>
                            <div class="why-feature-text">
                                <h6>White-Glove Handling</h6>
                                <p>Delicate care and premium packing materials for your valuables.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image Side -->
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="why-image-wrapper">
                    <div class="why-image-inner">
                        <img src="<?= base_url('assets/images/city/why_choose_us.png') ?>" alt="Why choose Egati in <?= $city ?>" class="img-fluid rounded-4 shadow-lg">
                        <div class="why-floating-badge">
                            <div class="badge-icon"><i class="fas fa-check-circle"></i></div>
                            <div class="badge-text">
                                <strong>100%</strong>
                                <span>Safe Delivery</span>
                            </div>
                        </div>
                    </div>
                    <div class="why-shape-bg"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section (Precision Matrix Redesign) -->
<section class="city-pricing-section py-5" id="pricing">
    <div class="container">
        <div class="pricing-matrix-wrapper">
            <div class="matrix-top-bar d-flex justify-content-between align-items-center mb-4">
                <div class="matrix-title-box">
                    <h2 class="matrix-main-title">Home Shifting Charges</h2>
                    <p class="matrix-subtitle text-muted">Estimated cost based on BHK and distance in <?= $city ?></p>
                </div>
                <div class="matrix-badge">
                    <i class="bi bi-truck"></i> Home Shifting
                </div>
            </div>

            <div class="table-responsive matrix-table-container">
                <table class="table matrix-table">
                    <thead>
                        <tr>
                            <th class="matrix-h-cell first">Shifting Type</th>
                            <th class="matrix-h-cell">Up to 10 Km</th>
                            <th class="matrix-h-cell">Up to 30 Km</th>
                            <th class="matrix-h-cell">Up to 50 Km</th>
                            <th class="matrix-h-cell">Up to 100 Km</th>
                            <th class="matrix-h-cell last">Above 100 Km</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- 1 BHK -->
                        <tr>
                            <td class="matrix-type-cell">
                                <div class="matrix-type-box">
                                    <div class="matrix-type-icon"><i class="bi bi-house"></i></div>
                                    <span>1 BHK</span>
                                </div>
                            </td>
                            <td>₹4,000 - ₹8,000</td>
                            <td>₹6,000 - ₹12,000</td>
                            <td>₹8,000 - ₹15,000</td>
                            <td>₹10,000 - ₹18,000</td>
                            <td>₹12,000 - ₹22,000</td>
                        </tr>
                        <!-- 2 BHK -->
                        <tr>
                            <td class="matrix-type-cell">
                                <div class="matrix-type-box">
                                    <div class="matrix-type-icon"><i class="bi bi-building"></i></div>
                                    <span>2 BHK</span>
                                </div>
                            </td>
                            <td>₹6,000 - ₹12,000</td>
                            <td>₹10,000 - ₹18,000</td>
                            <td>₹14,000 - ₹22,000</td>
                            <td>₹18,000 - ₹28,000</td>
                            <td>₹22,000 - ₹35,000</td>
                        </tr>
                        <!-- 3 BHK -->
                        <tr>
                            <td class="matrix-type-cell">
                                <div class="matrix-type-box">
                                    <div class="matrix-type-icon"><i class="bi bi-house-heart"></i></div>
                                    <span>3 BHK</span>
                                </div>
                            </td>
                            <td>₹10,000 - ₹18,000</td>
                            <td>₹15,000 - ₹25,000</td>
                            <td>₹20,000 - ₹32,000</td>
                            <td>₹25,000 - ₹40,000</td>
                            <td>₹30,000 - ₹50,000</td>
                        </tr>
                        <!-- 4 BHK+ -->
                        <tr>
                            <td class="matrix-type-cell">
                                <div class="matrix-type-box">
                                    <div class="matrix-type-icon"><i class="bi bi-house-fill"></i></div>
                                    <span>4 BHK+</span>
                                </div>
                            </td>
                            <td>₹15,000 - ₹25,000</td>
                            <td>₹22,000 - ₹35,000</td>
                            <td>₹28,000 - ₹45,000</td>
                            <td>₹35,000 - ₹55,000</td>
                            <td>₹45,000 - ₹70,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
           <div class="matrix-footer-info mt-4 d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
    
    <p class="small text-muted mb-0">
        * Prices are indicative. Final quote depends on volume of goods and packing material.
    </p>

    <a href="tel:<?= $phone ?>" class="btn matrix-call-btn">
        Request Quote <i class="bi bi-arrow-right"></i>
    </a>

</div>
        </div>
    </div>
</section>
<!-- Relevant Keywords Section (Simplified Centered) -->
<section class="city-keywords-section py-5">
    <div class="container">
        <div class="keywords-simple-wrapper text-center">
            <h2 class="keyword-main-title mb-3">Relevant Keywords for <span><?= $city ?></span></h2>
            <p class="keyword-desc text-muted mx-auto mb-5" style="max-width: 700px;">Explore the most frequently searched terms and local services related to packers and movers in <?= $city ?> area.</p>
            
            <div class="keyword-tag-cloud">
                <span class="k-tag">Packers and Movers in <?= $city ?></span>
                <span class="k-tag">Best Moving Company <?= $city ?></span>
                <span class="k-tag">Local House Shifting <?= $city ?></span>
                <span class="k-tag">Car Transport Service <?= $city ?></span>
                <span class="k-tag">Office Relocation in <?= $city ?></span>
                <span class="k-tag">Affordable Movers <?= $city ?></span>
                <span class="k-tag">Safe Delivery <?= $city ?></span>
                <span class="k-tag">Intercity Shifting from <?= $city ?></span>
                <span class="k-tag">Top Rated Packers <?= $city ?></span>
                <span class="k-tag">Bike Courier <?= $city ?></span>
                <span class="k-tag">Household Storage <?= $city ?></span>
                <span class="k-tag">IBA Approved Movers <?= $city ?></span>
            </div>
        </div>
    </div>
</section>
