<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style/default.css" type="text/css">
<link rel="stylesheet" href="style/pad.css" type="text/css"media="only screen and (min-device-width:641px) and (max-device-width:1024px)">
<link rel="stylesheet" href="style/phone.css" type="text/css" media="only screen and (min-device-width:320px) and (max-device-width:640px)">
<title>動態節能省電系統</title>
</head>
<body>
<div class="rtb">
<?php
	if(isset($_GET['M']))
	{
		if($_GET['M']=="c")@(include "Control_stat.php");
		else if($_GET['M']=="start")@(include "phpstart.php");
		else if($_GET['M']=="stop")@(include "phpstop.php");
		else if($_GET['M']=="pi")@(include "phprunpi.php");
		else if($_GET['M']=="format")@(include "phpformat.php");
		else if($_GET['M']=="sleepd1")@(include "phpsleepd1.php");
		else if($_GET['M']=="sleepd2")@(include "phpsleepd2.php");
		else if($_GET['M']=="sleepd3")@(include "phpsleepd3.php");
		else if($_GET['M']=="waked1")@(include "phpwaked1.php");
		else if($_GET['M']=="waked2")@(include "phpwaked2.php");
		else if($_GET['M']=="waked3")@(include "phpwaked3.php");
		else if($_GET['M']=="opend1")@(include "phpopend1.php");
		else if($_GET['M']=="opend2")@(include "phpopend2.php");
		else if($_GET['M']=="opend3")@(include "phpopend3.php");
		else if($_GET['M']=="closed1")@(include "phpclosed1.php");
		else if($_GET['M']=="closed2")@(include "phpclosed2.php");
		else if($_GET['M']=="closed3")@(include "phpclosed3.php");
		else if($_GET['M']=="checkstat")@(include "phpcheck.php");
		else if($_GET['M']=="cpud1")@(include "phpcpud1.php");
		else if($_GET['M']=="cpud2")@(include "phpcpud2.php");
		else if($_GET['M']=="cpud3")@(include "phpcpud3.php");
		else if($_GET['M']=="shutd1")@(include "phpshutdownd1.php");
		else if($_GET['M']=="shutd2")@(include "phpshutdownd2.php");
		else if($_GET['M']=="shutd3")@(include "phpshutdownd3.php");
		else if($_GET['M']=="allcpu")@(include "phpallcpu.php");
		else if($_GET['M']=="jpsd1")@(include "phpjpsd1.php");
		else if($_GET['M']=="jpsd2")@(include "phpjpsd2.php");
		else if($_GET['M']=="jpsd3")@(include "phpjpsd3.php");
		else @(include "Default.php");
		}
	else
	{
		@(include "Default.php");
		}
?>
</div>
<div class="mfb">
<?php
	if(isset($_GET['M']))
	{
		if($_GET['M']=="C")@(include "Control_main.php");
		else if($_GET['M']=="start")@(include "Control_main.php");
		else if($_GET['M']=="stop")@(include "Control_main.php");
		else if($_GET['M']=="pi")@(include "Control_main.php");
		else if($_GET['M']=="format")@(include "Control_main.php");
		else if($_GET['M']=="sleepd1")@(include "Control_main.php");
		else if($_GET['M']=="sleepd2")@(include "Control_main.php");
		else if($_GET['M']=="sleepd3")@(include "Control_main.php");
		else if($_GET['M']=="waked1")@(include "Control_main.php");
		else if($_GET['M']=="waked2")@(include "Control_main.php");
		else if($_GET['M']=="waked3")@(include "Control_main.php");
		else if($_GET['M']=="opend1")@(include "Control_main.php");
		else if($_GET['M']=="opend2")@(include "Control_main.php");
		else if($_GET['M']=="opend3")@(include "Control_main.php");
		else if($_GET['M']=="closed1")@(include "Control_main.php");
		else if($_GET['M']=="closed2")@(include "Control_main.php");
		else if($_GET['M']=="closed3")@(include "Control_main.php");
		else if($_GET['M']=="checkstat")@(include "Control_main.php");
		else if($_GET['M']=="cpud1")@(include "Control_main.php");
		else if($_GET['M']=="cpud2")@(include "Control_main.php");
		else if($_GET['M']=="cpud3")@(include "Control_main.php");
		else if($_GET['M']=="shutd1")@(include "Control_main.php");
		else if($_GET['M']=="shutd2")@(include "Control_main.php");
		else if($_GET['M']=="shutd3")@(include "Control_main.php");
		else if($_GET['M']=="allcpu")@(include "Control_main.php");
		else if($_GET['M']=="jpsd1")@(include "Control_main.php");
		else if($_GET['M']=="jpsd2")@(include "Control_main.php");
		else if($_GET['M']=="jpsd3")@(include "Control_main.php");
		else @(include "Home.php");
		}
	else
	{
		@(include "Home.php");
		}
?>
</div>
<div class="lfb">
<?php
	@(include "Control.php");
?>
</div>
<div class="tit"></div>
</body>
</html>
