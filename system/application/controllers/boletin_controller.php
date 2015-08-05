<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Sistema de Seguimiento a Comunicados
 *
 * Aplicación Web desarrollada con CodeIgniter Versión 7.1.3
 * El Sistema de Seguimiento tiene como propósito tener un registro
 * y seguimiento detallado de los comunicados que emite ésta Secretaría
 * a traves del Departamento de Comunicación Social en los diferentes
 * medios Escritos y Electrónicos del Estado.
 *
 * @package   Sistema de Seguimiento a Comunicados
 * @author    Luis G Villaseñor (Auxiliar de Informática)
 * @copyright Copyright (c) 2012 - 2015, SECTURE.
 * @license   http://codeigniter.com/user_guide/license.html
 * @link      http://10.1.17.10/boletines/
 * @version   Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Boletin_controller Class extends Controller
 *
 * Controlador principal de la Aplicación. Aquí se encuentrar las principales
 * funciones lógicas para la operación del Sistema de Seguimiento.
 *
 * @package     Sistema de Seguimiento a Comunicados
 * @subpackage  Controllers
 * @category    Boletin_controller
 * @author      Luis G Villaseñor (Auxiliar de Informática)
 */

class Boletin_controller extends Controller {

  
        public function __construct()
      	{
      		parent::__construct();	
      	}

  // --------------------------------------------------------------------

  /**
   * Carga la vista inicial/home de la Aplicación
   * <p>UPS</p>
   * @access  public
   * @return  void
   */	
  	function index()
    { 
      $this->load->view('header_view');
      $this->load->view('nav_view');
      $this->load->view('welcome_message');
      $this->load->view('footer_view');
      return;
  	}

  // --------------------------------------------------------------------

  /**
   * Carga la vista de Gestión de Operaciones
   *
   * Esta vista incluye el menu_operaciones.php
   *
   * @access  public
   * @return  void
   */ 
    function operacion(){

      $this->load->view('header_view');
      $this->load->view('nav_view');
      $this->load->view('operacion');
      $this->load->view('footer_view');
      return;
    }

        function administracion() {

          $this->load->view('header_view');
          $this->load->view('nav_view');
          $this->load->view('administracion');
          $this->load->view('footer_view');
          return;
          
        }

        function Website_under_construction(){

          $this->load->view('header_view');
          $this->load->view('nav_view');
          $this->load->view('Website_under_construction');
          $this->load->view('footer_view');

        }

        function admin_medios_escritos()
        {
          $this->load->model('medios_model');
          $data['combo_medios_escritos']= $this->medios_model->get_escritos();

          $this->load->view('header_view');
          $this->load->view('nav_view');
          $this->load->view('admin_medios_escritos',$data);
          $this->load->view('footer_view');
        }

        function admin_medios_electronicos(){

          $this->load->model('medios_model');
          $data['get_electronicos']= $this->medios_model->get_electronicos();

          $this->load->view('header_view');
          $this->load->view('nav_view');
          $this->load->view('admin_medios_electronicos',$data);
          $this->load->view('footer_view');

        }

        function gestion_comunicados(){

          $this->load->model('boletines_model');

          $config = array();
            $config['base_url'] = base_url().'/boletin_controller/gestion_comunicados' ;
            $config['total_rows'] = $this->boletines_model->record_count();
            $config['per_page'] = 10;
            $config['uri_segment'] = 3;
     
            $this->pagination->initialize($config);
     
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data['get_all_comunicados'] = $this->boletines_model->fetch_countries($config['per_page'], $page);
            $data['links'] = $this->pagination->create_links();

          //$data['get_all_comunicados']= $this->boletines_model->get_all();

          $this->load->view('header_view');
          $this->load->view('nav_view');
          $this->load->view('gestion_comunicados_view',$data);
          $this->load->view('footer_view');

        }



        //***SEGUIMIENTO CON MEDIOS ELECTRONICOS***
        function agregar_seguimiento_electronicos(){
           $conteo = ''; 
           //LLAMAR MODELOS    
           $this->load->model('seguimiento_electronicos_model');
           //ARREGLOS
           $this->seguimiento_electronicos_model->insert_entry();
           //LLAMAR A VISTA PAA ENTREGAR AL USUARIO
           $this->listado_boletines3();
        }
       
