<?php
//header('Content-type: image/gif');
/* Create a new imagick object and read in GIF */
$im = new Imagick("1.gif");

   
    
    
 $draw = new \ImagickDraw();
 $draw->setFontSize( 24 );
 $draw->setTextKerning( 1 ); // 设置文件间距
 $draw->setFont( 'yahei.ttf' );
 $draw->setFontWeight( 100 ); // 字体粗体

//$draw->setFontFamily( "Palatino" );
$draw->setGravity( \Imagick::GRAVITY_NORTH );
//$draw->setTextUnderColor('#000000');  
$draw->setFillColor( new ImagickPixel('#ffffff') ); // 字体颜色


    

/* Resize all frames */
foreach ($im as $frame) {
    
$frame->annotateImage($draw, 0, 25, 0, '少华   韩然   志伟');  

/* 50x50 frames */
//$frame->thumbnailImage(300, 0);
/* Set the virtual canvas to correct size */
//$frame->setImagePage(0, 0, 0, 0);


}/* Notice writeImages instead of writeImage */
$im->writeImages("3.gif", true);
echo '<img src="3.gif">';

//echo $image;

/*
//echo 1;exit;
header('Content-type: image/gif');
$image = new Imagick('2.gif');
// If 0 is provided as a width or height parameter,
// aspect ratio is maintained
$image->thumbnailImage(100, 0);
echo $image;
*/


?>

