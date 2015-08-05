
<section class="row">
    <h2 class="width_16 col"></h2>
   
        
    <div id="tabs">
  <ul>
    <li><a href="#tabs-1">BITÁCORA DE SEGUIMIENTOS</a></li>
    <li><a href="#tabs-2">LISTA BOLETINES</a></li>
  </ul>

  <div id="tabs-1"> 
   <code>  <input type="checkbox" id="tipo_escrito" > Medios Escritos </code>

    <div id="medioescrito"> 
          <center><span class="titulo">LISTADO DE REGISTROS BOLETINES MEDIOS ESCRITOS</span></center><p>
            <table class="ui-state-highlight">
                    <thead>
                        <tr>
                            
                            <th>Número de boletin</th>
                            <th>Nombre del medio</th>
                            <th>Fecha</th>
                            <th>Página principal</th>                            
                            <th>Interiores</th>                      
                            <th>Columna</th>
                            <th>Foto</th>
                            <th>Texto</th>
                            <th>Calificación</th>
                            <th>Evidencia</th>
                            <th>Editar</th>
                            
                        </tr>
                    </thead>
                    <tbody align="center">
                        <?php foreach($combo_lista as $item_combo_lista):?>
                        <tr>
                        
                        <td><?php echo $item_combo_lista->numero_boletin; ?></td>
                        <td><?php echo $item_combo_lista->nombremedio; ?></td>
                        <td><?php echo $item_combo_lista->fecha; ?></td>
                        <?php switch ($item_combo_lista->pp){
                            case 0:?>  
                                <td><img src="<?php echo base_url();?>imagenes/no.png" title="El boletín NO fue publicado"></td>
                                <?php break;

                            case 1: ?>
                                <th><img src="<?php echo base_url();?>imagenes/yes.png" title="El boletín SI fue publicado"></th>
                                <?php break;
                        }?> 
                        <?php switch ($item_combo_lista->interiores){
                            case 0:?>  
                                <td><img src="<?php echo base_url();?>imagenes/no.png" title="El boletín NO fue publicado"></td>
                                <?php break;

                            case 1: ?>
                                <th><img src="<?php echo base_url();?>imagenes/yes.png" title="El boletín SI fue publicado"></th>
                                <?php break;
                        }?>
                        <?php switch ($item_combo_lista->columna){
                            case 0:?>  
                                <td><img src="<?php echo base_url();?>imagenes/no.png" title="El boletín NO fue publicado"></td>
                                <?php break;

                            case 1: ?>
                                <th><img src="<?php echo base_url();?>imagenes/yes.png" title="El boletín SI fue publicado"></th>
                                <?php break;
                        }?>
                        <?php switch ($item_combo_lista->foto){
                            case 0:?>  
                                <td><img src="<?php echo base_url();?>imagenes/no.png" title="El boletín NO fue publicado"></td>
                                <?php break;

                            case 1: ?>
                                <th><img src="<?php echo base_url();?>imagenes/yes.png" title="El boletín SI fue publicado"></th>
                                <?php break;
                        }?>
                        <?php switch ($item_combo_lista->texto){
                            case 0:?>  
                                <td><img src="<?php echo base_url();?>imagenes/no.png" title="El boletín NO fue publicado"></td>
                                <?php break;

                            case 1: ?>
                                <th><img src="<?php echo base_url();?>imagenes/yes.png" title="El boletín SI fue publicado"></th>
                                <?php break;
                        }?>
                        <?php switch ($item_combo_lista->calificacion){
                            case 0:?>  
                                <td><img src="<?php echo base_url();?>imagenes/no.png" title="El boletín NO fue publicado"></td>
                                <?php break;

                            case 1: ?>
                                <th><img src="<?php echo base_url();?>imagenes/yes.png" title="El boletín SI fue publicado"></th>
                                <?php break;
                        }?>
        
                        <td><?php echo $item_combo_lista->Evidencia; ?></td>
                        <td>
                            <form action="editar_seguimiento" method="post">
                              <input name="id" id="id" type="hidden" value="<?php echo $item_combo_lista->id; ?>"/>
                              <button type="submit" value="Submit"><img src="<?php echo base_url();?>imagenes/edit.png" alt="submit" ></button>
                            </form>
                        </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
            </table> 
    </div>
     <code><input type="checkbox" id= "tipo_electronico"> Medios Electrónicos </code>
        
        <div id="medioelectronico">
         <center><span class="titulo">LISTADO DE REGISTROS BOLETINES MEDIOS ELECTRÓNICOS </span></center><p>
           
            <table class="ui-state-highlight">
                    <thead>
                        <tr>
                            <th>Número de boletin</th>
                            <th>Nombre del medio</th>
                            <th>Fecha</th>
                            <th>Teasser</th>                            
                            <th>Nota</th>                      
                            <th>Capsula</th>
                            <th>Corte Informativo</th>
                            <th>Audio</th>
                            <th>Imagen</th>
                            <th>Calificación</th>
                            <th>Evidencia</th>
                            <th>Editar</th>
                            
                        </tr>
                    </thead>
                    <tbody align="center">
                        <?php foreach($combo_lista_el as $item_combo_lista_el):?>
                        <tr>
                        
                        <td><?php echo $item_combo_lista_el->numero_boletin; ?></td>
                        <td><?php echo $item_combo_lista_el->nombremedio; ?></td>
                        <td><?php echo $item_combo_lista_el->fecha; ?></td>
                        <?php switch ($item_combo_lista_el->teasser){
                            case 0:?>  
                                <td><img src="<?php echo base_url();?>imagenes/no.png" title="El boletín NO fue publicado"></td>
                                <?php break;

                            case 1: ?>
                                <th><img src="<?php echo base_url();?>imagenes/yes.png" title="El boletín SI fue publicado"></th>
                                <?php break;
                        }?>
                        <?php switch ($item_combo_lista_el->nota){
                            case 0:?>  
                                <td><img src="<?php echo base_url();?>imagenes/no.png" title="El boletín NO fue publicado"></td>
                                <?php break;

                            case 1: ?>
                                <th><img src="<?php echo base_url();?>imagenes/yes.png" title="El boletín SI fue publicado"></th>
                                <?php break;
                        }?>
                        <?php switch ($item_combo_lista_el->capsula){
                            case 0:?>  
                                <td><img src="<?php echo base_url();?>imagenes/no.png" title="El boletín NO fue publicado"></td>
                                <?php break;

                            case 1: ?>
                                <th><img src="<?php echo base_url();?>imagenes/yes.png" title="El boletín SI fue publicado"></th>
                                <?php break;
                        }?>
                        <?php switch ($item_combo_lista_el->corteinfo){
                            case 0:?>  
                                <td><img src="<?php echo base_url();?>imagenes/no.png" title="El boletín NO fue publicado"></td>
                                <?php break;

                            case 1: ?>
                                <th><img src="<?php echo base_url();?>imagenes/yes.png" title="El boletín SI fue publicado"></th>
                                <?php break;
                        }?>
                        <?php switch ($item_combo_lista_el->audio){
                            case 0:?>  
                                <td><img src="<?php echo base_url();?>imagenes/no.png" title="El boletín NO fue publicado"></td>
                                <?php break;

                            case 1: ?>
                                <th><img src="<?php echo base_url();?>imagenes/yes.png" title="El boletín SI fue publicado"></th>
                                <?php break;
                        }?>
                        <?php switch ($item_combo_lista_el->imagen){
                            case 0:?>  
                                <td><img src="<?php echo base_url();?>imagenes/no.png" title="El boletín NO fue publicado"></td>
                                <?php break;

                            case 1: ?>
                                <th><img src="<?php echo base_url();?>imagenes/yes.png" title="El boletín SI fue publicado"></th>
                                <?php break;
                        }?>
                        <?php switch ($item_combo_lista_el->calificacion){
                            case 0:?>  
                                <td><img src="<?php echo base_url();?>imagenes/no.png" title="El boletín NO fue publicado"></td>
                                <?php break;

                            case 1: ?>
                                <th><img src="<?php echo base_url();?>imagenes/yes.png" title="El boletín SI fue publicado"></th>
                                <?php break;
                        }?>
                        
                        <td><?php echo $item_combo_lista_el->Evidencia; ?></td>
                        <td>
                            <form action="editar_seguimiento_electronicos" method="post">
                              <input name="id" id="id" type="hidden" value="<?php echo $item_combo_lista_el->id; ?>"/>
                              <button type="submit" value="Submit"><img src="<?php echo base_url();?>imagenes/edit.png" alt="submit" ></button>
                            </form>
                        </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
            </table>
    </div>  
  </div><!-- FIN tab-1 -->
  
    <!--********************************************************************************************************************
    ********************************************************************************************************************
    ********************************************************************************************************************-->
        <div id="tabs-2"> 
      <div> 
        <center><span class="titulo">LISTADO BOLETINES</span></center>
        <table class="ui-state-highlight">
                <thead>
                    <tr>
                        
                        <th>Número de boletín</th>
                        <th>Titulo del boletín</th>
                        
                    </tr>
                </thead>
                <tbody align="center">
                    <?php foreach($combo_boletines as $item_combo_boletines):?>
                    <tr>
                    
                    <td><?php echo $item_combo_boletines->numero_boletin; ?></td>
                    <td><?php echo $item_combo_boletines->titulo_boletin; ?></td>
                    
                    </tr>
                    <?php endforeach; ?>
                </tbody>
        </table>
      <div><!--fin subDiv -->  
        </div><!-- FIN tab-2 -->
    </div><!-- FIN tabs -->

</section><!-- row -->
