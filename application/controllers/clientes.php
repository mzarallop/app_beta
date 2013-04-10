<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientes extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	
	public function index()
	{
			

			$datos['css'] = array("bootstrap.css", "bootstrap.min.css", "clientes/clientes.css");
			$datos['js'] = array("jquery.js","bootstrap.js", "bootstrap.min.js", "bootstrap-tab.js","clientes/clientes.js");
			$datos['title'] = 'Gestión de clientes';
			$datos['regiones'] = $this->selectores->clientes_region();
			$this->load->database();
			$this->load->view('fijos/head', $datos);
			$this->load->view('fijos/menu', $datos);
			$this->load->view('clientes/index', $datos);
			$this->load->view('fijos/footer');
	}
	
	public function ficha()
	{
			$datos['css'] = array("bootstrap.css", "bootstrap.min.css");
			$datos['js'] = array("jquery.js","bootstrap.js", "bootstrap.min.js", "bootstrap-tab.js");
			$datos['title'] = 'Ficha del Cliente';

			$this->load->database();
			$this->load->view('fijos/head', $datos);
			$this->load->view('clientes/ficha', $datos);
			$this->load->view('fijos/footer');
	}

	public function ajax()
	{
		switch(@$_POST['case'])
		{
			case 1://comunas clientes
				$com = $this->selectores->clientes_comuna($_POST['id']);
					$div = '<option>--</option>';
				foreach($com as $co){
					$div.= '<option value="'.$co['NOM_COMUNA'].'">'.$co['NOM_COMUNA'].' ('.$co['total'].')</option>';
				}
				echo $div;
			break;
			case 2:
				$this->load->model('mod_clientes');

				$clientes = $this->mod_clientes->mostrar_clientes($_POST);
					
					$tabla = '<table class="table table-striped table-condensed">';
					foreach($clientes as $cliente)
					{
						$tabla.='<tr>';
						$tabla.='<td><input type="checkbox" value="'.$cliente['ID_CLIENTE'].'" id="chk_cliente" name="chk_cliente" /></td>';
						$tabla.='<td>'.$cliente['ID_CLIENTE'].'</td>';
						$tabla.='<td>'.$cliente['NOMBRES'].'</td>';
						$tabla.='<td>'.$cliente['COMUNA'].'</td>';
						$tabla.='<td>'.$cliente['COD_AREA'].' - '.$cliente['TELEFONO'].'</td>';
						$tabla.='<td>'.$cliente['EMAIL'].'</td>';
						$tabla.='<td><a href="javascript:;">Ver</a></td>';
						$tabla.='</tr>';
					}
						$tabla.='</table>';
					echo $tabla;	
			break;
		}
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */