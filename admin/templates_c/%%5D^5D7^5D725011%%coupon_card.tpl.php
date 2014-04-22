<?php /* Smarty version 2.6.18, created on 2014-04-14 12:17:38
         compiled from coupon_card.tpl */ ?>
﻿	<div id="main">
      <h1><a href="../admin/" class="style27"><?php echo $this->_tpl_vars['_lang']['Admin']; ?>
 <?php echo $this->_tpl_vars['_lang']['control_panel']; ?>
</a></h1>
      <table width="100%" border="0">        
        <tr>
          <td class="style39"><h1><span class="green">Advertisersinfo Manager</span></h1></td>
        </tr>
        <?php if ($_GET['uid']): ?>
        <tr>
        <td> Add coupon TextLink Card for:<b> <?php echo $this->_tpl_vars['cls_user']->getUserName($_GET['uid']); ?>
 </b>  </td>
        </tr>
        <?php endif; ?>
      </table>	  
      <table width="100%" border="0" align="center" style="min-width: 879px">        
        <tr>
          <td width="100%"><div class="splitleft">		  
            <div class="box">
              <div align="left">
			  <form action="" method="post" name="frm_coupon">
				<input type="hidden" value="1" name="gen_code" />		             
				<input style="float:right" type="submit" value="Gen code" />	
			  </form>			  
			     <form action="" method="get" name="frm_coupon">
                 <div class="frm_search" style="padding: 20px 0; text-align: center; background: #fff">
                    <label>Code </label>
                    <input type="text" name="keyword" value="<?php echo $this->_tpl_vars['keyword']; ?>
" />
                    <label>Active</label>                 
                    <input type="submit" value="Find" />					
                 </div>
                    <table  class="tbl-list"  id="lst-submit-url">
                    <tr style="font-weight: bold">					
				    <td align="center">Total Money</td>					
				    <td align="center">User Time</td>						
				    <td align="center">Code</td>			
				    <td align="center">Status</td>
                    <td align="center">Used</td>
                    <td align="center">For User</td>
                    </tr>
                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['all_coupon']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <td align="center"><?php echo $this->_tpl_vars['all_coupon'][$this->_sections['i']['index']]['total']; ?>
</td>                      	
						<td align="center"><?php echo $this->_tpl_vars['all_coupon'][$this->_sections['i']['index']]['use_time']; ?>
</td>
						<td align="center"><?php echo $this->_tpl_vars['all_coupon'][$this->_sections['i']['index']]['ref_code']; ?>
</td>				
						<td><?php if ($this->_tpl_vars['all_coupon'][$this->_sections['i']['index']]['status'] == '0'): ?> Pending <a href="?confirm=<?php echo $this->_tpl_vars['all_coupon'][$this->_sections['i']['index']]['coupon_card_id']; ?>
&type=yes" class="smart-btn btn-openfrm btn-pay-atm-conf-yes">Active now</a><?php else: ?> Actived 	<a href="?confirm=<?php echo $this->_tpl_vars['all_coupon'][$this->_sections['i']['index']]['coupon_id']; ?>
&type=no" class="smart-btn btn-openfrm btn-pay-atm-conf-no">inactive</a><?php endif; ?> <a href="?confirm=<?php echo $this->_tpl_vars['all_coupon'][$this->_sections['i']['index']]['coupon_id']; ?>
&type=delete" class="smart-btn btn-openfrm btn-pay-atm-conf-yes">Del</a></td>                     					

						<td align="center">
                        <?php if ($this->_tpl_vars['all_coupon'][$this->_sections['i']['index']]['user_id'] > 0): ?> 
						<?php echo $this->_tpl_vars['cls_user']->getUserName($this->_tpl_vars['all_coupon'][$this->_sections['i']['index']]['user_id']); ?>

                        <?php endif; ?> 
						</td>       			
                       
                         <td align="center">
                       <?php if ($this->_tpl_vars['all_coupon'][$this->_sections['i']['index']]['for_uid'] > 0): ?> 
                        <?php echo $this->_tpl_vars['cls_user']->getUserName($this->_tpl_vars['all_coupon'][$this->_sections['i']['index']]['for_uid']); ?>

                        <?php endif; ?> 
                        </td>
                       
				   </tr>                 
                    <?php endfor; endif; ?>
				</form>				
				<form action="" method="post">				
				  	<tr>                               
					<input type="hidden" value="addmore" name="admore_coupon" />        
                    <td align="center">
					<input type="text" name="total"  /></td>                    
					<td align="center">
					<input style="width:35px" type="text" value="1" name="use_time" />					
					</td>
					<td align="center"> 
					<input type="text" name="ref_code" value="<?php echo $this->_tpl_vars['gen_code']; ?>
"  />
					</td>   					
					<td><input type="hidden" value="" name="status" /></td>
                    </tr>					 
				 <tr>
				 <td colspan="4">
				 <input type="submit"  style="float:right" value="Admore" />
				 </td>
				 </tr>				 			 
				 </form>			 
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
                 <script type="text/javascript" src="templates/default/js/datePicker.js"></script>
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
/* Styles for the example page */


/* Date picker specific styles follow */

