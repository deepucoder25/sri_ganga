<!-- Testimonial Section (Ethereal Glass v19) -->
<section class="testimonials-section" id="testimonials">
    <div class="container">
        <div class="text-center mb-5">
            <span class="about-tag">Success Stories</span>
            <h2 class="about-title testi-title-glass">What Our <span>Clients</span> Say</h2>
            <p class="testi-desc-glass">Experience the high-end relocation service that everyone is talking about.</p>
        </div>

        <div class="swiper testi-glass-v19">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="glass-card-v19">
                        <div class="glass-stars-v19">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="glass-quote-v19">"The level of professionalism was astounding. They handled our office relocation with zero downtime and surgical precision."</p>
                        <div class="glass-user-v19 mt-auto pt-4">
                            <img src="https://i.pravatar.cc/150?u=11" alt="Vikram Mehta" class="glass-avatar-v19">
                            <div class="glass-meta-v19">
                                <h6>Vikram Mehta</h6>
                                <small>Corporate Client</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="glass-card-v19">
                        <div class="glass-stars-v19">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="glass-quote-v19">"From Mumbai to Bangalore, not a single scratch. Their smart packing system is truly advanced. World-class experience!"</p>
                        <div class="glass-user-v19 mt-auto pt-4">
                            <img src="https://i.pravatar.cc/150?u=12" alt="Aditi Rao" class="glass-avatar-v19">
                            <div class="glass-meta-v19">
                                <h6>Aditi Rao</h6>
                                <small>Residential Client</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="glass-card-v19">
                        <div class="glass-stars-v19">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="glass-quote-v19">"Transported my luxury SUV across the country safely. The specialized carrier and real-time tracking were top-notch."</p>
                        <div class="glass-user-v19 mt-auto pt-4">
                            <img src="https://i.pravatar.cc/150?u=13" alt="Suresh Raina" class="glass-avatar-v19">
                            <div class="glass-meta-v19">
                                <h6>Suresh Raina</h6>
                                <small>Vehicle Logistics</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <div class="glass-card-v19">
                        <div class="glass-stars-v19">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="glass-quote-v19">"Exceptional coordination for our overseas move. The team kept us updated at every single stage of the journey."</p>
                        <div class="glass-user-v19 mt-auto pt-4">
                            <img src="https://i.pravatar.cc/150?u=14" alt="Rahul Khanna" class="glass-avatar-v19">
                            <div class="glass-meta-v19">
                                <h6>Rahul Khanna</h6>
                                <small>International Client</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Custom Navigation -->
            <div class="testi-glass-nav">
                <div class="glass-nav-btn glass-prev"><i class="fas fa-chevron-left"></i></div>
                <div class="glass-nav-btn glass-next"><i class="fas fa-chevron-right"></i></div>
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
