<?php /* Smarty version 2.6.18, created on 2014-04-19 06:57:20
         compiled from register.tpl */ ?>
<div class="wrapper container">
    <div class="container">
        <div class="row">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'left-menu-user.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <div class="col-md-9 right-content">
                <h4>JOIN THOUSANDS OF OTHER USERS</h4>
                <form class="form-horizontal" method="post" action="" id="registerForm" name="registerForm">
                    <fieldset class="user-type">
                        <div class="control-group">
                            <p class="note"><span>Can be changed later!</span></p>
                            <h5>Choose Your Account Type</h5>
                            <div class="row">
                                <div class="one col-md-4">
                                    <label class="active" for="type_0">
                                        <input type="radio" checked="checked" id="type_0" value="adv" name="type">
                                        Advertiser
                                    </label>
                                    <p>Buy ads and improve your natural search engine ranking</p>
                                </div>
                                <div class="one col-md-4">
                                    <label for="type_1">
                                        <input type="radio" id="type_1" value="pub" name="type">
                                        Publisher
                                    </label>
                                    <p>Sell simple text link ads on your website and make money</p>
                                </div>
                                <div class="one col-md-4">
                                    <label for="type_3">
                                        <input type="radio" id="type_3" value="pub+adv" name="type">
                                        Advertiser + Publisher
                                    </label>
                                    <p>Buy ads from other websites and sell text link ads on your owner site.</p>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="user-detail">
                        <div class="control-group">
                            <h5>Your personal details</h5>
                            <?php if (isset ( $this->_tpl_vars['msg'] )): ?><div class="message-error"><?php echo $this->_tpl_vars['msg']; ?>
</div><?php endif; ?>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="firstName">First & Last Name <span>*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" id="firstName" style="margin-right: 5px" name="firstName" value="<?php echo $_POST['firstName']; ?>
" class="col-sm-4 required">
                                    <input type="text" id="lastName" name="lastName" value="<?php echo $_POST['lastName']; ?>
" class="col-sm-4 required">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="username">User name <span>*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="col-sm-4 required" id="username" name="username" value="<?php echo $_POST['username']; ?>
" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-3 control-label">
                                    <label class="" for="company">Company name</label>
                                    <p><span>(if applicable)</span></p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="col-sm-4" id="company" name="company" value="<?php echo $_POST['company']; ?>
" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="email">Email address<span>*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="col-sm-4 required email" value="<?php echo $_POST['email']; ?>
" id="email" name="email" />
                                </div>
                                <div class="col-sm-offset-3 col-sm-9">
                                    <p>MediaWhiz SEO Privacy Pollicy: Your email address will not be sold or rented to ANYBODY</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="mobile">Phone </label>
                                <div class="col-sm-9">
                                    <input type="text" class="col-sm-4" value="<?php echo $_POST['mobile']; ?>
" id="mobile" name="mobile" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-3 control-label">
                                    <label for="text_ad_pass">Password<span>*</span></label>
                                    <p><span>(twice to confirm)</span></p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="password" style="margin-right: 5px" class="col-sm-4 required password" id="text_ad_pass" name="text_ad_pass" />
                                    <input type="password" id="text_ad_pass2" equalto="#text_ad_pass" minlength="6"  name="text_ad_pass2" class="col-sm-4 required">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="address">Address<span>*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="col-sm-4 required" value="<?php echo $_POST['address']; ?>
" id="address" name="address" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="city">City<span>*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="col-sm-4 required" id="city" value="<?php echo $_POST['city']; ?>
" name="city" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="country">Country</label>
                                <div class="col-sm-9">
                                    <select id="country" name="country"onchange="changeUserCountry(this);">
                                        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['allCountry']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                            <option value="<?php echo $this->_tpl_vars['allCountry'][$this->_sections['i']['index']]['countrysel']; ?>
" <?php if ($this->_tpl_vars['allCountry'][$this->_sections['i']['index']]['countrysel'] == 218): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['allCountry'][$this->_sections['i']['index']]['country']; ?>
</option>
                                        <?php endfor; endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="state">State or Province<span>*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="col-sm-4 required" value="<?php echo $_POST['state']; ?>
" id="state" name="state" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="zip">Zip<span>*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="col-sm-4 required" id="zip" value="<?php echo $_POST['zip']; ?>
" name="zip" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button class="submit button blue jquery-corner">Create my Account now</button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <?php echo '
    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery.validator.messages.required = "";
            jQuery("#registerForm").validate();
        });
    </script>
    '; ?>

</div>