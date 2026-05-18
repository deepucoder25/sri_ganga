<div class="contact-page-wrapper">
    <section class="custom-service-banner" style="background-image: url('<?= base_url("assets/images/service_banner_bg.png") ?>');">
        <div class="banner-content">
            <h1 class="banner-title align-self-center">Contact Us</h1>
            <div class="banner-breadcrumb">
                <a href="<?= site_url() ?>"><i class="bi bi-house-door-fill"></i> Home</a> 
                <span class="separator">/</span> 
                <span class="current">Contact Us</span>
            </div>
        </div>
    </section>

    <section class="contact-content py-5">
        <div class="container">
            <div class="elite-contact-wrapper">
                <div class="row g-0">
                    <!-- Left: Contact Info -->
                    <div class="col-lg-5 elite-contact-info">
                        <div class="position-relative z-1">
                            <span class="text-uppercase fw-bold tracking-wide d-block mb-2 small text-white-50">GET IN TOUCH</span>
                            <h3 class="fw-black mb-4 text-white">Reach Out to Our Support Team</h3>
                            <p class="text-white-50 mb-5">Let's plan your perfect move together. Contact us for a free quote and discover why thousands of customers trust us for their relocation needs.</p>
                            
                            <div class="elite-contact-item">
                                <div class="elite-contact-icon">
                                    <i class="bi bi-envelope-at-fill"></i>
                                </div>
                                <div class="elite-contact-text">
                                    <span>Email Address</span>
                                    <a href="<?= $mailhtml ?>"><?= $mail ?></a>
                                </div>
                            </div>
                            
                            <div class="elite-contact-item">
                                <div class="elite-contact-icon">
                                    <i class="bi bi-telephone-outbound-fill"></i>
                                </div>
                                <div class="elite-contact-text">
                                    <span>Phone Number</span>
                                    <a href="<?= $phonehtml ?>"><?= $phone ?></a>
                                </div>
                            </div>

                            <div class="elite-contact-item mb-0">
                                <div class="elite-contact-icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <div class="elite-contact-text">
                                    <span>Our Address</span>
                                    <address class="mb-0"><?= $address1 ?>, <?= $addressRegion ?></address>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Contact Form -->
                    <div class="col-lg-7 elite-contact-form">
                        <h4 class="fw-black mb-4 text-dark">Send a Message</h4>
                        <form method="post" id="getintouchform" onsubmit="return false;">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label class="form-label">Full Name *</label>
                                    <input type="text" name="name" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email Address *</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email Address">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Phone Number *</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="Phone Number">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Your Message *</label>
                                    <textarea name="message" class="form-control" rows="4" placeholder="How can we help?"></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="button" id="submitcontactbtn" class="elite-submit-btn">
                                        SEND MESSAGE <i class="bi bi-send-fill ms-2"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="resulttouch" class="mt-3"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section py-0 mb-5">
        <div class="container">
            <div class="rounded-4 overflow-hidden shadow-lg border-0 position-relative" style="height: 500px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3867495.57970536!2d74.1275402681546!3d18.8047856661642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcfc41e9c9cd6f9%3A0x1b2f22924be04fb6!2sMaharashtra!5e0!3m2!1sen!2sin!4v1760679431085!5m2!1sen!2sin" width="100%" height="100%" style="border:0; position: relative; z-index: 1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                        data = "<div class='alert alert-success rounded-pill'>Your message has been sent successfully. We'll contact you soon.</div>";
                        $("#getintouchform").trigger('reset');
                    }
                    $('#resulttouch').html(data);
                }
            });
        });
    });
</script>