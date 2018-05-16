<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
	<title>Political Page - Act Now</title>
	<link rel="stylesheet" type="text/css" href="./HomeCss.css" />
</head>
<body>
	<div id="wrapper">
		<h1 id="title">Act Now</h1>
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

				<h2>Welcome To My Political Page</h2>

				<div class="subsection" id="intro">


				<script
				id = "countable-message-lawmaker"
				src = "https://assets.countable.us/widgets/message-your-lawmaker/countable-message-lawmaker.js"
				type = "text/javascript" async>
				</script>


					<p>Use this feature to contact your representatives by video or mail. Check below for more information about hot issues going on in the government today.</p>

				</div>

				<div class="subsection" id="fields">



					<p></p>

				</div>

			</div>

			<div class="section" id="facility">

				<h2>Reentry and Reunification Act of 2018</h2>

				<div class="subsection" id="layout">



					<p>This bill — the Reentry and Reunification Act of 2018 — would provide lawful permanent resident status to spouses and parents of U.S. citizens who are inadmissible to or deportable from the U.S. Eligible immigrants couldn’t have a significant criminal history beyond immigration violations or minor traffic offenses, must have been of good moral character and been physically present in the country continuously for the four years prior to the bill’s enactment.

Prospective immigrants would have to apply within the three years following this bill’s enactment. The continuous presence provision would be violated if the applicant left the U.S. for any period exceeding 90 days or for any periods exceeding 180 days in the aggregate, although extensions would be granted for extenuating circumstances such as serious illness or travel authorized by the Dept. of Homeland Security. Immigrants admitted under this legislation wouldn’t be subject to numerical limitations set by immigration laws.</p>

				</div>

				<div class="subsection" id="energy">





				</div>

			</div>

			<div class="section" id="personnel">

				<h2>Protecting American Solar Jobs Act</h2>

				<div class="subsection" id="roles">



					<p>This bill — the Protecting American Solar Jobs Act — would repeal tariff increases on imported photovoltaic cells (aka solar panels) imposed by the Trump administration on February 7, 2018. Tariffs would be lifted immediately and affected companies would be allowed to seek retroactive reimbursement from the government for increased duties they paid while the solar panel tariffs were in effect.</p>

				</div>

				<div class="subsection" id="family">



					<p></p>

				</div>

			</div>

		</div>

	</div>


</body>

</html>
