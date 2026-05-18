<?php
$this->load->database();
$this->load->helper('text');
$st = strtolower(str_replace(" ", "-", $state));
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
} ?>

<style>
/* Slider Breadcrumb Styling */
.slider-breadcrumb-wrapper {
    position: relative;
    z-index: 20;
    padding-top: 30px;
}
.slider-breadcrumb {
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-radius: 50px;
    padding: 10px 25px;
    display: inline-flex;
    font-weight: 600;
    font-size: 0.9rem;
    border: 1px solid rgba(255,255,255,0.1);
}
.slider-breadcrumb .breadcrumb-item a {
    color: rgba(255, 255, 255, 0.7);
    text-decoration: none;
    transition: color 0.3s ease;
}
.slider-breadcrumb .breadcrumb-item a:hover {
    color: #fba707;
}
.slider-breadcrumb .breadcrumb-item.active {
    color: #fff;
}
.slider-breadcrumb .breadcrumb-item + .breadcrumb-item::before {
    content: "›";
    font-size: 1.2rem;
    line-height: 1;
    vertical-align: middle;
    color: rgba(255,255,255,0.4);
}
</style>

<!-- City Page Hero Slider -->
<section class="eg-elite-hero py-5" aria-label="City Relocation Hero">
    <!-- Radio Controllers -->
    <input type="radio" name="hero-toggle" id="h-slide1" class="d-none" checked>
    <input type="radio" name="hero-toggle" id="h-slide2" class="d-none">
    <input type="radio" name="hero-toggle" id="h-slide3" class="d-none">

    <!-- Background Layer -->
     <div class="hero-bg-container">
        <div class="hero-bg-slide slide-1" style="background-image: url('<?= base_url('assets/images/home/banner1.png') ?>');"></div>
        <div class="hero-bg-slide slide-2" style="background-image: url('<?= base_url('assets/images/home/banner2.png') ?>');"></div>
        <div class="hero-bg-slide slide-3" style="background-image: url('<?= base_url('assets/images/home/banner3.png') ?>');"></div>
        <div class="hero-overlay-dark"></div>
    </div>

    <!-- Content Wrapper -->
    <div class="hero-content-wrapper z-index-10">
        <div class="container">
                

            <div class="row align-items-center py-4 mt-4">
                <!-- Left Side: Dynamic Content -->
                 
                <div class="col-lg-7 text-white mb-5 mb-lg-0 text-center text-lg-start">
                    <!-- Breadcrumb overlay -->
                <div class="slider-breadcrumb-wrapper text-center text-lg-start mb-2">
                    <nav aria-label="breadcrumb" class="d-inline-block">
                        <ol class="breadcrumb slider-breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="bi bi-house-door-fill"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="<?= site_url('our-branches') ?>">Branch</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $state ?></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $city ?></li>
                        </ol>
                    </nav>
                </div>
                    <div class="hero-text-slider">
                        
                        <!-- Text Slide 1 -->
                        <article class="hero-text-content content-1">
                            <header class="mb-4">
                                <span class="badge-elite mb-3">#1 RATED IN <?= strtoupper($city) ?></span>
                                <h1 class="hero-title">Best <span class="text-accent">Packers and Movers</span> in <?= $city ?></h1>
                                <p class="hero-desc">India's most trusted relocation experts now serving <?= $city ?>, <?= $state ?>. We handle your precious belongings with a zero-damage guarantee.</p>
                            </header>
                            
                            <div class="hero-features-grid justify-content-center justify-content-lg-start">
                                <div class="feature-item-elite">
                                    <div class="icon-circle"><i class="bi bi-shield-fill-check"></i></div>
                                    <div class="feature-text">
                                        <strong>Safe Packing</strong>
                                        <span>Premium materials used</span>
                                    </div>
                                </div>
                                <div class="feature-item-elite">
                                    <div class="icon-circle"><i class="bi bi-geo-alt-fill"></i></div>
                                    <div class="feature-text">
                                        <strong>Local Experts</strong>
                                        <span>Serving all of <?= $city ?></span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Text Slide 2 -->
                        <article class="hero-text-content content-2">
                           
                            <header class="mb-4">
                                <span class="badge-elite mb-3">SECURE TRANSPORT</span>
                                <h2 class="hero-title">Secure <span class="text-accent">Car Shifting</span> from <?= $city ?></h2>
                                <p class="hero-desc">Specialized vehicle carriers with GPS live tracking and full transit insurance for your peace of mind.</p>
                            </header>
                            
                            <div class="hero-features-grid justify-content-center justify-content-lg-start">
                                <div class="feature-item-elite">
                                    <div class="icon-circle"><i class="bi bi-truck"></i></div>
                                    <div class="feature-text">
                                        <strong>Enclosed Carriers</strong>
                                        <span>Safe from weather & dust</span>
                                    </div>
                                </div>
                                <div class="feature-item-elite">
                                    <div class="icon-circle"><i class="bi bi-shield-lock-fill"></i></div>
                                    <div class="feature-text">
                                        <strong>100% Insured</strong>
                                        <span>Complete transit protection</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Text Slide 3 -->
                        <article class="hero-text-content content-3">
                            <header class="mb-4">
                                <span class="badge-elite mb-3">CORPORATE MOVE</span>
                                <h2 class="hero-title">Expert <span class="text-accent">Office Relocation</span> in <?= $city ?></h2>
                                <p class="hero-desc">Minimize business downtime with our strategic corporate relocation planning and execution.</p>
                            </header>
                            
                            <div class="hero-features-grid justify-content-center justify-content-lg-start">
                                <div class="feature-item-elite">
                                    <div class="icon-circle"><i class="bi bi-hdd-network"></i></div>
                                    <div class="feature-text">
                                        <strong>IT Handling</strong>
                                        <span>Safe server & system move</span>
                                    </div>
                                </div>
                                <div class="feature-item-elite">
                                    <div class="icon-circle"><i class="bi bi-calendar-check"></i></div>
                                    <div class="feature-text">
                                        <strong>Weekend Moves</strong>
                                        <span>Zero business disruption</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <!-- Right Side: STATIC FORM -->
                <div class="col-lg-5">
                    <div class="form-wrapper-elite">
                        <?php $this->load->view('contacts/quoteform') ?>
                        <div class="form-footer-note">
                            <i class="bi bi-shield-lock-fill"></i> 100% Privacy Guaranteed
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- Slider Navigation -->
            <div class="hero-nav-dots mt-4 justify-content-center">
                <label for="h-slide1" class="dot" aria-label="Slide 1"></label>
                <label for="h-slide2" class="dot" aria-label="Slide 2"></label>
                <label for="h-slide3" class="dot" aria-label="Slide 3"></label>
            </div>
        </div>
    </div>
