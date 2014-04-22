<?php /* Smarty version 2.6.18, created on 2014-04-14 11:00:43
         compiled from footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'footer.tpl', 5, false),)), $this); ?>
<div id="footer">
	
	<div class="footer-left">
		<p class="align-left">			
		&copy; <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>
 <strong> <?php echo $this->_tpl_vars['_config']['website_name']; ?>
 </strong> |		<span class="align-right"><a href="index.html">Home</a>&nbsp;|&nbsp; <a href="index.html">T&amp;C's</a>&nbsp;|&nbsp; <a href="index.html">Privacy Policy  </a> &nbsp;|&nbsp;  </span><span class="align-right"><a href="index.html">Contact Us </a> &nbsp;|&nbsp;  </span></p>		
	</div>
	
	<div class="footer-right">
		<p class="align-right">
		<a href="index.html"><span class="align-left">Script Powered By <a href="http://www.netlink.vn">NetLink.vn</a></p>
	</div>
	
</div>