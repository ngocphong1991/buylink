<?php
include ("include/config.php");
//mail('tien.pham@netlink.vn', 'test', 'test');
//die();
/*
	include_once("include/libs/template.mail.php");
	$to_email ="tien.pham@netlink.vn";
	$to_username =" Phạm Văn Tiến";
	$type ="register";
	$utype ='adv';
	mailTemplates($to_email, $to_username, $type, $utype);
	
	
	include_once("include/libs/template.mail.php");
	$to_email      = "tien.pham@netlink.vn";
	$type ="publisher_add_site";
	$publisher_arr = array();
	$publisher_arr[pid]= 10;
	$publisher_arr[url]= 'http://itmedia.vn';
	$to_username = "phamvantien";	  
	//$type='', $utype='', $publisher_arr = array(),$adv_arr=array()
	mailTemplates($to_email, $to_username, $type, '', $publisher_arr);	
	
	
	//cancel
	
	include_once("include/libs/template.mail.php");
	$to_email      = "tien.pham@netlink.vn";
	$type ="cancel";
	$publisher_arr = array();
	$publisher_arr[pid]= 10;
	$publisher_arr[url]= 'http://itmedia.vn';
	$to_username = "phamvantien";	  
	//$type='', $utype='', $publisher_arr = array(),$adv_arr=array()
	$utype='pub';
	mailTemplates($to_email, $to_username, $type, $utype, $publisher_arr);
	 */
	 //orderr
	 
	


	include_once("include/libs/template.mail.php");
	$to_email      = "tien.pham@netlink.vn";
	/*
	$type ="order";
	$publisher_arr = array();
	$publisher_arr[pid]= 10;
	$publisher_arr[url]= 'http://itmedia.vn';
	$to_username = "phamvantien";	  
	//$type='', $utype='', $publisher_arr = array(),$adv_arr=array()
	
	$user_arr[order_id] = '#23224';
	$user_arr[total_price] = '3000';
	$user_arr[discount] = '10';
	
	$user_arr[address] = '130B thái thịnh đống đa - Hà Nội';
	$user_arr[city] = 'Hà nội';
	
	$adv_arr[] = array('adv_id'=>123, 'pub_url'=>'dantri.com.vn', 'price'=>10,'url'=>'dantri.com.vn', 'ad_des'=>'Đọc tin dân trí mỗi ngày');
	$adv_arr[] = array('adv_id'=>456, 'pub_url'=>'linkhay.com.vn', 'price'=>23,'url'=>'top.com.vn', 'ad_des'=>'top ten news');
	
	$utype='pub';
	mailTemplates($to_email, $to_username, $type, $utype, $publisher_arr, $adv_arr, $user_arr);
	
	*/	
	  $subject = 'New Account Registration';
      $message = <<<EOF
<html>
  <body bgcolor="#DCEEFC">
   <p><u>$_config[www]</u> <br />
  Dear <strong> $to_username </strong>, thanks for  signing up to be a Textlink.vn publisher.  <textarea rows="10" id="Content" name="Content"><ul><li><a href='dantri.com.vn'>Doc bao khuyen hoc dan tri</a></li><li><a href='linkhay.com.vn'>Linkhay moi ngay</a></li><ul></textarea>
  So get started by&nbsp;<a href="$_config[www]/publishers.php?step=1" target="_blank">installing our ad code  now</a>&nbsp;and we look forward to  servicing you as a Textlink.vn publisher!<br />
  Textlink.vn Publisher  Support<br />
  <u>support@textlink.vn</u> <br />
  <u>http://textlink.vn</u> <br />
  117 Tran Duy Hung&nbsp; Street &nbsp; | &nbsp; 17th Floor Charmvit  Tower&nbsp; | &nbsp; Hanoi | &nbsp; (04).62698999 | &nbsp;&nbsp;<u><a href="$_config[www]">Textlink.vn</a></u> <br />
  &copy; 2012 Textlink.vn .  All rights reserved.</p>
  </body>
</html>
EOF;
$headers .= 'Content-type: text/html; charset=utf-8' . '';
$headers .= '' . 'To: ' . $to_username . '<' . $to_email . '>' . '';
$headers .= '' . 'From: ' . $_config['website_name'] . '<' . $_config['admin_email'] . '>' . '';
mail('tien.pham@netlink.vn', $subject, $message, $headers);
?>
