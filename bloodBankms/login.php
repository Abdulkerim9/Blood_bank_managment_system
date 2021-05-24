
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style2.css" />
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <nav id="navbar">
      <div class="container">
        <h1 class="logo"><a href="index.php">BBMS</a></h1>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a class="current" href="login.php">Login</a></li>
        </ul>
      </div>
    </nav>
  </header>
<br>
<div class="container">
  <section id="content">
    <form action="admin.php" method ="post">
      <h1>Admin Login</h1>
      <div>
        <input type="text" name="username" placeholder="username" required="" id="username" />
      </div>
      <div>
        <input type="password" placeholder="password" required="" id="password" />
      </div>
      <div>
	  <input type="submit" name="login" value ="login">
      </div>
    </form><!-- form -->
    
  </section><!-- content -->
</div><!-- container -->
</body>
</html>