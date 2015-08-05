<footer class="row">
	<div class="col_16 col">Secretaría de Turismo del Estado de Aguascalientes &copy; 2012-2015</div>
</footer>


<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.6.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui-1.8.18.custom.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
    
 
    <script type="text/javascript" charset="utf-8">
        
        $(document).ready(function(){

            //oculta contenedores
            $("#medioescrito").hide();
            $("#medioelectronico").hide();

           //activa contenedores     
            $("#tipo_escrito").click(function(){
                $("#medioescrito").delay(400).slideToggle();
            });    
            $("#tipo_electronico").click(function(){
                $("#medioelectronico").delay(400).slideToggle();
            });
                
          
           // binds form submission and fields to the validation engine
            $("#agregar_seguimiento").validationEngine();
            $("#agregar_boletin").validationEngine();
            $("#agregar_medio_escrito").validationEngine();

            $("#agregar_seguimiento_electronicos").validationEngine();
            $("#agregar_boletin_el").validationEngine();
            $("#agregar_medio_electronico").validationEngine();

           //Inicializa contenedores ocultos
            $("#comentariobox").hide();
            $("#agregar_boletin").hide();
            $("#comentariobox_el").hide();
            $("#agregar_boletin_el").hide();
            $("#agregar_medioes").hide();
            $("#agregar_medio_electronico").hide();
            //$("#calilificacionbox").hide();
            //$("#nocalificadobox").hide();
            //$("#calilificacionbox_el").hide();
            //$("#nocalificadobox_el").hide();

           //Activa Contenedores ocultos
            $("#comentario").click(function(){
                $("#comentariobox").delay(400).slideToggle();
            });    
            $("#comentario_el").click(function(){
                $("#comentariobox_el").delay(400).slideToggle();    
            });    
            $("#agregar_b").click(function(){
                $("#agregar_boletin").delay(400).slideToggle();
            });   
            $("#agregar_b_el").click(function(){
                $("#agregar_boletin_el").delay(400).slideToggle();
            });
            $("#agregar_m_e").click(function(){
                $("#agregar_medioes").delay(400).slideToggle();
            }); 
             $("#agregar_m_el").click(function(){
                $("#agregar_medio_electronico").delay(400).slideToggle();
            });
            $("#si_publicado").click(function(){
                $("#calilificacionbox").delay(400).slideToggle();
                $("#nocalificadobox").delay(400).slideToggle();
            });
            $("#no_publicado").click(function(){
                $("#nocalificadobox").delay(400).slideToggle();
            });  
            $("#si_publicado_el").click(function(){
                $("#calilificacionbox_el").delay(400).slideToggle();
                $("#nocalificadobox_el").delay(400).slideToggle();
            });
            $("#no_publicado_el").click(function(){
                $("#nocalificadobox_el").delay(400).slideToggle();
            });


            //Date picker medios escritos
            
                 $(function() {
                    $("#datepicker_actualizar_escritos").datepicker();
                    $('#datepicker_actualizar_escritos').datepicker('option', { dateFormat: 'yy-mm-dd' });

                  });    
           
            //DAte picker medios electronicos
            $(function() {
                $( "#datepicker_actualizar_electronicos" ).datepicker({ dateFormat: 'yy-mm-dd', showWeek: true, firstDay: 1 });
                 $(function() {
                    $( "#datepicker_actualizar_electronicos" ).datepicker({
                         showWeek: true,
                         firstDay: 1
                    });
                  });    
            });
            //DAte picker medios escritos2
            $(function() {
                $( "#datepicker_actualizar_escritos2" ).datepicker({ dateFormat: 'yy-mm-dd', showWeek: true, firstDay: 1 });
                 $(function() {
                    $( "#datepicker_actualizar_escritos2" ).datepicker({
                         showWeek: true,
                         firstDay: 1
                    });
                  });    
            });
            //date picker agregar boletin
            $(function() {
                $( "#fecha_publicacion" ).datepicker({ dateFormat: 'yy-mm-dd', showWeek: true, firstDay: 1 });
                 $(function() {
                    $( "#fecha_publicacion" ).datepicker({
                         showWeek: true,
                         firstDay: 1
                    });
                  });    
            });
            $(function() {
                $( "#fecha_publicacion2" ).datepicker({ dateFormat: 'yy-mm-dd', showWeek: true, firstDay: 1 });
                 $(function() {
                    $( "#fecha_publicacion2" ).datepicker({
                         showWeek: true,
                         firstDay: 1
                    });
                  });    
            });
            $(function() {
                $( "#f_ini" ).datepicker({ dateFormat: 'yy-mm-dd', showWeek: true, firstDay: 1 });
                  $(function() {
                    $( "#f_ini" ).datepicker({
                         showWeek: true,
                         firstDay: 1
                    });
                  });    
                /********/
                $( "#f_fin" ).datepicker({ dateFormat: 'yy-mm-dd', showWeek: true, firstDay: 1 });
                  $(function() {
                    $( "#f_fin" ).datepicker({
                         showWeek: true,
                         firstDay: 1
                    });
                  });    
            });
                
            $(function() {
                $( "#tabs" ).tabs();              
            });

            // SI EL CHECKBOX ESTA SELECCIONADO, OBTIENEN EL VALOR DE "value"
            $(function()   {
                if ($("#pp:checked")) {$("#pp").val("1")} else {$("#pp").val("0")};
                if ($("#interiores:checked")) {$("#interiores").val("1")} else{$("#interiores").val("0")};
                if ($("#columna:checked")) {$("#columna").val("1")} else{$("#columna").val("0")};
                if ($("#foto:checked")) {$("#foto").val("1")} else{$("#foto").val("0")};
                if ($("#texto:checked")) {$("#texto").val("1")} else{$("#texto").val("0")};

                if ($("#teasser:checked")) {$("#teasser").val("1")} else {$("#teasser").val("0")};
                if ($("#nota:checked")) {$("#nota").val("1")} else {$("#nota").val("0")};
                if ($("#capsula:checked")) {$("#capsula").val("1")} else {$("#capsula").val("0")};
                if ($("#corteinfo:checked")) {$("#corteinfo").val("1")} else {$("#corteinfo").val("0")};
                if ($("#audio:checked")) {$("#audio").val("1")} else {$("#audio").val("0")};
                if ($("#imagen:checked")) {$("#imagen").val("1")} else {$("#imagen").val("0")};

              
            });


                         
        });
        // Evita el submit si el valor del campo esta vacio 
        function validar_formulario() {
            if (document.agregar_medio_escrito.nombremedio.value === "")
            {
                alert("ningún campo debe estar VACIO!!!");
                return false;                               
            }
              return true;
        }
        // Evita el submit si el valor del campo esta vacio 
        function validar_formulario2() {
            if (document.agregar_medio_electronico.nombremedio.value === "")
            {
                alert("ningún campo debe estar VACIO!!!");
                return false;                               
            }
              return true;
        }
        // Evita el submit si el valor del campo esta vacio 
        function validar_formulario3() {
            if (document.agregar_comunicado.numero_boletin.value === "" || document.agregar_comunicado.titulo_boletin.value === "")
            {
                alert("ningún campo debe estar VACIO!!!");
                return false;
            }
                else
                    return true;
        }


        


    </script>

</body>
</html>