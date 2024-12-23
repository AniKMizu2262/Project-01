@extends('nvkLayout.Admin.nvkMaster')

@section('title', 'Danh sách sản phẩm')

@section('content-body')
    <section class="container my-1 border p-2">
        <div class="card">
            <div class="card-header">
                <h1>Danh sách sản phẩm</h1>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Mã loại</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $num = 0;
                    @endphp
                    @forelse ($nvkSanPham as $item)
                    @php
                        $num++;
                    @endphp
                        <tr>
                            <td>{{ $num }}</td>
                            <td>{{ $item->nvkMaSP }}</td>
                            <td>{{ $item->nvkTenSP }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $item->nvkHinhAnh) }}" alt="Hình ảnh" width="50" height="50">
                            </td>
                            <td>{{ $item->nvkSoLuong }}</td>
                            <td>{{ number_format($item->nvkDonGia, 2) }}</td>
                            <td>{{ $item->nvkMaLoai }}</td>
                            <td>
                                @if ($item->nvkTrangThai)
                                    <span class="badge bg-success">Còn hàng</span>
                                @else
                                    <span class="badge bg-danger">Hết hàng</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="text-center">Không có dữ liệu</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('nvkAdmin.nvkSanPham.Create') }}" class="btn btn-primary">Thêm mới</a>
        </div>
    </section>
@endsection
