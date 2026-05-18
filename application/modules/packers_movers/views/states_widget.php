<?php
    include 'data/states.php';
?>
<?php
  $state = [
      [
          "image" => "bihar.jpg",
          "category" => "Bihar",
          "title" => "Packers and Movers in Bihar",
          "link" => "bihar"
      ],
  ];
  ?>

  <!-- ===== BRANCH GRID ===== -->
  <section class="branch-section py-5">
    <div class="container">

      <div class="row g-4">

        <?php foreach ($state as $item): ?>
        <div class="col-6 col-lg-3">

          <div class="branch-card">

            <!-- IMAGE -->
            <div class="branch-img">
              <img src="<?= base_url() ?>assets/images/state/<?= $item['image'] ?>" alt="<?= $item['title'] ?>">
              <div class="branch-overlay"></div>
            </div>

            <!-- CONTENT -->
            <div class="branch-content">
              <span class="branch-location"><?= $item['category'] ?></span>
              <h3>
                <a href="<?= $item['link'] ?>">
                  <?= $item['title'] ?>
                </a>
              </h3>

              <a href="<?= $item['link'] ?>" class="branch-btn">
                View Details <i class="bi bi-arrow-right"></i>
              </a>
            </div>

          </div>

        </div>
        <?php endforeach; ?>

      </div>

    </div>
  </section>

</main>

<style>
/* ===== PREMIUM BRANCH CARD ===== */
.branch-card {
  background: #fff;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(0,0,0,0.04);
  transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
  height: 100%;
  border: 1px solid rgba(0,0,0,0.03);
  display: flex;
  flex-direction: column;
}

.branch-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 40px rgba(0, 86, 179, 0.12);
  border-color: rgba(0, 86, 179, 0.15);
}

/* IMAGE */
.branch-img {
  position: relative;
  height: 180px;
  overflow: hidden;
  background: #f1f5f9;
}

.branch-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.branch-card:hover .branch-img img {
  transform: scale(1.08);
}

/* OVERLAY */
.branch-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, rgba(0,0,0,0.45) 0%, transparent 60%);
}

/* CONTENT */
.branch-content {
  padding: 22px 20px;
  display: flex;
  flex-direction: column;
  flex-grow: 1;
}

.branch-location {
  display: inline-block;
  font-size: 11px;
  color: var(--p-orange);
  background: rgba(251, 167, 7, 0.08);
  font-weight: 800;
  text-transform: uppercase;
  padding: 4px 12px;
  border-radius: 50px;
  width: fit-content;
  letter-spacing: 0.8px;
  margin-bottom: 8px;
}

.branch-content h3 {
  font-size: 16px;
  font-weight: 700;
  margin: 5px 0 16px;
  line-height: 1.4;
  font-family: 'Outfit', sans-serif;
}

.branch-content h3 a {
  color: #0f172a;
  text-decoration: none;
  transition: color 0.3s ease;
}

.branch-card:hover .branch-content h3 a {
  color: var(--p-blue);
}

/* BUTTON */
.branch-btn {
  margin-top: auto;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-size: 13px;
  font-weight: 700;
  color: var(--p-blue);
  text-decoration: none;
  transition: all 0.3s ease;
  width: fit-content;
}

.branch-btn i {
  transition: transform 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
  font-size: 12px;
}

.branch-card:hover .branch-btn {
  color: var(--p-orange);
}

.branch-card:hover .branch-btn i {
  transform: translateX(5px);
}
</style>