<!-- Elite Testimonials Section - Initial Avatars -->
<section class="testi-screenshot-section py-5 px-3">
    <div class="container">
        <!-- Header -->
        <div class="text-center mb-5">
            <h2 class="service-title-v3">Our <span>Testimonial</span></h2>
            <div class="title-underline mx-auto">
                <span class="line-blue"></span>
                <span class="line-green"></span>
            </div>
            <p class="section-desc-team mt-3 mx-auto">
                Discover what our clients say about their experience with Sri Ganga Packers and Movers.
            </p>
        </div>

        <?php
        // Helper function for initials
        if (!function_exists('getInitials')) {
            function getInitials($name) {
                $words = explode(" ", $name);
                $initials = "";
                foreach ($words as $w) {
                    $initials .= strtoupper($w[0]);
                    if(strlen($initials) >= 2) break;
                }
                return $initials;
            }
        }

       
        ?>

        <!-- Slider Container -->
        <div class="position-relative">
            <div class="swiper testimonialsSwiperTeam overflow-hidden pb-5 px-md-1">
                <div class="swiper-wrapper">
                    <?php foreach ($testimonial_list as $t): ?>
                    <div class="swiper-slide">
                        <div class="testi-card-wrapper">
                            <div class="card-bg-shape <?= $t['color'] ?>"></div>
                            <div class="testi-card-white">
                                <!-- Initial-based Avatar -->
                                <div class="testi-avatar-top <?= $t['color'] ?> d-flex align-items-center justify-content-center text-white fw-bold fs-3">
                                    <?= getInitials($t['name']) ?>
                                </div>
                                <h4 class="testi-name"><?= $t['name'] ?></h4>
                                <em class="testi-pos"><?= $t['pos'] ?></em>
                                <p class="testi-text">
                                    "<?= $t['text'] ?>"
                                </p>
                                <div class="testi-footer-icon">
                                    <i class="bi bi-star-fill text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination mt-4"></div>
            </div>

            <!-- Navigation Buttons -->
            <div class="testi-nav-btn prev-btn-team"><i class="bi bi-chevron-left"></i></div>
            <div class="testi-nav-btn next-btn-team"><i class="bi bi-chevron-right"></i></div>
        </div>
    </div>
</section>

<!-- Swiper Initialization -->
<script>
(function() {
    function initSwiper() {
        if (typeof Swiper !== 'undefined') {
            new Swiper(".testimonialsSwiperTeam", {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                speed: 1000,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".next-btn-team",
                    prevEl: ".prev-btn-team",
                },
                breakpoints: {
                    768: { slidesPerView: 2 },
                    1200: { slidesPerView: 3 }
                }
            });
        } else {
            setTimeout(initSwiper, 100);
        }
    }
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initSwiper);
    } else {
        initSwiper();
    }
})();
</script>