a.date-picker {
	width: 16px;
	height: 16px;
	border: none;
	color: #fff;
	padding: 0;
	margin: 0;
	float: left;
	overflow: hidden;
	cursor: pointer;
	background:url(templates/default/images/calendar.png)
}
a.date-picker span {
	margin: 0 0 0 -2000px;
}
div.date-picker-holder, div.date-picker-holder * {
	margin: 0;
	padding: 0;
}
div.date-picker-holder {
	position: relative;
}
div.date-picker-holder input {
	float: left;
}
div.popup-calendar {
	display: none;
	position: absolute;
	z-index: 2;
	top: 0;
	left: -16px; /* value for IE */
	padding: 4px;
	border: 2px solid #000;
	background: #fff;
	color: #000;
	overflow:hidden;
	width: 163px;
}
html>body div.popup-calendar {
	left: 99px; /* value for decent browsers */
}
div.popup-calendar div.link-close {
	float: right;
}
div.popup-calendar div.link-prev {
	float: left;
}
div.popup-calendar h3 {
	font-size: 1.3em;
	margin: 2px 0 5px 3px;
}
div.popup-calendar div.link-next {
	float: right;
}
div.popup-calendar div a {
	padding: 1px 2px;
	color: #000;
}
div.popup-calendar div a:hover {
	background-color: #000;
	color: #fff;
}
div.popup-calendar table {
	margin: 0;
}
* html div.popup-calendar table {
	display: inline;
}
div.popup-calendar table th, div.popup-calendar table td {
	background: #eee;
	width: 21px;
	height: 17px;
	text-align: center;
}
div.popup-calendar table td.inactive {
	color: #aaa;
	padding: 1px 0 0;
}
div.popup-calendar table th.weekend, div.popup-calendar table td.weekend {
	background: #f6f6f6;
}
div.popup-calendar table td a {
	display: block;
	border: 1px solid #eee;
	width: 19px;
	height: 15px;
	text-decoration: none;
	color: #333;
}
div.popup-calendar table td.today a {
	border-color: #aaa;
}
div.popup-calendar table td a.selected, div.popup-calendar table td a:hover {
	background: #333; 
	color: #fff;
}

</style>
.smart-btn {display: inline-block}
</style>
<script type="text/javascript">
$(document).ready(init);
function init()
{

	// OPTIONALLY SET THE DATE FORMAT FOR ALL DATE PICKERS ON THIS PAGE
	$.datePicker.setDateFormat(\'ymd\', \'-\');
	
	// OPTIONALLY SET THE LANGUAGE DEPENDANT COPY IN THE POPUP CALENDAR
	/*
	$.datePicker.setLanguageStrings(
		[\'Domingo\', \'Lunes\', \'Martes\', \'Mi�rcoles\', \'Jueves\', \'Viernes\', \'S�bado\'],
		[\'Enero\', \'Febrero\', \'Marzo\', \'Abril\', \'Mayo\', \'Junio\', \'Julio\', \'Agosto\', \'Septiembre\', \'Octubre\', \'Noviembre\', \'Diciembre\'],
		{p:\'Anterior\', n:\'Siguiente\', c:\'Cierre\', b:\'Elija la fecha\'}
	);
	*/
	
	// DIFFERENT OPTIONS SHOWING HOW YOU MIGHT INITIALISE THE DATE PICKER (UNCOMMENT ONE AT A TIME) //
	
	// all inputs with a class of "date-picker" have a date picker which lets you pick any date in the future
	//$(\'input.date-picker\').datePicker();
	// OR
	// all inputs with a class of "date-picker" have a date picker which lets you pick any date after 05/03/2006
	//$(\'input.date-picker\').datePicker({startDate:\'05/03/2006\'});
	// OR
	// all inputs with a class of "date-picker" have a date picker which lets you pick any date from today till 05/011/2006
	//$(\'input.date-picker\').datePicker({endDate:\'05/11/2006\'});
	// OR
	// all inputs with a class of "date-picker" have a date picker which lets you pick any date from 05/03/2006 till 05/11/2006
	//$(\'input.date-picker\').datePicker({startDate:\'05/03/2006\', endDate:\'05/11/2006\'});
	// OR 
	// the input with an id of "date" will have a date picker that lets you pick any day in the future...
	$(\'input#date1\').datePicker();
	// ...and the input with an id of "date2" will have a date picker that lets you pick any day between the 02/11/2006 and 13/11/2006
	$(\'input#date2\').datePicker({startDate:\'02/6/2012\', endDate:\'13/11/2013\'});

	/*
	// testing code to check the change event is fired...
	$(\'input#date1\').bind(
		\'change\',
		function()
		{
			alert($(this).val());
		}
	);
	*/
	
	// END DIFFERENT OPTIONS //
}
</script>

<script type="text/javascript">
$(document).ready(function(){
    $(\'.btn-pay-atm-conf-yes\').click(function(){
        if(!confirm("Bạn muốn tiếp tục?")) {
            return false;
        }
    });
    $(\'.btn-pay-atm-conf-no\').click(function(){
        if(!confirm("Bạn muốn tiếp tục?")) {
            return false;
        }
    });
});
</script>
'; ?>