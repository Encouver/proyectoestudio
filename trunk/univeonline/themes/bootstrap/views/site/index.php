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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <!--[if gte IE 9]>
    <style type="text/css">
      .gradient {
         filter: none;
      }
    </style>
  <![endif]-->	
    
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
        	
            <br>  
            <div class="container">
            <h4 class = "lead">Cursos recientes</h4>
              <div class="row-fluid">
                <div class="span4">
                  <div class="container-item">
                    <div class="item2" style="background-image: url(images/large-icon.png)">
                      <div class="item-overlay">

                      </div>
                      <div class="item-content">
                        <div class="item-top-content">
                          <div class="item-top-content-inner">
                            <div class="item-product">
                              <div class="item-top-title">
                                <h5>Ipath lowrunner</h5>
                                <p class="subdescription">
                                  Low skateshoes - Grey
                                </p>
                              </div>
                            </div>

                          </div>  
                        </div>
                        <div class="item-add-content">
                          <div class="item-add-content-inner">
                            <!-- <div class="section">
                              <h4>Sizes</h4>
                              <p>40,41,42,43,44,45</p>
                            </div> -->
                            <div class="section">
                              <a href="#" class="btn btn-small">Ver más</a>
                              <a href="#" class="btn btn-small">Inscribir</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="span4">
                  <div class="container-item">
                    <div class="item2" style="background-image: url(images/large-icon1.png)">
                      <div class="item-overlay">
                        <div class="sale-tag"><span>NUEVO</span></div>
                      </div>
                      <div class="item-content">
                        <div class="item-top-content">
                          <div class="item-top-content-inner">
                            <div class="item-product">
                              <div class="item-top-title">
                                <h5>Ipath lowrunner</h5>
                                <p class="subdescription">
                                  Low skateshoes - Grey
                                </p>
                              </div>
                            </div>
                          </div>  
                        </div>
                        <div class="item-add-content">
                          <div class="item-add-content-inner">
                            <!-- <div class="section">
                              <h4>Sizes</h4>
                              <p>40,41,42,43,44,45</p>
                            </div> -->
                            <div class="section">
                              <a href="#" class="btn btn-small">Ver más</a>
                              <a href="#" class="btn btn-small">Inscribir</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="span4">
                  <div class="container-item">
                    <div class="item2" style="background-image: url(images/PMH-02.jpg)">
                      <div class="item-overlay">

                        <div class="sale-tag"><span>NUEVO</span></div>
                      </div>
                      <div class="item-content">
                        <div class="item-top-content">
                          <div class="item-top-content-inner">
                            <div class="item-product">
                              <div class="item-top-title">
                                <h5>Ipath lowrunner</h5>
                                <p class="subdescription">
                                  Low skateshoes - Grey
                                </p>
                              </div>
                            </div>

                          </div>  
                        </div>
                        <div class="item-add-content">
                          <div class="item-add-content-inner">
                            <!-- <div class="section">
                              <h4>Sizes</h4>
                              <p>40,41,42,43,44,45</p>
                            </div> -->
                            <div class="section">
                              <a href="#" class="btn btn-small">Ver más</a>
                              <a href="#" class="btn btn-small">Inscribir</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
            <br>  
            <div class="container">
            <h4 class = "lead">Los más cursados</h4>
              <div class="row-fluid">
                <div class="span4">
                  <div class="container-item">
                    <div class="item2" style="background-image: url(images/large-icon.png)">
                      <div class="item-overlay">

                        <div class="sale-tag"><span>NUEVO</span></div>
                      </div>
                      <div class="item-content">
                        <div class="item-top-content">
                          <div class="item-top-content-inner">
                            <div class="item-product">
                              <div class="item-top-title">
                                <h5>Ipath lowrunner</h5>
                                <p class="subdescription">
                                  Low skateshoes - Grey
                                </p>
                              </div>
                            </div>

                          </div>  
                        </div>
                        <div class="item-add-content">
                          <div class="item-add-content-inner">
                            <!-- <div class="section">
                              <h4>Sizes</h4>
                              <p>40,41,42,43,44,45</p>
                            </div> -->
                            <div class="section">
                              <a href="#" class="btn btn-small">Ver más</a>
                              <a href="#" class="btn btn-small">Inscribir</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="span4">
                  <div class="container-item">
                    <div class="item2" style="background-image: url(images/large-icon1.png)">
                      <div class="item-overlay">
                        <div class="sale-tag"><span>NUEVO</span></div>
                      </div>
                      <div class="item-content">
                        <div class="item-top-content">
                          <div class="item-top-content-inner">
                            <div class="item-product">
                              <div class="item-top-title">
                                <h5>Ipath lowrunner</h5>
                                <p class="subdescription">
                                  Low skateshoes - Grey
                                </p>
                              </div>
                            </div>
                          </div>  
                        </div>
                        <div class="item-add-content">
                          <div class="item-add-content-inner">
                            <!-- <div class="section">
                              <h4>Sizes</h4>
                              <p>40,41,42,43,44,45</p>
                            </div> -->
                            <div class="section">
                              <a href="#" class="btn btn-small">Ver más</a>
                              <a href="#" class="btn btn-small">Inscribir</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="span4">
                  <div class="container-item">
                    <div class="item2" style="background-image: url(images/PMH-02.jpg)">
                      <div class="item-overlay">

                        <div class="sale-tag"><span>NUEVO</span></div>
                      </div>
                      <div class="item-content">
                        <div class="item-top-content">
                          <div class="item-top-content-inner">
                            <div class="item-product">
                              <div class="item-top-title">
                                <h5>Ipath lowrunner</h5>
                                <p class="subdescription">
                                  Low skateshoes - Grey
                                </p>
                              </div>
                            </div>

                          </div>  
                        </div>
                        <div class="item-add-content">
                          <div class="item-add-content-inner">
                            <!-- <div class="section">
                              <h4>Sizes</h4>
                              <p>40,41,42,43,44,45</p>
                            </div> -->
                            <div class="section">
                              <a href="#" class="btn btn-small">Ver más</a>
                              <a href="#" class="btn btn-small">Inscribir</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
            
            <br>  
            <div class="container">
            <h4 class = "lead">Cursos más destacados</h4>
              <div class="row-fluid">
                <div class="span4">
                  <div class="container-item">
                    <div class="item2" style="background-image: url(images/large-icon.png)">
                      <div class="item-overlay">

                        <div class="sale-tag"><span>NUEVO</span></div>
                      </div>
                      <div class="item-content">
                        <div class="item-top-content">
                          <div class="item-top-content-inner">
                            <div class="item-product">
                              <div class="item-top-title">
                                <h5>Ipath lowrunner</h5>
                                <p class="subdescription">
                                  Low skateshoes - Grey
                                </p>
                              </div>
                            </div>

                          </div>  
                        </div>
                        <div class="item-add-content">
                          <div class="item-add-content-inner">
                            <!-- <div class="section">
                              <h4>Sizes</h4>
                              <p>40,41,42,43,44,45</p>
                            </div> -->
                            <div class="section">
                              <a href="#" class="btn btn-small">Ver más</a>
                              <a href="#" class="btn btn-small">Inscribir</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="span4">
                  <div class="container-item">
                    <div class="item2" style="background-image: url(images/large-icon1.png)">
                      <div class="item-overlay">
                        <div class="sale-tag"><span>NUEVO</span></div>
                      </div>
                      <div class="item-content">
                        <div class="item-top-content">
                          <div class="item-top-content-inner">
                            <div class="item-product">
                              <div class="item-top-title">
                                <h5>Ipath lowrunner</h5>
                                <p class="subdescription">
                                  Low skateshoes - Grey
                                </p>
                              </div>
                            </div>
                          </div>  
                        </div>
                        <div class="item-add-content">
                          <div class="item-add-content-inner">
                            <!-- <div class="section">
                              <h4>Sizes</h4>
                              <p>40,41,42,43,44,45</p>
                            </div> -->
                            <div class="section">
                              <a href="#" class="btn btn-small">Ver más</a>
                              <a href="#" class="btn btn-small">Inscribir</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="span4">
                  <div class="container-item">
                    <div class="item2" style="background-image: url(images/PMH-02.jpg)">
                      <div class="item-overlay">

                        <div class="sale-tag"><span>NUEVO</span></div>
                      </div>
                      <div class="item-content">
                        <div class="item-top-content">
                          <div class="item-top-content-inner">
                            <div class="item-product">
                              <div class="item-top-title">
                                <h5>Ipath lowrunner</h5>
                                <p class="subdescription">
                                  Low skateshoes - Grey
                                </p>
                              </div>
                            </div>

                          </div>  
                        </div>
                        <div class="item-add-content">
                          <div class="item-add-content-inner">
                            <!-- <div class="section">
                              <h4>Sizes</h4>
                              <p>40,41,42,43,44,45</p>
                            </div> -->
                            <div class="section">
                              <a href="#" class="btn btn-small">Ver más</a>
                              <a href="#" class="btn btn-small">Inscribir</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
    	</div>




