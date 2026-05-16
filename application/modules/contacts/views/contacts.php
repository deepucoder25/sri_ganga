<div class="contact-page-wrapper">
    <!-- Hero Section -->
    <section class="service-hero" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=1600');">
        <div class="container text-center text-white py-5">
            <h1 class="display-3 fw-bold mb-3">Contact Us</h1>
            <p class="lead mb-4">Get in touch with us today for a free quote and personalized moving solutions.</p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?= site_url() ?>" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active text-warning" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="contact-content py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <!-- Contact Info -->
                <div class="col-lg-6">
                    <div class="contact-info-panel">
                        <span class="text-primary fw-bold text-uppercase tracking-wider d-block mb-3">GET IN TOUCH</span>
                        <h2 class="display-6 fw-bold mb-4">Reach Out to Our <span class="text-warning">Support Team</span></h2>
                        <p class="text-muted mb-5">Let's plan your perfect move together. Contact us for a free quote and discover why thousands of customers trust us for their relocation needs.</p>
                        
                        <div class="contact-boxes">
                            <div class="d-flex align-items-center mb-4 p-3 rounded-4 border shadow-sm">
                                <div class="icon-circle bg-light text-primary p-3 rounded-circle me-4 fs-4"><i class="bi bi-envelope-at-fill"></i></div>
                                <div>
                                    <small class="text-muted d-block">Email Address</small>
                                    <a href="mailto:<?= $mail ?>" class="text-decoration-none text-dark fw-bold"><?= $mail ?></a>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-center mb-4 p-3 rounded-4 border shadow-sm">
                                <div class="icon-circle bg-light text-warning p-3 rounded-circle me-4 fs-4"><i class="bi bi-telephone-outbound-fill"></i></div>
                                <div>
                                    <small class="text-muted d-block">Phone Number</small>
                                    <a href="tel:<?= $phone ?>" class="text-decoration-none text-dark fw-bold"><?= $phone ?></a>
                                </div>
                            </div>

                            <div class="d-flex align-items-center p-3 rounded-4 border shadow-sm">
                                <div class="icon-circle bg-light text-success p-3 rounded-circle me-4 fs-4"><i class="bi bi-geo-alt-fill"></i></div>
                                <div>
                                    <small class="text-muted d-block">Our Address</small>
                                    <address class="mb-0 fw-bold"><?= $address1 ?>, <?= $addressRegion ?></address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-6">
                    <div class="contact-form-card p-5 rounded-4 shadow-lg bg-white border">
                        <h3 class="fw-bold mb-4">Send a Message</h3>
                        <form method="post" id="getintouchform" onsubmit="return false;">
                            <div class="mb-3">
                                <label class="form-label fw-bold small">Full Name *</label>
                                <input type="text" name="name" class="form-control rounded-pill px-4 py-2" placeholder="Your Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold small">Email Address *</label>
                                <input type="email" name="email" class="form-control rounded-pill px-4 py-2" placeholder="Email Address">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold small">Phone Number *</label>
                                <input type="tel" name="phone" class="form-control rounded-pill px-4 py-2" placeholder="Phone Number">
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-bold small">Your Message *</label>
                                <textarea name="message" class="form-control rounded-4 px-4 py-3" rows="4" placeholder="How can we help?"></textarea>
                            </div>
                            <button type="button" id="submitcontactbtn" class="btn text-white w-100 rounded-pill py-3 fw-bold" style="background: linear-gradient(90deg, var(--p-orange) 0%, var(--p-blue) 100%);">
                                SEND MESSAGE <i class="bi bi-send-fill ms-2"></i>
                            </button>
                            <div id="resulttouch" class="mt-3"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section py-5">
        <div class="container">
            <div class="rounded-4 overflow-hidden shadow-lg border" style="height: 450px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3867495.57970536!2d74.1275402681546!3d18.8047856661642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcfc41e9c9cd6f9%3A0x1b2f22924be04fb6!2sMaharashtra!5e0!3m2!1sen!2sin!4v1760679431085!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript">
    $(function () {
        $('#submitcontactbtn').click(function () {
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('contacts/contact'); ?>",
                data: $("#getintouchform").serialize(),
                beforeSend: function () {
                    $('#resulttouch').html('<p class="text-center text-muted">Please wait...</p>');
                },
                success: function (data) {
                    $('#resulttouch').empty();
                    if (data == '1') {
                        data = "<div class='alert alert-success'>Your message has been sent successfully. We'll contact you soon.</div>";
                        $("#getintouchform").trigger('reset');
                    }
                    $('#resulttouch').html(data);
                }
            });
        });
    });
</script>

<style>
.service-hero {
    padding: 100px 0;
    background-size: cover !important;
    background-position: center !important;
}
.contact-form-card {
    margin-top: -50px;
    z-index: 5;
    position: relative;
}
@media (max-width: 991px) {
    .contact-form-card {
        margin-top: 20px;
    }
}
</style>