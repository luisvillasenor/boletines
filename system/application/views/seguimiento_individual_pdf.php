<!DOCTYPE HTML>

    <head>
    <meta charset="UTF-8"> 
        
    <title>Sistema de Seguimiento a Comunicados (SECTURE)</title>
    
    <script src="<?php echo base_url();?>js/modernizr-1.7.min.js"></script><!-- this is the javascript allowing html5 to run in older browsers -->
    
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



    </style>

    

    </head>

<body>

<div class="row">
    <h1 class="width_16 col">
        <?php foreach($get_boletin as $item_combo_lista):?>
        <?php foreach($combo_boletines as $item_boletin):?>
        <?php if ($item_boletin->numero_boletin == $item_combo_lista->numero_boletin) { ?>
              <?php echo $item_boletin->titulo_boletin; ?>
        <?php } ?>
        <?php endforeach; ?>
        <?php endforeach; ?>
    </h1>
    <div class="col col_16">
        <div>
            <h2>Historial de Seguimientos</h2>
            Registros encontrados: <?php echo $record_count_seg; ?>
            
                <table id="customers" class="ui-corner-all">
                    <tr>
                        <th>Fecha</th>
                        <th>Medio</th>
                        <th>PaginaPrincipal</th>
                        <th>Interiroes</th>
                        <th>Columna</th>
                        <th>Foto</th>
                        <th>Texto</th>
                        <th>Calificacion</th>
                        <th>Comentarios</th>
                        <th>Evidencias</th>
                    </tr>
                    <tbody align="center">
                        <?php foreach($get_seg_ind as $item_combo_lista):?>
                        <tr>
                        <td><?php echo $item_combo_lista->fecha; ?></td>
                        <td>
                            <?php foreach ($combo_medios as $item_medio):?>
                                    <?php if ($item_medio->id == $item_combo_lista->nombremedio) { ?>
                                        <?php echo $item_medio->nombremedio; ?><br>
                                        (
                                                <?php 
                                                    switch ($item_medio->alcance) {
                                                        case '0':?>
                                                          --
                                                    <?php break;
                                                        case '1':?>
                                                          Estatal
                                                    <?php break;
                                                        case '2':?>
                                                          Nacional
                                                    <?php        break;
                                                    }
                                                ?>
                                        )
                                    <?php } ?>                                                                
                            <?php endforeach; ?>
                        </td>
                        
                        <?php switch ($item_combo_lista->pp){
                            case 0:?>  
                                <td></td>
                                <?php break;

                            case 1: ?>
                                <td><img src="/opt/lampp/htdocs/boletines/imagenes/ticks.png"></td>
                                
                                <?php break;
                        }?> 
                        <?php switch ($item_combo_lista->interiores){
                            case 0:?>  
                                <td></td>
                                <?php break;

                            case 1: ?>
                                <td><img src="<?php echo $_SERVER["DOCUMENT_ROOT"].'boletines/imagenes/tick.png';?>"></td>
                                <?php break;
                        }?>
                        <?php switch ($item_combo_lista->columna){
                            case 0:?>  
                                <td></td>
                                <?php break;

                            case 1: ?>
                                <td><img src="<?php echo $_SERVER["DOCUMENT_ROOT"].'boletines/imagenes/tick.png';?>"></td>
                                <?php break;
                        }?>
                        <?php switch ($item_combo_lista->foto){
                            case 0:?>  
                                <td></td>
                                <?php break;

                            case 1: ?>
                                <td><img src="<?php echo $_SERVER["DOCUMENT_ROOT"].'boletines/imagenes/tick.png';?>"></td>
                                <?php break;
                        }?>
                        <?php switch ($item_combo_lista->texto){
                            case 0:?>  
                                <td></td>
                                <?php break;

                            case 1: ?>
                                <td><img src="<?php echo $_SERVER["DOCUMENT_ROOT"].'boletines/imagenes/tick.png';?>"></td>
                                <?php break;
                        }?>
                        <?php switch ($item_combo_lista->calificacion){
                            case 0:?>  
                                <td><img src="<?php echo $_SERVER["DOCUMENT_ROOT"].'boletines/imagenes/icon-16-deny.png';?>" title="Calificación NEGATIVA"></td>
                                <?php break;

                            case 1: ?>
                                <td><img src="<?php echo $_SERVER["DOCUMENT_ROOT"].'boletines/imagenes/new.png';?>" title="Calificación POSITIVA"></td>
                                <?php break;
                        }?>
                        <td><?php echo $item_combo_lista->comentarios; ?></td>
                        <td>
                            <?php foreach ($get_all_evidencias_escritos as $item_evidencia):?>
                                    <?php if ($item_evidencia->idSegEsc == $item_combo_lista->id) { ?>
                                        <?php if ($item_evidencia->ext == '.pdf') { ?>                                            
                                                
                                                  <p>Archivo: <?php echo $item_evidencia->img_name;?><?php echo $item_evidencia->ext;?></p>
                                                                                                   
                                                
                                          <?php }else{ ?>
                                                
                                                  <p>Archivo: <?php echo $item_evidencia->img_name;?><?php echo $item_evidencia->ext;?></p>

                                                
                                          <?php } ?> 
                                    <?php } ?>                                                                
                            <?php endforeach; ?>
                        </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </p>
        </div>  
    </div><!-- col_16 -->

    

</div><!-- row -->    

</body>
</html>