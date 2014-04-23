<div class="wrapper paper">
    <div class="container">
        <div class="row">
            {include file='left-menu.tpl'}
            <div class="col-md-9 right-content-paper plus">
                <div class="banner">
                    <img src="{$template_dir}/images/ad.png">
                </div>
                <div class="right-inner">

                    <h4 class="border-bold super-bold">Thanh toán article Buylink</h4>

                    <div class="thanhtoan">
                        {if $act=='paysuccess'}
                            <table style="border: 1px solid #CCCCCC;" class="table">
                                <tr class="top">
                                    <td>Tổng tài khoản hiện tại</td>
                                    <td style="text-align: right" >{$yourMoney}</td>
                                </tr>
                                <tr class="tbcenter">
                                    <td><strong>Số tiền vừa thanh toán:</strong></td>
                                    <td style="text-align: right">{$smarty.get.price}USD</td>
                                </tr>


                            </table>
                            <div class="botton">
                                <a href="{$_config.www}/marketplace" title="Thanh Toan">
                                    <button  id="checkoutBtn" class="btn btn-primary">Hoàn thành</button>
                                </a>
                            </div>
                        {else}
                            <div class="thanhtoantitle">
                                <p><strong>Bài viết</strong> <img src="{$template_dir}/images/pencel.png"> <span>Của bạn sẽ được đặt trên các site</span> </p>
                            </div>
                            <div class="details">
                                <table class="table">
                                    <tr class="top">
                                        <td>STT</td>
                                        <td>Site</td>
                                        <td style="text-align: right">Giá</td>
                                    </tr>

                                    {section name=i loop=$allAdvertisersinfo}
                                    {assign var=onePublishersinfo value=$cls_publishersinfo->getOne($allAdvertisersinfo[i].pid)}



                                    <tr>
                                        <td>1</td>
                                        <td>{$onePublishersinfo.websitename}</td>
                                        <td style="text-align: right">{$cls_publishersinfo->getPrice($onePublishersinfo.pid)}</td>
                                    </tr>

                                    {/section}


                                </table>

                                <table style="border: 1px solid #CCCCCC;" class="table">
                                    <tr class="top">
                                        <td><strong>Tổng số tiền:</strong></td>
                                        <td style="text-align: right">{$totalPrice}</td>
                                    </tr>
                                    <tr class="tbcenter">
                                        <td><strong>Tổng số tiền bạn phải thanh toán:</strong></td>
                                        <td style="text-align: right">{$totalPrice}</td>
                                    </tr>
                                    <tr class="bottom">
                                        <td>Số tiền đang có trong tài khoản</td>
                                        <td style="text-align: right" >{$yourMoney}</td>
                                    </tr>

                                </table>

                            </div>
                            {if $totalPriceNums > $yourMoneyNum}
                            <div class="reported">Không đủ tiền trong tài khoản, vui lòng nạp thêm tiền trước khi thanh toán!</div>


                            <div class="botton">
                                <button type="button" class="btn btn-primary" onClick="history.back()">Quay lại</button>
                                <button type="button" class="btn btn-primary">Nạp tiền</button>
                            </div>
                            {else}
                                <div class="botton">
                                   <a href="{$_config.www}/cart/?act=pay" title="Thanh Toan">
                                    <button  id="checkoutBtn" class="btn btn-primary">thanh toán</button>
                                   </a>
                                </div>
                            {/if}

                        {/if}
                    </div>
                    <div class="row">

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>