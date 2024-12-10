<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin chi tiết khoa cần sửa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('nvkKhoa.editSumbit')}}" method="POST">
            @csrf
        <div class="card-header">
            <h3>Thông tin chi tiết khoa cần sửa </h3>
        </div>

        <div class="card-body">
            <div class="mb-3 row">
                <label for="nvkMaKH" class="col-sm-2 col-form-label">Mã Khoa</label>
                <div class="col-sm-10">
                  <input type="text"  class="form-control" id="nvkMaKH" name="nvkMaKH" value=" {{$nvkKhoa->nvkMaKH}} ">
                </div>
              </div>

              <div class="mb-3 row">
                <label for="nvkTenKH" class="col-sm-2 col-form-label">Tên Khoa</label>
                <div class="col-sm-10">
                  <input type="text"  class="form-control" id="nvkTenKH" name="nvkTenKH" value="{{$nvkKhoa->nvkTenKH}}">
                </div>
              </div>
        </div>

        <div class="card-footer">
            <button class="btn btn-sumbit mx-2">Sumbit</button>
            <a href="/nvkKhoa" class="btn btn-primary">Back</a>
        </div>
        </form>
    </section>
</body>
</html>