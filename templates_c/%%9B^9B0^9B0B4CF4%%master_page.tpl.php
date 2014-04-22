<?php /* Smarty version 2.6.18, created on 2014-04-21 13:01:31
         compiled from master_page.tpl */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php if ($this->_tpl_vars['meta']['des'] != ''): ?><?php echo $this->_tpl_vars['meta']['des']; ?>
<?php else: ?>Textlink.vn mang đến cho các chủ website cơ hội phát triển và kiếm tiền bền vững cùng chúng tôi. Đến với Textlink, các bạn sẽ là những người mang đến sự đổi mới cho ngành Internet Marketing tại Việt Nam. Bạn còn chần chừ gì nữa ?<?php endif; ?>
Keywords: textlink, backlinks, seo, sem, internet marketing, online marketing, top 1 google, top 1 yahoo." />
    <meta name="keywords" content="Quảng cáo TextLink Text Link Search Engine Optimization" />
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <title><?php if ($this->_tpl_vars['meta']['title'] != ''): ?><?php echo $this->_tpl_vars['meta']['title']; ?>
<?php else: ?>Textlink.vn - Mạng quảng cáo textlink hàng đầu và duy nhất tại Việt Nam !<?php endif; ?></title>


    <!-- Bootstrap core CSS -->
    <link href="<?php echo $this->_tpl_vars['template_dir']; ?>
/css/bootstrap.css" rel="stylesheet">
    
    <!-- Thang update -->
    <link href="<?php echo $this->_tpl_vars['template_dir']; ?>
/css/publisher.css" rel="stylesheet">
    <script src="<?php echo $this->_tpl_vars['template_dir']; ?>
/ckeditor/ckeditor.js" language="javascript"></script>
    
    <!-- End Thang update -->

    <script src="<?php echo $this->_tpl_vars['template_dir']; ?>
/js/jquery.min.js"></script>
    <script type="text/javascript">
        jQuery.noConflict();
    </script>
    <script src="<?php echo $this->_tpl_vars['template_dir']; ?>
/js/jquery.validate.min.js"></script>
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="<?php echo $this->_tpl_vars['template_dir']; ?>
/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo $this->_tpl_vars['template_dir']; ?>
/js/html5shiv.js"></script>
    <script src="<?php echo $this->_tpl_vars['template_dir']; ?>
/js/respond.min.js"></script>
    <script src="<?php echo $this->_tpl_vars['template_dir']; ?>
/js/jquery.corner.js"></script>
    <script type="text/javascript">
        jQuery('a.more').corner();
    </script>
    <![endif]-->
    <script type="text/javascript">
        var base_url ="<?php echo $this->_tpl_vars['_config']['www']; ?>
";
    </script>
    <?php echo '
        <script>
            var loc = "\'"+this.location+"\'";
            loc = loc.substring(1, loc.lastIndexOf(\'/\')+1);
        </script>
    '; ?>

    <!-- Custom styles for this template -->
    <link href="<?php echo $this->_tpl_vars['template_dir']; ?>
/css/styles.css" rel="stylesheet">
</head>
<body>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php echo $this->_tpl_vars['content']; ?>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="<?php echo $this->_tpl_vars['template_dir']; ?>
/js/idangerous.swiper-2.1.min.js"></script>
    <?php echo '
        <script type="text/javascript">
            jQuery(window).load(function() {
                var swiper = new Swiper(\'.mainsw\', {
                    pagination : \'.pagination1\',
                    loop:true,
                    grabCursor: true,
                    paginationClickable: true
                });
                jQuery(\'#blog-tab a\').click(function (e) {
                    e.preventDefault();
                    jQuery(this).tab(\'show\')
                })

            });
        </script>
    '; ?>


    <script src="<?php echo $this->_tpl_vars['template_dir']; ?>
/js/bootstrap.js"></script>
    <script src="<?php echo $this->_tpl_vars['template_dir']; ?>
/js/docs.min.js"></script>
    <script src="<?php echo $this->_tpl_vars['template_dir']; ?>
/js/global.js"></script>
    <script src="<?php echo $this->_tpl_vars['template_dir']; ?>
/js/prototype.js"></script>
 
</body>
</html>