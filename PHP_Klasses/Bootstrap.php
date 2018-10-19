<?php
class Bootstrap
{
	function __construct(){}
	
	function getBootstrap()
	{
	    $libs = "libs";
	    $jquery =  $libs ."/jquery/3.3.1/jquery.min.js";
	    $popper =  $libs ."/popper.js/1.14.3/umd/popper.min.js";
	    $bootstrap =  $libs ."/bootstrap/4.1.3/js/bootstrap.min.js";
	    $bootstrapCss = $libs ."/bootstrap/4.1.3/css/bootstrap.min.css";
	    	    
	    return "<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='stylesheet' href='$bootstrapCss'></link>
	<script src='$jquery'></script>
	<script src='$popper'></script>
	<script src='$bootstrap'></script>";
	}
}
?>