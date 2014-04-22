<?php /* Smarty version 2.6.18, created on 2014-04-18 06:32:50
         compiled from payouts.tpl */ ?>
<div id="main">
      <h1><a href="../admin/" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">        
        <tr>
          <td class="style39"><h1><span class="green">Advertisersinfo Manager</span></h1></td>
        </tr>
      </table>
	  
      <table width="100%" border="0" align="center" style="min-width: 869px">
        
        <tr>
          <td width="100%"><div class="splitleft">
		  
            <div class="box">
              <div align="left">
			     <form action="" method="get" name="frm_bank">
                 <div class="frm_search" style="padding: 20px 0; text-align: center; background: #fff">
                    <label>User </label>
                    <input type="text" name="keyword" value="<?php echo $this->_tpl_vars['keyword']; ?>
" />
                    <label>Active</label>
                    <select name="status">
                        <option <?php if ($this->_tpl_vars['status'] == ''): ?>selected="selected"<?php endif; ?> value="">All</option>
                        <option <?php if ($this->_tpl_vars['status'] == '1'): ?>selected="selected"<?php endif; ?> value="1">Paid</option>
                        <option <?php if ($this->_tpl_vars['status'] == '0'): ?>selected="selected"<?php endif; ?> value="0">Waiting</option>
                    </select>                  
                   
                    <input type="submit" value="Find" />
                 </div>
                 <table  class="tbl-list"  id="lst-submit-url">
                    <tr style="font-weight: bold">
					<td>User</td>
					<td>Money</td>
					<td>Withdraw date</td>
					<td>Method</td>
					<td>Email paypal</td>
					<td>Name card</td>
					<td>Number card</td>
				    <td>Name of Bank</td>
				    <td>Phone</td>
				    <td>Code</td>
				    <td>Status</td>
                    </tr>
                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['all_withdraw']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <td><?php echo $this->_tpl_vars['cls_user']->getUserName($this->_tpl_vars['all_withdraw'][$this->_sections['i']['index']]['user_id']); ?>
</td>                 
                        <td><?php echo $this->_tpl_vars['all_withdraw'][$this->_sections['i']['index']]['money']; ?>
 USD</td>
                        <td><?php echo $this->_tpl_vars['all_withdraw'][$this->_sections['i']['index']]['withdraw_date']; ?>
</td>
                    	<td><?php if ($this->_tpl_vars['all_withdraw'][$this->_sections['i']['index']]['method'] == '1'): ?>PayPal <?php else: ?> VN Bank<?php endif; ?></td>
						<td><?php echo $this->_tpl_vars['all_withdraw'][$this->_sections['i']['index']]['email_paypal']; ?>
</td>						
						<td><?php echo $this->_tpl_vars['all_withdraw'][$this->_sections['i']['index']]['name_card']; ?>
</td>
						<td><?php echo $this->_tpl_vars['all_withdraw'][$this->_sections['i']['index']]['number_card']; ?>
</td>
						<td><?php echo $this->_tpl_vars['all_withdraw'][$this->_sections['i']['index']]['name_bank']; ?>
</td>
						<td><?php echo $this->_tpl_vars['all_withdraw'][$this->_sections['i']['index']]['phone']; ?>
</td>
						<td><?php echo $this->_tpl_vars['all_withdraw'][$this->_sections['i']['index']]['code']; ?>
</td>
						<td><?php if ($this->_tpl_vars['all_withdraw'][$this->_sections['i']['index']]['status'] == '0'): ?> Pending <a href="?confirm=<?php echo $this->_tpl_vars['all_withdraw'][$this->_sections['i']['index']]['withdraw_id']; ?>
&type=yes" class="smart-btn btn-openfrm btn-pay-atm-conf-yes">Pay now</a><?php else: ?> Paid 	<a href="?confirm=<?php echo $this->_tpl_vars['all_withdraw'][$this->_sections['i']['index']]['withdraw_id']; ?>
&type=no" class="smart-btn btn-openfrm btn-pay-atm-conf-no">No</a></td>	<?php endif; ?> 
                          					
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
" href="?keyword=<?php echo $this->_tpl_vars['keyword']; ?>
&approved=<?php echo $this->_tpl_vars['approved']; ?>
&paid=<?php echo $this->_tpl_vars['paid']; ?>
&auth=<?php echo $this->_tpl_vars['auth']; ?>
&page=<?php echo $this->_tpl_vars['paging'][$this->_sections['i']['index']][0]; ?>
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
.frm_search label {display: inline; margin: 0 8px 0 3px;}
</style>
<script type="text/javascript">
$(document).ready(function(){
    $(\'.btn-pay-atm-conf-yes\').click(function(){
        if(!confirm("Bạn đã gửi tiền tới tài khoản của publisher?")) {
            return false;
        }
    });
    $(\'.btn-pay-atm-conf-no\').click(function(){
        if(!confirm("Bạn chưa gửi tiền tới publisher?")) {
            return false;
        }
    });
});
</script>
'; ?>