        //***SEGUIMIENTO CON MEDIOS ESCRITOS***
        function agregar_seguimiento()
        {
          //LLAMAR MODELOS
            $this->load->model('seguimiento_escritos_model');
          //REGLAS DEL NEGOCIO
            $this->seguimiento_escritos_model->insert_entry();
          //LLAMAR A VISTA PAA ENTREGAR AL USUARIO
            $this->listado_boletines2();
        }

       //VISTA SEGUIMIENTO
       function seguimiento(){
           $this->load->model('medios_model');
           $this->load->model('boletines_model');           

           $data['combo_medios_escritos']= $this->medios_model->get_escritos();
           $data['combo_medios_electronicos']= $this->medios_model->get_electronicos();
           $data['combo_boletines']= $this->boletines_model->get_all();
           

            $this->load->view('header_view');
            $this->load->view('nav_view');
            $this->load->view('seguimiento',$data);
            $this->load->view('footer_view');           
       }

       //VISTA SEGUIMIENTO
       function seguimiento2(){
           $this->load->model('medios_model');
           $this->load->model('boletines_model');           

           $data['combo_medios_escritos']= $this->medios_model->get_escritos();
           $data['combo_medios_electronicos']= $this->medios_model->get_electronicos();
           $data['combo_boletines']= $this->boletines_model->get_all();
           

            $this->load->view('header_view');
            $this->load->view('nav_view');
            $this->load->view('seguimiento2',$data);
            $this->load->view('footer_view');           
       }

       //AGREGAR UN NUEVO BOLETIN
       function agregar_boletin(){  
           $this->load->model('boletines_model');
           
           $data['comobo_agregar_boletin'] = $this->boletines_model->insert_entry();
           
           $this->gestion_comunicados();
       }
       //EDITAR UN BOLETIN
       function editar_boletin(){
           $this->load->model('boletines_model');
           
           $data['combo_editar_boletin'] = $this->boletines_model->get_id($id);
           
           $this->gestion_comunicados();
       }
       //AGREGAR NUEVO MEDIO ESCRITO
       function agregar_medio_escrito(){
           $this->load->model('medios_model');
           
           $data['combo_agregar_m_es']= $this->medios_model->insert_entry_escrito();
           
           $this->admin_medios_escritos();
       }
       // ELIMINAR REGISTRO DE SEGUIMIENTO MEDIO ESCRITO
       function eliminar_medio_escrito($id){
           
          $this->load->model('seguimiento_escritos_model');

          $tempo = $this->seguimiento_escritos_model->delete($id);

          if ($tempo === FALSE) {
            
             $this->load->model('boletines_model');
             $this->load->model('seguimiento_escritos_model');
             
             $data['combo_lista']= $this->seguimiento_escritos_model->get_all();
             $data['combo_boletines']= $this->boletines_model->get_all();

             $this->load->view('header_view');
             $this->load->view('nav_view');
             $this->load->view('listado_boletines2', $data);
             $this->load->view('footer_view');
            
          } else {
             $this->load->view('header_view');
             $this->load->view('nav_view');
             $this->load->view('borrarRegistroSucces');
             $this->load->view('footer_view'); 
          }           
       }

       // ELIMINAR REGISTRO DE SEGUIMIENTO MEDIO ELECTRONICO
       function eliminar_medio_electronico($id){
           
          $this->load->model('seguimiento_electronicos_model');

          $tempo = $this->seguimiento_electronicos_model->delete($id);

          if ($tempo === FALSE) {
            
             $this->load->model('boletines_model');
                                      
             $data['combo_lista_el']= $this->seguimiento_electronicos_model->get_all();
             $data['combo_boletines']= $this->boletines_model->get_all();

             $this->load->view('header_view');
             $this->load->view('nav_view');
             $this->load->view('listado_boletines3', $data);
             $this->load->view('footer_view');
            
          } else {
             $this->load->view('header_view');
             $this->load->view('nav_view');
             $this->load->view('borrarRegistroSucces');
             $this->load->view('footer_view'); 
          }           
       }
//ACTUALIZAR SEGUIMIENTO MEDIO ESCRITO
       function actualizar_seguimiento_escrito(){
           $this->load->model('seguimiento_escritos_model');
           
           $data['combo_agregar_m_es']= $this->seguimiento_escritos_model->update_id();
           
           $this->listado_boletines2();
       }
//ACTUALIZAR SEGUIMIENTO MEDIO ELECTRONICOS
       function actualizar_seguimiento_electronico(){
           $this->load->model('seguimiento_electronicos_model');
           
           $data['combo_agregar_m_el']= $this->seguimiento_electronicos_model->update_id();
           
           $this->listado_boletines3();
       }   

