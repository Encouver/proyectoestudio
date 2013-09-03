<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>

</head>

<body>


	<?php $this->widget('bootstrap.widgets.TbNavbar',array(
        'items'=>array(
            array(
                'class'=>'bootstrap.widgets.TbMenu',
                'items'=>array(
                    array('label'=>'Inicio', 'url'=>array('/site/index')),
                    array('label'=>'Cursos', 'url'=>array('')),
                    array('label'=>'Sobre UniveOnline', 'url'=>array('/site/page', 'view'=>'about')),
                    array('label'=>'Contacto', 'url'=>array('/site/contact')),
                    array('label'=>'Iniciar Sesión', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                    array('label'=>'Desconectarse ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                ),
            ),
        ),
		'type'=> 'inverse',

		'collapse' => 'true',
    )); ?>





<div class = 'container-content' id="container">
    <div id="content">
        <div class="container" id="page">
        
            <?php if(isset($this->breadcrumbs)):?>
                <?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                    'links'=>$this->breadcrumbs,
                )); 
                
                ?><!-- breadcrumbs -->

            <?php endif?>
        
            <?php echo $content; ?>
        
            <div class="clear"></div>
        
        
        
        </div><!-- page -->
    </div>
</div>

	<div id="footer" >
		Copyright &copy; <?php echo date('Y'); ?> by UniveOnline.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->
    
</body>
</html>
