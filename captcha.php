<?php	
	session_start();
	
	// create a random number between 1000 and 9999
	$code = rand(1000, 9999);
	
	// add the random number to session 'code'
	$_SESSION['code'] = ($code);
	
	// define the image type
	header("Content-type: image/png");
	
	$font_size = 16;
	$img_width = 100;
	$img_height = 30;
	
	// create a blank image (width, height)
	$image = imagecreate($img_width, $img_height);
	
	// add background color with RGB
	imagecolorallocate($image, 0, 0, 0);
	
	// add text/code color with RGB
	$text_color = imagecolorallocate($image, 255, 255, 255);
	$noise_color = imagecolorallocate($image, 175, 175, 175);
	
	
	// generate some noise in the image
	for ($x = 1; $x <= 10; $x++)
	{
		$x1 = rand(0, $img_width);
		$y1 = rand(0, $img_height); 
		$x2 = rand(0, $img_width);
		$y2 = rand(0, $img_height);
	
		imageline($image, $x1, $y1, $x2, $y2, $noise_color);
	}
	
	// create image with all the settings above
	imagettftext($image, $font_size, 0, 25, 20, $text_color, './assets/fonts/MERRIWEATHERSANS-REGULAR.TTF', $code);
	
	// display the image as PNG
	imagepng($image);
?>