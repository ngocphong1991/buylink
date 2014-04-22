<?php /* Smarty version 2.6.18, created on 2014-04-16 10:09:07
         compiled from bank.tpl */ ?>
<div id="main">
      <h1><a href="../admin/" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">
        
        <tr>
          <td class="style39"><h1><span class="green">Bank Manager</span></h1></td>
        </tr>
      </table>
	  
      <table width="100%" border="0" align="center" style="min-width: 769px">
        
        <tr>
          <td width="100%"><div class="splitleft">
		  
            <div class="box">
              <div align="left">
			     <form action="" method="post" name="frm_bank">
                 <table class="tbl-list" id="lst-submit-url">
                    <tr style="font-weight: bold">
                        <td width="169">Ngân hàng</td>
                        <td width="169">Chi nhánh</td>
                        <td width="169">Chủ tài khoản</td>
                        <td width="169">Số tài khoản</td>
                        <td>Logo</td>
                        <td></td>
                    </tr>
                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['all_bank']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <td><strong><?php echo $this->_tpl_vars['all_bank'][$this->_sections['i']['index']]['name']; ?>
</strong></td>
                        <td><?php echo $this->_tpl_vars['all_bank'][$this->_sections['i']['index']]['branch']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['all_bank'][$this->_sections['i']['index']]['holders']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['all_bank'][$this->_sections['i']['index']]['bank_no']; ?>
</td>
                        <td><img src="<?php echo $this->_tpl_vars['all_bank'][$this->_sections['i']['index']]['image']; ?>
" width="25" /></td>
                        <td>
                            <a href="?del=<?php echo $this->_tpl_vars['all_bank'][$this->_sections['i']['index']]['bank_id']; ?>
" class="smart-btn btn-openfrm">Del</a>
                        </td>
                    </tr>
                    
                 
                    <?php endfor; endif; ?>
                    <tr class="frm_submit" style="display: nonez">
                        <td><input type="text" class="" name="data[name]" /></td>
                        <td><input type="text" class="" name="data[branch]" /></td>
                        <td><input type="text" class="" name="data[holders]" /></td>
                        <td><input type="text" class="" name="data[bank_no]" /></td>
                        <td><input type="text" class="" name="data[image]" style="width: 20px" /></td>
                        <td>
                            <button class="smart-btn btn-add" onclick="frm_bank.submit()">Add</button>
                        </td>
                    </tr>
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