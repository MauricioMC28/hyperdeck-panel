<!--
 __   ______   __    __      __   ______   ______  ______  ______   __    __   ______   ______  ______    
/\ \ /\  __ \ /\ "-./  \    /\ \ /\  ___\ /\  ___\/\  ___\/\  __ \ /\ "-./  \ /\  __ \ /\__  _\/\  __ \   
\ \ \\ \  __ \\ \ \-./\ \  _\_\ \\ \  __\ \ \  __\\ \  __\\ \  __ \\ \ \-./\ \\ \  __ \\/_/\ \/\ \ \/\ \  
 \ \_\\ \_\ \_\\ \_\ \ \_\/\_____\\ \_____\\ \_\   \ \_\   \ \_\ \_\\ \_\ \ \_\\ \_\ \_\  \ \_\ \ \_____\ 
  \/_/ \/_/\/_/ \/_/  \/_/\/_____/ \/_____/ \/_/    \/_/    \/_/\/_/ \/_/  \/_/ \/_/\/_/   \/_/  \/_____/ 
					PLEASE DON'T STEAL MY STUFF
    
    //Deck control developed and written by Jeff Amato - iamjeffamato.com @iamjeffamato
    //Hyperdeck is a registered trademark of Blackmagic Design Pty Ltd
    //Configuration and use notes can be found at
    //
    //      This software is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY.
    //      This software in its entirety or paritality shall not be used for monetary gain.
    //      Feel free to modify it's contents, but remember if you break it... good luck.
    //      If you come up with something awesome using this code be sure to give me some street cred.
    //      
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, user-scalable=0">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
            <link rel="apple-touch-icon" href="images/hdcpIcon.png">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>HyperDeck Sign in</title>
<link rel="stylesheet" type="text/css" href="css/default.css" media="screen" />
<link rel="icon" type="image/png" href="images/hdcpIcon.png">
</head>

<body>
<form action="" method="post">
<div class="login_box">

    <img src="images/hdcpIcon.png" width="100" height="100" style="vertical-align:middle;margin:0px 65px">
    <h2 style="margin-top: 0px;margin-bottom: 25px">HyperDeck</h2>

    <span class="login_text">Username</span><br />
    <input name="username" type="text" class="login_input<?php if($showerror == "yes"){print " errorborder";} ?>" /><br />
    <span class="login_text">Password</span><br />
    <input name="password" type="password" class="login_input<?php if($showerror == "yes"){print " errorborder";} ?>" /><br /><br />
	<div align="right"><input class="submit" name="login" type="submit" value="Log in" /></div>
        
         <?php $login->error_login(); ?>
</div>
</div>
</form>
</body>
</html>
