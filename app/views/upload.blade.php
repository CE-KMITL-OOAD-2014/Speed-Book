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
           <!-- <a href="#" class="navbar-brand">My Book.</a>-->
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="member">My Book</a></li>
                <li><a href="index">Library</a></li>
                <li><a href="upload">Upload File</a></li>
                <li><a href="delete">Delete File</a></li>
                <li><a href="about">About Us</a></li>
            </ul>
        
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    
                                    <div class="col-lg-8">
                                         <form action="index" method="get">  
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
<br/><br/><br/><br/><br/><br/><br/>


{{ Form::open(array('url'=>'form-submit','files'=>true)) }}

<h2><p align = "center" >{{ Form::label('file','Select file for upload ^^ ',array('id'=>'','class'=>'')) }}</p>

 --><p align = "center" >{{ Form::file('file','',array('id'=>'','class'=>'')) }}</p>

<!-- submit buttons -->
<p align = "center" >{{ Form::submit('Save',array('id'=>'js-upload-submit','class'=>'btn btn-sm btn-primary')) }}
<!-- reset buttons -->
{{ Form::reset('Reset',array('id'=>'js-upload-submit','class'=>'btn btn-sm btn-primary')) }}</p>

{{ Form::close() }}</h>
         

   </body>

 <!--  <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button> -->
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
  </body>
</html>