<div class="service-page-wrapper">
    <!-- Hero Section -->
    <section class="service-hero" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1587293852726-70cdb56c2866?auto=format&fit=crop&q=80&w=1600');">
        <div class="container text-center text-white py-5">
            <h1 class="display-3 fw-bold mb-3">Storage & Warehousing</h1>
            <p class="lead mb-4">Safe and secure household storage solutions with 24/7 surveillance and flexible terms.</p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?= site_url() ?>" class="text-white">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= site_url('services') ?>" class="text-white">Services</a></li>
                    <li class="breadcrumb-item active text-warning" aria-current="page">Storage Solutions</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Main Content -->
    <section class="service-details py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="detail-content">
                        <img src="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?auto=format&fit=crop&q=80&w=800" alt="Storage & Warehousing" class="img-fluid rounded-4 mb-4 shadow" loading="lazy">
                        <h2 class="fw-bold mb-4">Flexible & Secure Household Storage</h2>
                        <p>Need a place to store your belongings during a transition? eGati Relocation offers clean, fire-resistant, and climate-controlled warehousing facilities. Whether you need short-term storage during a home renovation or long-term storage for an overseas assignment, we have the perfect solution for you.</p>
                        
                        <div class="row mt-5 g-4">
                            <div class="col-md-6">
                                <div class="feature-card p-4 border rounded-4 h-100 shadow-sm">
                                    <div class="icon-box mb-3 text-warning fs-1"><i class="bi bi-camera-video"></i></div>
                                    <h4 class="fw-bold">24/7 Security</h4>
                                    <p class="text-muted small">Our facilities are equipped with round-the-clock CCTV surveillance and professional security personnel.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card p-4 border rounded-4 h-100 shadow-sm">
                                    <div class="icon-box mb-3 text-primary fs-1"><i class="bi bi-thermometer-half"></i></div>
                                    <h4 class="fw-bold">Pest Controlled</h4>
                                    <p class="text-muted small">Regular pest control and moisture-free environments to ensure your goods stay in pristine condition.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card p-4 border rounded-4 h-100 shadow-sm">
                                    <div class="icon-box mb-3 text-success fs-1"><i class="bi bi-calendar2-week"></i></div>
                                    <h4 class="fw-bold">Flexible Duration</h4>
                                    <p class="text-muted small">Pay-per-use model with flexible storage durations tailored to your specific requirements.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card p-4 border rounded-4 h-100 shadow-sm">
                                    <div class="icon-box mb-3 text-info fs-1"><i class="bi bi-card-checklist"></i></div>
                                    <h4 class="fw-bold">Inventory Management</h4>
                                    <p class="text-muted small">Detailed inventory listing of every item stored, ensuring complete transparency and easy retrieval.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Quote Form -->
                <div class="col-lg-4">
                    <div class="service-sidebar sticky-top" style="top: 100px; z-index: 10;">
                        <div class="quote-card p-4 rounded-4 shadow-lg text-white" style="background: linear-gradient(135deg, #0056B3 0%, #1a1a2e 100%);">
                            <h3 class="fw-bold mb-3 text-warning">Storage Quote</h3>
                            <p class="small mb-4 text-white-50">Safe storage for your peace of mind. Request a space today.</p>
                            <?php $this->load->view('contacts/quoteform_mini') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
.service-hero {
    padding: 100px 0;
    background-size: cover !important;
    background-position: center !important;
}
.feature-card {
    transition: all 0.3s ease;
}
.feature-card:hover {
    transform: translateY(-10px);
    border-color: #FBA707 !important;
}
</style>
