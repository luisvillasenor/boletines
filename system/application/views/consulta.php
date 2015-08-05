<!DOCTYPE html>
<html>
    <head>
       
        <title>CONSULTA</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <link type="text/css" href="http://10.1.17.10/citranvias/system/application/views/css/citranvias/jquery-ui-1.8.18.custom.css" rel="stylesheet" />

<script type="text/javascript" src="http://10.1.17.10/citranvias/system/application/views/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="http://10.1.17.10/citranvias/system/application/views/js/jquery-ui-1.8.18.custom.min.js"></script>
        
        <script type="text/javascript" charset="utf-8">
            $(document).ready(function(){
                
                $(function() {
                    $( "#tabs" ).tabs(); 
                    
                    $( "#fechadia" ).datepicker({ dateFormat: 'yy-mm-dd', showWeek: true, firstDay: 1 });
                    $( "#fecha_comienzo" ).datepicker({ dateFormat: 'yy-mm-dd', showWeek: true, firstDay: 1 });
                    $( "#fecha_termino" ).datepicker({ dateFormat: 'yy-mm-dd', showWeek: true, firstDay: 1 });
                    
                    
                    $( "#accordion" ).accordion({
                    	autoHeight: false,
                        navigation: true
                    });
        
                });                
                
                // Seleccionar todos los input y definir tamaño 10
                $("input").attr({"size":10,"maxlength":10});
                
                // Inicializa contenedores tipo #descuentobox en "oculto""
                $("#resultadospordia").hide();
                $("#corte_por_mes").hide();
                $("#corte_por_anio").hide();
                
            /*******************************************************************/
            // VALIDACION DE LA CAPTURA DE LAS FECHAS
            $("#consulta_por_dia").submit(function () {  

                if($("#fechadia").val() <= 0 || $("#fechadia").val().length < 1) 
                {
                    alert("'La Fecha no puede estar VACIO");  
                    return false;  
                }
                
                $("#resultadospordia").show();
                return true;  
            });
	
                                
            });
        </script>
        
        <style type="text/css">
            * { font-family: Verdana; font-size: 96%; }
            label { width: 10em; float: left; }
            label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
            p { clear: both; }
            .submit { margin-left: 12em; }
            em { font-weight: bold; padding-right: 1em; vertical-align: top; }
        </style>
      
    </head>
    
    <body>
        

<div class="demo">

<div id="tabs">
    
    <ul>
        
    </ul>
        
    <div id="tabs-1">
    <div id="accordion">
      <h3><a href="#section2">CORTE POR RANGO</a></h3>
      <div id="corte_por_rango">
        <fieldset>
          <form name="consulta_por_rango" id="consulta_por_rango" method="post" action="consulta_por_rango">            
        <div>
            <div style=" float: left; width: 50%;">
                <fieldset>
                    Fecha Comienzo: <input type="text" name="fecha_comienzo" id="fecha_comienzo" value="<?php echo date("Y-m-d"); ?>"/>
                </fieldset>
            </div>
            <div style=" float: right; width: 50%">
                <fieldset>
                    Fecha Termino: <input type="text" name="fecha_termino" id="fecha_termino" value="<?php echo date("Y-m-d"); ?>"/>
                </fieldset>
            </div>
        </div><p>
        <input name="consulta_por_rango" type="submit" id="consulta_por_rango" value="Consultar"/>                      
      </form>
        </fieldset>
      </div>
      
      
    </div><!-- End Accordeon -->  
    </div><!-- End tabs-1 -->
    
    <div id="resultadospordia">
      
    </div><!-- End consultapordia -->
</div><!-- End tabs -->
</div><!-- End demo -->


       
        
        
        
        
    </body>
</html>
