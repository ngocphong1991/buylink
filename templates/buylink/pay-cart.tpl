<link type="text/css" rel="stylesheet" href="{$template_dir}/css/payment.css" />
{literal}
<script type="text/javascript">
jQuery(document).ready(function(){
    jQuery(".toggle_container").show();
    jQuery(".reach .toggle_container").show();

    jQuery("h2.trigger").click(function(){
        $(this).toggleClass("active").next().slideToggle("slow");
    });

    jQuery('#id_newadbutton').click(function(){
        window.location = base_url;
    });
    jQuery('#id_paymentbutton').click(function(){
        window.location = base_url;
    });
});
</script>
{/literal}
<script type="text/javascript">
var userphone = '{$my_profile.phone}';
var username = '{$my_profile.fullname}';
var useremail = '{$my_profile.email}';
</script>
<div class="wrapper paper">
<div class="container">
<div class="row">
{include file='left-menu.tpl'}
<div class="col-md-9 right-content-paper plus">
<div class="banner">
    <img src="{$template_dir}/images/ad.png">
</div>
<div class="right-inner">
<div class="full" id="content">
<h4 class="border-bold">N?p ti?n</h4>
<div id="contactErrors" class="formErrors"></div>
<div id="contactResults" class="formResults"></div>
<div class="blk-content">
            <div style="margin: 15px 0 30px 0;">
                 <p style="margin-bottom: 10px;"><i>Chúng tôi k?t n?i v?i c?ng thanh toán <a href="http://pay.net.vn"><b>Netlinkpay</b></a>, b?n vui lòng xem k? ?i?u kho?n s? d?ng d?ch v? <a href="#" style="color: #000;"><strong>T?I ?ÂY</strong></a></i></p>
                <p style=" color: #000; margin-bottom: 10px;"><b>Hình th?c thanh toán ?a d?ng, ti?n l?i và nhanh chóng</b></p>
                <ul class="pkg" style="color: #333;">
                    <li style="padding-left: 10px;list-style:inside square; margin-bottom: 5px;">Thanh toán tr?c tuy?n b?ng th? tín d?ng qu?c t? Visa, Master card ho?c chuy?n kho?n qua Internet Banking</li>
                    <li style="padding-left: 10px;list-style:inside square; margin-bottom: 5px;">Thanh toán b?ng các lo?i th? n?i ??a - ATM do các ngân hàng n?i ??a phát hành</li>
                </ul>
            </div>

            <h3 style="margin-bottom:10px; background: #E84524; font-size: 15px; color: #fff; padding: 8px 10px;">L?a ch?n ph??ng th?c n?p ti?n</h3>
<script type="text/javascript">
var phone_number = '{$my_profile.phone}';
</script>
<div class="method pkg">
    <img src="https://www.paypal.com/en_US/i/logo/paypal_logo.gif" width="60" style="float: left; margin-right: 35px;" />
    <div class="method-inner">
    <div class="btn-choose"></div>
    <div class="method-cnt">
        <div id="h4op1">
            <h4 class="title"><input id="check_addfund1" type="radio" style="float: left; margin:5px 5px 0 0;" />
            <a href="{$_config.www}/payments.php">N?p ti?n b?ng Paypal</a><img id="img_addfund1" class="img-paytype-select" style="display: none;" src="http://advertiser.ad360.vn/images/default/support_ok.jpg" alt=""></h4>
            <div class="bank-list">
                <ul class="pkg">
                    <li><img src="https://www.paypal.com/en_US/i/logo/paypal_logo.gif"></li>
                </ul>
            </div>
        </div>

         <div id="success_card"></div>
         <div id="nav_addfund1" style="float: right; display: none;">

		 <a href="{$_config.www}/payments.php" title="Ti?p t?c thanh toán" class="btn con-btn"> Ti?p t?c </a>
    </div>
    </div>
