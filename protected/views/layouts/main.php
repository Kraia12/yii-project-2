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
                        <li><a href="/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic-home-act.gif"></a></li>
                        <li><a href="contacto"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic-mail.gif"></a></li>
                        <li><a href="sitemap.xml"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pic-sitemap.gif"></a></li>
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
                <?php if(isset($this->breadcrumbs)):?>
<?php $this->widget('zii.widgets.CBreadcrumbs', array(
    'homeLink' => CHtml::link('Inicio', Yii::app()->homeUrl),
'links'=>$this->breadcrumbs,
)); ?><!-- breadcrumbs -->
<?php endif?>

        </header>
        <div class="wrapper indent">
<!-- content -->

            <section id="content">
                            <div id="banner-top">
                <img src="http://dummyimage.com/728x90/cbcbcb/fff" />
            </div>
                <div class="wrapper">
                    <?php echo $content ?>
                </div>
            </section>
<!-- aside -->
            <aside>
                <div class="inside">
                    <div id="banner-aside">
                        <img src="http://dummyimage.com/160x600/cbcbcb/fff" />
                    </div>
                </div>
            </aside>
                    <div id="banner-bot">
            <img src="http://dummyimage.com/728x90/cbcbcb/fff" />
        </div>
        </div>
<!-- footer -->
        <footer>
            <div class="inside">
            </div>
        </footer>
    </div>
</div>
</body>
</html>