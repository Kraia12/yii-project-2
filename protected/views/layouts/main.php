<!DOCTYPE html>
<html lang="en">
<head>
<title>Home - Home Page | BizSolutions - Free Website Template from Templates.com</title>
<meta name="description" content="Place your description here">
<meta name="keywords" content="put, your, keyword, here">
<meta name="author" content="trabajorecepcionista.com - trabajos de recepcionista o secretaria">
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" type="text/css" media="all">
<!--[if lt IE 7]>
    <link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen">
    <script type="text/javascript" src="js/ie_png.js"></script>
    <script type="text/javascript">
        ie_png.fix('.png');
    </script>
<![endif]-->
<!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page1">
<div class="tail-bottom">
    <div id="main">
<!-- header -->
        <header>
            <div class="nav-box">
                <nav>
                    <ul class="fright">
                        <li><a href="index.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic-home-act.gif"></a></li>
                        <li><a href="contact-us.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic-mail.gif"></a></li>
                        <li><a href="sitemap.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic-sitemap.gif"></a></li>
                    </ul>
        <?php $this->widget('zii.widgets.CMenu',array(
            'items'=>array(
                array('label'=>'Inicio', 'url'=>array('/countries/index')),
                array('label'=>'Regiones', 'url'=>array('/countries/regions')),
                array('label'=>'Recursos', 'url'=>array('/site/page', 'view'=>'learning')),
                array('label'=>'Contacto', 'url'=>array('/site/contact')),
            ),
        )); ?>
                </nav>
            </div>
            <div id="banner-top">
                <img style="margin-top:20px;  " src="http://dummyimage.com/728x90/cbcbcb/fff" />
            </div>            
        </header>
        <div class="wrapper indent">
<!-- content -->
            <section id="content">
                
                <div class="inside">
                    <h2><span>Bienvenid@</span> a Trabajo de Recepcionista!</h2>
                    <p><b>BizSolutions</b> is a free web template created by TemplateMonster.com team. This website template is optimized for 1024X768 screen resolution and can be delivered in two packages - with PSD source files included and without them. It has several pages: <a href="index.html">Home</a>, <a href="about-us.html">About</a>, <a href="articles.html">Articles</a> (with Article page), <a href="contact-us.html">Contacts</a> (note that contact us form – doesn’t work), <a href="sitemap.html">Site Map.</a></p>
                </div>
                <div class="wrapper">
                    <?php echo $content ?>
                </div>
            </section>
<!-- aside -->
            <aside>
                <div class="inside">
                    <div id="banner-aside">
                        <img style="margin-left:20px;  " src="http://dummyimage.com/160x600/cbcbcb/fff" />
                    </div>
                    <div class="wrapper"><a href="#" class="link1"><span><span>More Services</span></span></a></div>
                </div>
            </aside>
        </div>
<!-- footer -->
        <footer>
            <div class="inside">
            </div>
        </footer>
    </div>
</div>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/maxheight.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/script.js"></script>
</body>
</html>