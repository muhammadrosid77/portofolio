<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Login Admin</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="login-admin">
        <div class="form-login-admin">
            <h1>Admin Login</h1>

             @if($errors->any())
            <div class="alert" style="color: red">
                {{$errors->first('email')}}
            </div>
            @endif

            <form  method="POST" action="{{ route('admin.login.submit') }}">
                @csrf
                <div class="mb-3">
                    <label for="email">Email Address </label>
                    <input type="email" id="email" name="email" value="{{old('email')}}">
                </div>
                <div class="mb-3">
                    <label for="password">Password </label>
                    <input type="password" id="password" name="password">
                </div>
                <div class="form-check mb-3">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">
                        Remember me
                    </label>
                </div>
                <div class="mb-3">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>