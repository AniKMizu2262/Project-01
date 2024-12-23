@extends('nvkLayout.Admin.nvkMaster')

@section('title', 'Danh sách sản phẩm')

@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col-12">
                <h1>Danh sách sản phẩm</h1>
                <a href="{{ route('nvkAdmin.nvkLoaiSanPham.Create') }}" class="btn btn-success">Thêm mới</a>
            </div>
        </div>
        <div class="row mt-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã SP</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Mã loại</th>
                        <th>Trạng thái</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($nvkLoaiSanPham as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nvkMaSP }}</td>
                            <td>{{ $item->nvkTenSP }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $item->nvkHinhAnh) }}" alt="Hình ảnh" width="150" height="150">
                            </td>
                            <td>{{ $item->nvkSoLuong }}</td>
                            <td>{{ number_format($item->nvkDonGia, 2) }}</td>
                            <td>{{ $item->nvkMaLoai }}</td>
                            <td>{{ $item->nvkTrangThai == 1 ? 'Hoạt động' : 'Không hoạt động' }}</td>
                            <td>
                                <a href="" class="btn btn-primary">Xem</a>
                                <a href="" class="btn btn-warning">Sửa</a>
                                <form action="" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                                </form>
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
    </div>
@endsection
