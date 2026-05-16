<div class="services-list-wrapper">
    <!-- Hero Section -->
    <section class="service-hero" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1587293852726-70cdb56c2866?auto=format&fit=crop&q=80&w=1600');">
        <div class="container text-center text-white py-5">
            <h1 class="display-3 fw-bold mb-3">Our Expert Services</h1>
            <p class="lead mb-4">Comprehensive relocation and logistics solutions tailored to your needs.</p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?= site_url() ?>" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active text-warning" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </section>

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
.service-hero {
    padding: 100px 0;
    background-size: cover !important;
    background-position: center !important;
}
.service-list-card {
    transition: all 0.3s ease;
}
.service-list-card:hover {
    transform: translateY(-10px);
    border-color: #FBA707 !important;
    box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
}
</style>