       function actualizar_medio(){
           $this->load->model('medios_model');
           
           $data['update_medio']= $this->medios_model->update_medio();
           
           $this->administracion();
       }

       function actualizar_boletin(){
           $this->load->model('boletines_model');
           
           $id = $this->input->post('id');

           $this->boletines_model->update_id($id);
           
           $this->gestion_comunicados();
       } 

       //AGREGAR NUEVO MEDIO ELCTRONICO
       function agregar_medio_electronico(){
           $this->load->model('medios_model');
           
           $data['combo_agregar_m_el']= $this->medios_model->insert_entry_electronico();
           
           $this->admin_medios_electronicos();
       }

       //VISTA LISTADO 
       function listado_boletines(){
           $this->load->model('boletines_model');
           $this->load->model('seguimiento_escritos_model');
           $this->load->model('seguimiento_electronicos_model');
          
           $data['combo_lista']= $this->seguimiento_escritos_model->get_all();
           $data['combo_lista_el']= $this->seguimiento_electronicos_model->get_all();
           $data['combo_boletines']= $this->boletines_model->get_all();

            $this->load->view('header_view');
            $this->load->view('nav_view');
            $this->load->view('listado_boletines', $data);
            $this->load->view('footer_view');           
       }

       //VISTA LISTADO 
       function listado_boletines2(){
          $this->load->model('boletines_model');
          $this->load->model('medios_model');
          $this->load->model('seguimiento_escritos_model');           
          $this->load->view('header_view');
          $this->load->view('nav_view');
          $nombremedio = $this->input->post('nombremedio',TRUE);
        if ( isset($nombremedio) ) {
          # Si estan definidas y no es NULL es TRUE
          if ( (is_string($nombremedio) AND $nombremedio > "0")) {
            # Si son de tipo strin y mayores o iguales a 0000-00-00 ambas fechas
                $data['total_rows'] = $this->seguimiento_escritos_model->record_count_filtro($nombremedio);
                if (empty($data['total_rows'])) {
                  # Si el query viene vacio
                  $data['combo_medios']= $this->medios_model->get_escritos();
                  $this->load->view('no_hay_registros_esc', $data);
                }else{
                    $config = array();
                    $config['base_url'] = base_url().'/boletin_controller/listado_boletines2' ;
                    $config['total_rows'] = $this->seguimiento_escritos_model->record_count_filtro($nombremedio);
                    $config['per_page'] = 10;
                    $config['uri_segment'] = 3;     
                    $this->pagination->initialize($config);     
                    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                    $data['nombremedio'] = $nombremedio;
                    $data['combo_lista'] = $this->seguimiento_escritos_model->fetch_countries_filtro($config['per_page'], $page,$nombremedio);
                    $data['links'] = $this->pagination->create_links();
                    $data['combo_boletines']= $this->boletines_model->get_all();
                    $data['combo_medios']= $this->medios_model->get_escritos();
                    $data['total_rows'] = $this->seguimiento_escritos_model->record_count_filtro($nombremedio);
                    $this->load->view('listado_boletines2', $data);
                  }
          } else {
            # code...
            $config = array();
            $config['base_url'] = base_url().'/boletin_controller/listado_boletines2' ;
            $config['total_rows'] = $this->seguimiento_escritos_model->record_count();
            $config['per_page'] = 10;
            $config['uri_segment'] = 3;   
            $this->pagination->initialize($config);   
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data['nombremedio'] = $nombremedio;
            $data['combo_lista'] = $this->seguimiento_escritos_model->fetch_countries($config['per_page'], $page);
            $data['links'] = $this->pagination->create_links();
            $data['combo_boletines']= $this->boletines_model->get_all();
            $data['combo_medios']= $this->medios_model->get_escritos();
            $data['total_rows'] = $this->seguimiento_escritos_model->record_count();
            $this->load->view('listado_boletines2', $data);
          }
        } else {
          # code...
            $this->load->view('estadisticas2Error');
          }
        $this->load->view('footer_view');
       }


