{if $smarty.session.uid ne ''}
<div id="content">
	  <h1>Websites</h1>
	  <div style="margin-left: 20px;" class="right website" id="form-280x400">
	    <div class="arrow-loop-right" id="arrow-website-form"></div>
	    <a href="{$_config.www}/files/publishers-guide.doc" target="_blank"><img height="63" alt="Publisher's Guide" widht="250" src="{$_config.www}/templates/{$_config.template}/images/publishers-guide.png"></a>
	    <div id="websiteErrors" class="formErrors"></div>
	    <h2>Submit a website</h2>
	    <form onsubmit="return false;" action="{$_config.www}/account/websites/" method="post" id="submitWebsiteForm">
	      <div id="submitWebsiteStep1">
		  <input type="hidden" name="update_pid" value="{$smarty.post.pid}" />
	        <label class="block">Your Website URL: *</label>
	        <input type="text" value="{$smarty.post.url}" name="url" id="websiteUrl" class="txt2">
	        <p style="margin: 0; padding: 0;" class="small grey">Please submit your homepage URL.</p>
	        <label class="block">Website Title: *</label>
	        <input type="text" value="{$smarty.post.wname}" name="wname" id="websiteTitle" class="txt2">
	        <label class="block">Describe your website: *</label>
	        <textarea rows="4" class="txt2" cols="30" name="wdes" onkeydown="updateWebsiteDescriptionLength(this);" onkeyup="updateWebsiteDescriptionLength(this);" id="websiteDescription">{$smarty.post.wdes}</textarea>
	        <p style="margin: 0; padding: 0;" class="small grey"> Minimum of 150 characters.
	          Current: <span id="websiteDescriptionLength">0</span> </p>
	        <p style="font-weight: bold; margin: 5px 0 0 0; padding: 0;">
	          <input type="checkbox" value="1" name="guide" id="publisherGuide">
	          <label for="publisherGuide"> I've read the <a href="{$_config.www}/files/publishers-guide.doc" target="_blank">Publisher's Guide</a></label>
	        </p>
	        <a onclick="submitWebsiteStep1(); return false;" href="#" style="margin-top: 12px;" class="btn-green-240" id="btnSubmitWebsite1">Submit website</a> </div>
		  <input type="hidden" class="txt2" name="edit_site" value="1" />
	      <div class="hidden" id="submitWebsiteStep2">
	        <label class="block">Chuyên mục *</label>
			
	        <select size="1" class="txt2" name="cats1" onChange="javascript: sendReqPost(loc+'js/get_scats.php?cid='+this.value,'sc');" style="width: 200px">
					{html_options values=$cat_ids output=$cats selected=$smarty.post.cats1}
              </select>		
			<label class="block">Ngôn ngữ: </label>			
			 <select onchange="" class="txt2" style="width:200px" name="langid" id="filterLanguage">
		            <option selected="selected" value="">-- All Languages --</option>
					{section name=num loop=$langs}
		            <option value="{$lang_ids[num]}">{$langs[num]}</option>
					{/section}	            
		     </select>			
			<label class="block">Vị trí quảng cáo: </label>		
			
			<select class="txt2" style="width:200px" name="adposition" size="1">
				<option value=""></option>
				<option selected="selected" value="header" label="Header">Header</option>
				<option value="footer" label="Footer">Footer</option>
				<option value="left" label="Left">Left</option>
				<option value="right" label="Right">Right</option>
				<option value="in_content" label="In Contents">In Contents</option>
			  </select>		
	       
	        <label class="block">URL is the homepage of your website?</label>
	        <div>
	          <input type="radio" checked="checked" value="Y" name="is_homepage" id="isHomepageY">
	          <label for="isHomepageY"> Yes</label>
	          &nbsp; &nbsp;
	          <input type="radio" value="N" name="is_homepage" id="isHomepageN">
	          <label for="isHomepageN"> No</label>
	        </div>
	        <a onclick="submitWebsiteStep2(); return false;" href="#" class="btn-green-240" id="btnSubmitWebsite2">Submit website</a> <a onclick="cancelWebsiteStep2(); return false;" href="#" style="margin-top: 10px" class="btn-tan-80" id="btnWebsiteGoBack">Go back</a> </div>
	      <div class="hidden" id="submitWebsiteStep3">
	        <p> <strong>Your website is currently being processed.</strong> We will contact you shortly regarding the status of your website. <br>
	          <br>
	        </p>
	        <div class="clear"> <a onclick="submitWebsiteNew(); return false;" href="#" class="btn-green-240">Submit another</a> </div>
	      </div>
	      <img alt="" src="{$template_dir}/images/loader-lrg.gif" style="margin-top: 10px;" class="hidden" id="websiteFormLoading">
	    </form>
	  </div>
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