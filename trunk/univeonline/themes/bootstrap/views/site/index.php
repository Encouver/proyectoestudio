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
    <div></div>
    <!--Banner-->
        <div id="myCarousel" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="active item">
              <?php 
					$image = Yii::app()->image->load('images/3.jpg');
					$image->resize(1170, 500);
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
        	
            <div class="row-fluid">
                <div class="span12">
                <h4>Cursos recientes</h4>
                	<hr />
                    	<div class="span1" style="margin:0px !important"></div>
                        <div class="span3" style="margin:0px !important"><img src="images/large-icon1.png" /></div>
                        <div class="span1" style="margin:0px !important"></div>
                        <div class="span3" style="margin:0px !important"><img src="images/large-icon.png" /> dsfdfadf <br><a href="#">Ver más</a></div>
                        <div class="span1" style="margin:0px !important"></div>
                        <div class="span3" style="margin:0px !important"><img src="images/PMH-02.jpg" /></div>
                </div>
                
            </div>
            <br>
            <div class="row-fluid">
              <div class="span12">
                <h4>Cursos más cursados</h4>
                        <hr />
                    	<div class="span1" style="margin:0px !important"></div>
                        <div class="span3" style="margin:0px !important"><img src="images/large-icon1.png" /></div>
                        <div class="span1" style="margin:0px !important"></div>
                        <div class="span3" style="margin:0px !important"><img src="images/large-icon.png" /></div>
                        <div class="span1" style="margin:0px !important"></div>
                        <div class="span3" style="margin:0px !important"><img src="images/PMH-02.jpg" /></div>
                </div>
                
            </div>
            
              <br>  
            <div class="row-fluid">
              <div class="span12">
                <h4>Cursos más destacados</h4>
                      <hr />
                    	<div class="span1" style="margin:0px !important"></div>
                        <div class="span3" style="margin:0px !important"><img src="images/large-icon1.png" /></div>
                        <div class="span1" style="margin:0px !important"></div>
                        <div class="span3" style="margin:0px !important"><img src="images/large-icon.png" /></div>
                        <div class="span1" style="margin:0px !important"></div>
                        <div class="span3" style="margin:0px !important"><img src="images/PMH-02.jpg" /></div>
                </div>
                
            </div>
    	</div>

