<!-- New User Creation Screen HTML Document -->

<!DOCTYPE html>

<html>

	<head>
		<title> INFO2180 - Project 3 </title>
		<meta charset = "utf-8"/>
		<link href = "NewUserCreationScreen.css" type = "text/css" rel = "stylesheet">
	</head>

	<body>
	
		<header>
		
			<h1> HireMe </h1>
			
		</header>
	
		<aside>
		
			<img src = "home.png" alt = "Home" height = "25" weight = "25" />
			&ensp; Home
		
			<br>
			<br>
			
			<img src = "addUser.png" alt = "addUser" height = "25" weight = "25" />
			&ensp; Add User
			
			<br>
			<br>
			
			<img src = "newJob.png" alt = "newJob" height = "20" weight = "20" />
			&ensp; New Job
			
			<br>
			<br>
			
			<img src = "logout.jpg" alt = "logout" height = "20" weight = "20" />
			&ensp; Logout
			
		</aside>
		
	
		<main>		
			
			<h2> New User </h2>
			
			<form name = "newUser" onsubmit = "return validation()" action = "NewUser.js" method = "post">
		
			First Name
			
			<br>
			
			<input type = "text" name = "firstName" />
			
			<br>
			<br>
			
			Last Name
			
			<br>
			
			<input type = "text" name = "lastName" />
			
			<br>
			<br>
			
			Password 
			
			<br>
			
			<input type = "text" name = "password" />
			
			<br>
			<br>
			
			Email
			
			<br>
			
			<input type = "text" name = "email" placeholder = "     e.g. mary.jane@example.com" />
			
			<br>
			<br>
			
			Telephone
			
			<br>
			
			<input type = "text" name = "telephone" placeholder = "     e.g. 876-999-8989" />
			
			<br>
			<br>
			<br>
			
			<input type = "submit" name = "submitButton" value = "Submit">		
			
		</main>
	
	</body>

</html>