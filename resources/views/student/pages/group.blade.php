<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
</head>
<body>
    <ul>
        <li><a class="act" href="{{ route('student.group') }}">Group</a></li>
        <li><a href="{{route('group.member')}}">Add Member</a></li>
        <li><a href="{{route('group.list')}}">Group List</a></li>
        <li><a href="{{route('idea')}}">Project Idea</a></li>
        <li><a href="{{route('idea.list')}}">Idea List</a></li>
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
    <div class="fullwidth">
    @if (!Session::has('member_msg'))
        <div class="container">
            <div class="row login-form">
                <div class="shadow offset-md-3 col-md-6 offset-lg-3 col-lg-6 p-3 rounded-lg">
                    <h2 class="text-center">Add Group</h2>
                    <form action="{{ route('group.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Group Name</label>
                            <input type="text" class="form-control" id="name" value="{{ old('name') }}" placeholder="Enter name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="no">Group Member No</label>
                            <input type="number" id="no" class="form-control" placeholder="Enter Member No" name="noofmember">
                        </div>
                        <button type="submit" class="btn btn-success log-btn">Register Group</button>
                    </form>
                </div>
            </div>
        </div>
    @endif
    </div>
    <footer class="footer-div">
        31st Batch &copy; 2020
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
