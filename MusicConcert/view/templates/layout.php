<?php
//session_start();
?>
<html>
<head>
<meta charset="UTF-8">   

	<!-- CSS Bootstrap & Custom -->
     <script src="public/js/jquery.js" type="text/javascript"></script>
        <script src="public/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
</head>

<body>
				
	<div class="container">
			
			<nav class="navbar navbar-inverse container">
			<div class="container-fluid">	
				<div class="navbar-header navbar-inverse">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					  </button>	
				</div>	
					
			
					<div class="collapse navbar-collapse main_menu" id="myNavbar">
					
						<ul class="nav navbar-nav navbar-right">
						  <?php 
							if (!isset($_SESSION['user_id'])) {
						  ?>
													
									<li><a href="admin">Admin <i class="fa fa-sign-in"></i></a></li>
									<li><a href="form_register">Register <i class="fa fa-user"></i></a></li>

							<?php } else { ?>
								<li><a class="btn btn-default btn-sm"  href="admin/login" target=_blank>Admin panel</a></li>
								<li class="dropdown">
									<button class="btn btn-default dropdown-toggle"  type="button" data-toggle="dropdown">User: <?php echo $_SESSION['name'] ?> 
									<span class="caret"></span></button>
									<ul class="dropdown-menu">
										<li><a style="color: #b10021; background-color:white;" href="admin/logout">Logout</a></li>								  
									</ul>
							</li>							
						<?php } ?>
					</ul>
		
				
			<ul class="nav navbar-nav">
                <li ><a class="navbar-brand" href="home">Home</a></li>
                 <li><a class="navbar-brand" href="shows">Shows</a></li>
                 <li><a class="navbar-brand" href="contact">Contact us</a></li>
            </ul>
		
		
		
			<form class="nav navbar-form navbar-right"   method="GET" action="search">
					<div class="form-group">
					  <input type="text" class="form-control" name="text" placeholder="Введите группу">
					</div>
					<button type="submit" class="btn btn-default">Search</button>
			</form>
		
		
		
		
		</div>	
	</div>	
	</nav> <!-- /.row -->
				
				

	  	<div class="container">
			<div class="row">
			<p style="text-align: center"><img src="images/logo.png"  alt=""/>
				<div class="col-md-12 text-center">
					<h1 class="templatemo_logo">
                                            <?php  
                                          if(isset ($title))  echo $title; 
                                            ?>
                                            
                                        </h1> <!-- /.logo -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.container -->
	
	
		<div class="container">  
       
		<!-- php code основное содержание ent-->
				
		
			
	 </div>
<?php
    if(isset($content)){
    echo $content;//придет сюда из View
    }
?>


	 
	
		<div class="container">
		  <hr>
		   <footer>

			<div class="row">
				<div class="col-md-12 text-center">
					<p>Copyright &copy; 2018 IVKHK  | Design: Anton Buketov</p>
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
			 </footer>
		</div> <!-- /.container -->
	


	<!-- 
    	Free Responsive Template by templatemo
    	http://www.templatemo.com
	-->

</body>
</html>