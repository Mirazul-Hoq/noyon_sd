<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .login-form{
            min-height: 450px;
            position: relative;
            top: 80px;
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

    <div class="container">
        <div class="row login-form">
            <div class="offset-md-3 col-md-6 offset-lg-4 col-lg-4 shadow p-3 mb-5 rounded-lg">
                <h2 class="text-center">Register form</h2>
                <form action="{{route('user.store')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" value="{{ old('name') }}" placeholder="Enter name" name="name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
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
                        <label for="student_id">Student Id</label>
                        <input type="number" class="form-control" id="student_id" value="{{ old('student_id') }}" placeholder="Enter student id" name="student_id">
                        @error('student_id')
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
                    <div class="form-group">
                        <label for="pwd">Confirm Password</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-success px-5 log-btn">Register</button>
                </form>
                <br /><br /><p class=""><a href="{{ route('user.login') }}">Already have an account?!</a></p>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
