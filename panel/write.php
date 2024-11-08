<?php require('config.php');
//     __   ______   __    __      __   ______   ______  ______  ______   __    __   ______   ______  ______    
//    /\ \ /\  __ \ /\ "-./  \    /\ \ /\  ___\ /\  ___\/\  ___\/\  __ \ /\ "-./  \ /\  __ \ /\__  _\/\  __ \   
//    \ \ \\ \  __ \\ \ \-./\ \  _\_\ \\ \  __\ \ \  __\\ \  __\\ \  __ \\ \ \-./\ \\ \  __ \\/_/\ \/\ \ \/\ \  
//     \ \_\\ \_\ \_\\ \_\ \ \_\/\_____\\ \_____\\ \_\   \ \_\   \ \_\ \_\\ \_\ \ \_\\ \_\ \_\  \ \_\ \ \_____\ 
//      \/_/ \/_/\/_/ \/_/  \/_/\/_____/ \/_____/ \/_/    \/_/    \/_/\/_/ \/_/  \/_/ \/_/\/_/   \/_/  \/_____/ 
//      					PLEASE DON'T STEAL MY STUFF

	//Deck control developed and written by Jeff Amato - iamjeffamato.com @iamjeffamato
	//Hyperdeck is a registered trademark of Blackmagic Design Pty Ltd
	//Configuration and use notes can be found at hyperdeck.iamjeffamato.com
	//
	//      This software is distributed by purchase from hyperdeck.iamjeffamato.com via gumroad.com
	//      This software comes as is, WITHOUT ANY WARRANTY.
	//      Feel free to modify it's contents, but remember if you break it... just re-download it.
	//      
	//Secure PHP login without Database provided by Jerry Low @crankberryblog.com
	
$store = array();

for ($x=1; $x<=$_POST['totalDecks']; $x++){
	if(!$_POST["deck".$x."enable"]){$enable = "false";}else{$enable = $_POST["deck".$x."enable"];}
	if(!$_POST["deck".$x."name"]){$name = "New Deck ".$x;}else{$name = $_POST["deck".$x."name"];}
	if(!$_POST["deck".$x."ip"]){$ip = "0.0.0.0";}else{$ip = $_POST["deck".$x."ip"];}
	if(!$_POST["deck".$x."model"]){$model = "mini";}else{$model = $_POST["deck".$x."model"];}
	$store[] = array(
		"number" => $x,
		"enable" => $enable, 
		"name" => $name, 
		"ip" => $ip,
		"model" => $model,
	);
}
$store['global'] = array(  
	'enableLogin' => $_POST['enableLogin'],
	'ffspeed' => $_POST['ffspeed'],
	'rwspeed' => $_POST['rwspeed'],
	'looping' => $_POST['looping'],
	'avatarEnable' => $_POST['avatarEnable'],
	'avatarUrl' => $_POST['avatarUrl'],
	//'dispClip'	=> $_POST['dispClip'],
	//'scroll' => $_POST['scroll'],
	'timezone' => $_POST['timezone'],
	'timerInterval' => $_POST['timerInterval'],
	'totalDecks' => $_POST['totalDecks'],
	'fnUser' => $_POST['fnUser'],
);

// Write data to file         
$fp = fopen('config.txt','w'); 
fwrite($fp,serialize($store));
header('Location: settings.php');
?>