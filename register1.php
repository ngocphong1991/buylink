<?php
include ("include/config.php");
$msg = "";

if($_SERVER['REQUEST_METHOD']=='POST' && $_POST['action']=="register"){
    if(register_new_user($_POST)) {
        if($_config['approve_new_user'] == 'yes') {
            header("location: account.php?warning_msg=1");
            exit(0);
        } else {
            if($_POST['company']!='' && $_POST['pinfo']!='' && $_POST['pm_id']!='') {
                header("location: seller_mywebsites.php");
            } else {
                header("location: account.php");
            }
            exit(0);
        }
    } else {
        $msg = "There was a server error right this moment. Please try again later...";
    }
}

$country = get_list('country','country');
$smarty->assign('register_temp',$register_temp);
$smarty->assign('country',$country['country']);
$smarty->assign('msg',$msg);
$smarty->assign('payment_methods',get_payment_methods());
$smarty->assign('right_panel','off');
$content = $smarty->fetch('register.tpl');
$smarty->assign('content',$content);
$smarty->display('master_page.tpl');
?>