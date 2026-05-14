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
                    <?php if(!empty($faqs)): foreach($faqs as $index => $item): ?>
                    <!-- Item <?= $index + 1 ?> -->
                    <div class="faq-acc-item <?= ($index === 0) ? 'active' : '' ?>" data-aos="fade-up" data-aos-delay="<?= ($index + 1) * 100 ?>">
                        <div class="faq-acc-header">
                            <span class="acc-num"><?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?></span>
                            <h4><?= $item['question'] ?></h4>
                            <div class="acc-icon-plus"></div>
                        </div>
                        <div class="faq-acc-body">
                            <p><?= $item['answer'] ?></p>
                        </div>
                    </div>
                    <?php endforeach; endif; ?>
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


