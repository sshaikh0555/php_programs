<!DOCTYPE html>
<html>
	<head>
		<title> STUDENT's LOGIN </title>
	</head>
<body>
	 <h3> ENTER STUDENT'S LOGIN </h3>
	 <form action = "display4.php" method = "POST">
	 <label for="name">USERNAME:</label><br>
	 <input type="text" id="username" name="username" required><br><br>
	 
	 <label for="email">Email:</label>
    <input type="email" name="email" id="email" value=""><br><br>
	
	<label for = "password" >Password : </label>
	<input type="password" name="password" id="password"<br><br><br>
	
	 <label for="languages">SELECT STATE:</label><br>
	 <select id="languages" name="languages[]" multiple required>
	 <option value="kanpur">Kanpur</option>
	 <option value="pune">Pune</option>
	 <option value="kolkata">Kolkata</option>\
	 <option value="Mumbai">Mumbai</option>
	 <option value="Punjab">Punjab</option>
	 </select> <br><br><br>
	 
	 <input type="submit" value="submit"><br><br>
</body>
</html>