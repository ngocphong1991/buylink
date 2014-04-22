<?php /* Smarty version 2.6.18, created on 2014-04-18 06:30:21
         compiled from master_page.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?php echo $this->_tpl_vars['_config']['website_name']; ?>
</title>
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['template_dir']; ?>
/css/textlink.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['template_dir']; ?>
/css/tabcontent.css" />

<?php echo '
<script>
var loc = "\'"+this.location+"\'";
loc = loc.substring(1, loc.lastIndexOf(\'/\')+1);
var base_url = "http://textlink.vn/admin/";
</script>
'; ?>


<?php if ($this->_tpl_vars['colorpop_js'] == 'Y'): ?>
<script language="javascript" src="../js/colorpop.js"></script>
<?php endif; ?>
<?php if ($this->_tpl_vars['tabcontent'] == 'Y'): ?>
<script language="javascript" src="tabcontent.js"></script>
<?php endif; ?>
<?php if ($this->_tpl_vars['swf_object'] == 'Y'): ?>
<script language="javascript" src="../js/container.js"></script>
<?php endif; ?>
<?php if ($this->_tpl_vars['number_format_js'] == 'Y'): ?>
<script language="javascript" src="../js/number_format.js"></script>
<?php endif; ?>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo '
<style type="text/css">
<!--
body,td,th {
	font-size: 11px;
}
.style25 {	color: #FE9B37;
	font-weight: bold;
}
.style26 {	color: #FE9A36;
	font-weight: bold;
}
.style27 {font-size: 1.7em}

.style30 {
	color: #7594C0;
	font-weight: bold;
}
.style31 {
	font-size: 11px;
	color: #4284B0;
}
.style32 {
	font-size: 12px;
	font-weight: bold;
}
.style35 {color: #003366}


-->
</style>
'; ?>

</head>

<body>
<div id="wrap">
	
	<div id="header">				
			
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			
		
		
													
  </div>	
				
	
<div id="content-wrap">
	  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'left_menu.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			
		<?php echo $this->_tpl_vars['content']; ?>
	
			
		<!--<?php if ($this->_tpl_vars['right_panel'] != 'off'): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'right_panel.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>-->
			
			
  </div>

	
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	

</div>

</body>
</html>