       //VISTA LISTADO 
       function listado_boletines3(){
          $this->load->model('boletines_model');
          $this->load->model('medios_model');
          $this->load->model('seguimiento_electronicos_model');
          $this->load->view('header_view');
          $this->load->view('nav_view');
          $nombremedio = $this->input->post('nombremedio',TRUE);
          if ( isset($nombremedio) ) {
            # Si estan definidas y no es NULL es TRUE
            if ( (is_string($nombremedio) AND $nombremedio > "0")) {
              # Si son de tipo strin y mayores o iguales a 0000-00-00 ambas fechas
                $data['total_rows'] = $this->seguimiento_electronicos_model->record_count_filtro($nombremedio);
                if (empty($data['total_rows'])) {
                  # Si el query viene vacio
                  $data['combo_medios']= $this->medios_model->get_electronicos();
                  $this->load->view('no_hay_registros', $data);
                }else{

                  $config = array();
                  $config['base_url'] = base_url().'/boletin_controller/listado_boletines3' ;
                  $config['total_rows'] = $this->seguimiento_electronicos_model->record_count_filtro($nombremedio);
                  $config['per_page'] = 10;
                  $config['uri_segment'] = 3;
                  $this->pagination->initialize($config);
                  $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                  $data['nombremedio'] = $nombremedio;
                  $data['combo_lista_el'] = $this->seguimiento_electronicos_model->fetch_countries_filtro($config['per_page'], $page,$nombremedio);
                  $data['links'] = $this->pagination->create_links();
                  $data['combo_boletines']= $this->boletines_model->get_all();
                  $data['combo_medios']= $this->medios_model->get_electronicos();
                  $data['total_rows'] = $this->seguimiento_electronicos_model->record_count_filtro($nombremedio);
                  $this->load->view('listado_boletines3', $data);
                }
            } else {
              # code...
              $config = array();
              $config['base_url'] = base_url().'/boletin_controller/listado_boletines3' ;
              $config['total_rows'] = $this->seguimiento_electronicos_model->record_count();
              $config['per_page'] = 10;
              $config['uri_segment'] = 3;     
              $this->pagination->initialize($config);     
              $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
              $data['nombremedio'] = $nombremedio;
              $data['combo_lista_el'] = $this->seguimiento_electronicos_model->fetch_countries($config['per_page'], $page);
              $data['links'] = $this->pagination->create_links();
              $data['combo_boletines']= $this->boletines_model->get_all();
              $data['combo_medios']= $this->medios_model->get_electronicos();
              $data['total_rows'] = $this->seguimiento_electronicos_model->record_count();
              $this->load->view('listado_boletines3', $data);
            }
          } else {
              # code...
              $this->load->view('estadisticas2Error');
            }
        $this->load->view('footer_view');           
       }

       // VISTA EDITAR SEGUIMIENTO MEDIOS ESCRITOS
       function editar_seguimiento (){
           
           $this->load->model('seguimiento_escritos_model');
           $this->load->model('medios_model');
           $this->load->model('boletines_model');

           $id = $this->input->post('id');
           
           $this->input->post('seguimiento_heraldo',$this,array('id'=>$_POST['id']));

           $data['combo_editar_escritos']= $this->seguimiento_escritos_model->get_one($id);
           $data['combo_medios_escritos']= $this->medios_model->get_escritos();
           $data['combo_boletines']= $this->boletines_model->get_all();
           
           $this->load->view('header_view');
            $this->load->view('nav_view');
            $this->load->view('editar_seguimiento',$data);
            $this->load->view('footer_view');

       }

