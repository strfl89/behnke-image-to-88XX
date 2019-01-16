<?php

header("Content-Type: image/png");

// Get Image from Axis Cam attached to Behnke Doorcom
$image = "http://viewer:viewer@".$_GET['cam']."/axis-cgi/jpg/image.cgi?resolution=800x600";

// convert from jpeg to png
$png = imagecreatefromjpeg($image);

// save png to subdirectory png on webserver
imagepng($png, "png/".$_GET['file']);
imagedestroy($png);

?>
