<?php
include ("include/config.php");    
require_once('classes/class_user.php'); 
$cls_user = new User();    

$uid  = isset($_SESSION[uid])?$_SESSION[uid]:0;

if($uid<=0) header('Location: '.$_config["www"].'/account.php');

// Khóa bí m?t - du?c c?p b?i pay.net.vn
$SECURE_SECRET = "932864918e25572d4cd873caaec2a7dc";

$paynet_status = isset($_REQUEST['paynet_Code']) ? $_REQUEST['paynet_Code'] : 100;

if ($paynet_status == '100'){            
	$text = "Giao dịch hủy bỏ tại cổng thanh toán pay.net.vn";	
}

if ($paynet_status != "0"){	
	$text = isset($_REQUEST['paynet_Message']) ? $_REQUEST['paynet_Message'] : "";
}

if ($paynet_status == '0'){
	$post = $_REQUEST;
	
	unset($post['username']);
	unset($post['act']);
	unset($post['paynet_SecureHash']);
	
	$paygate_md5hash = $_REQUEST['paynet_SecureHash'];
	
	//$uid = $user_count['uid'];
			   
	$appendAmp = 0;
	
	ksort($post);
	
	$appendAmp = 0;
	$md5HashData = $SECURE_SECRET;
	foreach($post as $key => $value) {
		// create the md5 input and URL leaving out any fields that have no value
		// t?o chu?i d?u d? li?u nh?ng tham s? có d? li?u
		if (strlen($value) > 0) {
			$md5HashData .= $value;
		}
	}
	
	$content_payment = $md5HashData; 
	$md5HashData = strtoupper(md5($md5HashData));
	
	if ($md5HashData == $paygate_md5hash){	
		//giao dich thanh cong tinh toan luong tien cong vao cho khach hang
		$currency = isset($_REQUEST['paynet_Currency']) ? $_REQUEST['paynet_Currency'] : "VND";
		$amount = isset($_REQUEST['paynet_Amount']) ? $_REQUEST['paynet_Amount'] : 0;
		
		$paynet_orderinfo = isset($_REQUEST['paynet_OrderInfo']) ? $_REQUEST['paynet_OrderInfo'] : 0;
		
		$rate = 20000;
		
		if ($currency == "VND"){
			$amount = $amount / $rate;
		}		
		
		if($uid>0 && $amount>0){
			$user_info = $cls_user->plusMoney($uid, trim($amount));		
			mysql_query('' . 'insert into payments set payment_status=\'Completed\', advid=\''.$uid.'\', payment_amount = \''.$amount.'\',text = \''.addslashes($content_payment).'\', method=\'Card\', payment_time=\''.time().'\' ');	     
		}
	  
		//update new_amount
		$text = "<h3 style='font-size:16px; color:#ff6600; margin:10px 0;'>Bạn đã nạp tiền thành công qua cổng thanh toán pay.net.vn/h3>
						<hr style='height:1px; background:#f0f0f0; margin-bottom:10px; border:0 none;' />
						<h4 style='text-transform:uppercase; font-size:13px; margin-bottom:10px;'>Thông tin nạp tiền/h4>
						<table style='font-size:13px;'>
							<tr height='35'>
								<td width='100'>Số tiền đã nạp : </td>
								<td ><strong>{$amount}</strong> USD</td>
							</tr>							
						</table>";		
		                 
	}
	else{	   
		$text = "Có lỗi xảy ra trong quá trình thanh toán";	  
	}
}

$smarty->assign('text',$text);
$content = $smarty->fetch('success.tpl');
$smarty->assign('content',$content);
$smarty->display('master_page.tpl');
?>