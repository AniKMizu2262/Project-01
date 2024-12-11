<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin chi tiết khoa cần sửa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('nvkKhoa.insertSumbit')}}" method="POST">
            @csrf
        <div class="card-header">
            <h3>Thêm mới thông tin </h3>
        </div>

        <div class="card-body">
            <div class="mb-3 row">
                <label for="nvkMaKH" class="col-sm-2 col-form-label">Mã Khoa</label>
                <div class="col-sm-10">
                  <input type="text"  class="form-control" id="nvkMaKH" name="nvkMaKH" value="{{old('nvkMaKH')}}">
                  @error('nvkMaKH')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                </div>
              </div>

              <div class="mb-3 row">
                <label for="nvkTenKH" class="col-sm-2 col-form-label">Tên Khoa</label>
                <div class="col-sm-10">
                  <input type="text"  class="form-control" id="nvkTenKH" name="nvkTenKH" value="{{old('nvkTenKH')}}">
                  @error('nvkTenKH')
                  <div class="text-danger">{{$message}}</div>
                  @enderror
                </div>
              </div>
        </div>

        <div class="card-footer">
            <button class="btn btn-sumbit mx-2">
                Sumbit
                <i class="fa-solid fa-check"></i>
            </button>
            <a href="/nvkKhoa" class="btn btn-primary">
                Back
                <i class="fa-solid fa-backward"></i>
            </a>
        </div>
        </form>
    </section>
</body>
</html>