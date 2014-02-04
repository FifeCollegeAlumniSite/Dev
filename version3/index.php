<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
  <!--Modal must be at the top of page to avoid positioning problems -->
  	<div class="modal fade" id="myModal">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Login</h4>
			  </div>
			  
			  <div class="modal-body">
					<form role="form" action="#">
						<div class="form-group">
							<label for="Name">Email or Student Number</label>
							<input type="text" class="form-control" id="Name">
						</div>
						
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password">
						</div>
					</form>
			  </div>
			  
			  <div class="modal-footer">
				<a href="#">Not Registered?</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Submit</button>
			  </div>
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	
	<!--Background colour divs -->
   <div id="bottom"/>
    <div id="top"/>
   
  
	<div class="container" id="site=wrapper">
	
			<div class ="container" id="navWrapper">
						
				<div class="navbar" role="navigation">
					<nav class="navbar-inner">
						<a class="" href=""><img  src="img/logo.png" alt="Fife College Logo"/></a>				
						<ul class="nav nav-pills pull-right">
							<li><a href="#">Home</a></li>
							<li><a href="#">Members</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a  href="#"  data-toggle="modal" data-target="#myModal">Login</a></li>
						</ul>
					</nav>
				</div><!--/nav -->
								
			</div><!--/navWrapper -->
			
			<div class="container" id="contentWrapper">				
			
			</div><!--/contentWrapper -->
			
		</div><!-- /.Site Wrapper-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>