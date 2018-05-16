<?php
include_once 'db_connection.php';
session_start();
if(isset($_GET['action'])){
	if($_GET['action'] == 'logout'){
		unset($_SESSION['login']);
		unset($_SESSION['name']);
		session_destroy();
		$conn = new Connection();
		$conn->closeConnection();
		header('location: home.php');
}

}
?>
<!DOCTYPE html>
<html>

<head>
<style>
#wrapper{
	text-align:center;
}

.section{


	margin:auto;

	padding:10px;
}
.greenText{


	text-align:center;
	color:green;
}
.redText{

	text-align:center;

	color:red;
}


</style>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="./login.css" />
</head>

<body>

<div id="wrapper"><p><h1> to the Login Page </b></h1></p>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

	<div class="section">Username: <input type="text" name="username" value="<?= isset($_POST['username']) ? $_POST['username'] : ''; ?>"><br></div>
	<div class="section">Password: <input type="password" name="password"><br></div>

	<div class="section"><input type="submit" name="login" value="login"/></div>
	<div class="section"><input type="submit" name="register" value="register"/></div>
</form>
</div>

<?php
	if(isset($_POST["username"]) and isset($_POST["password"])){
		$obj = new Connection();
		$con=$obj->openConnection();

		if($_POST["username"] and $_POST["password"]){
			$inputName=htmlspecialchars($_POST["username"]);
			$inputPw=htmlspecialchars($_POST['password']);

			$storedPw;
			$existedName=0;

			$stmt =$con->prepare("SELECT * FROM users");
			$stmt->execute();
			$result=$stmt->fetchAll();


			foreach($result as $row){
				if ($inputName == $row["username"]){
					$existedName=1;
					$storePw=$row["password"];
				}
			}
			if(isset($_POST["login"])){

				if($existedName==1 && password_verify($inputPw, $storePw)){
					$_SESSION["logout"]=false;
										$_SESSION["login"]=true;

					$_SESSION["name"]=$inputName;
					$_SESSION["clicks"]=0;

					header('Location:home.php');

				}else if($existedName==0){
					echo '<div class="redText">No user '.$inputName.' exists.</div>' ;
				}else if($existedName==1 && $inputPw != $storePw){
					echo '<div class="redText">Incorrect Password.</div>';
				}
			}


			if(isset($_POST["register"])){
				if(strlen($inputName)<4 || strlen($inputName)>31){
					echo '<div class="redText">Invalid username:Must be between 4 and 31 characters long.</div>';
				}else if(!preg_match('/^[A-Za-z0-9]+$/',$inputName)){
					echo '<div class="redText">Invalid username: Must contain only numbers and letters.</div>';
				}else if(strlen($inputPw)<8 || strlen($inputPw)>31){
					echo '<div class="redText">Invalid password: Must be between 8 and 31 characters long.</div>';
				}else if(!preg_match('/^.*(?=.{7,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/',$inputPw)){
					echo '<div class="redText">Invalid password: Must contain lowercase letters, uppercase letters, and numbers.</div>';
				}else if($existedName==1){
					echo '<div class="redText">Invalid username: User '.$inputName.' already exists.</div>';
				}else{
					$saltedPw = password_hash($inputPw,PASSWORD_DEFAULT);
					$stmt =$con->prepare("INSERT INTO users(username,password,clicks)VALUES(:name,:pass,0)");
					$stmt->bindParam(':name',$inputName);
					$stmt->bindParam(':pass',$saltedPw);
					$stmt->execute();
					echo '<div class="greenText">Account '.$inputName.' created!</div>';
				}
			}

		}else if(!$_POST["username"]){
			echo '<div class="redText">Please input username!</div>';
		}else if(!$_POST["password"]){
			echo '<div class="redText">Please input password!</div>';
		}
	}else{
		if(!empty($_SESSION["logout"]) && $_SESSION["logout"]){
			echo '<div class="greenText">You have been logged out.</div>';
			session_unset();
			session_destroy();
		}
	}

?>


</body>
</html>
