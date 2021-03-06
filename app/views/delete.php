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
           <!-- <a href="#" class="navbar-brand">My Book.</a>-->
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="member">My Book</a></li>
                <li><a href="index">Library</a></li>
                <li><a href="upload">Upload File</a></li>
        <li><a href="delete">Delete File</a></li>
                <li><a href="About">About Us</a></li>
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
                                         <form action="index" method="get">  
                                        <p class="text-right"><strong>username : </strong></p> 
                                        <input type="text" id="user" name="user" class="login_input" > >
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
                                            <a href="member" class="btn btn-danger btn-block">profile</a>
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
    
            <br><br><br><br>
<div class="row">
  <div class="col-xs-6 col-md-3">
  
     <a href="file/<? echo $download; ?>"  class="thumbnail">
      <img data-src="holder.js/100%x180" alt="1" src="image/defaultimg.png"> 
       <INPUT TYPE="reset" VALUE="delete"> 
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img data-src="holder.js/100%x180" alt="1" src="image/defaultimg.png">  
       <INPUT TYPE="reset" VALUE="delete"> 
    </a>
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img data-src="holder.js/100%x180" alt="..." src="image/defaultimg.png">
       <INPUT TYPE="reset" VALUE="delete"> 
    </a>
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img data-src="holder.js/100%x180" alt="..." src="image/defaultimg.png">
       <INPUT TYPE="reset" VALUE="delete"> 
    </a>
    </a>
  </div>
</div>
<div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img data-src="holder.js/100%x180" alt="..." src="image/defaultimg.png">
       <INPUT TYPE="reset" VALUE="delete"> 
    </a> 
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img data-src="holder.js/100%x180" alt="..." src="image/defaultimg.png"> 
      <INPUT TYPE="reset" VALUE="delete"> 
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img data-src="holder.js/100%x180" alt="..." src="image/defaultimg.png"> 
       <INPUT TYPE="reset" VALUE="delete"> 
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img data-src="holder.js/100%x180" alt="..." src="image/defaultimg.png"> 
       <INPUT TYPE="reset" VALUE="delete"> 
    </a>
  </div>
</div>
           
         
<nav>
  <ul class="pager">
    <li><a href="#">Previous</a></li>
    <li><a href="#">Next</a></li>
  </ul>
</nav>
    
    

   </body>


  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
  </body>
</html>