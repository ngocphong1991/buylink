<?php /* Smarty version 2.6.18, created on 2014-04-24 06:46:46
         compiled from left-menu.tpl */ ?>
<!-- START THE SLIDER -->
<div class="col-md-3 left-slider except no-padding">
    <div class="menu-block">
        <ul class="menu-left-wrap">
            <li class="menu-level-1">
                <h5>Mua quảng cáo</h5>
                <ul>
                    <li <?php if ($this->_tpl_vars['module_name'] == 'marketplace'): ?>class="menu-active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/marketplace" title="Mua BuyLink">Mua BuyLink</a></li>                    
                    <li <?php if ($this->_tpl_vars['module_name'] == 'buyalink'): ?>class="menu-active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/buyalink" title="Mua lẻ Article Link">Mua lẻ Article Link</a></li>
                    <li <?php if ($this->_tpl_vars['module_name'] == 'buyarelink'): ?>class="menu-active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/buyarelink" title="Mua gói Article Link">Mua gói Article Link</a></li>
                    
                </ul>
            </li>
            <li class="menu-level-1">
                <h5>Công cụ SEO</h5>
                <ul>
                    <li><a href="#" title="BUYLINK SEO APP">BUYLINK SEO APP</a></li>
                    <li><a href="#" title="KT thứ hạng từ khóa">KT thứ hạng từ khóa</a></li>
                </ul>
            </li>
            <li class="menu-level-1">
                <h5>Quảng lý quảng cáo</h5>
                <ul>
                    <li <?php if ($this->_tpl_vars['module_name'] == 'links'): ?>class="menu-active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/links-advertiser" title="Quản lý Buylink"><?php echo $this->_tpl_vars['module_name']; ?>
Quản lý Buylink</a></li>

                    <li <?php if ($this->_tpl_vars['module_name'] == 'managearticlelink'): ?>class="menu-active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/managearticlelink" title="Quản lý Buylink">Quản lý Article Link</a></li>
                    <li <?php if ($this->_tpl_vars['module_name'] == 'manage-group-buylink'): ?>class="menu-active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/manage-group-buylink" title="Quản lý Nhóm Buylink">Quản lý Nhóm Buylink</a></li>
                    <li <?php if ($this->_tpl_vars['module_name'] == 'weblike'): ?>class="menu-active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/weblike" title="Quản lý Nhóm Buylink">Website ưa thích</a></li>
                </ul>
            </li>
            <li class="menu-level-1">
                <h5>Quản lý tài khoản</h5>
                <ul>
                    <li <?php if ($this->_tpl_vars['module_name'] == 'profile' && $this->_tpl_vars['page'] == ''): ?>class="menu-active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/profile" title="Thông tin tài khoản">Thông tin tài khoản</a></li>
                    <li <?php if ($this->_tpl_vars['module_name'] == 'profile' && $this->_tpl_vars['page'] == 'history'): ?>class="menu-active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/profile?page=history" title="Lịch sử giao dịch">Lịch sử giao dịch</a></li>
                    <li <?php if ($this->_tpl_vars['module_name'] == 'payment'): ?>class="menu-active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/payment" title="Nạp tiền">Nạp tiền</a></li>
                    <li <?php if ($this->_tpl_vars['module_name'] == 'profile' && $this->_tpl_vars['page'] == 'money_coupon'): ?>class="menu-active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/profile?page=money_coupon" title="Nạp tiền từ coupon">Nạp tiền từ coupon</a></li>
                    <li <?php if ($this->_tpl_vars['module_name'] == 'profile' && $this->_tpl_vars['page'] == 'transfer'): ?>class="menu-active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/profile?page=transfer" title="Chuyển tiền">Chuyển tiền</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>