       // VISTA EDITAR SEGUIMIENTO MEDIOS ESCRITOS
       function editar_seguimiento2(){

         $this->load->model('seguimiento_escritos_model');
         $this->load->model('medios_model');
         $this->load->model('boletines_model');
         $this->load->model('upload_model');
         // ID del comunicado desde el formulario
         $id = $this->input->post('id');

         $data['combo_editar_escritos']= $this->seguimiento_escritos_model->get_one($id);
         $data['get_evidencias_escritos']= $this->upload_model->get_evidencias_escritos($id);
         if (isset($data['get_evidencias_escritos'])) {
            $data['get_evidencias_escritos']= $this->upload_model->get_evidencias_escritos($id);
         }  else {
                $data['get_evidencias_escritos'] = array();
            }
         $data['combo_medios_escritos']= $this->medios_model->get_escritos();
         $data['combo_boletines']= $this->boletines_model->get_all();
         
         $this->load->view('header_view');
         $this->load->view('nav_view');
         $this->load->view('editar_seguimiento2',$data);
         $this->load->view('footer_view');
       }

       // VISTA EDITAR SEGUIMIENTO MEDIOS ELECTRONICOS
       function editar_seguimiento_electronicos (){
           
           $this->load->model('seguimiento_electronicos_model');
           $this->load->model('medios_model');
           $this->load->model('boletines_model');
           $this->load->model('upload_model');

           $id = $this->input->post('id');
           
           $data['combo_editar_electronicos']= $this->seguimiento_electronicos_model->get_one($id);
           $data['get_evidencias_electronicos']= $this->upload_model->get_evidencias_electronicos($id);
           if (isset($data['get_evidencias_electronicos'])) {
              $data['get_evidencias_electronicos']= $this->upload_model->get_evidencias_electronicos($id);
           }  else {
                  $data['get_evidencias_electronicos'] = array();
              }
           $data['combo_medios_electronicos']= $this->medios_model->get_electronicos();
           $data['combo_boletines']= $this->boletines_model->get_all();
                      
           $this->load->view('header_view');
           $this->load->view('nav_view');
           $this->load->view('editar_seguimiento_electronicos',$data);
           $this->load->view('footer_view');
       }
       //RESULTADOS

       function pdf()
        {
            $this->load->model('medios_model');
            $this->load->model('seguimiento_escritos_model');
            $this->load->model('seguimiento_electronicos_model');

            $data['medios_model']= $this->medios_model->get_all();
            $data['num_boletines_medios_escritos']= $this->seguimiento_escritos_model->get_escritos();
            $data['get_escritos_calificacion']= $this->seguimiento_escritos_model->get_escritos_calificacion();
            $data['num_boletines_medios_electronicos']= $this->seguimiento_electronicos_model->get_electronicos();
            $data['get_electronicos_calificacion']= $this->seguimiento_electronicos_model->get_electronicos_calificacion();

             $this->load->helper('dompdf', 'file');
             // page info here, db calls, etc.     
            
            $html = $this->load->view('estadisticaspdf',$data,true);                        
            
            pdf_create($html, 'graficas-comunicados');            
             //if you want to write it to disk and/or send it as an attachment    
        }

        function pdf2($f_ini, $f_fin)
        {
            $this->load->model('medios_model');
            $this->load->model('seguimiento_escritos_model');
            $this->load->model('seguimiento_electronicos_model');

            $data['medios_model']= $this->medios_model->get_all();
            $data['num_boletines_medios_escritos']= $this->seguimiento_escritos_model->get_escritos();
            $data['num_boletines_medios_electronicos']= $this->seguimiento_electronicos_model->get_electronicos();

             $this->load->helper('dompdf', 'file');
             // page info here, db calls, etc.     
            //date("Y-m-d");
        //$f_ini = $this->input->post('f_ini',TRUE);
        //$f_fin = $this->input->post('f_fin',TRUE);

        if ( isset($f_ini) AND isset($f_fin) ) {
          # Si estan definidas y no es NULL es TRUE
          if ( (is_string($f_ini) AND $f_ini >= "0000-00-00") AND (is_string($f_fin) AND $f_fin >= "0000-00-00") ) {
            # Si son de tipo strin gy mayores o iguales a 0000-00-00
            if ($f_ini <= $f_fin AND $f_fin >= $f_ini ) {
              # Si las fechas estan dentro de sus rangos y no alreves
              $data['medios_model']= $this->medios_model->get_all();
              $data['num_boletines_medios_escritos']= $this->seguimiento_escritos_model->num_boletines_medios_escritos($f_ini,$f_fin);
              $data['get_escritos_calificacion_rango']= $this->seguimiento_escritos_model->get_escritos_calificacion_rango($f_ini,$f_fin);
              $data['num_boletines_medios_electronicos']= $this->seguimiento_electronicos_model->num_boletines_medios_electronicos($f_ini,$f_fin);
              $data['get_electronicos_calificacion_rango']= $this->seguimiento_electronicos_model->get_electronicos_calificacion_rango($f_ini,$f_fin);
              if (isset($data['num_boletines_medios_escritos']) OR isset($data['num_boletines_medios_electronicos'])) {
                # Si esta definido y no es NULL (Si hay registros)
                  # code...
                  $html2 = $this->load->view('estadisticaspdf2',$data,true);
                  pdf_create($html2, 'graficas-comunicados');            
             //if you want to write it to disk and/or send it as an attachment    
                } else {                              
                //echo "ERROR, las variables NO ESTAN definidas o tienen valor NULL NULL";
                $this->load->view('estadisticas2Error');
              }                     
            } else {
              # code...
              //echo "ERROR, las variables NO NO SON de tipo string.";
              $this->load->view('estadisticas2Error');
            }            
          } else {
            # code...
            //echo "ERROR, las variables NO SON de tipo string.";
            $this->load->view('estadisticas2Error');
          }
        } else {
          # code...
          //echo "ERROR, las variables NO ESTAN definidas o tienen valor NULL";
          $this->load->view('estadisticas2Error');
        }                        
            
            
        }


