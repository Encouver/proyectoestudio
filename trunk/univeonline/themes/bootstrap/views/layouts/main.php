<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
    <link href='http://fonts.googleapis.com/css?family=Jacques+Francois' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>

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


    <div class="wrapper"> <!-- esto es para el footer -->
        <div class="container container-content" id="page">
            <?php if(isset($this->breadcrumbs)):?>
                <?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                    'links'=>$this->breadcrumbs,
                )); 
                
            ?><!-- breadcrumbs -->

            <?php endif?>
        
            <?php echo $content; ?>
        
            <div class="clear"></div>
        </div><!-- page -->
	    <div class="push"><!--//--></div>
    </div> <!-- .wrapper -->

	<footer>
        <div class="container">
            <div class = "span4">
                    <img src="images/logo_unive2.png" width="200px">
                    <h6>Tu comunidad de enseñanza - aprendizaje</h6>
            </div> 
            <div class = "span2">
                <?php 
                    $this->widget('bootstrap.widgets.TbMenu',array(
                            'items'=>array(
                                array('label'=>'Inicio', 'url'=>array('/site/index')),
								array('label'=>'Cursos', 'url'=>array('')),
								array('label'=>'Sobre UniveOnline', 'url'=>array('/site/page', 'view'=>'about')),
								array('label'=>'Contacto', 'url'=>array('/site/contact')),
                                
                            ),
                    ));
                ?>
            </div>
            <div class = "span3">
                    <h5>Únete a la comunidad en </h5> 
                    <?php
                        echo CHtml::link('<img src="images/facebook.png">', "http://www.facebook.com");
                        echo CHtml::link('<img src="images/twitter.png">', "http://www.twiiter.com");
                        echo CHtml::link('<img src="images/google.png">', "https://plus.google.com/‎");
                    ?> 
                    <br>
            </div>
            <div class = "span2">
                                <center>

                <img src="images/latinoamerica.png" width="130px">
                                </center>

            </div>
            
            <div class = "span11">
                <hr>
                <center>
                    Copyright &copy; <?php echo date('Y'); ?> por UniveOnline  |  Todos los derechos reservados |  <?php echo Yii::powered(); ?>
                </center>
            </div>

        </div>
            
    </footer><!-- footer -->
    
</body>
</html>
