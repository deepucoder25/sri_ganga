<!-- Premium Quote Modal -->
<div class="modal fade" id="qteModal" tabindex="-1" aria-labelledby="qteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered qte-modal-dialog">
    <div class="modal-content border-0 shadow-lg qte-modal-content">

      <!-- Header -->
      <div class="modal-header border-0 pb-0 pt-4 px-4 px-md-5">
        <h4 class="modal-title fw-bold text-dark w-100 text-center" style="font-family: 'Outfit', sans-serif;">
          <i class="bi bi-send-fill me-2" style="color: var(--p-orange);"></i> Get a Free <span style="color: var(--p-blue);">Quote</span>
        </h4>
        <button type="button" class="btn-close shadow-none position-absolute top-0 end-0 mt-3 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Form -->
      <form method="post" id="quotemodal" onsubmit="return false;">
        <div class="modal-body px-4 pt-4 pb-2">
          <p class="text-center text-muted mb-3 small">Fill out the form below and our experts will get back to you.</p>
          
          <div class="row g-3 mb-2">
            <!-- Your Name -->
            <div class="col-md-6">
              <div class="input-group qte-input-group">
                <span class="input-group-text px-3"><i class="bi bi-person"></i></span>
                <input type="text" class="form-control shadow-none" name="name" id="name" placeholder="Your Name">
              </div>
            </div>
            
            <!-- Mobile Number -->
            <div class="col-md-6">
              <div class="input-group qte-input-group">
                <span class="input-group-text px-3"><i class="bi bi-telephone"></i></span>
                <input type="tel" class="form-control shadow-none" name="phone" id="phone" placeholder="Mobile Number">
              </div>
            </div>
            
            <!-- Email -->
            <div class="col-md-6">
              <div class="input-group qte-input-group">
                <span class="input-group-text px-3"><i class="bi bi-envelope"></i></span>
                <input type="email" class="form-control shadow-none" name="email" id="email" placeholder="Your Email">
              </div>
            </div>
            
            <!-- Moving From -->
            <div class="col-md-6">
              <div class="input-group qte-input-group">
                <span class="input-group-text px-3"><i class="bi bi-geo-alt"></i></span>
                <input type="text" class="form-control shadow-none" name="mfrom" id="mfrom" placeholder="Moving From">
              </div>
            </div>

            <!-- Moving To -->
            <div class="col-md-12">
              <div class="input-group qte-input-group">
                <span class="input-group-text px-3"><i class="bi bi-geo"></i></span>
                <input type="text" class="form-control shadow-none" name="mto" id="mto" placeholder="Moving To (City or Pincode)">
              </div>
            </div>

            <!-- Message -->
            <div class="col-md-12">
              <div class="input-group qte-input-group align-items-start">
                <span class="input-group-text px-3 pt-3"><i class="bi bi-chat-text"></i></span>
                <textarea name="message" id="message" class="form-control shadow-none" placeholder="Any specific requirements? (Optional)"></textarea>
              </div>
            </div>
          </div>
          
          <div id="resultquotemodal" class="mt-2 text-center"></div>
        </div>
        
        <!-- Footer -->
        <div class="modal-footer border-0 px-4 pb-4 pt-0 d-flex justify-content-between align-items-center">
          <button type="reset" class="btn btn-link text-muted text-decoration-none shadow-none px-0 qte-reset-btn" onclick="$('#resultquotemodal').html('');">
            <i class="bi bi-arrow-counterclockwise"></i> Reset
          </button>
          
          <button type="submit" id="submitbquotemodal" class="btn text-white px-4 py-2 shadow-sm d-flex align-items-center gap-2 qte-submit-btn">
            GET QUOTE <i class="bi bi-arrow-right"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Script (unchanged logic) -->
<script type="text/javascript">
  $(function () {
    $('#submitbquotemodal').click(function () {
      $.ajax({
        type: "POST",
        url: "<?php echo site_url('contacts/booking') ?>",
        data: $("#quotemodal").serialize(),
        beforeSend: function () {
          $('#resultquotemodal').html('<p class="text-center text-muted">Please wait...</p>');
        },
        success: function (data) {
          $('#resultquotemodal').empty();
          if (data == '1') {
            data = "<div class='alert alert-success'>Thank you! Your quote request has been successfully submitted. We'll respond soon.</div>";
            $("#quotemodal").trigger('reset');
            gtag('event', 'conversion', {'send_to': 'AW-16778879117/JlJPCPjgvOwZEI3B5cA-'});
          }
          $('#resultquotemodal').html(data);
        }
      });
    });
  });
</script>