       function estadisticas(){

        $this->load->model('medios_model');
        $this->load->model('seguimiento_escritos_model');
        $this->load->model('seguimiento_electronicos_model');

        $data['medios_model']= $this->medios_model->get_all();
        $data['num_boletines_medios_escritos']= $this->seguimiento_escritos_model->get_escritos();
        $data['get_escritos_calificacion']= $this->seguimiento_escritos_model->get_escritos_calificacion();
        $data['num_boletines_medios_electronicos']= $this->seguimiento_electronicos_model->get_electronicos();
        $data['get_electronicos_calificacion']= $this->seguimiento_electronicos_model->get_electronicos_calificacion();

        $this->load->view('header_view');
        $this->load->view('nav_view');
        $this->load->view('nav_consulta');
        $this->load->view('estadisticas',$data);
        $this->load->view('footer_view');            
       }


       function estadisticas2()
       {
        $this->load->model('medios_model');
        $this->load->model('seguimiento_escritos_model');
        $this->load->model('seguimiento_electronicos_model');

        $this->load->view('header_view');
        $this->load->view('nav_view');
        $this->load->view('nav_consulta');

        //date("Y-m-d");
          $f_ini = $this->input->post('f_ini',TRUE);
          $f_fin = $this->input->post('f_fin',TRUE);
          $data['f_ini'] = $f_ini;
          $data['f_fin'] = $f_fin;

          if ( isset($f_ini) AND isset($f_fin) ) {
            # Si estan definidas y no es NULL es TRUE
            if ( (is_string($f_ini) AND $f_ini >= "0000-00-00") AND (is_string($f_fin) AND $f_fin >= "0000-00-00") ) {
              # Si son de tipo strin gy mayores o iguales a 0000-00-00
              if ($f_ini <= $f_fin AND $f_fin >= $f_ini ) {
                # Si las fechas estan dentro de sus rangos y no alreves
                $data['medios_model']= $this->medios_model->get_all();
                $data['num_boletines_medios_escritos']= $this->seguimiento_escritos_model->num_boletines_medios_escritos($f_ini,$f_fin);
                $data['get_escritos_calificacion_rango']= $this->seguimiento_escritos_model->get_escritos_calificacion_rango($f_ini,$f_fin);
                $data['num_boletines_medios_electronicos']= $this->seguimiento_electronicos_model->num_boletines_medios_electronicos($f_ini,$f_fin);
                $data['get_electronicos_calificacion_rango']= $this->seguimiento_electronicos_model->get_electronicos_calificacion_rango($f_ini,$f_fin);
                if (isset($data['num_boletines_medios_escritos']) OR isset($data['num_boletines_medios_electronicos'])) {
                  # Si esta definido y no es NULL (Si hay registros)
                    # code...
                    $this->load->view('estadisticas2',$data);
                  } else {                              
                  //echo "ERROR, las variables NO ESTAN definidas o tienen valor NULL NULL";
                  $this->load->view('estadisticas2Error');
                }                     
              } else {
                # code...
                //echo "ERROR, las variables NO NO SON de tipo string.";
                $this->load->view('estadisticas2Error');
              }            
            } else {
              # code...
              //echo "ERROR, las variables NO SON de tipo string.";
              $this->load->view('estadisticas2Error');
            }
          } else {
            # code...
            //echo "ERROR, las variables NO ESTAN definidas o tienen valor NULL";
            $this->load->view('estadisticas2Error');
          }
          $this->load->view('footer_view');

       }


