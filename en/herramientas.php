<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Transportes Norte - Innovative Logistics &#128667;</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Jose Sanchez">
    <link rel="icon" href="http://transportesnorte.cl/images/transportesnorteicono.png" type="image/png" sizes="16x16">
	<link rel="icon" href="http://transportesnorte.cl/images/transportesnorteicono.png" type="image/png" sizes="32x32">
	<link rel="icon" href="http://transportesnorte.cl/images/transportesnorteicono.png" type="image/png" sizes="180x180">
    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="styles/cards.css" rel="stylesheet" type="text/css"/>
	<link href="styles/footer.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="styles/services.css">
    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome.min.css">
    <link href="styles/footer.css" rel="stylesheet" type="text/css"/>
    <link href="scripts/carousel/style.css" rel="stylesheet" type="text/css" />
    <link href="scripts/camera/css/camera.css" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">
    <link href="styles/custom.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="enviar.js"></script>   
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <link rel="stylesheet" href="style4.css">
    <script>
        function send(tarjet){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("suv-cont").innerHTML = this.responseText;
                }
            };
            xhttp.open("POST", tarjet+".html", true);
            xhttp.send();   
        }
    </script>
    <script type="text/javascript" src="enviar.js"></script>
    <style>
        body,.container{
            padding-right: 0;
            padding-left: 0;
        }
        
        .btn-primary{
            border:1px solid #c75503 !important;
            border-bottom:1px solid #9d4302 !important;
            background-color:#e05f03 !important;
        }

    </style>
</head>
<body id="pageBody" onload="send('container')">

<div id="divBoxed" class="container">

    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

    <div class="divPanel notop nobottom">
            <div class="row-fluid">
                <div class="span12">

                    <div id="divLogo" class="pull-left">
                        <img src="images/logo.png" width="200" height="80" style="inherit">
                        <!--<a href="index.html" id="divSiteTitle">Primus InterLogistics</a><br />-->
                        <a href="https://www.transportesnorte.cl/en/index.php" id="divTagLine">Innovative logistics for <stronger class="subtitlelogo">complex cargo</stronger></a>
							<div class="btn-group">
							<button class="btn" data-toggle="dropdown" alt="english"><img src="images/flag/united-kingdom.png" alt="English" /> <span class="caret"></span></button>
							<ul class="dropdown-menu" style="width: 160px;height: 78px;">
								<li><a href="https://www.transportesnorte.cl/pt/index.php"><img src="images/flag/brazil.png" alt="portuguese" /> Portuguese</a></li>
								<li><a href="https://www.transportesnorte.cl/index.php"><img src="images/flag/spain.png" alt="spanish" /> Spanish</a></li>
							</ul>
						</div>
                    </div>

                    <div id="divMenuRight" class="pull-right">
                    <div class="navbar" style="display:block !important;box-shadow: none !important;">
                        <button type="button" class="btn-navbar-highlight btn-large" data-toggle="collapse" data-target=".nav-collapse" style="background: #F65600;color:white;">
                        NAVIGATION <span class="icon-chevron-down icon-white"></span>
                        </button>
                            <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu" style="margin: 51px -21px 0;text-align: center;">
                            <li><a href="index.php" style="font-family: 'Poppins', sans-serif !important;">Company</a></li>
                            <li><a href="about.php" style="font-family: 'Poppins', sans-serif !important;">About Us</a></li>
							<!--<li class="dropdown">
                            <a href="page.html" class="dropdown-toggle">Page <b class="caret"></b></a>
                            <ul class="dropdown-menu">                            
                            <li><a href="full.html">Full Page</a></li>
                            <li><a href="2-column.html">Two Column</a></li>
                            <li><a href="3-column.html">Three Column</a></li>
							<li><a href="../documentation/index.html">Documentation</a></li>
							<li class="dropdown">
                            <a href="#" class="dropdown-toggle">Dropdown Item &nbsp;&raquo;</a>
                            <ul class="dropdown-menu sub-menu">
                            <li><a href="#">Dropdown Item</a></li>
                            <li><a href="#">Dropdown Item</a></li>
                            <li><a href="#">Dropdown Item</a></li>
                            </ul>
                            </li>
                            </ul>
                            </li>-->
						    <li><a href="services.php" style="font-family: 'Poppins', sans-serif !important;">Services</a></li>
						    <li><a href="portfolio.php" style="font-family: 'Poppins', sans-serif !important;">Portfolio</a></li>
					    	<li class="active"><a href="herramientas.php" style="font-family: 'Poppins', sans-serif !important;">Tools</a></li>
                            <!--<li><a href="contact.php">Contacto</a></li>-->
                            </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row-fluid">
                <div class="span12">
                    <div id="contentInnerSeparator"></div>
                </div>
            </div>
    </div>
