<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>

    <?php  
	  $baseUrl = Yii::app()->baseUrl; 
	  $cs = Yii::app()->getClientScript();
	  //$cs->registerCssFile($baseUrl.'/css/reset_html5.css');
	  $cs->registerCssFile($baseUrl.'/css/flip_099.css');
	  $cs->registerScriptFile($baseUrl.'/assets/4e432cba/jquery.min.js');
	  $cs->registerScriptFile($baseUrl.'/js/jquery-ui-1.10.3.custom.min.js');
	  $cs->registerScriptFile($baseUrl.'/js/jquery.flip.min.js');
	  //$cs->registerScriptFile($baseUrl.'/js/yourscript.js');
	  //$cs->registerCssFile($baseUrl.'/css/yourcss.css');
	?>    
    		<script type="text/javascript">
			$(function(){
				
				$("#flipPad a:not(.revert)").bind("click",function(){
					var $this = $(this);
					$("#flipbox").flip({
						direction: $this.attr("rel"),
						color: $this.attr("rev"),
						content: $this.attr("title"),//(new Date()).getTime(),
						onBefore: function(){$(".revert").show()}
					})
					return false;
				});
				
				$(".revert").bind("click",function(){
					$("#flipbox").revertFlip();
					return false;
				});
				
				
			});
		</script>
</head>

<body>

<div class = "navbar-fixed-top">
	<?php $this->widget('bootstrap.widgets.TbNavbar',array(
        'items'=>array(
            array(
                'class'=>'bootstrap.widgets.TbMenu',
                'items'=>array(
                    array('label'=>'Inicio', 'url'=>array('/site/index')),
                    array('label'=>'Cursos', 'url'=>array('')),
                    array('label'=>'Sobre UniveOnline', 'url'=>array('/site/page', 'view'=>'about')),
                    array('label'=>'Contacto', 'url'=>array('/site/contact')),
                    array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                    array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                ),
            ),
        ),
    )); ?>
</div>





<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>



</div><!-- page -->
<div class="container" id="banner">

    <div id="flipbox">Hello! I'm a flip-box! :)</div>
    <div id="flipPad">
        <a href="#" class="left" rel="rl" rev="#39AB3E" title="Change content as <em>you</em> like!">left</a>
        <a href="#" class="top" rel="bt" rev="#B0EB17" title="Ohhh yeah!">top</a>
        <a href="#" class="bottom" rel="tb" rev="#82BD2E" title="Hey oh let's go!">bottom</a>
        <a href="#" class="right" rel="lr" rev="#C8D97E" title="Waiting for css3...">right</a>
        <a href="#" class="revert">revert!</a>
    </div>

</div>
	<div id="footer" >
		Copyright &copy; <?php echo date('Y'); ?> by UniveOnline.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->
    
</body>
</html>
