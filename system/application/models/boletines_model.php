<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Sistema de Seguimiento a Comunicados
 *
 * @package   Sistema de Seguimiento a Comunicados
 * @author    Luis G Villaseñor (Auxiliar de Informática)
 * @copyright Copyright (c) 2012 - 2015, SECTURE.
 * @license   
 * @link      
 * @since     Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Boletines_model Class
 *
 * @package     Sistema de Seguimiento a Comunicados
 * @subpackage  Models
 * @category    Boletines_model
 * @author      Luis G Villaseñor (Auxiliar de Informática)
 */
class Boletines_model extends Model {

    private $id = '';
    private $numero_boletin = '';
    private $titulo_boletin = '';

	function Boletines_model () {
		parent::Model();
		$this->load->database();
	}

// ------------------------------------------------------------------------
/**
 * Paginar listado de Boletines
 *
 * record_count Cuenta el numero de registros que hay en la tabla "boletiones" y regresa un numero.
 *
 * fetch obtiene un numero de registros limitados por la variable $limit. Adicional limita el numero 
 * de registros por pagina
 *
 * @package   Sistema de Seguimiento a Comunicados
 * @category  Boletines_model
 * @subpackage  Models
 * @author    Luis Gabriel Villaseñor Alarcón
 * @return    integer y array de registros
 * @version   1.0
 * @copyright 2012-2015
 * @filesource
 */

    public function record_count() {
        return $this->db->count_all('boletines');
    }

    public function fetch_countries($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('boletines');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function record_count_filtro($f_ini, $f_fin,$nombremedio) {
        $this->db->where('fecha >=', $f_ini);
        $this->db->where('fecha <=', $f_fin);
        $this->db->where('nombremedio', $nombremedio);
        return $this->db->count_all("boletines");
    }

    public function fetch_countries_filtro($limit, $start,$f_ini, $f_fin,$nombremedio) {
        $this->db->limit($limit, $start);
        $this->db->where('fecha >=', $f_ini);
        $this->db->where('fecha <=', $f_fin);
        $this->db->where('nombremedio', $nombremedio);
        $query = $this->db->get("boletines");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
// ------------------------------------------------------------------------
   
	 
    function get_all(){
        $this->db->order_by("numero_boletin","desc");
		$query = $this->db->get('boletines');
		return $query->result();
    }

    function get_one ($id) {
        $querys = $this->db->get_where('boletines', array('id' => $id));
		return $querys->result();
    }
           
    function insert_entry() {
        $data['numero_boletin']    = $this->input->post('numero_boletin');
        $data['titulo_boletin']    = $this->input->post('titulo_boletin');
        $query = $this->db->insert('boletines',$data);
    }
       	   
    function update_id($id){        
        $data['id']     = $id;
        $data['numero_boletin'] = $this->input->post('numero_boletin');
        $data['titulo_boletin'] = $this->input->post('titulo_boletin');
        $this->db->update('boletines',$data,array('id' => $_POST['id']));

    }
           				   
}
?>