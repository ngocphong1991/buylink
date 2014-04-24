<?php /* Smarty version 2.6.18, created on 2014-04-23 03:06:03
         compiled from account.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'account.tpl', 235, false),array('modifier', 'nl2br', 'account.tpl', 1475, false),array('function', 'html_options', 'account.tpl', 379, false),array('function', 'math', 'account.tpl', 779, false),array('function', 'html_checkboxes', 'account.tpl', 1188, false),)), $this); ?>
<script src="js/SpryValidationTextField.js" type="text/javascript"></script>
<link href="js/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="js/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="js/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<?php if (isset ( $_GET['fpass'] )): ?>
<div id="main">
  
  <div class="form-wrp">
  <?php if ($this->_tpl_vars['msg'] != ''): ?>
  <?php echo $this->_tpl_vars['msg']; ?>

  <?php endif; ?>
  
    <div class="inner">
    <div class="reg">            
      <form  name="form1" class="reg-form" method="post" action="">
      <input type="hidden" value="2" name="register_step">
     
        <div class="pkg">
            <label><span class="red">*</span>Email của bạn</label>
            <input type="text" value="" style="width:250px" name="email" class="txt2">
        </div>
       
        <div class="pkg"><input name="get_pass" type="submit" style="float:right;" value="Gửi lại mật khẩu »" class="blue-btn"></div>
      </form>
      </div>

    <!--reg--> 
    </div>
    </div>  
  <BR />
  
  <?php echo $this->_tpl_vars['TIP']; ?>

  
  <br />
</div>
<?php elseif (isset ( $_GET['reset_password'] )): ?>
<div id="main">  
  <div class="form-wrp">  
          <div class="inner">
            <div class="reg">   
			<div style="padding:10">
			 <?php if ($this->_tpl_vars['msg'] != ''): ?>
			<p class="error"><span> <?php echo $this->_tpl_vars['msg']; ?>
</span></p>  
			  <?php endif; ?>        
              <form  name="form1" class="reg-form" method="post" action="">
			  <input type="hidden" value="2" name="update_password">			 
                <div class="pkg">
                	<label><span class="red">*</span>Nhập password mới</label>
                   <input name="password" size="30" type="password" id="password" class="txt2" />
                </div>
				  <div class="pkg">
                	<label><span class="red">*</span>Nhập lại password</label>
				<input name="confirm_password" size="30" type="password" id="pass" class="txt2" />
				</div>               
                <div class="pkg"><input name="submit_pass" type="submit" style="float:right;" value="Submit »" class="blue-btn"></div>
              </form>
			  </div>
              </div>            
            <!--reg--> 
          </div>
        </div>  
  <BR />
  
  <?php echo $this->_tpl_vars['TIP']; ?>

  
  <br />
</div>
<?php elseif ($_SESSION['uid'] == ''): ?>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'left-menu-user.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <div class="col-md-9 right-content">
                <img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/login.png" />
                <h4>LOGIN OR <a href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/register.php">REGISTER NEW ACCOUNT</a></h4>
                <form action="<?php echo $this->_tpl_vars['_config']['www']; ?>
/account.php" class="form-horizontal" id="loginForm" method="post">
                    <fieldset>
                        <div class="control-group">
                            <h5>Your account information</h5>
                            <input name="login" type="hidden" />
                            <?php if ($this->_tpl_vars['msg'] != ''): ?>
                                <div class="message-error"><span><?php echo $this->_tpl_vars['msg']; ?>
</span></div>
                            <?php endif; ?>
                            <div class="form-group" >
                                <label for="username" class="col-sm-3 control-label">Username <span>*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="col-sm-4 required" value="" id="username"  name="username" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-3 control-label">Password <span>*</span></label>
                                <div class="col-sm-9">
                                    <input type="password" class="col-sm-4 required" value="" id="password"  name="pass" >
                                </div>
                            </div>
                            <?php echo '
                                <!-- remove cache form of browser-->
                                <script type="application/javascript">
                                    jQuery(document).ready(function(){
                                        jQuery("#username").focus().attr("value","");
                                        jQuery("#password").attr("value","");
                                        jQuery.validator.messages.required = "";
                                        jQuery("#loginForm").validate();
                                    });
                                </script>
                            '; ?>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="save-pw" /> Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button class="submit button blue jquery-corner">Login</button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<?php elseif ($this->_tpl_vars['current_acc_page'] == 'home'): ?>
<div id="main">
  <h1><a href="account.php" class="style27"><?php if ($_SESSION['utype'] == 'adv'): ?><?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['_lang']['Publisher']; ?>
 & <?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php endif; ?> & <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
 ...</a></h1>
  <table width="100%" border="0">
    <tr>
      <td><h1 class="green"><?php echo $this->_tpl_vars['_lang']['Home']; ?>
</h1></td>
    </tr>
    <tr>
      <td class="style39"><?php echo $this->_tpl_vars['_lang']['your_control_panel']; ?>
</td>
    </tr>
    

    <tr>
      <td class="error"><?php echo $this->_tpl_vars['msg']; ?>
</td>
    </tr>
  </table>   
	
	      
  <div class="splitleft">
    <div class="box">
      <div align="left">
        <table width="100%" border="0">
          <tr>
            <td width="33%"><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Account_Status']; ?>
 </strong></span></td>
            <td width="33%"><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Account_Type']; ?>
 </strong></span></td>
            <td width="33%"><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Upgrade']; ?>
</strong></span></td>
          </tr>
          <tr>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></span></td>
          </tr>
          <tr>
            <td><span class="style38"><?php if ($this->_tpl_vars['status'] == '1'): ?><?php echo $this->_tpl_vars['_lang']['Live']; ?>
<?php else: ?><?php echo $this->_tpl_vars['_lang']['Inactive']; ?>
<?php endif; ?></span></td>
            <td><span class="style38"><?php if ($_SESSION['utype'] == 'adv'): ?><?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['_lang']['Publisher']; ?>
 & <?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php endif; ?></span></td>
            <td><?php if ($_SESSION['utype'] == 'adv'): ?><a href="account.php?upgrade"><?php echo $this->_tpl_vars['_lang']['upgrade_advertiser_publisher']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['_lang']['Already_Upgraded']; ?>
<?php endif; ?></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <BR />
  <div class="splitleft">
    <div class="box">
      <div align="left"> <?php if ($this->_tpl_vars['getnewsletter'] == 'N'): ?>
        <?php echo $this->_tpl_vars['_lang']['not_subscribed']; ?>
  <?php echo $this->_tpl_vars['_lang']['Newsletter2']; ?>
. <a href="?getNewsletter=Y"><?php echo $this->_tpl_vars['_lang']['Subscribe']; ?>
</a> <?php elseif ($this->_tpl_vars['getnewsletter'] == 'Y'): ?>
        <?php echo $this->_tpl_vars['_lang']['subscribed']; ?>
 <?php echo $this->_tpl_vars['_lang']['Newsletter2']; ?>
. <a href="?getNewsletter=N" ><?php echo $this->_tpl_vars['_lang']['Unsubscribe']; ?>
</a> <?php else: ?>
        <form action="" method="post">
          <table width="100%" border="0">
            <tr>
              <td colspan="4" class="style38"><strong><a href="seller_paymenthistory.html" class="style32"><?php echo $this->_tpl_vars['_lang']['would_you']; ?>
 <?php echo $this->_tpl_vars['_config']['website_name']; ?>
 <?php echo $this->_tpl_vars['_lang']['Newsletter2']; ?>
? </a></strong></td>
            </tr>
            <tr>
              <td colspan="4" class="style47"><?php echo $this->_tpl_vars['_lang']['not_currently_subscribed']; ?>
 </td>
            </tr>
            <tr>
              <td width="25%" class="style38">&nbsp;</td>
              <td width="25%" class="style38"><input name="getNewsletter" type="radio" value="Y" />
                <strong><a href="seller_paymenthistory.html" class="style32"><?php echo $this->_tpl_vars['_lang']['Yes']; ?>
</a></strong></td>
              <td width="25%" class="style38"><input name="getNewsletter" type="radio" value="N" checked="checked" />
                <strong><a href="seller_paymenthistory.html" class="style32"><?php echo $this->_tpl_vars['_lang']['No']; ?>
</a></strong></td>
              <td width="25%" class="style38"><input name="Newsletter" type="submit" id="Newsletter" value="<?php echo $this->_tpl_vars['_lang']['Update']; ?>
" /></td>
            </tr>
          </table>
        </form>
        <?php endif; ?> <strong><br />
        </strong></div>
    </div>
  </div>
  <?php echo $this->_tpl_vars['TIP']; ?>

  <br />
</div>
<?php elseif ($this->_tpl_vars['current_acc_page'] == 'current_ads'): ?>
<div id="main">
  <h1><a href="account.php" class="style27"><?php if ($_SESSION['utype'] == 'adv'): ?><?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['_lang']['Publisher']; ?>
 &amp; <?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php endif; ?> <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
 ...</a></h1>
  <table width="100%" border="0">
    <tr>
      <td><h1 class="green"><?php echo $this->_tpl_vars['_lang']['Current_Adverts_Running']; ?>
</h1></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
  <div class="splitleft">
    <div class="box">
      <div align="left">
        <table width="100%" border="0">
          <tr>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Ad']; ?>
</strong></span></td>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Ad_Start_Date']; ?>
 </strong></span></td>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Length']; ?>
 </strong></span></td>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Ad_Approved']; ?>
? </strong></span></td>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Cost']; ?>
</strong></span></td>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Edit']; ?>
</strong></span></td>
          </tr>
          <tr>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></span></td>
          </tr>
          <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['adinfo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['num']['show'] = true;
$this->_sections['num']['max'] = $this->_sections['num']['loop'];
$this->_sections['num']['step'] = 1;
$this->_sections['num']['start'] = $this->_sections['num']['step'] > 0 ? 0 : $this->_sections['num']['loop']-1;
if ($this->_sections['num']['show']) {
    $this->_sections['num']['total'] = $this->_sections['num']['loop'];
    if ($this->_sections['num']['total'] == 0)
        $this->_sections['num']['show'] = false;
} else
    $this->_sections['num']['total'] = 0;
if ($this->_sections['num']['show']):

            for ($this->_sections['num']['index'] = $this->_sections['num']['start'], $this->_sections['num']['iteration'] = 1;
                 $this->_sections['num']['iteration'] <= $this->_sections['num']['total'];
                 $this->_sections['num']['index'] += $this->_sections['num']['step'], $this->_sections['num']['iteration']++):
$this->_sections['num']['rownum'] = $this->_sections['num']['iteration'];
$this->_sections['num']['index_prev'] = $this->_sections['num']['index'] - $this->_sections['num']['step'];
$this->_sections['num']['index_next'] = $this->_sections['num']['index'] + $this->_sections['num']['step'];
$this->_sections['num']['first']      = ($this->_sections['num']['iteration'] == 1);
$this->_sections['num']['last']       = ($this->_sections['num']['iteration'] == $this->_sections['num']['total']);
?>
          <tr>
            <td><span class="style38"><?php echo $this->_tpl_vars['adinfo'][$this->_sections['num']['index']]['ad']; ?>
</span></td>
            <td><span class="style38"><?php echo ((is_array($_tmp=$this->_tpl_vars['adinfo'][$this->_sections['num']['index']]['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%y") : smarty_modifier_date_format($_tmp, "%d/%m/%y")); ?>
</span></td>
            <td><span class="style38">
			<?php if ($this->_tpl_vars['adinfo'][$this->_sections['num']['index']]['length'] == 'N/A'): ?>
			N/A
			<?php else: ?>
			<?php echo $this->_tpl_vars['adinfo'][$this->_sections['num']['index']]['length']; ?>
 Day(s)
			<?php endif; ?>
			</span></td>
            <td><span class="style38"><?php echo $this->_tpl_vars['adinfo'][$this->_sections['num']['index']]['status']; ?>
</span></td>
            <td><span class="style38"><?php echo $this->_tpl_vars['CURRENCY']; ?>
<?php echo $this->_tpl_vars['adinfo'][$this->_sections['num']['index']]['cost']; ?>
</span></td>
            <td><span class="style38"><?php if ($this->_tpl_vars['adinfo'][$this->_sections['num']['index']]['status'] != 'Awaiting Approval'): ?><a href="buy_ads.php?edit=1&adv_id=<?php echo $this->_tpl_vars['adinfo'][$this->_sections['num']['index']]['adv_id']; ?>
&order_product_id=<?php echo $this->_tpl_vars['adinfo'][$this->_sections['num']['index']]['ad_space_id']; ?>
&ref=true&advertisersinfo_edit=1"><?php echo $this->_tpl_vars['_lang']['Edit_Ad']; ?>
</a> <?php endif; ?></span></td>
          </tr>
          <?php endfor; endif; ?>
        </table>
      </div>
    </div>
  </div>
  <h1 class="green"><?php echo $this->_tpl_vars['_lang']['Rejected_Ads']; ?>
 </h1>
  <div class="splitleft">
    <div class="box">
      <div align="left">
        <table width="100%" border="0">
          <tr>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Ad']; ?>
</strong></span></td>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Ad_Start_Date']; ?>
 </strong></span></td>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Length']; ?>
 </strong></span></td>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Ad_Approved']; ?>
? </strong></span></td>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Cost']; ?>
</strong></span></td>
          </tr>
          <tr>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></span></td>
          </tr>
          <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['radinfo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['num']['show'] = true;
$this->_sections['num']['max'] = $this->_sections['num']['loop'];
$this->_sections['num']['step'] = 1;
$this->_sections['num']['start'] = $this->_sections['num']['step'] > 0 ? 0 : $this->_sections['num']['loop']-1;
if ($this->_sections['num']['show']) {
    $this->_sections['num']['total'] = $this->_sections['num']['loop'];
    if ($this->_sections['num']['total'] == 0)
        $this->_sections['num']['show'] = false;
} else
    $this->_sections['num']['total'] = 0;
if ($this->_sections['num']['show']):

            for ($this->_sections['num']['index'] = $this->_sections['num']['start'], $this->_sections['num']['iteration'] = 1;
                 $this->_sections['num']['iteration'] <= $this->_sections['num']['total'];
                 $this->_sections['num']['index'] += $this->_sections['num']['step'], $this->_sections['num']['iteration']++):
$this->_sections['num']['rownum'] = $this->_sections['num']['iteration'];
$this->_sections['num']['index_prev'] = $this->_sections['num']['index'] - $this->_sections['num']['step'];
$this->_sections['num']['index_next'] = $this->_sections['num']['index'] + $this->_sections['num']['step'];
$this->_sections['num']['first']      = ($this->_sections['num']['iteration'] == 1);
$this->_sections['num']['last']       = ($this->_sections['num']['iteration'] == $this->_sections['num']['total']);
?>
          <tr>
            <td><span class="style38"><?php echo $this->_tpl_vars['radinfo'][$this->_sections['num']['index']]['ad']; ?>
</span></td>
            <td><span class="style38"><?php echo ((is_array($_tmp=$this->_tpl_vars['radinfo'][$this->_sections['num']['index']]['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%y") : smarty_modifier_date_format($_tmp, "%d/%m/%y")); ?>
</span></td>
            <td><span class="style38"><?php echo $this->_tpl_vars['radinfo'][$this->_sections['num']['index']]['length']; ?>
 <?php echo $this->_tpl_vars['_lang']['Day']; ?>
 </span></td>
            <td><span class="style38"><?php echo $this->_tpl_vars['radinfo'][$this->_sections['num']['index']]['status']; ?>
 - <a href="account.php?denied_adv_id=<?php echo $this->_tpl_vars['radinfo'][$this->_sections['num']['index']]['adv_id']; ?>
"><?php echo $this->_tpl_vars['_lang']['View_Reason']; ?>
</a></span></td>
            <td><span class="style38"><?php echo $this->_tpl_vars['CURRENCY']; ?>
<?php echo $this->_tpl_vars['radinfo'][$this->_sections['num']['index']]['cost']; ?>
</span></td>
          </tr>
          <?php endfor; endif; ?>
        </table>
        <strong><br />
        </strong></div>
    </div>
  </div>
  <?php echo $this->_tpl_vars['TIP']; ?>

  <br />
</div>
<?php elseif ($this->_tpl_vars['current_acc_page'] == 'live_ads'): ?>
<div id="main">
  <h1><a href="account.php" class="style27"><?php if ($_SESSION['utype'] == 'adv'): ?><?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['_lang']['Publisher']; ?>
 &amp; <?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php endif; ?> <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
 ...</a></h1>
  <table width="100%" border="0">
    <tr>
      <td><h1 class="green"><?php echo $this->_tpl_vars['_lang']['Live_Ad_Stats']; ?>
 </h1></td>
    </tr>
    <tr>
      <td class="style39"><div align="right"><strong><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/txt_ad.png" alt="" width="16" height="16" border="0" align="absmiddle" /> - <?php echo $this->_tpl_vars['_lang']['Text_Ads']; ?>
 <img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/vdo_ad.png" alt="" width="16" height="16" border="0" align="absmiddle" /> - <?php echo $this->_tpl_vars['_lang']['Video']; ?>
 <img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/img_ad.png" alt="" width="16" height="16" border="0" align="absmiddle" /> - <?php echo $this->_tpl_vars['_lang']['Image_Ads']; ?>
 </strong></div></td>
    </tr>
  </table>
  <table width="100%" border="0" align="center">
    <tr>
      <td width="100%"><div class="splitleft">
          <div class="box">
            <div align="left">
              <table width="100%" border="0">
                <tr>
                  <td width="16%"><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Ad']; ?>
</strong></span></td>
                  <td width="11%"><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Length']; ?>
 </strong></span></td>
                  <td width="13%"><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Clicks_Today']; ?>
</strong></span></td>
                  <td width="12%"><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Clicks_Total']; ?>
 </strong></span></td>
                  <td width="18%"><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Impressions_Today']; ?>
 </strong></span></td>
                  <td width="17%"><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Impressions_Total']; ?>
</strong></span></td>
                  <td width="13%"><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Conversions']; ?>
</strong></span></td>
                </tr>
                <tr>
                  <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></td>
                  <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></td>
                  <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></td>
                  <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></td>
                  <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></td>
                  <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></td>
                  <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></td>
                </tr>
                <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['ladinfo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['num']['show'] = true;
$this->_sections['num']['max'] = $this->_sections['num']['loop'];
$this->_sections['num']['step'] = 1;
$this->_sections['num']['start'] = $this->_sections['num']['step'] > 0 ? 0 : $this->_sections['num']['loop']-1;
if ($this->_sections['num']['show']) {
    $this->_sections['num']['total'] = $this->_sections['num']['loop'];
    if ($this->_sections['num']['total'] == 0)
        $this->_sections['num']['show'] = false;
} else
    $this->_sections['num']['total'] = 0;
if ($this->_sections['num']['show']):

            for ($this->_sections['num']['index'] = $this->_sections['num']['start'], $this->_sections['num']['iteration'] = 1;
                 $this->_sections['num']['iteration'] <= $this->_sections['num']['total'];
                 $this->_sections['num']['index'] += $this->_sections['num']['step'], $this->_sections['num']['iteration']++):
$this->_sections['num']['rownum'] = $this->_sections['num']['iteration'];
$this->_sections['num']['index_prev'] = $this->_sections['num']['index'] - $this->_sections['num']['step'];
$this->_sections['num']['index_next'] = $this->_sections['num']['index'] + $this->_sections['num']['step'];
$this->_sections['num']['first']      = ($this->_sections['num']['iteration'] == 1);
$this->_sections['num']['last']       = ($this->_sections['num']['iteration'] == $this->_sections['num']['total']);
?>
                <tr>
                  <td><span class="style47"><?php echo $this->_tpl_vars['ladinfo'][$this->_sections['num']['index']]['ad']; ?>
 <img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/<?php echo $this->_tpl_vars['ladinfo'][$this->_sections['num']['index']]['AdType']; ?>
.png" alt="" width="16" height="16" border="0" align="absmiddle" /></span></td>
                  <td><span class="style47"><?php if ($this->_tpl_vars['ladinfo'][$this->_sections['num']['index']]['length'] != 'N/A'): ?><?php echo $this->_tpl_vars['ladinfo'][$this->_sections['num']['index']]['length']; ?>
 Day(s)<?php else: ?>N/A<?php endif; ?></span></td>
                  <td><span class="style47"><?php echo $this->_tpl_vars['ladinfo'][$this->_sections['num']['index']]['clicksToday']; ?>
</span></td>
                  <td><span class="style47"><?php echo $this->_tpl_vars['ladinfo'][$this->_sections['num']['index']]['clicksTotal']; ?>
</span></td>
                  <td><span class="style47"><?php echo $this->_tpl_vars['ladinfo'][$this->_sections['num']['index']]['impressionsToday']; ?>
</span></td>
                  <td><span class="style47"><?php echo $this->_tpl_vars['ladinfo'][$this->_sections['num']['index']]['impressionsTotal']; ?>
</span></td>
                  <td><span class="style47"><?php echo $this->_tpl_vars['ladinfo'][$this->_sections['num']['index']]['conversionsTotal']; ?>
</span></td>
                </tr>
                <?php endfor; endif; ?>
              </table>
            </div>
          </div>
        </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><h1><span class="green"><?php echo $this->_tpl_vars['_lang']['Targeted_Ad_Campaign_Stats']; ?>
 </span></h1></td>
    </tr>
  </table>
  <div class="splitleft">
    <div class="box">
      <div align="left">
        <table width="100%" border="0">
          <?php if ($this->_tpl_vars['acdmsg'] == 1): ?>
          <tr>
            <td colspan="7" class="error">Ad Campaign Deleted.</td>
          </tr>
          <?php endif; ?>
          <tr>
            <td width="17%"><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Campaign_Name']; ?>
 </strong></span></td>
            <td width="24%"><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Websites_Appeared_On']; ?>
 </strong></span></td>
            <td width="18%"><strong><?php echo $this->_tpl_vars['_lang']['Remaining_Budget']; ?>
 </strong></td>
            <td width="16%"><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Click_Through_Rate']; ?>
 </strong></span></td>
            <td width="13%"><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Clicks_Today']; ?>
 </strong></span></td>
            <td width="12%"><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Clicks_Total']; ?>
 </strong></span></td>
            <td width="12%"><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Action']; ?>
 </strong></span></td>
          </tr>
          <tr>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></td>
          </tr>
          <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['tadinfo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['num']['show'] = true;
$this->_sections['num']['max'] = $this->_sections['num']['loop'];
$this->_sections['num']['step'] = 1;
$this->_sections['num']['start'] = $this->_sections['num']['step'] > 0 ? 0 : $this->_sections['num']['loop']-1;
if ($this->_sections['num']['show']) {
    $this->_sections['num']['total'] = $this->_sections['num']['loop'];
    if ($this->_sections['num']['total'] == 0)
        $this->_sections['num']['show'] = false;
} else
    $this->_sections['num']['total'] = 0;
if ($this->_sections['num']['show']):

            for ($this->_sections['num']['index'] = $this->_sections['num']['start'], $this->_sections['num']['iteration'] = 1;
                 $this->_sections['num']['iteration'] <= $this->_sections['num']['total'];
                 $this->_sections['num']['index'] += $this->_sections['num']['step'], $this->_sections['num']['iteration']++):
$this->_sections['num']['rownum'] = $this->_sections['num']['iteration'];
$this->_sections['num']['index_prev'] = $this->_sections['num']['index'] - $this->_sections['num']['step'];
$this->_sections['num']['index_next'] = $this->_sections['num']['index'] + $this->_sections['num']['step'];
$this->_sections['num']['first']      = ($this->_sections['num']['iteration'] == 1);
$this->_sections['num']['last']       = ($this->_sections['num']['iteration'] == $this->_sections['num']['total']);
?>
          <tr>
            <td><span class="style47"><a href="ad_campaign.php?campaign=<?php echo $this->_tpl_vars['tadinfo'][$this->_sections['num']['index']]['cmp_id']; ?>
&edit"><?php echo $this->_tpl_vars['tadinfo'][$this->_sections['num']['index']]['cname']; ?>
</a> <img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/txt_ad.png" alt="" width="16" height="16" border="0" align="absmiddle" /></span></td>
            <td><span class="style47">
              <select name="wsao" onchange="void(0);" style="width: 100px;">
                
				<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['tadinfo'][$this->_sections['num']['index']]['wid'],'output' => $this->_tpl_vars['tadinfo'][$this->_sections['num']['index']]['wname']), $this);?>

            
              </select>
              </span></td>
            <td><span class="style38"><?php echo $this->_tpl_vars['CURRENCY']; ?>
<?php echo $this->_tpl_vars['tadinfo'][$this->_sections['num']['index']]['rbudget']; ?>
</span></td>
            <td><span class="style38"><?php echo $this->_tpl_vars['CURRENCY']; ?>
<?php echo $this->_tpl_vars['tadinfo'][$this->_sections['num']['index']]['cpc']; ?>
</span></td>
            <td><span class="style47"><?php echo $this->_tpl_vars['tadinfo'][$this->_sections['num']['index']]['clicksToday']; ?>
</span></td>
            <td><span class="style47"><?php echo $this->_tpl_vars['tadinfo'][$this->_sections['num']['index']]['clicksTotal']; ?>
</span></td>
            <td nowrap="nowrap"><?php if ($this->_tpl_vars['tadinfo'][$this->_sections['num']['index']]['pause_resume'] == 'Y'): ?><a href="account.php?live_ads&amp;pause_cmp_id=<?php echo $this->_tpl_vars['tadinfo'][$this->_sections['num']['index']]['cmp_id']; ?>
" title="Pause"><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/icon_arrow.gif" alt="Pause" width="19" height="16" border="0" align="absmiddle" /></a><?php else: ?><a href="account.php?live_ads&amp;resume_cmp_id=<?php echo $this->_tpl_vars['tadinfo'][$this->_sections['num']['index']]['cmp_id']; ?>
" title="Resume"><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/icon_arrow2.gif" alt="Resume" width="19" height="16" border="0" align="absmiddle" /></a><?php endif; ?>  <a href="account.php?live_ads&amp;delete_cmp_id=<?php echo $this->_tpl_vars['tadinfo'][$this->_sections['num']['index']]['cmp_id']; ?>
" onclick="javascript: return confirm('Do you really want to Delete this Ad Campaign?');" title="Delete"><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/icon_delete.gif" alt="Delete" width="19" height="16" border="0" align="absmiddle" /></a></td>
          </tr>
          <?php endfor; endif; ?>
        </table>
      </div>
    </div>
  </div>
  <?php echo $this->_tpl_vars['TIP']; ?>

  <br />
</div>
<?php elseif ($this->_tpl_vars['current_acc_page'] == 'detailed_ads'): ?>
<div id="main">
  <h1><a href="account.php" class="style27"><?php if ($_SESSION['utype'] == 'adv'): ?><?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['_lang']['Publisher']; ?>
 &amp; <?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php endif; ?> <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
 ...</a></h1>
  <table width="100%" border="0">
    <tr>
      <td><h1 class="green"><?php echo $this->_tpl_vars['_lang']['Detailed_Ad_Stats']; ?>
</h1></td>
    </tr>
    <tr>
      <td class="style6"><strong><?php echo $this->_tpl_vars['_lang']['stats_relate']; ?>
 </strong></td>
    </tr>
    <tr>
      <td><span class="error"><?php echo $this->_tpl_vars['msg']; ?>
</span></td>
    </tr>
    <tr>
      <td><strong><?php if ($_GET['show_from'] != '7'): ?><a href="account.php?show_from=7&detailed_ads"><?php endif; ?><?php echo $this->_tpl_vars['_lang']['ads_last_7']; ?>
<?php if ($_GET['show_from'] != '7'): ?></a><?php endif; ?>  | <?php if ($_GET['show_from'] != '30'): ?><a href="account.php?show_from=30&detailed_ads"><?php endif; ?><?php echo $this->_tpl_vars['_lang']['ads_last_month']; ?>
<?php if ($_GET['show_from'] != '30'): ?></a><?php endif; ?>  | <?php if ($_GET['show_from'] != '0'): ?><a href="account.php?show_from=0&detailed_ads"><?php endif; ?><?php echo $this->_tpl_vars['_lang']['show_finished_ads']; ?>
<?php if ($_GET['show_from'] != '0'): ?></a><?php endif; ?> |  <?php if ($_GET['show_from'] != ''): ?><a href="account.php?detailed_ads"><?php endif; ?><?php echo $this->_tpl_vars['_lang']['Show_All']; ?>
<?php if ($_GET['show_from'] == ''): ?></a><?php endif; ?></strong></td>
    </tr>
  </table>
  <div class="splitleft">
    <div class="box">
      <div align="left">
        <table width="100%" border="0">
          <tr>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Ad']; ?>
</strong></span></td>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Length']; ?>
 </strong></span></td>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Start_Date']; ?>
 </strong></span></td>
            <td><strong>End Date </strong></td>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Ad_Status']; ?>
 </strong></span></td>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Clicks_Total']; ?>
 </strong></span></td>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Impressions_Total']; ?>
</strong></span></td>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Conversions']; ?>
</strong></span></td>
          </tr>
          <tr>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></td>
            <td>&nbsp;</td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></span></td>
          </tr>
          <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['dadinfo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['num']['show'] = true;
$this->_sections['num']['max'] = $this->_sections['num']['loop'];
$this->_sections['num']['step'] = 1;
$this->_sections['num']['start'] = $this->_sections['num']['step'] > 0 ? 0 : $this->_sections['num']['loop']-1;
if ($this->_sections['num']['show']) {
    $this->_sections['num']['total'] = $this->_sections['num']['loop'];
    if ($this->_sections['num']['total'] == 0)
        $this->_sections['num']['show'] = false;
} else
    $this->_sections['num']['total'] = 0;
if ($this->_sections['num']['show']):

            for ($this->_sections['num']['index'] = $this->_sections['num']['start'], $this->_sections['num']['iteration'] = 1;
                 $this->_sections['num']['iteration'] <= $this->_sections['num']['total'];
                 $this->_sections['num']['index'] += $this->_sections['num']['step'], $this->_sections['num']['iteration']++):
$this->_sections['num']['rownum'] = $this->_sections['num']['iteration'];
$this->_sections['num']['index_prev'] = $this->_sections['num']['index'] - $this->_sections['num']['step'];
$this->_sections['num']['index_next'] = $this->_sections['num']['index'] + $this->_sections['num']['step'];
$this->_sections['num']['first']      = ($this->_sections['num']['iteration'] == 1);
$this->_sections['num']['last']       = ($this->_sections['num']['iteration'] == $this->_sections['num']['total']);
?>
          <tr>
            <td><span class="style38"><?php echo $this->_tpl_vars['dadinfo'][$this->_sections['num']['index']]['ad']; ?>
</span></td>
            <td><span class="style38"><?php echo $this->_tpl_vars['dadinfo'][$this->_sections['num']['index']]['length']; ?>
 Day(s)</span></td>
            <td><span class="style38"><?php echo ((is_array($_tmp=$this->_tpl_vars['dadinfo'][$this->_sections['num']['index']]['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%y") : smarty_modifier_date_format($_tmp, "%d/%m/%y")); ?>
</span></td>
            <td><span class="style38"><?php echo ((is_array($_tmp=$this->_tpl_vars['dadinfo'][$this->_sections['num']['index']]['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%y") : smarty_modifier_date_format($_tmp, "%d/%m/%y")); ?>
</span></td>
            <td><span class="style38"><?php echo $this->_tpl_vars['dadinfo'][$this->_sections['num']['index']]['status']; ?>
</span><?php if ($this->_tpl_vars['dadinfo'][$this->_sections['num']['index']]['status'] == 'Awaiting Approval'): ?><a href="account.php?detailed_ads&cancel_ad_id=<?php echo $this->_tpl_vars['dadinfo'][$this->_sections['num']['index']]['adv_id']; ?>
" onclick="javascript: return confirm('Do you really want to Cancel this Ad?\nYour account will be credited with the amount you paid for the ad.');"><?php echo $this->_tpl_vars['_lang']['Cancel_Ad']; ?>
</a><?php endif; ?></td>
            <td><span class="style38"><?php echo $this->_tpl_vars['dadinfo'][$this->_sections['num']['index']]['clicksTotal']; ?>
</span></td>
            <td><span class="style38"><?php echo $this->_tpl_vars['dadinfo'][$this->_sections['num']['index']]['impressionsTotal']; ?>
</span></td>
            <td><span class="style38"><?php echo $this->_tpl_vars['dadinfo'][$this->_sections['num']['index']]['conversionsTotal']; ?>
</span></td>
          </tr>
          <?php endfor; endif; ?>
        </table>
      </div>
    </div>
  </div>
  <?php echo $this->_tpl_vars['TIP']; ?>

  <br />
</div>
<?php elseif ($this->_tpl_vars['current_acc_page'] == 'new_ads'): ?>
<div id="main">
  <h1><a href="account.php" class="style27"><?php if ($_SESSION['utype'] == 'adv'): ?><?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['_lang']['Publisher']; ?>
 &amp; <?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php endif; ?> <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
 ...</a></h1>
  <table width="100%" border="0">
    <tr>
      <td><h1 class="green"><?php echo $this->_tpl_vars['_lang']['New_Ads_Approval']; ?>
 </h1></td>
    </tr>
    <tr>
      <td class="style39"><?php echo $this->_tpl_vars['_lang']['approval_page1']; ?>
</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
  <div class="splitleft">
    <div class="box">
      <div align="left">
        <table width="100%" border="0">
          <tr>
            <td colspan="5"><?php echo $this->_tpl_vars['_lang']['approval_page2']; ?>
 </td>
          </tr>
          <tr>
            <td width="27%"><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Ad']; ?>
</strong></span></td>
            <td width="16%"><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Ad_Type']; ?>
 </strong></span></td>
            <td width="17%"><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Offer_Made']; ?>
 </strong></span></td>
            <td width="21%"><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['New_Edit']; ?>
 </strong></span></td>
            <td width="19%"><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Approve_Reject2']; ?>
</strong></span></td>
          </tr>
          <tr>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></span></td>
          </tr>
          <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['nadinfo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['num']['show'] = true;
$this->_sections['num']['max'] = $this->_sections['num']['loop'];
$this->_sections['num']['step'] = 1;
$this->_sections['num']['start'] = $this->_sections['num']['step'] > 0 ? 0 : $this->_sections['num']['loop']-1;
if ($this->_sections['num']['show']) {
    $this->_sections['num']['total'] = $this->_sections['num']['loop'];
    if ($this->_sections['num']['total'] == 0)
        $this->_sections['num']['show'] = false;
} else
    $this->_sections['num']['total'] = 0;
if ($this->_sections['num']['show']):

            for ($this->_sections['num']['index'] = $this->_sections['num']['start'], $this->_sections['num']['iteration'] = 1;
                 $this->_sections['num']['iteration'] <= $this->_sections['num']['total'];
                 $this->_sections['num']['index'] += $this->_sections['num']['step'], $this->_sections['num']['iteration']++):
$this->_sections['num']['rownum'] = $this->_sections['num']['iteration'];
$this->_sections['num']['index_prev'] = $this->_sections['num']['index'] - $this->_sections['num']['step'];
$this->_sections['num']['index_next'] = $this->_sections['num']['index'] + $this->_sections['num']['step'];
$this->_sections['num']['first']      = ($this->_sections['num']['iteration'] == 1);
$this->_sections['num']['last']       = ($this->_sections['num']['iteration'] == $this->_sections['num']['total']);
?>
          <tr>
            <td><span class="style38"><a href="ads_approval.php?adv_id=<?php echo $this->_tpl_vars['nadinfo'][$this->_sections['num']['index']]['adv_id']; ?>
<?php if ($this->_tpl_vars['nadinfo'][$this->_sections['num']['index']]['status'] == 'Edit'): ?>&edit=true<?php endif; ?>"><?php echo $this->_tpl_vars['nadinfo'][$this->_sections['num']['index']]['ad']; ?>
</a></span></td>
            <td><span class="style38"><?php echo $this->_tpl_vars['nadinfo'][$this->_sections['num']['index']]['type']; ?>
</span></td>
            <td> <?php if ($this->_tpl_vars['nadinfo'][$this->_sections['num']['index']]['offer'] == 'Y'): ?>
              <?php echo $this->_tpl_vars['_lang']['Yes']; ?>
 - <a href="ads_approval.php?adv_id=<?php echo $this->_tpl_vars['nadinfo'][$this->_sections['num']['index']]['adv_id']; ?>
<?php if ($this->_tpl_vars['nadinfo'][$this->_sections['num']['index']]['status'] == 'Edit'): ?>&edit=true<?php endif; ?>"><?php echo $this->_tpl_vars['CURRENCY']; ?>
<?php echo $this->_tpl_vars['nadinfo'][$this->_sections['num']['index']]['cost']; ?>
</a> <?php else: ?>
              <?php echo $this->_tpl_vars['_lang']['No']; ?>

              <?php endif; ?> </td>
            <td><span class="style38"><?php echo $this->_tpl_vars['nadinfo'][$this->_sections['num']['index']]['status']; ?>
</span></td>
            <td><a href="ads_approval.php?adv_id=<?php echo $this->_tpl_vars['nadinfo'][$this->_sections['num']['index']]['adv_id']; ?>
<?php if ($this->_tpl_vars['nadinfo'][$this->_sections['num']['index']]['status'] == 'Edit'): ?>&edit=true<?php endif; ?>"><?php echo $this->_tpl_vars['_lang']['Approve']; ?>
</a>/<a href="ads_approval.php?adv_id=<?php echo $this->_tpl_vars['nadinfo'][$this->_sections['num']['index']]['adv_id']; ?>
<?php if ($this->_tpl_vars['nadinfo'][$this->_sections['num']['index']]['status'] == 'Edit'): ?>&edit=true<?php endif; ?>"><?php echo $this->_tpl_vars['_lang']['Reject']; ?>
</a></td>
          </tr>
          <?php endfor; endif; ?>
        </table>
      </div>
    </div>
  </div>
  <h1>&nbsp;</h1>
  <?php echo $this->_tpl_vars['TIP']; ?>

  <br />
</div>
<?php elseif ($this->_tpl_vars['current_acc_page'] == 'set_adprices'): ?>
<div id="main">
  <h1><a href="account.php" class="style27"><?php if ($_SESSION['utype'] == 'adv'): ?><?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['_lang']['Publisher']; ?>
 &amp; <?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php endif; ?> <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
 ...</a></h1>
  <table width="100%" border="0">
    <tr>
      <td><h1 class="green"><?php echo $this->_tpl_vars['_lang']['Set_Rates']; ?>
 </h1></td>
    </tr>
    <tr>
      <td class="style39"></td>
    </tr>
    <tr>
      <td class="error"><?php echo $this->_tpl_vars['msg']; ?>
</td>
    </tr>
  </table>
  <table width="100%" border="0" align="center">
    <tr>
      <td><div id="ddtabs" class="basictab">
          
        </div>
        <div id="tabcontentcontainer">
          <div id="sc1" class="tabcontent"> <?php echo $this->_tpl_vars['_lang']['click_tab_text']; ?>
 </div>
          <div id="sc2" class="tabcontent"> <?php echo $this->_tpl_vars['_lang']['click_tab_image']; ?>
 </div>
          <div id="sc3" class="tabcontent"> <?php echo $this->_tpl_vars['_lang']['click_tab_video']; ?>
 </div>
        </div>
      </td>
    </tr>
    <tr>
      <td width="100%"><h2 align="right"> <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['www']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['num']['show'] = true;
$this->_sections['num']['max'] = $this->_sections['num']['loop'];
$this->_sections['num']['step'] = 1;
$this->_sections['num']['start'] = $this->_sections['num']['step'] > 0 ? 0 : $this->_sections['num']['loop']-1;
if ($this->_sections['num']['show']) {
    $this->_sections['num']['total'] = $this->_sections['num']['loop'];
    if ($this->_sections['num']['total'] == 0)
        $this->_sections['num']['show'] = false;
} else
    $this->_sections['num']['total'] = 0;
if ($this->_sections['num']['show']):

            for ($this->_sections['num']['index'] = $this->_sections['num']['start'], $this->_sections['num']['iteration'] = 1;
                 $this->_sections['num']['iteration'] <= $this->_sections['num']['total'];
                 $this->_sections['num']['index'] += $this->_sections['num']['step'], $this->_sections['num']['iteration']++):
$this->_sections['num']['rownum'] = $this->_sections['num']['iteration'];
$this->_sections['num']['index_prev'] = $this->_sections['num']['index'] - $this->_sections['num']['step'];
$this->_sections['num']['index_next'] = $this->_sections['num']['index'] + $this->_sections['num']['step'];
$this->_sections['num']['first']      = ($this->_sections['num']['iteration'] == 1);
$this->_sections['num']['last']       = ($this->_sections['num']['iteration'] == $this->_sections['num']['total']);
?>
          <?php if ($this->_tpl_vars['www'][$this->_sections['num']['index']]['pid'] != $_GET['pid']): ?><a href="account.php?set_adprices&pid=<?php echo $this->_tpl_vars['www'][$this->_sections['num']['index']]['pid']; ?>
&tab=1" class="style37"><?php endif; ?><?php echo $this->_tpl_vars['www'][$this->_sections['num']['index']]['web']; ?>
<?php if ($this->_tpl_vars['www'][$this->_sections['num']['index']]['pid'] != $_GET['pid']): ?></a><?php endif; ?> - 
          <?php endfor; endif; ?> </h2></td>
    </tr>
  </table>
  <div class="splitleft" id='tab_sc1'>
    <form action="" method="post">
      <div class="box">
        <div align="left">
          <table width="100%" border="0">
            <tr>
              <td colspan="4"><?php echo $this->_tpl_vars['_lang']['Currently_Showing']; ?>
 <strong><?php echo $this->_tpl_vars['_lang']['Text_Ads']; ?>
</strong> <?php echo $this->_tpl_vars['_lang']['Prices_For_Your_Website']; ?>
 <strong> <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['www']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['num']['show'] = true;
$this->_sections['num']['max'] = $this->_sections['num']['loop'];
$this->_sections['num']['step'] = 1;
$this->_sections['num']['start'] = $this->_sections['num']['step'] > 0 ? 0 : $this->_sections['num']['loop']-1;
if ($this->_sections['num']['show']) {
    $this->_sections['num']['total'] = $this->_sections['num']['loop'];
    if ($this->_sections['num']['total'] == 0)
        $this->_sections['num']['show'] = false;
} else
    $this->_sections['num']['total'] = 0;
if ($this->_sections['num']['show']):

            for ($this->_sections['num']['index'] = $this->_sections['num']['start'], $this->_sections['num']['iteration'] = 1;
                 $this->_sections['num']['iteration'] <= $this->_sections['num']['total'];
                 $this->_sections['num']['index'] += $this->_sections['num']['step'], $this->_sections['num']['iteration']++):
$this->_sections['num']['rownum'] = $this->_sections['num']['iteration'];
$this->_sections['num']['index_prev'] = $this->_sections['num']['index'] - $this->_sections['num']['step'];
$this->_sections['num']['index_next'] = $this->_sections['num']['index'] + $this->_sections['num']['step'];
$this->_sections['num']['first']      = ($this->_sections['num']['iteration'] == 1);
$this->_sections['num']['last']       = ($this->_sections['num']['iteration'] == $this->_sections['num']['total']);
?>
                <?php if ($this->_tpl_vars['www'][$this->_sections['num']['index']]['pid'] == $_GET['pid']): ?><?php echo $this->_tpl_vars['www'][$this->_sections['num']['index']]['web']; ?>
<?php endif; ?>
                <?php endfor; endif; ?> </strong></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td width="30%"><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Ad_Product']; ?>
 </strong></span></td>
              <td width="26%"><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Cost']; ?>
</strong></span></td>
              <td width="20%"><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Length']; ?>
 </strong></span></td>
              <td width="24%"><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Edit']; ?>
</strong></span></td>
            </tr>
            <tr>
              <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></td>
              <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></td>
              <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></td>
              <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></td>
            </tr>
            <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['tad_rates']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['num']['show'] = true;
$this->_sections['num']['max'] = $this->_sections['num']['loop'];
$this->_sections['num']['step'] = 1;
$this->_sections['num']['start'] = $this->_sections['num']['step'] > 0 ? 0 : $this->_sections['num']['loop']-1;
if ($this->_sections['num']['show']) {
    $this->_sections['num']['total'] = $this->_sections['num']['loop'];
    if ($this->_sections['num']['total'] == 0)
        $this->_sections['num']['show'] = false;
} else
    $this->_sections['num']['total'] = 0;
if ($this->_sections['num']['show']):

            for ($this->_sections['num']['index'] = $this->_sections['num']['start'], $this->_sections['num']['iteration'] = 1;
                 $this->_sections['num']['iteration'] <= $this->_sections['num']['total'];
                 $this->_sections['num']['index'] += $this->_sections['num']['step'], $this->_sections['num']['iteration']++):
$this->_sections['num']['rownum'] = $this->_sections['num']['iteration'];
$this->_sections['num']['index_prev'] = $this->_sections['num']['index'] - $this->_sections['num']['step'];
$this->_sections['num']['index_next'] = $this->_sections['num']['index'] + $this->_sections['num']['step'];
$this->_sections['num']['first']      = ($this->_sections['num']['iteration'] == 1);
$this->_sections['num']['last']       = ($this->_sections['num']['iteration'] == $this->_sections['num']['total']);
?>
            <tr>
              <td><span class="style38"> <?php echo $this->_tpl_vars['tad_rates'][$this->_sections['num']['index']]['length']; ?>
 <?php echo $this->_tpl_vars['_lang']['Day_Text_Ad']; ?>
 </span></td>
              <td><span class="style38"><?php echo $this->_tpl_vars['CURRENCY']; ?>
<?php echo $this->_tpl_vars['tad_rates'][$this->_sections['num']['index']]['cost']; ?>
</span></td>
              <td><span class="style38"><?php echo $this->_tpl_vars['tad_rates'][$this->_sections['num']['index']]['length']; ?>
 <?php echo $this->_tpl_vars['_lang']['Day']; ?>
 </span></td>
              <td><span class="style38"><a href="account.php?edit_text_ad=<?php echo $this->_tpl_vars['tad_rates'][$this->_sections['num']['index']]['ad_id']; ?>
"><?php echo $this->_tpl_vars['_lang']['Edit']; ?>
</a> | <a href="account.php?delete_text_ad=<?php echo $this->_tpl_vars['tad_rates'][$this->_sections['num']['index']]['ad_id']; ?>
" onclick="javascript: return del_confirm();"><?php echo $this->_tpl_vars['_lang']['Delete']; ?>
</a> </span></td>
            </tr>
            <?php endfor; endif; ?>
            
            <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['ppc_tad_rates']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['num']['show'] = true;
$this->_sections['num']['max'] = $this->_sections['num']['loop'];
$this->_sections['num']['step'] = 1;
$this->_sections['num']['start'] = $this->_sections['num']['step'] > 0 ? 0 : $this->_sections['num']['loop']-1;
if ($this->_sections['num']['show']) {
    $this->_sections['num']['total'] = $this->_sections['num']['loop'];
    if ($this->_sections['num']['total'] == 0)
        $this->_sections['num']['show'] = false;
} else
    $this->_sections['num']['total'] = 0;
if ($this->_sections['num']['show']):

            for ($this->_sections['num']['index'] = $this->_sections['num']['start'], $this->_sections['num']['iteration'] = 1;
                 $this->_sections['num']['iteration'] <= $this->_sections['num']['total'];
                 $this->_sections['num']['index'] += $this->_sections['num']['step'], $this->_sections['num']['iteration']++):
$this->_sections['num']['rownum'] = $this->_sections['num']['iteration'];
$this->_sections['num']['index_prev'] = $this->_sections['num']['index'] - $this->_sections['num']['step'];
$this->_sections['num']['index_next'] = $this->_sections['num']['index'] + $this->_sections['num']['step'];
$this->_sections['num']['first']      = ($this->_sections['num']['iteration'] == 1);
$this->_sections['num']['last']       = ($this->_sections['num']['iteration'] == $this->_sections['num']['total']);
?>
            <tr>
              <td><span class="style38"> <?php if ($this->_tpl_vars['ppc_tad_rates'][$this->_sections['num']['index']]['title'] != ''): ?> <?php echo $this->_tpl_vars['ppc_tad_rates'][$this->_sections['num']['index']]['title']; ?>
 <?php else: ?><?php echo $this->_tpl_vars['_lang']['Pay_Per_Click']; ?>
<?php endif; ?> </span></td>
              <td><span class="style38"><?php echo $this->_tpl_vars['CURRENCY']; ?>
<?php echo $this->_tpl_vars['ppc_tad_rates'][$this->_sections['num']['index']]['cost']; ?>
</span></td>
              <td><span class="style38">N/A</span></td>
              <td><span class="style38"><a href="account.php?edit_text_ad=<?php echo $this->_tpl_vars['ppc_tad_rates'][$this->_sections['num']['index']]['ad_id']; ?>
"><?php echo $this->_tpl_vars['_lang']['Edit']; ?>
</a> | <a href="account.php?delete_text_ad=<?php echo $this->_tpl_vars['ppc_tad_rates'][$this->_sections['num']['index']]['ad_id']; ?>
" onclick="javascript: return del_confirm();"><?php echo $this->_tpl_vars['_lang']['Delete']; ?>
</a> </span></td>
            </tr>
            <?php endfor; endif; ?>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td width="30%"><span class="style39"><strong>Add New Text Ad Product </strong></span></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><select name="length" onchange="document.getElementById('tlen').innerHTML=this.value">
                  
            <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['txt_ad_lengths']['length']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['num']['show'] = true;
$this->_sections['num']['max'] = $this->_sections['num']['loop'];
$this->_sections['num']['step'] = 1;
$this->_sections['num']['start'] = $this->_sections['num']['step'] > 0 ? 0 : $this->_sections['num']['loop']-1;
if ($this->_sections['num']['show']) {
    $this->_sections['num']['total'] = $this->_sections['num']['loop'];
    if ($this->_sections['num']['total'] == 0)
        $this->_sections['num']['show'] = false;
} else
    $this->_sections['num']['total'] = 0;
if ($this->_sections['num']['show']):

            for ($this->_sections['num']['index'] = $this->_sections['num']['start'], $this->_sections['num']['iteration'] = 1;
                 $this->_sections['num']['iteration'] <= $this->_sections['num']['total'];
                 $this->_sections['num']['index'] += $this->_sections['num']['step'], $this->_sections['num']['iteration']++):
$this->_sections['num']['rownum'] = $this->_sections['num']['iteration'];
$this->_sections['num']['index_prev'] = $this->_sections['num']['index'] - $this->_sections['num']['step'];
$this->_sections['num']['index_next'] = $this->_sections['num']['index'] + $this->_sections['num']['step'];
$this->_sections['num']['first']      = ($this->_sections['num']['iteration'] == 1);
$this->_sections['num']['last']       = ($this->_sections['num']['iteration'] == $this->_sections['num']['total']);
?>
				
                  <option value="<?php echo $this->_tpl_vars['txt_ad_lengths']['length'][$this->_sections['num']['index']]; ?>
"><?php echo $this->_tpl_vars['txt_ad_lengths']['length'][$this->_sections['num']['index']]; ?>
 <?php echo $this->_tpl_vars['_lang']['Day_Text_Ad']; ?>
</option>
                  
			<?php endfor; endif; ?>
          
                </select>
              </td>
              <td><span class="style38"><?php echo $this->_tpl_vars['CURRENCY']; ?>

                <input name="cost" type="text" id="Cost" size="7" />
                <input name="pid" type="hidden" id="pid" value="<?php echo $_GET['pid']; ?>
" />
                </span></td>
              <td><span class="style38" id='tlen'>1</span> day(s)</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="50" colspan="3" align="right"><?php echo $this->_tpl_vars['_lang']['willing_offers']; ?>
&nbsp;&nbsp;&nbsp; </td>
              <td><input name="accept_offers" type="radio" value="Y" checked="checked" />
                <?php echo $this->_tpl_vars['_lang']['Yes']; ?>

                &nbsp;&nbsp;&nbsp;
                <input name="accept_offers" type="radio" value="N" />
                <?php echo $this->_tpl_vars['_lang']['No']; ?>
 </td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
              <td>&nbsp;</td>
              <td><input class="button" name="add_txt_ad" type="submit" id="add_txt_ad" value="Add" onclick="MM_validateForm('cost','','RisNum');return document.MM_returnValue" /></td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
			<!--
            <tr>
              <td colspan="2"><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['add_payperclick']; ?>
 </strong></span></td>
              <td><strong><?php echo $this->_tpl_vars['_lang']['Minimum_Spend']; ?>
 </strong></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><input name="title" type="hidden" id="title" value="<?php echo $this->_tpl_vars['_lang']['Pay_Per_Click']; ?>
" maxlength="100" /></td>
              <td><span class="style38"><?php echo $this->_tpl_vars['CURRENCY']; ?>

                <input name="ppc_cost" type="text" id="Pay per click Cost" size="7" />
                </span></td>
              <td><span class="style38"><?php echo $this->_tpl_vars['CURRENCY']; ?>

                <input name="min_spend" type="text" size="7" id="Minimum Spend " />
              </span></td>
              <td><input class="button"  name="add_ppc_txt_ad" type="submit" id="add_ppc_txt_ad" value="<?php echo $this->_tpl_vars['_lang']['Add']; ?>
"  onclick="MM_validateForm('ppc_cost','','RisNum','min_spend','','RisNum');return document.MM_returnValue" /></td>
            </tr>
			-->
          </table>
        </div>
      </div>
    </form>
  </div>
  
  
  <?php echo $this->_tpl_vars['TIP']; ?>

  <br />
</div>
<?php if ($_GET['tab'] == '1'): ?>
<?php echo '
<script language="javascript" type="text/javascript">
expandcontent(\'sc1\', document.getElementById(\'init1\'));
</script>
'; ?>

<?php endif; ?>
<?php if ($_GET['tab'] == '2'): ?>
<?php echo '
<script language="javascript" type="text/javascript">
expandcontent(\'sc2\', document.getElementById(\'init2\'));
</script>
'; ?>

<?php endif; ?>
<?php if ($_GET['tab'] == '3'): ?>
<?php echo '
<script language="javascript" type="text/javascript">
expandcontent(\'sc3\', document.getElementById(\'init3\'));
</script>
'; ?>

<?php endif; ?>





<?php elseif ($this->_tpl_vars['current_acc_page'] == 'my_earnings'): ?>
<div id="main">
  <h1><a href="account.php" class="style27"><?php if ($_SESSION['utype'] == 'adv'): ?><?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['_lang']['Publisher']; ?>
 &amp; <?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php endif; ?> <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
 ...</a></h1>
  <table width="100%" border="0">
    <tr>
      <td colspan="2"><h1 class="green"><?php echo $this->_tpl_vars['_lang']['My_Earnings']; ?>
</h1></td>
    </tr>
	 <tr>
      <td colspan="2"><h1 class="green">Affiliate Earnings</h1></td>
    </tr>
	 
    <tr>
      <td><div align="left">
          <h1><span class="style6 style22"> <?php if (isset ( $_GET['all'] )): ?>
            <?php echo $this->_tpl_vars['_lang']['All_Ads']; ?>

            <?php elseif (isset ( $_GET['uns'] )): ?>
            <?php echo $this->_tpl_vars['_lang']['Unsettled_Ads_Only']; ?>

            <?php else: ?>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['heading_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%B %Y") : smarty_modifier_date_format($_tmp, "%B %Y")); ?>

            <?php endif; ?> </span></h1>
        </div></td>
      <td><div align="right">
          <form action="account.php?my_earnings" method="post" name="f" id="f">
            <select name="month" onchange="javascript: if(this.value!=0)document.forms['f'].submit();">
              <option value="0"><?php echo $this->_tpl_vars['_lang']['View_Month']; ?>
</option>
              <option value="0">---------</option>
              
			  
			  <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['months']['m_values'],'selected' => $_POST['month'],'output' => $this->_tpl_vars['months']['m_names']), $this);?>

            
            </select>
          </form>
        </div></td>
    </tr>
    <tr>
      <td colspan="2"><span class="style39"><?php if (! isset ( $_GET['all'] ) || isset ( $_POST['month'] )): ?><a href="?my_earnings&all"><strong><?php endif; ?><?php echo $this->_tpl_vars['_lang']['View_All_Ads']; ?>
<?php if (! isset ( $_GET['all'] ) || isset ( $_POST['month'] )): ?></strong></a><?php endif; ?> | <?php if (! isset ( $_GET['uns'] ) || isset ( $_POST['month'] )): ?><a href="?my_earnings&amp;uns"><strong><?php endif; ?><?php echo $this->_tpl_vars['_lang']['View_Unsettled_Ads_Only']; ?>
<?php if (! isset ( $_GET['uns'] ) || isset ( $_POST['month'] )): ?></strong> </a><?php endif; ?></span></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
  </table>
  <div class="splitleft">
    <div class="box">
      <div align="left">
        <table width="100%" border="0">
          <tr>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Ad_Sold_Through']; ?>
 </strong><strong></strong></span></td>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Ad_Sold']; ?>
 </strong></span></td>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Length']; ?>
 </strong></span></td>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Your_Earnings']; ?>
*</strong></span></td>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Money_Sent']; ?>
 </strong></span></td>
          </tr>
          <tr>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></span></td>
          </tr>
          <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['earning']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['num']['show'] = true;
$this->_sections['num']['max'] = $this->_sections['num']['loop'];
$this->_sections['num']['step'] = 1;
$this->_sections['num']['start'] = $this->_sections['num']['step'] > 0 ? 0 : $this->_sections['num']['loop']-1;
if ($this->_sections['num']['show']) {
    $this->_sections['num']['total'] = $this->_sections['num']['loop'];
    if ($this->_sections['num']['total'] == 0)
        $this->_sections['num']['show'] = false;
} else
    $this->_sections['num']['total'] = 0;
if ($this->_sections['num']['show']):

            for ($this->_sections['num']['index'] = $this->_sections['num']['start'], $this->_sections['num']['iteration'] = 1;
                 $this->_sections['num']['iteration'] <= $this->_sections['num']['total'];
                 $this->_sections['num']['index'] += $this->_sections['num']['step'], $this->_sections['num']['iteration']++):
$this->_sections['num']['rownum'] = $this->_sections['num']['iteration'];
$this->_sections['num']['index_prev'] = $this->_sections['num']['index'] - $this->_sections['num']['step'];
$this->_sections['num']['index_next'] = $this->_sections['num']['index'] + $this->_sections['num']['step'];
$this->_sections['num']['first']      = ($this->_sections['num']['iteration'] == 1);
$this->_sections['num']['last']       = ($this->_sections['num']['iteration'] == $this->_sections['num']['total']);
?>
          <tr>
            <td><span class="style38"><?php echo $this->_tpl_vars['earning'][$this->_sections['num']['index']]['ad']; ?>
</span></td>
            <td><span class="style38"><?php echo ((is_array($_tmp=$this->_tpl_vars['earning'][$this->_sections['num']['index']]['sold_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%y") : smarty_modifier_date_format($_tmp, "%d/%m/%y")); ?>
</span></td>
            <td><span class="style38"><?php if ($this->_tpl_vars['earning'][$this->_sections['num']['index']]['length'] != 'N/A'): ?><?php echo $this->_tpl_vars['earning'][$this->_sections['num']['index']]['length']; ?>
 Day(s)<?php else: ?>N/A<?php endif; ?></span></td>
            <td><span class="style38"><?php echo $this->_tpl_vars['CURRENCY']; ?>
<?php echo $this->_tpl_vars['earning'][$this->_sections['num']['index']]['price']; ?>
</span></td>
            <td><span class="style38"><?php if ($this->_tpl_vars['earning'][$this->_sections['num']['index']]['money_sent'] == 'Not Yet'): ?><?php echo $this->_tpl_vars['earning'][$this->_sections['num']['index']]['money_sent']; ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['earning'][$this->_sections['num']['index']]['money_sent'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%y") : smarty_modifier_date_format($_tmp, "%d/%m/%y")); ?>
<?php endif; ?></span></td>
          </tr>
          <?php endfor; endif; ?>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Network_Ads_Earnings']; ?>
 </strong></span></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
       
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
			<h2 class="right black">Earnings Total: <span class="green"><?php echo $this->_tpl_vars['CURRENCY']; ?>
<?php echo smarty_function_math(array('equation' => "x + y + z",'x' => $this->_tpl_vars['earning'][0]['total_sold'],'y' => $this->_tpl_vars['earning'][0]['ppc_total'],'z' => $this->_tpl_vars['earning'][0]['net_total']), $this);?>
</span></h2>
			<span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Money_Earnt']; ?>
</strong></span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><span class="style38"></span></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <span class="style39"><strong>* <?php echo $this->_tpl_vars['_lang']['includes_deduction']; ?>
 <?php echo $this->_tpl_vars['_config']['website_name']; ?>
's <?php echo $this->_tpl_vars['_lang']['fee']; ?>
.</strong></span>
  <?php echo $this->_tpl_vars['TIP']; ?>

  <br />
</div>
<?php elseif ($this->_tpl_vars['current_acc_page'] == 'pub_live_ads'): ?>
<div id="main">
  <h1><a href="account.php" class="style27"><?php if ($_SESSION['utype'] == 'adv'): ?><?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['_lang']['Publisher']; ?>
 &amp; <?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php endif; ?> <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
 ...</a></h1>
  <table width="100%" border="0">
    <tr>
      <td colspan="2"><h1 class="green"><?php echo $this->_tpl_vars['_lang']['Live']; ?>
 <?php echo $this->_tpl_vars['_lang']['Ad_Stats']; ?>
</h1></td>
    </tr>
    <tr>
      <td colspan="2"><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['relate_ads_running']; ?>
 </strong></span></td>
    </tr>
    <tr>
      <td colspan="2"><div align="right">
          <h2><?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['www']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['num']['show'] = true;
$this->_sections['num']['max'] = $this->_sections['num']['loop'];
$this->_sections['num']['step'] = 1;
$this->_sections['num']['start'] = $this->_sections['num']['step'] > 0 ? 0 : $this->_sections['num']['loop']-1;
if ($this->_sections['num']['show']) {
    $this->_sections['num']['total'] = $this->_sections['num']['loop'];
    if ($this->_sections['num']['total'] == 0)
        $this->_sections['num']['show'] = false;
} else
    $this->_sections['num']['total'] = 0;
if ($this->_sections['num']['show']):

            for ($this->_sections['num']['index'] = $this->_sections['num']['start'], $this->_sections['num']['iteration'] = 1;
                 $this->_sections['num']['iteration'] <= $this->_sections['num']['total'];
                 $this->_sections['num']['index'] += $this->_sections['num']['step'], $this->_sections['num']['iteration']++):
$this->_sections['num']['rownum'] = $this->_sections['num']['iteration'];
$this->_sections['num']['index_prev'] = $this->_sections['num']['index'] - $this->_sections['num']['step'];
$this->_sections['num']['index_next'] = $this->_sections['num']['index'] + $this->_sections['num']['step'];
$this->_sections['num']['first']      = ($this->_sections['num']['iteration'] == 1);
$this->_sections['num']['last']       = ($this->_sections['num']['iteration'] == $this->_sections['num']['total']);
?>
            <?php if ($this->_tpl_vars['www'][$this->_sections['num']['index']]['pid'] != $_GET['pid']): ?><a href="account.php?pub_live_ads&pid=<?php echo $this->_tpl_vars['www'][$this->_sections['num']['index']]['pid']; ?>
" class="style37"><?php endif; ?><?php echo $this->_tpl_vars['www'][$this->_sections['num']['index']]['web']; ?>
<?php if ($this->_tpl_vars['www'][$this->_sections['num']['index']]['pid'] != $_GET['pid']): ?></a><?php endif; ?> - 
            <?php endfor; endif; ?></h2>
        </div></td>
    </tr>
  </table>
  <div class="splitleft">
    <div class="box">
      <div align="left">
        <table width="100%" border="0">
          <tr>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Ad_Sold_Through']; ?>
 </strong></span></td>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Length']; ?>
 </strong></span></td>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Clicks_Today']; ?>
</strong></span></td>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Clicks_Total']; ?>
 </strong></span></td>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Impressions_Today']; ?>
 </strong></span></td>
            <td><span class="style39"><strong><?php echo $this->_tpl_vars['_lang']['Impressions_Total']; ?>
</strong></span></td>
          </tr>
          <tr>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></span></td>
            <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" alt="" width="19" height="16" /></span></td>
          </tr>
          <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['pladinfo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['num']['show'] = true;
$this->_sections['num']['max'] = $this->_sections['num']['loop'];
$this->_sections['num']['step'] = 1;
$this->_sections['num']['start'] = $this->_sections['num']['step'] > 0 ? 0 : $this->_sections['num']['loop']-1;
if ($this->_sections['num']['show']) {
    $this->_sections['num']['total'] = $this->_sections['num']['loop'];
    if ($this->_sections['num']['total'] == 0)
        $this->_sections['num']['show'] = false;
} else
    $this->_sections['num']['total'] = 0;
if ($this->_sections['num']['show']):

            for ($this->_sections['num']['index'] = $this->_sections['num']['start'], $this->_sections['num']['iteration'] = 1;
                 $this->_sections['num']['iteration'] <= $this->_sections['num']['total'];
                 $this->_sections['num']['index'] += $this->_sections['num']['step'], $this->_sections['num']['iteration']++):
$this->_sections['num']['rownum'] = $this->_sections['num']['iteration'];
$this->_sections['num']['index_prev'] = $this->_sections['num']['index'] - $this->_sections['num']['step'];
$this->_sections['num']['index_next'] = $this->_sections['num']['index'] + $this->_sections['num']['step'];
$this->_sections['num']['first']      = ($this->_sections['num']['iteration'] == 1);
$this->_sections['num']['last']       = ($this->_sections['num']['iteration'] == $this->_sections['num']['total']);
?>
          <tr>
            <td><span class="style38"><?php echo $this->_tpl_vars['pladinfo'][$this->_sections['num']['index']]['ad']; ?>
</span></td>
            <td><span class="style38"><?php echo $this->_tpl_vars['pladinfo'][$this->_sections['num']['index']]['length']; ?>
</span></td>
            <td><span class="style38"><?php echo $this->_tpl_vars['pladinfo'][$this->_sections['num']['index']]['clicksToday']; ?>
</span></td>
            <td><span class="style38"><?php echo $this->_tpl_vars['pladinfo'][$this->_sections['num']['index']]['clicksTotal']; ?>
</span></td>
            <td><span class="style38"><?php echo $this->_tpl_vars['pladinfo'][$this->_sections['num']['index']]['impressionsToday']; ?>
</span></td>
            <td><span class="style38"><?php echo $this->_tpl_vars['pladinfo'][$this->_sections['num']['index']]['impressionsTotal']; ?>
</span></td>
          </tr>
          <?php endfor; endif; ?>
        </table>
      </div>
    </div>
  </div>
  <h1>&nbsp;</h1>
  <?php echo $this->_tpl_vars['TIP']; ?>

  <br />
</div>
<?php elseif ($this->_tpl_vars['current_acc_page'] == 'ad_codes'): ?>
<div id="maininner">
  <h1><a href="account.php" class="style27"><?php if ($_SESSION['utype'] == 'adv'): ?><?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['_lang']['Publisher']; ?>
 &amp; <?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php endif; ?> <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
 ...</a></h1>
  <table width="100%" border="0">
    <tr>
      <td><h1 class="green"><?php echo $this->_tpl_vars['_lang']['Get_Ad_Code']; ?>
 </h1></td>
    </tr>
    <tr>
      <td class="style39"><?php echo $this->_tpl_vars['_lang']['customize_ads']; ?>

	  <noscript> <div class="error"> <p><strong>Javascript must be enabled</strong>
in order to use this part.</p> <p>It seems JavaScript is
either disabled or not supported by your browser, which means
<strong>the page below might not work properly.</strong></p> <p>We
apologize for this inconvenience.</p> </div> </noscript>	  </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="right">
          <h2><?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['www']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['num']['show'] = true;
$this->_sections['num']['max'] = $this->_sections['num']['loop'];
$this->_sections['num']['step'] = 1;
$this->_sections['num']['start'] = $this->_sections['num']['step'] > 0 ? 0 : $this->_sections['num']['loop']-1;
if ($this->_sections['num']['show']) {
    $this->_sections['num']['total'] = $this->_sections['num']['loop'];
    if ($this->_sections['num']['total'] == 0)
        $this->_sections['num']['show'] = false;
} else
    $this->_sections['num']['total'] = 0;
if ($this->_sections['num']['show']):

            for ($this->_sections['num']['index'] = $this->_sections['num']['start'], $this->_sections['num']['iteration'] = 1;
                 $this->_sections['num']['iteration'] <= $this->_sections['num']['total'];
                 $this->_sections['num']['index'] += $this->_sections['num']['step'], $this->_sections['num']['iteration']++):
$this->_sections['num']['rownum'] = $this->_sections['num']['iteration'];
$this->_sections['num']['index_prev'] = $this->_sections['num']['index'] - $this->_sections['num']['step'];
$this->_sections['num']['index_next'] = $this->_sections['num']['index'] + $this->_sections['num']['step'];
$this->_sections['num']['first']      = ($this->_sections['num']['iteration'] == 1);
$this->_sections['num']['last']       = ($this->_sections['num']['iteration'] == $this->_sections['num']['total']);
?>
            <?php if ($this->_tpl_vars['www'][$this->_sections['num']['index']]['pid'] != $_GET['pid']): ?><a href="account.php?ad_codes&pid=<?php echo $this->_tpl_vars['www'][$this->_sections['num']['index']]['pid']; ?>
" class="style37"><?php endif; ?><?php echo $this->_tpl_vars['www'][$this->_sections['num']['index']]['web']; ?>
<?php if ($this->_tpl_vars['www'][$this->_sections['num']['index']]['pid'] != $_GET['pid']): ?></a><?php endif; ?> - 
            <?php endfor; endif; ?></h2>
          <div align="left">
            <form action="" method="post" name="menu1">
              <select name="code_type" onchange="javascript: if(this.value != 0) document.forms['menu1'].submit();">
                <option value="0"><?php echo $this->_tpl_vars['_lang']['Select_Ad_code_type_for']; ?>
 <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['www']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['num']['show'] = true;
$this->_sections['num']['max'] = $this->_sections['num']['loop'];
$this->_sections['num']['step'] = 1;
$this->_sections['num']['start'] = $this->_sections['num']['step'] > 0 ? 0 : $this->_sections['num']['loop']-1;
if ($this->_sections['num']['show']) {
    $this->_sections['num']['total'] = $this->_sections['num']['loop'];
    if ($this->_sections['num']['total'] == 0)
        $this->_sections['num']['show'] = false;
} else
    $this->_sections['num']['total'] = 0;
if ($this->_sections['num']['show']):

            for ($this->_sections['num']['index'] = $this->_sections['num']['start'], $this->_sections['num']['iteration'] = 1;
                 $this->_sections['num']['iteration'] <= $this->_sections['num']['total'];
                 $this->_sections['num']['index'] += $this->_sections['num']['step'], $this->_sections['num']['iteration']++):
$this->_sections['num']['rownum'] = $this->_sections['num']['iteration'];
$this->_sections['num']['index_prev'] = $this->_sections['num']['index'] - $this->_sections['num']['step'];
$this->_sections['num']['index_next'] = $this->_sections['num']['index'] + $this->_sections['num']['step'];
$this->_sections['num']['first']      = ($this->_sections['num']['iteration'] == 1);
$this->_sections['num']['last']       = ($this->_sections['num']['iteration'] == $this->_sections['num']['total']);
?> <?php if ($this->_tpl_vars['www'][$this->_sections['num']['index']]['pid'] == $_GET['pid']): ?><?php echo $this->_tpl_vars['www'][$this->_sections['num']['index']]['web']; ?>
<?php endif; ?> <?php endfor; endif; ?> </option>
                <option value="text" <?php if ($_POST['code_type'] == 'text'): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['_lang']['Text_Ad']; ?>
</option>
                <option value="image" <?php if ($_POST['code_type'] == 'image'): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['_lang']['Image_Ad']; ?>
</option>                
                <?php if ($this->_tpl_vars['_config']['video_ad'] == 'on'): ?>				
                <option value="video" <?php if ($_POST['code_type'] == 'video'): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['_lang']['Video_Ad']; ?>
</option>                
                <?php endif; ?>
              
              </select>
            </form>
          </div>
        </div></td>
    </tr>
  </table>
<div class="splitleft"> <?php if (isset ( $_POST['code_type'] )): ?>
   
<div class="box">
        <div align="left">
		 <form action="" method="post" name="ad_code_form">
        <table width="100%" border="0" align="center">
          <tr>
            <td width="100%"><table width="100%" border="0">
                <tr>
                  <td>
                    <table class="table_outer" border="0" cellpadding="1" cellspacing="0" width="100%">
                      <tr>
                        <td><span class="style38"><?php echo $this->_tpl_vars['_lang']['Currently_Showing']; ?>
 <strong><?php echo $this->_tpl_vars['_lang']['html_ad_code']; ?>
 </strong> <?php echo $this->_tpl_vars['_lang']['For_Your_Website']; ?>
: <strong><?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['www']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['num']['show'] = true;
$this->_sections['num']['max'] = $this->_sections['num']['loop'];
$this->_sections['num']['step'] = 1;
$this->_sections['num']['start'] = $this->_sections['num']['step'] > 0 ? 0 : $this->_sections['num']['loop']-1;
if ($this->_sections['num']['show']) {
    $this->_sections['num']['total'] = $this->_sections['num']['loop'];
    if ($this->_sections['num']['total'] == 0)
        $this->_sections['num']['show'] = false;
} else
    $this->_sections['num']['total'] = 0;
if ($this->_sections['num']['show']):

            for ($this->_sections['num']['index'] = $this->_sections['num']['start'], $this->_sections['num']['iteration'] = 1;
                 $this->_sections['num']['iteration'] <= $this->_sections['num']['total'];
                 $this->_sections['num']['index'] += $this->_sections['num']['step'], $this->_sections['num']['iteration']++):
$this->_sections['num']['rownum'] = $this->_sections['num']['iteration'];
$this->_sections['num']['index_prev'] = $this->_sections['num']['index'] - $this->_sections['num']['step'];
$this->_sections['num']['index_next'] = $this->_sections['num']['index'] + $this->_sections['num']['step'];
$this->_sections['num']['first']      = ($this->_sections['num']['iteration'] == 1);
$this->_sections['num']['last']       = ($this->_sections['num']['iteration'] == $this->_sections['num']['total']);
?> <?php if ($this->_tpl_vars['www'][$this->_sections['num']['index']]['pid'] == $_GET['pid']): ?><?php echo $this->_tpl_vars['www'][$this->_sections['num']['index']]['web']; ?>
<?php endif; ?> <?php endfor; endif; ?> </strong></span></td>
                      </tr>
                      <tr>
                        <td></td>
                      </tr>
                      <tr>
                        <td><table class="table_inner" border="0" cellpadding="12" cellspacing="0" width="100%">
                            <tr>
                              <td valign="top" width="37%" class="table_content"><b><?php echo $this->_tpl_vars['_lang']['Layout']; ?>
:</b><br />
							  
                                <div id="customopts"> <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['layout']['id']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['num']['show'] = true;
$this->_sections['num']['max'] = $this->_sections['num']['loop'];
$this->_sections['num']['step'] = 1;
$this->_sections['num']['start'] = $this->_sections['num']['step'] > 0 ? 0 : $this->_sections['num']['loop']-1;
if ($this->_sections['num']['show']) {
    $this->_sections['num']['total'] = $this->_sections['num']['loop'];
    if ($this->_sections['num']['total'] == 0)
        $this->_sections['num']['show'] = false;
} else
    $this->_sections['num']['total'] = 0;
if ($this->_sections['num']['show']):

            for ($this->_sections['num']['index'] = $this->_sections['num']['start'], $this->_sections['num']['iteration'] = 1;
                 $this->_sections['num']['iteration'] <= $this->_sections['num']['total'];
                 $this->_sections['num']['index'] += $this->_sections['num']['step'], $this->_sections['num']['iteration']++):
$this->_sections['num']['rownum'] = $this->_sections['num']['iteration'];
$this->_sections['num']['index_prev'] = $this->_sections['num']['index'] - $this->_sections['num']['step'];
$this->_sections['num']['index_next'] = $this->_sections['num']['index'] + $this->_sections['num']['step'];
$this->_sections['num']['first']      = ($this->_sections['num']['iteration'] == 1);
$this->_sections['num']['last']       = ($this->_sections['num']['iteration'] == $this->_sections['num']['total']);
?>
                                  <input type="radio" name="img_vdo_size_id" value="<?php echo $this->_tpl_vars['layout']['id'][$this->_sections['num']['index']]; ?>
" <?php if ($this->_tpl_vars['ac']['img_vdo_size_id'] == $this->_tpl_vars['layout']['id'][$this->_sections['num']['index']]): ?> checked="checked"<?php endif; ?> onclick="javascript: AdQuick('layout', <?php echo $this->_tpl_vars['layout']['width'][$this->_sections['num']['index']]; ?>
, <?php echo $this->_tpl_vars['layout']['height'][$this->_sections['num']['index']]; ?>
);" />
                                  <?php echo $this->_tpl_vars['layout']['layout_name'][$this->_sections['num']['index']]; ?>
 <br />
                                  <?php endfor; endif; ?> 
                                  <br />

                                  <strong>Text Direction:</strong> <input name="text_dir" type="radio" value="Y" <?php if ($this->_tpl_vars['ac']['txt_hl_B'] == 'Y'): ?> checked="checked" <?php endif; ?> onclick="javascript: AdQuick('text_dir', 'Y');" /> Horizontal <input name="text_dir" type="radio" value="N" <?php if ($this->_tpl_vars['ac']['txt_hl_B'] == 'N'): ?> checked="checked" <?php endif; ?> onclick="javascript: AdQuick('text_dir', 'N');" /> Vertical<br /><br />


                                  </div>
							  </td>
                              <td valign="top" width="63%" class="table_content">
							  <div id="lines">
							  <table width="100%" border="0">
                                  <tr>
                                    <td width="62%"><span class="style39"><?php echo $this->_tpl_vars['_lang']['Number_ads_show']; ?>
 </span></td>
                                    <td width="38%"><span class="style47">
                                      <input name="txt_total_ads" type="text" id="txt_total_ads" value="<?php echo $this->_tpl_vars['ac']['txt_total_ads']; ?>
" size="4" maxlength="2" onkeyup="javascript: AdQuick('totalads', this.value);" />
                                      </span></td>
                                  </tr>
                                  <tr>
                                    <td><span class="style47"> <span class="style39"><?php echo $this->_tpl_vars['_lang']['Text_Characters_In_Headline']; ?>
 </span></span></td>
                                    <td><span class="style47">
                                      <input name="txt_hl_len" type="text" id="txt_hl_len" value="<?php echo $this->_tpl_vars['ac']['txt_hl_len']; ?>
" size="4" maxlength="3" />
                                      </span></td>
                                  </tr>
                                  <tr>
                                    <td><span class="style39"><?php echo $this->_tpl_vars['_lang']['Text_Characters_In_Description']; ?>
 </span></td>
                                    <td><span class="style47">
                                      <input name="txt_des_len" type="text" id="txt_des_len" value="<?php echo $this->_tpl_vars['ac']['txt_des_len']; ?>
" size="4" maxlength="3" />
                                      </span></td>
                                  </tr>
                                </table>
								</div>
							  </td>
                            </tr>
                          </table></td>
                      </tr>
                    </table>
                    <table class="table_outer" border="0" cellpadding="1" cellspacing="0" width="100%">
                      <tr> </tr>
                      <tr>
                        <td >
						<div id="colors">
						<b><?php echo $this->_tpl_vars['_lang']['Text_Colors']; ?>
</b><br />
                          <br />
                          <b><?php echo $this->_tpl_vars['_lang']['Border_Color']; ?>
:</b> <br />
                          <input name="txt_border_c" type="text" class="med_field" id="field1" value="<?php echo $this->_tpl_vars['ac']['txt_border_c']; ?>
" size="10" maxlength="6" onkeyup="javasript: if(this.value.length==6) AdQuick('change_color', 'field1');" />
                          <a href="javascript:colorPop('field1', 'img1')" title="Choose Color"><img src="js/colorpop_icon.gif" id="img1" width="20" height="20" border="0" align="top"
						style="border:1px #666 outset;" /></a> <br />
                          <b><?php echo $this->_tpl_vars['_lang']['Background_Color']; ?>
:</b> <br />
                          <input name="txt_bg_c" type="text" class="med_field" id="field2" value="<?php echo $this->_tpl_vars['ac']['txt_bg_c']; ?>
" size="10" maxlength="6" onkeyup="javasript: if(this.value.length==6) AdQuick('change_color', 'field2');" />
                          <a href="javascript:colorPop('field2', 'img2')" title="Choose Color"><img src="js/colorpop_icon.gif" id="img2" width="20" height="20" border="0" align="top"
						style="border:1px #666 outset;" /></a><br />
                          <b><?php echo $this->_tpl_vars['_lang']['Headline_Text_Color']; ?>
:</b> <br />
                          <input name="txt_hl_c" type="text" class="med_field" id="field3" value="<?php echo $this->_tpl_vars['ac']['txt_hl_c']; ?>
" size="10" maxlength="6" onkeyup="javasript: if(this.value.length==6) AdQuick('change_color', 'field3');"  />
                          <a href="javascript:colorPop('field3', 'img3')" title="Choose Color"><img src="js/colorpop_icon.gif" id="img3" width="20" height="20" border="0" align="top"
						style="border:1px #666 outset;" /></a><br />
                          <b><?php echo $this->_tpl_vars['_lang']['Description_Text_Color']; ?>
:</b> <br />
                          <input name="txt_des_c" type="text" class="med_field" id="field4" value="<?php echo $this->_tpl_vars['ac']['txt_des_c']; ?>
" size="10" maxlength="6" onkeyup="javasript: if(this.value.length==6) AdQuick('change_color', 'field4');" />
                          <a href="javascript:colorPop('field4', 'img4')" title="Choose Color"><img src="js/colorpop_icon.gif" id="img4" width="20" height="20" border="0" align="top"
						style="border:1px #666 outset;" /></a>
						</div>
						</td>
                        <td >
						<div id='fonts'>
						<b><?php echo $this->_tpl_vars['_lang']['Fonts']; ?>
<BR />
                          <BR />
                          <?php echo $this->_tpl_vars['_lang']['Font']; ?>
: <BR />
                          <select name="txt_font"  onchange="javascript: AdQuick('font', this.value);">
                            <option value="Arial" <?php if ($this->_tpl_vars['ac']['txt_font'] == 'Arial'): ?> selected="selected"<?php endif; ?>>Arial</option>
                            <option value="Times New Roman" <?php if ($this->_tpl_vars['ac']['txt_font'] == 'Times New Roman'): ?> selected="selected"<?php endif; ?>>Times New Roman</option>
                            <option value="Verdana" <?php if ($this->_tpl_vars['ac']['txt_font'] == 'Verdana'): ?> selected="selected"<?php endif; ?>>Verdana</option>
                            <option value="Tahoma" <?php if ($this->_tpl_vars['ac']['txt_font'] == 'Tahoma'): ?> selected="selected"<?php endif; ?>>Tahoma </option>
                          </select>
                          <BR />
                          <?php echo $this->_tpl_vars['_lang']['Headline_Font_Size']; ?>
: <BR />
                          <select name="txt_hl_size" id="txt_hl_size"  onchange="javascript: AdQuick('hl_font_s', this.value);">
                            <option value="8px" <?php if ($this->_tpl_vars['ac']['txt_hl_size'] == '8px'): ?> selected="selected"<?php endif; ?>>8px</option>
                            <option value="9px" <?php if ($this->_tpl_vars['ac']['txt_hl_size'] == '9px'): ?> selected="selected"<?php endif; ?>>9px</option>
                            <option value="10px" <?php if ($this->_tpl_vars['ac']['txt_hl_size'] == '10px'): ?> selected="selected"<?php endif; ?>>10px</option>
                            <option value="11px" <?php if ($this->_tpl_vars['ac']['txt_hl_size'] == '11px'): ?> selected="selected"<?php endif; ?>>11px</option>
                            <option value="12px" <?php if ($this->_tpl_vars['ac']['txt_hl_size'] == '12px'): ?> selected="selected"<?php endif; ?>>12px </option>
                            <option value="13px" <?php if ($this->_tpl_vars['ac']['txt_hl_size'] == '13px'): ?> selected="selected"<?php endif; ?>>13px</option>
                            <option value="14px" <?php if ($this->_tpl_vars['ac']['txt_hl_size'] == '14px'): ?> selected="selected"<?php endif; ?>>14px </option>
							<option value="15px" <?php if ($this->_tpl_vars['ac']['txt_hl_size'] == '15px'): ?> selected="selected"<?php endif; ?>>15px </option>
							<option value="16px" <?php if ($this->_tpl_vars['ac']['txt_hl_size'] == '16px'): ?> selected="selected"<?php endif; ?>>16px </option>
							<option value="17px" <?php if ($this->_tpl_vars['ac']['txt_hl_size'] == '17px'): ?> selected="selected"<?php endif; ?>>17px </option>
							<option value="18px" <?php if ($this->_tpl_vars['ac']['txt_hl_size'] == '18px'): ?> selected="selected"<?php endif; ?>>18px </option>
                          </select>
                          <BR />
                          <?php echo $this->_tpl_vars['_lang']['Description_Font_Size']; ?>
: <br />
                          <select name="txt_des_size" id="txt_des_size" onchange="javascript: AdQuick('des_font_s', this.value);">
                            <option value="8px" <?php if ($this->_tpl_vars['ac']['txt_des_size'] == '8px'): ?> selected="selected"<?php endif; ?>>8px</option>
                            <option value="9px" <?php if ($this->_tpl_vars['ac']['txt_des_size'] == '9px'): ?> selected="selected"<?php endif; ?>>9px</option>
                            <option value="10px" <?php if ($this->_tpl_vars['ac']['txt_des_size'] == '10px'): ?> selected="selected"<?php endif; ?>>10px</option>
                            <option value="11px" <?php if ($this->_tpl_vars['ac']['txt_des_size'] == '11px'): ?> selected="selected"<?php endif; ?>>11px</option>
                            <option value="12px" <?php if ($this->_tpl_vars['ac']['txt_des_size'] == '12px'): ?> selected="selected"<?php endif; ?>>12px </option>
                            <option value="13px" <?php if ($this->_tpl_vars['ac']['txt_des_size'] == '13px'): ?> selected="selected"<?php endif; ?>>13px</option>
                            <option value="14px" <?php if ($this->_tpl_vars['ac']['txt_des_size'] == '14px'): ?> selected="selected"<?php endif; ?>>14px </option>
							<option value="15px" <?php if ($this->_tpl_vars['ac']['txt_des_size'] == '15px'): ?> selected="selected"<?php endif; ?>>15px </option>
							<option value="16px" <?php if ($this->_tpl_vars['ac']['txt_des_size'] == '16px'): ?> selected="selected"<?php endif; ?>>16px </option>
                          </select>
                          <br />
                          <?php echo $this->_tpl_vars['_lang']['Headline_Text_Underlined']; ?>
: <br />
                          </b><?php echo $this->_tpl_vars['_lang']['Yes']; ?>

                          <input name="txt_hl_U" type="radio" value="Y"  <?php if ($this->_tpl_vars['ac']['txt_hl_U'] == 'Y'): ?> checked="checked"<?php endif; ?>  onclick="AdQuick('underline', 'Y')"  />
                          <?php echo $this->_tpl_vars['_lang']['No']; ?>

                          <input name="txt_hl_U" type="radio" value="N" <?php if ($this->_tpl_vars['ac']['txt_hl_U'] == 'N'): ?> checked="checked"<?php endif; ?>  onclick="AdQuick('underline', 'N')"   />
                       </div>
					    </td>
                        <td><b><?php echo $this->_tpl_vars['_lang']['Other_Options']; ?>
 <br />
                          <br />
                          <?php echo $this->_tpl_vars['_lang']['show_powered_by_text']; ?>
: <br />
                          </b><?php echo $this->_tpl_vars['_lang']['Yes']; ?>

                          <input name="txt_pow_by" type="radio" value="Y" <?php if ($this->_tpl_vars['ac']['txt_pow_by'] == 'Y'): ?> checked="checked"<?php endif; ?> onclick="javascript: document.getElementById('pow').style.display='block';" />
                          <?php echo $this->_tpl_vars['_lang']['No']; ?>

                          <input name="txt_pow_by" type="radio" value="N"  <?php if ($this->_tpl_vars['ac']['txt_pow_by'] == 'N'): ?> checked="checked"<?php endif; ?>  onclick="javascript: document.getElementById('pow').style.display='none';" />
                          <b><br />
                          </b><b><?php echo $this->_tpl_vars['_lang']['show_your_ad_here_text']; ?>
 <br />
                          </b><?php echo $this->_tpl_vars['_lang']['Yes']; ?>

                          <input name="your_ad" type="radio" value="Y"  <?php if ($this->_tpl_vars['ac']['your_ad'] == 'Y'): ?> checked="checked"<?php endif; ?> onclick="javascript: document.getElementById('yad').style.display='block'; document.getElementById('yad').innerHTML='<?php echo $this->_tpl_vars['_lang']['show_your_ad_here_text']; ?>
'" />
                          <?php echo $this->_tpl_vars['_lang']['No']; ?>

                          <input name="your_ad" type="radio" value="N"  <?php if ($this->_tpl_vars['ac']['your_ad'] == 'N'): ?> checked="checked"<?php endif; ?> onclick="javascript: document.getElementById('yad').style.display='none';" />
                          Custom <b>
                          <input name="your_ad" type="radio" value="C" id="cus"  <?php if ($this->_tpl_vars['ac']['your_ad'] == 'C'): ?> checked="checked"<?php endif; ?> onclick="javascript: document.getElementById('yad').style.display='block'; document.getElementById('yad').innerHTML=document.getElementById('yourad_title').value"  />
                          <BR />
                          <input name="yourad_title" type="text" id="yourad_title" value="<?php echo $this->_tpl_vars['ac']['yourad_title']; ?>
" size="10" onfocus="javascript: document.getElementById('cus').checked='checked'; document.getElementById('yad').innerHTML = this.value; document.getElementById('yad').style.display='block';" onkeyup="javascript: document.getElementById('yad').innerHTML = this.value;" />
                          <br />
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="3"><div align="right">                        
						 <?php if ($_POST['code_type'] != 'text'): ?> 
						 	<script language="javascript" type="text/javascript">
							//	document.getElementById('customopts').style.display = 'none';
								document.getElementById('fonts').style.display = 'none';
								document.getElementById('colors').style.display = 'none';
								document.getElementById('lines').style.display = 'none';
							</script>
						 <?php endif; ?>
                         	<input name="code_type" type="hidden" value="<?php echo $_POST['code_type']; ?>
" />
                            <input name="type" type="hidden" value="<?php echo $_POST['code_type']; ?>
" />
                            <input name="pid" type="hidden" value="<?php echo $_GET['pid']; ?>
" />
                        </div></td>
                      </tr>
                      <tr>
                        <td colspan="3">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="3"><b>&nbsp;<?php echo $this->_tpl_vars['_lang']['Your_Ads_Look']; ?>
 </b> </td>
                      </tr>
                      <tr>
                        <td colspan="3"><table class="table_inner" border="0" cellpadding="3" cellspacing="0" width="100%">
                            <tr>
                              <td valign="top" class="table_content" align="center">
							  <div id="pow" align="center" style="text-align:center; overflow:hidden; padding-left:0px; margin:0px;"><?php echo $this->_tpl_vars['_lang']['Powered_By']; ?>
 <?php echo $this->_tpl_vars['_config']['website_name']; ?>
</div>
							  <div id="ad_code" style="overflow:hidden; padding-left:2px; margin:0px;"></div>
							  <div id="yad" align="center" style="overflow:hidden; padding-left:0px; margin:0px; text-align:center; text-decoration:underline;"><?php echo $this->_tpl_vars['_lang']['Your_Ad_Here']; ?>
</div>
							  </td>
                            </tr>
                          </table></td>
                      </tr>
                      <tr>
                        <td colspan="3"></td>
                      </tr>
                    </table>
                    <br />
                    <table class="table_outer" border="0" cellpadding="1" cellspacing="0" width="100%">
                      <tr>
                        <td valign="bottom"><b><span class="error">
                          <input name="save" type="submit" id="save" value="Save Settings" class="button" />
                        (<?php echo $this->_tpl_vars['_lang']['save_settings_code']; ?>
) </span> <br />
                        &nbsp;</b></td>
                      </tr>
                      <tr>
                        <td><table class="table_inner" border="0" cellpadding="12" cellspacing="0" width="100%">
                            <tr>
                              <td valign="top" class="table_content">
                                <b><span class="style39"><?php echo $this->_tpl_vars['_lang']['Your']; ?>
 <?php echo $this->_tpl_vars['_config']['website_name']; ?>
 <?php echo $this->_tpl_vars['_lang']['html_copy_paste']; ?>
</span></b> <br />
<textarea name="codeField" rows="1" readonly="readonly" style="width:650px; height:50px;" onfocus="this.select();"><script type="text/javascript" src="<?php echo $this->_tpl_vars['_config']['www']; ?>
/ac/?ci=<?php echo $this->_tpl_vars['ac']['code_id']; ?>
"></script></textarea></td>
                            </tr>
                          </table></td>
                      </tr>
                    </table></td>
                </tr>
              </table>
              <h1 class="green">&nbsp;</h1></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table>
		</form>
      </div>
    
    <script language="javascript" type="text/javascript">
	
		<?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['layout']['id']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['num']['show'] = true;
$this->_sections['num']['max'] = $this->_sections['num']['loop'];
$this->_sections['num']['step'] = 1;
$this->_sections['num']['start'] = $this->_sections['num']['step'] > 0 ? 0 : $this->_sections['num']['loop']-1;
if ($this->_sections['num']['show']) {
    $this->_sections['num']['total'] = $this->_sections['num']['loop'];
    if ($this->_sections['num']['total'] == 0)
        $this->_sections['num']['show'] = false;
} else
    $this->_sections['num']['total'] = 0;
if ($this->_sections['num']['show']):

            for ($this->_sections['num']['index'] = $this->_sections['num']['start'], $this->_sections['num']['iteration'] = 1;
                 $this->_sections['num']['iteration'] <= $this->_sections['num']['total'];
                 $this->_sections['num']['index'] += $this->_sections['num']['step'], $this->_sections['num']['iteration']++):
$this->_sections['num']['rownum'] = $this->_sections['num']['iteration'];
$this->_sections['num']['index_prev'] = $this->_sections['num']['index'] - $this->_sections['num']['step'];
$this->_sections['num']['index_next'] = $this->_sections['num']['index'] + $this->_sections['num']['step'];
$this->_sections['num']['first']      = ($this->_sections['num']['iteration'] == 1);
$this->_sections['num']['last']       = ($this->_sections['num']['iteration'] == $this->_sections['num']['total']);
?>
			<?php if ($this->_tpl_vars['ac']['img_vdo_size_id'] == $this->_tpl_vars['layout']['id'][$this->_sections['num']['index']]): ?> AdQuick('layout', <?php echo $this->_tpl_vars['layout']['width'][$this->_sections['num']['index']]; ?>
, <?php echo $this->_tpl_vars['layout']['height'][$this->_sections['num']['index']]; ?>
); <?php endif; ?>
		<?php endfor; endif; ?>

			AdQuick('initialize',<?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['js']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['num']['show'] = true;
$this->_sections['num']['max'] = $this->_sections['num']['loop'];
$this->_sections['num']['step'] = 1;
$this->_sections['num']['start'] = $this->_sections['num']['step'] > 0 ? 0 : $this->_sections['num']['loop']-1;
if ($this->_sections['num']['show']) {
    $this->_sections['num']['total'] = $this->_sections['num']['loop'];
    if ($this->_sections['num']['total'] == 0)
        $this->_sections['num']['show'] = false;
} else
    $this->_sections['num']['total'] = 0;
if ($this->_sections['num']['show']):

            for ($this->_sections['num']['index'] = $this->_sections['num']['start'], $this->_sections['num']['iteration'] = 1;
                 $this->_sections['num']['iteration'] <= $this->_sections['num']['total'];
                 $this->_sections['num']['index'] += $this->_sections['num']['step'], $this->_sections['num']['iteration']++):
$this->_sections['num']['rownum'] = $this->_sections['num']['iteration'];
$this->_sections['num']['index_prev'] = $this->_sections['num']['index'] - $this->_sections['num']['step'];
$this->_sections['num']['index_next'] = $this->_sections['num']['index'] + $this->_sections['num']['step'];
$this->_sections['num']['first']      = ($this->_sections['num']['iteration'] == 1);
$this->_sections['num']['last']       = ($this->_sections['num']['iteration'] == $this->_sections['num']['total']);
?>'<?php echo $this->_tpl_vars['js'][$this->_sections['num']['index']]; ?>
',<?php endfor; endif; ?>'x');
			
			<?php if ($this->_tpl_vars['ac']['your_ad'] == 'Y'): ?>
				document.getElementById('yad').style.display = 'block';
				document.getElementById('yad').innerHTML = 'Your Ad Here';
			<?php elseif ($this->_tpl_vars['ac']['your_ad'] == 'N'): ?>
				document.getElementById('yad').style.display = 'none';				
			<?php elseif ($this->_tpl_vars['ac']['your_ad'] == 'C'): ?>
				document.getElementById('yad').style.display = 'block';
				document.getElementById('yad').innerHTML = '<?php echo $this->_tpl_vars['ac']['yourad_title']; ?>
';
			<?php endif; ?>
			
			<?php if ($this->_tpl_vars['ac']['txt_pow_by'] == 'N'): ?>
				document.getElementById('pow').style.display = 'none';
			<?php endif; ?>
		</script>
    <?php endif; ?> </div>
	
	<?php echo $this->_tpl_vars['TIP']; ?>

  <br />
</div>


<?php elseif ($this->_tpl_vars['current_acc_page'] == 'network_ads'): ?>

<div id="main">
  <h1><a href="account.php" class="style27"><?php if ($_SESSION['utype'] == 'adv'): ?><?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['_lang']['Publisher']; ?>
 &amp; <?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php endif; ?> <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
 ...</a></h1>
  <table width="100%" border="0">
        <tr>
          <td colspan="2"><h1 class="green">Network Ads</h1></td>
        </tr>
        
        <tr>
          <td colspan="2"><p class="style39"><strong>If you have sold no ads, you can choose to show 'Network ads' on your website. 'Network Ads' are random adverts from <?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
s who have bought ads on other websites. </strong></p>
          <p class="style39"><strong>You will be paid 50%  of <?php echo $this->_tpl_vars['_config']['website_name']; ?>
's fee for every click through made from your website. </strong></p></td>
        </tr>
  </table>
      <div class="splitleft">
        <div class="box">
          <div align="left">
		  
	    <form action="" method="post"><table width="100%" border="0">
              <tr>
                <td width="9%">&nbsp;</td>
                <td colspan="3">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td width="23%" nowrap="nowrap" class="style32"><strong>Show Network Ads? </strong></td>
                <td colspan="2" class="style44"><strong>
                  <input name="sna" type="radio" value="Y" <?php if ($this->_tpl_vars['net_show'] == 'Y'): ?> checked="checked" <?php endif; ?> />
                <?php echo $this->_tpl_vars['_lang']['Yes']; ?>
                <br />
                <input name="sna" type="radio" value="N" <?php if ($this->_tpl_vars['net_show'] == 'N'): ?> checked="checked" <?php endif; ?>  />
                <?php echo $this->_tpl_vars['_lang']['No']; ?>
 </strong><br /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="3">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="3" class="style44"><strong>Filter Ads </strong></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="3">You can choose what kind of ads will show on your website. </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="3" style="font-weight:normal;"><?php echo smarty_function_html_checkboxes(array('name' => 'cats','output' => $this->_tpl_vars['cats']['category'],'values' => $this->_tpl_vars['cats']['cid'],'selected' => $this->_tpl_vars['cat_sel']), $this);?>
</td>
              </tr>
              
              <tr>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
                <td width="25%">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="2">
                    <input name="save_net_ads" type="submit" id="save_net_ads" value="Submit" class="button" />
                </td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table></form>
            
          </div>
        </div>
      </div>
      <a href="browse.html" class="style27"></a>
  
      
      <?php echo $this->_tpl_vars['TIP']; ?>

      <br />
</div>
<?php elseif ($this->_tpl_vars['current_acc_page'] == 'promotion'): ?>
<div id="main">
  <h1><a href="account.php" class="style27"><?php if ($_SESSION['utype'] == 'adv'): ?><?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['_lang']['Publisher']; ?>
 &amp; <?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php endif; ?> <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
 ...</a></h1>
  <table width="100%" border="0">
        <tr>
          <td colspan="2"><h1 class="green"><?php echo $this->_tpl_vars['_lang']['Further_Promotion']; ?>
</h1></td>
        </tr>
        
        <tr>
          <td colspan="2"><p class="style39"><?php echo $this->_tpl_vars['_lang']['The']; ?>
 <span class="style50"><?php echo $this->_tpl_vars['_config']['website_name']; ?>
</span> <?php echo $this->_tpl_vars['_lang']['homepage_featured_time']; ?>
<br />
<?php echo $this->_tpl_vars['_lang']['account_page7']; ?>
 <?php echo $this->_tpl_vars['CURRENCY']; ?>
<?php echo $this->_tpl_vars['_config']['featured_rate']; ?>
 <?php echo $this->_tpl_vars['_lang']['per_month']; ?>
.<br />
<?php echo $this->_tpl_vars['_lang']['account_page8']; ?>
 <BR /><br />
<span class="style49"><?php echo $this->_tpl_vars['_lang']['Please_Note']; ?>
:</span> <?php echo $this->_tpl_vars['_lang']['account_page9']; ?>
 <span class="style50"><?php echo $this->_tpl_vars['_config']['website_name']; ?>
</span> <?php echo $this->_tpl_vars['_lang']['homepage']; ?>
. </p>
          </td>
        </tr>
  </table>
      <div class="splitleft">
        <div class="box">
          <div align="left">
		  <form action="" method="post"><table width="100%" border="0">
              <tr>
                <td width="6%">&nbsp;</td>
                <td width="44%"><span class="style56"><?php echo $this->_tpl_vars['_lang']['Website_Name']; ?>
: </span></td>
                <td width="50%"><input name="wname" type="hidden" id="wname" value="<?php echo $this->_tpl_vars['f_data']['wname']; ?>
" size="30" maxlength="100" />
                  <select name="pid" onchange="javascript: document.getElementById('wname').value=this.options[this.selectedIndex].text;">
                  	<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['www']['pid'],'output' => $this->_tpl_vars['www']['websitename'],'selected' => $this->_tpl_vars['f_data']['pid']), $this);?>

                  </select>
                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><span class="style56"><?php echo $this->_tpl_vars['_lang']['Your_Logo_url2']; ?>
:</span></td>
                <td><span id="sprytextfield1">
                  <input name="logo_url" type="text" id="logo_url" value="<?php echo $this->_tpl_vars['f_data']['logo_url']; ?>
" size="30" maxlength="255" />
                <span class="textfieldRequiredMsg"><?php echo $this->_tpl_vars['_lang']['Your_Logo_url2']; ?>
 is required.</span></span></td>
            </tr>
              <tr>
                <td>&nbsp;</td>
                <td><span class="style56"><?php echo $this->_tpl_vars['_lang']['how_long_featured_homepage']; ?>
 </span></td>
                <td><select name="length" id="length">
                    <option value="1" <?php if ($this->_tpl_vars['f_data']['length'] == '1'): ?> selected="selected" <?php endif; ?>>1 Month</option>
                    <option value="2" <?php if ($this->_tpl_vars['f_data']['length'] == '2'): ?> selected="selected" <?php endif; ?>>2 Months</option>
                    <option value="3" <?php if ($this->_tpl_vars['f_data']['length'] == '3'): ?> selected="selected" <?php endif; ?>>3 Months</option>
                  </select>                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><span class="style56"><?php echo $this->_tpl_vars['_lang']['Website_Description']; ?>
: </span></td>
                <td><span id="sprytextarea1">
                  <textarea name="des" cols="35" rows="8" id="des"><?php echo $this->_tpl_vars['f_data']['des']; ?>
</textarea>
                <span class="textareaRequiredMsg">Description is required.</span></span></td>
            </tr>
              <tr>
                <td>&nbsp;</td>
                <td>
                    <input name="ad_to_f_bask" type="submit" id="ad_to_f_bask" class="button" value="<?php echo $this->_tpl_vars['_lang']['Add_To_Basket']; ?>
" />
                </td>
                <td>&nbsp;</td>
              </tr>
            </table></form>
            
          </div>
        </div>
      </div>
     
  
     
      <?php echo $this->_tpl_vars['TIP']; ?>

      <br />
</div>
<?php echo '
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
'; ?>


<?php elseif ($this->_tpl_vars['current_acc_page'] == 'edit_ad'): ?>

<div id="main">
  <h1><a href="account.php" class="style27"><?php if ($_SESSION['utype'] == 'adv'): ?><?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['_lang']['Publisher']; ?>
 &amp; <?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php endif; ?> <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
 ...</a></h1>
  <table width="100%" border="0">
        <tr>
          <td><h1 class="green"><?php echo $this->_tpl_vars['_lang']['Edit']; ?>
  
		  <?php if ($this->_tpl_vars['edit']['ad_type'] == 'txt_ad'): ?>
		   <?php echo $this->_tpl_vars['_lang']['Text']; ?>

		  <?php elseif ($this->_tpl_vars['edit']['ad_type'] == 'ppc_txt_ad'): ?>
		  <?php echo $this->_tpl_vars['_lang']['Pay_Per_Click_Text']; ?>

		  <?php elseif ($this->_tpl_vars['edit']['ad_type'] == 'img_ad'): ?>
		   <?php echo $this->_tpl_vars['_lang']['Image']; ?>

		  <?php elseif ($this->_tpl_vars['edit']['ad_type'] == 'ppc_img_ad'): ?>
		  <?php echo $this->_tpl_vars['_lang']['Pay_Per_Click_Image']; ?>

		  <?php elseif ($this->_tpl_vars['edit']['ad_type'] == 'vdo_ad'): ?>
		   <?php echo $this->_tpl_vars['_lang']['Video']; ?>

		  <?php elseif ($this->_tpl_vars['edit']['ad_type'] == 'ppc_vdo_ad'): ?>
		  <?php echo $this->_tpl_vars['_lang']['Pay_Per_Click_Video']; ?>

		  <?php endif; ?>
	      <?php echo $this->_tpl_vars['_lang']['Ad_Product']; ?>
</h1></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
        </tr>
  </table>
      <div class="splitleft">
        <div class="box">
          <div align="left">
		<form action="account.php?set_adprices&pid=<?php echo $this->_tpl_vars['edit']['pid']; ?>
&tab=<?php echo $this->_tpl_vars['tab']; ?>
" method="post"><table width="100%" border="0">
              
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td width="6%">&nbsp;</td>
                <td width="44%"><span class="style39"><?php echo $this->_tpl_vars['_lang']['Product_Name']; ?>
</span></td>
                <td width="27%"><span class="style39"><?php echo $this->_tpl_vars['_lang']['Price']; ?>
</span></td>
                <td width="23%"><span class="style39"><?php echo $this->_tpl_vars['_lang']['Edit']; ?>
</span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><img src="images/Bullet_green.gif" width="19" height="16" /></span></td>
                <td><img src="images/Bullet_green.gif" width="19" height="16" /></span></td>
                <td><img src="images/Bullet_green.gif" width="19" height="16" /></span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>

		  <?php if ($this->_tpl_vars['edit']['ad_type'] == 'ppc_txt_ad'): ?>
		  <?php echo $this->_tpl_vars['_lang']['Pay_Per_Click_Text']; ?>

		  <?php elseif ($this->_tpl_vars['edit']['ad_type'] == 'ppc_img_ad'): ?>
		  <?php echo $this->_tpl_vars['_lang']['Pay_Per_Click_Image']; ?>

		  <?php elseif ($this->_tpl_vars['edit']['ad_type'] == 'ppc_vdo_ad'): ?>
		  <?php echo $this->_tpl_vars['_lang']['Pay_Per_Click_Video']; ?>

		  <?php endif; ?>
		    
			
	<?php if ($this->_tpl_vars['edit']['length'] != '0'): ?> 
			
			<?php if ($this->_tpl_vars['edit']['ad_type'] == 'txt_ad'): ?>
			<select name="length" >
                  
            <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['txt_ad_lengths']['length']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['num']['show'] = true;
$this->_sections['num']['max'] = $this->_sections['num']['loop'];
$this->_sections['num']['step'] = 1;
$this->_sections['num']['start'] = $this->_sections['num']['step'] > 0 ? 0 : $this->_sections['num']['loop']-1;
if ($this->_sections['num']['show']) {
    $this->_sections['num']['total'] = $this->_sections['num']['loop'];
    if ($this->_sections['num']['total'] == 0)
        $this->_sections['num']['show'] = false;
} else
    $this->_sections['num']['total'] = 0;
if ($this->_sections['num']['show']):

            for ($this->_sections['num']['index'] = $this->_sections['num']['start'], $this->_sections['num']['iteration'] = 1;
                 $this->_sections['num']['iteration'] <= $this->_sections['num']['total'];
                 $this->_sections['num']['index'] += $this->_sections['num']['step'], $this->_sections['num']['iteration']++):
$this->_sections['num']['rownum'] = $this->_sections['num']['iteration'];
$this->_sections['num']['index_prev'] = $this->_sections['num']['index'] - $this->_sections['num']['step'];
$this->_sections['num']['index_next'] = $this->_sections['num']['index'] + $this->_sections['num']['step'];
$this->_sections['num']['first']      = ($this->_sections['num']['iteration'] == 1);
$this->_sections['num']['last']       = ($this->_sections['num']['iteration'] == $this->_sections['num']['total']);
?>
				
                  <option value="<?php echo $this->_tpl_vars['txt_ad_lengths']['length'][$this->_sections['num']['index']]; ?>
" <?php if ($this->_tpl_vars['txt_ad_lengths']['length'][$this->_sections['num']['index']] == $this->_tpl_vars['edit']['length']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['txt_ad_lengths']['length'][$this->_sections['num']['index']]; ?>
 <?php echo $this->_tpl_vars['_lang']['Day_Text_Ad']; ?>
</option>
                  
			<?php endfor; endif; ?>
          
                </select>
			<?php endif; ?>	

			<?php if ($this->_tpl_vars['edit']['ad_type'] == 'img_ad'): ?>
			<select name="length" >

            <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['img_ad_lengths']['length']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['num']['show'] = true;
$this->_sections['num']['max'] = $this->_sections['num']['loop'];
$this->_sections['num']['step'] = 1;
$this->_sections['num']['start'] = $this->_sections['num']['step'] > 0 ? 0 : $this->_sections['num']['loop']-1;
if ($this->_sections['num']['show']) {
    $this->_sections['num']['total'] = $this->_sections['num']['loop'];
    if ($this->_sections['num']['total'] == 0)
        $this->_sections['num']['show'] = false;
} else
    $this->_sections['num']['total'] = 0;
if ($this->_sections['num']['show']):

            for ($this->_sections['num']['index'] = $this->_sections['num']['start'], $this->_sections['num']['iteration'] = 1;
                 $this->_sections['num']['iteration'] <= $this->_sections['num']['total'];
                 $this->_sections['num']['index'] += $this->_sections['num']['step'], $this->_sections['num']['iteration']++):
$this->_sections['num']['rownum'] = $this->_sections['num']['iteration'];
$this->_sections['num']['index_prev'] = $this->_sections['num']['index'] - $this->_sections['num']['step'];
$this->_sections['num']['index_next'] = $this->_sections['num']['index'] + $this->_sections['num']['step'];
$this->_sections['num']['first']      = ($this->_sections['num']['iteration'] == 1);
$this->_sections['num']['last']       = ($this->_sections['num']['iteration'] == $this->_sections['num']['total']);
?>
				
                  <option value="<?php echo $this->_tpl_vars['img_ad_lengths']['length'][$this->_sections['num']['index']]; ?>
" <?php if ($this->_tpl_vars['img_ad_lengths']['length'][$this->_sections['num']['index']] == $this->_tpl_vars['edit']['length']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['img_ad_lengths']['length'][$this->_sections['num']['index']]; ?>
 <?php echo $this->_tpl_vars['_lang']['Day_Image_Ad']; ?>
</option>
                  
			<?php endfor; endif; ?>
          
                </select>
			<?php endif; ?>	

			<?php if ($this->_tpl_vars['edit']['ad_type'] == 'vdo_ad'): ?>
			<select name="length" >

            <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['vdo_ad_lengths']['length']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['num']['show'] = true;
$this->_sections['num']['max'] = $this->_sections['num']['loop'];
$this->_sections['num']['step'] = 1;
$this->_sections['num']['start'] = $this->_sections['num']['step'] > 0 ? 0 : $this->_sections['num']['loop']-1;
if ($this->_sections['num']['show']) {
    $this->_sections['num']['total'] = $this->_sections['num']['loop'];
    if ($this->_sections['num']['total'] == 0)
        $this->_sections['num']['show'] = false;
} else
    $this->_sections['num']['total'] = 0;
if ($this->_sections['num']['show']):

            for ($this->_sections['num']['index'] = $this->_sections['num']['start'], $this->_sections['num']['iteration'] = 1;
                 $this->_sections['num']['iteration'] <= $this->_sections['num']['total'];
                 $this->_sections['num']['index'] += $this->_sections['num']['step'], $this->_sections['num']['iteration']++):
$this->_sections['num']['rownum'] = $this->_sections['num']['iteration'];
$this->_sections['num']['index_prev'] = $this->_sections['num']['index'] - $this->_sections['num']['step'];
$this->_sections['num']['index_next'] = $this->_sections['num']['index'] + $this->_sections['num']['step'];
$this->_sections['num']['first']      = ($this->_sections['num']['iteration'] == 1);
$this->_sections['num']['last']       = ($this->_sections['num']['iteration'] == $this->_sections['num']['total']);
?>
				
                  <option value="<?php echo $this->_tpl_vars['vdo_ad_lengths']['length'][$this->_sections['num']['index']]; ?>
" <?php if ($this->_tpl_vars['vdo_ad_lengths']['length'][$this->_sections['num']['index']] == $this->_tpl_vars['edit']['length']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['vdo_ad_lengths']['length'][$this->_sections['num']['index']]; ?>
 <?php echo $this->_tpl_vars['_lang']['Day_Video_Ad']; ?>
</option>
                  
			<?php endfor; endif; ?>
          
                </select>
			<?php endif; ?>	
				
	<?php endif; ?>						
                </td>
                <td><span class="style38"><?php echo $this->_tpl_vars['CURRENCY']; ?>

                      <input name="cost" type="text" id="cost" value="<?php echo $this->_tpl_vars['edit']['cost']; ?>
" size="7" />
                      <input name="ad_id" type="hidden" id="ad_id" value="<?php echo $this->_tpl_vars['ad_space_id']; ?>
" />
                </span></td>
                <td><input type="submit" name="update_ad" value="<?php echo $this->_tpl_vars['_lang']['Edit']; ?>
" onclick="MM_validateForm('cost','','RisNum');return document.MM_returnValue" class="button" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table></form>
            
          </div>
        </div>
      </div>
      
      <?php echo $this->_tpl_vars['TIP']; ?>
 
      <br />
</div>

<?php elseif ($this->_tpl_vars['current_acc_page'] == 'ad_rejection'): ?>

<div id="main">
  <h1><a href="account.php" class="style27"><?php if ($_SESSION['utype'] == 'adv'): ?><?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['_lang']['Publisher']; ?>
 &amp; <?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
 <?php endif; ?> <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
 ...</a></h1>
  <table width="100%" border="0">
        <tr>
          <td><h1 class="green"><?php echo $this->_tpl_vars['_lang']['Ad_Rejection']; ?>
</h1></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
        </tr>
  </table>
      <div class="splitleft">
        <div class="box">
          <div align="left">
            <table width="100%" border="0">
              <tr>
                <td><span class="style39"><?php echo $this->_tpl_vars['_lang']['Ad']; ?>
</span></td>
                <td><span class="style39"><?php echo $this->_tpl_vars['_lang']['Reference']; ?>
</span></td>
                <td><span class="style39"><?php echo $this->_tpl_vars['_lang']['Date']; ?>
</span></td>
                <td><span class="style39"><?php echo $this->_tpl_vars['_lang']['Cost']; ?>
</span></td>
              </tr>
              <tr>
                <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></span></td>
                <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></span></td>
                <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></span></td>
                <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></span></td>
              </tr>
              <tr>
                <td><span class="style38"><?php echo $this->_tpl_vars['ref']['site_name']; ?>
</span></td>
                <td><span class="style38"><?php echo $this->_tpl_vars['ref']['adv_id']; ?>
</span></td>
                <td><span class="style38"><?php echo ((is_array($_tmp=$this->_tpl_vars['ref']['req_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%y") : smarty_modifier_date_format($_tmp, "%d/%m/%y")); ?>
</span></td>
                <td><span class="style38"><?php echo $this->_tpl_vars['CURRENCY']; ?>
<?php if ($this->_tpl_vars['ref']['ppc_balance'] == 0): ?><?php echo $this->_tpl_vars['ref']['price']; ?>
<?php else: ?><?php echo $this->_tpl_vars['ref']['ppc_balance']; ?>
<?php endif; ?></span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2"><span class="small style3"><strong><?php echo $this->_tpl_vars['_lang']['Reason_For_Rejection_From']; ?>
 <?php echo $this->_tpl_vars['_lang']['Advertiser']; ?>
. </strong></span></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="4"><p class="style38"><?php echo ((is_array($_tmp=$this->_tpl_vars['ref']['refuse_reason'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p></td>
              </tr>
              <tr>
                <td colspan="4">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="4"><span class="style3 small"><strong><?php echo $this->_tpl_vars['_lang']['Message_From']; ?>
 <?php echo $this->_tpl_vars['_config']['website_name']; ?>
 </strong></span></td>
              </tr>
              <tr>
                <td colspan="4"><span class="style38"><?php echo $this->_tpl_vars['_lang']['money_credited']; ?>
 </span></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      
<?php echo $this->_tpl_vars['TIP']; ?>
 
      <br />
</div>
<?php endif; ?>