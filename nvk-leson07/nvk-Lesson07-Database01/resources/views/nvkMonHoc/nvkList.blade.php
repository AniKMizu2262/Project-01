<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách môn học </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h1>Danh sách môn học</h1>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã môn học</th>
                        <th>Tên môn học</th>
                        <th>Số tiết</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nvkMonHoc as $item)
                    <tr>
                        <td>1</td>
                        <td>{{$item -> nvkMaMH}}</td>
                        <td>{{$item -> nvkTenMH}}</td>
                        <td>{{$item -> nvkSoTiet}}</td>
                        <td>
                            view / edit / delete
                        </td>
                    </tr>   
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="5">
                            <h3>Tổng số môn học: {{$nvkMonHoc -> count()}}</h3>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</body>
</html>