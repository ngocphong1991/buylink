<?php /* Smarty version 2.6.18, created on 2014-04-23 03:03:53
         compiled from header.tpl */ ?>
<!-- START THE HEADER -->
<div class="header">
    <div class="container">
        <ul class="customer button blue jquery-corner">
            <?php if ($_SESSION['uid'] != ''): ?>
            <li class="active"><a href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/profile" title="My Account">My Account</a></li>
            <li><i class="ds"></i></li>
            <li><a href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/account.php?logout=1" title="Logout">Logout</a></li>
            <?php else: ?>
            <li class="active"><a href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/register.php" title="SignUp">SignUp</a></li>
            <li><i class="ds"></i></li>
            <li><a href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/account.php" title="Login">Login</a></li>
            <?php endif; ?>
        </ul>
        <ul class="nav nav-pills pull-right play-block">
            <li class="active"><a title="Home" href="<?php echo $this->_tpl_vars['_config']['www']; ?>
"><i class="icon-home"></i></a></li>
            <li><i class="ds"></i></li>
            <li><a title="1900 6891" href="#"><i class="icon-call"></i>1900 6891</a></li>
            <li><i class="ds"></i></li>
            <li><a title="Contact us" href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/contact"><i class="icon-contact"></i>Contact us</a></li>
        </ul>
        <h3><a href="<?php echo $this->_tpl_vars['_config']['www']; ?>
" title="Home page"><img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/logo.png" alt="TextlinkVN"></a></h3>
    </div>
</div>
<!-- /END THE HEADER -->

<!-- START THE MENU TOP -->
<div class="tl-masthead">
    <div class="container">
        <nav class="tl-nav">
            <a href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/advertisers" title="Advertisers" class="tl-nav-item active advertisers">Advertisers <i class="icon-advertisers"></i></a>
            <a href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/publishers" title="Publishers" class="tl-nav-item publishers">Publishers <i class="icon-publishers"></i></a>
            <a href="#" title="Agencies" class="tl-nav-item agencies">Agencies <i class="icon-agencies"></i></a>
        </nav>
    </div>
</div>
<!-- /END THE MENU TOP -->