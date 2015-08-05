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
 * Seguimiento_escritos_model Class
 *
 * @package   Sistema de Seguimiento a Comunicados
 * @subpackage  Models
 * @category  Seguimiento_escritos_model
 * @author    Luis G Villaseñor (Auxiliar de Informática)
 */
    class Seguimiento_escritos_model extends Model 
    {
	   var $id = '';
     var $numero_boletin = '';
     var $pp = '';
     var $interiores = '';
     var $foto= '';  
     var $texto = '';
     var $calificacion = '';
     var $nombremedio = '';
     var $comentarios = '';
     var $fecha = '';
     var $Evidencia = '';
     var $publicado = '';

	   function Seguimiento_escritos_model () 
           {
		  parent::Model();
		  //$this->load->database();
	   }
//////////////////// funciones para PAGINAR //////////////
     public function record_count() {
        return $this->db->count_all("seguimiento_heraldo");
    }

    public function fetch_countries($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->order_by("fecha","asc");
        $query = $this->db->get("seguimiento_heraldo");
 
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
      $query = $this->db->get('seguimiento_heraldo');
         if ($query->num_rows() > 0) {
            return $query->num_rows();
            } else {
              return FALSE;
         }
    }

    public function record_count_filtro($nombremedio) {
        $this->db->where('nombremedio', $nombremedio);
        return $this->db->count_all_results("seguimiento_heraldo");
    }

    public function fetch_countries_filtro($limit, $start,$nombremedio) {
        $this->db->limit($limit, $start);
        $this->db->order_by("fecha","asc");
        $this->db->where('nombremedio', $nombremedio);
        $query = $this->db->get("seguimiento_heraldo");
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
		  $query = $this->db->get('seguimiento_heraldo');
		
		  return $query->result();
	   }
     function get_for_($nombremedio) 
           {
      $this->db->where("nombremedio",$nombremedio);
      $this->db->order_by("fecha","desc");
      $query = $this->db->get('seguimiento_heraldo');
    
      return $query->result();
     }
     function get_for_menu() 
     {
        $this->db->order_by("numero_boletin","desc");
        $query = $this->db->get('seguimiento_heraldo');
        return $query->result();
     }
           
     function get_boletin($numero_boletin)
     {
         $this->db->where('numero_boletin', $numero_boletin);
         $this->db->limit(1);
         $query = $this->db->get('seguimiento_heraldo');
         if ($query->num_rows() > 0) {
            return $query->result();
            } else {
              return FALSE;
         }
     }
           

	   function get_one ($id) 
           {
		  $querys = $this->db->get_where('seguimiento_heraldo', array('id' => $id));
		  return $querys->result();
	   }
           
      function insert_entry() 
           {
                  $data['numero_boletin'] = $this->input->post('numero_boletin');
                  $data['pp']             = $this->input->post('pp');
                  $data['interiores']     = $this->input->post('interiores');
                  $data['columna']        = $this->input->post('columna');
                  $data['foto']           = $this->input->post('foto');
                  $data['texto']          = $this->input->post('texto');
                  $data['calificacion ']  = $this->input->post('calificacion');
                  $data['nombremedio']    = $this->input->post('nombremedio');
		              $data['comentarios']    = $this->input->post('comentarios');
                  $data['fecha']          = $this->input->post('fecha');
                  $data['evidencia']      = $this->input->post('evidencia');
                  
		  //date("Y-m-d",time());

		       $this->db->insert('seguimiento_heraldo',$data);
	         }
      // ------------------------------------------------------------------------

      /**
       * Borrar registro
       *
       * Elimina un registro de la tabla seguimiento_heraldo
       *
       * @param $id id unico del seguimiento a medios escritos
       * @package   Sistema de Seguimiento a Comunicados
       * @subpackage  Models
       * @category  seguimiento_escritos_model
       * @author    Luis G Villaseñor (Auxiliar de Informática)
       */
        function delete($id){
          if (isset($id)) {
            $this->db->delete('seguimiento_heraldo', array('id' => $id)); 
            return TRUE;
          } else {
            return FALSE;
          }          
        }
       	   
           function update_id () 
           {
                  $data['id']             = $this->input->post('id');
                  $data['numero_boletin'] = $this->input->post('numero_boletin');
                  $data['pp']             = $this->input->post('pp');
                  $data['interiores']     = $this->input->post('interiores');
                  $data['columna']        = $this->input->post('columna');
                  $data['foto']           = $this->input->post('foto');
                  $data['texto']          = $this->input->post('texto');
                  $data['calificacion ']  = $this->input->post('calificacion');
                  $data['nombremedio']    = $this->input->post('nombremedio');
		              $data['comentarios']    = $this->input->post('comentarios');
                  $data['fecha']          = $this->input->post('fecha');
                  $data['Evidencia']      = $this->input->post('Evidencia');
                  	  
                  $this->db->update('seguimiento_heraldo',$data,array('id' => $_POST['id']));	

           }

           // ESTADISTICAS
           function get_escritos()
           {
                    $this->db->select('nombremedio,count(*) as cantidad');
                    //$this->db->where('fecha >=', $f_ini);
                    //$this->db->where('fecha <=', $f_fin);
                    $this->db->group_by('nombremedio');
                    $query = $this->db->get('seguimiento_heraldo');                    
                    if ($query->num_rows() > 0) {
                      return $query->result();
                      } else {
                        return FALSE;
                    }
           }

function get_escritos_calificacion(){
    $this->db->select('calificacion,count(*) as total');
    //$this->db->where('fecha >=', $f_ini);
    //$this->db->where('fecha <=', $f_fin);
    $this->db->group_by('calificacion');
    $query = $this->db->get('seguimiento_heraldo');                    
    if ($query->num_rows() > 0) {
      return $query->result();
      } else {
        return FALSE;
    }
}

function num_boletines_medios_escritos($f_ini,$f_fin)
{
  $this->db->select('nombremedio,count(*) as cantidad');
  $this->db->where('fecha >=', $f_ini);
  $this->db->where('fecha <=', $f_fin);
  $this->db->group_by('nombremedio');
  $query = $this->db->get('seguimiento_heraldo');
  if ($query->num_rows() > 0) {
    return $query->result();
    } else {
      return NULL;
  }                    
}

function get_escritos_calificacion_rango($f_ini,$f_fin){
    $this->db->select('calificacion,count(*) as total');
    $this->db->where('fecha >=', $f_ini);
    $this->db->where('fecha <=', $f_fin);
    $this->db->group_by('calificacion');
    $query = $this->db->get('seguimiento_heraldo');                    
    if ($query->num_rows() > 0) {
      return $query->result();
      } else {
        return FALSE;
    }
}

function get_seg_ind($numero_boletin){
    $this->db->where('numero_boletin', $numero_boletin);
    $query = $this->db->get('seguimiento_heraldo');
    if ($query->num_rows() > 0) {
      return $query->result();
      } else {
        return FALSE;
    }
}
           

          				   
    }
?>