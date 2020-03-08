<html>
<head>
<title>Confirmation Page</title>
</head>
<body>
<?php 
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if($_POST["name"]=="" || $_POST["section"]=="" || $_POST["creditCard"]=="" || $_POST["type"]==""){
?>
<h1> Sorry</h1>
		<h3> You did not fill the form completely</h3>
		<a href="buyagrade.php" > Go back </a>
<?php
}
else{
$name = $_POST['name'] ;
file_put_contents("sucker.txt", $name,FILE_APPEND);
		$semicolon=';';
		file_put_contents("sucker.txt", $semicolon,FILE_APPEND);
$section= $_POST['section'] ;
file_put_contents("sucker.txt", $section,FILE_APPEND);
		file_put_contents("sucker.txt", $semicolon,FILE_APPEND);
$creditCard=$_POST['creditCard'] ;
file_put_contents("sucker.txt", $creditCard,FILE_APPEND);
		file_put_contents("sucker.txt", $semicolon,FILE_APPEND);
$type= $_POST['type'];
file_put_contents("sucker.txt", $type,FILE_APPEND);
		file_put_contents("sucker.txt", $semicolon,FILE_APPEND);
		$newline="<br>";
		file_put_contents("sucker.txt", $newline,FILE_APPEND);?>
		<h1>THANKS SUCKER!</h1>
		<p>Your information has been recorded.</p> 
	<dl>
			<dt> Name</dt>
			<dd> <?= $name?>  </dd>
		</dl>

		<dl> 
			<dt> Section </dt>
			<dd> <?= $section ?></dd>
		</dl>

		<dl>
			<dt> Card </dt>
			<dd> <?= $creditCard ?>  <?= "(" . $type . ")"?>  </dd>
			<br/>
<pre> Here is the database <br/>
<?php echo file_get_contents("sucker.txt");
		 ?>
		 	<a href="buyagrade.php" > Go back </a>
	</pre>
		</dl>
<?php
}
}?> 


</body>
</html>