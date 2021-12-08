<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>Edit Group</title>
	<style>
	    * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .login-form{
            min-height: 300px;
            position: relative;
            top: 120px;
        }

        .log-btn{
            display: block;
            width: 50%;
            margin: auto;
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
            <div class="offset-md-3 col-md-6 offset-lg-4 col-lg-4 shadow p-3 rounded-lg">
                <h2>Edit Group</h2>
                <form action="{{ route('group.editstore', $data->id) }}" method="post">
                    {{ csrf_field() }}
                    <!-- <div class="form-group">
                        <label for="courses">Select Courses (select one):</label>
                        <select class="form-control" id="courses" name="course_id">
                            <option>Select a course</option>    
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}" selected="@if($course->id == $data->course_id) selected @endif">{{ $course->name }}</option>
                        @endforeach
                        </select>
                    </div> -->
                    <div class="form-group">
                        <label for="name">Group Name:</label>
                        <input type="text" class="form-control" id="name" value="{{ $data->name }}" name="name">
                    </div>
                    <div class="form-group">
                        <label for="no">Group Member No:</label>
                        <input type="number" id="no" class="form-control" name="noofmember" value="{{ $data->noofmember }}">
                    </div>
                    <button type="submit" class="btn btn-success log-btn">Update Group</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>