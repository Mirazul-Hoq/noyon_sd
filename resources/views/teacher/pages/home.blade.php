<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>
        .group-form {
          margin: 40px auto;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ route('teacher.home') }}">Idea List</a></li>
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="{{route('logout')}}">Logout</a></li>
            </ul>
        </div>
    </nav>
<div class="container">
    <div class="group-form">
        <div class="container">
            <div class="group-form">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ideas as $i)
                        <tr>
                            <td>{{ $i->title }}</td>
                            <td>{{ $i->Description }}</td>
                            <td>{{ $i->status }}</td>
                            <td><a href="{{ URL::to('teacher/idea/edit/'.$i->id) }}">Edit</a></td>
                            <td>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#{{ $i->id }}">Delete</button>
                                <div id="{{ $i->id }}" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title w3-dark">Delete Confirmation</h4>
                                            </div>
                                            <div class="modal-body w3-dark">
                                                <p>Are you sure you want to delete this idea??</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a class="btn btn-default" href="{{ URL::to('teacher/delete/'.$i->id) }}">Delete</a>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
              </table>
            </div>
        </div>
    </div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>
