<?php
include ("include/config.php");
include_once("global.php");
$msg = "";

$smarty->assign('rand1',rand(1, 10));
$smarty->assign('rand2',rand(5, 15));

require('classes/class_bank.php'); $cls_bank = new Bank(); $smarty->assign('cls_bank', $cls_bank);
require('classes/class_pay_atm.php'); $cls_pay_atm = new PayAtm(); $smarty->assign('cls_pay_atm', $cls_pay_atm);
require('classes/class_pay_direct.php'); $cls_pay_direct = new PayDirect(); $smarty->assign('cls_pay_direct', $cls_pay_direct);
$smarty->assign('cls_user', $cls_user);
$my_profile = $cls_user->getMyProfile();
$smarty->assign('my_profile', $my_profile);
$all_bank = $cls_bank->getAll('');
$smarty->assign('all_bank', $all_bank);

if($_GET['act']=='pay_atm') {
    if ($my_profile['uid']=='') die('0');
    
    $atm_name = $_POST['atm_name'];
    $atm_email = $_POST['atm_email'];
    $atm_phone = $_POST['atm_phone'];
    $atm_money = $_POST['atm_money'];
    $atm_bank = $_POST['atm_bank']; $atm_bank = str_replace('bank', '', $atm_bank);
    $f = 'uid, bank_id, fullname, email, phone, money, reg_date';
    $v = "'".$my_profile['uid']."'";
    $v .= ",'".addslashes($atm_bank)."'";
    $v .= ",'".addslashes($atm_name)."'";
    $v .= ",'".addslashes($atm_email)."'";
    $v .= ",'".addslashes($atm_phone)."'";
    $v .= ",'".addslashes($atm_money)."'";
    $v .= ",'".time()."'";
    
    $oneBank = $cls_bank->getOne($atm_bank);
    $res = '
    <p><span class="red">TextLink sẽ liên lạc sớm nhất với quý khách theo thông tin dưới đây:</span></p>
    
<div class="pay-sum">
    <h4>Thông tin chuyển khoản</h4>
    <div class="row">
        <p><label>Họ và tên : </label><span>'.$atm_name.'</span></p>
        <p><label>Email : </label><span>'.$atm_email.'</span></p>
        <p><label>Số điện thoại : </label><span>'.$atm_phone.'</span></p>
    </div>
    
    <div class="row">
        <p><label>Ngân Hàng : </label><span><strong>'.$oneBank['name'].'</strong></span></p>
        <p><label>Số tiền muốn nạp : </label><span><strong>'.$atm_money.' VNĐ</strong></span></p>                        
    </div>
        <center><input type="button" class="btn normal-btn" value="Đóng" onclick="tb_remove()"></center>
</div>
    ';
    
    if($cls_pay_atm->insertOne($f, $v)) die($res);
    else die('0');
    
}

if($_GET['act']=='pay_direct') {
    if ($my_profile['uid']=='') die('0');
    
    $direct_name = $_POST['direct_name'];
    $direct_email = $_POST['direct_email'];
    $direct_phone = $_POST['direct_phone'];
    $direct_address = $_POST['direct_address'];
    $direct_district = $_POST['direct_district'];
    $direct_city = $_POST['direct_city'];
    $direct_time = $_POST['direct_time'];
    
    $f = 'uid, fullname, email, phone, address, district, city, to_date, reg_date';
    $v = "'".$my_profile['uid']."'";
    $v .= ",'".addslashes($direct_name)."'";
    $v .= ",'".addslashes($direct_email)."'";
    $v .= ",'".addslashes($direct_phone)."'";
    $v .= ",'".addslashes($direct_address)."'";
    $v .= ",'".addslashes($direct_district)."'";
    $v .= ",'".addslashes($direct_city)."'";
    $v .= ",'".addslashes($direct_time)."'";
    $v .= ",'".time()."'";
    
    $res = '
    <p><span class="red">TextLink sẽ liên lạc sớm nhất với quý khách theo thông tin dưới đây:</span></p>    
	<div class="pay-sum">
    <h4>Thông tin chuyển khoản</h4>
    <div class="row">
        <p><label>Họ và tên : </label><span>'.$direct_name.'</span></p>
        <p><label>Email : </label><span>'.$direct_email.'</span></p>
        <p><label>Số điện thoại : </label><span>'.$direct_phone.'</span></p>
    </div>
    
    <div class="row">
        <p><label>Địa chỉ : </label><span><strong>'.$direct_address.'</strong></span></p>
        <p><label>Quận/Huyện : </label><span><strong>'.$direct_district.'</strong></span></p>
        <p><label>Tỉnh/Thành phố : </label><span><strong>'.$direct_city.'</strong></span></p>
        <p><label>Thời gian : </label><span><strong>'.$direct_time.'</strong></span></p>                        
    </div>
        <center><input type="button" class="btn normal-btn" value="Đóng" onclick="tb_remove()"></center>
</div>
    ';
    
    if($cls_pay_direct->insertOne($f, $v)) die($res);
    else die('0');
    
}

if($_SERVER['REQUEST_METHOD']=='POST' && $_POST['action']=="submit"){
    $data = $_POST['data'];
    
    $name = $data['name'];
    $bank = $data['bank'];
    $num = $data['num'];
    $date = $data['date'];
    $money = $data['money'];
    $email = $data['email'];
    $phone = $data['phone'];
    $address = $data['address'];
    $subject = $data['subject'];
    $body = $data['body'];
    
    $from    = $email;
    $to      = 'tien.pham@netlink.vn';
    $subject = 'Contact from TextLink: '.$subject;
    $message = '<p>Name: '.$name.'</p>
        <p>Email: '.$email.'</p>
        <p>Company: '.$company.'</p>
        <p>Phone: '.$phone.'</p>
        
        <br><br>Content: '.$body;
    $headers = 'From: '.$email. "\r\n" .
        'Reply-To: '.$to."\r\n" .
        'X-Mailer: PHP/' . phpversion();
    
    mail($to, $subject, $message, $headers);
    $smarty->assign('msg_contact', 'Liên hệ của bạn đã được gửi. Cám ơn bạn đã quan tâm đến TextLink, chúng tôi sẽ sớm hồi đáp lại cho bạn.');
    
}
$content = $smarty->fetch('pay-cart.tpl');
$smarty->assign('content',$content);
$smarty->display('master_page.tpl');
?>