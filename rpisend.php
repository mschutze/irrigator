<?php
// Get data
if(isset($_POST['run'])) {
	$clean = preg_replace('/\D/', '', $_POST['run']);
	echo('Running sudo codesend '.$clean.'... ');
	shell_exec('sudo codesend '.$clean);
	echo("SUCCESS!");
} elseif(isset($_GET['run'])){
	$clean = preg_replace('/\D/', '', $_POST['run']);
	echo('Running sudo codesend '.$clean.'... ');
	shell_exec('sudo codesend '.$clean);
	echo("SUCCESS!");
} else {
	echo("No data was posted!");
}
?>
