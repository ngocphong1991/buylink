<?php /* Smarty version 2.6.18, created on 2014-04-18 06:31:04
         compiled from news.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'html_entity_decode', 'news.tpl', 81, false),array('modifier', 'strip_tags', 'news.tpl', 81, false),array('modifier', 'truncate', 'news.tpl', 81, false),)), $this); ?>
<script type="text/javascript" src="fckeditor/fckeditor.js"></script>
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
				<?php echo '
				<script type="text/javascript">
				window.onload = function()
				{
					var oFCKeditor = new FCKeditor( \'Content\' ) ;
					oFCKeditor.BasePath = "fckeditor/" ;
					oFCKeditor.ReplaceTextarea() ;
				}
				</script>	
				'; ?>
	
				<form action="" method="post" name="frm_post">
				<?php if ($_GET['Id'] > 0): ?>				
				<?php else: ?>
				<input type="hidden" name="action" value="insert" />
				<?php endif; ?>
			 	<table class="tbl-list" id="lst-submit-url">                
				 <tr>                                               
					<td> <label>Title </label></td><td><input type="text" name="Title" value="<?php echo $this->_tpl_vars['new_info']['Title']; ?>
" style="width:300px"  /><span style="margin-left: 30px">Order No </span><input type="text" name="order_no" value="<?php echo $this->_tpl_vars['new_info']['order_no']; ?>
" style="width:50px"  /></td>                       
				</tr>  
                <tr>                                               
					<td> <label>Category </label></td><td>
                    <select name="CatID">
                        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['allcat']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <option value="<?php echo $this->_tpl_vars['allcat'][$this->_sections['i']['index']]['Id']; ?>
" <?php if ($this->_tpl_vars['new_info']['CategoryId'] == $this->_tpl_vars['allcat'][$this->_sections['i']['index']]['Id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['allcat'][$this->_sections['i']['index']]['Title']; ?>
</option>
                        <?php endfor; endif; ?>
                    </select>                       
				</tr>   
				<tr>										   
					<td> <label>Intro </label></td><td><textarea id="Intro" name="Intro"><?php echo $this->_tpl_vars['new_info']['Intro']; ?>
</textarea></td>                       
				</tr>
				<tr>										   
					<td> <label>Conten </label></td><td><textarea rows="10" id="Content" name="Content"><?php echo $this->_tpl_vars['new_info']['Content']; ?>
</textarea></td>
				</tr>    
				<tr>
				<td></td><td><input type="submit" class="smart-btn btn-show" value="Submit" style="float:right" /></td>                       
				</tr>
					  
				
                 </table>
                 </form>
				  <table class="tbl-list" id="lst-submit-url">
                    <tr style="font-weight: bold">
                        <td>Title</td>
                        <td width="30">No</td>
						<td>Create date</td>
						<td> </td>
                    </tr>
				  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['all_news']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <td><a href="?Id=<?php echo $this->_tpl_vars['all_news'][$this->_sections['i']['index']]['Id']; ?>
&action=view"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['all_news'][$this->_sections['i']['index']]['Title'])) ? $this->_run_mod_handler('html_entity_decode', true, $_tmp) : html_entity_decode($_tmp)))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 130) : smarty_modifier_truncate($_tmp, 130)); ?>
</a></td>                     
                        <td><?php echo $this->_tpl_vars['all_news'][$this->_sections['i']['index']]['order_no']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['all_news'][$this->_sections['i']['index']]['NewsCreateTime']; ?>
</td>  
						<td> <a href="?Id=<?php echo $this->_tpl_vars['all_news'][$this->_sections['i']['index']]['Id']; ?>
&action=edit" class="smart-btn btn-openfrm btn-pay-atm-conf-yes">Edit</a> <a href="?Id=<?php echo $this->_tpl_vars['all_news'][$this->_sections['i']['index']]['Id']; ?>
&action=view" class="smart-btn btn-openfrm btn-pay-atm-conf-yes">View</a> <a href="?Id=<?php echo $this->_tpl_vars['all_news'][$this->_sections['i']['index']]['Id']; ?>
&action=delete" class="smart-btn btn-openfrm btn-pay-atm-conf-yes">Del</a></td>                  
                    </tr>                    
				  <?php endfor; endif; ?>
				  </table>
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