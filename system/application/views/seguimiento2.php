<section class="row">
  <!-- MENU OPERACIONES -->
  <?php include "system/application/views/menu_operaciones.php";?>
    <h2 class="width_16 col"></h2>
    <div class="col col_8">
        <article>
            <h1>REGISTRAR SEGUIMIENTO <br><small>(MEDIOS ESCRITOS)</small></h1>
            <div class="clear" style="height:10px;"></div> 
            <div class="">
                <form name="agregar_seguimiento" class="formular" id="agregar_seguimiento" method="post" action="<?php echo base_url();?>boletin_controller/agregar_seguimiento"> 
                    <label>Seleccione Comunicado:</label>
                    <select name="numero_boletin" id="numero_boletin" class="validate[required]">
                      <option></option>
                      <?php foreach($combo_boletines as $item_combo_boletines):?>
                        <option value="<?php echo $item_combo_boletines->numero_boletin; ?> "><?php echo $item_combo_boletines->numero_boletin;?>  .-  <?php echo substr($item_combo_boletines->titulo_boletin, 0, 24);?>...</option>
                      <?php endforeach; ?>
                    </select>
                    <div class="clear" style="height:10px;"></div>                    
                    <label>Seleccione Medio:</label>
                    <select name="nombremedio" class="validate[required]">
                      <option></option>
                        <?php foreach($combo_medios_escritos as $item_combo_escritos):?>
                         <option value="<?php echo $item_combo_escritos->id; ?>"><?php echo $item_combo_escritos->nombremedio;?>
                          ( <?php                           
                              switch ($item_combo_escritos->alcance) {
                                case '0':?>
                                  ---
                          <?php break;
                                case '1':?>
                                  Estatal
                          <?php break;
                                case '2':?>
                                  Nacional
                          <?php break;
                              }
                         ?> )</option>
                        <?php endforeach; ?>
                    </select>
                    <div class="clear" style="height:10px;"></div>
                    <label>Fecha de Publicación</label>
                    <input class="validate[required] text-input" type="text" name="fecha" id="datepicker_actualizar_escritos" size="10" maxlength="11" value="" />
                    <div class="clear" style="height:10px;"></div>
                    <table id="customers">
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
                        <th>
                          <input class="validate[required] radio" type="radio" name="calificacion" value="1" /> Positiva<br>
                          <input class="validate[required] radio" type="radio" name="calificacion" value="0" /> Negativa
                        </th>
                      </tr>          
                    </table>
                    <div class="clear" style="height:10px;"></div>
                    <label>Comentarios Adicionales</label>
                    <div><textarea rows="4" cols="50" name="comentarios"></textarea></div>
                    <div class="clear" style="height:10px;"></div> 
                    <button type="submit" class="btn btn-default btn-sm">
                      <span class="glyphicon glyphicon-sound-5-1"></span> Guardar
                    </button>
                </form>
            </div>
        </article>        
    </div><!-- col_8 -->
    <div class="col col_8">
        <article>
        <h1>REGISTRAR SEGUIMIENTO <br><small>(MEDIOS ELECTRONICOS)</small></h1>
        <div class="clear" style="height:10px;"></div> 
        <div class="">
            <form name="agregar_seguimiento_electronicos" class="formular" id="agregar_seguimiento_electronicos" method="post" action="<?php echo base_url();?>boletin_controller/agregar_seguimiento_electronicos"> 
                <label>Seleccione Comunicado:</label>
                <select name="numero_boletin" id="numero_boletin" class="validate[required]">
                  <option></option>
                  <?php foreach($combo_boletines as $item_combo_boletines):?>
                  <option value="<?php echo $item_combo_boletines->numero_boletin; ?> "><?php echo $item_combo_boletines->numero_boletin;?>  .-  <?php echo substr($item_combo_boletines->titulo_boletin, 0, 24);?>...</option>
                  <?php endforeach; ?>
                </select>
                <div class="clear" style="height:10px;"></div>                             
                <label>Seleccione Medio:</label>
                <select name="nombremedio" class="validate[required]">
                  <option></option>
                  <?php foreach($combo_medios_electronicos as $item_combo_electronicos):?>
                      <option value="<?php echo $item_combo_electronicos->id; ?>"><?php echo $item_combo_electronicos->nombremedio;?>( <?php                           
                              switch ($item_combo_electronicos->alcance) {
                                case '0':?>
                                  ---
                          <?php break;
                                case '1':?>
                                  Estatal
                          <?php break;
                                case '2':?>
                                  Nacional
                          <?php break;
                              }
                         ?> )
                      </option>
                  <?php endforeach; ?>
                </select>
                <div class="clear" style="height:10px;"></div>
                <label>Fecha de Publicación</label>
                <input class="validate[required] text-input" type="text" name="fecha" id="datepicker_actualizar_electronicos" size="10" maxlength="11" value="" />
                <div class="clear" style="height:10px;"></div>
                <table id="customers">
                  <tr>
                    <th>Teasser</th>                            
                    <th>Cota</th>                      
                    <th>Capsula</th>
                    <th>Corte Informativo</th>
                    <th>Audio</th>
                    <th>Imagen</th>
                    <th>Calificacion</th>
                  </tr>
                  <tr>              
                    <th><input class="validate[maxCheckbox[5]] checkbox" type="checkbox" name="teasser" id="teasser"/></th>
                    <th><input class="validate[maxCheckbox[5]] checkbox" type="checkbox" name="nota" id="nota"/></th>
                    <th><input class="validate[maxCheckbox[5]] checkbox" type="checkbox" name="capsula" id="capsula"/></th>
                    <th><input class="validate[maxCheckbox[5]] checkbox" type="checkbox" name="corteinfo" id="corteinfo"/></th>
                    <th><input class="validate[maxCheckbox[5]] checkbox" type="checkbox" name="audio" id="audio"/></th>
                    <th><input class="validate[maxCheckbox[5]] checkbox" type="checkbox" name="imagen" id="imagen"/></th>
                    <th>
                    <input class="validate[required] radio" type="radio" name="calificacion" value="1" /> Positiva<br>
                    <input class="validate[required] radio" type="radio" name="calificacion" value="0" /> Negativa
                    </th>
                  </tr>          
                </table>
                <div class="clear" style="height:10px;"></div>
                <label>Comentarios Adicionales</label>
                <div><textarea rows="4" cols="50" name="comentarios_el"></textarea></div>
                <div class="clear" style="height:10px;"></div>
                  <button type="submit" class="btn btn-default btn-sm">
                  <span class="glyphicon glyphicon-sound-5-1"></span> Guardar
                </button>
            </form>
        </div>
        </article>        
    </div><!-- col_8 -->  
</section><!-- row -->

