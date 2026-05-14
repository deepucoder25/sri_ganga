<section class="eg-hero-slider" aria-label="Main Relocation Slider">
    <!-- Radio Controllers (CSS Only for SEO & Performance) -->
    <input type="radio" name="hero-slide" id="h-slide1" class="d-none" checked>
    <input type="radio" name="hero-slide" id="h-slide2" class="d-none">
    <input type="radio" name="hero-slide" id="h-slide3" class="d-none">

    <div class="eg-slider-inner">
        <!-- Slide 1: Home Shifting -->
        <article class="eg-slide slide-1">
            <div class="hero-bg" style="background-image: url('<?= base_url('assets/images/home/banner1.png') ?>');"></div>
            <div class="hero-overlay"></div>
            <div class="container position-relative z-index-10">
                <div class="row align-items-center min-vh-100">
                    <div class="col-lg-7 text-white">
                        <header class="mb-4">
                            <span class="badge bg-orange text-dark mb-3 px-3 py-2 fw-bold">#1 RATED SERVICE</span>
                            <h1 class="display-3 fw-black mb-3">eGati <span class="text-orange">Home Shifting</span> Solutions</h1>
                            <p class="lead opacity-75">India's most trusted packers and movers. We handle your precious belongings with zero-damage guarantee.</p>
                        </header>
                        
                        <div class="row g-4 mb-5">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-box-sm bg-white-10 rounded"><i class="bi bi-shield-check text-orange"></i></div>
                                    <div><strong class="d-block text-white">Safe Packing</strong><small class="text-white-50">Premium materials used</small></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-box-sm bg-white-10 rounded"><i class="bi bi-clock-history text-orange"></i></div>
                                    <div><strong class="d-block text-white">On-Time Move</strong><small class="text-white-50">Punctual & reliable delivery</small></div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-3">
                            <a href="tel:<?= $phone ?>" class="btn btn-orange-lg px-4 py-3 fw-bold rounded-pill shadow-lg">Call Now <i class="bi bi-telephone-fill ms-2"></i></a>
                            <label for="h-slide2" class="btn btn-outline-light px-4 py-3 fw-bold rounded-pill">Next Service <i class="bi bi-chevron-right ms-2"></i></label>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-5 mt-lg-0">
                        <?php $this->load->view('contacts/quoteform') ?>
                    </div>
                </div>
            </div>
        </article>

        <!-- Slide 2: Car Shifting -->
        <article class="eg-slide slide-2">
            <div class="hero-bg" style="background-image: url('<?= base_url('assets/images/home/banner2.png') ?>');"></div>
            <div class="hero-overlay"></div>
            <div class="container position-relative z-index-10">
                <div class="row align-items-center min-vh-100">
                    <div class="col-lg-7 text-white">
                        <header class="mb-4">
                            <span class="badge bg-orange text-dark mb-3 px-3 py-2 fw-bold">VEHICLE LOGISTICS</span>
                            <h2 class="display-3 fw-black mb-3">Secure <span class="text-orange">Car Transport</span> Across India</h2>
                            <p class="lead opacity-75">Specialized vehicle carriers with GPS live tracking and full transit insurance for your peace of mind.</p>
                        </header>
                        
                        <div class="row g-4 mb-5">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-box-sm bg-white-10 rounded"><i class="bi bi-truck text-orange"></i></div>
                                    <div><strong class="d-block text-white">Enclosed Carriers</strong><small class="text-white-50">Safe from weather & dust</small></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-box-sm bg-white-10 rounded"><i class="bi bi-geo-alt-fill text-orange"></i></div>
                                    <div><strong class="d-block text-white">Real-time Tracking</strong><small class="text-white-50">Know your vehicle's status</small></div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-3">
                            <a href="tel:<?= $phone ?>" class="btn btn-orange-lg px-4 py-3 fw-bold rounded-pill shadow-lg">Enquire Now <i class="bi bi-telephone-fill ms-2"></i></a>
                            <label for="h-slide3" class="btn btn-outline-light px-4 py-3 fw-bold rounded-pill">Next Service <i class="bi bi-chevron-right ms-2"></i></label>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-5 mt-lg-0">
                        <?php $this->load->view('contacts/quoteform') ?>
                    </div>
                </div>
            </div>
        </article>

        <!-- Slide 3: Office Shifting -->
        <article class="eg-slide slide-3">
            <div class="hero-bg" style="background-image: url('<?= base_url('assets/images/home/banner3.png') ?>');"></div>
            <div class="hero-overlay"></div>
            <div class="container position-relative z-index-10">
                <div class="row align-items-center min-vh-100">
                    <div class="col-lg-7 text-white">
                        <header class="mb-4">
                            <span class="badge bg-orange text-dark mb-3 px-3 py-2 fw-bold">CORPORATE MOVE</span>
                            <h2 class="display-3 fw-black mb-3">Expert <span class="text-orange">Office Relocation</span> Services</h2>
                            <p class="lead opacity-75">Minimize business downtime with our strategic corporate relocation planning and execution.</p>
                        </header>
                        
                        <div class="row g-4 mb-5">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-box-sm bg-white-10 rounded"><i class="bi bi-hdd-network text-orange"></i></div>
                                    <div><strong class="d-block text-white">IT Handling</strong><small class="text-white-50">Safe server & system move</small></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="icon-box-sm bg-white-10 rounded"><i class="bi bi-calendar-check text-orange"></i></div>
                                    <div><strong class="d-block text-white">Weekend Moves</strong><small class="text-white-50">Zero business disruption</small></div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-3">
                            <a href="tel:<?= $phone ?>" class="btn btn-orange-lg px-4 py-3 fw-bold rounded-pill shadow-lg">Get Corporate Quote <i class="bi bi-telephone-fill ms-2"></i></a>
                            <label for="h-slide1" class="btn btn-outline-light px-4 py-3 fw-bold rounded-pill">Back to Start <i class="bi bi-arrow-counterclockwise ms-2"></i></label>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-5 mt-lg-0">
                        <?php $this->load->view('contacts/quoteform') ?>
                    </div>
                </div>
            </div>
        </article>
    </div>

    <!-- SEO Optimized Navigation -->
    <nav class="slider-controls" aria-label="Slider Navigation">
        <label for="h-slide1" class="ctrl-dot" aria-label="Go to slide 1"></label>
        <label for="h-slide2" class="ctrl-dot" aria-label="Go to slide 2"></label>
        <label for="h-slide3" class="ctrl-dot" aria-label="Go to slide 3"></label>
    </nav>
</section>

