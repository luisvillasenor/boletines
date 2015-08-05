<!-- this section shows you most of the styled elements from the general stylesheet -->
    <div class="col col_8">
        <!-- GRAFICA TIPO PIE MEDIOS ESCRITOS -->
        <?php include "libchart/libchart/classes/libchart.php";?>
        <?php if (isset($num_boletines_medios_escritos)) { ?>
            <article>
            <h1></h1>
                <!-- GRAFICA TIPO PIE MEDIOS ESCRITOS -->
                <?php $chartPais = new PieChart(460,260); ?>
                <?php $dataSetPaises = new XYDataSet(); $i = 0;?> 
                <?php $estatal = ''; $nacional = ''; ?>                 
                <?php foreach($num_boletines_medios_escritos as $item) :?>
                <?php foreach($medios_model as $item_medios) :?>
                <?php if ($item->nombremedio == $item_medios->id) {                        
                    $i += $item->cantidad ;
                    switch ($item_medios->alcance) {
                    case '1':
                        # code...
                        $dataSetPaises->addPoint(new Point($item_medios->nombremedio ." ( Est )" ." ( ". $item->cantidad ." )", $item->cantidad));
                        $chartPais->setDataSet($dataSetPaises);
                        $estatal += $item->cantidad;
                        break;
                    case '2':
                        # code...
                        $dataSetPaises->addPoint(new Point($item_medios->nombremedio ." ( Nac )" ." ( ". $item->cantidad ." )", $item->cantidad));
                        $chartPais->setDataSet($dataSetPaises);
                        $nacional += $item->cantidad;
                        break;                    
                    default:
                        # code...
                        break;
                }
                } ?>                    
                <?php endforeach;?>
                <?php endforeach;?>
                <h2><?php echo "TOTAL PUBLICADOS: ", $i; ?></h2>
                <?php $chartPais->setTitle("MEDIOS ESCRITOS (publicaciones)"); ?>
                <?php $chartPais->render("libchart/demo/generated/boletines_escritos.png"); ?>
                <img src="<?php echo base_url();?>libchart/demo/generated/boletines_escritos.png">
                <h2>
                <?php echo "ESTATALES: ", $estatal; ?></br>
                <?php echo "NACIONALES: ", $nacional; ?>
            </h2>
            </article>

            <article>
                <h1></h1>
                <!-- GRAFICA TIPO PIE MEDIOS ESCRITOS -->
                <?php $chartPais = new PieChart(460,260); ?>
                <?php $dataSetPaises = new XYDataSet(); ?>
                <?php foreach($get_escritos_calificacion_rango as $item) :?>
                
                <?php 
                    switch ($item->calificacion) {
                        case '0':
                            # code...
                            $dataSetPaises->addPoint(new Point('NEGATIVOS', $item->total));
                            $chartPais->setDataSet($dataSetPaises);
                            break;
                        case '1':
                            # code...
                            $dataSetPaises->addPoint(new Point('POSITIVOS', $item->total));
                            $chartPais->setDataSet($dataSetPaises);
                            break;                    
                        default:
                            # code...
                            break;
                    }                
                ?>

                <?php endforeach;?>
                
                <h2></h2>
                <?php $chartPais->setTitle("POSITIVOS Y NEGATIVOS"); ?>
                <?php $chartPais->render("libchart/demo/generated/boletines_escritos_positivos.png"); ?>
                <img src="<?php echo base_url();?>libchart/demo/generated/boletines_escritos_positivos.png">
            </article>            
            
            <?php } else { ?>
                <h2></h2>
            <?php } ?>
        </div>
            <div class="col col_8">            

        <?php if (isset($num_boletines_medios_electronicos)) { ?>
            <article>
            <h1></h1>
                <!-- GRAFICA TIPO PIE MEDIOS ELECTRONICOS -->
                <?php $chartPais2 = new PieChart(460,260); ?>
                <?php $dataSetPaises2 = new XYDataSet(); $i2 = 0;?> 
                <?php $estatal2 = ''; $nacional2 = ''; ?>                 
                <?php foreach($num_boletines_medios_electronicos as $item2) :?>
                <?php foreach($medios_model as $item_medios) :?>
                <?php if ($item2->nombremedio == $item_medios->id) {                    
                    $i2 += $item2->cantidad2 ;
                    switch ($item_medios->alcance) {
                    case '1':
                        # code...
                        $dataSetPaises2->addPoint(new Point($item_medios->nombremedio ." ( Est )" ." ( ". $item2->cantidad2 ." )", $item2->cantidad2));
                        $chartPais2->setDataSet($dataSetPaises2);
                        $estatal2 += $item2->cantidad2;
                        break;
                    case '2':
                        # code...
                        $dataSetPaises2->addPoint(new Point($item_medios->nombremedio ." ( Nac )" ." ( ". $item2->cantidad2 ." )", $item2->cantidad2));
                        $chartPais2->setDataSet($dataSetPaises2);
                        $nacional2 += $item2->cantidad2;
                        break;                    
                    default:
                        # code...
                        break;
                }
                } ?>                    
                <?php endforeach;?>
                <?php endforeach;?>
                <h2><?php echo "TOTAL PUBLICADOS: ", $i2; ?></h2>
                <?php $chartPais2->setTitle("MEDIOS ELECTRONICOS (publicaciones)"); ?>
                <?php $chartPais2->render("libchart/demo/generated/boletines_electronicos.png"); ?>
                <img src="<?php echo base_url();?>libchart/demo/generated/boletines_electronicos.png">
                </p>
        <h2>
            <?php echo "ESTATALES: ", $estatal2; ?></br>
            <?php echo "NACIONALES: ", $nacional2; ?>
        </h2>
            </article>
        <article>
            <h1></h1>
            <!-- GRAFICA TIPO PIE MEDIOS ESCRITOS -->
            <?php $chartPais = new PieChart(460,260); ?>
            <?php $dataSetPaises = new XYDataSet(); ?>
            
            <?php foreach($get_electronicos_calificacion_rango as $item) :?>
            
            <?php 
                switch ($item->calificacion) {
                    case '0':
                        # code...
                        $dataSetPaises->addPoint(new Point('NEGATIVOS', $item->total));
                        $chartPais->setDataSet($dataSetPaises);
                        break;
                    case '1':
                        # code...
                        $dataSetPaises->addPoint(new Point('POSITIVOS', $item->total));
                        $chartPais->setDataSet($dataSetPaises);
                        break;                    
                    default:
                        # code...
                        break;
                }                
            ?>
            <?php endforeach;?>
            <h2></h2>
            <?php $chartPais->setTitle("POSITIVOS Y NEGATIVOS"); ?>
            <?php $chartPais->render("libchart/demo/generated/boletines_electro_positivos.png"); ?>
            <img src="<?php echo base_url();?>libchart/demo/generated/boletines_electro_positivos.png">
        </article>            
            <?php } else { ?>
                <article>
                <h2></h2>
                </article>
            <?php } ?>
        
</div><!-- col_14 -->

<section class="col col_16">
        <article>
            <h2><?php
		if(isset($i) == false OR isset($i) == null){
			$i = 0;
		}
if(isset($i2) == false OR isset($i2) == null){
			$i2 = 0;
		}
 echo "TOTAL PUBLICADOS: ", $i + $i2; ?></h2>
        </article>
    </section>
    <a href="<?php echo base_url();?>boletin_controller/pdf2/<?php echo $f_ini;?>/<?php echo $f_fin;?>"><img style="width:64px" src="<?php echo base_url();?>imagenes/LogoPDF.png"></a>    
</section><!-- row -->
