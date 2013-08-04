<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta property="og:title" content="Univeonline" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://www.univeonline.com" />
        <meta property="og:image" content="" />
        <meta property="og:description" content="" />
        <meta property="og:locale" content="es_ES" />
        
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width">
		<title>UniveOnline - Tu comunidad de enseñanza y aprendizaje</title>
        <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
        
        <link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Jacques+Francois:300' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet/less" type="text/css" href="less/bootstrap.less" />
        
        <script type="text/javascript">
			less = {
				env: "development", // or "production"
				async: false,       // load imports async
				fileAsync: false,   // load imports async when in a page under
									// a file protocol
				poll: 2000,         // when in watch mode, time in ms between polls
				functions: {},      // user functions, keyed by name
				dumpLineNumbers: "comments", // or "mediaQuery" or "all"
				relativeUrls: false,// whether to adjust url's to be relative
									// if false, url's are already relative to the
									// entry less file
				rootpath: ":/a.com/"// a path to add on to the start of every url
									//resource
			};
		</script>
        <script src="js/less-1.4.1.min.js" type="text/javascript"></script>
        
        <style>
            body {
               /* padding-top: 60px;*/
                padding-bottom: 20px;
            }
      			div.line {
              width: 100%;
              min-width: 840px;
              height: 5px;
              background: #312116 url("../img/line.png") repeat-x 0 0;
              overflow: hidden;
            }

      			.mark
      			{
      				color:#56AD56;	
      			}
      			/* Main marketing message and sign up button */

              .hero-unit2 {
                padding: 10px;
                margin-bottom: 10px;
                font-size: 17px;
                font-weight: 200;
                line-height: 20px;
                color: inherit;
                background-color: #eeeeee;
                -webkit-border-radius: 6px;
                -moz-border-radius: 6px;
                border-radius: 6px;
              }
              .hero-unit2 h1 {
                margin-bottom: 0;
                font-size: 30px;
                line-height: 1;
                color: inherit;
                letter-spacing: -1px;
              }


      			  .jumbotron {
      				margin: 10px 0;
      				text-align: center;
      			  }
      			  .jumbotron h1 {
      				font-size: 72px;
      				line-height: 1;
      			  }
      			  .jumbotron .btn {
      				font-size: 21px;
      				padding: 14px 24px;
      			  }
      			  
      			  /* Supporting marketing content */
      			  .marketing {
      				margin: 20px 0;
      			  }
      			  .marketing p + h4 {
      				margin-top: 28px;
      			  }
	  
	  
        </style>
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">

		<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-42572200-1', 'univeonline.com');
          ga('send', 'pageview');

        </script>
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script> 
        <link rel="shortcut icon" href="favicon.ico" />
    </head>
    <body>
        
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

           
        
               <div class="line"></div>


        <div class="container">
        <div class="block">
           <div class="masthead">
            <ul class="nav nav-pills pull-right">
            <!--     <li class="active"><a href="#">Inicio</a></li>
           <li><a href="#">Quiénes somos</a></li>
              <li><a href="#">Contacto</a></li> -->
            </ul>
            <img src="img/bocetoNN2.png" alt="Logo UniveOnline" width="250">

            <!--<h2 class="mark">UniveOnline</h2> -->
          </div>
    <hr>
			 <div class="jumbotron">
                <h2>Bienvenido a UniveOnline:</h2><h3>Tu comunidad de enseñanza y aprendizaje</h3>
                
                <div id="example" class="modal hide fade in" style="display: none; ">
                    <div class="modal-header">
                        <a class="close" data-dismiss="modal">×</a>
                        <h3>Gracias por subscribirte</h3>
                    </div>
                    <div class="modal-body">
                        <h4>Text in a modal</h4>
                        <p>You can add some text here.</p>
                        <?php
                            if(isset($_POST['email'])){
                            
                                $dbconn = pg_connect("host=localhost port=5432 dbname=univeonl_univeonl user=univeonl_univeonl password=admin") or die ("No se pudo conectar a la Base de Datos");
                                echo "Conectado satisfactoriamente.\n";
                                
                                 $email_from = $_POST['email'];
                                 $error_message = "";
                                 $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
                                 
                                  if(!preg_match($email_exp,$email_from)) {
                                    $error_message .= 'The Email Address you entered does not appear to be valid.';
                                  }
                                  
                                  $res = pg_insert($dbconn, 'maillist', $_POST);
                                  if ($res) {
                                      echo "POST data is successfully logged\n";
                                  } else {
                                      echo "User must have sent wrong inputs\n";
                                  }
                                
                                pg_close($dbconn);
                            }
                        ?>	        
                    </div>
                    <div class="modal-footer">
                        <!--<a href="#" class="btn btn-success">Call to action</a>-->
                        <a href="#" class="btn" data-dismiss="modal">Close</a>
                    </div>
                </div>
                
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
                <script src="/js/bootstrap-modal.js"></script>
                         
                <form method="POST" class="form-inline search-form">
                   <div class="input-append">
                   <input id="" class="xlarge ui-autocomplete-input span4" type="text" value="" autocomplete="off" placeholder="tucorreo@ejemplo.com" name="email" role="textbox" aria-autocomplete="list" aria-haspopup="true" style="height:40px !important; font-size:25px !important;">
                    <button id="artist_submit" class="btn btn-large btn-danger" type="submit"  formmethod="post" value="" data-toggle="modal" href="#example">Subscribirme</button>
                    </div>
                </form>
                


                <p class="lead">Estamos actualizando nuestra plataforma.<br>Suscríbete y pronto recibirás información de nuestros cursos gratis en línea y mucho más.</p>

                <hr>
         	 </div>
           <!-- <div class="hero-unit">
            	Cuadro
            </div>-->
            
            <div class="row-fluid marketing">
                <div class="span4">  <div class="hero-unit2">  
                  <h4>Habla hispana >></h4>
                  <p>Dirigido a todas las personas de habla hispana al rededor del mundo.</p>
                </div></div>
    
                <div class="span4"><div class="hero-unit2">
                  <h4>Cursos interactivos >></h4>
                  <p>Realizar cursos interactivos mediante el uso de la plataforma UniveOnline.</p>
                </div></div>   

                <div class="span4"><div class="hero-unit2">
                  <h4>Cómodo / Gratis >></h4>
                  <p>Tiempo, espacio y economía ya no son limitantes para la enseñanza y el aprendizaje.</p>
                </div></div>                
                
            </div>

		</div>
        </div> <!-- /container -->
        
        <div class="navbar navbar-fixed-bottom">
            <footer>
                <p>&copy; Copyright © 2013 by UniveOnline. All Rights Reserved.</p>
            </footer>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>


    </body>
</html>
