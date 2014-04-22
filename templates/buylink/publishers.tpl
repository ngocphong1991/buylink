{if $smarty.session.uid ne ''}
<div class="wrapper paper">
    <div class="container">
        <div class="row">
            {include file='left-menu.tpl'}
            <div class="col-md-9 right-content-paper plus">
                <div class="banner">
                    <img src="{$template_dir}/images/ad.png">
                </div>
                <div class="right-inner">
                    <h4 class="border-bold">WEBSITE</h4>
                    <div class="right website">
                        <div class="arrow-loop-right" id="arrow-website-form"></div>
                        <div id="websiteErrors" class="formErrors"></div>
                        <form onsubmit="return false;" action="{$_config.www}/account/websites/" method="post" id="submitWebsiteForm" class="form-horizontal" name="submitWebsiteForm">
                            <!--Start The Step 1-->
                            <div id="submitWebsiteStep1" class="control-group">
                                <input type="hidden" name="update_pid" value="{$smarty.post.pid}" />
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="websiteUrl">Your Website URL: *</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="col-sm-8" value="{$smarty.post.url}" name="url" id="websiteUrl" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="websiteTitle">Website Title: *</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="col-sm-8" value="{$smarty.post.wname}" name="wname" id="websiteTitle" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="websiteDescription">Describe your website: *</label>
                                    <div class="col-sm-9">
                                        <textarea rows="4" class="txt2" cols="30" name="wdes" onkeydown="updateWebsiteDescriptionLength(this);" onkeyup="updateWebsiteDescriptionLength(this);" id="websiteDescription">{$smarty.post.wdes}</textarea>
                                        <p class="small grey"> Minimum of 150 characters. Current: <span id="websiteDescriptionLength">0</span> </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="1" name="guide" id="publisherGuide">
                                                I've read the <a href="{$_config.www}/files/publishers-guide.doc" target="_blank">Publisher's Guide</a>
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
                                            {html_options values=$cat_ids output=$cats selected=$smarty.post.cats1}
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="langid">Ngôn ngữ:</label>
                                    <div class="col-sm-9">
                                        <select class="col-sm-6" xml:id="langid" name="langid" id="filterLanguage">
                                            <option selected="selected" value="">-- All Languages --</option>
                                            {section name=num loop=$langs}
                                                <option value="{$lang_ids[num]}">{$langs[num]}</option>
                                            {/section}
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
                    <p class="large"> Tổng Thu Nhập <span class="bold green">{$total_earnings}</span>.<br>
                    <em class="small">(Lưu ý rằng thu nhập có thể bị thay đổi nếu link quảng cáo bị hủy hay là không hiển thị.)</em> </p>
                    <table class="data large width-600" id="website-table">
                    <thead>
                    <tr>
                    <th><a href="#">Website Details</a> <img src="{$template_dir}/images/sorted-asc.gif"></th>
                    <th style="width: 60px;"><a href="#">Added</a></th>
                    <th style="width: 60px;">Price/month</th>
                    <th style="width: 80px;" class="last">Manage</th>
                    </tr>
                    </thead>
                    <tbody>
                    {section name=num loop=$www}
                    <tr class="row1">
                    {if $www[num].pid != $smarty.get.pid}
                    <a href="seller_mywebsites.php?pid={$www[num].pid}" class="style37">{/if}
                    {if $www[num].pid != $smarty.get.pid}</a>
                    <td class="alignleft"><strong>
                    {$www[num].title}
                    </strong>{if $www[num].status  == 2}
                    <span class="lbl lbl-active">Active</span>
                    {else}
                    <span class="lbl lbl-pending">Pending</span>
                    {/if}
                    <br>
                    <span class="grey">(<a href="{$www[num].url}" target="_blank">{$www[num].url}</a>)</span><br>
                    {$www[num].description}
                    <br />
                    <span class="grey">
                    Alexa: {$www[num].alexa_rank} &nbsp;  Pagerank: {$www[num].google_page_rank} &nbsp;  Domain age: {$www[num].domain_age}
                    </span>
                    </td>
                    <td class="alignleft">{$www[num].date}</td>
                    <td class="alignright large bold green">{$www[num].set_price}</td>
                    <td class="centered last"><a href="publishers.php?pid={$www[num].pid}&do=edit" class="btn-tan-80">Edit</a>
                    <a href="earnings.php?pid={$www[num].pid}" style="margin-top: 5px;" class="btn-tan-80">Earnings</a></td>
                    </tr>
                    {/if}
                    {/section}
                    </tbody>
                    </table>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>
{else}
<div class="wrapper">
    <div class="container">
    <div class="row">
    {include file='left-menu-user.tpl'}
    <div class="col-md-9 right-content">
        <img src="{$template_dir}/images/cms.png">
    </div>
    </div>
    </div>
</div>
{/if}