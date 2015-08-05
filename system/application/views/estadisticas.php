<!-- this section shows you most of the styled elements from the general stylesheet -->
    <div class="col col_8">
        <article>
            <h1></h1>
            <!-- GRAFICA TIPO PIE MEDIOS ESCRITOS -->
            <?php include "libchart/libchart/classes/libchart.php";?>
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
            <h2><?php echo "COMUNICADOS ESCRITOS PUBLICADOS: ", $i; ?></h2>
            <?php $chartPais->setTitle("EN MEDIOS ESCRITOS"); ?>
            <?php $chartPais->render("libchart/demo/generated/boletines_escritos.png"); ?>
            <img src="<?php echo base_url();?>libchart/demo/generated/boletines_escritos.png">
        </article>

        <article>
            <h1></h1>
            <!-- GRAFICA TIPO PIE MEDIOS ESCRITOS -->
            <?php $chartPais = new PieChart(460,260); ?>
            <?php $dataSetPaises = new XYDataSet(); ?>
            <?php foreach($get_escritos_calificacion as $item) :?>
            
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
            <h2>
                <?php echo "ESTATALES: ", $estatal; ?></br>
                <?php echo "NACIONALES: ", $nacional; ?>
            </h2>

    </div><!-- col_11 -->

    <div class="col col_8">
        <article>
            <h1></h1>
            <!-- GRAFICA TIPO PIE MEDIOS ELECTRONICOS -->
            <?php $chartPais = new PieChart(460,260); ?>
            <?php $dataSetPaises = new XYDataSet(); $i2 = 0;?>
            <?php $estatal2 = ''; $nacional2 = ''; ?>
            <?php foreach($num_boletines_medios_electronicos as $item) :?>
            <?php foreach($medios_model as $item_medios) :?>
            <?php if ($item->nombremedio == $item_medios->id) {                
                $i2 += $item->cantidad2 ;
                switch ($item_medios->alcance) {
                    case '1':
                        # code...
                        $dataSetPaises->addPoint(new Point($item_medios->nombremedio ." ( Est )" ." ( ". $item->cantidad2 ." )", $item->cantidad2));
                        $chartPais->setDataSet($dataSetPaises);
                        $estatal2 += $item->cantidad2;
                        break;
                    case '2':
                        # code...
                        $dataSetPaises->addPoint(new Point($item_medios->nombremedio ." ( Nac" ." ( ". $item->cantidad2 ." )", $item->cantidad2));
                        $chartPais->setDataSet($dataSetPaises);
                        $nacional2 += $item->cantidad2;
                        break;                    
                    default:
                        # code...
                        break;
                }
            } ?>   
            <?php endforeach;?>
            <?php endforeach;?>
            <h2><?php echo "COMUNICADOS ELECTRÓNICOS PUBLICADOS: ", $i2; ?></h2>
            <?php $chartPais->setTitle("EN MEDIOS ELECTRONICOS"); ?>
            <?php $chartPais->render("libchart/demo/generated/boletines_electronicos.png"); ?>
            <img src="<?php echo base_url();?>libchart/demo/generated/boletines_electronicos.png">            
        </article>

        <article>
            <h1></h1>
            <!-- GRAFICA TIPO PIE MEDIOS ESCRITOS -->
            <?php $chartPais = new PieChart(460,260); ?>
            <?php $dataSetPaises = new XYDataSet(); ?>
            
            <?php foreach($get_electronicos_calificacion as $item) :?>
            
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

        </p>
        <h2>
            <?php echo "ESTATALES: ", $estatal2; ?></br>
            <?php echo "NACIONALES: ", $nacional2; ?>
        </h2>
        
    </div><!-- col_11 -->
    <section class="col col_16">
        <article>
            <h2><?php echo "TOTAL PUBLICADOS: ", $i+$i2; ?></h2>
        </article>
    </section>

    <a href="<?php echo base_url();?>boletin_controller/pdf"><img style="width:64px" src="<?php echo base_url();?>imagenes/LogoPDF.png"></a>

</section><!-- row -->

