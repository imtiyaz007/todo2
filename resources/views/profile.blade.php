<!DOCTYPE html>
<html>
<head>
	<title>{{ $user->name }}</title>
</head>
<style type="text/css">
	
	.container {
		border: 1px solid grey;
	    padding: 30px;
	    background: #f87787;
	    color: #fff;
	    font-family: monospace;
	}


	.members,li {
		padding: 5px;
	    border: 1px dotted green;
	    font-family: monospace;
	}
</style>
<body>

	<div class="container">
		<h1>Name: {{ $user->name }}</h1>
		<h2>Email: {{ $user->email }}</h2>
		<h4>Joined at: {{ $user->created_at }}</h4>
	</div>

	<div class="members">
		<ul>
			@foreach($members as $member)
			<li>{{ $member->name}} | {{ $member->email }}</li>
			@endforeach
		</ul>

		<ul>
			@foreach($profiles as $member)
			<li>{{ $member->user_id}} | {{ $member->profie_pic }}</li>
			@endforeach
		</ul>
	</div>
</body>
</html>