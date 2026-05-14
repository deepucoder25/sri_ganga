<!-- FAQ Section (Elite Split Accordion v2.0) -->
<section class="faq-section-elite" id="faq">
    <div class="container">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content & Image -->
            <div class="col-lg-5">
                <div class="faq-content-box">
                    <span class="about-tag">Support Hub</span>
                    <h2 class="faq-elite-title">Frequently Asked <br><span>Questions</span></h2>
                    <p class="faq-elite-desc">Got questions about your move? We've got clear, expert answers to help you plan your journey with confidence.</p>
                    
                    <div class="faq-cta-card mt-5">
                        <div class="cta-inner">
                            <div class="cta-icon-box">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div class="cta-text">
                                <h5>Still have questions?</h5>
                                <p>Our support team is online 24/7</p>
                                <a href="#contact" class="faq-contact-link">Contact Support <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Accordion -->
            <div class="col-lg-7">
                <div class="faq-accordion-wrapper">
                    <!-- Item 1 -->
                    <div class="faq-acc-item active" data-aos="fade-up" data-aos-delay="100">
                        <div class="faq-acc-header">
                            <span class="acc-num">01</span>
                            <h4>How are tariffs calculated?</h4>
                            <div class="acc-icon-plus"></div>
                        </div>
                        <div class="faq-acc-body">
                            <p>Our algorithmic pricing engine considers asset volume, transit distance, specialized resource requirements, and insurance value to provide a precise, transparent quote with no hidden charges.</p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="faq-acc-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="faq-acc-header">
                            <span class="acc-num">02</span>
                            <h4>What is asset protection protocol?</h4>
                            <div class="acc-icon-plus"></div>
                        </div>
                        <div class="faq-acc-body">
                            <p>We provide comprehensive multi-layer transit insurance and utilize impact-resistant industrial grade materials for all assets to ensure 100% safety during the entire relocation process.</p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="faq-acc-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="faq-acc-header">
                            <span class="acc-num">03</span>
                            <h4>Do you handle vehicle logistics?</h4>
                            <div class="acc-icon-plus"></div>
                        </div>
                        <div class="faq-acc-body">
                            <p>Yes, we utilize specialized closed-container carriers with advanced security systems for car and bike transportation across any distance, ensuring scratch-free delivery.</p>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="faq-acc-item" data-aos="fade-up" data-aos-delay="400">
                        <div class="faq-acc-header">
                            <span class="acc-num">04</span>
                            <h4>International Relocation services?</h4>
                            <div class="acc-icon-plus"></div>
                        </div>
                        <div class="faq-acc-body">
                            <p>We offer full-scale international moving solutions including customs clearance, port logistics, and door-to-door delivery worldwide with real-time global tracking.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    console.log('FAQ Accordion Initialized');
    const headers = document.querySelectorAll('.faq-acc-header');
    
    headers.forEach(header => {
        header.addEventListener('click', () => {
            const item = header.parentElement;
            const body = item.querySelector('.faq-acc-body');
            const isActive = item.classList.contains('active');
            
            console.log('FAQ Clicked:', header.querySelector('h4').innerText);

            // Close all other items
            document.querySelectorAll('.faq-acc-item').forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });
            
            // Toggle current item
            item.classList.toggle('active');
        });
    });
});
</script>


