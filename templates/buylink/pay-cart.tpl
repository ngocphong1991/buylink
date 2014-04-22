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
<h4 class="border-bold">Nạp tiền</h4>
<div id="contactErrors" class="formErrors"></div>
<div id="contactResults" class="formResults"></div>        
<div class="blk-content">
            <div style="margin: 15px 0 30px 0;">
                 <p style="margin-bottom: 10px;"><i>Chúng tôi kết nối với cổng thanh toán <a href="http://pay.net.vn"><b>Netlinkpay</b></a>, bạn vui lòng xem kĩ điều khoản sử dụng dịch vụ <a href="#" style="color: #000;"><strong>TẠI ĐÂY</strong></a></i></p>
                <p style=" color: #000; margin-bottom: 10px;"><b>Hình thức thanh toán đa dạng, tiện lợi và nhanh chóng</b></p>
                <ul class="pkg" style="color: #333;">
                    <li style="padding-left: 10px;list-style:inside square; margin-bottom: 5px;">Thanh toán trực tuyến bằng thẻ tín dụng quốc tế Visa, Master card hoặc chuyển khoản qua Internet Banking</li>
                    <li style="padding-left: 10px;list-style:inside square; margin-bottom: 5px;">Thanh toán bằng các loại thẻ nội địa - ATM do các ngân hàng nội địa phát hành</li>
                </ul>
            </div>
            
            <h3 style="margin-bottom:10px; background: #E84524; font-size: 15px; color: #fff; padding: 8px 10px;">Lựa chọn phương thức nạp tiền</h3>            
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
            <a href="{$_config.www}/payments.php">Nạp tiền bằng Paypal</a><img id="img_addfund1" class="img-paytype-select" style="display: none;" src="http://advertiser.ad360.vn/images/default/support_ok.jpg" alt=""></h4>
            <div class="bank-list">
                <ul class="pkg">
                    <li><img src="https://www.paypal.com/en_US/i/logo/paypal_logo.gif"></li>
                </ul>
            </div>
        </div>
        
         <div id="success_card"></div>
         <div id="nav_addfund1" style="float: right; display: none;">
		 
		 <a href="{$_config.www}/payments.php" title="Tiếp tục thanh toán" class="btn con-btn"> Tiếp tục </a>
    </div>
    </div>
</div>
            <div class="method pkg">
     <img src="http://advertiser.ad360.vn/images/default/pay_visa.jpg" style="float: left; margin-right: 30px;" />
    <div class="method-inner">
    <div class="btn-choose"></div>
    <div class="method-cnt">
    <div id="h4op2">
        <h4 class="title" ><input id='check_addfund2' type="radio" style="float: left; margin:5px 5px 0 0;" /><a>Nạp tiền online dùng Visa, Master Card, thẻ ATM, tài khoản có Internet Banking</a><img id="img_addfund2" class="img-paytype-select" style="display: none;" src="http://advertiser.ad360.vn/images/default/support_ok.jpg" alt=""></h4>
        <p class="sub-title">Nạp tiền nhanh gọn và có thể sử dụng ngay dịch vụ sau khi thanh toán.</p>
        
        <div class="bank-list">
            <img src="http://advertiser.ad360.vn/images/default/logo_NH.jpg">
        </div>
    </div>
    <div class="custom-info pkg" id = 'addfund2' style="display: none;">
    	<form action="{$_config.www}/paynet_noidia/test_action.php" method="post" enctype="multipart/form-data" id="paygate">
            <div class="row pkg">
                <div class="pleft"><strong class="lb">Số tiền muốn nạp </strong> <span class="red"> * </span></div>
                <div class="pright">
                    <input type="text" style="width:255px;" class="txt2" id="visa_amount" name="paynet_Amount">
                </div>
            </div><!--row-->                
            <div class="row pkg">
                <div class="pright">
                    <p style="width:350px; font-size:11px; color:#F00; margin:5px 0;">Bạn sẽ tiếp tục thực hiện nạp tiền tại cổng thanh toán ở bước tiếp theo</p>
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
                     <input type="button" onclick="return paygateSubmit('paygate');" class="btn normal-btn" value="Tiếp tục">
                     <input type="reset" onclick="tb_remove()" class="btn normal-btn grey-btn" value="Bỏ qua">
                 </div>
             </div>
			 <div style=" margin-top:20px;"> Tỷ giá: 1USD = 21.000 VNĐ</div>
     </form>
     </div>
    <div id="nav_addfund2" style="float: right; display: none;"><input type="button" value="Tiếp tục" class="btn con-btn"></div>
    </div>
    </div>
