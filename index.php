<?php?>
<!DOCTYPE html>
<html>
    <head>
		<?php
		  require 'PHP_Klasses/Bootstrap.php';
		  $BS = new Bootstrap();
		  echo $BS -> getBootstrap();
		  
		?>
    </head>
    <body>
    
	<?php 
	require 'PHP_Klasses/Nav.php';
	$nav = new Nav();
	$nav ->getNavHTML();
	?> 
    
    </body>
</html>
