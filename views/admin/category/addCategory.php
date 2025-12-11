<div class="card shadow-sm mx-auto" style="max-width: 1200px;">
  <div class="card-header bg-primary text-white">
    <h5 class="mb-0">Thêm danh mục</h5>
  </div>
  <div class="card-body">
    <form action="<?= BASE_URL_ADMIN . '&action=store-category' ?>" 
      method="POST" enctype="multipart/form-data" class="row g-4">
      <div class="col-md-6">
        <label for="" class="form-label">Tên danh mục:</label>
        <input name="name" type="text" class="form-control" id="" placeholder="Nhập tên danh mục">
      </div>
      <div class="col-md-6">
        <label for="" class="form-label">Ảnh danh mục:</label>
        <input name="image" class="form-control" type="file" id="">
      </div>
      <div class="col-12 text-end">
        <button type="submit" class="btn btn-primary">Thêm danh mục</button>
      </div>
    </form>
  </div>
</div>