</section>

<!-- Elite City Page Content - Sidebar Layout -->
<section class="py-5 bg-light">
    <div class="container py-lg-4">
        <div class="row g-5">
             
            
            <!-- MAIN CONTENT AREA (col-8) -->
            <div class="col-lg-8">
                
                <!-- 1. About Section -->
                <div class="bg-white rounded-4 shadow-sm p-4 p-md-5 mb-5 border-0">
                     <div class="col-12 mb-3">
                            <img src="<?= base_url('assets/images/home_shifting_hero.png') ?>" alt="Moving Services in <?= $city ?>" class="img-fluid rounded-4 shadow-sm city-service-hover">
                        </div>
                    <span class="city-about-tag mb-4">
                        <i class="bi bi-geo-alt-fill me-2"></i> EXPERT MOVERS IN <?= strtoupper($city) ?>
                    </span>
                    <h2 class="fw-bold text-dark mb-4">
                        Stress-Free Relocation Services in <span class="text-orange"><?= $city ?></span>
                    </h2>
                    <p class="text-muted mb-4">
                        eGati Relocation is the most trusted name for packers and movers in <?= $city ?>, <?= $state ?>. Whether you are moving locally within the city or planning an interstate relocation, our trained professionals handle your belongings with extreme care. 
                    </p>
                    
                    <h4 class="fw-bold mb-3 mt-5 mb-4">Why Choose Us for Moving to <?= $city ?>?</h4>
                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start gap-3">
                                <div class="bg-light  border p-2 rounded-3 shadow-sm">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1 text-dark">100% Safe Handling</h5>
                                    <p class="text-muted mb-0">Zero damage guarantee for all your household items.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start gap-3">
                                <div class="bg-light  border p-2 rounded-3 shadow-sm">
                                    <i class="bi bi-person-badge"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1 text-dark">Verified Local Staff</h5>
                                    <p class="text-muted mb-0">Background-checked professionals from <?= $city ?>.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start gap-3">
                                <div class="bg-light  border p-2 rounded-3 shadow-sm">
                                    <i class="bi bi-box-seam"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1 text-dark">Premium Packaging</h5>
                                    <p class="text-muted mb-0">3-layer secure packing for ultimate safety.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start gap-3">
                                <div class="bg-light  border p-2 rounded-3 shadow-sm">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1 text-dark">Live GPS Tracking</h5>
                                    <p class="text-muted mb-0">Track your moving truck in real-time.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. Packing and Unpacking Process -->
                <div class="bg-white rounded-4 shadow-sm p-4 p-md-5 mb-5 border-0">
                    <h3 class="fw-bold text-dark mb-4">Our Simple 5-Step Process</h3>
                    <p class="text-muted mb-5">We follow a streamlined process to ensure your relocation in <?= $city ?> is incredibly smooth.</p>
                    
                    <div class="position-relative">
                        <!-- Step 1 -->
                        <div class="d-flex mb-4 position-relative">
                            <div class="me-4 position-relative z-1">
                                <div class="rounded-circle bg-light border border-primary  city-step-icon-sm shadow-sm">1</div>
                            </div>
                            <div>
                                <h5 class="fw-bold text-dark mb-2">Enquiry & Consultation</h5>
                                <p class="text-muted mb-0">Share your requirements. We provide a quick consultation for moving in <?= $city ?>.</p>
                            </div>
                        </div>
                        <!-- Step 2 -->
                        <div class="d-flex mb-4 position-relative">
                            <div class="me-4 position-relative z-1">
                                <div class="rounded-circle bg-light border border-primary  city-step-icon-sm shadow-sm">2</div>
                            </div>
                            <div>
                                <h5 class="fw-bold text-dark mb-2">Free Quote & Survey</h5>
                                <p class="text-muted mb-0">We conduct a physical or virtual survey and provide a transparent quote.</p>
                            </div>
                        </div>
                        <!-- Step 3 -->
                        <div class="d-flex mb-4 position-relative">
                            <div class="me-4 position-relative z-1">
                                <div class="rounded-circle bg-light border border-primary  city-step-icon-sm shadow-sm">3</div>
                            </div>
                            <div>
                                <h5 class="fw-bold text-dark mb-2">Safe Packing</h5>
                                <p class="text-muted mb-0">Our expert team arrives on the scheduled date to pack your items securely.</p>
                            </div>
                        </div>
                        <!-- Step 4 -->
                        <div class="d-flex mb-4 position-relative">
                            <div class="me-4 position-relative z-1">
                                <div class="rounded-circle bg-light border border-primary  city-step-icon-sm shadow-sm">4</div>
                            </div>
                            <div>
                                <h5 class="fw-bold text-dark mb-2">Secure Transportation</h5>
                                <p class="text-muted mb-0">We transport your belongings in enclosed carriers safely to the destination.</p>
                            </div>
                        </div>
                        <!-- Step 5 -->
                        <div class="d-flex position-relative">
                            <div class="me-4 position-relative z-1">
                                <div class="rounded-circle bg-light border border-primary  city-step-icon-sm shadow-sm">5</div>
                            </div>
                            <div>
                                <h5 class="fw-bold text-dark mb-2">Delivery & Unpacking</h5>
                                <p class="text-muted mb-0">We safely deliver, unload, and help unpack your items in your new home.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- NEW: Additional Content Block -->
                <div class="bg-white rounded-4 shadow-sm p-4 p-md-5 mb-5 border-0">
                    <div class="row align-items-center g-4">
                        <div class="col-md-12">
                            <h3 class="fw-bold text-dark mb-4">Local and Intercity Shifting from <?= $city ?></h3>
                            <p class="text-muted mb-4">
                                Whether you are moving to a new neighborhood within <?= $city ?> or relocating to a completely different state, our comprehensive moving solutions are tailored to meet your specific needs. Local moves are completed within the same day with quick packing and transit, ensuring zero disruption to your daily routine.
                            </p>
                            <p class="text-muted mb-0">
                                For long-distance and intercity relocations, we provide specialized multi-layer packing, dedicated moving coordinators, and enclosed carriers to protect your goods over long transit times. With our <strong>100% Transit Insurance</strong>, you can rest assured that your high-value items, furniture, and electronics are financially protected.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 3. Testimonials -->
                <div class="bg-white rounded-4 shadow-sm p-4 p-md-5 mb-5 border-0">
                    <h3 class="fw-bold text-dark mb-4">Client Reviews from <?= $city ?></h3>
                    
                    <div class="swiper city-testi-swiper px-2 pb-4">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide h-auto">
                                <div class="bg-light p-4 rounded-3 h-100 position-relative border d-flex flex-column">
                                    <i class="bi bi-quote position-absolute top-0 end-0 m-3 text-orange city-quote-icon"></i>
                                    <div class="text-warning mb-3">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="text-muted fst-italic mb-4">"Moving from Delhi to <?= $city ?> was a huge concern, but eGati made it incredibly smooth. Highly recommended!"</p>
                                    <div class="d-flex align-items-center gap-3 mt-auto">
                                        <div class="bg-primary text-white rounded-circle city-testi-avatar-sm">R</div>
                                        <div>
                                            <h6 class="mb-0 fw-bold">Rahul Sharma</h6>
                                            <div class="text-muted">Relocated to <?= $city ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-auto">
                                <div class="bg-light p-4 rounded-3 h-100 position-relative border d-flex flex-column">
                                    <i class="bi bi-quote position-absolute top-0 end-0 m-3 text-orange city-quote-icon"></i>
                                    <div class="text-warning mb-3">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="text-muted fst-italic mb-4">"Hired them for local shifting within <?= $city ?>. Team was professional, packed quickly, nothing was damaged."</p>
                                    <div class="d-flex align-items-center gap-3 mt-auto">
                                        <div class="bg-success text-white rounded-circle city-testi-avatar-sm">P</div>
                                        <div>
                                            <h6 class="mb-0 fw-bold">Priya Patel</h6>
                                            <div class="text-muted">Local Move in <?= $city ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination position-relative mt-4"></div>
                    </div>
                </div>

                <!-- 4. FAQs -->
                <div class="bg-white rounded-4 shadow-sm p-4 p-md-5 border-0">
                    <h3 class="fw-bold text-dark mb-4">Moving to <?= $city ?> FAQs</h3>
                    
                    <div class="accordion" id="cityFaqAccordion">
                        <div class="accordion-item mb-3 border rounded-3 overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-light fw-bold text-dark shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    How much do packers and movers charge in <?= $city ?>?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#cityFaqAccordion">
                                <div class="accordion-body text-muted">
                                    The cost depends on the volume of goods, the distance, and the type of service. For local shifting within <?= $city ?>, prices generally start around ₹4,000. Contact us for a free quote.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3 border rounded-3 overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-light fw-bold text-dark shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Do you provide transit insurance?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#cityFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Yes! We highly recommend transit insurance for all long-distance relocations from <?= $city ?> to ensure your belongings are financially protected against any unforeseen circumstances.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border rounded-3 overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-light fw-bold text-dark shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Do you pack and move fragile items safely?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#cityFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Absolutely. Our expert team in <?= $city ?> uses premium packing materials such as bubble wrap and customized cartons to ensure fragile items are completely safe.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- SIDEBAR AREA (col-4) -->
            <div class="col-lg-4">
                <div class="position-sticky city-sidebar-sticky">
                    
                    <!-- Sidebar Box 1: Quick Contact -->
                    <div class="rounded-4 shadow-sm p-4 mb-4 border-0 text-center city-contact-box">
                        <i class="bi bi-headset display-4 mb-3 d-block anim-attract-float"></i>
                        <h4 class="fw-bold mb-2">Need Immediate Help?</h4>
                        <p class="small opacity-75 mb-4">Our <?= $city ?> experts are available 24/7</p>
                        <a href="tel:+919876543210" class="btn btn-primary text-white rounded-pill fw-bold w-100 py-3 shadow-sm d-flex align-items-center justify-content-center gap-2 anim-attract-pulse">
                            <i class="bi bi-telephone-fill"></i> +91-9876543210
                        </a>
                    </div>

                    <!-- Sidebar Box 2: Working Hours -->
                    <div class="bg-white rounded-4 shadow-sm p-4 mb-4 border border-light">
                        <h5 class="fw-bold text-dark mb-3"><i class="bi bi-clock me-2 "></i> Working Hours</h5>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted fw-medium">Mon - Sat:</span>
                            <span class="text-dark fw-bold">9:00 AM - 8:00 PM</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="text-muted fw-medium">Sunday:</span>
                            <span class="text-danger fw-bold">Open for Emergency</span>
                        </div>
                    </div>

                    <!-- Sidebar Box 3: Trust Badges -->
                    <div class="bg-white rounded-4 shadow-sm p-4 border border-light">
                        <h5 class="fw-bold text-dark mb-4 pb-2 border-bottom">Why eGati Relocation?</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex align-items-center gap-3 mb-3">
                                <i class="bi bi-check-circle-fill text-success fs-5"></i>
                                <span class="fw-medium text-secondary">ISO 9001:2015 Certified</span>
                            </li>
                            <li class="d-flex align-items-center gap-3 mb-3">
                                <i class="bi bi-check-circle-fill text-success fs-5"></i>
                                <span class="fw-medium text-secondary">IBA Approved Packers</span>
                            </li>
                            <li class="d-flex align-items-center gap-3 mb-3">
                                <i class="bi bi-check-circle-fill text-success fs-5"></i>
                                <span class="fw-medium text-secondary">100% Safe Transit</span>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <i class="bi bi-check-circle-fill text-success fs-5"></i>
                                <span class="fw-medium text-secondary">24/7 Customer Support</span>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- Initialize City Swiper -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    new Swiper('.city-testi-swiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            }
        },
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        }
    });
});
</script>
