<?php
    $csef ='[change the path here]'. md5("tifac" . $_SERVER['REMOTE_ADDR']);
    @mkdir($csef);
    @chdir($csef);

      if (isset($_GET['reset'])) {
       echo @exec('/bin/rm -rf ' . $csef);
    }

     if (isset($_GET['cmd']) && strlen($_GET['cmd']) <= 7) {
	if($_GET['cmd']=='ls /'){
		echo @shell_exec($_GET['cmd']);
	}
        @exec($_GET['cmd']);
    }
    highlight_file(__FILE__);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Shinobi Challenge</title>
</head>
<body>
	<form action="shinobi.php" method="GET">
	<div>
		<label>CMD</label><br>
		<input type="text" name="cmd">
		
	</div>
	
	<div>
	<label>reset</label><br>
	<input type="text"  name="reset">
	</div>

	<input type="submit" value="submit">

	
	</form>

		

</body>
</html>
 
