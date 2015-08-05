<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Sistema de Seguimiento a Comunicados
 *
 * Aplicación Web desarrollada con CodeIgniter para PHP 4.3.2 or mejor
 *
 * @package		Sistema de Seguimiento a Comunicados
 * @author		Luis G Villaseñor
 * @copyright	Copyright (c) 2012 - 2015, SECTURE.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Upload Class
 *
 * @package		Sistema de Seguimiento a Comunicados
 * @subpackage	Controllers
 * @category	Upload
 * @author		Luis G Villaseñor
 */

class Upload extends Controller {

	function Upload()
      	{
      		parent::Controller();	
      	}

	function __construct()
	{
		parent::__construct();
		//$this->load->helper(array('form', 'url'));
		$this->load->model('upload_model');
		$this->load->model('seguimiento_escritos_model');
		$this->load->model('seguimiento_electronicos_model');
		$this->load->model('boletines_model');
	}
	function index()
	{
		// Obtener registros de la base de datos
		$data['get_imagenes'] = $this->upload_model->get_imagenes();
		// Obtener registros para el SELECT
		$data['get_for_menu_esc'] = $this->seguimiento_escritos_model->get_for_menu();
		$data['get_for_menu_ele'] = $this->seguimiento_electronicos_model->get_for_menu();
		//$data['get_all_boletines'] = $this->boletines_model->get_all();

		$this->load->view('header_view');
		$this->load->view('nav_view');
		$this->load->view('upload_form',$data);
		$this->load->view('footer_view');
	}

	function do_upload()
	{
		if($this->input->post('upload'))
		{

			$config['upload_path'] = './evidencias/';
			$config['allowed_types'] = 'gif|jpg|png|pdf';
			$config['max_size']    = '0';
			//$config['max_width']  = '1024';
			//$config['max_height']  = '768';
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());
				$data['get_imagenes'] = $this->upload_model->get_imagenes();
				$this->load->view('header_view');
		        $this->load->view('nav_view');
		        $this->load->view('upload_form',$data);
		        $this->load->view('footer_view');
				
			} else {
				// Datos de la imagen original que se subio al servidor
				$data=$this->upload->data();
				// Crear la imagen thumb
				$this->thumb($data);
				// Arreglo que almacena los datos que se guardaran en la tabla uploads de la base de datos
				$file=array(
				'img_name'=>$data['raw_name'],
				'thumb_name'=>$data['raw_name'].'_thumb',
				'ext'=>$data['file_ext'],
				'idSegEle'=>$this->input->post('idSegEle'),
				'idSegEsc'=>$this->input->post('idSegEsc'),
				'upload_date'=>time()
				);
				// Agregar el arreglo $file a la tabla upload de la base de datos
				$this->upload_model->add_image($file);
				
				$data = array('upload_data' => $this->upload->data());

				$this->load->view('header_view');
		        $this->load->view('nav_view');
		        $this->load->view('upload_success', $data);
		        $this->load->view('footer_view');
				
			}
		} else {
			redirect(site_url('upload'));
		}
	}


	// -------------------------------
	/**
	*
	*
	*/
	function reasignar()
	{
		if ($this->input->post('reasignar')) 
		{
			$idSegEle = intval($this->input->post('idSegEle')) ;
			$idSegEsc = intval($this->input->post('idSegEsc')) ;
			$id 	  = intval($this->input->post('id')) ;
			$status   = intval($this->input->post('status')) ;
			$data["reasignar"] = $this->upload_model->reasignar($idSegEle,$idSegEsc,$id,$status);
			$this->index();						
		} else {
			$this->load->view('header_view');
		    $this->load->view('nav_view');
		    $this->load->view('error_view');
		    $this->load->view('footer_view');
		  }		
	}
	// -------------------------------

	function thumb($data)
	{
		$config['image_library'] = 'gd2';
		$config['source_image'] =$data['full_path'];
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = 275;
		$config['height'] = 250;
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
	}

	function imagen($imagen)
	{
		// Obtener registros de la base de datos
		$data['get_one'] = $this->upload_model->get_one($imagen);
		$this->load->view('header_view');
        $this->load->view('nav_view');
        $this->load->view('imagen_view',$data);
        $this->load->view('footer_view');
	}

	function borrarImagen($id)
	{
		// Desactiva la imagen
		$this->upload_model->desactivar_img($id);
		// Muestra vista positiva
		$this->load->view('header_view');
        $this->load->view('nav_view');
        $this->load->view('borrarImagen_succes');
        $this->load->view('footer_view');
	}
	function activarImagen($id)
	{
		// Desactiva la imagen
		$this->upload_model->activar_img($id);
		// Muestra vista positiva
		$this->load->view('header_view');
        $this->load->view('nav_view');
        $this->load->view('activarImagen_succes');
        $this->load->view('footer_view');
	}


}
/* End of file .php */
/* Location: ./system/application/controllers/.php */
?>