</div>
            <div class="method pkg">
     <img src="http://advertiser.ad360.vn/images/default/pay_visa.jpg" style="float: left; margin-right: 30px;" />
    <div class="method-inner">
    <div class="btn-choose"></div>
    <div class="method-cnt">
    <div id="h4op2">
        <h4 class="title" ><input id='check_addfund2' type="radio" style="float: left; margin:5px 5px 0 0;" /><a>N?p ti?n online dùng Visa, Master Card, th? ATM, tài kho?n có Internet Banking</a><img id="img_addfund2" class="img-paytype-select" style="display: none;" src="http://advertiser.ad360.vn/images/default/support_ok.jpg" alt=""></h4>
        <p class="sub-title">N?p ti?n nhanh g?n và có th? s? d?ng ngay d?ch v? sau khi thanh toán.</p>

        <div class="bank-list">
            <img src="http://advertiser.ad360.vn/images/default/logo_NH.jpg">
        </div>
    </div>
    <div class="custom-info pkg" id = 'addfund2' style="display: none;">
    	<form action="{$_config.www}/paynet_noidia/test_action.php" method="post" enctype="multipart/form-data" id="paygate">
            <div class="row pkg">
                <div class="pleft"><strong class="lb">S? ti?n mu?n n?p </strong> <span class="red"> * </span></div>
                <div class="pright">
                    <input type="text" style="width:255px;" class="txt2" id="visa_amount" name="paynet_Amount">
                </div>
            </div><!--row-->
            <div class="row pkg">
                <div class="pright">
                    <p style="width:350px; font-size:11px; color:#F00; margin:5px 0;">B?n s? ti?p t?c th?c hi?n n?p ti?n t?i c?ng thanh toán ? b??c ti?p theo</p>
                </div>
            </div>
			<!--row-->
			<br />
            <!--row-->
             <div class="row">
                 <div style="margin-left:165px;" class="pright">
                      <input type="hidden" value="http://pay.net.vn:8080/?act=paymentGate" name="virtualPaymentClientURL">
                     <input type="hidden" value="textlink.vn" name="paynet_Merchant">
                     <input type="hidden" value="PAYNET-1341801706521" name="paynet_OrderInfo">
                     <input type="hidden" value="http://textlink.vn/success.php?act=paygateInfo" name="paynet_ReturnURL">
                     <input type="hidden" value="VND" name="paynet_Currency">
                     <input type="hidden" value="{$user_info.uid}" name="paynet_Customer_Id">
                     <input type="hidden" value="{$user_info.email}" name="paynet_Email">
                     <input type="hidden" value="{$user_info.phone}" name="paynet_Phone">
                     <input type="hidden" value="paygateAction" name="act">
                     <input type="button" onclick="return paygateSubmit('paygate');" class="btn normal-btn" value="Ti?p t?c">
                     <input type="reset" onclick="tb_remove()" class="btn normal-btn grey-btn" value="B? qua">
                 </div>
             </div>
			 <div style=" margin-top:20px;"> T? giá: 1USD = 21.000 VN?</div>
     </form>
     </div>
    <div id="nav_addfund2" style="float: right; display: none;"><input type="button" value="Ti?p t?c" class="btn con-btn"></div>
    </div>
    </div>
