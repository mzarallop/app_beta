<?php if ( ! defined('BASEPATH')) exit('No se permite el acceso directo al script');
	
	class Selectores
	{
		function clientes_region()
		{
			$CI = get_instance();

			$query = $CI->db->query("call sp_selectores('', 'regiones_clientes')");
			return $query->result_array();
		}

		function clientes_comuna($id)
		{
			$CI = get_instance();

			$query = $CI->db->query("call sp_selectores('$id', 'comunas_clientes')");
			return $query->result_array();
		}
	}

?>