<?php /* Smarty version 2.6.18, created on 2014-04-24 04:45:26
         compiled from manage-group-buylink.tpl */ ?>
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
<h4 class="border-bold super-bold">Texlink đang chạy </h4>

<div class="buylinkmanage">
<div class="col-md-12">
<div class="blog-tabs">
<ul id="blog-tab" class="nav nav-tabs">
    <li class=""><a href="#blmtab1" data-toggle="tab">Textlink chưa thanh toán</a></li>
    <li class="active"><a href="#blmtab2" data-toggle="tab">Textlink đang chạy</a></li>
    <li class=""><a href="#blmtab3" data-toggle="tab">Textlink hết hạn</a></li>
    <li class=""><a href="#blmtab4" data-toggle="tab">Textlink đã hủy</a></li>
    <li class=""><a href="#blmtab5" data-toggle="tab">Textlink đã dừng lại</a></li>
    <li class=""><a href="#blmtab6" data-toggle="tab">Textlink bị từ chối</a></li>
</ul>
<div id="myTabContent" class="tab-content">

<div class="tab-pane fade in" id="blmtab1">
    <form method="get" id="marketplaceFilter" class="form-horizontal">
        <div class="control-group">
            <div class="form-group">
                <div class="col-md-3">
                    <input type="text" class="col-md-12 border-blue" name="keywords" value="Nhập từ khóa cần tìm 1" onfocus="updateTextFieldLabel(this, true, 'Nhập từ khóa cần tìm');" onblur="updateTextFieldLabel(this, false, 'Nhập từ khóa cần tìm');">

                </div>
                <div class="col-md-3">
                    <select class="col-md-12" id="filterCategory" name="category_id" size="1">
                        <option label="-- All Categories --" value="0">-- Danh mục website --</option>
                        <option value="35" label="Agriculture">Agriculture</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="col-md-12" id="filterCategory" name="category_id" size="1">
                        <option label="-- All Categories --" value="0">-- Danh mục website --</option>
                        <option value="35" label="Agriculture">Agriculture</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="text" value="Mã textlink" onfocus="updateTextFieldLabel(this, true, 'Mã textlink');" onblur="updateTextFieldLabel(this, false, 'Mã textlink');" name="domain" class="col-md-12">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <select class="col-md-12" id="filterCategory" name="category_id" size="1">
                        <option label="-- All Categories --" value="0">-- Danh mục website --</option>
                        <option value="35" label="Agriculture">Agriculture</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="col-md-12" id="filterCategory" name="category_id" size="1">
                        <option label="-- All Categories --" value="0">-- Danh mục website --</option>
                        <option value="35" label="Agriculture">Agriculture</option>
                    </select>
                </div>
                <label for="inputEmail3" class="col-sm-2 control-label"><strong>Hết hạn:</strong></label>
                <div class="col-md-2">
                    <input type="text" value="Mã textlink" onfocus="updateTextFieldLabel(this, true, 'Mã textlink');" onblur="updateTextFieldLabel(this, false, 'Mã textlink');" name="domain" class="col-md-12">
                </div>
                <div class="col-md-2">
                    <input type="text" value="Mã textlink" onfocus="updateTextFieldLabel(this, true, 'Mã textlink');" onblur="updateTextFieldLabel(this, false, 'Mã textlink');" name="domain" class="col-md-12">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3 pull-left">
                    <button class="button blue-bold">Tìm Kiếm</button>
                </div>
                <div class="col-md-9 pull-right">
                    <div class="paging pull-right">
                        <span>1</span>&nbsp;&nbsp;<a class="adminmenu" href="/buylink/marketplace.php?offset=10&amp;numrows=25&amp;">2</a> &nbsp;<a class="adminmenu" href="/buylink/marketplace.php?offset=20&amp;numrows=25&amp;">3</a> &nbsp;<a class="adminmenu" href="/buylink/marketplace.php?offset=10&amp;numrows=25&amp;"><i class="icon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="tab-pane fade active in" id="blmtab2">
    <form method="get" id="marketplaceFilter" class="form-horizontal">
        <div class="control-group">
            <div class="form-group">
                <div class="col-md-3">
                    <input type="text" class="col-md-12 border-blue" name="keywords" value="Nhập từ khóa cần tìm" onfocus="updateTextFieldLabel(this, true, 'Nhập từ khóa cần tìm');" onblur="updateTextFieldLabel(this, false, 'Nhập từ khóa cần tìm');">

                </div>
                <div class="col-md-3">
                    <select class="col-md-12" id="filterCategory" name="category_id" size="1">
                        <option label="-- All Categories --" value="0">-- Danh mục website --</option>
                        <option value="35" label="Agriculture">Agriculture</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="col-md-12" id="filterCategory" name="category_id" size="1">
                        <option label="-- All Categories --" value="0">-- Danh mục website --</option>
                        <option value="35" label="Agriculture">Agriculture</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="text" value="Mã textlink" onfocus="updateTextFieldLabel(this, true, 'Mã textlink');" onblur="updateTextFieldLabel(this, false, 'Mã textlink');" name="domain" class="col-md-12">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <select class="col-md-12" id="filterCategory" name="category_id" size="1">
                        <option label="-- All Categories --" value="0">-- Danh mục website --</option>
                        <option value="35" label="Agriculture">Agriculture</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="col-md-12" id="filterCategory" name="category_id" size="1">
                        <option label="-- All Categories --" value="0">-- Danh mục website --</option>
                        <option value="35" label="Agriculture">Agriculture</option>
                    </select>
                </div>
                <label for="inputEmail3" class="col-sm-2 control-label"><strong>Hết hạn:</strong></label>
                <div class="col-md-2">
                    <input type="text" value="Mã textlink" onfocus="updateTextFieldLabel(this, true, 'Mã textlink');" onblur="updateTextFieldLabel(this, false, 'Mã textlink');" name="domain" class="col-md-12">
                </div>
                <div class="col-md-2">
                    <input type="text" value="Mã textlink" onfocus="updateTextFieldLabel(this, true, 'Mã textlink');" onblur="updateTextFieldLabel(this, false, 'Mã textlink');" name="domain" class="col-md-12">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3 pull-left">
                    <button class="button blue-bold">Tìm Kiếm</button>
                </div>
                <div class="col-md-9 pull-right">
                    <div class="paging pull-right">
                        <span>1</span>&nbsp;&nbsp;<a class="adminmenu" href="/buylink/marketplace.php?offset=10&amp;numrows=25&amp;">2</a> &nbsp;<a class="adminmenu" href="/buylink/marketplace.php?offset=20&amp;numrows=25&amp;">3</a> &nbsp;<a class="adminmenu" href="/buylink/marketplace.php?offset=10&amp;numrows=25&amp;"><i class="icon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="tab-pane fade" id="blmtab3">
    <form method="get" id="marketplaceFilter" class="form-horizontal">
        <div class="control-group">
            <div class="form-group">
                <div class="col-md-3">
                    <input type="text" class="col-md-12 border-blue" name="keywords" value="Nhập từ khóa cần tìm 1" onfocus="updateTextFieldLabel(this, true, 'Nhập từ khóa cần tìm');" onblur="updateTextFieldLabel(this, false, 'Nhập từ khóa cần tìm');">

                </div>
                <div class="col-md-3">
                    <select class="col-md-12" id="filterCategory" name="category_id" size="1">
                        <option label="-- All Categories --" value="0">-- Danh mục website --</option>
                        <option value="35" label="Agriculture">Agriculture</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="col-md-12" id="filterCategory" name="category_id" size="1">
                        <option label="-- All Categories --" value="0">-- Danh mục website --</option>
                        <option value="35" label="Agriculture">Agriculture</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="text" value="Mã textlink" onfocus="updateTextFieldLabel(this, true, 'Mã textlink');" onblur="updateTextFieldLabel(this, false, 'Mã textlink');" name="domain" class="col-md-12">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <select class="col-md-12" id="filterCategory" name="category_id" size="1">
                        <option label="-- All Categories --" value="0">-- Danh mục website --</option>
                        <option value="35" label="Agriculture">Agriculture</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="col-md-12" id="filterCategory" name="category_id" size="1">
                        <option label="-- All Categories --" value="0">-- Danh mục website --</option>
                        <option value="35" label="Agriculture">Agriculture</option>
                    </select>
                </div>
                <label for="inputEmail3" class="col-sm-2 control-label"><strong>Hết hạn:</strong></label>
                <div class="col-md-2">
                    <input type="text" value="Mã textlink" onfocus="updateTextFieldLabel(this, true, 'Mã textlink');" onblur="updateTextFieldLabel(this, false, 'Mã textlink');" name="domain" class="col-md-12">
                </div>
                <div class="col-md-2">
                    <input type="text" value="Mã textlink" onfocus="updateTextFieldLabel(this, true, 'Mã textlink');" onblur="updateTextFieldLabel(this, false, 'Mã textlink');" name="domain" class="col-md-12">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3 pull-left">
                    <button class="button blue-bold">Tìm Kiếm</button>
                </div>
                <div class="col-md-9 pull-right">
                    <div class="paging pull-right">
                        <span>1</span>&nbsp;&nbsp;<a class="adminmenu" href="/buylink/marketplace.php?offset=10&amp;numrows=25&amp;">2</a> &nbsp;<a class="adminmenu" href="/buylink/marketplace.php?offset=20&amp;numrows=25&amp;">3</a> &nbsp;<a class="adminmenu" href="/buylink/marketplace.php?offset=10&amp;numrows=25&amp;"><i class="icon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="tab-pane fade" id="blmtab4">
    <form method="get" id="marketplaceFilter" class="form-horizontal">
        <div class="control-group">
            <div class="form-group">
                <div class="col-md-3">
                    <input type="text" class="col-md-12 border-blue" name="keywords" value="Nhập từ khóa cần tìm 1" onfocus="updateTextFieldLabel(this, true, 'Nhập từ khóa cần tìm');" onblur="updateTextFieldLabel(this, false, 'Nhập từ khóa cần tìm');">

                </div>
                <div class="col-md-3">
                    <select class="col-md-12" id="filterCategory" name="category_id" size="1">
                        <option label="-- All Categories --" value="0">-- Danh mục website --</option>
                        <option value="35" label="Agriculture">Agriculture</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="col-md-12" id="filterCategory" name="category_id" size="1">
                        <option label="-- All Categories --" value="0">-- Danh mục website --</option>
                        <option value="35" label="Agriculture">Agriculture</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="text" value="Mã textlink" onfocus="updateTextFieldLabel(this, true, 'Mã textlink');" onblur="updateTextFieldLabel(this, false, 'Mã textlink');" name="domain" class="col-md-12">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <select class="col-md-12" id="filterCategory" name="category_id" size="1">
                        <option label="-- All Categories --" value="0">-- Danh mục website --</option>
                        <option value="35" label="Agriculture">Agriculture</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="col-md-12" id="filterCategory" name="category_id" size="1">
                        <option label="-- All Categories --" value="0">-- Danh mục website --</option>
                        <option value="35" label="Agriculture">Agriculture</option>
                    </select>
                </div>
                <label for="inputEmail3" class="col-sm-2 control-label"><strong>Hết hạn:</strong></label>
                <div class="col-md-2">
                    <input type="text" value="Mã textlink" onfocus="updateTextFieldLabel(this, true, 'Mã textlink');" onblur="updateTextFieldLabel(this, false, 'Mã textlink');" name="domain" class="col-md-12">
                </div>
                <div class="col-md-2">
                    <input type="text" value="Mã textlink" onfocus="updateTextFieldLabel(this, true, 'Mã textlink');" onblur="updateTextFieldLabel(this, false, 'Mã textlink');" name="domain" class="col-md-12">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3 pull-left">
                    <button class="button blue-bold">Tìm Kiếm</button>
                </div>
                <div class="col-md-9 pull-right">
                    <div class="paging pull-right">
                        <span>1</span>&nbsp;&nbsp;<a class="adminmenu" href="/buylink/marketplace.php?offset=10&amp;numrows=25&amp;">2</a> &nbsp;<a class="adminmenu" href="/buylink/marketplace.php?offset=20&amp;numrows=25&amp;">3</a> &nbsp;<a class="adminmenu" href="/buylink/marketplace.php?offset=10&amp;numrows=25&amp;"><i class="icon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="tab-pane fade" id="blmtab5">
    <form method="get" id="marketplaceFilter" class="form-horizontal">
        <div class="control-group">
            <div class="form-group">
                <div class="col-md-3">
                    <input type="text" class="col-md-12 border-blue" name="keywords" value="Nhập từ khóa cần tìm 1" onfocus="updateTextFieldLabel(this, true, 'Nhập từ khóa cần tìm');" onblur="updateTextFieldLabel(this, false, 'Nhập từ khóa cần tìm');">

                </div>
                <div class="col-md-3">
                    <select class="col-md-12" id="filterCategory" name="category_id" size="1">
                        <option label="-- All Categories --" value="0">-- Danh mục website --</option>
                        <option value="35" label="Agriculture">Agriculture</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="col-md-12" id="filterCategory" name="category_id" size="1">
                        <option label="-- All Categories --" value="0">-- Danh mục website --</option>
                        <option value="35" label="Agriculture">Agriculture</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="text" value="Mã textlink" onfocus="updateTextFieldLabel(this, true, 'Mã textlink');" onblur="updateTextFieldLabel(this, false, 'Mã textlink');" name="domain" class="col-md-12">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <select class="col-md-12" id="filterCategory" name="category_id" size="1">
                        <option label="-- All Categories --" value="0">-- Danh mục website --</option>
                        <option value="35" label="Agriculture">Agriculture</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="col-md-12" id="filterCategory" name="category_id" size="1">
                        <option label="-- All Categories --" value="0">-- Danh mục website --</option>
                        <option value="35" label="Agriculture">Agriculture</option>
                    </select>
                </div>
                <label for="inputEmail3" class="col-sm-2 control-label"><strong>Hết hạn:</strong></label>
                <div class="col-md-2">
                    <input type="text" value="Mã textlink" onfocus="updateTextFieldLabel(this, true, 'Mã textlink');" onblur="updateTextFieldLabel(this, false, 'Mã textlink');" name="domain" class="col-md-12">
                </div>
                <div class="col-md-2">
                    <input type="text" value="Mã textlink" onfocus="updateTextFieldLabel(this, true, 'Mã textlink');" onblur="updateTextFieldLabel(this, false, 'Mã textlink');" name="domain" class="col-md-12">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3 pull-left">
                    <button class="button blue-bold">Tìm Kiếm</button>
                </div>
                <div class="col-md-9 pull-right">
                    <div class="paging pull-right">
                        <span>1</span>&nbsp;&nbsp;<a class="adminmenu" href="/buylink/marketplace.php?offset=10&amp;numrows=25&amp;">2</a> &nbsp;<a class="adminmenu" href="/buylink/marketplace.php?offset=20&amp;numrows=25&amp;">3</a> &nbsp;<a class="adminmenu" href="/buylink/marketplace.php?offset=10&amp;numrows=25&amp;"><i class="icon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="tab-pane fade" id="blmtab6">
    <form method="get" id="marketplaceFilter" class="form-horizontal">
        <div class="control-group">
            <div class="form-group">
                <div class="col-md-3">
                    <input type="text" class="col-md-12 border-blue" name="keywords" value="Nhập từ khóa cần tìm 1" onfocus="updateTextFieldLabel(this, true, 'Nhập từ khóa cần tìm');" onblur="updateTextFieldLabel(this, false, 'Nhập từ khóa cần tìm');">

                </div>
                <div class="col-md-3">
                    <select class="col-md-12" id="filterCategory" name="category_id" size="1">
                        <option label="-- All Categories --" value="0">-- Danh mục website --</option>
                        <option value="35" label="Agriculture">Agriculture</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="col-md-12" id="filterCategory" name="category_id" size="1">
                        <option label="-- All Categories --" value="0">-- Danh mục website --</option>
                        <option value="35" label="Agriculture">Agriculture</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="text" value="Mã textlink" onfocus="updateTextFieldLabel(this, true, 'Mã textlink');" onblur="updateTextFieldLabel(this, false, 'Mã textlink');" name="domain" class="col-md-12">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    <select class="col-md-12" id="filterCategory" name="category_id" size="1">
                        <option label="-- All Categories --" value="0">-- Danh mục website --</option>
                        <option value="35" label="Agriculture">Agriculture</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="col-md-12" id="filterCategory" name="category_id" size="1">
                        <option label="-- All Categories --" value="0">-- Danh mục website --</option>
                        <option value="35" label="Agriculture">Agriculture</option>
                    </select>
                </div>
                <label for="inputEmail3" class="col-sm-2 control-label"><strong>Hết hạn:</strong></label>
                <div class="col-md-2">
                    <input type="text" value="Mã textlink" onfocus="updateTextFieldLabel(this, true, 'Mã textlink');" onblur="updateTextFieldLabel(this, false, 'Mã textlink');" name="domain" class="col-md-12">
                </div>
                <div class="col-md-2">
                    <input type="text" value="Mã textlink" onfocus="updateTextFieldLabel(this, true, 'Mã textlink');" onblur="updateTextFieldLabel(this, false, 'Mã textlink');" name="domain" class="col-md-12">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3 pull-left">
                    <button class="button blue-bold">Tìm Kiếm</button>
                </div>
                <div class="col-md-9 pull-right">
                    <div class="paging pull-right">
                        <span>1</span>&nbsp;&nbsp;<a class="adminmenu" href="/buylink/marketplace.php?offset=10&amp;numrows=25&amp;">2</a> &nbsp;<a class="adminmenu" href="/buylink/marketplace.php?offset=20&amp;numrows=25&amp;">3</a> &nbsp;<a class="adminmenu" href="/buylink/marketplace.php?offset=10&amp;numrows=25&amp;"><i class="icon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>

</div>

<table class="table table-striped">
    <thead>
    <tr>
        <th>STT</th>
        <th>Thông tin</th>
        <th>Textlink</th>
        <th>Trên trang</th>
        <th>Thời gian</th>
        <th></th>
    </tr>
    </thead>
    <tbody>


    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['ids']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <td>1</td>
            <td>
                <a href="http://localhost/buylink/view-site.php?pid=197" target="_blank"><?php echo $this->_tpl_vars['ids'][$this->_sections['i']['index']]['websitename']; ?>
n</a>
            </td>
            <td>0</td>
            <td>0</td>
            <td width="13%">44 years 4 months</td>
            <td>0</td>

        </tr>
    <?php endfor; endif; ?>


    </tbody>
</table>
</div>
</div>
</div>
</div>
</div>