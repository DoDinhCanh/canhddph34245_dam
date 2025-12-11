<form method="POST" action="<?= BASE_URL_ADMIN . '&action=update-category' ?>" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?= $data['category']['id'] ?>">

  <div class="mb-3">
    <label>Tên danh mục</label>
    <input type="text" name="name" class="form-control" value="<?= $data['category']['name'] ?>">
  </div>
  <div class="mb-3">
    <label>Chọn ảnh mới</label>
    <input type="file" name="image" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>
