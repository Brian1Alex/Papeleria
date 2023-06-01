<?php
class Articulo extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function insertar($datos)
    {
        return $this->db->insert("escolares", $datos);
    }

    function obtenerEsc()
    {
        $listadoEsc = $this->db->get("escolares");
        if ($listadoEsc->num_rows() > 0) {
            return $listadoEsc->result();
        } else {
            return false;
        }
    }

    function borrar($id_esc)
    {
        $this->db->where("id_esc", $id_esc);
        return $this->db->delete("escolares");
    }


    function insertarTec($datostec)
    {
        return $this->db->insert("tecno", $datostec);
    }

    function obtenerTec()
    {
        $listadoTec = $this->db->get("tecno");
        if ($listadoTec->num_rows() > 0) {
            return $listadoTec->result();
        } else {
            return false;
        }
    }

    function borrarTec($id_tec)
    {
        $this->db->where("id_tec", $id_tec);
        return $this->db->delete("tecno");
    }


    function insertarLib($datoslib)
    {
        return $this->db->insert("libros", $datoslib);
    }

    function obtenerLib()
    {
        $listadoLib = $this->db->get("libros");
        if ($listadoLib->num_rows() > 0) {
            return $listadoLib->result();
        } else {
            return false;
        }
    }

    function borrarLib($id_lib)
    {
        $this->db->where("id_lib", $id_lib);
        return $this->db->delete("libros");
    }
}
