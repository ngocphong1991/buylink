<?php /* Smarty version 2.6.18, created on 2014-04-24 01:41:39
         compiled from publishers.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'publishers.tpl', 63, false),)), $this); ?>
<?php if ($_SESSION['uid'] != ''): ?>
<div class="wrapper paper">
    <div class="container">
        <div class="row">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'left-menu.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <div class="col-md-9 right-content-paper plus">
                <div class="banner">
                    <img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/ad.png">
                </div>
                <div class="right-inner">
                    <h4 class="border-bold">WEBSITE</h4>
                    <div class="right website">
                        <div class="arrow-loop-right" id="arrow-website-form"></div>
                        <div id="websiteErrors" class="formErrors"></div>
                        <form onsubmit="return false;" action="<?php echo $this->_tpl_vars['_config']['www']; ?>
/account/websites/" method="post" id="submitWebsiteForm" class="form-horizontal" name="submitWebsiteForm">
                            <!--Start The Step 1-->
                            <div id="submitWebsiteStep1" class="control-group">
                                <input type="hidden" name="update_pid" value="<?php echo $_POST['pid']; ?>
" />
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="websiteUrl">Your Website URL: *</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="col-sm-8" value="<?php echo $_POST['url']; ?>
" name="url" id="websiteUrl" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="websiteTitle">Website Title: *</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="col-sm-8" value="<?php echo $_POST['wname']; ?>
" name="wname" id="websiteTitle" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="websiteDescription">Describe your website: *</label>
                                    <div class="col-sm-9">
                                        <textarea rows="4" class="txt2" cols="30" name="wdes" onkeydown="updateWebsiteDescriptionLength(this);" onkeyup="updateWebsiteDescriptionLength(this);" id="websiteDescription"><?php echo $_POST['wdes']; ?>
</textarea>
                                        <p class="small grey"> Minimum of 150 characters. Current: <span id="websiteDescriptionLength">0</span> </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="1" name="guide" id="publisherGuide">
                                                I've read the <a href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/files/publishers-guide.doc" target="_blank">Publisher's Guide</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <a onclick="submitWebsiteStep1(); return false;" href="#" class="button blue" id="btnSubmitWebsite1">Đăng bán website</a>
                                    </div>
                                </div>
                            </div>
                            <!--End the step 1-->

                            <!--Start the step 2-->
                            <input type="hidden" class="txt2" name="edit_site" value="1" />
                            <div class="hidden control-group" id="submitWebsiteStep2">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="cats1">Chuyên mục *</label>
                                    <div class="col-sm-9">
                                        <select size="1" class="col-sm-6" name="cats1" id="cats1" onChange="javascript: sendReqPost(loc+'js/get_scats.php?cid='+this.value,'sc');">
                                            <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['cat_ids'],'output' => $this->_tpl_vars['cats'],'selected' => $_POST['cats1']), $this);?>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="langid">Ngôn ngữ:</label>
                                    <div class="col-sm-9">
                                        <select class="col-sm-6" xml:id="langid" name="langid" id="filterLanguage">
                                            <option selected="selected" value="">-- All Languages --</option>
                                            <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['langs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['num']['show'] = true;
$this->_sections['num']['max'] = $this->_sections['num']['loop'];
$this->_sections['num']['step'] = 1;
$this->_sections['num']['start'] = $this->_sections['num']['step'] > 0 ? 0 : $this->_sections['num']['loop']-1;
if ($this->_sections['num']['show']) {
    $this->_sections['num']['total'] = $this->_sections['num']['loop'];
    if ($this->_sections['num']['total'] == 0)
        $this->_sections['num']['show'] = false;
} else
    $this->_sections['num']['total'] = 0;
if ($this->_sections['num']['show']):

            for ($this->_sections['num']['index'] = $this->_sections['num']['start'], $this->_sections['num']['iteration'] = 1;
                 $this->_sections['num']['iteration'] <= $this->_sections['num']['total'];
                 $this->_sections['num']['index'] += $this->_sections['num']['step'], $this->_sections['num']['iteration']++):
$this->_sections['num']['rownum'] = $this->_sections['num']['iteration'];
$this->_sections['num']['index_prev'] = $this->_sections['num']['index'] - $this->_sections['num']['step'];
$this->_sections['num']['index_next'] = $this->_sections['num']['index'] + $this->_sections['num']['step'];
$this->_sections['num']['first']      = ($this->_sections['num']['iteration'] == 1);
$this->_sections['num']['last']       = ($this->_sections['num']['iteration'] == $this->_sections['num']['total']);
?>
                                                <option value="<?php echo $this->_tpl_vars['lang_ids'][$this->_sections['num']['index']]; ?>
"><?php echo $this->_tpl_vars['langs'][$this->_sections['num']['index']]; ?>
</option>
                                            <?php endfor; endif; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="adposition">Vị trí quảng cáo:</label>
                                    <div class="col-sm-9">
                                        <select class="col-sm-6" id="adposition" name="adposition" size="1">
                                            <option value=""></option>
                                            <option selected="selected" value="header" label="Header">Header</option>
                                            <option value="footer" label="Footer">Footer</option>
                                            <option value="left" label="Left">Left</option>
                                            <option value="right" label="Right">Right</option>
                                            <option value="in_content" label="In Contents">In Contents</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="adposition">URL is the homepage of your website?</label>
                                    <div class="col-sm-9">
                                        <div class="checkbox">
                                            <label for="isHomepageY" class="checkbox-inline">
                                                <input type="radio" checked="checked" value="Y" name="is_homepage" id="isHomepageY"> Yes
                                            </label>
                                            <label for="isHomepageN" class="checkbox-inline">
                                                <input type="radio" value="N" name="is_homepage" id="isHomepageN"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <a onclick="submitWebsiteStep2(); return false;" href="#" class="button blue" id="btnSubmitWebsite2">Đăng website</a>
                                        <a onclick="cancelWebsiteStep2(); return false;" href="#" class="button gray" id="btnWebsiteGoBack">Quay lại</a>
                                    </div>
                                </div>
                            </div>
                            <!--End the step 2-->

                            <!--Start the step 3-->
                            <div class="hidden control-group" id="submitWebsiteStep3">
                                <div class="alert alert-success">
                                    <p> <strong>Your website is currently being processed.</strong> We will contact you shortly regarding the status of your website. </p>
                                </div>
                                <div class="form-group"> <a onclick="submitWebsiteNew(); return false;" href="#" class="button red">Submit another</a> </div>
                            </div>
                            <!--End the step 3-->
                        </form>
                    <p class="large"> Tổng Thu Nhập <span class="bold green"><?php echo $this->_tpl_vars['total_earnings']; ?>
</span>.<br>
                    <em class="small">(Lưu ý rằng thu nhập có thể bị thay đổi nếu link quảng cáo bị hủy hay là không hiển thị.)</em> </p>
                    <table class="data large width-600" id="website-table">
                    <thead>
                    <tr>
                    <th><a href="#">Website Details</a> <img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/sorted-asc.gif"></th>
                    <th style="width: 60px;"><a href="#">Added</a></th>
                    <th style="width: 60px;">Price/month</th>
                    <th style="width: 80px;" class="last">Manage</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['www']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['num']['show'] = true;
$this->_sections['num']['max'] = $this->_sections['num']['loop'];
$this->_sections['num']['step'] = 1;
$this->_sections['num']['start'] = $this->_sections['num']['step'] > 0 ? 0 : $this->_sections['num']['loop']-1;
if ($this->_sections['num']['show']) {
    $this->_sections['num']['total'] = $this->_sections['num']['loop'];
    if ($this->_sections['num']['total'] == 0)
        $this->_sections['num']['show'] = false;
} else
    $this->_sections['num']['total'] = 0;
if ($this->_sections['num']['show']):

            for ($this->_sections['num']['index'] = $this->_sections['num']['start'], $this->_sections['num']['iteration'] = 1;
                 $this->_sections['num']['iteration'] <= $this->_sections['num']['total'];
                 $this->_sections['num']['index'] += $this->_sections['num']['step'], $this->_sections['num']['iteration']++):
$this->_sections['num']['rownum'] = $this->_sections['num']['iteration'];
$this->_sections['num']['index_prev'] = $this->_sections['num']['index'] - $this->_sections['num']['step'];
$this->_sections['num']['index_next'] = $this->_sections['num']['index'] + $this->_sections['num']['step'];
$this->_sections['num']['first']      = ($this->_sections['num']['iteration'] == 1);
$this->_sections['num']['last']       = ($this->_sections['num']['iteration'] == $this->_sections['num']['total']);
?>
                    <tr class="row1">
                    <?php if ($this->_tpl_vars['www'][$this->_sections['num']['index']]['pid'] != $_GET['pid']): ?>
                    <a href="seller_mywebsites.php?pid=<?php echo $this->_tpl_vars['www'][$this->_sections['num']['index']]['pid']; ?>
" class="style37"><?php endif; ?>
                    <?php if ($this->_tpl_vars['www'][$this->_sections['num']['index']]['pid'] != $_GET['pid']): ?></a>
                    <td class="alignleft"><strong>
                    <?php echo $this->_tpl_vars['www'][$this->_sections['num']['index']]['title']; ?>

                    </strong><?php if ($this->_tpl_vars['www'][$this->_sections['num']['index']]['status'] == 2): ?>
                    <span class="lbl lbl-active">Active</span>
                    <?php else: ?>
                    <span class="lbl lbl-pending">Pending</span>
                    <?php endif; ?>
                    <br>
                    <span class="grey">(<a href="<?php echo $this->_tpl_vars['www'][$this->_sections['num']['index']]['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['www'][$this->_sections['num']['index']]['url']; ?>
</a>)</span><br>
                    <?php echo $this->_tpl_vars['www'][$this->_sections['num']['index']]['description']; ?>

                    <br />
                    <span class="grey">
                    Alexa: <?php echo $this->_tpl_vars['www'][$this->_sections['num']['index']]['alexa_rank']; ?>
 &nbsp;  Pagerank: <?php echo $this->_tpl_vars['www'][$this->_sections['num']['index']]['google_page_rank']; ?>
 &nbsp;  Domain age: <?php echo $this->_tpl_vars['www'][$this->_sections['num']['index']]['domain_age']; ?>

                    </span>
                    </td>
                    <td class="alignleft"><?php echo $this->_tpl_vars['www'][$this->_sections['num']['index']]['date']; ?>
</td>
                    <td class="alignright large bold green"><?php echo $this->_tpl_vars['www'][$this->_sections['num']['index']]['set_price']; ?>
</td>
                    <td class="centered last"><a href="publishers.php?pid=<?php echo $this->_tpl_vars['www'][$this->_sections['num']['index']]['pid']; ?>
&do=edit" class="btn-tan-80">Edit</a>
                    <a href="earnings.php?pid=<?php echo $this->_tpl_vars['www'][$this->_sections['num']['index']]['pid']; ?>
" style="margin-top: 5px;" class="btn-tan-80">Earnings</a></td>
                    </tr>
                    <?php endif; ?>
                    <?php endfor; endif; ?>
                    </tbody>
                    </table>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php else: ?>
<div class="wrapper">
    <div class="container">
    <div class="row">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'left-menu-user.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div class="col-md-9 right-content">
        <img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/cms.png">
    </div>
    </div>
    </div>
</div>
<?php endif; ?>