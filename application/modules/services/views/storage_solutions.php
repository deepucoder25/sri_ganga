<main class="main">
    <section class="custom-service-banner" style="background-image: url('<?= base_url("assets/images/service_banner_bg.png") ?>');">
        <div class="banner-content">
            <h1 class="banner-title align-self-center">Storage Solutions</h1>
            <div class="banner-breadcrumb">
                <a href="<?= site_url() ?>"><i class="fas fa-home"></i> Home</a> 
                <span class="separator">/</span>    
                <span class="current">Storage Solutions</span>
            </div>
        </div>
    </section>

    <!-- Service Details Section -->
    <section class="service-details-section py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <div class="service-content-wrapper p-4 p-lg-5 bg-white rounded-4 shadow-sm border-0 position-relative">
                        <div class="image-wrapper mb-5 rounded-4 overflow-hidden position-relative shadow-lg">
                            <img src="<?= base_url('assets/images/storage_hero.png') ?>" alt="Secure Storage Solutions" class="img-fluid w-100 bike-hero-img">
                            <div class="image-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                                <div class="text-center text-white">
                                    <i class="bi bi-safe display-1 text-orange mb-3 d-block"></i>
                                    <h3 class="fw-bold tracking-wide text-uppercase">100% Secure</h3>
                                </div>
                            </div>
                        </div>

                        <span class="text-uppercase fw-bold text-orange tracking-wide">ELITE SECURE STORAGE</span>
                        <h2 class="display-5 fw-black text-dark mt-2 mb-4">Climate-Controlled & <span class="dark-blue-text">Secure Warehousing</span></h2>
                        <p class="lead text-muted mb-4 tall-line-height">Whether you need temporary storage during a complex move or long-term warehousing for your belongings, our elite storage solutions offer pristine, climate-controlled environments monitored 24/7. Your items remain exactly as you left them, safe from pests, humidity, and unauthorized access.</p>

                        <!-- Features Grid -->
                        <div class="row g-4 mt-2 mb-5">
                            <div class="col-md-6">
                                <div class="feature-card p-4 rounded-4 bg-light h-100 border transition-all">
                                    <div class="icon-blob-mini mb-3 d-flex align-items-center justify-content-center text-white fs-3">
                                        <i class="bi bi-thermometer-half"></i>
                                    </div>
                                    <h5 class="fw-bold">Climate Control</h5>
                                    <p class="small text-muted mb-0">Maintained optimal temperature and humidity levels to protect wood furniture, artwork, and electronics.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card p-4 rounded-4 bg-light h-100 border transition-all">
                                    <div class="icon-blob-mini mb-3 d-flex align-items-center justify-content-center text-white fs-3">
                                        <i class="bi bi-camera-video"></i>
                                    </div>
                                    <h5 class="fw-bold">24/7 Security</h5>
                                    <p class="small text-muted mb-0">Round-the-clock CCTV surveillance, access control systems, and regular physical security patrols.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card p-4 rounded-4 bg-light h-100 border transition-all">
                                    <div class="icon-blob-mini mb-3 d-flex align-items-center justify-content-center text-white fs-3">
                                        <i class="bi bi-box"></i>
                                    </div>
                                    <h5 class="fw-bold">Specialized Vaults</h5>
                                    <p class="small text-muted mb-0">Individual wooden storage vaults that keep your belongings entirely separate, sealed, and dust-free.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card p-4 rounded-4 bg-light h-100 border transition-all">
                                    <div class="icon-blob-mini mb-3 d-flex align-items-center justify-content-center text-white fs-3">
                                        <i class="bi bi-upc-scan"></i>
                                    </div>
                                    <h5 class="fw-bold">Inventory Management</h5>
                                    <p class="small text-muted mb-0">Detailed digital inventory with barcode tracking so you always know exactly what is in storage.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Process Timeline -->
                        <h3 class="fw-bold mb-4 border-bottom pb-3">Our Storage Process</h3>
                        <div class="process-timeline ms-3 border-start border-warning border-3 position-relative ps-4 py-2">
                            <div class="timeline-step mb-4 position-relative">
                                <div class="step-dot position-absolute bg-warning rounded-circle"></div>
                                <h5 class="fw-bold text-dark">1. Packing & Pickup</h5>
                                <p class="text-muted small">We expertly pack and wrap your items specifically for long-term storage, then transport them to our facility.</p>
                            </div>
                            <div class="timeline-step mb-4 position-relative">
                                <div class="step-dot position-absolute bg-warning rounded-circle"></div>
                                <h5 class="fw-bold text-dark">2. Vault Sealing</h5>
                                <p class="text-muted small">Your belongings are carefully loaded into a private storage vault which is then sealed and securely stacked.</p>
                            </div>
                            <div class="timeline-step position-relative">
                                <div class="step-dot position-absolute bg-warning rounded-circle"></div>
                                <h5 class="fw-bold text-dark">3. On-Demand Delivery</h5>
                                <p class="text-muted small">Whenever you're ready, simply request delivery and we'll transport your items safely back to your home.</p>
                            </div>
                        </div>

                        <!-- FAQ Section -->
                        <h3 class="fw-bold mb-4 mt-5 border-bottom pb-3">Frequently Asked Questions</h3>
                        <div class="accordion elite-accordion" id="storageFaq">
                            <div class="accordion-item border-0 mb-3 rounded-4 shadow-sm overflow-hidden">
                                <h2 class="accordion-header" id="faqHeadingOne">
                                    <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="false" aria-controls="faqCollapseOne">
                                        What is the minimum storage duration?
                                    </button>
                                </h2>
                                <div id="faqCollapseOne" class="accordion-collapse collapse" aria-labelledby="faqHeadingOne" data-bs-parent="#storageFaq">
                                    <div class="accordion-body text-muted bg-light">
                                        We offer highly flexible terms, ranging from short-term transit storage (even just a few days) up to multi-year contracts.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-3 rounded-4 shadow-sm overflow-hidden">
                                <h2 class="accordion-header" id="faqHeadingTwo">
                                    <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                                        Can I access my belongings while they are in storage?
                                    </button>
                                </h2>
                                <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#storageFaq">
                                    <div class="accordion-body text-muted bg-light">
                                        Yes, you can request access to your private storage vault by scheduling an appointment with our warehouse manager.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-3 rounded-4 shadow-sm overflow-hidden">
                                <h2 class="accordion-header" id="faqHeadingThree">
                                    <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                                        Is insurance available for stored items?
                                    </button>
                                </h2>
                                <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#storageFaq">
                                    <div class="accordion-body text-muted bg-light">
                                        Absolutely. We offer comprehensive warehouse insurance policies to completely cover your items for the entire duration of their stay.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Sidebar Content -->
                <div class="col-lg-4">
                    <div class="service-sidebar sticky-top pt-top-100">
                        
                        <!-- Contact Help Box -->
                        <div class="help-box p-4 rounded-4 shadow-sm mb-4 position-relative overflow-hidden">
                            <div class="bg-shape position-absolute"></div>
                            <h4 class="text-white fw-bold mb-3 position-relative z-1">Need Immediate Help?</h4>
                            <p class="text-white-50 small mb-4 position-relative z-1">Our relocation experts are available 24/7 to answer your queries and provide instant quotes.</p>
                            
                            <a href="<?=$phonehtml?>" class="d-flex align-items-center text-decoration-none bg-white p-3 rounded-3 mb-3 transition-all hover-lift position-relative z-1">
                                <div class="icon-circle bg-light text-primary rounded-circle d-flex align-items-center justify-content-center me-3">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <div>
                                    <span class="d-block small text-muted">Call Us Now</span>
                                    <span class="d-block fw-bold text-dark"><?=$phone?></span>
                                </div>
                            </a>
                        </div>

                        <!-- Why Choose Us Widget -->
                        <div class="sidebar-widget bg-white p-4 rounded-4 shadow-sm border border-light mb-4">
                            <h5 class="fw-bold text-dark border-bottom pb-3 mb-3">Why Choose Us?</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-center mb-3">
                                    <div class="bg-light text-orange rounded-circle p-2 me-3 d-flex align-items-center justify-content-center mini-icon-circle">
                                        <i class="bi bi-shield-check"></i>
                                    </div>
                                    <span class="fw-medium text-muted">100% Damage-Free</span>
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <div class="bg-light text-orange rounded-circle p-2 me-3 d-flex align-items-center justify-content-center mini-icon-circle">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                    <span class="fw-medium text-muted">Live GPS Tracking</span>
                                </li>
                                <li class="d-flex align-items-center mb-3">
                                    <div class="bg-light text-orange rounded-circle p-2 me-3 d-flex align-items-center justify-content-center mini-icon-circle">
                                        <i class="bi bi-box-seam"></i>
                                    </div>
                                    <span class="fw-medium text-muted">Multi-Layer Packing</span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="bg-light text-orange rounded-circle p-2 me-3 d-flex align-items-center justify-content-center mini-icon-circle">
                                        <i class="bi bi-headset"></i>
                                    </div>
                                    <span class="fw-medium text-muted">24/7 Customer Support</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Quick Links Widget -->
                        <div class="sidebar-widget bg-light p-4 rounded-4 shadow-sm border border-white">
                            <h5 class="fw-bold text-dark border-bottom pb-3 mb-3 border-dark-subtle">Other Services</h5>
                            <ul class="list-unstyled mb-0 service-quick-links">
                                <li class="mb-2"><a href="<?= site_url('home-shifting') ?>" class="text-decoration-none text-muted d-block p-2 rounded transition-all hover-bg-white"><i class="bi bi-chevron-right text-orange me-2"></i> Home Shifting</a></li>
                                <li class="mb-2"><a href="<?= site_url('office-shifting') ?>" class="text-decoration-none text-muted d-block p-2 rounded transition-all hover-bg-white"><i class="bi bi-chevron-right text-orange me-2"></i> Office Shifting</a></li>
                                <li class="mb-2"><a href="<?= site_url('car-transportation') ?>" class="text-decoration-none text-muted d-block p-2 rounded transition-all hover-bg-white"><i class="bi bi-chevron-right text-orange me-2"></i> Car Transportation</a></li>
                                <li><a href="<?= site_url('storage-solutions') ?>" class="text-decoration-none text-muted d-block p-2 rounded transition-all hover-bg-white"><i class="bi bi-chevron-right text-orange me-2"></i> Storage Solutions</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom CTA Section -->
    <section class="bottom-cta-section py-5 position-relative overflow-hidden">
        <div class="cta-bg-overlay position-absolute top-0 start-0 w-100 h-100"></div>
        <div class="container position-relative z-1 py-4">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="display-5 fw-bold text-white mb-4">Secure your belongings with us today!</h2>
                    <p class="lead text-white-50 mb-5">Enjoy peace of mind knowing your items are safe in our elite storage facilities. Get a custom quote in minutes.</p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="<?= site_url('contacts') ?>" class="btn btn-warning btn-lg fw-bold rounded-pill px-5 py-3 hover-lift shadow-lg text-dark">Get Started Now</a>
                        <a href="tel:+919876543210" class="btn btn-outline-light btn-lg fw-bold rounded-pill px-5 py-3 hover-lift"><i class="bi bi-telephone-fill me-2"></i> Call Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
