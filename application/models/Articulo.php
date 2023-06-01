<?php 
    class Articulo extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }

        function insertar($datos){
            return $this->db->insert("escolares", $datos);
        }

        function obtenerEsc()
        {
            $listadoEsc = $this->db->get("escolares");
            if ($listadoEsc->num_rows()>0) {
                return $listadoEsc->result();
            } else {
                return false;
            }
            
        }
    }
?>