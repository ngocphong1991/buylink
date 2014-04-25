<div class="col-md-3 left-slider">
    <div class="register-block">
        <h6>SIGN UP IN UNDER 1 MINUTE</h6>
        <form id="quickRegister" name="quickRegister" action="register.php" method="post">
            {if isset($msg_quick)}<div class="alert alert-danger">{$msg_quick}</div>{/if}
            <ul>
                <input type="hidden" value="1" name="quick-register">
                <li><label for="username">Your username*</label></li>
                <li><input type="text" class="required" value="{$smarty.post.username}" id="username" name="username"/></li>
                <li><label for="password">Your password*</label></li>
                <li><input type="password" class="required" id="password" name="password"></li>
                <li><label for="email">Your email address*</label></li>
                <li><input type="text" class="required email" value="{$smarty.post.email}" id="email" name="email"></li>
                <li><button>Complete registration</button></li>
            </ul>
        </form>
    </div>
    <div class="ad-block">
        <h4>Become an affiliate</h4>
        <p>Earn additional money by placing an affiliate link to MediaWhiz SEO on your website. Set-up only takes 2 minutes!</p>
        <p><a href="#" title="Join Now">Join Now!</a>
    </div>
</div>
{literal}
    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery.validator.messages.required = "";
            jQuery("#quickRegister").validate();
        })
    </script>
{/literal}