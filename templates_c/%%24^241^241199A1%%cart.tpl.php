<?php /* Smarty version 2.6.18, created on 2014-04-22 13:23:43
         compiled from cart.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'cart.tpl', 171, false),)), $this); ?>
<div class="wrapper paper">
<div class="container">
<div class="row">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'left-menu.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="col-md-9 right-content-paper plus">
<div class="banner">
    <img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/ad.png">
</div>
<div class="right-inner">
<?php echo '
<script type="text/javascript">
jQuery(document).ready(function(){
    jQuery(\'table.cart-tla input.txt2\').keyup(function(e){
        var $obj = jQuery(this).parents(\'table.cart-tla\');
        var valBefore = $obj.find(\'.txtBefore\').val();
        var valLink = $obj.find(\'.txtLink\').val();
        var valAfter = $obj.find(\'.txtAfter\').val();
        var valLinkHref = $obj.find(\'.txtLinkHref\').val();


        $obj.find(\'.valBefore\').text(valBefore);
        $obj.find(\'.valAfter\').text(valAfter);
        $obj.find(\'.valLink\').text(valLink);
        $obj.find(\'.valLink\').attr(\'href\',valLinkHref);
    });
    jQuery(\'#checkoutBtn\').click(function(){
        jQuery(\'#frmCheckOut\').submit();
    });
    jQuery.validator.messages.required = "";
    jQuery(\'#frmCheckOut\').validate();

    var totalPrice = 0;
    jQuery(\'.valuePrice\').each(function(){
        totalPrice+=parseInt(jQuery(this).val());
    });
    jQuery(\'#totalPrice\').text(numberFormat(totalPrice));
});
function numberFormat(nStr){
nStr += \'\';
x = nStr.split(\'.\');
x1 = x[0];
x2 = x.length > 1 ? \'.\' + x[1] : \'\';
var rgx = /(\\d+)(\\d{3})/;
while (rgx.test(x1))
x1 = x1.replace(rgx, \'$1\' + \',\' + \'$2\');
return x1 + x2;
}
</script>
'; ?>

<div id="maininner">
    <!-- <h1><a href="cart.php" class="style27">Your Basket</a></h1>-->
    <?php if ($this->_tpl_vars['act'] == ''): ?>
    <form action="" method="post" class="form-horizontal" id="frmCheckOut">
      <h4 class="border-bold super-bold">Thông tin giỏ hàng</h4>
        <table class="table table-striped">
            <tbody>
            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['allAdvertisersinfo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
            <?php $this->assign('onePublishersinfo', $this->_tpl_vars['cls_publishersinfo']->getOne($this->_tpl_vars['allAdvertisersinfo'][$this->_sections['i']['index']]['pid'])); ?>
                <tr>
                    <td>
                        <table class="table table-transparent">
                            <tbody>
                                <tr>
                                    <td colspan="2"><a target="_blank" href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/view-site.php?pid=<?php echo $this->_tpl_vars['onePublishersinfo']['pid']; ?>
"><strong><?php echo $this->_tpl_vars['onePublishersinfo']['websitename']; ?>
</strong></a></td>
                                </tr>
                                <tr>
                                    <td width="40%">Chuyên mục</td>
                                    <td>
                                        <?php $this->assign('lstCat', $this->_tpl_vars['cls_publishersinfo']->getListCat($this->_tpl_vars['onePublishersinfo']['pid'])); ?>
                                        <?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['lstCat']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?>
                                            <?php $this->assign('oneCat', $this->_tpl_vars['cls_category']->getOne($this->_tpl_vars['lstCat'][$this->_sections['j']['index']])); ?>
                                            <?php echo $this->_tpl_vars['oneCat']['category']; ?>
<?php if ($this->_sections['j']['last']): ?><?php else: ?><span> - </span><?php endif; ?>
                                        <?php endfor; endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Link popularity</td>
                                    <td><?php echo $this->_tpl_vars['onePublishersinfo']['google_page_rank']; ?>
/10</td>
                                </tr>
                                <tr>
                                    <td>Alexa rank</td>
                                    <td><?php echo $this->_tpl_vars['onePublishersinfo']['alexa_rank']; ?>
</td>
                                </tr>
                                <tr>
                                    <td>Giá/tháng</td>
                                    <td><?php echo $this->_tpl_vars['cls_publishersinfo']->getPrice($this->_tpl_vars['onePublishersinfo']['pid']); ?>
</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td width="54%">
                        <div class="control-group">
                            <?php if ($this->_tpl_vars['allAdvertisersinfo'][$this->_sections['i']['index']]['ad_before'] || $this->_tpl_vars['allAdvertisersinfo'][$this->_sections['i']['index']]['ad_des'] || $this->_tpl_vars['allAdvertisersinfo'][$this->_sections['i']['index']]['ad_after']): ?>
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Preview</label>
                                <div class="col-sm-6 preview">
                                    <p> <span><?php echo $this->_tpl_vars['allAdvertisersinfo'][$this->_sections['i']['index']]['ad_before']; ?>
</span><span> </span> <a target="_blank" href="<?php echo $this->_tpl_vars['allAdvertisersinfo'][$this->_sections['i']['index']]['ad_url']; ?>
"><?php echo $this->_tpl_vars['allAdvertisersinfo'][$this->_sections['i']['index']]['ad_des']; ?>
</a> <span> </span><span><?php echo $this->_tpl_vars['allAdvertisersinfo'][$this->_sections['i']['index']]['ad_after']; ?>
</span> </p>
                                </div>
                             </div>
                            <?php endif; ?>
                            <div  class="form-group">
                                <label class="col-sm-6 control-label" for="ad_before">Nội dung trước từ khóa</label>
                                <div class="col-sm-6">
                                    <input name="info[<?php echo $this->_tpl_vars['allAdvertisersinfo'][$this->_sections['i']['index']]['adv_id']; ?>
][ad_before]" id="ad_before" maxlength="40" class="txt2 txtBefore" type="text" value="<?php echo $this->_tpl_vars['allAdvertisersinfo'][$this->_sections['i']['index']]['ad_before']; ?>
">
                                </div>
                            </div>
                            <div  class="form-group">
                                <label class="col-sm-6 control-label" for="ad_des">Từ khóa</label>
                                <div class="col-sm-6">
                                    <input  name="info[<?php echo $this->_tpl_vars['allAdvertisersinfo'][$this->_sections['i']['index']]['adv_id']; ?>
][ad_des]" id="ad_des" maxlength="40" class="txt2 txtLink required" type="text" value="<?php echo $this->_tpl_vars['allAdvertisersinfo'][$this->_sections['i']['index']]['ad_des']; ?>
">
                                </div>
                            </div>
                            <div  class="form-group">
                                <label class="col-sm-6 control-label" for="ad_after">Nội dung sau từ khóa</label>
                                <div class="col-sm-6">
                                    <input  name="info[<?php echo $this->_tpl_vars['allAdvertisersinfo'][$this->_sections['i']['index']]['adv_id']; ?>
][ad_after]" id="ad_after" maxlength="40" class="txt2 txtAfter" type="text" value="<?php echo $this->_tpl_vars['allAdvertisersinfo'][$this->_sections['i']['index']]['ad_after']; ?>
">
                                </div>
                            </div>
                            <div  class="form-group">
                                <label class="col-sm-6 control-label" for="ad_url">Link website</label>
                                <div class="col-sm-6">
                                    <input maxlength="268"  name="info[<?php echo $this->_tpl_vars['allAdvertisersinfo'][$this->_sections['i']['index']]['adv_id']; ?>
][ad_url]" id="ad_url" class="txt2 txtLinkHref required url" type="text" value="<?php if ($this->_tpl_vars['allAdvertisersinfo'][$this->_sections['i']['index']]['ad_url'] == ''): ?>http://<?php else: ?><?php echo $this->_tpl_vars['allAdvertisersinfo'][$this->_sections['i']['index']]['ad_url']; ?>
<?php endif; ?>">
                                </div>
                            </div>
                            <div  class="form-group">
                                <div class="col-sm-offset-6 col-sm-6">
                                    <a class="button gray" href="?remove=<?php echo $this->_tpl_vars['allAdvertisersinfo'][$this->_sections['i']['index']]['adv_id']; ?>
"> Hủy</a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endfor; endif; ?>
            <tr class="danger checkout-total">
                <td>Tổng cộng</td>
                <td><span class="price"><?php echo $this->_tpl_vars['totalPriceStr']; ?>
 </span> <span class="font-grey">/ Tháng</span></td>
            </tr>
            <tr class="danger checkout-total">
                <td>Số dư tài khoản</td>
                <td><span class="price"><?php echo $this->_tpl_vars['yourMoneyStr']; ?>
</span></td>
            </tr>
            </tbody>
        </table>
	  <div class="pull-right">
          <button class="submit button blue jquery-corner" id="checkoutBtn">CHECK OUT</button>
       </div>
  </form>
      <?php endif; ?>
      <?php if ($this->_tpl_vars['act'] == 'checkout'): ?>
          <h4 class="border-bold super-bold">Checkout</h4>
      <div class="row">
	    <form action="" method="post" id="frmUpdate">
            <table class="table table-transparent">
              <tbody>
                <tr>
                  <td width="30%">Số dư tài khoản Advertiser</td>
                  <td ><?php echo $this->_tpl_vars['yourMoney']; ?>
</td>
                </tr>
                <tr>
                  <td>Số tiền phải trả</td>
                  <td ><?php echo $this->_tpl_vars['totalPrice']; ?>
</td>
                </tr>
                <tr>
                  <td>Ngày bắt đầu</td>
                  <td> <input id="start_date" type="text" value="<?php echo $this->_tpl_vars['start_date']; ?>
" name="start_date" class="date-pick" /></td>
                </tr>				
				 <tr>
                  <td>Thời hạn</td>
                  <td>
				  <select size="1" name="length" style="width:70px">				  
				  <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['length'],'output' => $this->_tpl_vars['length'],'selected' => $_POST['length']), $this);?>
				  
			      </select> Ngày</td>
                </tr>						
              </tbody>
            </table>
			<table border="0">
			<tr>
				<td colspan="2"> 
				<button type="submit" value="Update"  name="update_card" class="button gray">Cập nhật</button>
				</td>
				</tr>
			</table>
			</form>
			<?php if ($this->_tpl_vars['msg'] != ''): ?><p class="error"><span><?php echo $this->_tpl_vars['msg']; ?>
</span></p><?php endif; ?>
            <div id="promotion-section" class="alert-danger alert">
                <form action="" method="post" id="FormPromote">
                <table class="data large border-top promo" id="promotion-table">
                    <tbody>
                        <tr>
                            <td width="35%">
                                <strong>Bạn có mã khuyến mại không?</strong><br>
                                 Hãy điền chính xác để được chiết khấu!
                            </td>
                            <td width="65%">
                                <div class="col-md-12">
                                    <div class="col-md-5">
                                        <input size="16" onblur="if(this.value=='') this.value='Điền mã coupon'" onfocus="if(this.value=='Enter code here') this.value=''" value="Enter code here" name="promotion" style="color: rgb(136, 136, 136);" class="txt2" type="text">
                                     </div>
                                    <div class="col-md-7">
                                        <a onclick="$('#FormPromote').submit(); return false;" href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/cart/" style="margin-right: 10px;" class="button red">Submit</a>
                                    </div>
                                  </div>
                            </td>
                        </tr>
                    </tbody>
                    </table>
                </form>
            </div>
            <div class="row"> <a href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/payment" class="button blue-bold">Nạp Tiền</a> <a class="button blue-bold" href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/cart/?act=pay">Thanh Toán</a> </div>
          </div>
      <?php endif; ?>
      <?php if ($this->_tpl_vars['act'] == 'paysuccess'): ?>
        <h4 class="border-bold super-bold">Xác nhận thanh toán</h4>
        <div>
          <table class="table table-transparent">
              <tbody>
              <tr>
                  <td width="30%">Tổng tài khoản hiện tại</td>
                  <td><?php echo $this->_tpl_vars['yourMoney']; ?>
</td>
              </tr>
              <tr>
                <td>Tổng số tiền vừa thanh toán</td>
                <td>USD <?php echo $_GET['price']; ?>
</td>
              </tr>
            </tbody>
          </table>
          <div class="checkout_nav"> <a class="button blue-bold" href="<?php echo $this->_tpl_vars['_config']['www']; ?>
">Finish »</a> </div>
        </div>
      <?php endif; ?>
    <br>
  </div>
</div>
</div>
</div>
</div>
</div>
<?php echo '
<script type="text/javascript">
//new datepickr(\'start_date\', { dateFormat: \'Y-m-d\' });
</script>
'; ?>