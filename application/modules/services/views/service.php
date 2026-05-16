<section class="custom-service-banner" style="background-image: url('<?= base_url("assets/images/service_banner_bg.png") ?>');">
    <div class="banner-content">
        <h1 class="banner-title">Our Expert Services</h1>
        <div class="banner-breadcrumb">
            <a href="<?= site_url() ?>"><i class="fas fa-home"></i> Home</a> 
            <span class="separator">/</span> 
            <span class="current">Services</span>
        </div>
    </div>
</section>
<div class="services-list-wrapper">
    <!-- Services Grid -->
    <section class="services-grid py-5">
        <div class="container">
            <div class="row g-4">
                <?php
                $all_services = [
                    ['title' => 'Home Shifting', 'url' => 'home-shifting', 'icon' => 'bi-house-heart', 'desc' => 'Safe and reliable household relocation across India.'],
                    ['title' => 'Office Shifting', 'url' => 'office-shifting', 'icon' => 'bi-building-up', 'desc' => 'Efficient corporate relocation with zero business downtime.'],
                    ['title' => 'Car Transportation', 'url' => 'car-transportation', 'icon' => 'bi-truck-flatbed', 'desc' => 'Secure vehicle carrier services for your precious car.'],
                    ['title' => 'Bike Transportation', 'url' => 'bike-transportation', 'icon' => 'bi-bicycle', 'desc' => 'Scratch-free bike moving using specialized carriers.'],
                    ['title' => 'Packing & Unpacking', 'url' => 'packing-unpacking', 'icon' => 'bi-box-seam', 'desc' => 'Professional packing materials and expert handling.'],
                    ['title' => 'Loading & Unloading', 'url' => 'loading-unloading', 'icon' => 'bi-person-up', 'desc' => 'Expert manual handling for safe goods placement.'],
                    ['title' => 'Storage Solutions', 'url' => 'storage-solutions', 'icon' => 'bi-camera-video', 'desc' => 'Secure warehousing and household storage facilities.'],
                ];

                foreach($all_services as $svc):
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="service-list-card p-4 rounded-4 border shadow-sm h-100 text-center">
                        <div class="svc-icon-box mb-4 text-warning">
                            <i class="bi <?= $svc['icon'] ?> display-4"></i>
                        </div>
                        <h4 class="fw-bold mb-3"><?= $svc['title'] ?></h4>
                        <p class="text-muted mb-4"><?= $svc['desc'] ?></p>
                        <a href="<?= site_url($svc['url']) ?>" class="btn btn-outline-primary rounded-pill px-4">
                            Learn More <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>

<style>

.service-list-card {
    transition: all 0.3s ease;
}
.service-list-card:hover {
    transform: translateY(-10px);
    border-color: #FBA707 !important;
    box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
}
</style>
