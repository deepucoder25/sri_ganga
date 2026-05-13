<header class="sg-header">
    <!-- Premium Top Bar -->
    <div class="sg-top-bar">
        <div class="sg-top-container">
            <div class="sg-top-left">
                <a href="tel:<?= $phone ?>" class="sg-top-link">
                    <i class="fas fa-phone-alt"></i>
                    <span><?= $phone ?></span>
                </a>
                <span class="sg-top-link">
                    <i class="fas fa-map-marker-alt"></i>
                    <span><?= $addressRegion ?></span>
                </span>
            </div>
            <div class="sg-trust-badge">
                <i class="fas fa-certificate"></i> Verified Service
            </div>
        </div>
    </div>
    
    <!-- Main Frosted Navbar -->
    <nav class="sg-navbar">
        <div class="sg-nav-container">
            <a href="<?= base_url() ?>" class="sg-logo">
                <img src="<?= base_url('assets/images/logo.png') ?>" alt="eGati RELOCATION">
            </a>

            <ul class="sg-nav-menu">
                <li><a href="<?= base_url() ?>" class="sg-nav-link">Home</a></li>
                <li><a href="<?= base_url('services') ?>" class="sg-nav-link">Services</a></li>
                <li><a href="<?= base_url('gallery') ?>" class="sg-nav-link">Gallery</a></li>
                <li><a href="<?= base_url('about') ?>" class="sg-nav-link">About</a></li>
                <li><a href="<?= base_url('contact') ?>" class="sg-nav-link">Contact</a></li>
            </ul>

            <a href="<?= base_url('contact') ?>" class="sg-cta-btn">
                <span>Quick Quote</span>
                <i class="fas fa-paper-plane"></i>
            </a>

            <button class="sg-mobile-toggle" id="sg-mobile-btn">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>
</header>

<!-- Header Spacer -->
<div class="sg-spacer"></div>

<?php $this->load->view('contacts/quotemodal') ?>

<script>
    const mobileBtn = document.getElementById('sg-mobile-btn');
    const navMenu = document.querySelector('.sg-nav-menu');
    
    mobileBtn.addEventListener('click', () => {
        if (navMenu.style.display === 'flex') {
            navMenu.style.display = 'none';
        } else {
            navMenu.style.display = 'flex';
            navMenu.style.flexDirection = 'column';
            navMenu.style.position = 'absolute';
            navMenu.style.top = '100%';
            navMenu.style.left = '0';
            navMenu.style.width = '100%';
            navMenu.style.background = 'rgba(255,255,255,0.98)';
            navMenu.style.padding = '30px';
            navMenu.style.boxShadow = '0 15px 30px rgba(0,0,0,0.1)';
            navMenu.style.zIndex = '1000';
            navMenu.style.gap = '20px';
        }
    });
</script>


