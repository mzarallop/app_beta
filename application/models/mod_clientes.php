<?php if ( ! defined('BASEPATH')) exit('No se permite el acceso directo al script');

	class Mod_clientes extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function mostrar_clientes($param)
		{
			if($param['tipo']=='region')
			{
				$query = $this->db->query("select ID_CLIENTE, NOMBRES, RAZON_SOCIAL, CALLE, COD_AREA, TELEFONO, EMAIL, AUX1, AUX2, ALUM_SEP, RBD, MONTO_SEP, COMUNA from core_clientes where REGION = '".$param['id']."'");
			}
			elseif($param['tipo']=='comuna')
			{
				$query = $this->db->query("select ID_CLIENTE, NOMBRES, RAZON_SOCIAL, CALLE, COD_AREA, TELEFONO, EMAIL, AUX1, AUX2, ALUM_SEP, RBD, MONTO_SEP, COMUNA from core_clientes where COMUNA = '".$param['id']."'");
			}

			if(isset($query))
			{

			return $query->result_array();
			}
		}
	}
?>