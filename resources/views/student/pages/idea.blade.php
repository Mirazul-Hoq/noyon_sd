<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .group-form {
            width: 60%;
            margin: 50px auto;
        }
    </style>
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
    <div class="container fullwidth">
        <div class="group-form">
            <h2>Project Idea</h2>
            <form action="{{route('idea.store')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="courses">Select Courses (select one):</label>
                    <select class="form-control" id="courses" name="course_id">
                        <option>Select a course</option>    
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Project Title:</label>
                    <input type="text" class="form-control" id="title" value="{{ old('title') }}" placeholder="Enter title" name="title">
                </div>
                <div class="form-group">
                    <label for="desc">Project Description:</label>
                    <textarea id="desc" class="form-control" placeholder="Enter Description" name="description" rows="5" cols="5"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit Your Idea</button>
            </form>
        </div>
    </div>
    <footer class="footer-div">
        31st Batch &copy; 2020
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
