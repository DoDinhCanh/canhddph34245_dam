
<section class="container my-5">
  <h2 class="text-center mb-4">Danh mục sản phẩm</h2>
  <div class="row g-4 justify-content-center">
    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
      <a href="<?= BASE_URL . '?action=products' ?>" 
         class="text-decoration-none text-dark <?= empty($data['selected']) ? 'fw-bold' : '' ?>">
      </a>
    </div>

    <?php foreach ($data['category'] as $cate): ?>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <a href="<?= BASE_URL . '?action=products&category=' . $cate['id'] ?>" 
           class="text-decoration-none text-dark <?= ($data['selected'] == $cate['id']) ? 'fw-bold' : '' ?>">
          <div class="category-item text-center">
            <img src="<?= BASE_ASSETS_UPLOADS . $cate['image'] ?>" 
                 alt="<?= $cate['name'] ?>" class="img-fluid" />
            <p><?= $cate['name'] ?></p>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="container my-5">
  <h2 class="text-center mb-4">Danh sách sản phẩm</h2>
  <div class="row g-4">
    <?php if (!empty($data['product'])): ?>
      <?php foreach ($data['product'] as $pro): ?>
        <div class="col-6 col-md-3">
          <div class="card product-card h-100 text-center">
            <img src="<?= BASE_ASSETS_UPLOADS . $pro['image'] ?>" 
                 class="card-img-top" alt="<?= $pro['name'] ?>" />
            <div class="card-body">
              <a href="<?= BASE_URL . '?action=detail-product&id=' . $pro['id'] ?>" 
                 class="text-dark text-decoration-none">
                <h5 class="mb-1"><?= $pro['name'] ?></h5>
              </a>
              <span class="price"><?= number_format($pro['price']) ?> ₫</span><br>
              <small class="text-muted"><?= $pro['category_name'] ?></small>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <div class="col-12">
        <div class="alert alert-info">Không có sản phẩm trong danh mục này.</div>
      </div>
    <?php endif; ?>
  </div>
</section>