<div class="cont-total" style="height:400px">
        <div class="contentArea" style="width:30%;float:left">

<div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="wpb_widgetised_column wpb_content_element">
    
    <nav class="navbar navbar-default asdqwe">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn" style="background:#F65600;width:111%">
                                <i class="glyphicon glyphicon-align-left aaaasdse" style="margin-left: -50%;"></i>
                                <span>Toggle Sidebar</span>
                            </button>
                        </div>
                    </div>
                </nav>
    <nav id="sidebar" style="max-width: 90% !important">
                <!--<div class="sidebar-header" style="font-size: 21px;text-align: center;">
                    <h3>Transportes Norte</h3>
                    <strong>TN</strong>
                </div>-->

                <ul class="list-unstyled components" style="width: 90%;">
                   <li>
                        <a onclick="send('container')">
                            <i class="glyphicon glyphicon-star"></i>
                            Maritime Containers
                        </a>
                    </li>
                    <li>
                        <a onclick="send('contenedores')">
                            <i class="glyphicon glyphicon-plane"></i>
                            Air Freight Containers
                        </a>
                             </li>
							  <li>
                        <a onclick="send('puertos')">
                            <i class="glyphicon glyphicon-eye-open"></i>
                            Ports of the World
                        </a>
                    </li>
                    <li>
                        <a href="http://www.metric-conversions.org/" target="_blank">
                            <i class="glyphicon glyphicon-link"></i>
                            Conversiones Metricas
                        </a>
                    </li>
                    <li>
                        <a href="http://24timezones.com/hora_certa.php" target="_blank">
                            <i class="glyphicon glyphicon-dashboard"></i>
                            Time Zone GMT
                        </a>
                    </li>
                    <li>
                        <a  href="https://www.world-airport-codes.com/" target="_blank">
                            <i class="glyphicon glyphicon-send"></i>
                           Airport Codes
                        </a>
                    </li>
					   <li>
                        <a href="http://www.xe.com/currencyconverter/" target="_blank">
                            <i class="glyphicon glyphicon-usd"></i>
                           Currency Converter
                        </a>
                    </li>
					 <li>
                        <a href="https://pt.flightaware.com/" target="_blank">
                            <i class="glyphicon glyphicon-send"></i>
                           Online flight tracker
                        </a>
                    </li>
                </ul>
            </nav>
            
            
	</div>
</div></div></div>

    </div>
    
    <div id="suv-cont"  style="width:70%;float:right;overflow:auto;height: 400px;">
    
</div>
</div>

    <div id="footerOuterSeparator"></div>

       <?php
        include("footer.html");
       ?>


<script src="scripts/jquery.min.js" type="text/javascript"></script> 
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>
<script type="text/javascript">
             $(document).ready(function () {
                 var x = window.matchMedia("(max-width: 768px)");
                 $("#sidebar ul li").on('click', function () {
                     if (x.matches) {
                         if($('#sidebar').css("display") === 'block'){
                             $('#sidebar').hide('slow');
                         } else{
                             $('#sidebar').show('slow');
                         }
                     }
                     $('#sidebar').toggleClass('active');
                 });
                
                if (x.matches) {
                    $('#sidebar').css("display","none");
                }
                 $('#sidebarCollapse').on('click', function () {
                     if (x.matches) {
                         if($('#sidebar').css("display") === 'block'){
                             $('#sidebar').hide('slow');
                         } else{
                             $('#sidebar').show('slow');
                         }
                     }
                     
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>

<div class="wasp"><a href="https://api.whatsapp.com/send?phone=56949884100&text=Hello%20%F0%9F%91%8B%20I'm%20interested%20in%20your%20services%20%F0%9F%9A%9A"><img width="100" height="100" src="images/wasap.png"></a></div>



</body>
</html>