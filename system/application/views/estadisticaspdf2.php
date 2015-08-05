<!DOCTYPE HTML>

    <head>
    <meta charset="ISO-8859-1"> 
        
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
<!-- this div shows you most of the styled elements from the general stylesheet -->
    <div class="col col_8">
        <!-- GRAFICA TIPO PIE MEDIOS ESCRITOS -->
        <?php include "libchart/libchart/classes/libchart.php";?>
        <?php if (isset($num_boletines_medios_escritos)) { ?>
            <div>
            <h1>GRAFICAS DE COMUNICADOS</h1>
                <!-- GRAFICA TIPO PIE MEDIOS ESCRITOS -->
                <?php $chartPais = new PieChart(600,260); ?>
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
            </div>
            <div>
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
            </div>
            
            <?php } else { ?>
                <h2></h2>
            <?php } ?>
        </div>
            <div class="col col_8">            

        <?php if (isset($num_boletines_medios_electronicos)) { ?>
            <div>
            <h1></h1>
                <!-- GRAFICA TIPO PIE MEDIOS ELECTRONICOS -->
                <?php $chartPais2 = new PieChart(600,260); ?>
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
            </div>
            <div>
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
        </div>  
            <?php } else { ?>
                <div>
                <h2></h2>
                </div>
            <?php } ?>
        
</div><!-- col_14 -->

<div class="col col_16">
        <div>
            <h2><?php
		if(isset($i) == false OR isset($i) == null){
			$i = 0;
		}
if(isset($i2) == false OR isset($i2) == null){
			$i2 = 0;
		}
 echo "TOTAL PUBLICADOS: ", $i + $i2; ?></h2>
        </div>
    </div>
      
</div><!-- row -->



</body>
</html>