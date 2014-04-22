<?php
	include ("../include/config.php");  
	$SECURE_SECRET = "932864918e25572d4cd873caaec2a7dc";
	
	$POST = array();
	$POST = $_REQUEST;
	
	if ($POST['paynet_Amount'] < 1000){
		die('so tien qua nho');
	}
	
	// L?y giá tr? url c?ng thanh toán
	$paynet_URL = $POST["virtualPaymentClientURL"] . "&";
	$time = time();
	//ad news record and store session
	
	$id = $this->objectHandler->add_news_record('payment_paygate', array(
		'amount' => $POST['paynet_Amount'],
		'uid' => $POST['paynet_Customer_Id'],
		'coupon' => '',
		'coupon_code' => $POST['pm_code'],
		'time' => $time
		)
	);
	$this->session->set_session('id',$id);     
	
	// b? giá tr? url và nút submit ra kh?i m?ng d? li?u
	unset($POST["virtualPaymentClientURL"]); 
	
	unset($POST['pm_code']);
	unset($POST['pm_coupon']);        
	
	// t?o chu?i d? li?u du?c b?t d?u b?ng khóa bí m?t
	$md5HashData = $SECURE_SECRET;

	// s?p x?p d? li?u theo th? t? a-z tru?c khi n?i l?i
	// arrange array data a-z before make a hash
	unset($POST['act']);
	ksort ($POST);
	
	// d?t tham s? d?m = 0
	$appendAmp = 0;

	foreach($POST as $key => $value) {

		// t?o chu?i d?u d? li?u nh?ng tham s? có d? li?u
		if (strlen($value) > 0) {
			// this ensures the first paramter of the URL is preceded by the '&' char
			if ($appendAmp == 0) {
				$paynet_URL .= urlencode($key) . '=' . urlencode($value);
				$appendAmp = 1;
			} else {
				$paynet_URL .= '&' . urlencode($key) . "=" . urlencode($value);
			}
			$md5HashData .= $value;
		}
	}

	// thêm giá tr? chu?i mã hóa d? li?u du?c t?o ra ? trên vào cu?i url
	if (strlen($SECURE_SECRET) > 0) {
		$paynet_URL .= "&paynet_SecureHash=" . strtoupper(md5($md5HashData));
	}

	// chuy?n trình duy?t sang c?ng thanh toán theo URL du?c t?o ra
	//echo $paynet_URL;        
	header("Location: ".$paynet_URL);

?>