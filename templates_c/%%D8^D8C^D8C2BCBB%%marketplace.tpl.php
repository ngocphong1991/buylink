<?php /* Smarty version 2.6.18, created on 2014-04-19 07:34:47
         compiled from marketplace.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'marketplace.tpl', 38, false),)), $this); ?>
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
                    <div class="cart-tool">
                        <p>
                            <i class="icon-cart"></i> <span>Giỏ hàng:</span>
                            <strong class="cart-regular-count"><?php echo $this->_tpl_vars['total_cart']; ?>
 link</strong>
                             - Tổng tiền: <strong class="cart-total">0.00</strong>
                            <a href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/cart" title="Thanh Toán" class="button red" id="btnViewCart">Thanh toán</a>
                        </p>
                    </div>
                    <h4 class="border-bold super-bold">Mua Buylink</h4>
                    <div class="row">
                        <form class="form-horizontal" id="marketplaceFilter" method="get">
                            <div class="control-group">
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <select class="col-md-12" name="link_score">
                                            <option value="">Pageranks</option>
                                            <option value="1">1+</option>
                                            <option value="2">2+</option>
                                            <option value="3">3+</option>
                                            <option value="4">4+</option>
                                            <option value="5">5+</option>
                                            <option value="6">6+</option>
                                            <option value="7">7+</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select size="1" name="category_id" id="filterCategory" class="col-md-12">
                                            <option value="0" label="-- All Categories --">-- Danh mục website --</option>
                                            <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['cat_ids'],'output' => $this->_tpl_vars['cats'],'selected' => $_POST['cats1']), $this);?>

                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="col-md-12" name="domain" onblur="updateTextFieldLabel(this, false, 'Tên miền');" onfocus="updateTextFieldLabel(this, true, 'Tên miền');" value="<?php if (isset ( $_GET['domain'] ) && $_GET['domain'] != ''): ?><?php echo $_GET['domain']; ?>
<?php else: ?>Tên miền<?php endif; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <input type="text" onblur="updateTextFieldLabel(this, false, 'Nhập từ khóa cần tìm');" onfocus="updateTextFieldLabel(this, true, 'Nhập từ khóa cần tìm');" value="<?php if (isset ( $_GET['keywords'] ) && $_GET['keywords'] != ''): ?><?php echo $_GET['keywords']; ?>
<?php else: ?>Nhập từ khóa cần tìm<?php endif; ?>" name="keywords" class="col-md-12 border-blue">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3 pull-left">
                                        <button class="button blue-bold">Tìm Kiếm</button>
                                    </div>
                                    <div class="col-md-9 pull-right">
                                        <div class="paging pull-right">
                                            <?php echo $this->_tpl_vars['Template_Pagignation_Data']; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Thông tin chi tiết</th>
                                <th>PR</th>
                                <th>Alexa</th>
                                <th>Domain age</th>
                                <th>TLD</th>
                                <th>Giá/Tháng</th>
                                <th>Mua</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php unset($this->_sections['num']);
$this->_sections['num']['name'] = 'num';
$this->_sections['num']['loop'] = is_array($_loop=$this->_tpl_vars['winfo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                <tr>
                                    <td><?php echo $this->_sections['num']['index']+1; ?>
</td>
                                    <td>
                                        <a target="_blank" href="<?php echo $this->_tpl_vars['_config']['www']; ?>
/view-site.php?pid=<?php echo $this->_tpl_vars['winfo'][$this->_sections['num']['index']]['pid']; ?>
"><?php echo $this->_tpl_vars['winfo'][$this->_sections['num']['index']]['description']; ?>
</a>
                                    </td>
                                    <td><?php echo $this->_tpl_vars['winfo'][$this->_sections['num']['index']]['google_page_rank']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['winfo'][$this->_sections['num']['index']]['alexa_rank']; ?>
</td>
                                    <td width="13%"><?php echo $this->_tpl_vars['winfo'][$this->_sections['num']['index']]['domain_age']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['winfo'][$this->_sections['num']['index']]['domain_ext']; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['winfo'][$this->_sections['num']['index']]['sale_price']; ?>
</td>
                                    <td width="12%"><a class="add-cart" onclick="addToCart(this, 'regular', <?php echo $this->_tpl_vars['winfo'][$this->_sections['num']['index']]['pid']; ?>
, '', '', ''); return false;" href="#">	&#43; Đặt mua</a></td>
                                </tr>
                            <?php endfor; endif; ?>
                            </tbody>
                        </table>
                        <div class="paging pull-right">
                            <?php echo $this->_tpl_vars['Template_Pagignation_Data']; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>