<!DOCTYPE html>
<?php
session_start();
include_once "db_connection.php";
global $conn;
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
	if(isset($_SESSION['login'])){
			if( $_SESSION["login"]== 'true'){

				echo "<a href='./login.php?action=logout'> Logout </a>";
			}else{
				echo "<a href='./login.php'> Login </a>";
			}
		}else {
			echo "<a href='./login.php'> Login </a>";
		}
		?>
		<?php
		if(isset($_SESSION['name'])){
		if($_SESSION['name']){
			echo '<h1>' . $_SESSION['name'] .  '</h1>' ;
		}
	}
		?>
		</div>

		<div id="main">

			<form name="supercool" method="POST" action="Volunteer.php">
	<table>
		<tr>
	<td><p>First Name</p></td>
<td>	<input type="text" name="player_first_name" placeholder="Type first name here..."/></td>
</tr>
<tr>
	<td>	<p>Last Name</p></td>
<td>	<input type="text" name="player_last_name" placeholder="Type last name here..."/></td>

</tr>

<tr>
	<td>	<p>ZipCode</p></td>
<td>	<input type="number" name="Zipcode" placeholder="Type Zipcode here..."/></td>

</tr>
<tr>
	<td>	<p>Email</p></td>
<td>	<input type="email" name="Email" placeholder="Type Email here..."/></td>

</tr>

<tr>
	<td>	<p>Phone Number</p></td>
<td>	<input type="number" name="Phone_number" placeholder="Type phone number here..."/></td>

</tr>
	<!--<p> What is your gender identity?
		<br/><input type="radio" name="gender" value="M">Male/Man</input>
		<br/><input type="radio" name="gender" value="F">Female/Women</input>
		<br/><input type="radio" name="gender" value="TM">TransMale/TransMan</input>
		<br/><input type="radio" name="gender" value="TF">TransFemale/TransWomen</input>
		<br/><input type="radio" name="gender" value="Q">Genderqueer/Gender nonconforming</input>
		<br/><input type="radio" name="gender" value="O">Something Else</input>
		<br/><input type="radio" name="gender" value="0">Decline to Answer</input>
	</p>-->

	<!-- <p> What are your preferred pronouns?
		<br/><input type="radio" name="gender" value="M">He/Him/His</input>
		<br/><input type="radio" name="gender" value="F">She/Her/Hers</input>
		<br/><input type="radio" name="gender" value="Q">They/Them/Theirs</input>
		<br/><input type="radio" name="gender" value="O">Ze/Zir/Zirs</input>
		<br/><input type="radio" name="gender" value="O">Pronouns not listed</input>
		<br/><input type="radio" name="gender" value="0">No pronoun preference</input>
	</p> -->

</table>


	<br/><input name='clicked' type="submit"/>

	</form>
	<?php

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST['clicked'])){

			$first_name = $_POST['player_first_name'];
			$last_name = $_POST['player_last_name'];
			$email = $_POST['Email'];
			$phone_number = $_POST['Phone_number'];
			$zip_code = $_POST['Zipcode'];
			$object = new Connection();
			$conn = $object->openConnection();
			$stmt = $conn->prepare("INSERT INTO volunteers (id, first_name, last_name, email, phone_number, zip_code)
			VALUES (NULL,:first_name,:last_name,:email,:phone_number,:zip_code)");
			$stmt->bindParam(':first_name', $first_name);
			$stmt->bindParam(':last_name',$last_name);
			$stmt->bindParam(':email', $email);
			$stmt->bindParam(':phone_number', $phone_number);
			$stmt->bindParam(':zip_code', $zip_code);
      $result = $stmt->execute();


			if($result){
				echo '<script>alert("Registration Done!");</script>';
			}
		}
	}

	?>

</html>
