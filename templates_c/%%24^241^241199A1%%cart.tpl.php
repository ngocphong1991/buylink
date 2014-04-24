<?php /* Smarty version 2.6.18, created on 2014-04-23 10:45:52
         compiled from cart.tpl */ ?>
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

                                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['allAdvertisersinfo']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                <?php $this->assign('onePublishersinfo', $this->_tpl_vars['cls_publishersinfo']->getOne($this->_tpl_vars['allAdvertisersinfo'][$this->_sections['i']['index']]['pid'])); ?>



                                <tr>
                                    <td>1</td>
                                    <td><?php echo $this->_tpl_vars['onePublishersinfo']['websitename']; ?>
</td>
                                    <td style="text-align: right"><?php echo $this->_tpl_vars['cls_publishersinfo']->getPrice($this->_tpl_vars['onePublishersinfo']['pid']); ?>
</td>
                                </tr>

                                <?php endfor; endif; ?>


                            </table>

                            <table style="border: 1px solid #CCCCCC;" class="table">
                                <tr class="top">
                                    <td><strong>Tổng số tiền:</strong></td>
                                    <td style="text-align: right"><?php echo $this->_tpl_vars['totalPrice']; ?>
</td>
                                </tr>
                                <tr class="tbcenter">
                                    <td><strong>Tổng số tiền bạn phải thanh toán:</strong></td>
                                    <td style="text-align: right"><?php echo $this->_tpl_vars['totalPrice']; ?>
</td>
                                </tr>
                                <tr class="bottom">
                                    <td>Số tiền đang có trong tài khoản</td>
                                    <td style="text-align: right" ><?php echo $this->_tpl_vars['yourMoney']; ?>
</td>
                                </tr>

                            </table>

                        </div>
                        <?php if ($this->_tpl_vars['totalPrice'] > $this->_tpl_vars['yourMoney']): ?>
                        <div class="reported">Không đủ tiền trong tài khoản, vui lòng nạp thêm tiền trước khi thanh toán!</div>


                        <div class="botton">
                            <button type="button" class="btn btn-primary" onClick="history.back()">Quay lại</button>
                            <button type="button" class="btn btn-primary">Nạp tiền</button>
                        </div>
                        <?php else: ?>
                            <div class="botton">
                                <button type="button" class="btn btn-primary">Thanh Toan</button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="row">

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>