<div class="about-page-wrapper">
    <!-- Hero Section -->
    <section class="service-hero" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=1600');">
        <div class="container text-center text-white py-5">
            <h1 class="display-3 fw-bold mb-3">About eGati Relocation</h1>
            <p class="lead mb-4">India's premier logistics and relocation partner with a legacy of trust and excellence.</p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?= site_url() ?>" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active text-warning" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Company Mission -->
    <section class="about-content py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=800" alt="Company Team" class="img-fluid rounded-4 shadow-lg" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <span class="text-primary fw-bold text-uppercase tracking-wider d-block mb-3">WHO WE ARE</span>
                    <h2 class="display-5 fw-bold mb-4">Driven by <span class="text-warning">Reliability</span> & Excellence</h2>
                    <p class="text-muted mb-4">eGati Relocation has emerged as a leader in the packing and moving industry, driven by a commitment to provide seamless and stress-free relocation experiences. We understand that every move is unique, and we treat every item with the care and respect it deserves.</p>
                    <p class="text-muted mb-5">With a vast network across India and a team of dedicated professionals, we have successfully completed thousands of residential and commercial relocations, earning the trust of families and businesses alike.</p>
                    
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center gap-3">
                                <div class="icon-circle bg-light text-primary p-3 rounded-circle fs-4"><i class="bi bi-shield-check"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0">Verified Agency</h6>
                                    <small class="text-muted">ISO Certified Standards</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center gap-3">
                                <div class="icon-circle bg-light text-warning p-3 rounded-circle fs-4"><i class="bi bi-clock-history"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0">24/7 Support</h6>
                                    <small class="text-muted">Dedicated Assistance</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why-choose-us py-5 bg-light">
        <div class="container text-center mb-5">
            <h2 class="display-6 fw-bold">Why Thousands Trust Us</h2>
            <div class="divider mx-auto bg-warning" style="height: 4px; width: 60px; margin-top: 20px;"></div>
        </div>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="choice-card p-4 bg-white rounded-4 shadow-sm h-100 text-center">
                        <div class="fs-1 text-primary mb-3"><i class="bi bi-truck"></i></div>
                        <h5 class="fw-bold">Modern Fleet</h5>
                        <p class="small text-muted">Advanced GPS-enabled trucks for safe transit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="choice-card p-4 bg-white rounded-4 shadow-sm h-100 text-center">
                        <div class="fs-1 text-warning mb-3"><i class="bi bi-box-seam"></i></div>
                        <h5 class="fw-bold">Expert Packing</h5>
                        <p class="small text-muted">High-grade materials for zero-damage moves.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="choice-card p-4 bg-white rounded-4 shadow-sm h-100 text-center">
                        <div class="fs-1 text-success mb-3"><i class="bi bi-cash-coin"></i></div>
                        <h5 class="fw-bold">Fair Pricing</h5>
                        <p class="small text-muted">No hidden costs, only transparent quotes.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="choice-card p-4 bg-white rounded-4 shadow-sm h-100 text-center">
                        <div class="fs-1 text-info mb-3"><i class="bi bi-patch-check"></i></div>
                        <h5 class="fw-bold">Expert Team</h5>
                        <p class="small text-muted">Trained professionals with years of experience.</p>
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
.choice-card {
    transition: all 0.3s ease;
}
.choice-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important;
}
</style>
