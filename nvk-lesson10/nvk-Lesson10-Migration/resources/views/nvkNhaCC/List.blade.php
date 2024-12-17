<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách nhà cung cấp </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="container my-3">
        <h1>Danh sách nhà cung cấp</h1>
    </header>
    <section class="conatiner my-1 border p-2">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã nhà cung cấp</th>
                        <th>Tên nhà cung cấp</th>
                        <th>Địa chỉ</th>
                        <th>Email</th>
                        <th>Điện thoại</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $num=0;
                    @endphp
                    @forelse ($nvkNhaCC as $item)
                    @php
                        $num++;
                    @endphp
                        <tr>
                            <td>{{$num}}</td>
                            <td>{{$item -> nvkMaNCC}}</td>
                            <td>{{$item -> nvkTenNCC}}</td>
                            <td>{{$item -> nvkDiaChi}}</td>
                            <td>{{$item -> nvkDienThoai}}</td>
                            <td>{{$item -> nvkEmail}}</td>
                            <td>
                                View / Edit / Delete
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan = "7"> No Data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <button class="btn btn-primary">Add </button>
    </section>
</body>
</html>