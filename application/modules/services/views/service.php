<section class="custom-service-banner" style="background-image: url('<?= base_url("assets/images/service_banner_bg.png") ?>');">
    <div class="banner-content">
        <h1 class="banner-title">Our Expert Services</h1>
        <div class="banner-breadcrumb">
            <a href="<?= site_url() ?>"><i class="bi bi-house-door-fill"></i> Home</a> 
            <span class="separator">/</span> 
            <span class="current">Services</span>
        </div>
    </div>
</section>
<div class="services-list-wrapper">
    <!-- Aurora Glass Services Grid -->
    <section class="services-aurora-section py-5 position-relative">
        <!-- Aurora Orbs -->
        <div class="aurora-orb orb-1"></div>
        <div class="aurora-orb orb-2"></div>
        <div class="aurora-orb orb-3"></div>

        <div class="container position-relative z-1">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <span class="text-uppercase fw-bold text-orange tracking-wide">OUR EXPERTISE</span>
                    <h2 class="fw-bold text-dark mt-2 mb-3" style="letter-spacing: -1px;">Next-Gen Relocation</h2>
                    <p class="text-muted lead">Experience the perfect blend of technology and care with our state-of-the-art moving services.</p>
                </div>
            </div>

            <div class="row g-4">
                <?php
                $all_services = [
                    ['title' => 'Home Shifting', 'url' => 'home-shifting', 'icon' => 'bi-house-door', 'desc' => 'Safe and reliable household relocation across India.'],
                    ['title' => 'Office Shifting', 'url' => 'office-shifting', 'icon' => 'bi-building', 'desc' => 'Efficient corporate relocation with zero business downtime.'],
                    ['title' => 'Car Transportation', 'url' => 'car-transportation', 'icon' => 'bi-car-front', 'desc' => 'Secure vehicle carrier services for your precious car.'],
                    ['title' => 'Bike Transportation', 'url' => 'bike-transportation', 'icon' => 'bi-bicycle', 'desc' => 'Scratch-free bike moving using specialized carriers.'],
                    ['title' => 'Packing & Unpacking', 'url' => 'packing-unpacking', 'icon' => 'bi-box-seam', 'desc' => 'Professional packing materials and expert handling.'],
                    ['title' => 'Loading & Unloading', 'url' => 'loading-unloading', 'icon' => 'bi-people', 'desc' => 'Expert manual handling for safe goods placement.'],
                    ['title' => 'Storage Solutions', 'url' => 'storage-solutions', 'icon' => 'bi-archive', 'desc' => 'Secure warehousing and household storage facilities.'],
                ];

                foreach($all_services as $index => $svc):
                    $num = str_pad($index + 1, 2, '0', STR_PAD_LEFT);
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="glass-service-card h-100 p-4 rounded-4 position-relative">
                        <div class="card-bg-glow"></div>
                        <span class="bg-number"><?= $num ?></span>
                        
                        <div class="icon-wrapper mb-3">
                            <i class="bi <?= $svc['icon'] ?>"></i>
                        </div>
                        
                        <h5 class="fw-bold text-dark mb-2 position-relative z-1"><?= $svc['title'] ?></h5>
                        <p class="small text-muted mb-3 position-relative z-1" style="font-size: 0.85rem;"><?= $svc['desc'] ?></p>
                        
                        <a href="<?= site_url($svc['url']) ?>" class="btn-glass-link text-decoration-none fw-bold mt-auto">
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
/* Aurora Glass Design */
.services-aurora-section {
    background-color: #f8fafc;
    overflow: hidden;
}

/* Aurora Orbs */
.aurora-orb {
    position: absolute;
    border-radius: 50%;
    filter: blur(80px);
    opacity: 0.4;
    z-index: 0;
    animation: float 10s infinite alternate ease-in-out;
}

.orb-1 {
    width: 400px;
    height: 400px;
    background: #fba707;
    top: -100px;
    left: -100px;
    animation-delay: 0s;
}

.orb-2 {
    width: 500px;
    height: 500px;
    background: #0056B3;
    bottom: -150px;
    right: -100px;
    animation-delay: -3s;
}

.orb-3 {
    width: 300px;
    height: 300px;
    background: #00d2ff;
    top: 30%;
    left: 40%;
    animation-delay: -6s;
    opacity: 0.2;
}

@keyframes float {
    0% { transform: translate(0, 0) scale(1); }
    100% { transform: translate(50px, 50px) scale(1.2); }
}

/* Glass Card */
.glass-service-card {
    background: rgba(255, 255, 255, 0.5);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.8);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
    transition: all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
    overflow: hidden;
}

.glass-service-card:hover {
    transform: translateY(-10px);
    background: rgba(255, 255, 255, 0.9);
    box-shadow: 0 20px 40px rgba(0, 86, 179, 0.1);
    border-color: #fff;
}

/* Background Number */
.bg-number {
    position: absolute;
    top: -5px;
    right: 10px;
    font-size: 5rem;
    font-weight: 900;
    color: rgba(0, 86, 179, 0.03);
    line-height: 1;
    z-index: 0;
    transition: all 0.5s ease;
}

.glass-service-card:hover .bg-number {
    color: rgba(251, 167, 7, 0.08);
    transform: translateX(-10px);
}

/* Glowing Background shape inside card */
.card-bg-glow {
    position: absolute;
    bottom: -50px;
    right: -50px;
    width: 100px;
    height: 100px;
    background: radial-gradient(circle, rgba(251,167,7,0.2) 0%, transparent 70%);
    border-radius: 50%;
    transition: all 0.6s ease;
    z-index: 0;
}

.glass-service-card:hover .card-bg-glow {
    transform: scale(2.5);
    background: radial-gradient(circle, rgba(251,167,7,0.1) 0%, transparent 70%);
}

/* Icon Wrap */
.icon-wrapper {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #ffffff, #f0f2f5);
    border: 1px solid rgba(255,255,255,0.8);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 8px 16px rgba(0,0,0,0.06);
    position: relative;
    z-index: 1;
    transition: all 0.4s ease;
}

.icon-wrapper i {
    font-size: 1.5rem;
    color: #0056B3;
    transition: all 0.4s ease;
    background: linear-gradient(135deg, #0056B3, #fba707);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.glass-service-card:hover .icon-wrapper {
    background: linear-gradient(135deg, #fba707, #ffc107);
    border-color: #fba707;
    transform: rotate(10deg);
}

.glass-service-card:hover .icon-wrapper i {
    background: none;
    -webkit-text-fill-color: #fff;
}

/* Link */
.btn-glass-link {
    color: #0056B3;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    position: relative;
    z-index: 1;
    transition: all 0.3s ease;
    text-transform: uppercase;
    font-size: 0.75rem;
    letter-spacing: 1px;
}

.btn-glass-link i {
    transition: transform 0.3s ease;
    font-size: 1rem;
}

.glass-service-card:hover .btn-glass-link {
    color: #fba707;
}

.glass-service-card:hover .btn-glass-link i {
    transform: translateX(8px);
}

.text-orange { color: #fba707 !important; }
.tracking-wide { letter-spacing: 2px; }
</style>
