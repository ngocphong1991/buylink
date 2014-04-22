<?php /* Smarty version 2.6.18, created on 2014-04-14 12:14:22
         compiled from advertisersinfo.tpl */ ?>
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
                    <label>AdUser </label>
                    <input type="text" name="keyword" value="<?php echo $this->_tpl_vars['keyword']; ?>
" />
					 <label>PubUser </label>
					<input type="text" name="pub_user" value="<?php echo $this->_tpl_vars['pub_user']; ?>
" />					
                    <label>Approved</label>
                    <select name="approved">
                        <option <?php if ($this->_tpl_vars['approved'] == ''): ?>selected="selected"<?php endif; ?> value="">All</option>
                        <option <?php if ($this->_tpl_vars['approved'] == 'Y'): ?>selected="selected"<?php endif; ?> value="Y">Active</option>
                        <option <?php if ($this->_tpl_vars['approved'] == 'N'): ?>selected="selected"<?php endif; ?> value="N">Pending</option>
                    </select>
                    <label>Auth</label>
                    <select name="auth">
                        <option <?php if ($this->_tpl_vars['auth'] == ''): ?>selected="selected"<?php endif; ?> value="">All</option>
                        <option <?php if ($this->_tpl_vars['auth'] == 'Y'): ?>selected="selected"<?php endif; ?> value="Y">Yes</option>
                        <option <?php if ($this->_tpl_vars['auth'] == 'N'): ?>selected="selected"<?php endif; ?> value="N">No</option>
                    </select>
					  <label>Is Manual</label>
                    <select name="is_manual">
                        <option <?php if ($this->_tpl_vars['is_manual'] == ''): ?>selected="selected"<?php endif; ?> value="">All</option>
                        <option <?php if ($this->_tpl_vars['is_manual'] == 'Y'): ?>selected="selected"<?php endif; ?> value="Y">Yes</option>
                        <option <?php if ($this->_tpl_vars['is_manual'] == 'N'): ?>selected="selected"<?php endif; ?> value="N">No</option>
                    </select>
					
                    <label>Paid</label>
                    <select name="paid">
                        <option <?php if ($this->_tpl_vars['paid'] == ''): ?>selected="selected"<?php endif; ?> value="">All</option>
                        <option <?php if ($this->_tpl_vars['paid'] == 'Y'): ?>selected="selected"<?php endif; ?> value="Y">Yes</option>
                        <option <?php if ($this->_tpl_vars['paid'] == 'N'): ?>selected="selected"<?php endif; ?> value="N">No</option>
                    </select>
					
					 <label>Today</label>
                    <select name="today">
                        <option <?php if ($this->_tpl_vars['today'] == ''): ?>selected="selected"<?php endif; ?> value="">All</option>
                        <option <?php if ($this->_tpl_vars['today'] == 'Y'): ?>selected="selected"<?php endif; ?> value="Y">Yes</option>
                        <option <?php if ($this->_tpl_vars['today'] == 'N'): ?>selected="selected"<?php endif; ?> value="N">No</option>
                    </select>
                    <input type="submit" value="Find" />
                 </div>
                 <table class="tbl-list" id="lst-submit-url">
                    <tr style="font-weight: bold">
                        <td>User</td>
                        <td>Pub User</td>
                        <td width="300">Ad Text</td>
						<td align="center">On Site</td>                        
                        <td width="60" align="center">State</td>
						<td width="50" align="center">Approved</td>
                        <td width="50" align="center">Auth</td>
                        <td width="10" align="center">Paid</td>
                    </tr>
                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['all_advertisersinfo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <tr style="border-bottom:2px solid #FFFFFF">
                        <td><?php echo $this->_tpl_vars['cls_user']->getUserName($this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['uid']); ?>
</td>
                        <td><?php echo $this->_tpl_vars['cls_user']->getUserName($this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['pub_uid']); ?>
</td>
                        <td><b><?php echo $this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['ad_before']; ?>
 <a target="_blank" href="<?php echo $this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['ad_url']; ?>
"><?php echo $this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['ad_des']; ?>
</a> <?php echo $this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['ad_after']; ?>
</b><br />
                        <a title="Update buying date!" id ="date_<?php echo $this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['adv_id']; ?>
" href="javascript:update_date(<?php echo $this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['adv_id']; ?>
)">
						    Start date / End date:<?php echo $this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['start_date']; ?>
 / <?php echo $this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['end_date']; ?>
<br />
							Sale price: $<?php echo $this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['price']; ?>
</a><br />
						</td>
						<td align="center"><a target="_blank" href="<?php echo $this->_tpl_vars['cls_Publishersinfo']->getPublisherUrl($this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['pid']); ?>
"><?php echo $this->_tpl_vars['cls_Publishersinfo']->getPublisherUrl($this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['pid']); ?>
</a><br />
						Add type: <?php if ($this->_tpl_vars['cls_Publishersinfo']->getPublisherInfo($this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['pid'],'is_manual') == 'Y'): ?><span style="color:red"> Manual</span> <?php else: ?> Regular <?php endif; ?><br />
						Buying date: <?php echo $this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['buying_date']; ?>

						</td>                   
                        <td align="center"><span style="color:#4D90FE">
						
						<?php if ($this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['is_paid'] == 'Y' && $this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['is_auth'] == 'Y'): ?><?php if ($this->_tpl_vars['cls_cronjob_publisher']->getMissing($this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['pid']) > 0): ?><span style="color:red">Link missing</span><?php endif; ?> Earnling <?php else: ?> Pending <?php endif; ?></span></td>
						<td align="center"><?php if ($this->_tpl_vars['cls_Publishersinfo']->getPublisherInfo($this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['pid'],'is_manual') == 'Y'): ?> <?php echo $this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['approved']; ?>
<?php else: ?> <?php endif; ?></td>
						
                        <td align="center"><?php echo $this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['is_auth']; ?>
 <?php if ($this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['is_auth'] == 'Y'): ?><a class="smart-btn btn-show" href="../admin/advertiserinfo.php?auth=<?php echo $this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['adv_id']; ?>
&action=cancel">Cancel</a><?php else: ?> <a class="smart-btn btn-show" href="../admin/advertiserinfo.php?auth=<?php echo $this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['adv_id']; ?>
&action=active">Active</a><?php endif; ?></td>
                        <td align="center" accesskey="<?php echo $this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['adv_id']; ?>
"><?php echo $this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['is_paid']; ?>
<a onclick="javascript:click_refund(<?php echo $this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['adv_id']; ?>
, <?php echo $this->_tpl_vars['all_advertisersinfo'][$this->_sections['i']['index']]['price']; ?>
)" class="smart-btn btn-refunds">Refund</a></td>
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
&pub_user=<?php echo $this->_tpl_vars['pub_user']; ?>
&approved=<?php echo $this->_tpl_vars['approved']; ?>
&paid=<?php echo $this->_tpl_vars['paid']; ?>
&auth=<?php echo $this->_tpl_vars['auth']; ?>
&today=<?php echo $this->_tpl_vars['today']; ?>
&is_manual=<?php echo $this->_tpl_vars['is_manual']; ?>
&page=<?php echo $this->_tpl_vars['paging'][$this->_sections['i']['index']][0]; ?>
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
<?php echo '
<style>
.smart-btn {display: inline-block}
.frm_search label {display: inline; margin: 0 8px 0 3px;}
</style>
<script type="text/javascript">
function update_date(str)
{
var answer = confirm("Bạn có muốn update ngày tính tiền cho publisher là hôm nay?")
	if (answer){
		if (str.length==0)
  {
  document.getElementById("date_"+str).innerHTML="";
  document.getElementById("date_"+str).style.border="0px";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("date_"+str).innerHTML=xmlhttp.responseText;
    document.getElementById("date_"+str).style.border="1px solid #A5ACB2";
    }
  }
  alert(1);
xmlhttp.open("GET",base_url+"ajax.php?q="+str,true);
xmlhttp.send();
	}
	else{
		return;
		//alert("Thanks for sticking around!")		
	}

}
</script>
'; ?>