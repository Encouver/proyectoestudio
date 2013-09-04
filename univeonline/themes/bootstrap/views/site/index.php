<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

 
$baseUrl = Yii::app()->baseUrl; 
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/jquery-ui-1.10.3.custom.min.js');
//$cs->registerScriptFile($baseUrl.'/js/yourscript.js');
//$cs->registerCssFile($baseUrl.'/css/yourcss.css');
?>    

<script type="text/javascript">
	$('.carousel').carousel({
		interval: 2000
	})
</script>
	
    
    
	<!--Formulario de busqueda principal-->
	<div class="pagination-centered hero-unit sombra">
      <div class="form-search">
         <div class="input-append">
         	<span class="fornav"><i class="icon-search" ></i></span>
            <input type="text" class="input-xxlarge search-query " placeholder="Buscar un curso">
            <button type="submit" class="btn" formmethod="post">Buscar</button>
         </div>
      </div>
    </div>
    
    <!--Banner-->
        <div id="myCarousel" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="active item">
              <?php /*$this->widget('ext.imagemask.ImageMask', array(
                'shape' => 'roundedsquare',
                'imgpath' => Yii::app()->basePath.'/../images/3.jpg',
                'width' => '200',
                'height' => '200',
                'title' => 'Sample Image',
                ));*/
				
					$image = Yii::app()->image->load('images/3.jpg');
					$image->resize(1170, 500);
					$image->save('images/3t.jpg'); // or $image->save('images/small.jpg');
					/*
					Yii::import('application.extensions.image.Image');
					$image = new Image('images/3.jpg');
					$image->resize(400, 100)->rotate(-45)->quality(75)->sharpen(20);
					$image->render();*/
										
                ?>

 	        	<img alt="" src="images/3t.jpg" >
                <div class="carousel-caption">
                <h4>First Thumbnail label</h4>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
			</div>
			<div class="item">
                <?php $this->widget('ext.SAImageDisplayer', array(
					'image' => '3.png',
					'size' => 'banner',
					//'resizeMode' => 'WIDTH',
					//'width' => '',
					//'height' => '',
				)); ?>
            	<!--<img alt="" src="images/3.jpg">-->
                <div class="carousel-caption">
                <h4>Second Thumbnail label</h4>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
			</div>
          </div>
          <!-- Carousel nav -->
          <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
          <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
        
        <div class="container">
        
        <div></div>
        <div></div>
        <div></div>
        
<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'Welcome to '.CHtml::encode(Yii::app()->name),
)); ?>

<p>Congratulations! You have successfully created your Yii application.</p>

<?php $this->endWidget(); ?>

<p>You may change the content of this page by modifying the following two files:</p>

<ul>
    <li>View file: <code><?php echo __FILE__; ?></code></li>
    <li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
    the <a href="http://www.yiiframework.com/doc/">documentation</a>.
    Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
    should you have any questions.</p>
  
    </div>

