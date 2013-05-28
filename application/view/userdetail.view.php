<html>
	<head>
		<title><?=$title?></title>
		<style type="text/css">
			span { font-weight: bold;}
		</style>
	</head>
	<body>
		<span>Name:</span> <?=$user->name?><br/>
		<span>Username:</span> <?=$user->username?><br/>
		<span>Email:</span> <?=$user->email?><br/>
		<span>Birthday:</span> <?=$user->birthday?><br/>
		<a href="/home/users">&lt;&lt;Back</a>
	</body>
</html>