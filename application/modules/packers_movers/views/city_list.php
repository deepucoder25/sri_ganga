<?php
$st = strtolower(str_replace(" ", "-", $state));
include "data/$st.php";
$state = ucwords($state);
?>

<main class="main bg-light-subtle">
    <section class="custom-service-banner" style="background-image: url('<?= base_url("assets/images/service_banner_bg.png") ?>');">
        <div class="banner-content">
            <h1 class="banner-title align-self-center">Packers and Movers in <?= $state ?></h1>
            <div class="banner-breadcrumb">
                <a href="<?= site_url() ?>"><i class="bi bi-house-door-fill"></i> Home</a> 
                <span class="separator">/</span> 
                <a href="<?= site_url('branches') ?>">Branches</a> 
                <span class="separator">/</span> 
                <span class="current"><?= $state ?></span>
            </div>
        </div>
    </section>

    <!-- Cities Grid Section -->
    <section class="py-5">
        <div class="container">
            <!-- Filtering Header -->
            <div class="row mb-5 justify-content-between align-items-center g-3">
                <div class="col-lg-5 col-md-6">
                    <div class="section-title-wrap">
                        <span class="text-uppercase fw-bold text-warning small letter-spacing-1 d-block mb-1">Serving All Areas</span>
                        <h2 class="fw-extrabold text-dark m-0" style="font-family: 'Outfit', sans-serif; font-size: 28px;">
                            Select Your <span style="color: var(--p-blue);">City</span>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Search Input -->
                    <div class="input-group shadow-sm" style="border-radius: 50px; overflow: hidden; border: 1px solid rgba(0,0,0,0.08);">
                        <span class="input-group-text bg-white border-0 text-muted ps-4 pe-2"><i class="bi bi-search"></i></span>
                        <input type="text" id="citySearch" class="form-control border-0 py-3 ps-2 shadow-none" placeholder="Search your city here..." style="font-size: 14px; font-weight: 500;">
                    </div>
                </div>
            </div>

            <!-- Cities Cards Grid -->
            <div class="row g-4" id="cityContainer">
                <?php
                $st = str_replace(" ", "-", $state);
                foreach ($cities as $ct) :
                    $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
                    $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
                ?>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 city-item" data-name="<?= strtolower($ct['nm']) ?>">
                        <a href="<?= site_url("$link-packers-movers-$statename") ?>" class="text-decoration-none d-block h-100">
                            <div class="card h-100 border-0 shadow-sm custom-city-card position-relative overflow-hidden" style="border-radius: 16px; background: #fff; transition: all 0.3s ease;">
                                <!-- Design Element Top Line -->
                                <div class="position-absolute top-0 start-0 w-100" style="height: 4px; background: linear-gradient(90deg, var(--p-orange) 0%, var(--p-blue) 100%);"></div>
                                
                                <div class="card-body p-4 d-flex align-items-center gap-3">
                                    <!-- Visual Icon Wrapper -->
                                    <div class="city-icon-box d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; border-radius: 12px; background: rgba(251, 167, 7, 0.08); color: var(--p-orange); transition: all 0.3s ease;">
                                        <i class="bi bi-truck fs-5"></i>
                                    </div>
                                    
                                    <!-- Text Content -->
                                    <div class="city-text">
                                        <span class="d-block text-muted small text-uppercase fw-bold mb-1" style="font-size: 10px; letter-spacing: 0.5px;">Best Shifting In</span>
                                        <h3 class="h6 fw-bold text-dark mb-0" style="font-family: 'Outfit', sans-serif; font-size: 16px; transition: color 0.3s ease;">
                                            <?= $ct['nm'] ?>
                                        </h3>
                                    </div>
                                </div>
                                
                                <!-- Floating Arrow on Hover -->
                                <div class="position-absolute end-0 bottom-0 mb-3 me-3 opacity-0 custom-arrow" style="transition: all 0.3s ease; color: var(--p-blue);">
                                    <i class="bi bi-arrow-right fs-5"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
                
                <!-- No Results State -->
                <div class="col-12 text-center py-5 d-none" id="noResults">
                    <div class="mb-3 text-muted display-4"><i class="bi bi-geo-fill"></i></div>
                    <h4 class="fw-bold text-dark">No cities found matching your search</h4>
                    <p class="text-muted">Please check your spelling or search another city.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
/* CSS Styles for Premium Look */
.custom-city-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08) !important;
}

.custom-city-card:hover .city-icon-box {
    background: var(--p-blue) !important;
    color: #fff !important;
    transform: scale(1.05);
}

.custom-city-card:hover .h6 {
    color: var(--p-blue) !important;
}

.custom-city-card:hover .custom-arrow {
    opacity: 1 !important;
    transform: translateX(-5px);
}

.letter-spacing-1 {
    letter-spacing: 1px;
}
</style>

<!-- Live City Search Script -->
<script type="text/javascript">
document.getElementById('citySearch').addEventListener('input', function() {
    var searchQuery = this.value.toLowerCase().trim();
    var cityItems = document.querySelectorAll('.city-item');
    var foundAny = false;
    
    cityItems.forEach(function(item) {
        var cityName = item.getAttribute('data-name');
        if (cityName.includes(searchQuery)) {
            item.classList.remove('d-none');
            foundAny = true;
        } else {
            item.classList.add('d-none');
        }
    });
    
    var noResults = document.getElementById('noResults');
    if (foundAny) {
        noResults.classList.add('d-none');
    } else {
        noResults.classList.remove('d-none');
    }
});
</script>
