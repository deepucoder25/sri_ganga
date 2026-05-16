<!-- Elite FAQ Section - Screenshot Match -->
<section class="eg-faq-screenshot-section py-5">
    <div class="container">
        <!-- Header -->
        <div class="text-center mb-5">
            <span class="faq-pill-tag mb-3 d-inline-block">Frequently Asked Questions</span>
            <h2 class="faq-main-title">Your Questions, Our Expertise.</h2>
            <p class="faq-main-desc mx-auto mt-3">
                We've compiled answers to the most common questions about our services, process, and commitment to your success.
            </p>
        </div>

        <!-- FAQ Grid -->
        <div class="row g-4">
            <?php if(!empty($faqs)): ?>
                <?php foreach($faqs as $index => $item): ?>
                    <div class="col-lg-6">
                        <div class="faq-acc-item-v3" data-faq-id="<?= $index ?>">
                            <div class="faq-acc-header-v3 d-flex align-items-center justify-content-between p-3">
                                <h5 class="mb-0 faq-question-v3"><?= $item['question'] ?></h5>
                                <i class="bi bi-chevron-down faq-chevron-v3"></i>
                            </div>
                            <div class="faq-acc-body-v3 px-4 pb-4">
                                <div class="faq-answer-v3">
                                    <?= $item['answer'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- CTA Box -->
        <div class="faq-cta-box-v3 mt-3 p-3 text-center rounded-4">
            <h3 class="cta-title-v3">Didn't find what you were looking for?</h3>
            <p class="cta-desc-v3 mt-2">
                Our team is ready to provide personalized answers and discuss your specific needs.
            </p>
            <a href="<?= $phonehtml ?>" class="btn btn-faq-cta mt-3 px-4 py-2">Speak with an Expert</a>
        </div>
    </div>
</section>

<!-- Accordion Logic -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-acc-item-v3');
    
    faqItems.forEach(item => {
        const header = item.querySelector('.faq-acc-header-v3');
        header.addEventListener('click', () => {
            // Toggle active class
            const isActive = item.classList.contains('active');
            
            // Optional: Close other items
            // faqItems.forEach(otherItem => otherItem.classList.remove('active'));
            
            if (!isActive) {
                item.classList.add('active');
            } else {
                item.classList.remove('active');
            }
        });
    });
});
</script>
