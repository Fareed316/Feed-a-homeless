<?php
include './db-connect.php';
?>
<html>
<link rel="stylesheet" href="css/main.css"> 
<body>
<section id="home">

   	<div class="overlay"></div>

   	<div class="home-content-table">	
		   <div class="home-content-tablecell">
		   	<div class="row">
			  				<h3 class="animate-intro"></h3>
				  			<h1 class="animate-intro">
							Thank you for your Support
				  			</h1>		
	<?php

			
		
		if(isset($_POST['lat'])){
			$lat = $_POST['lat'];
			$lng = $_POST['lng'];
			date_default_timezone_set("America/New_York");
			$tim = date("Y-m-d H:i:s");


			$result77 = $db->query("INSERT INTO `tab3`(`longi`, `lati`, `time`) VALUES ('".$lat."','".$lng."', '".$tim."' );" );
		}
	



		
?>	
   </div></div></div></div>
   </section> <!-- end home -->
</body>
</html>