<?php
header('content-type:image/jpeg');
$font=realpath('arial.ttf');
$image=imagecreatefromjpeg("tika.jpg");
$color=imagecolorallocate($image, 51,51,102);
$data=date('d F,Y');
imagettftext($image,18,0,880,188,$color,$font,$date);
$name="SHOVON MONDAL";
imagettftext($image,48,0,120,520,$color,$font,$name);
imagejpeg($image);
imagedestroy($image);
?>