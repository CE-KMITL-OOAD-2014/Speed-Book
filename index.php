﻿<!DOCTYPE html>
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
                   
                        <strong>    
                         <?php 
                            $db=mysql_connect("localhost","root","password"); 
                            mysql_select_db("speedbook",$db);                           
                            
                            $result=mysql_query("SELECT*FROM login WHERE email LIKE '$user%'",$db)or die("กรุณาล๊อกอินด้วยรหัสผ่านที่ถูกต้อง");
                            $rs=mysql_fetch_array($result)or die("กรุณากรอกรหัสผ่านที่ถูกต้อง");
                           
                            echo $rs[username];
                            mysql_close($db);                      


                            ?>
                            </strong>
                        
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
                                            <a href="member.php?<?echo "user=$user"; ?>" class="btn btn-danger btn-block">profile</a>
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p>
                                            <a href="index.php" class="btn btn-danger btn-block">Logout</a>
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
<div class="row">
  <div class="col-xs-6 col-md-3">
    <?php 
    $download;
    $db=mysql_connect("localhost","root","password"); 
                            mysql_select_db("speedbook",$db);
                            //$result = mysql_query("SELECT * FROM uoc_std WHERE STD_FNAME LIKE '$_POST[keyword]%'  OR STD_LNAME LIKE '$_POST[keyword]%'");
                            
                             $rs=select("book","id LIKE '0'");
                             $max=$rs[size];
                             for($i=0;$i<=$max;$i++){
                              $rs=select("book","id LIKE '$i'");
                              $download[]=$rs[name];
                              
                             }

function select($strTable,$strCondition)

{

$strSQL = "SELECT * FROM $strTable WHERE $strCondition ";

$objQuery = @mysql_query($strSQL);

return @mysql_fetch_array($objQuery);

}
    ?>
     <a href="file/<? echo $download[1]; ?>"  class="thumbnail">
      <img data-src="holder.js/100%x180" alt="1" src="image/defaultimg.png">  
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="file/<? echo $download[2]; ?>" class="thumbnail">
      <img data-src="holder.js/100%x180" alt="1" src="image/defaultimg.png">  
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="file/<? echo $download[3]; ?>" class="thumbnail">
      <img data-src="holder.js/100%x180" alt="..." src="image/defaultimg.png">  
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="file/<? echo $download[4]; ?>" class="thumbnail">
      <img data-src="holder.js/100%x180" alt="..." src="image/defaultimg.png">  
    </a>
  </div>
</div>
<div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="file/<? echo $download[5]; ?>" class="thumbnail">
      <img data-src="holder.js/100%x180" alt="..." src="image/defaultimg.png">  
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="file/<? echo $download[6]; ?>" class="thumbnail">
      <img data-src="holder.js/100%x180" alt="..." src="image/defaultimg.png">  
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="file/<? echo $download[7]; ?>" class="thumbnail">
      <img data-src="holder.js/100%x180" alt="..." src="image/defaultimg.png">  
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="file/<? echo $download[8]; ?>" class="thumbnail">
      <img data-src="holder.js/100%x180" alt="..." src="image/defaultimg.png">  
    </a>
  </div>
</div>


 <div class="btn-toolbar" role="toolbar">
  <div class="btn btn-default" >1</div>
  <div class="btn btn-default" >2</div>
  <div class="btn btn-default" >3</div>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
  </body>
</html>