<?php /* Smarty version 2.6.18, created on 2014-04-22 15:20:13
         compiled from buylinkmanage.tpl */ ?>
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
                                    <li class="active"><a href="#blmtab1" data-toggle="tab">Textlink chưa thanh toán</a></li>
                                    <li class=""><a href="#blmtab2" data-toggle="tab">Textlink đang chạy</a></li>
                                    <li class=""><a href="#blmtab3" data-toggle="tab">Textlink hết hạn</a></li>
                                    <li class=""><a href="#blmtab4" data-toggle="tab">Textlink đã hủy</a></li>
                                    <li class=""><a href="#blmtab5" data-toggle="tab">Textlink đã dừng lại</a></li>
                                    <li class=""><a href="#blmtab6" data-toggle="tab">Textlink bị từ chối</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane fade active in" id="blmtab1">
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
                                    <div class="tab-pane fade" id="blmtab2">
                                        
                                        <ul>
                                            <li><h5><i class="icon-blog"></i>Buy Text Link</h5></li>
                                            <li><p>Xây dựng hệ thống liên kết sạch và tự nhiên với hệ thống các website</p></li>
                                        </ul>
                                        <ul>
                                            <li><h5><i class="icon-blog"></i>Buy Text Link</h5></li>
                                            <li><p>Xây dựng hệ thống liên kết sạch và tự nhiên với hệ thống các website</p></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="blmtab3">
                                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                                    </div>
                                </div>
                            </div>
                        </div>                         
                    </div>           
                    
                </div>
            </div>
        </div>
        
      
        
        
        
    </div>
</div>