       function estadisticas2Error(){
            
        $this->load->view('header_view');
        $this->load->view('nav_view');
        $this->load->view('nav_consulta');
        $this->load->view('estadisticas2Error');
        $this->load->view('footer_view'); 
                   
       }

    ///////// EXPORTAR A EXCEL 
    function exporta_seg_escritos(){
       $this->load->model('boletines_model');
       $this->load->model('medios_model');
       $this->load->model('seguimiento_escritos_model');

       $data['combo_lista'] = $this->seguimiento_escritos_model->get_all();
       $this->load->view('exporta_seg_escritos',$data);
    }

    function exporta_seg_escritos_por_($nombremedio){
       $this->load->model('boletines_model');
       $this->load->model('medios_model');
       $this->load->model('seguimiento_escritos_model');

       $data['combo_lista'] = $this->seguimiento_escritos_model->get_for_($nombremedio);
       $this->load->view('exporta_seg_escritos',$data);
    }

    function exporta_seg_electronicos(){
       $this->load->model('boletines_model');
       $this->load->model('medios_model');
       $this->load->model('seguimiento_electronicos_model');
       $data['combo_lista_el'] = $this->seguimiento_electronicos_model->get_all();
       $this->load->view('exporta_seg_electronicos',$data);
    }

    function exporta_seg_electronicos_por_($nombremedio){
       $this->load->model('boletines_model');
       $this->load->model('medios_model');
       $this->load->model('seguimiento_electronicos_model');
       $data['combo_lista_el'] = $this->seguimiento_electronicos_model->get_for_($nombremedio);
       $this->load->view('exporta_seg_electronicos',$data);
    }

    function seguimiento_individual($numero_boletin){

       $this->load->model('boletines_model');
       $this->load->model('medios_model');
       $this->load->model('seguimiento_escritos_model');
       $this->load->model('upload_model');
       $data['numero_boletin']= $numero_boletin;
       // Lista con todos los registros de seguimientos escritos
       $data['combo_lista'] = $this->seguimiento_escritos_model->get_all();
       // Lista de Comunicados
       $data['combo_boletines']= $this->boletines_model->get_all();
       // Lista de Medios
       $data['combo_medios']= $this->medios_model->get_all();
       // Obtiene solo el Titulo del numero de boletin
       $data['get_boletin'] = $this->seguimiento_escritos_model->get_boletin($numero_boletin);
       // Obtiene los nombres de archivos de las Evidencias
       $hayEvidencias = $this->upload_model->get_all_evidencias_escritos();
         if (isset($hayEvidencias)) {
            $data['get_all_evidencias_escritos']= $this->upload_model->get_all_evidencias_escritos();
         }  else { }
       // Obtiene todos los registros de seguimiento asociados a un numero de boletin especifico
       $data['get_seg_ind'] = $this->seguimiento_escritos_model->get_seg_ind($numero_boletin);
       $data['record_count_seg'] = $this->seguimiento_escritos_model->record_count_seg($numero_boletin);

        $this->load->view('header_view');
        $this->load->view('nav_view');
        $this->load->view('seguimiento_individual',$data);
        $this->load->view('footer_view');
    }

