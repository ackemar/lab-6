<?php
// Set the content type to output an image
header("Content-Type: image/png");

// Create an image canvas (width: 400px, height: 150px)
$image = imagecreate(400, 150);

// Define colors
$gray = imagecolorallocate($image, 211, 211, 211);  // Light gray background
$black = imagecolorallocate($image, 0, 0, 0);  // Black text

// Fill the background with the gray color
imagefill($image, 0, 0, $gray);

// Specify the path to the TrueType font
$fontPath = __DIR__ . "/Arial.ttf"; // Place "Arial.ttf" in the same folder as this script

// Check if the font file exists
if (!file_exists($fontPath)) {
    // If the font is not found, output an error message
    imagestring($image, 5, 50, 60, "Font not found!", $black);
} else {
    // Add text to the image using the TrueType font
    imagettftext($image, 20, 0, 50, 80, $black, $fontPath, "Hello, User!");
}

// Output the image in PNG format
imagepng($image);

// Free up memory
imagedestroy($image);
?>
