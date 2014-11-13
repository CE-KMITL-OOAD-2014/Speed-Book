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
  <body bgcolor="red">
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
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container"> 
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button>
            <a href="#" class="navbar-brand">My Book.</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php?<? echo "user=$user"; ?>">Library</a></li>
                <li class="active"><a href="upload.php">Upload File</a></li>
                <li class="active"><a href="#">Delete File</a></li>

                <li><a href="About.php?<? echo "user=$user"; ?>">About Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   
                        <strong><?php 
                            $db=mysql_connect("localhost","root","password"); 
                            mysql_select_db("speedbook",$db);                           
                            
                            $result=mysql_query("SELECT*FROM login WHERE email LIKE '$user%'",$db)or die("กรุณาล๊อกอินด้วยรหัสผ่านที่ถูกต้อง");
                            $rs=mysql_fetch_array($result)or die("กรุณากรอกรหัสผ่านที่ถูกต้อง");
                           
                            echo $rs[username];
                            mysql_close($db);                      


                            ?></strong>
                        
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    
                                    <div class="col-lg-8">
                                         <form action="index.php" method="get">  
                                        <p class="text-right"><strong>username : </strong></p> 
                                        <input type="text" id="user" name="user" class="login_input" value=<?echo $_GET["user"];?> >
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
                                            <a href="" class="btn btn-danger btn-block">Logout</a>
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
    <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading"><strong>Upload Files</strong> <small>Bootstrap files upload</small></div>
        <div class="panel-body">

          <!-- Standar Form -->
          <h4>Select files from your computer</h4>
          <form action="upload.php?<? echo "user=$user"; ?>" method="post" enctype="multipart/form-data" id="js-upload-form">
            <div class="form-inline">
              <div class="form-group">
                <input type="file" name="upfile" id="js-upload-files" multiple>
              </div>
              <button type="submit_up" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button>
            </div>
          </form>
          <?php              
          if(move_uploaded_file($_FILES["upfile"]["tmp_name"],"file/".$_FILES["upfile"]["name"])){ 
          $name=$_FILES["upfile"]["name"]; 
          $size=$_FILES["upfile"]["size"];

           
                            $db=mysql_connect("localhost","root","password")or die("ไม่สามารถติดต่อกับเซิฟเวอ");
                            mysql_select_db("speedbook",$db)or die("ไม่สามารถเลือกฐานข้อมูล");
                            $rs=select("book","id LIKE 0");
                            $id=$rs[size]+1;
                            update("book","size='$id'","id=0");
                                                      
                           insert("book","id",$id);
                           update("book","name='$name'","id='$id'");  	
                           update("book","size='$size'","id='$id'"); 

                           //update person
                             $result=mysql_query("SELECT*FROM login WHERE email LIKE '$user%'",$db);
                            $rs=mysql_fetch_array($result);
                            print $rs[username];

                             $strSQL="UPDATE login";
                             if($rs[book1]=="0")$strSQL=$strSQL." SET book1='$id'";
                             elseif($rs[book2]=="0")$strSQL=$strSQL." SET book2='$id'";
                             $strSQL=$strSQL." WHERE email='$user'";
                            mysql_query($strSQL,$db) or die("ไม่สามารถเปรับปรุงข้อมูล");
                            $strSQL="SELECT*FROM login";
                            $rs=mysql_query($strSQL,$db);

                           mysql_close($db); 
         }

  function insert($strTable,$strField,$strValue)

{

$strSQL = "INSERT INTO $strTable ($strField) VALUES ($strValue) ";

return @mysql_query($strSQL);

}
function select($strTable,$strCondition)

{

$strSQL = "SELECT * FROM $strTable WHERE $strCondition ";

$objQuery = @mysql_query($strSQL);

return @mysql_fetch_array($objQuery);

}
function update($strTable,$strCommand,$strCondition)

{

$strSQL = "UPDATE $strTable SET  $strCommand WHERE $strCondition ";

return @mysql_query($strSQL);

}

          ?>
        </div>
        </div>
      </div>
    </div>
           

   </body>


  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
  </body>
</html>