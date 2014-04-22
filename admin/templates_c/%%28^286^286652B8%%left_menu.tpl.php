<?php /* Smarty version 2.6.18, created on 2014-04-14 11:00:43
         compiled from left_menu.tpl */ ?>
<?php if ($_SESSION['admin_uid'] != ''): ?>
<div id="sidebar" >
      <h1>Main Menu</h1>
      <ul class="sidemenu style38">   
      	<li><a href="../admin/"><strong>Home</strong></a></li>
		
        <li><a href="../admin/?new_acc"><strong>Approvals</strong></a></li>
		
		<li><a href="../admin/payouts.php"><strong>Payouts</strong> </a></li>	
       
		<!--
        <li><a href="../admin/?tips"><strong><?php echo $this->_tpl_vars['_config']['website_name']; ?>
 <?php echo $this->_tpl_vars['_lang']['tips']; ?>
  </strong></a></li>
		-->
		<li><a href="../admin/?lang"><strong><?php echo $this->_tpl_vars['_lang']['langs']; ?>
</strong> </a></li>	
		
		<li><a href="../admin/advertiserinfo.php"><strong>Advertiser Info</strong> </a></li>
		
		<li><a href="../admin/publisherinfo.php"><strong>Publisher Info</strong> </a></li>
			  
        <li><a href="../admin/?cat"><strong><?php echo $this->_tpl_vars['_lang']['prod_cats']; ?>
</strong> </a></li>
        
		<li><a href="../admin/coupon.php"><strong>Coupon code</strong> </a></li>	
		
		<li><a href="../admin/coupon-card.php"><strong>Coupon TextLink card</strong> </a></li>			
  
        <li><a href="../admin/pay_rates.php?rates"><strong>Pay Rates </strong></a></li>
        
        <li><a href="../admin/bank.php"><strong>Bank</strong></a></li>
        
        <li><a href="../admin/pay-card.php"><strong>Pay Card</strong></a></li>
        
        <li><a href="../admin/pay-direct.php"><strong>Pay Direct</strong></a></li>
        
        <li><a href="../admin/user.php"><strong>User Manage</strong></a></li>
	  
	 	<li><a href="../admin/news.php"><strong>News</strong> </a></li>
		
		<li><a href="../admin/submit_url.php"><strong>Submit URL</strong></a></li>
		
		<li><a href="../admin/admin.php"><strong>Admin manage </strong></a></li>
		
	    <li><a href="../admin/?pass"><strong>Admin Password </strong></a></li>
		
        <li><a href="../admin/?logout"><strong>Logout</strong></a></li>
      </ul>
      <h1>&nbsp;</h1>
    </div>
<?php endif; ?>	