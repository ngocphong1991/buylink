<?php /* Smarty version 2.6.18, created on 2014-04-24 04:42:11
         compiled from links-home.tpl */ ?>
﻿<div id="body">
      <div class="full" id="content">
        <h1>Quản Lý Link</h1>
        <p class="large"> Bởi vì bạn vừa là Publisher và Advertiser, nên bạn có thể quản lý các link đã bán và link đã mua. Bạn có thể lựa chọn quản lý từng link một cách dễ dàng.</p>
         <div class="a-func pkg">
		 <?php if ($this->_tpl_vars['_session']['utype'] == 'adv'): ?>
           <div class="one pkg"><h3>Advertiser</h3><input onClick="parent.location='<?php echo $this->_tpl_vars['_config']['www']; ?>
/links-advertiser/'" type="button" class="btn-adv" value="Quản lý link mà bạn đã đặt mua" /></div>
		   <?php elseif ($this->_tpl_vars['_session']['utype'] == 'pub'): ?>
		    <div class="one pkg"><h3>Publisher</h3><input onClick="parent.location='<?php echo $this->_tpl_vars['_config']['www']; ?>
/links-publisher/'" type="button" class="btn-pub" value="Quản lý link đã bán trên website của bạn" /></div>
		   <?php else: ?>
		     <div class="one pkg"><h3>Advertiser</h3><input onClick="parent.location='<?php echo $this->_tpl_vars['_config']['www']; ?>
/links-advertiser/'" type="button" class="btn-adv" value="Quản lý link mà bạn đã đặt mua" /></div>
          <div class="one pkg"><h3>Publisher</h3><input onClick="parent.location='<?php echo $this->_tpl_vars['_config']['www']; ?>
/links-publisher/'" type="button" class="btn-pub" value="Quản lý link đã bán trên website của bạn" /></div>
		  <?php endif; ?>
          </div>
      </div>
    </div>