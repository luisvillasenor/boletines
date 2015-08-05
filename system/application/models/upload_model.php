<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Sistema de Seguimiento a Comunicados
 *
 * Aplicación Web desarrollada con CodeIgniter para PHP 4.3.2 or mejor
 *
 * @package   Sistema de Seguimiento a Comunicados
 * @author    Tuts more
 * @copyright Copyright (c) 2012 - 2015, SECTURE.
 * @license   http://codeigniter.com/user_guide/license.html
 * @link    http://www.tutsmore.com/codeigniter/
 * @since   Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Upload_model Class
 *
 * @package   Sistema de Seguimiento a Comunicados
 * @subpackage  Models
 * @category  Upload_model
 * @author    Tuts more
 */
class Upload_model extends Model 
{
	var $id = '';
	var $img_name = '';
	var $thumb_name = '';
	var $ext = '';
	var $upload_date = '';
	var $idSegEle = '';
	var $idSegEsc = '';
		
	function Upload_model () 
	{
	  parent::Model();
	  $this->load->database();
	}

	function add_image($data)
	{
		$this->db->insert('uploads',$data);
	}

	// ------------------------------------------------------------------------

	/**
	 * Obtiene los registros de las imagenes almacenadas en la tabla "uploads"
	 *
	 * Consulta la tabla "uploads" y evalua si existen registros, sino regresa un FALSE sino devuelve
	 * el conjunto de registros en forma de Arreglo para ser usado por el controlador.
	 *
	 * @package   Sistema de Seguimiento a Comunicados
	 * @category  Upload_model
	 * @author    Luis Gabriel Villaseñor Alarcón
	 * @return 	  boolean Arreglo de registros con los datos de las imagenes para ser vistas si existen registros
	 * @version   1.0
	 * @copyright 2012-2015
	 * @filesource
	 */
	function get_imagenes () 
	{
		//$this->db->where('status',1);
		$this->db->order_by('status','desc');
		$query = $this->db->get('uploads');
		if ($query->num_rows() <= 0) {
		return NULL;
		} else {
		  return $query->result();
		  }
	}
	// ------------------------------------------------------------------------

	/**
	 * Obtiene los registros de las imagenes de un comunicado, almacenadas en la tabla "uploads"
	 *
	 * Consulta la tabla "uploads" y evalua si existen registros, sino regresa un FALSE sino devuelve
	 * el conjunto de registros en forma de Arreglo para ser usado por el controlador.
	 * Estos registros son de un comunicado dado.
	 *
	 * @package   Sistema de Seguimiento a Comunicados
	 * @category  Upload_model
	 * @author    Luis Gabriel Villaseñor Alarcón
	 * @return 	  boolean Arreglo de registros con los datos de las imagenes para ser vistas si existen registros
	 * @version   1.0
	 * @copyright 2012-2015
	 * @filesource
	 */ 
	function get_evidencias_escritos($idSegEsc)
	{
		$this->db->where('idSegEsc',$idSegEsc);
		$this->db->where('status',1);
		$this->db->order_by('id','asc');
		$query = $this->db->get('uploads');
		if ($query->num_rows() <= 0) {
			return NULL;
		} else {
		  return $query->result();
		  }
	}
	function get_evidencias_electronicos($idSegEle)
	{
		$this->db->where('idSegEle',$idSegEle);
		$this->db->where('status',1);
		$this->db->order_by('id','asc');
		$query = $this->db->get('uploads');
		if ($query->num_rows() <= 0) {
			return NULL;
		} else {
		  return $query->result();
		  }
	}
	// ------------------------------------------------------------------------

	/**
	 * Obtiene todos los registros de las evidencias almacenadas en la tabla "uploads"
	 *
	 * Consulta la tabla "uploads" y evalua si existen registros, sino regresa un FALSE sino devuelve
	 * el conjunto de registros en forma de Arreglo para ser usado por el controlador.
	 * Estos registros son toda la tabla de uploads.
	 *
	 * @package   Sistema de Seguimiento a Comunicados
	 * @category  Upload_model
	 * @author    Luis Gabriel Villaseñor Alarcón
	 * @return 	  boolean Arreglo de registros con los datos de las imagenes para ser vistas si existen registros
	 * @version   1.0
	 * @copyright 2012-2015
	 * @filesource
	 */ 
	function get_all_evidencias_escritos()
	{
		$this->db->where('status',1);
		$this->db->order_by('id','asc');
		$query = $this->db->get('uploads');
		if ($query->num_rows() <= 0) {
			return NULL;
		} else {
		  return $query->result();
		  }
	}
	// ------------------------------------------------------------------------

