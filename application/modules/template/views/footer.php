<footer class="sg-footer">
    <div class="footer-container">
        <div class="footer-grid">
            <!-- About Column -->
            <div class="footer-col footer-about">
                <h4>eGati Relocation</h4>
                <p>Leading packers and movers service provider in India, offering premium moving and storage solutions with a focus on safety, efficiency, and customer satisfaction.</p>
                <div class="footer-social">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="<?= site_url() ?>">Home</a></li>
                    <li><a href="<?= site_url('about') ?>">About Us</a></li>
                    <li><a href="<?= site_url('gallery') ?>">Gallery</a></li>
                    <li><a href="<?= site_url('contact') ?>">Contact Us</a></li>
                    <li><a href="<?= site_url('branches') ?>">Our Branches</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="footer-col">
                <h4>Our Services</h4>
                <ul class="footer-links">
                    <li><a href="#">Household Shifting</a></li>
                    <li><a href="#">Office Relocation</a></li>
                    <li><a href="#">Car Transportation</a></li>
                    <li><a href="#">Warehouse & Storage</a></li>
                    <li><a href="#">Packing & Unpacking</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="footer-col">
                <h4>Get In Touch</h4>
                <div class="footer-contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div><?= $address1 ?>, <?= $address2 ?>, <?= $addressRegion ?>, <?= $postalCode ?></div>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-phone-alt"></i>
                    <div><?= $phone ?></div>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-envelope"></i>
                    <div><?= $mail ?></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="footer-bottom">
        <div class="footer-bottom-container">
            <div class="footer-copy">
                &copy; <?= date('Y') ?> <strong>eGati Relocation Packers & Movers</strong>. All rights reserved.
            </div>
            <div class="footer-bottom-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Sitemap</a>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