</div><!--method-->
            <div class="method pkg">
    <img src="http://advertiser.ad360.vn/images/default/pay_atm.jpg" style="float: left; margin-right: 30px;" />
    <div class="method-inner active">
        <div class="btn-choose"></div>
        <div class="method-cnt">
            <div id="h4op3">
                <h4 class="title" ><input id="check_addfund3" type="radio" style="float: left; margin:5px 5px 0 0;" /><a>Chuy?n kho?n qua máy ATM ho?c t?i Ngân hàng</a><img id="img_addfund3" class="img-paytype-select" style="display: none;" src="http://advertiser.ad360.vn/images/default/support_ok.jpg" alt=""></h4>
                <p class="sub-title">(Quý khách t? thanh toán chi phí chuy?n kho?n) <br>
                    Quý khách chuy?n ti?n vào tài kho?n c?a TextLink. Quý khách ph?i ch? t? 4-24 gi? ?? TextLink xác nh?n thông tin.<br>
                </p>
            </div>
            <div class="bank-list" id="addfund3" style="display: none;">
                <h4 class="sub-title">B?n vui lòng l?a ch?n ngân hàng mu?n chuy?n kho?n</h4>
                <ul class="pkg">
                    {section name=i loop=$all_bank}
                    <li><a href="javascript:void(0);"><img src="{$all_bank[i].image}" onclick="_hide('addfund3');_show('bank{$all_bank[i].bank_id}');_assign('bank{$all_bank[i].bank_id}')"></a></li>
                    {/section}
                </ul>
            </div>
            {section name=i loop=$all_bank}
            <!--Bank 3-->
            <div id="bank{$all_bank[i].bank_id}" style="display: none;">
                <hr class="line" />
                <h4 class="sub-title">Thông tin tài kho?n c?a TextLink, quý khách vui lòng chuy?n kho?n qua internet Bankking ho?c n?p ti?n tr?c ti?p t?i qu?y ngân hàng</h4>
                <div class="bank-info pkg">
                    <div class="left bank-img"><img src="{$all_bank[i].image}" /></div>

                    <div class="left info">
                        <p><strong>{$all_bank[i].branch}</strong></p>
                        <p><strong>S? TK: </strong>{$all_bank[i].bank_no}</p>
                        <p><strong>Ch? tài kho?n:</strong> {$all_bank[i].holders}</p>
                        <a class="back-go-info" href="javascript:void(0);" onclick="_hidebank();_show('addfund3');">Ch?n ngân hàng khác</a>
                    </div>
                </div>
            </div>
            <!--Bank 3-->
            {/section}
            <!--FORM-->

            <form action="" method="post" enctype="multipart/form-data" id="info-form" style="display: none;" >
            <div id="pay_card_now">
                <div class="custom-info pkg">
                    <div class="row pkg">
                            <div class="pleft"><strong class="lb">H? và tên </strong> <span class="red"> * </span></div>
                            <div class="pright">
                                <input type="text" class="txt2" style="width:255px;" name="pm_name" id="atm_name" />
                            </div>
                     </div><!--row-->
                     <div class="row pkg">
                            <div class="pleft"><strong class="lb">Email </strong> <span class="red"> * </span></div>
                            <div class="pright">
                                <input type="text" class="txt2" style="width:255px;" name="pm_email" id="atm_email" />
                            </div>
                     </div><!--row-->
                     <div class="row pkg">
                            <div class="pleft"><strong class="lb">S? ?i?n tho?i </strong> <span class="red"> * </span></div>
                            <div class="pright">
                                <input type="text" class="txt2" style="width:255px;" name="pm_phone" id="atm_phone"/>
                            </div>
                     </div><!--row-->
                     <div class="row pkg">
                            <div class="pleft"><strong class="lb">S? ti?n mu?n n?p</strong> <span class="red"> * </span></div>
                            <div class="pright">
                                <input ty-pe="text" class="txt2" style="width:155px; margin-right:5px;" name="pm_money" id="atm_money"/> <span style="">VN? (Nh?p d?ng s?)</span>
                            </div>
                     </div><!--row-->
                     <hr class="line" />
                     <div class="row">
                         <div class="pright" style="margin-left:160px;">
                            <input type="hidden" value="0" name="pm_bank" id="atm_bank">
                            <input type="button" value="Ti?p t?c" class="btn normal-btn" name="bank_continue" id="btnsub_pay_atm" />
                            <img class="btn" id="load_pay_atm" src="http://advertiser.ad360.vn/images/default/extend/ajax-loader.gif" alt="Loadding" style="display: none;">
                            <input type="reset" class="btn normal-btn grey-btn" value="B? qua" onclick="tb_remove()"/>
                        </div>
                     </div>
                </div>
            </div>
			<div style=" margin-top:10px;"> T? giá: 1USD = 21.000 VN?</div>
            </form>

            <!--FORM-->
        </div>
        <div id="nav_addfund3" style="float: right; display: none;"><input type="button" value="Ti?p t?c" class="btn con-btn"></div>
        <div id="hiddenModalContent_atm" style="display:none">
            <div id="report_atm"></div>
         </div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="{$template_dir}/js/js-contact.js"></script>
<script type="text/javascript" src="{$template_dir}/js/pay_cart.js"></script>
<script type="text/javascript" src="{$template_dir}/js/addfunds.js?1"></script>
