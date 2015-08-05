<!-- this section shows you most of the styled elements from the general stylesheet -->
    <h2 class="width_16 col"></h2>
    <div class="col col_11">
        <article>
            <h1>GRÁFICA DE RESULTADOS</h1>
            <!-- GRAFICA TIPO PIE MEDIOS ESCRITOS -->
            <?php include "libchart/libchart/classes/libchart.php";?>
            <?php $chartPais2 = new PieChart(460,260); ?>
            <?php $dataSetPaises2 = new XYDataSet(); ?>                  
            <?php foreach($num_boletines_medios_electronicos as $item2) :?>
                <?php $dataSetPaises2->addPoint(new Point($item2->nombremedio ." ( ". $item2->cantidad2 ." )", $item2->cantidad2)); ?>
                <?php $chartPais2->setDataSet($dataSetPaises2); ?>
            <?php endforeach;?>
            <?php $chartPais2->setTitle("MEDIOS ELECTRONICOS (publicaciones)"); ?>
            <?php $chartPais2->render("libchart/demo/generated/boletines_electronicos.png"); ?>

            
            <img src="http://10.1.17.10/boletines/libchart/demo/generated/boletines_electronicos.png">
        </article>
    </div><!-- col_11 -->
</section><!-- row -->