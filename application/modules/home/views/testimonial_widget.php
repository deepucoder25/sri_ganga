<!-- Testimonial Section -->
<section class="testimonials-section" id="testimonials">
    <div class="container">

        <div class="text-center mb-5">
            <span class="about-tag">Success Stories</span>
            <h2 class="about-title testi-title-glass">
                What Our <span>Clients</span> Say
            </h2>
            <p class="testi-desc-glass">
                Experience the high-end relocation service that everyone is talking about.
            </p>
        </div>

        <div class="swiper testi-glass-v19">
            <div class="swiper-wrapper">

                <?php foreach($testimonials as $item): ?>
                <div class="swiper-slide">

                    <div class="glass-card-v19">

                        <div class="glass-stars-v19">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>

                        <p class="glass-quote-v19">
                            "<?= $item['review'] ?>"
                        </p>

                        <div class="glass-user-v19 mt-auto pt-4">

                            <img 
                                src="<?= $item['image'] ?>" 
                                alt="<?= $item['name'] ?>" 
                                class="glass-avatar-v19"
                            >

                            <div class="glass-meta-v19">
                                <h6><?= $item['name'] ?></h6>
                                <small><?= $item['role'] ?></small>
                            </div>

                        </div>

                    </div>

                </div>
                <?php endforeach; ?>

            </div>

            <!-- Navigation -->
            <div class="testi-glass-nav">
                <div class="glass-nav-btn glass-prev">
                    <i class="fas fa-chevron-left"></i>
                </div>

                <div class="glass-nav-btn glass-next">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof Swiper !== 'undefined') {
            new Swiper('.testi-glass-v19', {
                slidesPerView: 1,
                spaceBetween: 25,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: '.glass-next',
                    prevEl: '.glass-prev',
                },
                breakpoints: {
                    768: { slidesPerView: 2 },
                    1024: { slidesPerView: 3 }
                }
            });
        }
    });
</script>
