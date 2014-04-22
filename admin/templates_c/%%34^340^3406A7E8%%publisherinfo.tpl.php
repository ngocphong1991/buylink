<?php /* Smarty version 2.6.18, created on 2014-04-14 17:14:24
         compiled from publisherinfo.tpl */ ?>
<div id="main">
      <h1><a href="../admin/" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">        
        <tr>
          <td class="style39"><h1><span class="green">Publisher Info Manager</span></h1></td>
        </tr>
      </table>	  
      <table width="100%" border="0" align="center" style="min-width: 869px"       
        <tr>
          <td width="100%"><div class="splitleft">
		  		<?php if ($_GET['edit'] > 0): ?> 
				<div class="box">
              	<div align="left">
				<form action="" method="post" name="frm_edit">
				  <table class="tbl-list" id="lst-submit-url">
                    <tr style="font-weight: bold">                   
						<td width="230">Title</td>
                      	<td>Description</td>  
						<td>Pagerank</td> 
						<td>Alexa</td> 
						<td>Domain Age</td>                      
						<td></td>                     
                    </tr>            
                    <tr>                                             
                        <td><textarea style="width:200px" name="websitename"><?php echo $this->_tpl_vars['pub_info']['websitename']; ?>
</textarea></td>
                        <td><textarea style="width:220px" name="description"><?php echo $this->_tpl_vars['pub_info']['description']; ?>
</textarea></td>
						<td><input style="width:80px" type="text" name="google_page_rank" value="<?php echo $this->_tpl_vars['pub_info']['google_page_rank']; ?>
"></td>    
						<td><input style="width:80px" type="text" name="alexa_rank" value="<?php echo $this->_tpl_vars['pub_info']['alexa_rank']; ?>
" /></td>
						<td><input style="width:50px" type="text" name="year" value="<?php echo $this->_tpl_vars['pub_info']['year']; ?>
" /> years
						<br />
						<input style="width:50px" type="text" name="month" value="<?php echo $this->_tpl_vars['pub_info']['month']; ?>
" /> months
						</td>                    	
						<td><input style="width:80px" class="smart-btn btn-show" style="float:right; margin-right:10px" type="submit" value="Submit" />  </td>					
                    </tr>					                
                 </table>				
				</form>
				</div></div>
				<?php endif; ?>				
            <div class="box">
              <div align="left">			 
			     <form action="" method="get" name="frm_bank">
                 <div class="frm_search" style="padding: 20px 0; text-align: center; background: #fff">
                    <label>User </label>
                    <input type="text" name="keyword" value="<?php echo $this->_tpl_vars['keyword']; ?>
" />
                    <label>Url </label>
                    <input type="text" name="url" value="<?php echo $this->_tpl_vars['url']; ?>
" />  
                    <label>Active</label>
                    <select name="status">
                        <option <?php if ($this->_tpl_vars['status'] == ''): ?>selected="selected"<?php endif; ?> value="">All</option>
                        <option <?php if ($this->_tpl_vars['status'] == '2'): ?>selected="selected"<?php endif; ?> value="2">Active</option>
                        <option <?php if ($this->_tpl_vars['status'] == '1'): ?>selected="selected"<?php endif; ?> value="1">Pending</option>
                    </select>
                    <label>Is Manual</label>
                    <select name="is_manual">
                        <option <?php if ($this->_tpl_vars['is_manual'] == ''): ?>selected="selected"<?php endif; ?> value="">All</option>
                        <option <?php if ($this->_tpl_vars['is_manual'] == 'Y'): ?>selected="selected"<?php endif; ?> value="Y">Yes</option>
                        <option <?php if ($this->_tpl_vars['is_manual'] == 'N'): ?>selected="selected"<?php endif; ?> value="N">No</option>
                    </select>                   
                    <input type="submit" value="Find" />
                 </div>
                 <table class="tbl-list" id="lst-submit-url">
                    <tr style="font-weight: bold">
                        <td>User</td>
                        <td>Url</td>
						 <td width="250">Title</td>
                        <td>Is Manual</td>
						<td>Udate Date</td>
                        <td>Domain Age</td>
                        <td>Sale Price</td>
                       <td>Active/Edit</td>
                    </tr>
                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['all_publishersinfo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <td><?php echo $this->_tpl_vars['cls_user']->getUserName($this->_tpl_vars['all_publishersinfo'][$this->_sections['i']['index']]['uid']); ?>
</td>                       
                        <td><a href="<?php echo $this->_tpl_vars['all_publishersinfo'][$this->_sections['i']['index']]['url']; ?>
"><?php echo $this->_tpl_vars['all_publishersinfo'][$this->_sections['i']['index']]['url']; ?>
</a><br />
                         <?php echo $this->_tpl_vars['cls_user']->getEmail($this->_tpl_vars['all_publishersinfo'][$this->_sections['i']['index']]['uid']); ?>

                         </td>
                        <td><?php echo $this->_tpl_vars['all_publishersinfo'][$this->_sections['i']['index']]['websitename']; ?>
<br />                      
                        </td>
                        <td align="center"><?php echo $this->_tpl_vars['all_publishersinfo'][$this->_sections['i']['index']]['is_manual']; ?>
</td>
                    	 <td><?php echo $this->_tpl_vars['all_publishersinfo'][$this->_sections['i']['index']]['update_date']; ?>
</td>
						  <td align="center"><a target="_blank" href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/cronjob/update-domain-age.php?pid=<?php echo $this->_tpl_vars['all_publishersinfo'][$this->_sections['i']['index']]['pid']; ?>
"><?php echo $this->_tpl_vars['cls_Publishersinfo']->timeAgo($this->_tpl_vars['all_publishersinfo'][$this->_sections['i']['index']]['domain_age']); ?>
</a></td>
						 <td align="center"><?php echo $this->_tpl_vars['all_publishersinfo'][$this->_sections['i']['index']]['sale_price']; ?>
</td>
						 <td align="center"><?php echo $this->_tpl_vars['all_publishersinfo'][$this->_sections['i']['index']]['status']; ?>
 <a class="smart-btn btn-show" href="../admin/publisherinfo.php?edit=<?php echo $this->_tpl_vars['all_publishersinfo'][$this->_sections['i']['index']]['pid']; ?>
">Edit</a></td>
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
&is_manual=<?php echo $this->_tpl_vars['is_manual']; ?>
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
'; ?>