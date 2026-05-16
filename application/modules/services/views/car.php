<main class="main">
    <section class="custom-service-banner" style="background-image: url('<?= base_url("assets/images/service_banner_bg.png") ?>');">
        <div class="banner-content">
            <h1 class="banner-title">Car Transportation</h1>
            <div class="banner-breadcrumb">
                <a href="<?= site_url() ?>"><i class="fas fa-home"></i> Home</a> 
                <span class="separator">/</span> 
                <a href="<?= site_url('services') ?>">Services</a>
                <span class="separator">/</span> 
                <span class="current">Car Transportation</span>
            </div>
        </div>
    </section>

    <section class="service-details-section py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="service-content">
                        <img src="https://images.unsplash.com/photo-1542282088-72c9c27ed0cd?auto=format&fit=crop&q=80&w=1200" alt="Car Transportation" class="img-fluid rounded-4 mb-5 shadow-lg" loading="lazy">
                        <h2 class="display-6 fw-black mb-4">Safe & Secure <span class="text-orange">Vehicle Carriers</span></h2>
                        <p class="lead text-muted mb-4">Your car is one of your most valuable assets. We treat it with the care it deserves, using specialized car carriers designed to protect your vehicle from road debris, weather, and scratches.</p>
                        
                        <div class="row g-4 mt-2">
                            <div class="col-md-6">
                                <div class="feature-box p-4 rounded-4 border bg-white h-100 transition-all hover-translate">
                                    <div class="icon mb-3 fs-1 text-orange"><i class="bi bi-shield-lock"></i></div>
                                    <h4 class="fw-bold">Full Transit Insurance</h4>
                                    <p class="text-muted small">Comprehensive insurance coverage for your vehicle from pickup to final delivery.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box p-4 rounded-4 border bg-white h-100 transition-all hover-translate">
                                    <div class="icon mb-3 fs-1 text-orange"><i class="bi bi-pin-map"></i></div>
                                    <h4 class="fw-bold">Real-time GPS Tracking</h4>
                                    <p class="text-muted small">Stay updated on your car's location with our advanced real-time tracking system.</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 p-4 rounded-4 bg-light">
                            <h3 class="fw-bold mb-3">Why Choose Our Car Carriers?</h3>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="bi bi-check2-circle text-orange me-2"></i> Door-to-door pickup and delivery service.</li>
                                <li class="mb-2"><i class="bi bi-check2-circle text-orange me-2"></i> Specialized wheel chocks and tie-down systems.</li>
                                <li class="mb-2"><i class="bi bi-check2-circle text-orange me-2"></i> Single and multi-car carrier options.</li>
                                <li class="mb-2"><i class="bi bi-check2-circle text-orange me-2"></i> Pre-transport inspection and condition report.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-sidebar sticky-top" style="top: 120px;">
                        <div class="quote-sidebar-card p-4 rounded-4 shadow-lg text-white" style="background: linear-gradient(135deg, var(--p-blue) 0%, var(--dark-bg) 100%);">
                            <h3 class="fw-bold mb-2">Car Shipping Quote</h3>
                            <p class="small text-white-50 mb-4">Instant pricing for your vehicle relocation.</p>
                            <?php $this->load->view('contacts/quoteform_mini') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
.hover-translate:hover {
    transform: translateY(-10px);
    border-color: var(--p-orange) !important;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}
.transition-all {
    transition: all 0.3s ease;
}
</style>
