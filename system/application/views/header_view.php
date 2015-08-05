<!DOCTYPE HTML>

    <head>
        
    <meta charset="utf-8">
    <meta name="description" content="Aplicación Web desarrollada para la Secretaría de Turismo del Estado de Aguascalientes
    para el seguimiento de las publicaciones echas en medios escritos y digitales a nivel local y nacional. Esta actividad
    la lleva a cabo el departamento de comunicación de la misma secretaría. El buen uso de esta aplicación así como de la
    información es responsabilidad de dicho departamento.">
    <meta name="author" content="Luis Gabriel Villaseñor Alarcón">
    <meta name="application-name" content="Sistema de Seguimiento a Comunicados (SECTURE)">
    <title>Sistema de Seguimiento a Comunicados (SECTURE)</title>
    
    <script src="<?php echo base_url();?>js/modernizr-1.7.min.js"></script><!-- this is the javascript allowing html5 to run in older browsers -->
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/reset.css" media="screen" title="html5doctor.com Reset Stylesheet" />
    
    <!-- in the CSS3 stylesheet you will find examples of some great new features CSS has to offer -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/css3.css" media="screen" />
    
    <!-- general stylesheet contains some default styles, you do not need this, but it helps you keep a uniform style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/general.css" media="screen" />
    
    <!-- grid's will help you keep your website appealing to your users, view 52framework.com website for documentation -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/grid.css" media="screen" />
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>jquery-ui-1.11.2.custom/jquery-ui.min.css"> -->
    <!-- <script src="<?php echo base_url();?>jquery-ui-1.11.2.custom/external/jquery/jquery.js"></script> -->
    <!-- <script src="<?php echo base_url();?>jquery-ui-1.11.2.custom/jquery-ui.min.js"></script> -->
    <link rel="shortcut icon" href="<?php echo base_url();?>favicon.ico" type="image/ico">
    
    <!-- the following style is for demonstartion purposes only and is not needed for anything but inspiration -->
    <style>
        
        header { padding-top:5px; border-bottom:1px solid #ccc; padding-bottom:5px; }
        header .logo {font-size:3.52em;}
        header nav ul li {float:left; margin-top:12px; background-color: #98bf21;}
        header nav ul li a {display:block; padding:5px 15px; border-right:1px solid #eee; font-size:1.52em; font-family:Georgia, "Times New Roman", Times, serif; text-decoration:none;}
        header nav ul li a:hover {background-color:#7A991A; border-right:1px solid #ccc; text-shadow:-1px -1px 0px #fff;}
        header nav ul li a:active {background-color:#FFF; border-right:1px solid #ccc; text-shadow:-1px -1px 0px #fff;}
        header nav ul li.last a {border-right:none;}

        .header { padding-top:5px; border-bottom:0px solid #ccc; padding-bottom:5px;}
        .header .nav .ul .li {float:left; margin-top:12px; background-color: #98bf21;}
        .header .nav .ul .li a {display:block; padding:5px 15px; border-right:1px solid #eee; font-size:1.52em; font-family:Georgia, "Times New Roman", Times, serif; text-decoration:none;}
        .header .nav .ul .li a:hover {background-color:#7A991A; border-right:1px solid #ccc; text-shadow:-1px -1px 0px #fff;}
        .header .nav .ul .li a:active {background-color:#FFF; border-right:1px solid #ccc; text-shadow:-1px -1px 0px #fff;}
        .header .nav .ul .li li.last a {border-right:none;}
        
        #css3 div > div {margin:0px 0px 50px 0px; padding:6px; border:1px solid #eee;}
        #grid div {text-align:center;  }
        #grid div > .col {border-bottom:1px solid #ccc; padding:10px 0px; outline:1px solid #eee;}
        
        h2 {border-bottom:1px dashed #ccc; margin-top:15px;}
        
        .documentation {display:block; background-color:#eee; padding:6px 13px; font-family:Georgia, "Times New Roman", Times, serif; color:#666; text-align:right; text-shadow:-1px -1px 0px #fff;}
        
        footer { position: relative; bottom: 0px; left: 1px; right: 1px; width: 100%; text-align:center;}
        

        
        #vertodo { padding: 5px; background-color: #ab1e2c; color: #fff;}
        
        #OJO {color: #AB1E2C}
        .error {color: #AB1E2C; background-color: #8CC63E;}
        /* Estilo para las Tablas */
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            width: 100%;
            border-collapse: collapse;
        }

        #customers td, #customers th {
            font-size: 1em;
            border: 1px solid #ccc;
            padding: 4px;
            
        }

        #customers th {
            font-size: 1.1em;
            text-align: center;
            padding: 4px;
            background-color: #8CC63E;
            color: #144733;
        }

        #customers tr.alt td {
            color: #007940;
            background-color: #ccc;
        }

        .vertical{
          -webkit-transform: rotate(-45deg);
          -moz-transform: rotate(-45deg);
          
          left:0;
          position:absolute;
          top:50px;
          }


        


    </style>

    <link type="text/css" href="<?php echo base_url();?>css/citranvias/jquery-ui-1.8.18.custom.css" rel="stylesheet" />
    <link type="text/css" href="<?php echo base_url();?>css/citranvias/validationEngine.jquery.css" rel="stylesheet" />

    </head>

<body>

    
    