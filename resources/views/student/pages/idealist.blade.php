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
        <li><a href="{{route('idea')}}">Project Idea</a></li>
        <li><a href="{{route('idea.list')}}">Idea List</a></li>
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
    <div class="container fullwidth">
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Course Name</th>
                    <th>Course Code</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            @foreach($ideas as $i)
                <tr>
                    <td>{{ $i->title }}</td>
                    <td>{{ $i->Description }}</td>
                    <td>{{ $i->cname }}</td>
                    <td>{{ $i->code }}</td>
                    <td>{{ $i->status }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <footer class="footer-div">
        31st Batch &copy; 2020
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
