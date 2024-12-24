<?php
header("Content-Type: image/png");

// Create an image canvas with a width of 400px and a height of 100px
$image = imagecreate(400, 100);

// Define colors
$yellow = imagecolorallocate($image, 255, 255, 0); // Yellow background
$black = imagecolorallocate($image, 0, 0, 0);      // Black text

// Add the text "100 Items Sold" to the image
imagestring($image, 5, 120, 40, "100 Items Sold", $black);

// Output the image as PNG
imagepng($image);

// Free up memory
imagedestroy($image);
?>
