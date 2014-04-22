<div id="body">
      <div id="content">
        <h1></h1>
        <h2 style="padding-bottom: 0;" class="green">Chúc Mừng, Site của bạn đã được chấp nhận!</h2>
        <p class="large"> Bạn hãy tải đoạn mã quảng cáo đúng với định dạng, cài đặt nó trên website của bạn và Hệ thống của chúng tôi giúp bạn kiếm tiền ngay khi đang ngủ! </p>
        
        <div class="pkg">
          <h1>Chỉnh sửa thông tin Website</h1>
           <form method="post" onsubmit="updateWebsite(); return false;" id="updateWebsiteForm">
            <fieldset>
              <input type="hidden" value="{$smarty.post.pid}" name="pid">
              <div class="ws-info pkg">
              	<div class="left half-box">
                <div id="updateWebsiteErrors" class="formErrors"></div>
                <label class="field bold" for="">Tiêu Đề Website :</label>
                <div style="padding: 2px 0 6px 0">
                  <input maxlength="255" size="30" value="{$smarty.post.wname}" name="wname" id="websiteTitle" class="txt2" type="text">
                  *</div>
                <label class="field bold" for="">Miêu tả Website:</label>
                <div style="padding: 2px 0 6px 0">
                  <textarea cols="45" rows="3" name="wdes" id="websiteDescription" class="txt2">{$smarty.post.wdes}</textarea>
                  *</div>
                <label class="field bold" for="">Từ khóa: (Rất quan trọng) * </label>
                <div style="padding: 2px 0 6px 0">
                  <textarea cols="45" rows="2" name="keywords" id="websiteKeywords" class="txt2">{$smarty.post.keywords}</textarea>
                  *</div>
                <p style="color:#666;">Từ Khóa là thứ miêu tả tốt nhất về Website của bạn. Nó sẽ giúp người dùng dễ dàng tìm thấy website của bạn trong khi tìm kiếm các site cho quảng cáo Text Link. Mỗi từ khóa phải được phân cách bằng một dấu phẩy.</p>
                </div><!--left half box-->
                <div class="right half-box">
                	<label class="field bold" for="">Ngôn Ngữ:</label>
              <div style="padding: 2px 0 6px 0">
                <select style="width: 200px" name="langid" size="1" class="txt2">
                  {html_options values=$lang_ids output=$langs selected=$smarty.post.langid}
                </select>
                *</div>
              <label class="field bold" for="">Chuyên mục (1):</label>
              <div style="padding: 2px 0 6px 0">
                <select size="1" name="cats1" onchange="javascript: sendReqPost(loc+'js/get_scats.php?cid='+this.value,'sc');" style="width: 200px" class="txt2">
                {html_options values=$cat_ids output=$cats selected=$smarty.post.catIds[1]}
                </select>
                *</div>
              <label class="field bold" for="">Chuyên mục (2):</label>
              <div style="padding: 2px 0 6px 0">
                <select size="1" name="cats2" onchange="javascript: sendReqPost(loc+'js/get_scats.php?cid='+this.value,'sc');" style="width: 200px" class="txt2">
                  <option value=""></option>
                 {html_options values=$cat_ids output=$cats selected=$smarty.post.catIds[2]}
                </select>
              </div>
              
              <label class="field bold" for="">Vị trí bạn muốn đặt quảng cáo trên website ?</label>
              <div style="padding: 2px 0 6px 0" class="pkg">
              <select style="width: 200px" name="adposition" size="1">
				<option value=""></option>
				<option selected="selected" value="header" label="Header">Đầu trang</option>
				<option value="footer" label="Footer">Chân trang</option>
				<option value="left" label="Left">Sidebar bên trái</option>
				<option value="right" label="Right">Sidebar bên phải</option>
				<option value="in_content" label="In Contents">Trong bài viết</option>
			  </select>	
              </div>
                </div><!--right box-->
                <div class="clear" style="border-top:1px solid #ddd; padding-top:20px;"></div>
                <div class="pkg">
                
              <div class="half-box left">  
              <label class="field bold" for="">Đây có phải là đường dẫn tới trang chủ Website không?</label>
              <div style="padding: 2px 0 6px 0" class="pkg">
                <input checked="checked" value="Y" name="is_homepage" id="isHomepageY" type="radio" style="float:left; margin-top:3px; margin-right:5px;">
                <label for="isHomepageY"  style="float:left;line-height:20px;margin-right:10px;"> Có </label>               
                <input value="N" name="is_homepage" id="isHomepageN" type="radio"  style="float:left;margin-top:3px;margin-right:5px;">
                <label for="isHomepageN"  style="float:left;line-height:20px;"> Không</label>
              </div>
              <label class="field bold" for="">Website của bạn có bị chặn không?</label>
              <div style="padding: 2px 0 6px 0" class="pkg">
                <input checked="checked" value="N" name="restriction" id="is_restrictionN" type="radio" style="float:left; margin-top:3px; margin-right:5px;">
                <label for="is_restrictionN" style="float:left;line-height:20px;margin-right:10px;"> Không</label>                
                <input value="Y" name="restriction" id="restriction" type="radio" style="float:left;margin-top:3px;margin-right:5px;">
                <label for="is_restrictionY" style="float:left;line-height:20px;"> Có </label>
              </div>
              </div><!--third box-->
              
              <div class="half-box right">
              <label for="" class="field bold">Phương Thức Kiểm Duyệt:</label>
              <div style="padding: 2px 0 6px 0">
                <input id="ApprovalA" name="approval_method" value="A" checked="checked" type="radio"  style="float:left; margin-top:3px; margin-right:5px;">
                <label for="ApprovalA"  style="line-height:20px;margin-right:10px;"> TextLink tự động xem xét và duyệt quảng quảng cáo</label>             
                <input id="ApprovalB" name="approval_method" value="B" type="radio"  style="float:left;margin-top:3px;margin-right:5px;">
                <label for="ApprovalB"  style="float:left;line-height:20px;"> Tôi muốn tự mình kiểm duyệt các link quảng cáo</label>               
              </div>
              </div><!--third box-->            
              <div class="clear">
                <div class="formResults green bold right" id="updateWebsiteResults"></div>
                <a onclick="updateWebsite(); return false;" href="#" class="btn-green-180 right">Cập Nhật Thông Tin</a> </div>
                </div>
              </div><!--ws-info-->
              
            </fieldset>
          </form>
        </div>
        <h1>Lưu ý: Cài đặt code/plugin trên website của bạn</h1>
        <div class="pkg">          
          <div class="ws-info pkg" style="margin-top:10px;"> 
          <div class="half-box left">         
          <div class="pkg" style="margin-bottom:10px;">
          	<h3 style="margin-bottom:5px;">Bạn muốn đặt link trên site của bạn như thế nào?</h3>
            <input { if $smarty.post.is_manual=='Y'}checked="checked" {/if} onclick="websitePlacementOption({$smarty.post.pid}, 'Y');" value="Y" name="is_manual" id="isManualY" type="radio" style="float:left; margin-top:3px; margin-right:5px;">
            <label for="isManualY"  style="line-height:20px;margin-right:10px;"> Tôi sẽ đặt link bằng tay.</label>
            
            <input {if $smarty.post.is_manual=='N'}checked="checked"{/if} onclick="websitePlacementOption({$smarty.post.pid}, 'N');" value="N" name="is_manual" id="isManualN" type="radio"  style="float:left;margin-top:3px;margin-right:5px;">
            <label for="isManualN"  style="float:left;line-height:20px;"> Tôi muốn đặt mã code của Textlink.</label>
            
          </div>
          <div class="hidden" id="scriptPanel" style="display: block;">
            <h3 style="margin-bottom:15px;">Tải mã code của chúng tôi</h3>
            <form action="" method="post" id="pluginForm">
	        <fieldset>
			<input type="hidden" name="script" value="{$smarty.post.script}" />
			<input type="hidden" name="do" value="edit" />
			<input type="hidden" value="{$smarty.post.url}" name="url" />
	          <input type="hidden" value="{$smarty.post.script}" name="download_script">
	          <label class="field bold" for="">Mã nguồn bạn đang sử dụng:</label>
	          <div style="padding: 2px 0 6px 0">
	            <select onchange="pluginInstructions();" name="script_type" class="txt2" id="pluginDropdown">
	              <option  value="php">PHP</option>
				  <option  value="vbulletin3.0.x">Vbulletin3.0.x</option>
	              <option selected="selected" value="wordpress">Wordpress</option>
	            </select>
	          </div>
	          <a onclick="$('pluginForm').submit(); return false;" href="#" class="btn-green-180">Tải Về</a>
	        </fieldset>
	      </form>
            <p> XML KEY: {$smarty.post.script} </p>
            </div>
           
            <!--
		  <div>
		    <h3>Active your site</h3> 
		   <form action="" style="width:180px; float:left; margin-right:10px" method="post" id="activeWebsiteForm">
		   	<input type="hidden" name="pid" value="198" />
		   	<input type="hidden" value="http://test-1.vn" name="url" />
			<input type="hidden" name="script" value="148CE622E038AFE3DA3A" />
		      <a onclick="activeWebsite(); return false;" href="#" class="btn-tan-180">Active your site</a>
			</form><span id="activeWebsiteErrors" style="line-height:25px; color:red"></span> <span style="line-height:25px; color:green" id="activeWebsiteResults"></span>
		  </div>
		  --> 
          </div>
          <div class="half-box right">
            <h3>Hướng Dẫn Cài Đặt</h3>
            <div class="instructions hidden" id="instructions-wordpress" style="display: block;">
              <ol>
                <li>Bước 1: Đầu tiên bạn hãy tải Plugin WordPress ở trên về.</li>
                <li>Bước 2: Upload Plugin đó sử dụng công cụ Wordpress backend. Hoặc, bạn có thể upload trực tiếp file zip chứa plugin lên website của bạn, thường thì ở trong mục "wp-content/plugins".</li>
                <li>Bước 3: Đăng nhập vào Wordpress backend và di chuyển tới thanh "Plugins". Sau đó kích hoạt "Textlink.vn Advertiser Plugin".</li>
                <li>Bước 4: Nếu bạn đặt regular link vào trong giao diện trang website của bạn, Hãy kích hoạt Textlink Widget (Nó sẽ hiển thị như là 1 widget theo đường dẫn được đặt tên sau tên miền). Hoặc, nếu bạn không muốn sử dụng widget, hãy chèn đoạn mã sau vào trong giao diện website của bạn:<br>
                  &lt;?php if(function_exists('outputHtmlAds')) outputHtmlAds(); ?&gt;</li>
                <li>Cài đặt thành công! Bạn sẽ nhận được email thông báo khi quảng cáo trên site của bạn được bán.</li>
              </ol>
            </div>
            <div class="instructions hidden" id="instructions-php" style="display: none;">
              <ol>
                <li>Bước 1: Tải đoạn mã PHP ở trên về.</li>
                <li>Bước 2: Tạo một file trống đặt tên "148CE622E038AFE3DA3A.xml" ở cùng đường dẫn nơi mà bạn dự định chạy nội dung quảng cáo của chúng tôi. Chmod 
                  "148CE622E038AFE3DA3A.xml" thành 666 để mà Web server có thể viết đè lên nó.</li>
                <li>Bước 3: Sao chép và dán chính xác đoạn code vào Website của bạn nơi mà quảng cáo sẽ suất hiện. <em>Hoặc</em> upload file PHP và đưa nó vào chính xác nơi mà bạn muốn hiện quảng cáo, Sử dụng câu lệnh <em>include()</em>.</li>
                <li>Bước 4: Upload những thay đổi cho Website của bạn.</li>
                <li>Cài đặt thành công! Bạn sẽ nhận được email thông báo khi quảng cáo trên site của bạn được bán.</li>
              </ol>
            </div>
            <div class="instructions hidden" id="instructions-vbulletin3.0.x" style="display: none;">
              <ol>
                <li>Nếu bạn đang cài đặt phiên bản VBulletin 3.5 trở lên, thì hãy xem kỹ phần hướng dẫn cài đặt cho Vbullentin 3.5.+</li>
                <li> Sao chép đoạn code dưới đây sau đó truy cập vào trang quản trị vBulletin trên site của bạn và dán nó vào phần giao diện forum hiện tại "phpinclude_start".</li>
              </ol>
            </div>
            </div><!--right half box-->
         <script type="text/javascript">	
            {if $smarty.post.domain_age<=0}	
		     setTimeout ( "updateDomainAge('{$smarty.post.url}',{$smarty.post.pid})", 1 );
		    {/if}
		 	//setTimeout("updateDomainAge('dantri.com.vn');",100);
			//pluginInstructions();
			//scriptPanel();
		</script>
        </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>