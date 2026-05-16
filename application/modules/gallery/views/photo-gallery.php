<div class="gallery-page-wrapper">
    <section class="custom-service-banner" style="background-image: url('<?= base_url("assets/images/service_banner_bg.png") ?>');">
        <div class="banner-content">
            <h1 class="banner-title">Gallery</h1>
            <div class="banner-breadcrumb">
                <a href="<?= site_url() ?>"><i class="fas fa-home"></i> Home</a> 
                <span class="separator">/</span> 
                <span class="current">Gallery</span>
            </div>
        </div>
    </section>

    <!-- Gallery Grid -->
    <section class="gallery-grid py-5">
        <div class="container">
            <div class="row g-4">
                <?php
                $gallery_images = [
                    'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=600',
                    'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&q=80&w=600',
                    'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&q=80&w=600',
                    'https://images.unsplash.com/photo-1558981403-c5f91cbba527?auto=format&fit=crop&q=80&w=600',
                    'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=600',
                    'https://images.unsplash.com/photo-1587293852726-70cdb56c2866?auto=format&fit=crop&q=80&w=600',
                    'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&q=80&w=600',
                    'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=600',
                ];

                foreach($gallery_images as $img):
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item rounded-4 overflow-hidden shadow-sm">
                        <img src="<?= $img ?>" alt="Work Process" class="img-fluid gallery-img" loading="lazy">
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>

<style>
.service-hero {
    padding: 100px 0;
    background-size: cover !important;
    background-position: center !important;
}
.gallery-item {
    cursor: pointer;
    transition: all 0.4s ease;
}
.gallery-item:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0,0,0,0.2) !important;
}
.gallery-img {
    width: 100%;
    height: 250px;
    object-fit: cover;
}
</style>
