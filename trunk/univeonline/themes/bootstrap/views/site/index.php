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
                <h4 class = "lead">Cursos recientes</h4>
                	<hr />
                    	<div class="span1" style="margin:0px !important"></div>
                        <div class="span3" style="margin:0px !important; background-color:#048AC2 !important; padding:5px !important"><img src="images/large-icon1.png" /><br />is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type <br><br /><table width="100%"><tr><td align="center" width="50%" ><a href="#">Inscribir</a></td><td align="center" width="50%"><a href="#">Ver más</a></td></tr></table></div>
                        <div class="span1" style="margin:0px !important"></div>
                        <div class="span3" style="margin:0px !important; padding:5px !important; border:1px solid #048AC2;"><img src="images/large-icon.png" /> <br />is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type <br><br /><table width="100%"><tr><td align="center" width="50%" ><a href="#">Inscribir</a></td><td align="center" width="50%"><a href="#">Ver más</a></td></tr></table></div>
                        <div class="span1" style="margin:0px !important"></div>
                        <div class="span3" style="margin:0px !important"><img src="images/PMH-02.jpg" /><br />is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type <br><br /><table width="100%"><tr><td align="center" width="50%" ><a href="#">Inscribir</a></td><td align="center" width="50%"><a href="#">Ver más</a></td></tr></table></div>
                </div>
                
            </div>
            <br>
            <div class="row-fluid">
              <div class="span12">
                <h4 class = "lead">Cursos más cursados</h4>
                        <hr />
                    	<div class="span1" style="margin:0px !important"></div>
                        <div class="span3" style="margin:0px !important"><img src="images/large-icon1.png" /><br />This is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type <br><br /><table width="100%"><tr><td align="center" width="50%" ><a href="#">Inscribir</a></td><td align="center" width="50%"><a href="#">Ver más</a></td></tr></table></div>
                        <div class="span1" style="margin:0px !important"></div>
                        <div class="span3" style="margin:0px !important"><img src="images/large-icon.png" /><br />This is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type <br><br /><table width="100%"><tr><td align="center" width="50%" ><a href="#">Inscribir</a></td><td align="center" width="50%"><a href="#">Ver más</a></td></tr></table></div>
                        <div class="span1" style="margin:0px !important"></div>
                        <div class="span3" style="margin:0px !important"><img src="images/PMH-02.jpg" /><br />This is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type <br><br /><table width="100%"><tr><td align="center" width="50%" ><a href="#">Inscribir</a></td><td align="center" width="50%"><a href="#">Ver más</a></td></tr></table></div>
                </div>
                
            </div>
            
              <br>  
            <div class="row-fluid">
              <div class="span12">
                <h4 class = "lead">Cursos más destacados</h4>
                      <hr />
                    	<div class="span1" style="margin:0px !important"></div>
                        <div class="span3" style="margin:0px !important"><img src="images/large-icon1.png" /><br />is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type <br><br /><table width="100%"><tr><td align="center" width="50%" ><a href="#">Inscribir</a></td><td align="center" width="50%"><a href="#">Ver más</a></td></tr></table></div>
                        <div class="span1" style="margin:0px !important"></div>
                        <div class="span3" style="margin:0px !important"><img src="images/large-icon.png" /><br />is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type <br><br /><table width="100%"><tr><td align="center" width="50%" ><a href="#">Inscribir</a></td><td align="center" width="50%"><a href="#">Ver más</a></td></tr></table></div>
                        <div class="span1" style="margin:0px !important"></div>
                        <div class="span3" style="margin:0px !important"><img src="images/PMH-02.jpg" /><br />is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type <br><br /><table width="100%"><tr><td align="center" width="50%" ><a href="#">Inscribir</a></td><td align="center" width="50%"><a href="#">Ver más</a></td></tr></table></div>
                </div>
                
            </div>
    	</div>

