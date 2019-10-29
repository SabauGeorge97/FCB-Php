<?php 
define("TITLE", "Honours | FCB");
include('includes/header.php');
/*function strip_bad_chars(){

$output = preg_replace("/[^a-zA-Z0-9_-]/","", $input);
return $output;
}*/

if(isset($_GET["item"])){
	$trophieItem=$_GET["item"];
	$troph = $trophieItems[$trophieItem];
}
?>
<hr>
<div style="overflow: auto;">
	<h1><?php echo $troph["number"]; ?> <?php  echo $troph["title"];?></h1>
	<img src="img/<?php echo $troph["img2"]; ?>.png" alt="trophies">
	<p><strong>(<?php echo $troph["years"]; ?>)</strong></p>

	<br>
</div>

<hr>

<div>
<a href="menu.php"> Back to menu</a>
</div>

<br>

<?php include('includes/footer.php');?>