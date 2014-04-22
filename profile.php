<?php
include ("include/config.php");
include_once("global.php");
$msg = "";
if(!$_SESSION[uid] || $_SESSION[uid]<=0) exit();
$smarty->assign('cls_user', $cls_user);

require('classes/class_advertisersinfo.php'); $cls_advertisersinfo = new Advertisersinfo(); $smarty->assign('cls_advertisersinfo', $cls_advertisersinfo);
require('classes/class_country.php'); $cls_country = new Country(); $smarty->assign('cls_country', $cls_country);
require('classes/class_ref_user.php'); $cls_ref_user = new RefUser(); 
require('classes/class_transection.php'); $cls_transection = new Transection(); $smarty->assign('cls_transection', $cls_transection);
require('classes/class_payments.php'); $cls_payments = new Payments();

$pm_type = $_POST[pm_type];
$method='';
if($pm_type==2){
	$method =' and method="paypal"';
	$list_payments = $cls_payments->getAll('advid='.$_SESSION[uid].$method.'');

}elseif($pm_type==3){
	$method =' and method="Card"';
	$list_payments = $cls_payments->getAll('advid='.$_SESSION[uid].$method.'');
	
}elseif($pm_type==4){
	require('classes/class_session_pay.php'); $cls_session_pay = new SessionPay();
	$list_payments = $cls_session_pay->getAll('uid='.$_SESSION[uid].'');
	
	$smarty->assign('pm_type', 4);
}

$smarty->assign('genders',getGenders());
$smarty->assign('list_payments',$list_payments);
$pending_money = $cls_advertisersinfo->getPendingMoney();
$smarty->assign('pending_money',$pending_money);

$ref_val = $cls_ref_user->get_my_ref();
$affiliate_earnings = 0;
$affiliate_earnings = $cls_ref_user->getAffiliateEarning($_SESSION[uid],'arr');

if($ref_val)
$total_coupon = $cls_ref_user->getAffiliateFromAdv($_SESSION[uid],$ref_val);
$affiliate_earnings[refer_coupon]= $total_coupon;

$affiliate_earnings[total] =  my_money_format('%i',$affiliate_earnings[total] + $total_coupon);
$affiliate_earnings[publisher] =  my_money_format('%i',$affiliate_earnings[publisher]);
$affiliate_earnings[advertiser] =  my_money_format('%i',$affiliate_earnings[advertiser]);
if($_POST['action']=='update_info') {
    $myProfile = $cls_user->getMyProfile();
    $i = 0;
    foreach ($_POST['data'] as $key => $val) {
        if($val!=''){
            if($i==0) {
                $i++;
                $value = $key."='".addslashes($val)."'";
            } else {
                $value .= ",".$key."='".addslashes($val)."'";
            }
        }
    }
    if($cls_user->updateOne($myProfile['uid'], $value)) {
        $msg_profile = 'Your info has been changed';
    }
}
if($_POST['action']=='update_pass') {
    $myProfile = $cls_user->getMyProfile();
    
    if(strlen($_POST['data']['password'])<6) {
        $msg_profile = 'Your password at least 7 characters long';
    } else {
    
        if($_POST['data']['password']==$_POST['data']['password_confirm']) {
            $value = "password='".md5($_POST['data']['password'])."'";
            if($cls_user->updateOne($myProfile['uid'], $value)) {
                $msg_profile = 'Your password has been changed!';
            }
        } else {
            $msg_profile = 'Your password does not match';
        }
    }
}
if($_POST['action']=='update_email') {
    $myProfile = $cls_user->getMyProfile();

    if($_POST['data']['email_change']==$_POST['data']['email_change_confirm']) {
        $email_valid = isValid($_POST['data']['email_change'], 'email');
        if($email_valid==1) $msg_profile = "The email had exist.";
        elseif($email_valid==2){
            $value = "email='".$_POST['data']['email_change']."'";
            if($cls_user->updateOne($myProfile['uid'], $value)) {
                $msg_profile = 'Your email has been changed!';
            }
        }else $msg_profile = "The email not format correct";
    } else {
        $msg_profile = 'Your email does not match';
    }

}
$smarty->assign('msg_profile',$msg_profile);
$smarty->assign('affiliate_earnings',$affiliate_earnings);
$allCountry = $cls_country->getAll('');
$smarty->assign('allCountry',$allCountry);
$myProfile = $cls_user->getMyProfile();
$smarty->assign('myProfile',$myProfile);

/* */

