<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
  <head>
    <title>SEGUIMIENTO MEDIOS ELECTRONICOS</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link type="text/css" href="http://localhost/boletines/css/sunny/jquery-ui-1.8.18.custom.css" rel="stylesheet"/>
    <script type="text/javascript" src="http://localhost/boletines/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="http://localhost/boletines/js/jquery-ui-1.8.18.custom.min.js"></script>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function(){
            
            //DATEPICKER
            
            $(function() {
                $( "#tabs" ).tabs();              
            });            
        });     
    </script>
   
  </head>
  
<body>
<!-- busqueda de boletines por numero o titulo -->
<p>Numero<input name="num_boletin" type="text" value="" id="num_boletin"/>
<input name="buscar_seguimiento" type="submit" id="buscar_seguimineto" value="Buscar"/><p>    
Titulo<input name="titulo_boletin" type="text" value="" id="titulo_boletin"/>
 <input name="buscar_seguimiento1" type="submit" id="buscar_seguimineto1" value="Buscar"/>   
<div class="demo">
 
   
<div id="tabs">
    <ul>
        <li><a href="#tabs-1">Radio Grupo</a></li>
        <li><a href="#tabs-2">Radio Universal</a></li>
        <li><a href="#tabs-3">Grupo Rad. ZER</a></li>
        <li><a href="#tabs-4">Ags TV</a></li>
        <li><a href="#tabs-5">Televisa</a></li>    
        <li><a href="#tabs-6">Cable canal</a></li> 
        <li><a href="#tabs-7">TV Azteca</a></li> 
        
    </ul>    
    <div id="tabs-1">
                <div>
                <input name="registro_radio_gpo" type="hidden" value="radio_gpo" id="registro_radio_gpo"/>
                <form name="agregar_seguimiento" id="agregar_seguimiento" method="post" action=""  
                    <fieldset>Seleccionar unicamente en caso de que aparesca <p>
                    <p>RADIO GRUPO<p> 
                         <table border="0" cellpadding="6">
                            <tr>
                                <th>Teasser</th>                            
                                <th>Nota</th>                      
                                <th>Capsula</th>
                                <th>Corte Informativo</th>
                                <th>Audio</th>
                                <th>Imagen</th>
                                <th>Calificacion</th>
                            </tr>
                            <tr>
                            <th><input type="checkbox" name="teasser" id="teasser"/></th>
                            <th><input type="checkbox" name="nota" id="nota"/></th>
                            <th> <input type="checkbox" name="capsula" id="capsula"/></th>
                            <th><input type="checkbox" name="corteinfo" id="corteinfo"/></th>
                            <th><input type="checkbox" name="audio" id="audio"/></th>
                            <th><input type="checkbox" name="imagen" id="imagen"/></th>
                            <th><input type="radio" name="calificacion" value="Positiva" checked="checked" /> Positiva
                                <input type="radio" name="calificacion" value="Negativa" /> Negativa</th>
                            </tr>
                         </table>
                     </fieldset>  
                    
                    <p>Comentarios<p>
                     <textarea name="comentarios" id="comentarios1" cols="60" rows="3"></textarea>
            
                     Fecha de hoy: <input type="text" name="fechaventa" id="datepicker_actualizar_radio_gpo" size="11" maxlength="11" value="<?php echo date("Y-m-d"); ?>" />    
                     <input name="actualizar_radio_gpo" type="submit" id="actualizar_radio_gpo" value="Actualizar"/>                        
                </div>                    
        </form>
    </div>
            
    <div id="tabs-2">
       <input name="registro_radio_uni" type="hidden" value="radio_uni" id="radio_uni"/>
        <form name="agregar_seguimiento" id="" method="post" action=""
                 <div>
                    
                    <fieldset>Seleccionar unicamente en caso de que aparesca <p>
                    <p>RADIO UNIVERSAL<p> 
                         <table border="0" cellpadding="6">
                            <tr>
                                <th>Teasser</th>                            
                                <th>Nota</th>                      
                                <th>Capsula</th>
                                <th>Corte Informativo</th>
                                <th>Audio</th>
                                <th>Imagen</th>
                                <th>Calificacion</th>
                            </tr>
                            <tr>
                            <th><input type="checkbox" name="teasser" id="teasser"/></th>
                            <th><input type="checkbox" name="cota" id="cota"/></th>
                            <th> <input type="checkbox" name="capsula" id="capsula"/></th>
                            <th><input type="checkbox" name="corteinfo" id="corteinfo"/></th>
                            <th><input type="checkbox" name="audio" id="audio"/></th>
                            <th><input type="checkbox" name="imagen" id="imagen"/></th>
                            <th><input type="radio" name="calificacion" value="Positiva" checked="checked" /> Positiva
                                <input type="radio" name="calificacion" value="Negativa" /> Negativa</th>
                            </tr>
                         </table>
                     </fieldset>  
                    
                    <p>Comentarios<p>
                     <textarea name="comentarios" id="comentarios" cols="60" rows="3"></textarea>
            
                     Fecha de hoy: <input type="text" name="fechaventa" id="datepicker_actualizar_radio_uni" size="11" maxlength="11" value="<?php echo date("Y-m-d"); ?>" />    
                     <input name="actualizar_radio_uni" type="submit" id="actualizar_radio_uni" value="Actualizar"/>                        
                </div>                    
        </form>
    </div>
    
    <div id="tabs-3">
           <input name="registro_zer" type="hidden" value="zer" id="zer"/>
           <form name="agregar_seguimiento" id="" method="post" action=""
                 <div>
                    
                    <fieldset>Seleccionar unicamente en caso de que aparesca <p>
                    <p>GRUPO RAD. ZER<p> 
                         <table border="0" cellpadding="6">
                            <tr>
                                <th>Teasser</th>                            
                                <th>Nota</th>                      
                                <th>Capsula</th>
                                <th>Corte Informativo</th>
                                <th>Audio</th>
                                <th>Imagen</th>
                                <th>Calificacion</th>
                            </tr>
                            <tr>
                            <th><input type="checkbox" name="teasser" id="teasser"/></th>
                            <th><input type="checkbox" name="cota" id="cota"/></th>
                            <th> <input type="checkbox" name="capsula" id="capsula"/></th>
                            <th><input type="checkbox" name="corteinfo" id="corteinfo"/></th>
                            <th><input type="checkbox" name="audio" id="audio"/></th>
                            <th><input type="checkbox" name="imagen" id="imagen"/></th>
                            <th><input type="radio" name="calificacion" value="Positiva" checked="checked" /> Positiva
                                <input type="radio" name="calificacion" value="Negativa" /> Negativa</th>
                            </tr>
                         </table>
                     </fieldset> 
                    
                    <p>Comentarios<p>
                     <textarea name="comentarios" id="comentarios" cols="60" rows="3"></textarea>
            
                     Fecha de hoy: <input type="text" name="fechaventa" id="datepicker_actualizar_zer" size="11" maxlength="11" value="<?php echo date("Y-m-d"); ?>" />    
                     <input name="actualizar_zer" type="submit" id="actualizar_zer" value="Actualizar"/>                        
                </div>                    
        </form>                        
    </div>    
    <div id="tabs-4">
        <input name="registro_agstv" type="hidden" value="agstv" id="agstv"/>
        <form name="agregar_seguimiento" id="" method="post" action=""
                 <div>
                    
                    <fieldset>Seleccionar unicamente en caso de que aparesca <p>
                    <p>AGS TV<p> 
                         <table border="0" cellpadding="6">
                            <tr>
                                <th>Teasser</th>                            
                                <th>Nota</th>                      
                                <th>Capsula</th>
                                <th>Corte Informativo</th>
                                <th>Audio</th>
                                <th>Imagen</th>
                                <th>Calificacion</th>
                            </tr>
                            <tr>
                            <th><input type="checkbox" name="teasser" id="teasser"/></th>
                            <th><input type="checkbox" name="cota" id="cota"/></th>
                            <th> <input type="checkbox" name="capsula" id="capsula"/></th>
                            <th><input type="checkbox" name="corteinfo" id="corteinfo"/></th>
                            <th><input type="checkbox" name="audio" id="audio"/></th>
                            <th><input type="checkbox" name="imagen" id="imagen"/></th>
                            <th><input type="radio" name="calificacion" value="Positiva" checked="checked" /> Positiva
                                <input type="radio" name="calificacion" value="Negativa" /> Negativa</th>
                            </tr>
                         </table>
                     </fieldset>   
                    
                    <p>Comentarios<p>
                     <textarea name="comentarios" id="comentarios" cols="60" rows="3"></textarea>
            
                     Fecha de hoy: <input type="text" name="fechaventa" id="datepicker_actualizar_agstv" size="11" maxlength="11" value="<?php echo date("Y-m-d"); ?>" />    
                     <input name="actualizar_agstv" type="submit" id="actualizar_agstv" value="Actualizar"/>                        
                </div>                    
        </form>
    </div>        
    <div id="tabs-5">
       <input name="registro_televisa" type="hidden" value="televisa" id="televisa"/>
        <form name="agregar_seguimiento" id="" method="post" action=""
                 <div>
                    
                    <fieldset>Seleccionar unicamente en caso de que aparesca <p>
                    <p>TELEVISA<p> 
                         <table border="0" cellpadding="6">
                            <tr>
                                <th>Teasser</th>                            
                                <th>Nota</th>                      
                                <th>Capsula</th>
                                <th>Corte Informativo</th>
                                <th>Audio</th>
                                <th>Imagen</th>
                                <th>Calificacion</th>
                            </tr>
                            <tr>
                            <th><input type="checkbox" name="teasser" id="teasser"/></th>
                            <th><input type="checkbox" name="cota" id="cota"/></th>
                            <th> <input type="checkbox" name="capsula" id="capsula"/></th>
                            <th><input type="checkbox" name="corteinfo" id="corteinfo"/></th>
                            <th><input type="checkbox" name="audio" id="audio"/></th>
                            <th><input type="checkbox" name="imagen" id="imagen"/></th>
                            <th><input type="radio" name="calificacion" value="Positiva" checked="checked" /> Positiva
                                <input type="radio" name="calificacion" value="Negativa" /> Negativa</th>
                            </tr>
                         </table>
                     </fieldset>  
                    
                    <p>Comentarios<p>
                     <textarea name="comentarios" id="comentarios" cols="60" rows="3"></textarea>
            
                     Fecha de hoy: <input type="text" name="fechaventa" id="datepicker_actualizar_televisa" size="11" maxlength="11" value="<?php echo date("Y-m-d"); ?>" />    
                     <input name="actualizar_televisa" type="submit" id="actualizar_televisa" value="Actualizar"/>                        
                </div>                    
        </form>    
    </div>
    <div id="tabs-6">
       <input name="registro_cable_canal" type="hidden" value="cable_canal" id="cable_canal"/>
        <form name="agregar_seguimiento" id="" method="post" action=""
                 <div>
                    
                    <fieldset>Seleccionar unicamente en caso de que aparesca <p>
                    <p>CABLE CANAL<p> 
                         <table border="0" cellpadding="6">
                            <tr>
                                <th>Teasser</th>                            
                                <th>Nota</th>                      
                                <th>Capsula</th>
                                <th>Corte Informativo</th>
                                <th>Audio</th>
                                <th>Imagen</th>
                                <th>Calificacion</th>
                            </tr>
                            <tr>
                            <th><input type="checkbox" name="teasser" id="teasser"/></th>
                            <th><input type="checkbox" name="cota" id="cota"/></th>
                            <th> <input type="checkbox" name="capsula" id="capsula"/></th>
                            <th><input type="checkbox" name="corteinfo" id="corteinfo"/></th>
                            <th><input type="checkbox" name="audio" id="audio"/></th>
                            <th><input type="checkbox" name="imagen" id="imagen"/></th>
                            <th><input type="radio" name="calificacion" value="Positiva" checked="checked" /> Positiva
                                <input type="radio" name="calificacion" value="Negativa" /> Negativa</th>
                            </tr>
                         </table>
                     </fieldset>  
                    
                    <p>Comentarios<p>
                     <textarea name="comentarios_heraldo" id="comentarios" cols="60" rows="3"></textarea>
            
                     Fecha de hoy: <input type="text" name="fechaventa" id="datepicker_actualizar_cable_canal" size="11" maxlength="11" value="<?php echo date("Y-m-d"); ?>" />    
                     <input name="actualizar_cable_canal" type="submit" id="actualizar_cable_canal" value="Actualizar"/>                        
                </div>                    
        </form>   
    </div>
    <div id="tabs-7">
       <input name="registro_tv_azteca" type="hidden" value="tv_azteca" id="tv_azteca"/>
        <form name="agregar_seguimiento" id="" method="post" action=""
                 <div>
                    
                    <fieldset>Seleccionar unicamente en caso de que aparesca <p>
                    <p>TV AZTECA<p> 
                         <table border="0" cellpadding="6">
                            <tr>
                                <th>Teasser</th>                            
                                <th>Nota</th>                      
                                <th>Capsula</th>
                                <th>Corte Informativo</th>
                                <th>Audio</th>
                                <th>Imagen</th>
                                <th>Calificacion</th>
                            </tr>
                            <tr>
                            <th><input type="checkbox" name="teasser" id="teasser"/></th>
                            <th><input type="checkbox" name="cota" id="cota"/></th>
                            <th> <input type="checkbox" name="capsula" id="capsula"/></th>
                            <th><input type="checkbox" name="corteinfo" id="corteinfo"/></th>
                            <th><input type="checkbox" name="audio" id="audio"/></th>
                            <th><input type="checkbox" name="imagen" id="imagen"/></th>
                            <th><input type="radio" name="calificacion" value="Positiva" checked="checked" /> Positiva
                                <input type="radio" name="calificacion" value="Negativa" /> Negativa</th>
                            </tr>
                         </table>
                     </fieldset>  
                    
                    <p>Comentarios<p>
                     <textarea name="comentarios_heraldo" id="comentarios" cols="60" rows="3"></textarea>
            
                     Fecha de hoy: <input type="text" name="fechaventa" id="datepicker_actualizar_tv_azteca" size="11" maxlength="11" value="<?php echo date("Y-m-d"); ?>" />    
                     <input name="actualizar_tv_azteca" type="submit" id="actualizar_tv_azteca" value="Actualizar"/>                        
                </div>                    
        </form>   
    </div>    
</div>
</div><!-- End demo -->
        
</body>
</html>
