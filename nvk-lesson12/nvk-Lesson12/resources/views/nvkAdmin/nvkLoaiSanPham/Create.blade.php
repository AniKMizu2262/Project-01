@extends('nvkLayout.Admin.nvkMaster')
@section('title', 'Thêm mới loại sản phẩm')

@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới loại sản phẩm</h1>
            </div>
        </div>
        <div class="row">
            <form action="{{ route('nvkAdmin.nvkLoaiSanPham.nvkStore') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nvkMaLoai" class="form-label">Mã Loại SP</label>
                    <input type="text" class="form-control" id="nvkMaLoai" name="nvkMaLoai" placeholder="Nhập mã loại sản phẩm" required>
                </div>
                <div class="mb-3">
                    <label for="nvkTenLoai" class="form-label">Tên Loại SP</label>
                    <input type="text" class="form-control" id="nvkTenLoai" name="nvkTenLoai" placeholder="Nhập tên loại sản phẩm" required>
                </div>
                <div class="mb-3">
                    <label for="nvkTrangThai" class="form-label">Trạng Thái</label>
                    <select class="form-select" id="nvkTrangThai" name="nvkTrangThai" required>
                        <option value="1">Hoạt động</option>
                        <option value="0">Không hoạt động</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Thêm mới</button>
                <a href="{{ route('nvkAdmin.nvkLoaiSanPham.List') }}" class="btn btn-secondary">Hủy</a>
            </form>
        </div>
    </div>
@endsection
