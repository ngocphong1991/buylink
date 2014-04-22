<?php /* Smarty version 2.6.18, created on 2014-04-16 10:08:46
         compiled from submit_url.tpl */ ?>
<div id="main">
      <h1><a href="../admin/" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">
        
        <tr>
          <td class="style39"><h1><span class="green">Submit URL</span></h1></td>
        </tr>
      </table>
	  
      <table width="100%" border="0" align="center">
        
        <tr>
          <td width="100%"><div class="splitleft">
		  
            <div class="box">
              <div align="left">
			     
                 <table class="tbl-list" id="lst-submit-url">
                    <tr style="font-weight: bold">
                        <td style="min-width: 200px">Website</td>
                        <td style="min-width: 330px">URL</td>
                        <td>Status</td>
                        <td style="min-width: 30px">PR</td>
                        <td>Tool</td>
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
                    <tr class="tr-submiturl-<?php echo $this->_tpl_vars['all_publishersinfo'][$this->_sections['i']['index']]['pid']; ?>
" accesskey="<?php echo $this->_tpl_vars['all_publishersinfo'][$this->_sections['i']['index']]['pid']; ?>
">
                        <td><strong><?php echo $this->_tpl_vars['all_publishersinfo'][$this->_sections['i']['index']]['websitename']; ?>
</strong></td>
                        <td><?php echo $this->_tpl_vars['all_publishersinfo'][$this->_sections['i']['index']]['url']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['cls_publishersinfo']->getStatus($this->_tpl_vars['all_publishersinfo'][$this->_sections['i']['index']]['pid']); ?>
</td>
                        <td></td>
                        <td>
                            <button class="smart-btn btn-show">Show</button>
                            <button class="smart-btn btn-openfrm">Add</button>
                        </td>
                    </tr>
                    
                    <?php $this->assign('lstItem', $this->_tpl_vars['cls_publishersinfo']->getChild($this->_tpl_vars['all_publishersinfo'][$this->_sections['i']['index']]['pid'])); ?>
                    <?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['lstItem']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <tr class="tr-submiturl-<?php echo $this->_tpl_vars['all_publishersinfo'][$this->_sections['i']['index']]['pid']; ?>
" accesskey="<?php echo $this->_tpl_vars['lstItem'][$this->_sections['j']['index']]['submit_url_id']; ?>
" id="submit_url_<?php echo $this->_tpl_vars['lstItem'][$this->_sections['j']['index']]['submit_url_id']; ?>
" style="display: none">
                        <td style="border-left: 2px solid #77AAFC; padding-left: 20px"><?php echo $this->_tpl_vars['lstItem'][$this->_sections['j']['index']]['websitename']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['lstItem'][$this->_sections['j']['index']]['url']; ?>
</td>
                        <td></td>
                        <td><?php echo $this->_tpl_vars['lstItem'][$this->_sections['j']['index']]['google_page_rank']; ?>
</td>
                        <td>
                            <button class="smart-btn btn-del">Del</button>
                        </td>
                    </tr>
                    <?php endfor; endif; ?>
                    
                    <tr class="frm_submit" id="frm_submit<?php echo $this->_tpl_vars['all_publishersinfo'][$this->_sections['i']['index']]['pid']; ?>
" style="display: none">
                        <td style="border-left: 2px solid #77AAFC; padding-left: 20px">
                            <input type="text" class="iTitle" />
                        </td>
                        <td>
                            <input type="text" class="iUrl" />
                        </td>
                        <td></td>
                        <td></td>
                        <td>
                            <button class="smart-btn btn-add">Add</button>
                            <button class="smart-btn btn-can">Cancel</button>
                            <input type="hidden" class="iDomain" value="<?php echo $this->_tpl_vars['all_publishersinfo'][$this->_sections['i']['index']]['pid']; ?>
" />
                        </td>
                        <td></td>
                        <td></td>
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
" href="<?php echo $this->_tpl_vars['protocol']; ?>
?page=<?php echo $this->_tpl_vars['paging'][$this->_sections['i']['index']][0]; ?>
" class="<?php if ($this->_tpl_vars['cursorPage'] == $this->_tpl_vars['paging'][$this->_sections['i']['index']][0]): ?>btn3<?php else: ?>btn2<?php endif; ?>"><?php echo $this->_tpl_vars['paging'][$this->_sections['i']['index']][1]; ?>
</a>
                    <?php endfor; endif; ?>
                 </div>
                 <script type="text/javascript" src="templates/default/js/jquery-1.7.1.min.js"></script>
                 <script type="text/javascript" src="templates/default/js/script.js"></script>
                 
              </div>
            </div>
          </div></td>
        </tr>
      </table>
      
</div>