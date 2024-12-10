<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
        <section class="container my-3">
            <form action="{{route('account.nvkLoginSumbit')}}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h1>Login </h1>

                    </div>

                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nvkEmail" class="form-label">Email </label>
                            <input type="email" class="form-control" 
                                   id="nvkEmail" name="nvkEmail" 
                                   placeholder="name@gmail.com">
                                    @error('nvkEmail')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror

                            <span id="email-error"></span>
                        </div>

                        <div class="mb-3">
                            <label for="nvkPassword" class="form-label">Password </label>
                            <input type="password" class="form-control" 
                                   id="nvkPassword" name="nvkPassword" 
                                   placeholder="*****">
                                @error('nvkPassword')
                                   <span class="text-danger">{{$message}}</span>
                                @enderror
                        </div>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary">Login</button>

                        @if(Session::has('nvkError'))
                            <div class="alert alert-danger">
                                {!! \Session::get('nvkError' !!)}
                            </div>
                        @endif
                    </div>
                    
                </div>
</body>
</html>