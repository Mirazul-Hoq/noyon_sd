<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <style>
    .group-form {
      width: 35%;
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
    <form action="{{ route('idea.update', $idea->id) }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="sel1">Select Status:</label>
          <select class="form-control" id="sel1" name="status">
            <option value="Pending">Pending</option>
            <option value="Accepted">Accepted</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>
