@extends('nvkLayout.Admin.nvkMaster')

@section('title', 'Quản trị - Danh sách loại sản phẩm')

@section('content-body')
<div class="container">
    <a href="{{ route('nvkAdmin.nvkLoaiSanPham.Create') }}" class="btn btn-success mb-3">Thêm mới</a>
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>STT</th>
                <th>Mã loại</th>
                <th>Tên loại</th>
                <th>Trạng thái</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nvkLoaiSanPham as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->nvkMaLoai }}</td>
                    <td>{{ $item->nvkTenLoai }}</td>
                    <td>
                        <span class="badge {{ $item->nvkTrangThai == 1 ? 'bg-success' : 'bg-secondary' }}">
                            {{ $item->nvkTrangThai == 1 ? 'Hoạt động' : 'Không hoạt động' }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('nvkAdmin.nvkLoaiSanPham.Show', $item->id) }}" class="btn btn-primary btn-sm">Xem</a>
                        <a href="{{ route('nvkAdmin.nvkLoaiSanPham.Edit', $item->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('nvkAdmin.nvkLoaiSanPham.Destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