	/**
	 * Obtiene todos los registros de las evidencias almacenadas en la tabla "uploads"
	 *
	 * Consulta la tabla "uploads" y evalua si existen registros, sino regresa un FALSE sino devuelve
	 * el conjunto de registros en forma de Arreglo para ser usado por el controlador.
	 * Estos registros son toda la tabla de uploads.
	 *
	 * @package   Sistema de Seguimiento a Comunicados
	 * @category  Upload_model
	 * @author    Luis Gabriel Villaseñor Alarcón
	 * @return 	  boolean Arreglo de registros con los datos de las imagenes para ser vistas si existen registros
	 * @version   1.0
	 * @copyright 2012-2015
	 * @filesource
	 */ 
	function get_all_evidencias_electronicos()
	{
		$this->db->where('status',1);
		$this->db->order_by('id','asc');
		$query = $this->db->get('uploads');
		if ($query->num_rows() <= 0) {
			return NULL;
		} else {
		  return $query->result();
		  }
	}


	// ------------------------------------------------------------------------

	/**
	 * Obtiene un registro en la tabla "uploads"
	 *
	 * Consulta la tabla "uploads" y evalua si existen registros, sino regresa un FALSE sino devuelve
	 * el conjunto de registros en forma de Arreglo para ser usado por el controlador.
	 *
	 * @package   Sistema de Seguimiento a Comunicados
	 * @category  Upload_model
	 * @author    Luis Gabriel Villaseñor Alarcón
	 * @param 	  $imagen Nombre de la Imagen
	 * @return 	  boolean NULL si no hay registros en la BD o Arreglo de registros con los datos de las imagenes en la BD
	 * @version   1.0
	 * @copyright 2012-2015
	 * @filesource
	 */
	function get_one ($imagen) 
	{
		$this->db->where('img_name',$imagen);
		$query = $this->db->get('uploads');
		if ($query->num_rows() <= 0) {
		return NULL;
		} else {
		  return $query->result();
		  }
	}
	// ------------------------------------------------------------------------

	/**
	 * Desactiva una imagen
	 *
	 * Actualiza el status a 0, lo que significa que no se vera en pantalla.
	 * El archivo seguira existiendo en /evidencias/
	 * 
	 * @package   Sistema de Seguimiento a Comunicados
	 * @category  Upload_model
	 * @author    Luis Gabriel Villaseñor Alarcón
	 * @return 	  boolean Arreglo de registros con los datos de las imagenes para ser vistas si existen registros
	 * @version   1.0
	 * @copyright 2012-2015
	 * @filesource
	 */
	function desactivar_img($id) 
	{
		$data = array('status' => 0);
		$this->db->where('id',$id);
		$this->db->update('uploads',$data);
	}
	// ------------------------------------------------------------------------
	function activar_img($id) 
	{
		$data = array('status' => 1);
		$this->db->where('id',$id);
		$this->db->update('uploads',$data);
	}
	// ------------------------------------------------------------------------

	/**
	 * Update idSegEle y idSegEsc
	 *
	 * Actualiza el idSegEle y idSegEsc de un registro.
	 * El nombre de la Evidencia se queda intacta.
	 * 
	 * @package   Sistema de Seguimiento a Comunicados
	 * @category  Upload_model
	 * @author    Luis Gabriel Villaseñor Alarcón
	 * @param     int $idSegEle, int $idSegEsc, int $id
	 * @return 	  Boolean
	 * @version   1.0
	 * @copyright 2012-2015
	 * @filesource
	 */
	function reasignar($idSegEle,$idSegEsc,$id,$status)
	{
		$data = array('idSegEle' => $idSegEle,'idSegEsc' => $idSegEsc,'status' => $status);
		$this->db->where('id',$id);
		$this->db->update('uploads',$data);	
		
	}


}