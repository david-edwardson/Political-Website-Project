<!DOCTYPE html>
<?php 
session_start();
?>
<html>

<head>

	<title>Political Page - Volunteer</title>
	<link rel="stylesheet" type="text/css" href="./HomeCss.css" />

</head>

<body>

	<div id="wrapper">

		<h1 id="title">Volunteer</h1>
		
		<div id="navigation">
		
			<a href="./Home.php">Home</a>
		
			<a href="./ActNow.php">Act Now</a>
			
			<a href="./Calendar.php">Calendar</a>
			
			<a href="./Volunteer.php">Volunteer Page</a>
		<?php

			if( $_SESSION["login"]== 'true'){
				
				echo "<a href='/login.php'> Logout </a>";
			}else{
				echo "<a href='/login.php'> Login </a>";
			}
		?>
		<?php 
		if($_SESSION['name']){
			echo '<h1>' . $_SESSION['name'] .  '</h1>' ;
		}
		?>
		</div>
		
		<div id="main">
		
			<form name="supercool" method="get">
	
	<p>First Name</p>
	<input type="text" name="playername" placeholder="Type first name here..."/>

	<p>Last Name</p>
	<input type="text" name="playername" placeholder="Type last name here..."/>


	<!--<p> What is your gender identity?
		<br/><input type="radio" name="gender" value="M">Male/Man</input>
		<br/><input type="radio" name="gender" value="F">Female/Women</input>
		<br/><input type="radio" name="gender" value="TM">TransMale/TransMan</input>
		<br/><input type="radio" name="gender" value="TF">TransFemale/TransWomen</input>
		<br/><input type="radio" name="gender" value="Q">Genderqueer/Gender nonconforming</input>
		<br/><input type="radio" name="gender" value="O">Something Else</input>
		<br/><input type="radio" name="gender" value="0">Decline to Answer</input>
	</p>-->

	<p> What are your preferred pronouns?
		<br/><input type="radio" name="gender" value="M">He/Him/His</input>
		<br/><input type="radio" name="gender" value="F">She/Her/Hers</input>
		<br/><input type="radio" name="gender" value="Q">They/Them/Theirs</input>
		<br/><input type="radio" name="gender" value="O">Ze/Zir/Zirs</input>
		<br/><input type="radio" name="gender" value="O">Pronouns not listed</input>
		<br/><input type="radio" name="gender" value="0">No pronoun preference</input>
	</p>

	<p>Zip Code</p>
	<input type="text" name="playername" placeholder="12345"/>

	<p>Email</p>
	<input type="text" name="playername" placeholder="email@email.com"/>

	<p>Phone Number</p>
	<input type="text" name="playername" placeholder="123-456-7890"/>
	
	<br/><input type="submit"/>

	</form>
			</div>	
		</div>	
	</div>
</body>

</html>