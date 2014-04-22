<?php /* Smarty version 2.6.18, created on 2014-04-14 12:20:05
         compiled from user.tpl */ ?>
<div id="main">
      <h1><a href="../admin/" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">        
        <tr>
          <td class="style39"><h1><span class="green">User Manager</span></h1></td>
        </tr>
      </table>	  
      <table width="100%" border="0" align="center" style="min-width:869px">      
        <tr>
		<form action="" method="get" name="frm_coupon">
		<div style="text-align: left; background: #fff" class="frm_search">
			Username:
			<input type="text" value="" name="keyword"> 
		   
			<input type="submit" value="Find">
			</form>
		 </div>
          <td width="100%"><div class="splitleft">		  
            <div class="box">
              <div align="left">
			     <form action="" method="post" name="frm_bank">
                 <table class="tbl-list" id="lst-submit-url">
                    <tr style="font-weight: bold">
                        <td width="28">ID</td>
                        <td>Username</td>
                        <td>Full name</td>
                        <td>Mobile</td>
                        <td>Email</td>
                        <td>Type</td>
                        <td>Adv Money</td>
                        <td>Pub Money</td>
						<td>Affiliate Earnings</td>
                    </tr>
                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['all_user']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <tr>
                        <td><?php echo $this->_tpl_vars['all_user'][$this->_sections['i']['index']]['uid']; ?>
</td>
                        <td><strong><a href="pay-session.php?uid=<?php echo $this->_tpl_vars['all_user'][$this->_sections['i']['index']]['uid']; ?>
"><?php echo $this->_tpl_vars['all_user'][$this->_sections['i']['index']]['username']; ?>
</a></strong></td>
                        <td><?php echo $this->_tpl_vars['all_user'][$this->_sections['i']['index']]['fullname']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['all_user'][$this->_sections['i']['index']]['phone']; ?>
</td>
                        <td><a title="Add Coupon TextLink card" href="/admin/coupon-card.php?uid=<?php echo $this->_tpl_vars['all_user'][$this->_sections['i']['index']]['uid']; ?>
"><?php echo $this->_tpl_vars['all_user'][$this->_sections['i']['index']]['email']; ?>
</a></td>
                        <td><?php echo $this->_tpl_vars['all_user'][$this->_sections['i']['index']]['utype']; ?>
</td>
                        <td>$<?php echo $this->_tpl_vars['all_user'][$this->_sections['i']['index']]['adv_money']; ?>
</td>
                        <td>$<?php echo $this->_tpl_vars['all_user'][$this->_sections['i']['index']]['pub_money']; ?>
</td>
						<td><a href="/admin/affiliateinfo.php?uid=<?php echo $this->_tpl_vars['all_user'][$this->_sections['i']['index']]['uid']; ?>
">$<?php echo $this->_tpl_vars['cls_ref_user']->getAffiliateEarning($this->_tpl_vars['all_user'][$this->_sections['i']['index']]['uid']); ?>
</a><br />
						<span style="color:#9EC630">Advertiser: $<?php echo $this->_tpl_vars['cls_ref_user']->getAffiliateEarning($this->_tpl_vars['all_user'][$this->_sections['i']['index']]['uid'],'advertiser'); ?>
<br />
						Publisher: $<?php echo $this->_tpl_vars['cls_ref_user']->getAffiliateEarning($this->_tpl_vars['all_user'][$this->_sections['i']['index']]['uid'],'publisher'); ?>
<br /></span>
						</td>
                    </tr>               
                    <?php endfor; endif; ?>
                 </table>
                 </form>
                 <div class="paging" style="margin-top: 20px">
                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['paging']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <a title="<?php echo $this->_tpl_vars['paging'][$this->_sections['i']['index']][1]; ?>
" href="<?php echo $this->_tpl_vars['protocol']; ?>
?page=<?php echo $this->_tpl_vars['paging'][$this->_sections['i']['index']][0]; ?>
&keyword=<?php echo $this->_tpl_vars['keyword']; ?>
" class="<?php if ($this->_tpl_vars['cursorPage'] == $this->_tpl_vars['paging'][$this->_sections['i']['index']][0]): ?>btn3<?php else: ?>btn2<?php endif; ?>"><?php echo $this->_tpl_vars['paging'][$this->_sections['i']['index']][1]; ?>
</a>
                    <?php endfor; endif; ?>
                 </div>
                 <script type="text/javascript" src="templates/default/js/jquery-1.7.1.min.js"></script>
                 <script type="text/javascript" src="templates/default/js/js_bank.js"></script>
                 
              </div>
            </div>
          </div></td>
        </tr>
      </table>      
</div>
<?php echo '
<style>
.smart-btn {display: inline-block}
</style>
'; ?>