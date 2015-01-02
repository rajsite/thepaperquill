<?php include("js/browser_detect.php"); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>


<?php include("js/browser_detect.php"); ?>

<?php

if ( ( browser_detection( 'browser' ) == 'ie' ) && ( browser_detection( 'number' ) <= 7 ) )
     echo "<link rel=\"stylesheet\" href=\"altindex.html" />";
	 
if (( browser_detection( 'browser' ) == 'safari' ) && (browser_detection( 'number') <= 5 ) )
	echo "<link rel=\"stylesheet\" href=\"altindex.html" />";
	
	if (( browser_detection( 'browser' ) == 'opera' ) && (browser_detection( 'number') <= 9 ) )
	echo "<link rel=\"stylesheet\" href=\"altindex.html" />";
	
	
else
     echo "<link rel=\"stylesheet\" href=\"index.html" />";

?>

</head>

<body>
</body>
</html>
