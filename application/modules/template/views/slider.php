<section class="eg-elite-hero py-5" aria-label="Main Relocation Hero">
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

    <!-- Content Wrapper (Sibling to Radios for CSS selectors) -->
    <div class="hero-content-wrapper z-index-10">
        <div class="container">
            <div class="row align-items-center min-vh-80 py-2">
                <!-- Left Side: Dynamic Content -->
                <div class="col-lg-7 text-white mb-5 mb-lg-0 text-center text-lg-start">
                    <div class="hero-text-slider">
                        <!-- Text Slide 1 -->
                        <article class="hero-text-content content-1">
                            <header class="mb-4">
                                <span class="badge-elite mb-3">#1 RATED SERVICE</span>
                                <h1 class="hero-title">eGati <span class="text-accent">Home Shifting</span> Solutions</h1>
                                <p class="hero-desc">India's most trusted packers and movers. We handle your precious belongings with zero-damage guarantee.</p>
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
                                    <div class="icon-circle"><i class="bi bi-clock-history"></i></div>
                                    <div class="feature-text">
                                        <strong>On-Time Move</strong>
                                        <span>Punctual & reliable delivery</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Trust Bar -->
                            <div class="hero-trust-bar mt-4 justify-content-center justify-content-lg-start">
                                <div class="trust-item"><i class="bi bi-check-circle-fill"></i> ISO Certified</div>
                                <div class="trust-item"><i class="bi bi-check-circle-fill"></i> Verified Team</div>
                                <div class="trust-item"><i class="bi bi-check-circle-fill"></i> 24/7 Support</div>
                            </div>
                        </article>

                        <!-- Text Slide 2 -->
                        <article class="hero-text-content content-2">
                            <header class="mb-4">
                                <span class="badge-elite mb-3">SECURE TRANSPORT</span>
                                <h2 class="hero-title">Secure <span class="text-accent">Car Shifting</span> Solutions</h2>
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
                                    <div class="icon-circle"><i class="bi bi-geo-alt-fill"></i></div>
                                    <div class="feature-text">
                                        <strong>Real-time Tracking</strong>
                                        <span>Know your vehicle status</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Trust Bar -->
                            <div class="hero-trust-bar mt-4 justify-content-center justify-content-lg-start">
                                <div class="trust-item"><i class="bi bi-check-circle-fill"></i> ISO Certified</div>
                                <div class="trust-item"><i class="bi bi-check-circle-fill"></i> Verified Team</div>
                                <div class="trust-item"><i class="bi bi-check-circle-fill"></i> 24/7 Support</div>
                            </div>
                        </article>

                        <!-- Text Slide 3 -->
                        <article class="hero-text-content content-3">
                            <header class="mb-4">
                                <span class="badge-elite mb-3">CORPORATE MOVE</span>
                                <h2 class="hero-title">Expert <span class="text-accent">Office Relocation</span> Services</h2>
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

                            <!-- Trust Bar -->
                            <div class="hero-trust-bar mt-4 justify-content-center justify-content-lg-start">
                                <div class="trust-item"><i class="bi bi-check-circle-fill"></i> ISO Certified</div>
                                <div class="trust-item"><i class="bi bi-check-circle-fill"></i> Verified Team</div>
                                <div class="trust-item"><i class="bi bi-check-circle-fill"></i> 24/7 Support</div>
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
