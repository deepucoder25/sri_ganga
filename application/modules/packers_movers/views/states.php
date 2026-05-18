<main class="main">
    <section class="custom-service-banner" style="background-image: url('<?= base_url("assets/images/service_banner_bg.png") ?>');">
        <div class="banner-content">
            <h1 class="banner-title">Branches</h1>
            <div class="banner-breadcrumb">
                <a href="<?= site_url() ?>"><i class="bi bi-house-door-fill"></i> Home</a> 
                <span class="separator">/</span> 
                <span class="current">Branches</span>
            </div>
        </div>
    </section>

    <?php $this->view('packers_movers/states_widget.php'); ?>

</main>