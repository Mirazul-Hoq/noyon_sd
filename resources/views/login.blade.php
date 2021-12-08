<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .login-form{
            min-height: 350px;
            position: relative;
            top: 120px;
        }

        .log-btn{
            display: inline-block;
            position: absolute;
            left: 30%;
        }
        .shadow {
            background-color: #d9dcde;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
</head>
<body>
    <div class="container form-container">  
        <div class="row login-form">
            <div class="offset-md-3 col-md-6 offset-lg-4 col-lg-4 shadow p-3 rounded-lg">
                <h2 class="text-center">Login</h2>
                <form action="{{route('login.store')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" value="{{ old('email') }}" placeholder="Enter email" name="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <p>Don't have an account?! <a href="{{ route('user.register') }}">Register here</a></p>
                    <button type="submit" class="btn btn-success px-5 log-btn">Login</button>
                </form><br>
            </div>
            <div class="col-lg-12">
                @if (Session::has('incorrect'))
                    <p style="color: red; text-align: center;">{{ Session::get('incorrect') }}</p>
                @endif
            </div>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


