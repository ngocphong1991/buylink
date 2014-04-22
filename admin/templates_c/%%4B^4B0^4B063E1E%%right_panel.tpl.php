<?php /* Smarty version 2.6.18, created on 2014-04-14 11:00:43
         compiled from right_panel.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'right_panel.tpl', 13, false),)), $this); ?>
<?php if ($_SESSION['admin_uid'] != ''): ?>
<div id="rightbar">
      <h1 align="center"> Quick Stats </h1>
      <table width="95%" border="0" cellpadding="2" cellspacing="1" class="tmain small">
        <tr class="trow2">
          <td colspan="3"></td>
        </tr>
        <tr class="trow2">
          <td colspan="3"><span class="style46">Info</span></td>
        </tr>
        <tr>
          <td width="129" ><span class="style47"><b>Server Time </b></span></td>
          <td align="right" class="trow1 style34 style47"><?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H.%M") : smarty_modifier_date_format($_tmp, "%H.%M")); ?>
</td>
        </tr>
        <tr>
          <td class="style47 trow1"><strong>Last Login </strong></td>
          <td align="right" nowrap="nowrap" class="trow1 style47"><?php echo ((is_array($_tmp=$_SESSION['last_login'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%y %H.%M") : smarty_modifier_date_format($_tmp, "%d/%m/%y %H.%M")); ?>
</td>
        </tr>
        <tr>
          <td colspan="2" class="trow1"><span class="style46">Users</span></td>
        </tr>
        <tr>
          <td ><span class="style47"><strong>User Accounts </strong></span></td>
          <td align="right" class="trow1 style34 style47"><?php echo $this->_tpl_vars['tu']; ?>
</td>
        </tr>
        
        
        <tr>
          <td >&nbsp;</td>
          <td align="right" class="trow1 style34 style47">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" ><div align="center"><strong>-------------------</strong></div></td>
        </tr>
      </table>
      <p><br />
      </p>
    </div>
<?php endif; ?>	