if($_POST['action']=='data_trans') {
    if($cls_user->trans_money($_POST['data_trans'])) {
        $f = 'user_id, money, reg_date';
        $v = "'".$_SESSION['uid']."'";
        $v .= ",'".$_POST['data_trans']."'";
        $v .= ",'".time()."'";
        
        if($cls_transection->insertOne($f, $v)) $msg = "Transfer money successful";
        else $msg = "Error insert transection";
        
    } else $msg = "Error while transfer money";
    
    $smarty->assign('msg_profile', $msg);
}

$my_profile = $cls_user->getOne($_SESSION['uid']);
$smarty->assign('my_profile', $my_profile);

$pub_money_str = number_format($my_profile['pub_money']); $smarty->assign('pub_money_str', $pub_money_str);
$adv_money_str = number_format($my_profile['adv_money']); $smarty->assign('adv_money_str', $adv_money_str);

/* */

$affiliate_earnings=0; $affiliate_earnings = $cls_ref_user->getAffiliateEarning($_SESSION[uid]);
if($_SESSION['uid'] == '') header('location: '.$_config[www]);

$money = isset($_POST[data_trans])?intval($_POST[data_trans]):0;
$name_card = isset($_POST[fullname])?addslashes($_POST[fullname]):'';
$payment_method = isset($_POST[payment_method])?addslashes($_POST[payment_method]):'';
$name_bank = isset($_POST[name_of_bank])?addslashes($_POST[name_of_bank]):'';
$number_card = isset($_POST[number_account_bank])?intval($_POST[number_account_bank]):0;
$mobile = isset($_POST[mobile])?intval($_POST[mobile]):0;
$email_paypal = isset($_POST[paypal_email])?addslashes($_POST[paypal_email]):'';
$color = 'red';
$code = unique_id(7);
// check error 
if($_POST['action']=='data_withdraw'){    
	if($money<=0) $error[] = "Your money withdraw must be greater than 0.";		
	if(!$payment_method) $error[] = "Please choose your withdraw method.";
	
	if($_SESSION[uid]>0)
	$one = $cls_user->getOne($_SESSION[uid]);  
    if($money > $one['pub_money']) $error[] = "Your money withdraw must be smaller than your total money Publisher";        
	
	if($payment_method=='2' && $_SESSION[uid]){
    	if(!$name_card) $error[] = "Vui lòng nhập họ tên tài khoản nhận tiền.";
    	if(!$name_bank) $error[] = "Vui lòng điền thông tin ngân hàng mà bạn muốn nhận tiền.";
    	if(!$number_card) $error[] = "Vui lòng điền thông tin số tài khoản của bạn.";    
       
        if(count($error)==0 && $money>0 && $money <= $one['pub_money']){	
        	$res = mysql_query('' . 'INSERT INTO `withdraw` ( `user_id` , `money` , `withdraw_date` , `method` , `name_card` ,`number_card`, `phone` , `email_paypal` , `email` , `name_bank` , `code`) VALUES (\'' . $_SESSION['uid'] . '\', \'' . $money . '\', curdate(), \'' . $payment_method . '\', \'' . $name_card . '\', \'' . $number_card . '\', \'' . $phone . '\', \'' . $email_paypal . '\', \'' . $email . '\', \'' . $name_bank . '\', \'' . $code . '\' )');
        }
        if($money>0 && $res){
            $cls_user->WithDraw($money);
            $color ='green';
            $error[] = "Yêu cầu rút tiền của bạn đã được gửi tới ban quản trị.";
        }
	}
    elseif($payment_method=='1' && $_SESSION[uid]){
    	if(!$email_paypal) $error[] = "Please enter your PayPal email address.";
    	if(count($error)==0 && $money>0 && ($money < $one['pub_money'])){   		
    		
    		$res = mysql_query('' . 'INSERT INTO `withdraw` ( `user_id` , `money` , `withdraw_date` , `method` , `name_card` ,`number_card`, `phone` , `email_paypal` , `email` , `name_bank` , `code`) VALUES (\'' . $_SESSION['uid'] . '\', \'' . $money . '\', curdate(), \'' . $payment_method . '\', \'' . $name_card . '\', \'' . $number_card . '\', \'' . $phone . '\', \'' . $email_paypal . '\', \'' . $email . '\', \'' . $name_bank . '\', \'' . $code . '\' )');
    		
    		if($money>0 && $res)
    		$cls_user->WithDraw($money);
    		$color ='green';
    		$error[] = "Update successful we will transfer money to you in 24 hours.";
    	}
    }
    $smarty->assign('error', $error);
    $smarty->assign('color', $color);        
}

// Money history
/**/
$smarty->assign('page', isset($_GET['page']) && $_GET['page'] && in_array($_GET['page'], array('history', 'money', 'money_coupon','transfer'))  ? $_GET['page'] : '');
$content = $smarty->fetch('profile.tpl');
$smarty->assign('content',$content);
$smarty->display('master_page.tpl');
?>