<form method="POST" action="<?= BASE_URL_ADMIN . '&action=update-product' ?>" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?= $data['product']['id'] ?>">

  <div class="mb-3">
    <label>Tên sản phẩm</label>
    <input type="text" name="name" class="form-control" value="<?= $data['product']['name'] ?>">
  </div>

  <div class="mb-3">
    <label>Giá</label>
    <input type="number" name="price" class="form-control" value="<?= $data['product']['price'] ?>">
  </div>

  <div class="mb-3">
    <label>Mô tả</label>
    <textarea name="description" class="form-control"><?= $data['product']['description'] ?></textarea>
  </div>

  <div class="mb-3">
    <label>Danh mục</label>
    <select name="category_id" class="form-select">
      <?php foreach ($data['category'] as $cate): ?>
        <option value="<?= $cate['id'] ?>" <?= $cate['id'] == $data['product']['category_id'] ? 'selected' : '' ?>>
          <?= $cate['name'] ?>
        </option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="mb-3">
    <label>Chọn ảnh mới</label>
    <input type="file" name="image" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>
