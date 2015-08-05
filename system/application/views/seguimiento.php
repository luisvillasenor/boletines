
<section class="row">
    <h2 class="width_16 col"></h2>
      
  <div id="tabs">
      <ul>
        <li><a href="#tabs-1">MEDIOS ESCRITOS<br><small>Registrar Seguimiento</small></a></li>
        <li><a href="#tabs-2">MEDIOS ELECTRÓNICOS<br><small>Registrar Seguimiento</small></a></li>
        
      </ul>
<div id="tabs-1"> 
                
  

    <form name="agregar_seguimiento" class="formular" id="agregar_seguimiento" method="post" action="agregar_seguimiento"> 
      
      <label>Seleccione Comunicado:</label>
        <select name="numero_boletin" id="numero_boletin" class="validate[required]">
          <option></option>
          <?php foreach($combo_boletines as $item_combo_boletines):?>
            <option value="<?php echo $item_combo_boletines->numero_boletin; ?> "><?php echo $item_combo_boletines->numero_boletin;?>  .-  <?php echo $item_combo_boletines->titulo_boletin;?></option>
          <?php endforeach; ?>
        </select>
        <p>                             
      <label>Seleccione Medio:</label>
        <select name="nombremedio" class="validate[required]">
          <option></option>
            <?php foreach($combo_medios_escritos as $item_combo_escritos):?>
             <option value="<?php echo $item_combo_escritos->nombremedio; ?>"><?php echo $item_combo_escritos->nombremedio;?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <label>Fecha de Publicación</label>
          <input class="validate[required] text-input" type="text" name="fecha" id="datepicker_actualizar_escritos" size="10" maxlength="11" value="" />
        
          <table class="ui-state-highlight">
            <tr>              
              <th>Página principal</th>                            
              <th>Interiores</th>                      
              <th>Columna</th>
              <th>Foto</th>
              <th>Texto</th>
              <th>Calificación</th>
              
            </tr>
            <tr>              
              <th><input class="validate[maxCheckbox[5]] checkbox" type="checkbox" name="pp" id="pp"/></th>
              <th><input class="validate[maxCheckbox[5]] checkbox" type="checkbox" name="interiores" id="interiores"/></th>
              <th><input class="validate[maxCheckbox[5]] checkbox" type="checkbox" name="columna" id="columna"/></th>
              <th><input class="validate[maxCheckbox[5]] checkbox" type="checkbox" name="foto" id="foto"/></th>
              <th><input class="validate[maxCheckbox[5]] checkbox" type="checkbox" name="texto" id="texto"/></th>
              <td>
                <input class="validate[required] radio" type="radio" name="calificacion" value="1" /> Positiva<br>
                <input class="validate[required] radio" type="radio" name="calificacion" value="0" /> Negativa
              </td>
            </tr>          
          </table>
          <p>
          <label>Cargar Evidencia</label>
            
            <input type="file" size="25" name="Evidencia" id="evidencia"/>
            <p>          
          <label>Comentarios Adicionales</label>
            <textarea name="comentarios" id="comentarios" cols="30" rows="3"></textarea>
            <p>
            <input name="agregar_seguimiento" type="submit" id="agregar_seguimiento" value="Guardar"/>      
                      
    </form>
               
</div><!-- FIN tab-1 -->
      
<!--
******************************************MEDIOS ELECTRONICOS*********************************************************
******************************************************************************************************************
******************************************************************************************************************-->
<div id="tabs-2"> 

   
<div>  
     <form name="agregar_seguimiento_electronicos" id="agregar_seguimiento_electronicos" method="post" action="agregar_seguimiento_electronicos"> 
         <fieldset>
          <legend>Registrar para Seguimiento</legend>
             Comunicado:
             <select name="numero_boletin" id="numero_boletin" class="validate[required]">
                   <option></option>
                   <?php foreach($combo_boletines as $item_combo_boletines):?>
                         <option value="<?php echo $item_combo_boletines->numero_boletin; ?> "><?php echo $item_combo_boletines->numero_boletin;?>  .-  <?php echo $item_combo_boletines->titulo_boletin;?></option>
                   <?php endforeach; ?>
             </select>

                
             <div id="calilificacionbox_el">
                   <p>Medio:
                   <select name="nombremedio" class="validate[required]">
                        <option ></option>
                        <?php foreach($combo_medios_electronicos as $item_combo_electronicos):?>
                              <option value="<?php echo $item_combo_electronicos->nombremedio; ?>"><?php echo $item_combo_electronicos->nombremedio;?></option>
                        <?php endforeach; ?>
                   </select>
                   
               
                   <table class="ui-state-highlight">
                      <tr>
                          <th>Teasser</th>                            
                          <th>Nota</th>                      
                          <th>Capsula</th>
                          <th>Corte Informativo</th>
                          <th>Audio</th>
                          <th>Imagen</th>
                          <th>Calificación</th>
                          <th>Cargar evidencia</td>
                      </tr>
                      <tr>
                          <th><input type="checkbox" name="teasser" id="teasser" value="0"/></th>
                          <th><input type="checkbox" name="nota" id="nota" value="0"/></th>
                          <th> <input type="checkbox" name="capsula" id="capsula" value="0"/></th>
                          <th><input type="checkbox" name="corteinfo" id="corteinfo" value="0"/></th>
                          <th><input type="checkbox" name="audio" id="audio"value="0"/></th>
                          <th><input type="checkbox" name="imagen" id="imagen" value="0"/></th>
                          <td><input class="validate[required] radio" type="radio" name="calificacion" value="1" /> Positiva<br>
                              <input class="validate[required] radio" type="radio" name="calificacion" value="0" /> Negativa</td>
                          <th>
                              <input type="text" value="" size="30" name="Evidencia" id="Evidencia"/><br>
                              <input type="file" size="25" name="Evidencia" id="evidencia"/>
                          </th>
                          </tr>
                   </table>
             </div><!-- fin div calificacionbox-->
         </fieldset>
         <div id="nocalificadobox_el">  
              <table class="ui-state-highlight">
                  <tr>
                     <td><span class="contenedores"> Fecha de publicación:</span>
                         <input class="validate[required,custom[date]] text-input" type="text" name="fecha" id="datepicker_actualizar_electronicos" size="10" maxlength="11" value="" /></td>   
                     <td><span class="contenedores">Agregar Comentarios</span><img name="comentario_el" id="comentario_el" src="http://10.1.17.10/boletines/imagenes/comments.png" title="Escribir un comentario (OPCIONAL)"></td>
                     
                     <td><input name="actualizar_electronicos" type="submit" id="actualizar_electronicos" value="Guardar"/></td>
                  </tr>
              </table>
         </div> 
                  
         <div id="comentariobox_el">    
              <center>Observaciones:<br>
              <textarea name="comentarios" id="comentarios" cols="60" rows="3"></textarea></center>
         </div>
     </form>
</div><!-- FIN SubDIV -->  
   
<div id="agregar_medioel" name="agregar_medioel">
      <form class="ocultos" name="agregar_medio_electronico" id="agregar_medio_electronico" method="post" action="agregar_medio_electronico">
          Nombre:<input size="" name="nombremedio" type="text" value="" id="nombremedio" class="validate[required] text-input" />
          <input name="agregar_mel" type="submit" id="agregar_mel" value="Agregar"/>
      </form>
</div>

</div><!-- FIN tab-2 -->

</div><!-- FIN tabs -->


</section><!-- row -->

