@extends('nvkLayout.Admin.nvkMaster')
@section('title', 'Sửa loại sản phẩm')

@section('content-body')
    <div class="container">
        <h1>Sửa loại sản phẩm</h1>
        <form action="{{ route('nvkAdmin.nvkLoaiSanPham.Update', $item->nvkMaLoai) }}" method="POST">
            @csrf
            @method('POST') <!-- Thêm này để đảm bảo method chính xác -->        
            <div class="form-group">
                <label for="nvkTenLoai">Tên Loại SP</label>
                <input type="text" name="nvkTenLoai" class="form-control" value="{{ $item->nvkTenLoai }}" required>
            </div>
            <div class="form-group">
                <label for="nvkTrangThai">Trạng thái</label>
                <select name="nvkTrangThai" class="form-control">
                    <option value="1" {{ $item->nvkTrangThai == 1 ? 'selected' : '' }}>Hoạt động</option>
                    <option value="0" {{ $item->nvkTrangThai == 0 ? 'selected' : '' }}>Không hoạt động</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
@endsection
