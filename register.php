

<!DOCTYPE html>
<html>
	
	
	
<head>	
	<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/C75D1833-903F-4A41-B1FB-A9F889BABDA2/main.js" charset="UTF-8"></script><script src="basith.js"></script>
	<title> Registration </title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- add header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php"><h3><b>&nbsp;Auth</b></h3>
</a>
		</div>
		<!-- menu items -->
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php"> Search</a></li>
				<li class="active"><a href="register.php">Registration</a></li>
			</ul>
		</div>
	</div>
</nav>


	  
	  
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="reg.php" method="post" name="signupform">
				<fieldset>
					<legend>Registration</legend>
					
					<div class="form-group">
						<label for="name">Name</label>
						<input type="name" name="b1" placeholder="Enter Full Name" required  class="form-control" />
						
						<span class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="name">Roll No</label>
						<input type="number" name="b2" placeholder="Roll No" required  class="form-control" />
						
						<span class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="name">Date Of Birth</label>
						<input type="date" name="b3" placeholder="YYYY-MM-DD" required class="form-control" />
						
						<span class="text-danger"></span>
					</div>
					
					<div class="form-group">
						<label for="name">Phone Number</label>
						<input type="number" name="b4" min="6000000000" max="9999999999" placeholder="Phone Number" required class="form-control" />
						



						<span class="text-danger"></span>
					</div>

										<div class="form-group">
						<input onclick="checking();"  type="submit" onclick="checking();" name="Register" value="Register" class="btn btn-primary" />
						<p><span id='display'></span></p>
						<p><span id='d'></span></p>
						
					</div>
				</fieldset>
			</form>
			<span class="text-success"></span>
			<span class="text-danger"></span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		Already Registered? <a href="index.php">Login Here</a>
		<p><span id='h'></span></p>
		</div>
	</div>
</div>

<br><br><center><font color="red"></font></font></center>
<script src="js/error.js">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/basith.js"></script>
</body>
</html>



