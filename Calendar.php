<!DOCTYPE html>
<?php
session_start();
?>
<html>

<head>

	<title>Political Page - Calendar</title>
	<link rel="stylesheet" type="text/css" href="./HomeCss.css" />



</head>

<body>

	<div id="wrapper">

		<h1 id="title">Calendar</h1>

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

			<div class="section" id="corporation">

				<h2>Calendar</h2>

				<div class="subsection" id="intro">


					<iframe src="https://calendar.google.com/calendar/embed?src=ci4pa4rksr73kboaljkt7n14t4%40group.calendar.google.com&ctz=America%2FChicago" style="border: 0" width=95% height=500px frameborder="0" scrolling="no"></iframe>

					<p>Check below for more information about meetings and events.</p>

				</div>

				<div class="subsection" id="fields">




				</div>

			</div>

			<div class="section" id="facility">

				<h2>Weekly Political Planning Meetings</h2>

				<div class="subsection" id="layout">



					<p>These meetings are to help plan political activism and charity works. These events are mostly community based.</p>

				</div>

				<div class="subsection" id="energy">




				</div>

			</div>

			<div class="section" id="personnel">

				<h2>The Annual Fundraiser</h2>

				<div class="subsection" id="roles">



					<p>This annual event helps us raise money to support projects and events that happen yeary. If you would like to be contacted to help out, please use out voulenteer form to help us reach you better.</p>

				</div>

				<div class="subsection" id="family">




				</div>

			</div>

		</div>

	</div>


</body>

</html>
