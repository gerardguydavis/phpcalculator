<html>
<body>
<!--Your code goes here-->
<?php print_r($_GET)?>

<?="The dividend of ${_GET['first']} and ${_GET['second']} is:"?>
<h4><?=$_GET['first']/$_GET['second']?></h4>
<a href="index.php">Reset</a>
</body>
</html>