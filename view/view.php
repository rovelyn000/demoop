<!Doctype!>
<html>
<head>
	<title>view</title>
</head>
<body>
	<p><?php echo $_SESSION["uname"];?></p>
	<form method="POST" action="<?php $_PHP_SELF?>">
		<input type="Adduser" name="logout" value="logout">
	</form>
	
	<form method="POST" action="<?php $_PHP_SELF?>">
		<input type="text" name="name" placeholder="name"><br/>
		<input type="text" name="email" placeholder="email"><br/>
		<input type="text" name="username" placeholder="username"><br/><br/>
		<input type="text" name="password" placeholder="passowrd">
        <input type="submit" name="ok" value="ok"><br/>
	</form>
	<br/><br/>
	
	<form method="POST" action="<?php $_PHP_SELF?>">
		<input type="text" name="searchName">
		<input type="submit" name="search" value="Search">
	</form>
	<table>
		<tr>
			<th>name</th>
			<th>email</th>
			<th>username</th>
			<th>passwrod</th>
			<th>Action</th>
		</tr>
		<?php foreach($display as $data){?>
        
		<tr>
			<td><?php echo $userModel["name"];?></td>
			<td><?php echo $userModel["email"];?></td>
			<td><?php echo $userModel["username"];?></td>
			<td><?php echo $userModel["passowrd"];?></td>

			<td>
				<a href="update.php?id=<?php echo $data['id'];?>"><button>Update</button></a>
				<form method="POST" action="<?php $_PHP_SELF?>">
					<input type="text" name="id" value="<?php echo $data["id"];?>" hidden>
					<input type="submit">
				</form>
			</td>
		</tr>
		<?php }?>
	</table>
</body>
</html>