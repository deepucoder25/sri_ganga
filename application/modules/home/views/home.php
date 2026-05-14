<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>">

<div id="home-page">
    <?php $this->load->view('about_widget'); ?>
    <?php $this->load->view('service_widget'); ?>
    <?php $this->load->view('stats_widget'); ?>
    <?php $this->load->view('process_widget'); ?>
    <?php $this->load->view('testimonial_widget'); ?>
    <?php $this->load->view('faq_widget'); ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
