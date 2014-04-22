<?php /* Smarty version 2.6.18, created on 2014-04-14 12:12:43
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'index.tpl', 113, false),array('modifier', 'nl2br', 'index.tpl', 958, false),array('modifier', 'sslash', 'index.tpl', 1225, false),array('function', 'html_options', 'index.tpl', 1196, false),array('function', 'html_select_date', 'index.tpl', 1209, false),)), $this); ?>
<?php echo '
<style>
.style41 {color: #FF0000; font-weight: normal;}
</style>
'; ?>

<?php if ($_SESSION['admin_uid'] == ''): ?>
<div id="main">
  <h1><a href="../admin/" class="style27"><?php if (isset ( $_GET['install_success'] )): ?> Installation Complete<?php else: ?>Admin Log In <?php endif; ?></a></h1>
  <table width="100%" border="0">
	<?php if (isset ( $_GET['install_success'] )): ?>
      <tr>
          <td class="style39"><h1><span class="green">Please Read The Following Important Steps, To Finalise The Installation Of This Software</span></h1>
            <table width="100%" border="0">
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td class="td"><h2 class="style41"><strong>1</strong></h2></td>
                <td class="td style41"><strong>IMPORTANT:</strong> Delete the install folder and set the permissions of the 'include' folder to 755.</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td class="td"><h2 class="style41"><strong>2</strong></h2></td>
                <td class="td style41">Login  Below With The Default Username and Password. (<strong> Username</strong>: admin <strong>Password</strong>: admin )</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td class="td"><h2 class="style41"><strong>3</strong></h2></td>
                <td class="td style41">Once You Have Logged Into Your Admin Area. Click the <strong>'System Preferences'</strong> Link and Setup Your Website Just How You Like It. By Default, the Video Ads feature is turned off. Make sure your server supports video ads before turing it on.</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td class="td"><h2 class="style41"><strong>4</strong></h2></td>
                <td class="td style41">Change The Default Admin Password, by clicking the  <strong>'Admin Password'</strong> link from your admin homepage.</td>
              </tr>
            </table>
         </td>
        </tr>

      <?php endif; ?>

    <tr>
      <td class="error"><?php echo $this->_tpl_vars['msg']; ?>
</td>
    </tr>
  </table>
  <div class="splitleft">
    <div class="box">
      <form id="form1" name="form1" method="post" action="">
        <table border="0" cellspacing="8" cellpadding="4">
          <tr>
            <td class="style47 green"><strong>User Name </strong></td>
            <td><input name="username" type="text" id="username" class="button" /></td>
          </tr>
          <tr>
            <td class="style47 green"><strong>Password</strong></td>
            <td><input name="pass" type="password" id="pass" class="button" /></td>
          </tr>
          <tr>
            <td colspan="2" align="right"><input name="login" type="submit" id="login" value="LogIn" class="button" /></td>
          </tr>
        </table>
      </form>
    </div>
  </div>
  <BR />
  <br />
</div>
<?php elseif (isset ( $_GET['new_acc'] )): ?>
<div id="main" style="margin-bottom: 20px;">
      <h1><a href="../admin/" class="style27">Admin Control Panel </a></h1>
<table width="100%" border="0">

        <tr>
          <td class="style39"><h1><span class="green">New Account Approvals</span></h1></td>
        </tr>

        <tr>
          <td class="style39"><div align="right"></div></td>
        </tr>
      </table>

  <table width="100%" border="0" align="center">
        <tr>
          <td width="100%"><div class="splitleft">
            <div class="box">
              <div align="left">
                <table width="100%" border="0">
                  <tr>
                  <td><div align="justify">
                        <ul id="maintab" class="shadetabs">
                          <li class="selected"><a href="#" rel="tcontent1">New Accounts</a></li>
                          <li><a href="#" rel="tcontent2">New Websites</a></li>
                          <li><a href="#" rel="tcontent3">Approval Settings</a></li>
                        </ul>
                      <div class="tabcontentstyle">
                          <div id="tcontent1" class="tabcontent">
                            <div class="buy-area-call-to-action">

                            <div id="mini_list">
                            <table width="100%" border="0" cellpadding="5" cellspacing="5">
                                <tr>
                                  <th width="20%"><div align="left"><strong>Signup Date:</strong></div></th>
                                  <th width="20%"><div align="left"><strong>Account Type:</strong></div></th>
                                  <th width="20%"><div align="left"><strong>Username:</strong></div></th>
                                  <th width="20%"><div align="left"><strong>More Info:</strong></div></th>
                                  <th width="20%"><div align="left"><strong>Approve/Reject:</strong></div></th>
                                </tr>
                                <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['new_users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                  <td><div align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['new_users'][$this->_sections['num']['index']]['signup_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%Y") : smarty_modifier_date_format($_tmp, "%d/%m/%Y")); ?>
</div></td>
                                  <td><div align="left"><?php if ($this->_tpl_vars['new_users'][$this->_sections['num']['index']]['utype'] == 'adv'): ?>Advertiser<?php else: ?>Publisher<?php endif; ?></div></td>
                                  <td><div align="left"><?php echo $this->_tpl_vars['new_users'][$this->_sections['num']['index']]['username']; ?>
</div></td>
                                  <td><div align="left"><a href="javascript:void(0);" onclick="javascript: document.getElementById('acc_details_<?php echo $this->_tpl_vars['new_users'][$this->_sections['num']['index']]['uid']; ?>
').style.display='block'; document.getElementById('mini_list').style.display='none';">More Info</a></div></td>
                                  <td><div align="left"><a href="../admin/?new_acc&approve=<?php echo $this->_tpl_vars['new_users'][$this->_sections['num']['index']]['uid']; ?>
">Approve</a> - <a href="../admin/?new_acc&reject=<?php echo $this->_tpl_vars['new_users'][$this->_sections['num']['index']]['uid']; ?>
">Reject</a></div></td>
                                </tr>
                                <?php endfor; endif; ?>
                              </table>
                            </div>





                            <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['new_users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <div id="acc_details_<?php echo $this->_tpl_vars['new_users'][$this->_sections['num']['index']]['uid']; ?>
" style="display: none;">
                             <table width="100%" border="0" cellpadding="5" cellspacing="5">
                                <tr>
                                  <th width="25%">Username:</th>
                                  <th width="18%"><div align="left"><?php echo $this->_tpl_vars['new_users'][$this->_sections['num']['index']]['username']; ?>
</div></th>
                                  <th width="17%">&nbsp;</th>
                                  <th width="11%">&nbsp;</th>
                                </tr>
                                <tr>
                                  <th>&nbsp;</th>
                                  <th>&nbsp;</th>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <th>Full Name:</th>
                                  <th><div align="left"><?php echo $this->_tpl_vars['new_users'][$this->_sections['num']['index']]['fullname']; ?>
</div></th>
                                  <td colspan="2" rowspan="3"><div align="center"><a href="../admin/?new_acc&approve=<?php echo $this->_tpl_vars['new_users'][$this->_sections['num']['index']]['uid']; ?>
">Approve</a> | <a href="../admin/?new_acc&reject=<?php echo $this->_tpl_vars['new_users'][$this->_sections['num']['index']]['uid']; ?>
">Reject</a>
                                  </div>
                                  <div align="center"></div>                                    </td>
                                </tr>
                                <tr>
                                  <th>&nbsp;</th>
                                  <th>&nbsp;</th>
                                </tr>
                                <tr>
                                  <th>Address:</th>
                                  <th><div align="left"><?php echo $this->_tpl_vars['new_users'][$this->_sections['num']['index']]['address']; ?>
 <br />
                                    <?php echo $this->_tpl_vars['new_users'][$this->_sections['num']['index']]['city']; ?>
<br />
                                    <?php echo $this->_tpl_vars['new_users'][$this->_sections['num']['index']]['state']; ?>
<br />
                                    <?php echo $this->_tpl_vars['new_users'][$this->_sections['num']['index']]['country']; ?>
<br />
                                  <?php echo $this->_tpl_vars['new_users'][$this->_sections['num']['index']]['zip']; ?>
</div></th>
                                </tr>
                                <tr>
                                  <th>&nbsp;</th>
                                  <th>&nbsp;</th>
                                  <th>&nbsp;</th>
                                  <th>&nbsp;</th>
                                </tr>
                                <tr>
                                  <th>Email:</th>
                                  <th><div align="left"><?php echo $this->_tpl_vars['new_users'][$this->_sections['num']['index']]['email']; ?>
</div></th>
                                  <th>&nbsp;</th>
                                  <th>&nbsp;</th>
                                </tr>
                                <tr>
                                  <th>&nbsp;</th>
                                  <th>&nbsp;</th>
                                  <th>&nbsp;</th>
                                  <th>&nbsp;</th>
                                </tr>
                                <tr>
                                  <th>Company Name:</th>
                                  <th><div align="left"><?php echo $this->_tpl_vars['new_users'][$this->_sections['num']['index']]['company']; ?>
</div></th>
                                  <th>&nbsp;</th>
                                  <th>&nbsp;</th>
                                </tr>
                                <tr>
                                  <th>&nbsp;</th>
                                  <th>&nbsp;</th>
                                  <th>&nbsp;</th>
                                  <th>&nbsp;</th>
                                </tr>
                              </table>
                              </div>
                              <?php endfor; endif; ?>


                            </div>
                          </div>
                        <div id="tcontent2" class="tabcontent">
                            <div class="buy-area-call-to-action">
                              <table width="100%" border="0" cellpadding="5" cellspacing="5">
                                <tr>
                                  <th width="20%"><div align="left"><strong>Date Added:</strong></div></th>
                                  <th width="20%" nowrap="nowrap"><div align="left"><strong>Publishers Username:</strong></div></th>
                                  <th width="20%"><div align="left"><strong>Website Name:</strong></div></th>
                                  <th width="20%"><div align="left"><strong>Website URL:</strong></div></th>
                                  <th width="20%"><div align="left"><strong>Approve/Reject:</strong></div></th>
                                </tr>
                               <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['new_sites']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                  <td><div align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['new_sites'][$this->_sections['num']['index']]['member_since'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%Y") : smarty_modifier_date_format($_tmp, "%d/%m/%Y")); ?>
</div></td>
                                  <td><div align="left"><?php echo $this->_tpl_vars['new_sites'][$this->_sections['num']['index']]['username']; ?>
</div></td>
                                  <td><div align="left"><?php echo $this->_tpl_vars['new_sites'][$this->_sections['num']['index']]['websitename']; ?>
</div></td>
                                  <td><div align="left"><a href="<?php echo $this->_tpl_vars['new_sites'][$this->_sections['num']['index']]['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['new_sites'][$this->_sections['num']['index']]['url']; ?>
</a></div></td>
                                  <td><div align="left"><a href="../admin/?new_acc&approve_site=<?php echo $this->_tpl_vars['new_sites'][$this->_sections['num']['index']]['pid']; ?>
">Approve</a> - <a href="../admin/?new_acc&reject_site=<?php echo $this->_tpl_vars['new_sites'][$this->_sections['num']['index']]['pid']; ?>
">Reject</a></div></td>
                                </tr>
                                <?php endfor; endif; ?>
                              </table>
                            </div>
                        </div>
                        <div id="tcontent3" class="tabcontent">
                            <div class="buy-area-call-to-action">
                            <form action="" method="post">
                             <table width="100%" border="0" cellpadding="5" cellspacing="5">
                                <tr>
                                  <th width="54%"><div align="left"></div></th>
                                  <th width="18%">&nbsp;</th>
                                  <th width="17%">&nbsp;</th>
                                  <th width="11%">&nbsp;</th>
                                </tr>
                                <tr>
                                  <th><div align="left"><strong>Would You Like To Approve New User Accounts?</strong></div></th>
                                  <th><div align="right">

                                    <input name="approve_new_user" type="radio" id="radio" value="no" <?php if ($this->_tpl_vars['_config']['approve_new_user'] == 'no'): ?> checked="checked" <?php endif; ?> />
                                    No</div></th>
                                  <th>
                                    <div align="center">
                                      <input type="radio" name="approve_new_user" id="radio2" value="yes" <?php if ($this->_tpl_vars['_config']['approve_new_user'] == 'yes'): ?> checked="checked" <?php endif; ?> />
                                    Yes</div></th>
                                  <th><div align="right"></div></th>
                                </tr>
                                <tr>
                                  <th>&nbsp;</th>
                                  <th>&nbsp;</th>
                                  <th><div align="center"></div></th>
                                  <th>&nbsp;</th>
                                </tr>

                                <tr>
                                  <th><div align="left"><strong>Would You Like To Approve</strong> New Websites Added By Publishers?</div></th>
                                  <th><div align="right">
                                    <input name="approve_new_site" type="radio" id="radio4" value="no" <?php if ($this->_tpl_vars['_config']['approve_new_site'] == 'no'): ?> checked="checked" <?php endif; ?> />
                                    No</div></th>
                                  <th>
                                    <div align="center">
                                      <input type="radio" name="approve_new_site" id="radio7" value="yes" <?php if ($this->_tpl_vars['_config']['approve_new_site'] == 'yes'): ?> checked="checked" <?php endif; ?> />
                                    Yes</div></th>
                                  <th><div align="right"></div></th>
                                </tr>
                                <tr>
                                  <th>&nbsp;</th>
                                  <th><div align="right"></div></th>
                                  <th><div align="center"></div></th>
                                  <th><div align="right"></div></th>
                                </tr>
                                <tr>
                                  <th><div align="left"><strong>Would You Like To</strong> Receive an Email When A New Account or Website Is Added?</div></th>
                                  <th><div align="right">
                                    <input name="get_email_notification" type="radio" id="radio5" value="no" <?php if ($this->_tpl_vars['_config']['get_email_notification'] == 'no'): ?> checked="checked" <?php endif; ?> />
                                    No</div></th>
                                  <th>
                                    <div align="center">
                                      <input type="radio" name="get_email_notification" id="radio6" value="yes" <?php if ($this->_tpl_vars['_config']['get_email_notification'] == 'yes'): ?> checked="checked" <?php endif; ?> />
                                    Yes</div></th>
                                  <th><div align="right"></div></th>
                                </tr>
                                <tr>
                                  <th>&nbsp;</th>
                                  <th>&nbsp;</th>
                                  <th><div align="center"><BR />
                                  </div></th>
                                  <th> <input type="submit" name="app_config" id="app_config" value="Update" /></th>
                                </tr>
                              </table>
                              </form>
                          </div>
                        </div>
                      </div>
                      <script type="text/javascript">
//Start Tab Content script for UL with id="maintab" Separate multiple ids each with a comma.
initializetabcontent("maintab")
                </script>
                    </div></td>
                  </tr>
                </table>
              </div>
            </div>
          </div></td>
        </tr>
  </table>

</div>

<?php elseif (isset ( $_GET['tips'] )): ?>
<div id="main">
      <h1><a href="../admin/" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">

        <tr>
          <td class="style39"><h1><span class="green"><?php echo $this->_tpl_vars['_config']['website_name']; ?>
 <?php echo $this->_tpl_vars['_lang']['tips']; ?>
</span></h1></td>
        </tr>
        <tr>
          <td class="style39"><div align="right"></div></td>
        </tr>
      </table>
      <table width="100%" border="0" align="center">

        <tr>
          <td width="100%"><div class="splitleft">
            <div class="box">
              <div align="left">
                <table width="100%" border="0">
                  <tr>
                    <td width="5%" class="style47">&nbsp;</td>
                    <td width="55%" class="style47">&nbsp;</td>
                    <td width="13%" class="style47">&nbsp;</td>
                    <td width="3%" class="style47">&nbsp;</td>
                    <td width="3%" class="style47">&nbsp;</td>
                    <td width="21%" class="style47">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47"><span class="tips"><strong>Current Tips:</strong></span></td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                  </tr>
				  <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['tips']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				  <form action="" method="post">
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td colspan="4" class="style47"><textarea name="tip_txt" style="width: 500px; height: 35px;"><?php echo $this->_tpl_vars['tips'][$this->_sections['num']['index']]['tip']; ?>
</textarea></td>
                    <td class="style47"> <input name="tip_id" type="hidden" id="tip_id" value="<?php echo $this->_tpl_vars['tips'][$this->_sections['num']['index']]['id']; ?>
" />
                      <input name="update_tip" type="submit" id="update_tip" value="Update" />
                    | <a href="../admin/?tips&delete_tip&amp;tip_id=<?php echo $this->_tpl_vars['tips'][$this->_sections['num']['index']]['id']; ?>
">Delete</a> </td>
                  </tr>
				  </form>
				  <?php endfor; endif; ?>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                  </tr>
				  <form action="" method="post">
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td colspan="4" class="style47"><textarea name="tip_txt" style="height: 35px; width: 500px;"></textarea></td>
                    <td class="style47"><input name="add_tip" type="submit" id="add_tip" value="Add" /></td>
                  </tr>
				  </form>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                  </tr>
                </table>
              </div>
            </div>
          </div></td>
        </tr>
      </table>
</div>
<?php elseif (isset ( $_GET['cat'] )): ?>
<div id="main">
      <h1><a href="../admin/" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">

        <tr>
          <td class="style39"><h1><span class="green"><?php echo $this->_tpl_vars['_lang']['prod_cats']; ?>
</span></h1></td>
        </tr>

        <tr>
          <td class="style39"><div align="right"></div></td>
        </tr>
      </table>
      <table width="100%" border="0" align="center">

        <tr>
          <td width="100%"><div class="splitleft">
            <div class="box">
              <div align="left">
                <table width="100%" border="0">
                  <tr>
                    <td width="6%" class="style47">&nbsp;</td>
                    <td width="57%" class="style47">&nbsp;</td>
                    <td width="37%" class="style47">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47"><span class="style42"><strong>Add/Edit/Delete Categories:</strong></span></td>
                    <td class="style47">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                  </tr>
				  <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['cats']['cid']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				  <form action="" method="post">
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47"><input name="cat" type="text" size="20" value="<?php echo $this->_tpl_vars['cats']['category'][$this->_sections['num']['index']]; ?>
" />
					<input type="hidden" name="cid" value="<?php echo $this->_tpl_vars['cats']['cid'][$this->_sections['num']['index']]; ?>
"  />

                    <td class="style47"><input name="update_cat" type="submit" id="update_cat" value="Update" />
                    | <a href="../admin/?cat&del_cid=<?php echo $this->_tpl_vars['cats']['cid'][$this->_sections['num']['index']]; ?>
">Delete</a> </td>
                  </tr>
				  </form>
                  <?php endfor; endif; ?>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                  </tr>
				   <form action="" method="post">
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47"><input name="cat" type="text" size="20" /></td>
                    <td class="style47"><input name="add_cat" type="submit" id="add_cat" value="Add Category" /></td>
                  </tr>
				  </form>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                  </tr>
                </table>
              </div>
            </div>
          </div></td>
        </tr>
      </table>

</div>
<?php elseif (isset ( $_GET['subcat'] )): ?>
<div id="main">
      <h1><a href="../admin/" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">

        <tr>
          <td class="style39"><h1><span class="green">Product Sub Categories</span></h1></td>
        </tr>

        <tr>
          <td class="style39"><div align="right"></div></td>
        </tr>
      </table>
      <table width="100%" border="0" align="center">

        <tr>
          <td width="100%"><div class="splitleft">
            <div class="box">
              <div align="left">
                <table width="100%" border="0">
                  <tr>
                    <td width="5%" class="style47">&nbsp;</td>
                    <td width="58%" class="style47">&nbsp;</td>
                    <td width="37%" class="style47">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47"><a href="../admin/?cat"><strong><?php echo $_GET['cat_name']; ?>
</strong></a> Sub Categories </td>
                    <td class="style47">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="tips_text"><span class="style42"><strong>Add/Edit/Delete Subcategories:</strong></span></td>
                    <td class="style47">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                  </tr>
                  <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['subcats']['sid']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				  <form action="" method="post">
				  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47"><input name="subcat" type="text" value="<?php echo $this->_tpl_vars['subcats']['subcategory'][$this->_sections['num']['index']]; ?>
" size="20" />
					<input type="hidden" name="sid" value="<?php echo $this->_tpl_vars['subcats']['sid'][$this->_sections['num']['index']]; ?>
"  />
					</td>
                    <td class="style47"> <input name="update_subcat" type="submit" value="Update" />
                    | <a href="../admin/?subcat&del_sid=<?php echo $this->_tpl_vars['subcats']['sid'][$this->_sections['num']['index']]; ?>
&cid=<?php echo $_GET['cid']; ?>
&cat_name=<?php echo $_GET['cat_name']; ?>
">Delete</a> </td>
                  </tr>
				  </form>
                  <?php endfor; endif; ?>

                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                  </tr>
				  <form action="" method="post">
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47"><input name="subcat" type="text" size="20" /></td>
                    <td class="style47"><input name="add_subcat" type="submit" id="add_subcat" value="Add Sub Category" /></td>
                  </tr>
				  </form>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                  </tr>
                </table>
              </div>
            </div>
          </div></td>
        </tr>
      </table>

</div>
<?php elseif (isset ( $_GET['stat'] )): ?>
<div id="main">
      <h1><a href="../admin/" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">

        <tr>
          <td class="style39"><h1><span class="green">Website Stats</span></h1></td>
        </tr>

        <tr>
          <td class="style39"><div align="right"></div></td>
        </tr>
      </table>
      <table width="100%" border="0" align="center">

        <tr>
          <td width="100%"><div class="splitleft">
            <div class="box">
              <div align="left">
                <table width="100%" border="0">
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47"><span class="style42"><strong>Ads Sold Today:</strong></span></td>
                    <td class="style47"><span class="style42"><strong><?php echo $this->_tpl_vars['ad_sold_today']; ?>
</strong></span></td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47"><span class="style42"><strong>Registered Members:</strong></span></td>
                    <td class="style47"><strong><?php echo $this->_tpl_vars['total_users']; ?>
</strong></td>
                  </tr>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47"><span class="style42"><strong>Ads Sold Today Value:</strong></span></td>
                    <td class="style47"><span class="style42"><strong><?php echo $this->_tpl_vars['CURRENCY']; ?>
<?php echo $this->_tpl_vars['ad_sold_today_value']; ?>
</strong></span></td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47"><span class="style42"><strong>Newsletter Users: </strong></span></td>
                    <td class="style47"><strong><?php echo $this->_tpl_vars['total_newsletter_users']; ?>
</strong></td>
                  </tr>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47"><span class="style42"><strong>Ads Sold This Week: </strong></span></td>
                    <td class="style47"><span class="style42"><strong><?php echo $this->_tpl_vars['ad_sold_week']; ?>
</strong></span></td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47"><span class="style42"><strong>Website Unique Users Today: </strong></span></td>
                    <td class="style47"><strong><?php echo $this->_tpl_vars['unique_users']; ?>
</strong></td>
                  </tr>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47"><span class="style42"><strong>Ads Sold This Week Value:</strong></span></td>
                    <td class="style47"><strong><?php echo $this->_tpl_vars['CURRENCY']; ?>
<?php echo $this->_tpl_vars['ad_sold_week_value']; ?>
</strong></td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47"><span class="style42"><strong>TextLink Earnings Today </strong></span></td>
                    <td class="style47"><strong><?php echo $this->_tpl_vars['CURRENCY']; ?>
<?php echo $this->_tpl_vars['earning_today']; ?>
</strong></td>
                  </tr>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47"><span class="style42"><strong>Total Ads Running: </strong></span></td>
                    <td class="style47"><strong><?php echo $this->_tpl_vars['total_ads']; ?>
</strong></td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47"><span class="style42"><strong>TextLink Earnings This Week </strong></span></td>
                    <td class="style47"><strong><?php echo $this->_tpl_vars['CURRENCY']; ?>
<?php echo $this->_tpl_vars['earning_week']; ?>
</strong></td>
                  </tr>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47"><span class="style42"><strong>Click Throughs Today: </strong></span></td>
                    <td class="style47"><strong><?php echo $this->_tpl_vars['total_clicks']; ?>
</strong></td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47"><span class="style42"><strong>TextLink Earnings This Month </strong></span></td>
                    <td class="style47"><strong><?php echo $this->_tpl_vars['CURRENCY']; ?>
<?php echo $this->_tpl_vars['earning_month']; ?>
</strong></td>
                  </tr>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                  </tr>
                </table>
              </div>
            </div>
          </div></td>
        </tr>
      </table>

</div>
<?php elseif (isset ( $_GET['money'] ) && isset ( $_GET['uid'] )): ?>
<div id="main">
      <h1><a href="../admin/" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">

        <tr>
          <td class="style39"><h1><span class="green">Money Area</span> - Detailed View</h1></td>
        </tr>

        <tr>
          <td class="style39">&nbsp;</td>
        </tr>
        <tr>
          <td class="style39"><strong><?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['money']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php if ($this->_tpl_vars['money'][$this->_sections['num']['index']]['uid'] == $_GET['uid']): ?><?php echo $this->_tpl_vars['money'][$this->_sections['num']['index']]['company']; ?>
<?php endif; ?><?php endfor; endif; ?> Payment Details <br />
Amount To Send: <?php echo $this->_tpl_vars['CURRENCY']; ?>
<?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['money']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php if ($this->_tpl_vars['money'][$this->_sections['num']['index']]['uid'] == $_GET['uid']): ?><?php echo $this->_tpl_vars['money'][$this->_sections['num']['index']]['amount']; ?>
<?php endif; ?><?php endfor; endif; ?> </strong></td>
        </tr>
        <tr>
          <td class="style39"><div align="right"></div></td>
        </tr>
      </table>
      <table width="100%" border="0" align="center">

        <tr>
          <td width="100%"><div class="splitleft">
            <div class="box">
              <div align="left">
                <table width="100%" border="0">
                  <tr>
                    <td>&nbsp;</td>
                    <td><span class="style39">Company</span></td>
                    <td><span class="style47"><?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['money']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php if ($this->_tpl_vars['money'][$this->_sections['num']['index']]['uid'] == $_GET['uid']): ?><?php echo $this->_tpl_vars['money'][$this->_sections['num']['index']]['company']; ?>
<?php endif; ?><?php endfor; endif; ?></span></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><span class="style39">Address</span></td>
                    <td><span class="style47"><?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['money']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php if ($this->_tpl_vars['money'][$this->_sections['num']['index']]['uid'] == $_GET['uid']): ?>
					<?php echo $this->_tpl_vars['money'][$this->_sections['num']['index']]['address']; ?>
<br />
					<?php echo $this->_tpl_vars['money'][$this->_sections['num']['index']]['city']; ?>
<br />
					<?php echo $this->_tpl_vars['money'][$this->_sections['num']['index']]['state']; ?>
	<br />
					<?php echo $this->_tpl_vars['money'][$this->_sections['num']['index']]['country']; ?>

					<?php endif; ?><?php endfor; endif; ?> </span></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><span class="style39">  <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['money']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php if ($this->_tpl_vars['money'][$this->_sections['num']['index']]['uid'] == $_GET['uid']): ?><?php if ($this->_tpl_vars['money'][$this->_sections['num']['index']]['paymethod_id'] == '1'): ?> Paypal address <?php else: ?> Cheque <?php endif; ?><?php endif; ?><?php endfor; endif; ?>
                       Payable to. </span></td>
                    <td><span class="style47"><?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['money']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php if ($this->_tpl_vars['money'][$this->_sections['num']['index']]['uid'] == $_GET['uid']): ?><?php echo $this->_tpl_vars['money'][$this->_sections['num']['index']]['pay_info']; ?>
<?php endif; ?><?php endfor; endif; ?></span></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
              </div>
            </div>
          </div></td>
        </tr>
      </table>

</div>
<?php elseif (isset ( $_GET['money'] )): ?>
<div id="main">
      <h1><a href="../admin/" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">

        <tr>
          <td class="style39"><h1><span class="green">Money Area</span></h1></td>
        </tr>

        <tr>
          <td class="style39"><div align="right"></div></td>
        </tr>
      </table>
      <table width="100%" border="0" align="center">

        <tr>
          <td width="100%"><div class="splitleft">
            <div class="box">
              <div align="left">
                <table width="100%" border="0">
                  <tr>
                    <td width="6%">&nbsp;</td>
                    <td width="16%"><span class="style39">Company</span></td>
                    <td width="29%"><span class="style39">Account Balance </span></td>
                    <td width="26%"><span class="style39">Payment Details </span></td>
                    <td width="23%"><span class="style39">Payment Sent </span></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
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
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['money']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <td>&nbsp;</td>
                    <td><span class="style47"><?php echo $this->_tpl_vars['money'][$this->_sections['num']['index']]['company']; ?>
</span></td>
                    <td><strong><?php echo $this->_tpl_vars['CURRENCY']; ?>
<?php echo $this->_tpl_vars['money'][$this->_sections['num']['index']]['balance']; ?>
</strong></td>
                    <td><span class="style47"><a href="../admin/?money&amp;uid=<?php echo $this->_tpl_vars['money'][$this->_sections['num']['index']]['uid']; ?>
">View Details</a> </span></td>
                    <td><span class="style47"><?php if ($this->_tpl_vars['money'][$this->_sections['num']['index']]['status'] == 'sent'): ?>Sent(or low amount)<?php else: ?><a href="../admin/?money&amp;send_id=<?php echo $this->_tpl_vars['money'][$this->_sections['num']['index']]['uid']; ?>
&amp;amount=<?php echo $this->_tpl_vars['money'][$this->_sections['num']['index']]['amount']; ?>
">Send</a><?php endif; ?></span></td>
                  </tr>
				  <?php endfor; endif; ?>
                </table>
              </div>
            </div>
          </div></td>
        </tr>
      </table>

</div>
<?php elseif (isset ( $_GET['newsl'] )): ?>
<div id="main">
      <h1><a href="../admin/" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">

        <tr>
          <td class="style39"><h1><span class="green">Newsletter</span></h1></td>
        </tr>
      </table>
      <table width="100%" border="0" align="center">

        <tr>
          <td width="100%"><div class="splitleft">
            <div class="box">
              <div align="left">
                <table width="100%" border="0">
                  <tr>
                    <td width="16%" class="style47">&nbsp;</td>
                    <td width="23%" class="style47">&nbsp;</td>
                    <td width="29%" class="style47">&nbsp;</td>
                    <td width="29%" class="style47">&nbsp;</td>
                    <td width="3%" class="style47">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style42"><div align="left"><strong><a href="../admin/?news_mem">View Members </a></strong></div></td>
                    <td class="style42"><div align="left"><strong><a href="../admin/?view_sent">View Sent Newsletters </a> </strong></div></td>
                    <td class="style42"><div align="left"><strong><a href="../admin/?send_newsletter">Send Newsletter</a> </strong></div></td>
                    <td class="style47">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                  </tr>
                </table>
              </div>
            </div>
          </div></td>
        </tr>
      </table>
</div>
<?php elseif (isset ( $_GET['news_mem'] )): ?>
<div id="main">
      <h1><a href="../admin/" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">

        <tr>
          <td class="style39"><h1><span class="green">Newsletter</span> - View Members</h1></td>
        </tr>
      </table>
      <table width="100%" border="0" align="center">

        <tr>
          <td width="100%"><div class="splitleft">
            <div class="box">
              <div align="left">
                <table width="100%" border="0">
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td width="16%" class="style47">&nbsp;</td>
                    <td width="9%" class="style47">&nbsp;</td>
                    <td width="27%" class="style47">&nbsp;</td>
                    <td width="16%" class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                  </tr>
                  <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['email']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <td width="12%" class="style47">&nbsp;</td>
                    <td colspan="4" class="style47"><span class="tips"><strong><?php echo $this->_tpl_vars['email'][$this->_sections['num']['index']]['email']; ?>
</strong></span></td>
                    <td width="20%" class="style47"><a href="../admin/?news_mem&amp;del_email=<?php echo $this->_tpl_vars['email'][$this->_sections['num']['index']]['uid']; ?>
">Delete</a></td>
                  </tr>
                  <?php endfor; endif; ?>

                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td colspan="2" class="style47">
					<form action="" method="post">
					<div align="right">
                        <input name="email" type="text" id="email" size="20" />
                        <input name="add_news" type="submit" class="button" value="Add" />
                    </div>
					</form>
					</td>
                  </tr>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td colspan="2" class="style47">&nbsp;</td>
                  </tr>
                </table>
              </div>
            </div>
          </div></td>
        </tr>
      </table>

</div>
<?php elseif (isset ( $_GET['view_sent'] )): ?>
<div id="main">
      <h1><a href="../admin/" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">

        <tr>
          <td class="style39"><h1><span class="green">Newsletter</span> - View Sent Newsletters</h1></td>
        </tr>
      </table>
      <table width="100%" border="0" align="center">

        <tr>
          <td width="100%"><div class="splitleft">
            <div class="box">
              <div align="left">
                <table width="100%" border="0">
                  <tr>
                    <td width="12%" class="style47">&nbsp;</td>
                    <td width="17%" class="style47">&nbsp;</td>
                    <td width="32%" class="style47">&nbsp;</td>
                    <td width="4%" class="style47">&nbsp;</td>
                    <td width="13%" class="style47">&nbsp;</td>
                    <td width="22%" class="style47">&nbsp;</td>
                  </tr>
				  <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['newsl']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <td class="style39">&nbsp;</td>
                    <td class="style39"><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['newsl'][$this->_sections['num']['index']]['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%y") : smarty_modifier_date_format($_tmp, "%d/%m/%y")); ?>
</strong></td>
                    <td colspan="4" class="style47"><a href="../admin/?newsl_id=<?php echo $this->_tpl_vars['newsl'][$this->_sections['num']['index']]['id']; ?>
"><strong>View Newsletter</strong></a> </td>
                  </tr>
                  <?php endfor; endif; ?>
                  <tr>
                    <td class="style39">&nbsp;</td>
                    <td class="style39">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style39">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                  </tr>
                </table>
              </div>
            </div>
          </div></td>
        </tr>
      </table>

</div>
<?php elseif (isset ( $_GET['newsl_id'] )): ?>
<div id="main">
      <h1><a href="../admin/" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">

        <tr>
          <td class="style39"><h1><span class="green">Newsletter</span> - View Sent Newsletter - <?php echo ((is_array($_tmp=$this->_tpl_vars['news']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%e %B %Y") : smarty_modifier_date_format($_tmp, "%e %B %Y")); ?>
</h1></td>
        </tr>
      </table>
      <table width="100%" border="0" align="center">

        <tr>
          <td width="100%"><div class="splitleft">
            <div class="box">
              <div align="left">
                <table width="100%" border="0">
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td width="45%" class="style47">&nbsp;</td>
                    <td width="43%" class="style47">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="12%" class="style47">&nbsp;</td>
                    <td colspan="2" class="style47">This newsletter was sent to <?php echo $this->_tpl_vars['news']['total']; ?>
 users. </td>
                  </tr>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                  </tr>

                  <tr>
                    <td class="style39">&nbsp;</td>
                    <td colspan="2" class="style39">Subject<a href="admin_newsletter_viewsent_21062006.html"></a>: <?php echo $this->_tpl_vars['news']['sub']; ?>
</td>
                  </tr>
                  <tr>
                    <td class="style39">&nbsp;</td>
                    <td class="style39">&nbsp;</td>
                    <td class="style47"><a href="admin_newsletter_viewsent_21062006.html"></a> </td>
                  </tr>
                  <tr>
                    <td class="style39">&nbsp;</td>
                    <td class="style39">Message</td>
                    <td class="style47">&nbsp;</td>
                  </tr>

                  <tr>
                    <td class="style39">&nbsp;</td>
                    <td colspan="2" class="style47"><?php echo ((is_array($_tmp=$this->_tpl_vars['news']['body'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
                  </tr>
                  <tr>
                    <td class="style39">&nbsp;</td>
                    <td colspan="2" class="style47">&nbsp;</td>
                  </tr>
                </table>
              </div>
            </div>
          </div></td>
        </tr>
      </table>

</div>

<?php elseif (isset ( $_GET['send_newsletter'] )): ?>
<div id="main">
      <h1><a href="../admin/" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">

        <tr>
          <td class="style39"><h1><span class="green">Newsletter</span> - Send Newsletter</h1></td>
        </tr>
      </table>
	  <form action="../admin/?view_sent" method="post"><table width="100%" border="0" align="center">

        <tr>
          <td width="100%"><div class="splitleft">
            <div class="box">
              <div align="left">
                <table width="100%" border="0">
                  <tr>
                    <td width="7%" class="style47">&nbsp;</td>
                    <td width="36%" class="style47">&nbsp;</td>
                    <td width="50%" class="style47">&nbsp;</td>
                    <td width="7%" class="style47">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style39">Newsletter Subject</td>
                    <td class="style47"><input type="text" name="sub" id="sub" /></td>
                    <td class="style47">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47"><span class="style39">Newsletter Message</span></td>
                    <td class="style47"><textarea name="body" id="body" cols="65" rows="5"></textarea></td>
                    <td class="style47">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47"><div align="right">
                      <input type="submit" name="send_emails" id="send_emails" value="Send" class="button" />
                    </div></td>
                    <td class="style47">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                  </tr>
                </table>
              </div>
            </div>
          </div></td>
        </tr>
      </table></form>


</div>
<?php elseif (isset ( $_GET['featured'] )): ?>
<div id="main">
      <h1><a href="../admin/" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">

        <tr>
          <td class="style39"><h1><span class="green">Featured Retailers</span></h1></td>
        </tr>
      </table>
      <table width="100%" border="0" align="center">

        <tr>
          <td width="100%"><div class="splitleft">
            <div class="box">
              <div align="left">
                <table width="100%" border="0">
                  <tr>
                    <td><span class="style39">Company</span></td>
                    <td><span class="style39">Start Date </span></td>
                    <td><span class="style39">End Date </span></td>
                    <td><span class="style39">Length</span></td>
                    <td><span class="style39">Edit</span></td>
                    <td><span class="style39">Delete</span></td>
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
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['cf']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <td><span class="style47"><?php echo $this->_tpl_vars['cf'][$this->_sections['num']['index']]['company']; ?>
</span></td>
                    <td><span class="style47"><?php echo ((is_array($_tmp=$this->_tpl_vars['cf'][$this->_sections['num']['index']]['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%y") : smarty_modifier_date_format($_tmp, "%d/%m/%y")); ?>
</span></td>
                    <td><span class="style47"><?php echo ((is_array($_tmp=$this->_tpl_vars['cf'][$this->_sections['num']['index']]['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%y") : smarty_modifier_date_format($_tmp, "%d/%m/%y")); ?>
</span></td>
                    <td><span class="style47"><?php echo $this->_tpl_vars['cf'][$this->_sections['num']['index']]['length']; ?>
 Month </span></td>
                    <td><span class="style47"><a href="../admin/?edit_fid=<?php echo $this->_tpl_vars['cf'][$this->_sections['num']['index']]['fid']; ?>
">Edit</a> </span></td>
                    <td><span class="style47"><a href="../admin/?del_fid=<?php echo $this->_tpl_vars['cf'][$this->_sections['num']['index']]['fid']; ?>
&amp;featured" onclick="javascript: return confirm('Do you really want to delete this request?');">Delete</a></span></td>
                  </tr>
				  <?php endfor; endif; ?>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2"><span class="style39">Waiting Companies </span></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></span></td>
                    <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></span></td>
                    <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></td>
                    <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></span></td>
                    <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></span></td>
                    <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></span></td>
                  </tr>
                  <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['wf']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <td><span class="style47"><?php echo $this->_tpl_vars['wf'][$this->_sections['num']['index']]['company']; ?>
</span></td>
                    <td><span class="style47"><?php echo ((is_array($_tmp=$this->_tpl_vars['wf'][$this->_sections['num']['index']]['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%y") : smarty_modifier_date_format($_tmp, "%d/%m/%y")); ?>
</span></td>
                    <td><span class="style47"><?php echo ((is_array($_tmp=$this->_tpl_vars['wf'][$this->_sections['num']['index']]['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%y") : smarty_modifier_date_format($_tmp, "%d/%m/%y")); ?>
</span></td>
                    <td><span class="style47"><?php echo $this->_tpl_vars['wf'][$this->_sections['num']['index']]['length']; ?>
 Month </span></td>
                    <td><span class="style47"><a href="../admin/?edit_fid=<?php echo $this->_tpl_vars['wf'][$this->_sections['num']['index']]['fid']; ?>
">Edit</a> </span></td>
                    <td><span class="style47"><a href="../admin/?del_fid=<?php echo $this->_tpl_vars['wf'][$this->_sections['num']['index']]['fid']; ?>
&amp;featured" onclick="javascript: return confirm('Do you really want to delete this request?');">Delete</a></span></td>
                  </tr>
				  <?php endfor; endif; ?>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2"><span class="style39">Awaiting Approval </span></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></span></td>
                    <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></span></td>
                    <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></td>
                    <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></span></td>
                    <td><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/Bullet_green.gif" width="19" height="16" /></span></td>
                    <td>&nbsp;</td>
                  </tr>
                   <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['af']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <td><span class="style47"><?php echo $this->_tpl_vars['af'][$this->_sections['num']['index']]['company']; ?>
</span></td>
                    <td><span class="style47"><?php echo ((is_array($_tmp=$this->_tpl_vars['af'][$this->_sections['num']['index']]['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%y") : smarty_modifier_date_format($_tmp, "%d/%m/%y")); ?>
</span></td>
                    <td><span class="style47"><?php echo ((is_array($_tmp=$this->_tpl_vars['af'][$this->_sections['num']['index']]['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%y") : smarty_modifier_date_format($_tmp, "%d/%m/%y")); ?>
</span></td>
                    <td><span class="style47"><?php echo $this->_tpl_vars['af'][$this->_sections['num']['index']]['length']; ?>
 Month </span></td>
                    <td><span class="style47"><a href="../admin/?edit_fid=<?php echo $this->_tpl_vars['af'][$this->_sections['num']['index']]['fid']; ?>
">View</a> </span></td>
                    <td><span class="style47"><a href="../admin/?del_fid=<?php echo $this->_tpl_vars['af'][$this->_sections['num']['index']]['fid']; ?>
&amp;featured" onclick="javascript: return confirm('Do you really want to delete this request?');">Delete</a></span></td>
                  </tr>
				  <?php endfor; endif; ?>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="2"><a href="../admin/?edit_fid=0&amp;add_ff=1">Add Free Featured Retailers</a></td>
                    <td colspan="2">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
                <div align="right"></div>
              </div>
            </div>
          </div></td>
        </tr>
      </table>

</div>
<?php elseif (isset ( $_GET['edit_fid'] )): ?>
<div id="main">
      <h1><a href="account.html" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">

        <tr>
          <td class="style39"><h1><span class="green">Featured Retailers</span> - Add/Edit</h1></td>
        </tr>
      </table>
      <table width="100%" border="0" align="center">

        <tr>
          <td width="100%"><div class="splitleft">
            <div class="box">
              <div align="left">
			  <form action="" method="post" enctype="multipart/form-data">
			    <table width="100%" border="0">
                  <tr>
                    <td><span class="style39">Company</span></td>
                    <td>
                    <input name="wname" type="hidden" id="wname3250" value="<?php echo $this->_tpl_vars['ef']['wname']; ?>
"  />
                    <?php if (isset ( $_GET['add_ff'] )): ?><input name="free" type="hidden" value="true" /><?php endif; ?>
                    <select name="pid" id="pid" onchange="javascript: document.getElementById('wname3250').value=this.options[this.selectedIndex].text;">
                        <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['web_list']['pid'],'output' => $this->_tpl_vars['web_list']['websitename'],'selected' => $this->_tpl_vars['ef']['pid']), $this);?>

                      </select>

                      <?php echo '
                      	<script type="text/javascript">
                        	document.getElementById(\'wname3250\').value = document.getElementById(\'pid\').options[document.getElementById(\'pid\').selectedIndex].text ;
                        </script>
                      '; ?>


                      </td>
                  </tr>
                  <tr>
                    <td><span class="style39">Start Date </span></td>
                    <td><?php echo smarty_function_html_select_date(array('time' => $this->_tpl_vars['ef']['start'],'end_year' => "+1",'field_order' => 'DMY'), $this);?>
</td>
                  </tr>
                  <tr>
                    <td><span class="style39">Featured Length </span></td>
                    <td><select name="length" id="length">
                    <option value="1" <?php if ($this->_tpl_vars['ef']['length'] == '1'): ?> selected="selected" <?php endif; ?>>1 Month</option>
                    <option value="2" <?php if ($this->_tpl_vars['ef']['length'] == '2'): ?> selected="selected" <?php endif; ?>>2 Months</option>
                    <option value="3" <?php if ($this->_tpl_vars['ef']['length'] == '3'): ?> selected="selected" <?php endif; ?>>3 Months</option>
                  </select></td>
                  </tr>
                  <tr>
                    <td><span class="style39">Logo</span></td>
                    <td><input name="logo" type="file" id="logo" size="25" /></td>
                  </tr>
                  <tr>
                    <td><span class="style39">Description</span></td>
                    <td><textarea name="des" cols="30" rows="8" id="des"><?php echo ((is_array($_tmp=$this->_tpl_vars['ef']['des'])) ? $this->_run_mod_handler('sslash', true, $_tmp) : stripslashes($_tmp)); ?>
</textarea></td>
                  </tr>

				  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><span class="style39">Logo URL </span></td>
                    <td><a href="<?php echo $this->_tpl_vars['ef']['logo_url']; ?>
" target="_blank"><span class="style39"><?php echo $this->_tpl_vars['ef']['logo_url']; ?>
</span></a></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><input name="update_f" type="submit" class="button" id="update_f" value="Add to Featured Retailer" /></td>
                    <td>&nbsp;</td>
                  </tr>
                </table></form>

                <div align="right"></div>
              </div>
            </div>
          </div></td>
        </tr>
      </table>

</div>
<?php elseif (isset ( $_GET['rates'] )): ?>
<div id="main">
      <h1><a href="../admin/" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">

        <tr>
          <td class="style39"><h1><span class="green">Pay Rates</span></h1></td>
        </tr>
      </table>
      <table width="100%" border="0" align="center">

        <tr>
          <td width="100%"><div class="splitleft">
            <div class="box">
              <div align="left">
                <table width="100%" cellspacing="1" cellpadding="5" border="0">
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td width="8%">&nbsp;</td>
                    <td width="34%"><b>Website</b></td>
                    <td width="28%"><b>Rate</b></td>
                    <td width="30%"></td>
                  </tr>
                    <form action="" method="post" >
				  <tr>
                    <td class="td">&nbsp;</td>

                      <td class="td"><select name="pid" id="pid" onchange="javascript: if(this.value != -1) window.location='../admin/?rates&pid='+this.value;">
					  <option value="-1"> - select - </option>
                        <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['web_list']['pid'],'output' => $this->_tpl_vars['web_list']['websitename'],'selected' => $_GET['pid']), $this);?>

                      </select>
</td>
                    <td class="td"><input name="rate" type="text" class="effect" value="<?php if ($this->_tpl_vars['pay_rate'] == '0'): ?><?php echo $this->_tpl_vars['_config']['default_pay_rate']; ?>
<?php else: ?><?php echo $this->_tpl_vars['pay_rate']; ?>
<?php endif; ?>" size="5" alt="blank" />
                      %                        </td>
                      <td class="td"><input name="update_pay_rate" type="submit" class="button" id="update_pay_rate" value="Update" /></td>

                  </tr>
				  </form>
				     <form action="" method="post" >
                  <tr>
                    <td class="td">&nbsp;</td>
                      <td class="td"><b>Default Rate</b></td>
                      <td class="td"><input type="text" name="rate" size="5" value="<?php echo $this->_tpl_vars['_config']['default_pay_rate']; ?>
" class="effect" alt="blank" />
                        %</td>
                      <td class="td"><input name="update_default_pay_rate" type="submit" class="button" id="update_pay_rate" value="Update" /></td>

                  </tr>
				  </form>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                  </tr>
                </table>
              </div>
            </div>
          </div></td>
        </tr>
      </table>

</div>
<?php elseif (isset ( $_GET['acc'] )): ?>
<div id="main">
      <h1><a href="../admin/" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">

        <tr>
          <td class="style39"><h1><span class="green">Website Users</span></h1></td>
        </tr>
      </table>
      <table width="100%" border="0" align="center">

        <tr>
          <td width="100%"><div class="splitleft">
            <div class="box">
              <div align="left">
                <table width="100%" cellspacing="1" cellpadding="5" border="0">
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td width="2%">&nbsp;</td>
                    <td width="28%"><strong>Username</strong></td>
                    <td width="14%"><strong>Email</strong></td>
                    <td width="10%"><strong>Signup Date</strong></td>
                    <td width="10%"><strong>Last Login</strong></td>
                    <td width="10%"><strong>Actions</strong></td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>

                      <td class="td">&nbsp;</td>
                      <td class="td">&nbsp;</td>
                      <td class="td">&nbsp;</td>
                      <td class="td">&nbsp;</td>
                      <td class="td">&nbsp;</td>

                  </tr>
				  <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['acc']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <td class="td">&nbsp;</td>
                      <td class="td"><?php echo $this->_tpl_vars['acc'][$this->_sections['num']['index']]['uname']; ?>
</td>
                      <td class="td"><?php echo $this->_tpl_vars['acc'][$this->_sections['num']['index']]['email']; ?>
</td>
                      <td class="td"><?php echo ((is_array($_tmp=$this->_tpl_vars['acc'][$this->_sections['num']['index']]['signup'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%y") : smarty_modifier_date_format($_tmp, "%d/%m/%y")); ?>
</td>
                      <td class="td"><?php echo ((is_array($_tmp=$this->_tpl_vars['acc'][$this->_sections['num']['index']]['last'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%y") : smarty_modifier_date_format($_tmp, "%d/%m/%y")); ?>
</td>
                      <td class="td"><a href="../admin/?acc&suspend_acc_id=<?php echo $this->_tpl_vars['acc'][$this->_sections['num']['index']]['uid']; ?>
&ts=<?php echo $this->_tpl_vars['acc'][$this->_sections['num']['index']]['status']; ?>
">
                      <img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/icon_arrow<?php echo $this->_tpl_vars['acc'][$this->_sections['num']['index']]['status']; ?>
.gif" alt="Suspend/Active Account" width="16" height="16" border="0" /></a> <a href="update_acc.php?acc_id=<?php echo $this->_tpl_vars['acc'][$this->_sections['num']['index']]['uid']; ?>
"><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/icon_edit.gif" alt="User Profile" width="16" height="16" border="0" /></a> <a href="../admin/?acc&amp;del_acc_id=<?php echo $this->_tpl_vars['acc'][$this->_sections['num']['index']]['uid']; ?>
" onclick="javascript: if(confirm('Do You Really Want To Delete This Account?')) return true; else return false;"><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/icon_delete.gif" alt="Delete Account" width="16" height="16" border="0" /></a></td>

                  </tr>
				  <?php endfor; endif; ?>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                  </tr>
                </table>
              </div>
            </div>
          </div></td>
        </tr>
      </table>

</div>
<?php elseif (isset ( $_GET['credit'] )): ?>
<div id="main">
      <h1><a href="../admin/" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">

        <tr>
          <td class="style39"><h1><span class="green">Credit User Accounts</span></h1></td>
        </tr>
      </table>
      <table width="100%" border="0" align="center">

        <tr>
          <td width="100%"><div class="splitleft">
            <div class="box">
              <div align="left">
			  <form action="" method="post"><table width="100%" cellspacing="1" cellpadding="5" border="0">
                  <tr>
                    <td colspan="4" class="error"><?php echo $this->_tpl_vars['msg']; ?>
</td>
                  </tr>

                  <tr>
                    <td width="28%" class="td">&nbsp;</td>

                      <td width="13%" class="td"><b>User Name </b></td>
                      <td width="29%" class="td"><select name="uid" >
                        <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['u_acc'],'selected' => $_POST['uid']), $this);?>

                      </select></td>
                      <td width="30%" class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>

                      <td class="td"><b>Amount</b></td>
                      <td class="td"><?php echo $this->_tpl_vars['CURRENCY']; ?>

                        <input name="amount" type="text" class="effect" id="amount" size="5" alt="blank" /></td>
                      <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                    <td class="td"><div align="right">
                      <input name="credit_acc" type="submit" class="button" id="credit_acc" value="Add" />
                    </div></td>
                    <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                  </tr>
                  </table>
			  </form>

              <div align="right"></div>
              </div>
            </div>
          </div></td>
        </tr>
      </table>

</div>
<?php elseif (isset ( $_GET['pref'] )): ?>
<div id="main">
      <h1><a href="../admin/" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">

        <tr>
          <td class="style39"><h1><span class="green"><?php echo $this->_tpl_vars['_lang']['sys_pref']; ?>
</span></h1></td>
        </tr>
      </table>
      <table width="100%" border="0" align="center">

        <tr>
          <td width="100%"><div class="splitleft">
            <div class="box">
              <div align="left">
			  <form action="" method="post"><table width="100%" cellspacing="1" cellpadding="5" border="0">
                  <tr>
                    <td width="7%">&nbsp;</td>
                    <td width="47%">&nbsp;</td>
                    <td colspan="2">&nbsp;</td>
                    <td width="20%"></td>
                  </tr>

                  <tr>
                    <td class="td">&nbsp;</td>

                      <td class="td"><b>Website Name</b></td>
                      <td colspan="2" class="td"><input name="website_name" type="text" class="effect" id="website_name" value="<?php echo $this->_tpl_vars['_config']['website_name']; ?>
" size="20" alt="blank" /></td>
                      <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td"><strong>Root URL</strong></td>
                    <td colspan="2" class="td"><input name="www" type="text" class="effect" value="<?php echo $this->_tpl_vars['_config']['www']; ?>
" size="20" alt="blank" /></td>
                    <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>

                      <td class="td"><b>Admins Email Address</b></td>
                      <td colspan="2" class="td"><input name="admin_email" type="text" class="effect" id="admin_email" value="<?php echo $this->_tpl_vars['_config']['admin_email']; ?>
" size="20" alt="blank" /></td>
                      <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                    <td colspan="2" class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td"><strong>Payment Gateway</strong></td>
                    <td colspan="2" class="td">

                        <select name="pay_method" id="pay_method">
                          <option value="PayPal"  <?php if ($this->_tpl_vars['_config']['pay_method'] == 'PayPal'): ?> selected="selected" <?php endif; ?>>Paypal</option>
                          <option value="2CO"  <?php if ($this->_tpl_vars['_config']['pay_method'] == '2CO'): ?> selected="selected" <?php endif; ?>>2checkout.com</option>
                          <option value="Setcom"  <?php if ($this->_tpl_vars['_config']['pay_method'] == 'Setcom'): ?> selected="selected" <?php endif; ?>>Setcom.com</option>
                        </select>
                      </td>
                    <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td"><strong>Paypal Email Address</strong></td>
                    <td colspan="2" class="td"><input name="PayPal" type="text" class="effect" id="PayPal" value="<?php echo $this->_tpl_vars['_config']['PayPal']; ?>
" size="20"  /></td>
                    <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td"><strong>2checkout.com User ID</strong></td>
                    <td colspan="2" class="td"><input name="2CO" type="text" class="effect" id="2CO" value="<?php echo $this->_tpl_vars['_config']['2CO']; ?>
" size="20"  /></td>
                    <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td"><strong>setcom.com User ID</strong></td>
                    <td colspan="2" class="td"><input name="Setcom" type="text" class="effect" id="Setcom" value="<?php echo $this->_tpl_vars['_config']['Setcom']; ?>
" size="20"  /></td>
                    <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                    <td colspan="2" class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td"><strong>Default Currency</strong></td>
                    <td colspan="2" class="td"><h2>
                      <select name="currency" style="width: 100px;" >
                        <option value="&pound;"  <?php if ($this->_tpl_vars['_config']['currency'] == '&pound;'): ?> selected="selected" <?php endif; ?>>&pound;</option>
                        <option value="$"  <?php if ($this->_tpl_vars['_config']['currency'] == '$'): ?> selected="selected" <?php endif; ?>>$</option>
                        <option value="&#8364;"  <?php if ($this->_tpl_vars['_config']['currency'] == '&#8364;' || $this->_tpl_vars['_config']['currency'] == '€'): ?> selected="selected" <?php endif; ?>>&#8364;</option>
                      </select>
                    </h2></td>
                    <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                    <td colspan="2" class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                  </tr>

                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td"><strong>Featured Retailers Cost</strong></td>
                    <td colspan="2" class="td"><strong>
                      <?php echo $this->_tpl_vars['CURRENCY']; ?>
<input name="featured_rate" type="text" class="effect" id="featured_rate" value="<?php echo $this->_tpl_vars['_config']['featured_rate']; ?>
" size="10"  /> per month
                    </strong></td>
                    <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td"><strong>Number of Featured Retailers</strong></td>
                    <td colspan="2" class="td"><select name="max_featured" id="max_featured">
                      <option <?php if ($this->_tpl_vars['_config']['max_featured'] == 1): ?> selected="selected" <?php endif; ?> value="1">1</option>
                      <option <?php if ($this->_tpl_vars['_config']['max_featured'] == 2): ?> selected="selected" <?php endif; ?> value="2">2</option>
                      <option <?php if ($this->_tpl_vars['_config']['max_featured'] == 3): ?> selected="selected" <?php endif; ?> value="3">3</option>
                      <option <?php if ($this->_tpl_vars['_config']['max_featured'] == 4): ?> selected="selected" <?php endif; ?> value="4">4</option>
                      <option <?php if ($this->_tpl_vars['_config']['max_featured'] == 5): ?> selected="selected" <?php endif; ?> value="5">5</option>
                      <option <?php if ($this->_tpl_vars['_config']['max_featured'] == 6): ?> selected="selected" <?php endif; ?> value="6">6</option>
                      <option <?php if ($this->_tpl_vars['_config']['max_featured'] == 7): ?> selected="selected" <?php endif; ?> value="7">7</option>
                      <option <?php if ($this->_tpl_vars['_config']['max_featured'] == 8): ?> selected="selected" <?php endif; ?> value="8">8</option>
                      <option <?php if ($this->_tpl_vars['_config']['max_featured'] == 9): ?> selected="selected" <?php endif; ?> value="9">9</option>
                      <option <?php if ($this->_tpl_vars['_config']['max_featured'] == 10): ?> selected="selected" <?php endif; ?> value="10">10</option>
                     </select></td>
                    <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                    <td colspan="2" class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td nowrap="nowrap" class="td"><strong>Minimum Payout Amount For Publishers</strong></td>
                    <td colspan="2" class="td"><strong>
                      <?php echo $this->_tpl_vars['CURRENCY']; ?>

                      <input name="min_pub_payout" type="text" class="effect" id="min_pub_payout" value="<?php echo $this->_tpl_vars['_config']['min_pub_payout']; ?>
" size="10"  />
                    </strong></td>
                    <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                    <td colspan="2" class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td"><strong>Default Language</strong></td>
                    <td colspan="2" class="td"><select name="lang" >
                     		<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['lang_files'],'selected' => $this->_tpl_vars['_config']['lang'],'output' => $this->_tpl_vars['lang_files']), $this);?>

                    </select></td>
                    <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                    <td colspan="2" class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td"><strong>Website Template</strong></td>
                    <td colspan="2" class="td"><select name="template">
                      <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['tpls'],'selected' => $this->_tpl_vars['sel_tmp'],'output' => $this->_tpl_vars['tpls']), $this);?>

                    </select></td>
                    <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                    <td colspan="2" class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                  </tr>

                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td"><strong>License Number</strong></td>
                    <td colspan="2" align="left" class="td"><input name="key_string" type="text" id="key_string" value="<?php echo $this->_tpl_vars['_config']['key_string']; ?>
" /></td>
                    <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                    <td colspan="2" align="right" class="td"><input type="submit" name="update_config" id="update_config" value="Update" class="button" /></td>
                    <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                    <td colspan="2" class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                  </tr>
                </table>
			  </form>

              <div align="right"></div>
              </div>
            </div>
          </div></td>
        </tr>
      </table>

</div>
<?php elseif (isset ( $_GET['pass'] )): ?>
<div id="main">
      <h1><a href="../admin/" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">

        <tr>
          <td class="style39"><h1><span class="green">Admin Password</span></h1></td>
        </tr>
      </table>
      <table width="100%" border="0" align="center">

        <tr>
          <td width="100%"><div class="splitleft">
            <div class="box">
              <div align="left">
			  <?php echo '
			   <form action="" method="post" onsubmit="javascript: if (this.new_pass.value != this.new_pass2.value) {alert(\'Password does not match!\'); return false} else return true;">
			   '; ?>

                <table width="100%" cellspacing="1" cellpadding="5" border="0">
                  <tr>
                    <td colspan="4" class="error"><?php echo $this->_tpl_vars['msg']; ?>
</td>
                  </tr>
                  <tr>
                    <td width="19%">&nbsp;</td>
                    <td width="24%"><strong>Admin User Name</strong></td>
                    <td width="27%"><span class="td">
                      <input name="name" type="text" class="effect" value="<?php echo $_SESSION['admin_username']; ?>
" size="20" alt="blank" />
                    </span></td>
                    <td width="30%"></td>
                  </tr>

                  <tr>
                    <td class="td">&nbsp;</td>

                      <td class="td"><b>Old Password</b></td>
                      <td class="td"><input name="old_pass" type="password" class="effect" id="old_pass" size="20" alt="blank" /></td>
                      <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>

                      <td class="td"><b>New Password</b></td>
                      <td class="td"><input name="new_pass" type="password" class="effect" id="new_pass" size="20" alt="blank" /></td>
                      <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td"><b>Confirm New Password</b></td>
                    <td class="td"><input name="new_pass2" type="password" class="effect" id="new_pass2" size="20" alt="blank" /></td>
                    <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                    <td class="td"><div align="right">
                      <input type="submit" name="change_pass" id="change_pass" value="Update" />
                    </div></td>
                    <td class="td">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                    <td class="td">&nbsp;</td>
                  </tr>
                </table>
				</form>
              <div align="right"></div>
              </div>
            </div>
          </div></td>
        </tr>
      </table>

</div>

<?php elseif (isset ( $_GET['size'] )): ?>
<div id="main">
      <h1><a href="../admin/" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">

        <tr>
          <td class="style39"><h1><span class="green">Ad Layout Size/Length</span> </h1></td>
        </tr>
      </table>
      <table width="100%" border="0" align="center">

        <tr>
          <td width="100%"><div class="splitleft">
            <div class="box">
              <div align="left">
                <table width="100%" border="0">

                  <tr>
                    <td valign="top"><table width="100%" border="0">
                      <tr>
                        <td colspan="2">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2"><strong>Text Ad Lengths</strong></td>
                      </tr>
                      <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['txt_len']['length']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <td><?php echo $this->_tpl_vars['txt_len']['length'][$this->_sections['num']['index']]; ?>
 Day Text Ad </td>
                        <td><a href="../admin/?size&del_txt_len=<?php echo $this->_tpl_vars['txt_len']['id'][$this->_sections['num']['index']]; ?>
">delete</a></td>
                      </tr>
                      <?php endfor; endif; ?>
                      <tr>
                        <td colspan="2">&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="2"><form id="form2" name="form2" method="post" action="">
                          <input name="len" type="text" id="len" size="4" maxlength="4" />
                                                Day Text Ad
                                                <input type="submit" name="add_txt_len" id="add_txt_len" value="Add" />
                        </form>                        </td>
                      </tr>
                    </table></td>
                    <td valign="top">&nbsp;</td>
                    <td valign="top">&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
              </div>
            </div>
          </div></td>
        </tr>
      </table>

</div>

<?php elseif (isset ( $_GET['lang'] )): ?>
<div id="main">
      <h1><a href="../admin/" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">

        <tr>
          <td class="style39"><h1><span class="green"><?php echo $this->_tpl_vars['_lang']['langs']; ?>
</span> </h1></td>
        </tr>
      </table>
      <table width="100%" border="0" align="center">

        <tr>
          <td width="100%"><div class="splitleft">
            <div class="box">
              <div align="left">
                <table width="100%" border="0">
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td width="16%" class="style47">English</td>
                    <td width="9%" class="style47">&nbsp;</td>
                    <td width="27%" class="style47">&nbsp;</td>
                    <td width="16%" class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                  </tr>
                  <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['lang']['lid']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <td width="12%" class="style47">&nbsp;</td>
                    <td colspan="4" class="style47"><span class="tips"><strong><?php echo $this->_tpl_vars['lang']['language'][$this->_sections['num']['index']]; ?>
</strong></span></td>
                    <td width="20%" class="style47"><a href="../admin/?lang&amp;del_lang=<?php echo $this->_tpl_vars['lang']['lid'][$this->_sections['num']['index']]; ?>
">Delete</a></td>
                  </tr>
                  <?php endfor; endif; ?>

                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td colspan="2" class="style47">
					<form action="" method="post">
					<div align="right">
                        <input name="lang_name" type="text" size="20" />
                        <input name="add_lang" type="submit" class="button" value="Add" />
                    </div>
					</form>
					</td>
                  </tr>
                  <tr>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td class="style47">&nbsp;</td>
                    <td colspan="2" class="style47">&nbsp;</td>
                  </tr>
                </table>
              </div>
            </div>
          </div></td>
        </tr>
      </table>

</div>
<?php else: ?>
<div id="main">
      <h1><a href="../admin/" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">

        <tr>
          <td class="style39"><h1><span class="green"><?php echo $this->_tpl_vars['_lang']['home']; ?>
</span> </h1></td>
        </tr>
      </table>
      <table width="100%" border="0" align="center">

        <tr>
          <td width="100%"><div class="splitleft">
            <div class="box">
              <div align="left">
                <table width="95%" border="0" align="center">
                  <tr>
                    <td class="style35">&nbsp;</td>
                    <td class="style35">&nbsp;</td>
                    <td class="style35">&nbsp;</td>
                    <td class="style35">&nbsp;</td>
                    <td class="style35">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="2%" class="style35">&nbsp;</td>
                    <td width="22%" nowrap="nowrap" class="style35"><strong><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/sizes.png" alt="" width="16" height="16" border="0" align="absmiddle" /> <a href="../admin/?size">Ad Layout Size/Length</a> </strong></td>
                    <td width="28%" class="style35"><strong><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/images.png" alt="" width="16" height="16" border="0" align="absmiddle" /> <a href="../admin/?cat"><?php echo $this->_tpl_vars['_lang']['prod_cats']; ?>
</a> </strong></td>
                    <td width="28%" class="style35"><strong><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/language.png" alt="" width="16" height="16" border="0" align="absmiddle" /> <a href="../admin/?lang"><?php echo $this->_tpl_vars['_lang']['langs']; ?>
</a> </strong></td>
                    <td width="22%" nowrap="nowrap" class="style35"><strong><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/sizes.png" alt="" width="16" height="16" border="0" align="absmiddle" /> <a href="../admin/?size">Ad Layout Size/Length</a> </strong></td>
                  </tr>
                  <tr>
                    <td class="style35">&nbsp;</td>
                    <td class="style35">&nbsp;</td>
                    <td class="style35">&nbsp;</td>
                    <td class="style35">&nbsp;</td>
                    <td class="style35">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="style35">&nbsp;</td>
                    <td class="style35">&nbsp;</td>
                    <td class="style35">&nbsp;</td>
                    <td class="style35">&nbsp;</td>
                    <td class="style35">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="style35">&nbsp;</td>
                    <td class="style35"><strong><span class="style3"><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/money_dollar.png" alt="" width="16" height="16" border="0" align="absmiddle" /></span> <a href="../admin/?rates">Pay Rates</a> </strong></td>
                    <td class="style35"><strong><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/group.png" alt="" width="16" height="16" border="0" align="absbottom" /> <a href="../admin/?acc">User Accounts</a> </strong></td>
                    <td nowrap="nowrap" class="style35"><strong><span class="style3"><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/money_dollar.png" alt="" width="16" height="16" border="0" align="absmiddle" /></span> <a href="../admin/?credit">Credit User Accounts</a> </strong></td>
                  </tr>
                  <tr>
                    <td class="style35">&nbsp;</td>
                    <td class="style35">&nbsp;</td>
                    <td class="style35">&nbsp;</td>
                    <td class="style35">&nbsp;</td>
                    <td class="style35">&nbsp;</td>
                  </tr>
                </table>
              </div>
            </div>
          </div></td>
        </tr>
      </table>

</div>
<?php endif; ?>