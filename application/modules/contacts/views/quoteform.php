<div class="contact-form glass-quote-form position-relative overflow-hidden">

    <!-- GLOW -->
    <div class="form-glow form-glow-1"></div>
    <div class="form-glow form-glow-2"></div>

    <div class="contact-form-header text-center position-relative">
        <span class="mini-badge">
            <i class="bi bi-lightning-charge-fill"></i>
            Fast Moving Service
        </span>

        <h3 class="quote-title">
            Get Your Free Moving Quote
        </h3>

        <p class="quote-subtitle">
            Safe • Fast • Affordable Relocation Across India
        </p>
    </div>

    <form method="post" id="quoteform" onsubmit="return false">

        <div class="row g-3">

            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-icon modern-input">
                        <i class="bi bi-person-fill"></i>
                        <input type="text" class="form-control" name="name" placeholder="Your Full Name">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-icon modern-input">
                        <i class="bi bi-telephone-fill"></i>
                        <input type="tel" class="form-control" name="phone" placeholder="Mobile Number">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <div class="form-icon modern-input">
                        <i class="bi bi-envelope-fill"></i>
                        <input type="text" class="form-control" name="email" placeholder="Your Email Address">
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <div class="form-icon modern-input">
                        <i class="bi bi-geo-alt-fill"></i>
                        <input type="text" class="form-control" name="mfrom" placeholder="Moving From">
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <div class="form-icon modern-input">
                        <i class="bi bi-pin-map-fill"></i>
                        <input type="text" class="form-control" name="mto" placeholder="Moving To">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <div class="form-icon modern-input textarea-box">
                        <i class="bi bi-chat-left-text-fill"></i>
                        <textarea name="message" rows="4" class="form-control"
                            placeholder="Tell us about your shifting requirement..."></textarea>
                    </div>
                </div>
            </div>

        </div>

        <div id="resultquotefrom" class="mt-3"></div>

        <div class="d-flex gap-2 mt-4 flex-wrap">

            <button id="submitbquoteform" type="submit"
                class="theme-btn submit-btn flex-grow-1">
                <span>Get Free Quote</span>
                <i class="bi bi-arrow-right-circle"></i>
            </button>

        </div>

    </form>
</div>


<script type="text/javascript">
    $(function() {
        $('#submitbquoteform').click(function() {
            const $btn = $(this);
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('contacts/booking') ?>",
                data: $("#quoteform").serialize(),
                beforeSend: function() {
                    $('#resultquotefrom').html('<p class="text-orange mb-0">Processing request...</p>');
                    $btn.prop('disabled', true).css('opacity', '0.7');
                },
                success: function(data) {
                    $('#resultquotefrom').empty();
                    $btn.prop('disabled', false).css('opacity', '1');
                    if (data == '1') {
                        data = "<div class='alert alert-success py-2 border-0 small' style='background: rgba(40, 167, 69, 0.1); color: #155724;'>Success! Our team will contact you.</div>";
                        $("#quoteform").trigger('reset');
                    }
                    $('#resultquotefrom').html(data);
                }
            });
        });
    });
</script>
