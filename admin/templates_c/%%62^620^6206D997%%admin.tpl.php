<?php /* Smarty version 2.6.18, created on 2014-04-14 11:00:42
         compiled from admin.tpl */ ?>

<div id="main">
      <h1><a href="../admin/" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">

        <tr>
          <td class="style39"><h1><span class="green">Admin user Manager</span></h1></td>
        </tr>
      </table>

      <table width="100%" border="0" align="center" style="min-width: 869px">

        <tr>
          <td width="100%"><div class="splitleft">

            <div class="box">
              <div align="left">
			    <?php if ($_GET['action'] == 'view'): ?>

				<table class="tbl-list" id="lst-submit-url">
				 <tr>
					<td> <label>Title </label></td><td><?php echo $this->_tpl_vars['new_info']['Title']; ?>
</td>
				</tr>
				<tr>
					<td> <label>Intro </label></td><td><?php echo $this->_tpl_vars['new_info']['Intro']; ?>
</td>
				</tr>
				<tr>
					<td> <label>Conten </label></td><td><?php echo $this->_tpl_vars['new_info']['Content']; ?>
</td>
				</tr>
                 </table>
				<?php else: ?>
				<span style="color:red"> <?php echo $this->_tpl_vars['msn']; ?>
 </span>
				<form action="" method="post" name="frm_post">
				<input type="hidden" value="1" name="create_admin" />

				<?php if ($_GET['uid'] > 0): ?>
				<?php else: ?>
				<input type="hidden" name="action" value="insert" />
				<?php endif; ?>

			 	<table class="tbl-list" id="lst-submit-url">
				<tr>
					<td> <label>Username </label></td><td><input type="text" style="width:300px" id="user" name="user" value="<?php echo $this->_tpl_vars['admin_info']['user']; ?>
" /></td>
				</tr>
				<tr>
					<td> <label>Password </label></td><td><input type="text" style="width:300px"  id="pass" name="pass" value="<?php echo $this->_tpl_vars['admin_info']['pass']; ?>
" /></td>
				</tr>
				<tr>
					<td> <label>User type </label></td><td>
					<select id="filterLanguage" name="utype" class="txt2" onchange="">
					<option selected="selected" value="2">Mod</option>
					<option value="1">Admin</option>
		            </select>
					</td>
				</tr>
				<tr>
					<td> <label>Email </label></td><td><input type="text" style="width:300px"  id="email" name="email" value="<?php echo $this->_tpl_vars['admin_info']['email']; ?>
" /></td>
				</tr>
				<tr>
				<td></td><td><input type="submit" class="smart-btn btn-show" value="Submit" style="float:right" /></td>
				</tr>
                 </table>
                 </form>
				  <table class="tbl-list" id="lst-submit-url">
                    <tr style="font-weight: bold">
						<td width="30">No</td>
                        <td>User name</td>
                        <td>Email</td>
						<td>User Type</td>
						<td>Action</td>
                    </tr>
				  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['list_all']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <td><?php echo $this->_tpl_vars['list_all'][$this->_sections['i']['index']]['uid']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['list_all'][$this->_sections['i']['index']]['user']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['list_all'][$this->_sections['i']['index']]['email']; ?>
</td>
						<td><?php if ($this->_tpl_vars['list_all'][$this->_sections['i']['index']]['utype'] == 1): ?> Admin <?php else: ?> Mod <?php endif; ?></td>
						<td><?php echo $this->_tpl_vars['list_all'][$this->_sections['i']['index']]['utype']; ?>
</td>
						<td> <a href="?uid=<?php echo $this->_tpl_vars['list_all'][$this->_sections['i']['index']]['uid']; ?>
&action=edit" class="smart-btn btn-openfrm btn-pay-atm-conf-yes">Edit</a>
						 <a href="?uid=<?php echo $this->_tpl_vars['list_all'][$this->_sections['i']['index']]['uid']; ?>
&action=delete" class="smart-btn btn-openfrm btn-pay-atm-conf-yes">Del</a></td>
                    </tr>
				  <?php endfor; endif; ?>
				  </table>


                 <script type="text/javascript" src="templates/default/js/jquery-1.7.1.min.js"></script>
                 <script type="text/javascript" src="templates/default/js/js_bank.js"></script>
                 <?php endif; ?>
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
'; ?>