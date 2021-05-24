<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from admin where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
							header("Location: ../members.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<! html>
<html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
</head>
<body>
    <link rel="stylesheet" type="text/css" href="../css/style2.css" />
	<link rel="stylesheet" href="../css/style.css">

    <header>
      <nav id="navbar">
        <div class="container">
	  
        <h1 class="logo"><a href="index.php">BBMS</a></h1>
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a class="current" href="login.php">Login</a></li>
        </ul>
        </div>
      </nav>
    </header>
	<br>
	<div class="container">
	<section id="content">
		<form method="post">
		<h1>Admin Login</h1>
			<div>
			<input id="text" type="text" name="user_name" placeholder="Userame">
			</div>
			<div>
			<input id="text" type="password" name="password" placeholder="Password">
			</div>
			<div>
			<input id="button" type="submit" value="Login">

			<a href="signup.php">Click to Signup</a><br><br>
			</div>
			<div>
		</form>
		</section>
	</div>
</body>
</html>
