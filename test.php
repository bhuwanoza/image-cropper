<?php 
file_put_contents("myimage152.png", base64_decode($_POST['image152']));
file_put_contents("myimage120.png", base64_decode($_POST['image120']));
file_put_contents("myimage76.png", base64_decode($_POST['image76']));
file_put_contents("myimage60.png", base64_decode($_POST['image60']));
file_put_contents("myimage32.png", base64_decode($_POST['image32']));

require('php-ico/class-php-ico.php' );

$source = "myimage32.png";
$destination = "favicon.ico";

$ico_lib = new PHP_ICO( $source );
$ico_lib->save_ico( $destination );

?>