@extends('nvkLayout.Admin.nvkMaster')

@section('title', 'Thêm mới sản phẩm')

@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới sản phẩm</h1>
            </div>
        </div>
        <div class="row">
            <form action="{{ route('nvkAdmin.nvkSanPham.nvkStore') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nvkMaSP" class="form-label">Mã Sản Phẩm</label>
                    <input type="text" class="form-control" id="nvkMaSP" name="nvkMaSP" placeholder="Nhập mã sản phẩm" required>
                    @error('nvkMaSP')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nvkTenSP" class="form-label">Tên Sản Phẩm</label>
                    <input type="text" class="form-control" id="nvkTenSP" name="nvkTenSP" placeholder="Nhập tên sản phẩm" required>
                    @error('nvkTenSP')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nvkHinhAnh" class="form-label">Hình Ảnh</label>
                    <input type="file" class="form-control" id="nvkHinhAnh" name="nvkHinhAnh" required>
                    @error('nvkHinhAnh')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nvkSoLuong" class="form-label">Số Lượng</label>
                    <input type="number" class="form-control" id="nvkSoLuong" name="nvkSoLuong" placeholder="Nhập số lượng sản phẩm" required>
                    @error('nvkSoLuong')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nvkDonGia" class="form-label">Đơn Giá</label>
                    <input type="number" class="form-control" id="nvkDonGia" name="nvkDonGia" placeholder="Nhập đơn giá" required>
                    @error('nvkDonGia')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nvkMaLoai" class="form-label">Mã Loại Sản Phẩm</label>
                    <select class="form-select" id="nvkMaLoai" name="nvkMaLoai" required>
                        @foreach ($nvkLoaiSanPham as $item)
                            <option value="{{ $item->nvkMaLoai }}">{{ $item->nvkTenLoai }}</option>
                        @endforeach
                    </select>
                    @error('nvkMaLoai')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nvkTrangThai" class="form-label">Trạng Thái</label>
                    <select class="form-select" id="nvkTrangThai" name="nvkTrangThai" required>
                        <option value="1">Còn hàng</option>
                        <option value="0">Hết hàng</option>
                    </select>
                    @error('nvkTrangThai')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Thêm mới</button>
                <a href="{{ route('nvkAdmin.nvkSanPham.List') }}" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
    </div>
@endsection
