<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-image: url('https://img.freepik.com/free-vector/abstract-arrow-background-blue-gradient-business-reverse-symbol-vector_53876-140568.jpg?t=st=1733626178~exp=1733629778~hmac=6db37510c64e69c0b41ca524500563c0bd146b8bdee674c7ce8137087d8b86a9&w=740');
            background-size: cover; /* Ảnh bao phủ toàn màn hình */
            background-position: center; /* Căn giữa ảnh */
            background-repeat: no-repeat; /* Không lặp lại ảnh */
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh;
            margin: 0;
            }
        .form-container {
            background-color: beige;
            padding: 25px;
            border-radius: 10px;
            width: 100%;
            max-width: 350px;
        }
        .form-container h2{
            text-align: left;
            margin-bottom: 15px;
            color: aqua;
        }
        .alert {
            font-size: 10px;
            margin-top: 5px;
            padding: 5px;
        }
        </style>
    <title>Đăng nhập </title>
</head>
<body>
    <form method="POST" action="{{route('login')}}">
        @csrf 
        <div class="form-group">
            <label for="email">Email : </label>
            <input type="email" name="email" id="email" class="form-control">
            @error('email')
            <span class="alert alert-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Password : </label>
            <input type="password" class="form-control" name="password" id="password" value="">
            @error('password')
            <span class="alert alert-danger">{{$message}}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-dark">Login</button>
    </form>
</body>
</html>