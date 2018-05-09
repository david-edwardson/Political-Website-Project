<!DOCTYPE html>
<?php 
session_start();
?>
<html>

<head>

	<title>Political Page - Home</title>
	<link rel="stylesheet" type="text/css" href="./HomeCss.css" />
	

</head>

<body>

	<div id="wrapper">

		<img src="./images/logo-primary.svg"/>
		
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
		
			<div class="section" id="corporation">
			
			
				
				
				<iframe width="752" height="425" src="https://www.youtube.com/embed/suNz7Wh1jSA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				<h2>A broader plan of resistance</h2>
				<p>Since 2013, we’ve worked to prevent damage to our climate by transitioning to a clean energy economy based on equality, inclusion, and a shared and sustainable prosperity. Now, the values that drive our work on climate are under increased and unprecedented attack. We’re proud to step up the fight for immigrant rights, affordable health care, and core American values — as NextGen America.</p>
				
				<div class="subsection" id="intro">
					
					

				
				</div>
				
				<div class="subsection" id="fields">
				
					
				
				
				</div>
			
			</div>
			
			<div class="section" id="facility">
			
				<h2>The Research Facility</h2>
				
				<div class="subsection" id="layout">
				
					
				
					<p>The Black Mesa Research Facility spans over <span class="sensitive">52,000 acres</span> in New Mexico. Black Mesa purchased the land from the United States government in 196X, and the decommissioned missile silo which the latter had built on the property still serves as the basis for a small portion of the Research Facility as it exists today. The layout of the Research Facility is not public knowledge, but portions of the facility exist more than <span class="sensitive">two miles</span> underground.</p>
				
				</div>
				
				<div class="subsection" id="energy">
					
					
					
					<p>Despite the Research Facility's intense electrical demands, it is not connected to any external power grid. Instead, Black Mesa operates the famous "Sector G" hydroelectric dam along with <span class="sensitive">multiple underground nuclear reactors</span>. These state-of-the-art creations were designed in conjunction with the <span class="sensitive">United States Air Force</span>, and largely rely on Black Mesa-developed technologies which have been declared state secrets.</p>
				
				</div>
			
			</div>
			
			<div class="section" id="personnel">
			
				<h2>The Personnel</h2>
				
				<div class="subsection" id="roles">
				
					
				
					<p>The bulk of Black Mesa's <span class="sensitive">3500</span> employees are members of the Black Mesa Science Team. Science Team members have terminal degrees in their fields and are world-class experts on their specific areas of research. Given the sensitive nature of Black Mesa's work, several hundred additional employees make up the Black Mesa Security Team. Since all Black Mesa employees must maintain <span class="sensitive">Top Secret security clearance</span>, Security Team positions are often filled by <span class="sensitive">Special Forces veterans</span>. The remainder of Black Mesa's employees serve in maintenance, medical, or administrative roles.</p>
				
				</div>
				
				<div class="subsection" id="family">
				
					
				
					<p>Due to the extreme distance between the Black Mesa Research Facility the cities nearest it, spouses and children of Black Mesa employees are invited to live in the Black Mesa Dormitories. Spouses are expected to maintain <span class="sensitive">Confidential security clearance</span>. Non-employees are not permitted to visit the Research Facility except for specific purposes validated by the Security Team no less than four weeks in advance.</p>
				
				</div>
			
			</div>
		
		</div>
		
	</div>


</body>

</html>