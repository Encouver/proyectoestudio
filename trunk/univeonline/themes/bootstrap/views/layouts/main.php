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
                'htmlOptions'=>array('class'=>'pull-right'),
                
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
        'brand'=>"<img src='images/logoslogan.png' width='310px'>",
        'brandUrl'=>array('/site/index'),
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
    <div >
	<div class = 'container-content' id="footer" >
        <div class="pagination-centered">
            <div class = "span4"
                <?php 
            		$this->widget('bootstrap.widgets.TbMenu',array(
                            'items'=>array(
                                array('label'=>'Inicio', 'url'=>array('/site/index')),
                                
                            ),
            				'stacked' => 'true',
            				'type' => 'pills'
            		));
            	?>
            </div>
            <div class="span4">

        		Copyright &copy; <?php echo date('Y'); ?> by UniveOnline.<br/>
        	</div>
            <div class="span4">	
                All Rights Reserved.<br/>
        		<?php echo Yii::powered(); ?>
            
            </div>

        </div>
    </div><!-- footer -->
    
</body>
</html>
