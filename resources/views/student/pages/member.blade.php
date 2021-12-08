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
    <div class="fullwidth">
    	<div class="container my-5">
	        <div class="row">
	        @if (Session::has('member_msg'))
	            <div class="shadow offset-md-1 col-md-6 offset-lg-1 col-lg-4 p-3 rounded-lg">
	                <form action="{{ route('group.member') }}" method="post">
	                    {{ csrf_field() }}
	                @for ($i = 1; $i <= $group->noofmember; $i++)
	                    @if ($i == 1)
	                        <div class="form-group">
	                            <label for="name">Group member {{ $i }}</label>
	                            <input type="text" class="form-control" id="name" value="{{ session('username') }}" name="name[]">
	                        </div>
	                        <div class="form-group">
	                            <label for="email">Email</label>
	                            <input type="email" class="form-control" id="email" value="{{ session('useremail') }}" name="email[]">
	                        </div>
	                        <div class="form-group">
	                            <label for="cardid">Student Id</label>
	                            <input type="number" class="form-control" id="cardid" value="{{ Session::get('usercardid') }}" name="cardid[]" min="1">
	                        </div>
	                    @else
	                        <div class="form-group">
	                            <label for="name">Group member {{ $i }}</label>
	                            <input type="text" class="form-control" id="name" value="{{ session('name') }}" placeholder="Enter name" name="name[]">
	                        </div>
	                        <div class="form-group">
	                            <label for="email">Email</label>
	                            <input type="email" class="form-control" id="email" value="{{ old('email') }}" placeholder="Enter email" name="email[]">
	                        </div>
	                        <div class="form-group">
	                            <label for="cardid">Student Id</label>
	                            <input type="number" class="form-control" id="cardid" value="{{ old('cardid') }}" name="cardid[]" min="1">
	                        </div>
	                    @endif
	                @endfor
	                    <button type="submit" class="btn btn-success log-btn">Add Member</button>
	                </form>
	            </div>
	            <div class="shadow offset-lg-1 col-lg-5">
	                <table class="table text-center">
	                    <thead>
	                        <tr>
	                            <th>Group Name</th>
	                            <th>Member No</th>
	                            <th>Edit</th>
	                            <th>Delete</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <tr>
	                            <td>{{ $group->name }}</td>
	                            <td>{{ $group->noofmember }}</td>
	                            <td><a class="btn btn-success" href="{{ route('group.edit', $group->id) }}">Edit</a></td>
	                            <td><a href="{{ route('group.delete', $group->id) }}" class="btn btn-success">Delete</a></td>
	                        </tr>
	                    </tbody>
	                </table>
	            </div>
	        @else
	        	<div class="display-msg">
	        		<h1 class="display-4">Create group first.</h1>
	        	</div>
	        @endif
	        </div>
	    </div>
    </div>
    <footer class="footer-div">
        31st Batch &copy; 2020
    </footer>
	
</body>
</html>