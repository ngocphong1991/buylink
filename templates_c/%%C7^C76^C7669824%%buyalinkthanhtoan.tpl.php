<?php /* Smarty version 2.6.18, created on 2014-04-23 03:15:14
         compiled from buyalinkthanhtoan.tpl */ ?>
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
                    
                    <h4 class="border-bold super-bold">Thanh toán article Buylink</h4>
                    
                    <div class="thanhtoan">
                        <div class="thanhtoantitle">                        
                            <p><strong>Bài viết</strong> <img src="<?php echo $this->_tpl_vars['template_dir']; ?>
/images/pencel.png"> <span>Của bạn sẽ được đặt trên các site</span> </p>
                        </div>
                        <div class="details">
                            <table class="table">
                                <tr class="top">
                                    <td>STT</td>
                                    <td>Site</td>
                                    <td style="text-align: right">Giá</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Thông tin công nghệ phần mềm lansof</td>
                                    <td style="text-align: right">1$</td>
                                </tr>
                                <tr class="bottom">
                                    <td>2</td>
                                    <td>Thông tin công nghệ phần mềm lansof</td>
                                    <td style="text-align: right" >100$</td>
                                </tr>

                            </table>
                            
                            <table style="border: 1px solid #CCCCCC;" class="table">
                                <tr class="top">
                                    <td><strong>Tổng số tiền:</strong></td>                                    
                                    <td style="text-align: right">20$</td>
                                </tr>
                                <tr class="tbcenter">
                                    <td><strong>Tổng số tiền bạn phải thanh toán:</strong></td>                                   
                                    <td style="text-align: right">1$</td>
                                </tr>
                                <tr class="bottom">
                                    <td>Số tiền đang có trong tài khoản</td>                                  
                                    <td style="text-align: right" >100$</td>
                                </tr>

                            </table>
                            
                        </div>
                        <div class="reported">Không đủ tiền trong tài khoản, vui lòng nạp thêm tiền trước khi thanh toán!</div>
                    
                        
                        <div class="botton">
                            <button type="button" class="btn btn-primary" onClick="history.back()">Quya lại</button>
                            <button type="button" class="btn btn-primary">Nạp tiền</button>                        
                        </div>
                    </div>
                    <div class="row">
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>