<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SpeedBook</title>

    <!-- Bootstrap -->
    <link href="bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container"> 
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
               <li><a href="index.php?<? echo "user=$user"; ?>">Library</a></li>
                <li><a href="Login.php?<? echo "user=$user"; ?>">Login</a></li>
                <li><a href="Register.php?<? echo "user=$user"; ?>">Register</a></li>
                <li><a href="About.php?<? echo "user=$user"; ?>">About Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   
                        <strong>username</strong>
                        
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    
                                    <div class="col-lg-8">
                                        <form action="index.php" method="get">  
                                        <p class="text-right"><strong>username : </strong></p> 
                                        <input type="text" id="user" name="user" class="login_input" value=<? echo $_GET["user"];?> >
                                        </p>
                                        
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
								<div class="col-lg-12">
                                        <p>
                                            <a href="member.php" class="btn btn-danger btn-block">profile</a>
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p>
                                            <a href="#" class="btn btn-danger btn-block">Logout</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
  <br><br><br>
 <div class="container">
 <?php
if($password==$password_confirmation){

    if($_GET["submitReg"]){
        $conn=mysql_connect("localhost","root","password")or die("ไม่สามารถติดต่อกับเซิฟเวอ");
        mysql_select_db("speedbook",$conn)or die("ไม่สามารถเลือกฐานข้อมูล");       
        $strSQL = "INSERT INTO login password VALUES '$password' ";
        insert("login","password",$password);
        update("login","username='$username'","password='$password'");
         update("login","email='$email'","password='$password'");

        mysql_query($strSQL);


    }
}

function insert($strTable,$strField,$strValue)

{

$strSQL = "INSERT INTO $strTable ($strField) VALUES ($strValue) ";

return @mysql_query($strSQL);

}
function update($strTable,$strCommand,$strCondition)

{

$strSQL = "UPDATE $strTable SET  $strCommand WHERE $strCondition ";

return @mysql_query($strSQL);

}

 ?>


<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form">
			<h2 align="center">Please Sign Up </h2>
			<hr class="colorgraph">
			<div class="row">
			<div class="form-group">
            <form action="register.php" method="get">  
				<input type="text" name="username" id="username" class="form-control input-lg" placeholder="username" tabindex="4">
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="5">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="6">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="7">
					</div>
				</div>
			</div>

			<div class="row">
				
				
			</div>
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" name="submitReg" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
				<div class="col-xs-12 col-md-6"><a href="Login.html" class="btn btn-success btn-block btn-lg">Sign In</a></div>

			</div>
            
		</form>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
  </body>
</html>