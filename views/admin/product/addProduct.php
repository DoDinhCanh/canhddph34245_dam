<div class="card shadow-sm mx-auto" style="max-width: 1200px;">
  <div class="card-header bg-primary text-white">
    <h5 class="mb-0">Thêm sản phẩm</h5>
  </div>
  <div class="card-body">
    <form action="<?= BASE_URL_ADMIN . '&action=store-product' ?>" 
      method="POST" enctype="multipart/form-data" class="row g-4">
      <div class="col-md-6">
        <label for="" class="form-label">Tên sản phẩm:</label>
        <input name="name" type="text" class="form-control" id="" placeholder="Nhập tên sản phẩm">
      </div>
      <div class="col-md-6">
        <label for="" class="form-label">Giá:</label>
        <input name="price" type="number" class="form-control" id="" placeholder="Nhập giá">
      </div>
      <div class="col-md-6">
        <label for="" class="form-label">Danh mục:</label>
        <select name="category_id" class="form-select" id="">
          <?php foreach ($categories as $cat): ?>
            <option value="<?= $cat["id"]?>"><?= $cat["name"] ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="col-md-12">
        <label for="" class="form-label">Mô tả:</label>
        <textarea name="description" class="form-control" id="" rows="3" placeholder="Nhập mô tả sản phẩm"></textarea>
      </div>
      <div class="col-md-6">
        <label for="" class="form-label">Ảnh sản phẩm:</label>
        <input name="image" class="form-control" type="file" id="">
      </div>
      <div class="col-12 text-end">
        <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
      </div>
    </form>
  </div>
</div>
