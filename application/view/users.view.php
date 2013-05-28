<html>
	<head>
		<title><?=$title?></title>
	</head>
	<body>
		<table>
			<tr>
				<th>Name</th>
				<th>Username</th>
			</tr>				
		<?php			
		foreach ($users as $value) {
		?>
			<tr>
				<td>
					<a href="/home/userdetail?id=<?=$value['id']?>"><?=$value['name']?></a>
				</td>
				<td><?=$value['username']?></td>
			</tr>
		<?php
		}		
		?>
		</table>
	</body>
</html>