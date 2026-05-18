<body>
<header class="eg-header">
    <!-- Premium Top Bar (Blue) -->
    <div class="eg-top-bar">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="eg-top-info d-none d-lg-flex">
                <span class="eg-info-item"><i class="bi bi-geo-alt-fill"></i> Pan India Service Network</span>
                <span class="eg-info-item"><i class="bi bi-shield-check"></i> 100% Safe & Secure Moving</span>
                <span class="eg-info-item"><i class="bi bi-people-fill"></i> 1000+ Happy Customers</span>
            </div>
            <div class="eg-top-right d-flex align-items-center gap-3">
                <span class="badge-verified"><i class="bi bi-patch-check-fill"></i> VERIFIED SERVICE</span>
                <!-- Mobile only contact -->
                <div class="d-lg-none">
                    <a href="tel:<?= $phone ?>" class="text-white text-decoration-none small">
                        <i class="bi bi-telephone-fill"></i> <?= $phone ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main Frosted Navbar -->
    <nav class="eg-main-nav">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Logo -->
            <a href="<?= base_url() ?>" class="eg-logo">
                <img src="<?= base_url('assets/images/logo/logo.png') ?>" alt="eGati RELOCATION">
            </a>

            <!-- Desktop Menu -->
            <ul class="eg-nav-menu d-none d-lg-flex">
                <li><a href="<?= site_url() ?>" class="eg-nav-link active">HOME</a></li>
                <li><a href="<?= site_url('services') ?>" class="eg-nav-link">SERVICES</a></li>
                <li><a href="<?= site_url('gallery') ?>" class="eg-nav-link">GALLERY</a></li>
                <li><a href="<?= site_url('about') ?>" class="eg-nav-link">ABOUT</a></li>
                <li><a href="<?= site_url('branches') ?>" class="eg-nav-link">OUR BRANCHES</a></li>
                <li><a href="<?= site_url('contact') ?>" class="eg-nav-link">CONTACT</a></li>
            </ul>

            <!-- Nav Actions -->
            <div class="eg-nav-actions d-none d-lg-flex">
                <a href="tel:<?= $phone ?>" class="phone-icon-circle" title="Call Us">
                    <i class="bi bi-telephone-fill"></i>
                </a>
                <a href="#" class="quote-btn-elite" data-bs-toggle="modal" data-bs-target="#quoteModal">
                    QUICK QUOTE <i class="bi bi-send-fill"></i>
                </a>
            </div>

            <!-- Mobile Toggle -->
            <button class="eg-mobile-toggle d-lg-none" id="eg-mobile-open">
                <i class="bi bi-list"></i>
            </button>
        </div>
    </nav>
</header>

<!-- Modern Mobile Menu Overlay -->
<div class="eg-mobile-overlay" id="eg-mobile-menu">
    <div class="eg-overlay-header">
        <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo" class="overlay-logo">
        <button class="overlay-close" id="eg-mobile-close"><i class="bi bi-x-lg"></i></button>
    </div>
    <div class="eg-overlay-content">
        <ul class="overlay-menu">
            <li><a href="<?= site_url() ?>" class="overlay-link">HOME</a></li>
            <li><a href="<?= site_url('services') ?>" class="overlay-link">SERVICES</a></li>
            <li><a href="<?= site_url('gallery') ?>" class="overlay-link">GALLERY</a></li>
            <li><a href="<?= site_url('about') ?>" class="overlay-link">ABOUT</a></li>
            <li><a href="<?= site_url('branches') ?>" class="overlay-link">OUR BRANCHES</a></li>
            <li><a href="<?= site_url('contact') ?>" class="overlay-link">CONTACT</a></li>
        </ul>
        <div class="overlay-footer mt-5">
            <a href="tel:<?= $phone ?>" class="overlay-cta-phone mb-3">
                <i class="bi bi-telephone-fill"></i> <?= $phone ?>
            </a>
            <a href="#" class="quote-btn-elite w-100 text-center" data-bs-toggle="modal" data-bs-target="#quoteModal">
                QUICK QUOTE <i class="bi bi-send-fill"></i>
            </a>
        </div>
    </div>
</div>

<!-- Header Spacer -->
<div class="eg-nav-spacer"></div>

<?php $this->load->view('contacts/quotemodal') ?>

<script>
    const mobileOpen = document.getElementById('eg-mobile-open');
    const mobileClose = document.getElementById('eg-mobile-close');
    const mobileMenu = document.getElementById('eg-mobile-menu');
    
    mobileOpen.addEventListener('click', () => {
        mobileMenu.classList.add('active');
        document.body.style.overflow = 'hidden';
    });
    
    mobileClose.addEventListener('click', () => {
        mobileMenu.classList.remove('active');
        document.body.style.overflow = 'auto';
    });

    // Close on link click
    document.querySelectorAll('.overlay-link').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            document.body.style.overflow = 'auto';
        });
    });
</script>
