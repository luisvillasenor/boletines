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
 * Medios_model Class
 *
 * @package   Sistema de Seguimiento a Comunicados
 * @subpackage  Models
 * @category  Medios_model
 * @author    Luis G Villaseñor (Auxiliar de Informática)
 */
    class Medios_model extends Model 
    {
  	   var $id = '';
       var $nombremedio = '';
       var $tipomedio = '';
       var $alcance = '';


	   function Medios_model () 
           {
		  parent::Model();
		  $this->load->database();
	   }

     //////////////////// funciones para PAGINAR //////////////
     public function record_count() {
        return $this->db->count_all("medios");
    }

    public function fetch_countries($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("medios");
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
//////////////////// funciones para PAGINAR //////////////

     function get_all(){
        $query = $this->db->get('medios');
        return $query->result();
     }
	 
           function get_electronicos(){
               $this->db->order_by('nombremedio','asc');
               $this->db->where('tipomedio','2');               
               $query = $this->db->get('medios');               
               return $query->result();               
           }
           function get_escritos(){
              $this->db->order_by('nombremedio','asc');
               $this->db->where('tipomedio','1');               
               $query = $this->db->get('medios');               
               return $query->result();               
           }
           function get_seleccionado()
           {
               $this->db->where('id', $this->input->post('nombremedio'));
               $query = $this->db->get('medios');
               
               return $query->result();
                       
           }
           
	   function get_one ($id) 
           {
		  $querys = $this->db->get_where('medios', array('id' => $id));
		  return $querys->result();
	   }
           
     function insert_entry_escrito() 
     {
        $data['nombremedio'] = $this->input->post('nombremedio');
        $data['tipomedio']   = ('1');
        $data['alcance']     = $this->input->post('alcance');

		  $this->db->insert('medios',$data);
	   }

     function insert_entry_electronico() 
     {
        $data['nombremedio'] = $this->input->post('nombremedio');
        $data['tipomedio']   = ('2');
        $data['alcance']     = $this->input->post('alcance');
        //date("Y-m-d",time());

        $this->db->insert('medios',$data);
	   }

     function update_medio() 
     {
            $data['id']          = $this->input->post('id');
            $data['nombremedio'] = $this->input->post('nombremedio');
            $data['tipomedio']   = $this->input->post('tipomedio');
            $data['alcance']     = $this->input->post('alcance');

            $this->db->update('medios',$data,array('id' => $_POST['id']));	
     }
           				   
    }
?>