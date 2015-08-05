<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Sistema de Seguimiento a Comunicados
 *
 * Aplicación Web desarrollada con CodeIgniter para PHP 4.3.2 or mejor
 *
 * @package   Sistema de Seguimiento a Comunicados
 * @author    Luis G Villaseñor (Auxiliar de Informática)
 * @copyright Copyright (c) 2012 - 2015, SECTURE.
 * @license   http://codeigniter.com/user_guide/license.html
 * @link    http://codeigniter.com
 * @since   Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Seguimiento_electronicos_model Class
 *
 * @package   Sistema de Seguimiento a Comunicados
 * @subpackage  Models
 * @category  Seguimiento_electronicos_model
 * @author    Luis G Villaseñor (Auxiliar de Informática)
 */
    class Seguimiento_electronicos_model extends Model 
    {
	   var $id = '';
           var $numero_boletin = '';
           var $teasser = '';
           var $nota = '';
           var $capsula = '';  
           var $corteinfo = '';
           var $audio = '';
           var $imagen = '';
           var $calificacion= '';
           var $nombremedio = '';
           var $comentarios = '';
           var $fecha = '';
           var $Evidencia = '';

	   function Seguimiento_electronicos_model () 
           {
		  parent::Model();
		  $this->load->database();
	   }

//////////////////// funciones para PAGINAR //////////////
     public function record_count() {
        return $this->db->count_all("seguimiento_electronicos");
    }

    public function fetch_countries($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("seguimiento_electronicos");
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
    public function record_count_seg($numero_boletin) {
      $this->db->where('numero_boletin', $numero_boletin);
      $query = $this->db->get('seguimiento_electronicos');
         if ($query->num_rows() > 0) {
            return $query->num_rows();
            } else {
              return FALSE;
         }
    }

    public function record_count_filtro($nombremedio) {
        $this->db->where('nombremedio', $nombremedio);
        return $this->db->count_all_results("seguimiento_electronicos");
    }

    public function fetch_countries_filtro($limit, $start,$nombremedio) {
        $this->db->limit($limit, $start);
        $this->db->order_by("fecha","asc");
        $this->db->where('nombremedio', $nombremedio);
        $query = $this->db->get("seguimiento_electronicos");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

//////////////////// funciones para PAGINAR //////////////
	   function get_all()
           {
		  $this->db->order_by("fecha","desc");
      $this->db->order_by("id","desc");
		  $query = $this->db->get('seguimiento_electronicos');
		
		  return $query->result();
	   }
     function get_for_($nombremedio) 
           {
      $this->db->where("nombremedio",$nombremedio);
      $this->db->order_by("fecha","desc");
      $query = $this->db->get('seguimiento_electronicos');
    
      return $query->result();
     }
     function get_for_menu() 
     {
        $this->db->order_by("numero_boletin","desc");
        $query = $this->db->get('seguimiento_electronicos');
        return $query->result();
     }

     function get_boletin($numero_boletin)
     {
         $this->db->where('numero_boletin', $numero_boletin);
         $this->db->limit(1);
         $query = $this->db->get('seguimiento_electronicos');
         if ($query->num_rows() > 0) {
            return $query->result();
            } else {
              return FALSE;
         }
     }


	   function get_one ($id) 
           {
		  $querys = $this->db->get_where('seguimiento_electronicos', array('id' => $id));
		  return $querys->result();
	   }
           
           function insert_entry() 
           {
                  $data['numero_boletin'] = $this->input->post('numero_boletin');
                  $data['teasser']        = $this->input->post('teasser');
                  $data['nota']           = $this->input->post('nota');
                  $data['capsula']        = $this->input->post('capsula');
                  $data['corteinfo']      = $this->input->post('corteinfo');
                  $data['audio']          = $this->input->post('audio');
                  $data['imagen']         = $this->input->post('imagen');
                  $data['calificacion']   = $this->input->post('calificacion');
                  $data['nombremedio']    = $this->input->post('nombremedio');
		              $data['comentarios']    = $this->input->post('comentarios_el');
                  $data['fecha']          = $this->input->post('fecha');
                  //$data['Evidencia']      = $this->input->post('Evidencia');
		  //date("Y-m-d",time());

		  $this->db->insert('seguimiento_electronicos',$data);
	   }
     // ------------------------------------------------------------------------

      /**
       * Borrar registro
       *
       * Elimina un registro de la tabla seguimiento_electronicos
       *
       * @param $id id unico del seguimiento a medios escritos
       * @package   Sistema de Seguimiento a Comunicados
       * @subpackage  Models
       * @category  seguimiento_escritos_model
       * @author    Luis G Villaseñor (Auxiliar de Informática)
       */
        function delete($id){
          if (isset($id)) {
            $this->db->delete('seguimiento_electronicos', array('id' => $id)); 
            return TRUE;
          } else {
            return FALSE;
          }          
        }
       	   
           function update_id () 
           {
                  $data['id']             = $this->input->post('id');
                  $data['numero_boletin'] = $this->input->post('numero_boletin');
                  $data['teasser']        = $this->input->post('teasser');
                  $data['nota']           = $this->input->post('nota');
                  $data['capsula']        = $this->input->post('capsula');
                  $data['corteinfo']      = $this->input->post('corteinfo');
                  $data['audio']          = $this->input->post('audio');
                  $data['imagen']         = $this->input->post('imagen');
                  $data['calificacion']   = $this->input->post('calificacion');
                  $data['nombremedio']    = $this->input->post('nombremedio');
		              $data['comentarios']    = $this->input->post('comentarios_el');
                  $data['fecha']          = $this->input->post('fecha');
                  $data['Evidencia']      = $this->input->post('Evidencia');
		  
	  
                  $this->db->update('seguimiento_electronicos',$data,array('id' => $_POST['id']));	
           }

      
           // ESTADISTICAS
           function get_electronicos()
           {
                    $this->db->select('nombremedio,count(*) as cantidad2');
                    //$this->db->where('fecha >=', $f_ini);
                    //$this->db->where('fecha <=', $f_fin);
                    $this->db->group_by('nombremedio');
                    $query = $this->db->get('seguimiento_electronicos');                    
                    if ($query->num_rows() > 0) {
                      return $query->result();
                      } else {
                        return FALSE;
                    }              
           }
           
function get_electronicos_calificacion(){
    $this->db->select('calificacion,count(*) as total');
    //$this->db->where('fecha >=', $f_ini);
    //$this->db->where('fecha <=', $f_fin);
    $this->db->group_by('calificacion');
    $query = $this->db->get('seguimiento_electronicos');                    
    if ($query->num_rows() > 0) {
      return $query->result();
      } else {
        return FALSE;
    }
}

// ESTADISTICAS
function num_boletines_medios_electronicos($f_ini,$f_fin)
{
  $this->db->select('nombremedio,count(*) as cantidad2');
  $this->db->where('fecha >=', $f_ini);
  $this->db->where('fecha <=', $f_fin);
  $this->db->group_by('nombremedio');
  $query = $this->db->get('seguimiento_electronicos');                    
  if ($query->num_rows() > 0) {
    return $query->result();                      
    } else {
      return NULL;
  }              
}

function get_electronicos_calificacion_rango($f_ini,$f_fin){
    $this->db->select('calificacion,count(*) as total');
    $this->db->where('fecha >=', $f_ini);
    $this->db->where('fecha <=', $f_fin);
    $this->db->group_by('calificacion');
    $query = $this->db->get('seguimiento_electronicos');                    
    if ($query->num_rows() > 0) {
      return $query->result();
      } else {
        return FALSE;
    }
}

function get_seg_ind($numero_boletin){
    $this->db->where('numero_boletin', $numero_boletin);
    $query = $this->db->get('seguimiento_electronicos');
    if ($query->num_rows() > 0) {
      return $query->result();
      } else {
        return FALSE;
    }
}


           				   
}
?>