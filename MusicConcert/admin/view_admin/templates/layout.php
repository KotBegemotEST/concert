<?php
//проверка входа
?>
<html>
<head>
<title>Dashboard</title>
<link href="../public/css/bootstrap.css" rel="stylesheet">
    
<!--   SCRIPT        -->	
<script src="../public/js/jquery-3.1.0.min.js"></script>
<script src="../public/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">     
<!-- -->
	<div class="header clearfix">
		<nav class="navbar navbar-default">
		<div class="container-fluid">
	  <?php 
	  echo '<ul class="nav nav-pills pull-right"> <li role="button">';
	  //приветствие админа
	  echo '<a href="logout">Logout <i class="fa fa-sign-out"></i></a></li> </ul>';
	  
	  echo '<h4><a href="../" target=_blank>WEB SITE</a> ';
	  
	  // для админа условие
		  
		echo '   <a href="??">Band</a>';	
		
	 
	  ?>
	</div>
	</nav>
	</div>
	  
	<div id="content" style="padding-top:20px; min-height:400px;">
	
		<!--       $content               -->
                 <?php 
                           if (isset($content)) echo $content;
                 ?>
	
	</div>
      <footer class="footer">
        <p>&copy; 2018 Design Admin panel</p>
      </footer>

    </div> <!-- /container -->
</body>
</html>