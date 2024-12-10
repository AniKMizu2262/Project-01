<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách khoa</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container border my-3">
        <h1>Danh sách khoa</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã khoa</th>
                    <th>Tên khoa</th>
                    <th>Tùy chỉnh</th>
            </thead>
            <tbody>
                @php
                    $stt=0;
                @endphp
                @foreach ($nvkKhoa as $item)
                @php
                    $stt++;
                @endphp
                    <tr>
                        <td>{{$stt}}</td>
                        <td>{{$item->nvkMaKH}}</td>
                        <td>{{$item->nvkTenKH}}</td>
                        <td class="text-center">
                            <a href="/nvkKhoa/detail/{{$item->nvkMaKH}}" class="btn btn-success">Chi tiết</a>
                            <a href="/nvkKhoa/edit/{{$item->nvkMaKH}}" class="btn btn-success">Sửa</a>
                            <a href="/nvkKhoa/delete/{{$item->nvkMaKH}}" class="btn btn-success">Xóa</a> 
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>