</div><!--method-->
            <div class="method pkg">
    <img src="http://advertiser.ad360.vn/images/default/pay_atm.jpg" style="float: left; margin-right: 30px;" />
    <div class="method-inner active">
        <div class="btn-choose"></div>
        <div class="method-cnt">
            <div id="h4op3">
                <h4 class="title" ><input id="check_addfund3" type="radio" style="float: left; margin:5px 5px 0 0;" /><a>Chuyển khoản qua máy ATM hoặc tại Ngân hàng</a><img id="img_addfund3" class="img-paytype-select" style="display: none;" src="http://advertiser.ad360.vn/images/default/support_ok.jpg" alt=""></h4>
                <p class="sub-title">(Quý khách tự thanh toán chi phí chuyển khoản) <br>
                    Quý khách chuyển tiền vào tài khoản của TextLink. Quý khách phải chờ từ 4-24 giờ để TextLink xác nhận thông tin.<br>
                </p>
            </div>
            <div class="bank-list" id="addfund3" style="display: none;">
                <h4 class="sub-title">Bạn vui lòng lựa chọn ngân hàng muốn chuyển khoản</h4>
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
                <h4 class="sub-title">Thông tin tài khoản của TextLink, quý khách vui lòng chuyển khoản qua internet Bankking hoặc nộp tiền trực tiếp tại quầy ngân hàng</h4>
                <div class="bank-info pkg">
                    <div class="left bank-img"><img src="{$all_bank[i].image}" /></div>

                    <div class="left info">
                        <p><strong>{$all_bank[i].branch}</strong></p>
                        <p><strong>Số TK: </strong>{$all_bank[i].bank_no}</p>
                        <p><strong>Chủ tài khoản:</strong> {$all_bank[i].holders}</p>
                        <a class="back-go-info" href="javascript:void(0);" onclick="_hidebank();_show('addfund3');">Chọn ngân hàng khác</a>
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
                            <div class="pleft"><strong class="lb">Họ và tên </strong> <span class="red"> * </span></div>
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
                            <div class="pleft"><strong class="lb">Số điện thoại </strong> <span class="red"> * </span></div>
                            <div class="pright">
                                <input type="text" class="txt2" style="width:255px;" name="pm_phone" id="atm_phone"/>
                            </div>
                     </div><!--row-->
                     <div class="row pkg">
                            <div class="pleft"><strong class="lb">Số tiền muốn nạp</strong> <span class="red"> * </span></div>
                            <div class="pright">
                                <input ty-pe="text" class="txt2" style="width:155px; margin-right:5px;" name="pm_money" id="atm_money"/> <span style="">VNĐ (Nhập dạng số)</span>
                            </div>
                     </div><!--row-->
                     <hr class="line" />                     
                     <div class="row">                     
                         <div class="pright" style="margin-left:160px;">
                            <input type="hidden" value="0" name="pm_bank" id="atm_bank">
                            <input type="button" value="Tiếp tục" class="btn normal-btn" name="bank_continue" id="btnsub_pay_atm" />
                            <img class="btn" id="load_pay_atm" src="http://advertiser.ad360.vn/images/default/extend/ajax-loader.gif" alt="Loadding" style="display: none;">
                            <input type="reset" class="btn normal-btn grey-btn" value="Bỏ qua" onclick="tb_remove()"/>
                        </div>
                     </div>
                </div>
            </div>
			<div style=" margin-top:10px;"> Tỷ giá: 1USD = 21.000 VNĐ</div> 
            </form>
           
            <!--FORM-->
        </div>
        <div id="nav_addfund3" style="float: right; display: none;"><input type="button" value="Tiếp tục" class="btn con-btn"></div>
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
