@extends('nvkLayout.Admin.nvkMaster')
@section('title','Danh sách loại sản phẩm')

@section('content-body')
    <div class="container border">
        <div class="row">
           <div class="col-12">
            <h1>Danh sách loại sản phẩm</h1> 
            <a href="{{route('nvkAdmin.nvkLoaiSanPham.Create')}}" class="btn btn-success">Thêm mới</a>
           </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã Loại SP</th>
                        <th>Tên loại SP</th>
                        <th>Trạng thái</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($nvkLoaiSanPham as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->nvkMaLoai}}</td>
                            <td>{{$item->nvkTenLoai}}</td>
                            <td>{{ $item->nvkTrangThai == 1 ? 'Hoạt động' : 'Không hoạt động' }}</td>
                            <td>
                                <a href="{{ route('nvkAdmin.nvkLoaiSanPham.Show', ['id' => $item->nvkMaLoai]) }}" class="btn btn-primary">Xem</a>
                                <a href="{{ route('nvkAdmin.nvkLoaiSanPham.Edit', ['id' => $item->nvkMaLoai]) }}" class="btn btn-warning">Sửa</a>
                                <form action="{{ route('nvkAdmin.nvkLoaiSanPham.Destroy', $item->nvkMaLoai) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                                </form>
                            </td>
                            
                        </tr>
                    @empty
                        <tr>
                            <th colspan="5">Không có dữ liệu</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