    function seguimiento_individual_pdf($numero_boletin)
    {
       $this->load->model('boletines_model');
       $this->load->model('medios_model');
       $this->load->model('seguimiento_escritos_model');
       $this->load->model('upload_model');
       $data['numero_boletin']= $numero_boletin;
       // Lista con todos los registros de seguimientos escritos
       $data['combo_lista'] = $this->seguimiento_escritos_model->get_all();
       // Lista de Comunicados
       $data['combo_boletines']= $this->boletines_model->get_all();
       // Lista de Medios
       $data['combo_medios']= $this->medios_model->get_all();
       // Obtiene solo el Titulo del numero de boletin
       $data['get_boletin'] = $this->seguimiento_escritos_model->get_boletin($numero_boletin);
       // Obtiene los nombres de archivos de las Evidencias
       $hayEvidencias = $this->upload_model->get_all_evidencias_escritos();
         if (isset($hayEvidencias)) {
            $data['get_all_evidencias_escritos'] = $this->upload_model->get_all_evidencias_escritos();
         }  else { $data['get_all_evidencias_escritos'] = ' ';}
       // Obtiene todos los registros de seguimiento asociados a un numero de boletin especifico
       $data['get_seg_ind'] = $this->seguimiento_escritos_model->get_seg_ind($numero_boletin);
       $data['record_count_seg'] = $this->seguimiento_escritos_model->record_count_seg($numero_boletin);

        //$this->load->helper('dompdf', 'file');
        // page info here, db calls, etc.     

        
        $html3 = $this->load->view('seguimiento_individual_pdf',$data,true);                        
        
        pdf_create($html3, 'seguimiento_individual_en_pdf');            
         //if you want to write it to disk and/or send it as an attachment    
    }

    function seguimiento_individual_el($numero_boletin){

       $this->load->model('boletines_model');
       $this->load->model('medios_model');
       $this->load->model('seguimiento_electronicos_model');
       $this->load->model('upload_model');
       // Lista con todos los registros de seguimientos escritos
       $data['combo_lista_el'] = $this->seguimiento_electronicos_model->get_all();
       // Lista de Comunicados
       $data['combo_boletines']= $this->boletines_model->get_all();
       // Lista de Medios
       $data['combo_medios']= $this->medios_model->get_all();
       // Obtiene solo el Titulo del numero de boletin
       $data['get_boletin'] = $this->seguimiento_electronicos_model->get_boletin($numero_boletin);
       // Obtiene los nombres de archivos de las Evidencias
       $hayEvidencias = $this->upload_model->get_all_evidencias_electronicos();
         if (isset($hayEvidencias)) {
            $data['get_all_evidencias_electronicos']= $this->upload_model->get_all_evidencias_electronicos();
         }  else { }
       // Obtiene todos los registros de seguimiento asociados a un numero de boletin especifico
       $data['get_seg_ind'] = $this->seguimiento_electronicos_model->get_seg_ind($numero_boletin);
       $data['record_count_seg'] = $this->seguimiento_electronicos_model->record_count_seg($numero_boletin);

        $this->load->view('header_view');
        $this->load->view('nav_view');
        $this->load->view('seguimiento_individual_el',$data);
        $this->load->view('footer_view');
    }

    function seguimiento_individual_el_pdf($numero_boletin)
    {
       $this->load->model('boletines_model');
       $this->load->model('medios_model');
       $this->load->model('seguimiento_electronicos_model');
       $this->load->model('upload_model');
       // Lista con todos los registros de seguimientos escritos
       $data['combo_lista'] = $this->seguimiento_electronicos_model->get_all();
       // Lista de Comunicados
       $data['combo_boletines']= $this->boletines_model->get_all();
       // Lista de Medios
       $data['combo_medios']= $this->medios_model->get_all();
       // Obtiene solo el Titulo del numero de boletin
       $data['get_boletin'] = $this->seguimiento_electronicos_model->get_boletin($numero_boletin);
       // Obtiene los nombres de archivos de las Evidencias
       $hayEvidencias = $this->upload_model->get_all_evidencias_electronicos();
         if (isset($hayEvidencias)) {
            $data['get_all_evidencias_electronicos']= $this->upload_model->get_all_evidencias_electronicos();
         }  else { }
       // Obtiene todos los registros de seguimiento asociados a un numero de boletin especifico
       $data['get_seg_ind'] = $this->seguimiento_electronicos_model->get_seg_ind($numero_boletin);
       $data['record_count_seg'] = $this->seguimiento_electronicos_model->record_count_seg($numero_boletin);
        
       $html4 = $this->load->view('seguimiento_individual_el_pdf',$data,true);                        
        
       pdf_create($html4, 'seguimiento_individual_el_pdf');            
       //if you want to write it to disk and/or send it as an attachment    
    }    
  
}

/* End of file .php */
/* Location: ./system/application/controllers/.php */
?>