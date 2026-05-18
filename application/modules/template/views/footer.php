<footer class="eg-footer">
    <div class="container">
        <!-- Top Section: Features & About -->
        <div class="footer-top">
            <div class="row">
                <!-- Column 1: About & Key Features -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <a href="<?= base_url() ?>" class="footer-logo">
                        <img src="<?= base_url('assets/images/logo/logo.png') ?>" alt="eGati RELOCATION" loading="lazy">
                    </a>
                    <p class="footer-about-text">
                        India's most trusted packers and movers. We handle your precious belongings with zero-damage guarantee.
                    </p>
                    
                    <div class="footer-features-list">
                        <div class="footer-feature">
                            <div class="feature-icon-circle"><i class="bi bi-shield-lock-fill"></i></div>
                            <div class="feature-info">
                                <h6>Safe & Insured</h6>
                                <span>100% Zero-damage Guarantee</span>
                            </div>
                        </div>
                        <div class="footer-feature">
                            <div class="feature-icon-circle"><i class="bi bi-clock-history"></i></div>
                            <div class="feature-info">
                                <h6>On-Time Delivery</h6>
                                <span>Punctual & Trackable Move</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div class="col-lg-2 col-md-6 mb-4 col-6 mb-lg-0 ps-lg-5">
                    <h5 class="footer-col-title">Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="<?= site_url() ?>"><i class="bi bi-chevron-right"></i> Home</a></li>
                        <li><a href="<?= site_url('about') ?>"><i class="bi bi-chevron-right"></i> About Us</a></li>
                        <li><a href="<?= site_url('services') ?>"><i class="bi bi-chevron-right"></i> Services</a></li>
                        <li><a href="<?= site_url('gallery') ?>"><i class="bi bi-chevron-right"></i> Gallery</a></li>
                        <li><a href="<?= site_url('branches') ?>"><i class="bi bi-chevron-right"></i> Our Branches</a></li>
                        <li><a href="<?= site_url('contact') ?>"><i class="bi bi-chevron-right"></i> Contact Us</a></li>
                    </ul>
                </div>

                <!-- Column 3: Our Services -->
                <div class="col-lg-2 col-md-6 col-6 mb-4 mb-lg-0">
                    <h5 class="footer-col-title">Our Services</h5>
                    <ul class="footer-links">
                        <li><a href="<?= site_url('home-shifting') ?>"><i class="bi bi-chevron-right"></i> Home Shifting</a></li>
                        <li><a href="<?= site_url('office-shifting') ?>"><i class="bi bi-chevron-right"></i> Office Shifting</a></li>
                        <li><a href="<?= site_url('car-transportation') ?>"><i class="bi bi-chevron-right"></i> Car Transportation</a></li>
                        <li><a href="<?= site_url('bike-transportation') ?>"><i class="bi bi-chevron-right"></i> Bike Transportation</a></li>
                        <li><a href="<?= site_url('packing-unpacking') ?>"><i class="bi bi-chevron-right"></i> Packing & Unpacking</a></li>
                        <li><a href="<?= site_url('loading-unloading') ?>"><i class="bi bi-chevron-right"></i> Loading & Unloading</a></li>
                        <li><a href="<?= site_url('storage-solutions') ?>"><i class="bi bi-chevron-right"></i> Storage Solutions</a></li>
                    </ul>
                </div>

                <!-- Column 4: Our Branches -->
                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                    <h5 class="footer-col-title">Our Branches</h5>
                    <ul class="footer-links">
                        <li><a href="<?= site_url('bihar') ?>"><i class="bi bi-geo-alt-fill"></i> Patna</a></li>
                        <li><a href="<?= site_url('delhi') ?>"><i class="bi bi-geo-alt-fill"></i> Delhi</a></li>
                        <li><a href="<?= site_url('maharashtra') ?>"><i class="bi bi-geo-alt-fill"></i> Mumbai</a></li>
                        <li><a href="<?= site_url('karnataka') ?>"><i class="bi bi-geo-alt-fill"></i> Bangalore</a></li>
                        <li><a href="<?= site_url('westbengal') ?>"><i class="bi bi-geo-alt-fill"></i> Kolkata</a></li>
                        <li><a href="<?= site_url('telangana') ?>"><i class="bi bi-geo-alt-fill"></i> Hyderabad</a></li>
                        <li><a href="<?= site_url('maharashtra') ?>"><i class="bi bi-geo-alt-fill"></i> Pune</a></li>
                    </ul>
                </div>

                <!-- Column 5: Contact Us -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="footer-col-title">Contact Us</h5>
                    <a href="<?= $phonehtml ?>" class="contact-item-box text-decoration-none">
                        <div class="contact-icon"><i class="bi bi-telephone-outbound-fill"></i></div>
                        <div class="contact-text">
                            <strong><?= $phone ?></strong>
                            <span>Call Us Now</span>
                        </div>
                    </a>
                    <a href="<?= $mailhtml ?>" class="contact-item-box text-decoration-none">
                        <div class="contact-icon"><i class="bi bi-envelope-at-fill"></i></div>
                        <div class="contact-text">
                            <strong><?= $mail ?></strong>
                            <span>Mail Us</span>
                        </div>
                    </a>
                    <div class="contact-item-box">
                        <div class="contact-icon"><i class="bi bi-geo-alt-fill"></i></div>
                        <div class="contact-text">
                            <strong><?= $address1 ?>, <?= $addressRegion ?></strong>
                            <span>Visit Our Office</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Middle Section: Socials, Certifications, Payments -->
        <div class="footer-mid">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6">
                    <span class="mid-title">Follow Us</span>
                    <div class="social-links">
                        <a href="#" class="social-btn"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-btn"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-btn"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="social-btn"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <span class="mid-title">Certifications</span>
                    <div class="cert-logos">
                        <div class="cert-item"><img src="<?= base_url('assets/images/footer/iso.png') ?>" alt="ISO Certified" loading="lazy"></div>
                        <div class="cert-item"><img src="<?= base_url('assets/images/footer/verified.png') ?>" alt="Verified Company" loading="lazy"></div>
                        <div class="cert-item"><img src="<?= base_url('assets/images/footer/secure.png') ?>" alt="100% Secure" loading="lazy"></div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 text-lg-end mt-4 mt-lg-0">
                    <span class="mid-title">Payment Methods</span>
                    <div class="payment-logos justify-content-lg-end">
                        <div class="payment-item"><img src="<?= base_url('assets/images/footer/visa.png') ?>" alt="Visa" loading="lazy"></div>
                        <div class="payment-item"><img src="<?= base_url('assets/images/footer/mastercard.png') ?>" alt="Mastercard" loading="lazy"></div>
                        <div class="payment-item"><img src="<?= base_url('assets/images/footer/upi.png') ?>" alt="UPI" loading="lazy"></div>
                        <div class="payment-item"><img src="<?= base_url('assets/images/footer/paytm.png') ?>" alt="Paytm" loading="lazy"></div>
                        <div class="payment-item"><img src="<?= base_url('assets/images/footer/gpay.png') ?>" alt="Google Pay" loading="lazy"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright Bar -->
    <div class="footer-copyright">
        <div class="container">
            <div class="copy-content">
                <div class="copy-text">
                    &copy; <?= date('Y') ?> eGati Relocation. All Rights Reserved.
                </div>
                <div class="copy-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script src="<?= base_url('assets/js/swiper-bundle.min.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
