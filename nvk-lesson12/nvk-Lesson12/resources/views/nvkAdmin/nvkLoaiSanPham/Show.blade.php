@extends('nvkLayout.Admin.nvkMaster')

@section('title', 'Chi tiết loại sản phẩm')

@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col-12">
                <h1>Chi tiết loại sản phẩm</h1>
            </div>
        </div>
        <div class="row">
            <table class="table">
                <tr>
                    <th>Mã Loại SP</th>
                    <td>{{ $item->nvkMaLoai }}</td>
                </tr>
                <tr>
                    <th>Tên Loại SP</th>
                    <td>{{ $item->nvkTenLoai }}</td>
                </tr>
                <tr>
                    <th>Trạng Thái</th>
                    <td>{{ $item->nvkTrangThai == 1 ? 'Hoạt động' : 'Không hoạt động' }}</td>
                </tr>
            </table>
            <a href="{{ route('nvkAdmin.nvkLoaiSanPham.List') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
@endsection
