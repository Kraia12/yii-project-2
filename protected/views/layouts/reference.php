<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <!--[if (lt IE 9) & (!IEMobile)]>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>js/libs/selectivizr-min.js"></script>
    <![endif]-->
    <!-- JavaScript -->
    <script src="/js/libs/modernizr-2.0.6.min.js"></script>
    <!--Microsoft. Delete if not required -->
    <meta http-equiv="cleartype" content="on">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <script type="text/javascript" src="http://gdc.indeed.com/ads/apiresults.js"></script>
    <!-- Load CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/typography.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
</head>

<body class="clearfix">

    <header role="banner" id="header"><!-- #header start -->
        <div id="inner-header" class="clearfix"><!-- #inner-header start -->
            <!-- Site title -->
            <h2 id="site-title">
            <a href="/" title="Trabajo De Recepcionista">Trabajo de Recepcionista</a>
            </h2>
            <!-- Site tagline -->
            <p>El mejor lugar para encontrar trabajo</p>
        </div><!-- #inner-header end -->
        <!-- navigation -->
        <nav role="navigation" id="navigation" class="clearfix"><!-- #navigation start -->
        <?php $this->widget('zii.widgets.CMenu',array(
            'items'=>array(
                array('label'=>'Inicio', 'url'=>array('/site/index')),
                array('label'=>'Estados', 'url'=>array('/mexStates/index')),
                array('label'=>'Recursos', 'url'=>array('/site/page', 'view'=>'learning')),
                array('label'=>'Contacto', 'url'=>array('/site/contact')),
            ),
        )); ?>
        </nav><!-- #navigation end -->
    </header><!-- #header end -->
    <?php if(isset($this->breadcrumbs)):?>
<?php $this->widget('zii.widgets.CBreadcrumbs', array(
    'homeLink' => CHtml::link('Inicio', Yii::app()->homeUrl),
'links'=>$this->breadcrumbs,
)); ?><!-- breadcrumbs -->
<?php endif?>
    <div id="content" class="clearfix">
        <div id="main" role="main" class="clearfix"><!-- #main start -->
            <div id="banner-top">
            	<img style="margin-left:20px;  " src="http://dummyimage.com/728x90/cbcbcb/fff" />
            </div>
                <?php echo $content; ?>
        </div><!-- #main end -->
        <aside class="sidebar">
            <div id="banner-aside">
            	<img style="margin-left:20px;  " src="http://dummyimage.com/160x600/cbcbcb/fff" />
        	</div>
        </aside>
        <div id="banner-bot">
			<img style="margin-left:20px;  " src="http://dummyimage.com/728x90/cbcbcb/fff" />
        </div>
    </div>

    <footer role="contentinfo" class="clearfix" id="footer"><!-- #footer start -->

        <div id="inner-footer" class="clearfix"><!-- #inner-footer start -->
            Copyright &copy; <?php echo date('Y'); ?> por <a href="/">trabajoecepcionista.com</a><br/>
        Todos los derechos reservados.<br/>
        </div><!-- #inner-footer end -->

    </footer><!-- #footer end -->
    <!-- Google analytics -->
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-36404317-1']);
	  _gaq.push(['_trackPageview']);
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>

</body>
</html>