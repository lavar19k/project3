<!-- New Job Screen HTML Document -->

<!DOCTYPE html>

<html>

	<head>
		<title> INFO2180 - Project 3 </title>
		<meta charset = "utf-8"/>
		<link href = "styles/NewJobScreen.css" type = "text/css" rel = "stylesheet">
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
			
			<h2> New Job </h2>
			
			<form name = "NewJob" onsubmit = "#" action = "#" method = "post">
		
			Job Title
			
			<br>
			
			<input type = "text" name = "jobTitle" placeholder = "     e.g. Senior Designer or Product Manager" />
			
			<br>
			<br>
			
			Job Description
			
			<br>
			
			<input type = "text" name = "jobDescription" />
			
			<br>
			<br>
			
			Category 
			
			<br>
			
			<select name = "categories">
			
				<option disabled selected value> Select a category </option>
				<option value = "1"> Business & Management </option>
				<option value = "2"> Customer Support </option>
				<option value = "3"> Design </option>
				<option value = "4"> DevOps & Sysadmin </option>
				<option value = "5"> Programming </option>
				<option value = "6"> Sales & Marketing </option>
				
			</select>
			
			<br>
			<br>
			
			Company
			
			<br>
			
			<input type = "text" name = "company" />
			
			<br>
			<br>
			
			Job Location
			
			<br>
			
			<input type = "text" name = "jobLocation" placeholder = "     e.g. Kingston, Jamaica" />
			
			<br>
			<br>
			<br>
			
			<input type = "submit" name = "submitButton" value = "Submit">		
			
		</main>
	
	</body>

</html>