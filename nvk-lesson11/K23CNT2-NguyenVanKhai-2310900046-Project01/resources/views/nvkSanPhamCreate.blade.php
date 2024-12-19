<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Thêm Sản Phẩm</h1>
        <form action="{{ route('sanpham.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nvkMaSP" class="form-label">Mã sản phẩm</label>
                <input type="text" name="nvkMaSP" id="nvkMaSP" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="nvkTenSP" class="form-label">Tên sản phẩm</label>
                <input type="text" name="nvkTenSP" id="nvkTenSP" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="nvkHinhAnh" class="form-label">Hình ảnh</label>
                <input type="file" name="nvkHinhAnh" id="nvkHinhAnh" class="form-control">
            </div>
            <div class="mb-3">
                <label for="nvkSoLuong" class="form-label">Số lượng</label>
                <input type="number" name="nvkSoLuong" id="nvkSoLuong" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="nvkDonGia" class="form-label">Đơn giá</label>
                <input type="number" step="0.01" name="nvkDonGia" id="nvkDonGia" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="nvkMaLoai" class="form-label">Mã loại</label>
                <input type="number" name="nvkMaLoai" id="nvkMaLoai" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="nvkTrangThai" class="form-label">Trạng thái</label>
                <select name="nvkTrangThai" id="nvkTrangThai" class="form-control">
                    <option value="1">Kích hoạt</option>
                    <option value="0">Vô hiệu</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Lưu</button>
            <a href="{{ route('nvkSanPham.list') }}" class="btn btn-secondary">Quay lại</a>
        </form>
    </div>
</body>
</html>
