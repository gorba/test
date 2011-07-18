<?php
$dir = "bilder/home/";

$images = array();
$d = dir($dir);

while($name = $d->read())
{
    if(!preg_match('/\.(jpg|gif|png)$/', $name)) continue;	
	echo '<img src="' . $dir.$name . '" height="450"  />';
}

$d->close(); // Branch
?>