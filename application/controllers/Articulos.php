<?php
class Articulos extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Articulo'); 
    }

    public function escolares()
    {
        $datos['articulos'] = $this->Articulo->obtenerEsc();
        $this->load->view('header');
        $this->load->view('articulos/escolares', $datos);
        $this->load->view('footer');
    }

    public function tecnologia()
    {
        $tecno['articulos'] = $this->Articulo->obtenerTec();
        $this->load->view('header');
        $this->load->view('articulos/tecnologia', $tecno);
        $this->load->view('footer');
    }

    public function libros()
    {
        $lib['articulos'] = $this->Articulo->obtenerLib();
        $this->load->view('header');
        $this->load->view('articulos/libros', $lib);
        $this->load->view('footer');
    }

    public function nosotros()
    {
        $this->load->view('header');
        $this->load->view('articulos/nosotros');
        $this->load->view('footer');
    }

    public function guardarEsc()
    {
        $datosNuevoEsc = array(
            "nombre_esc" => $this->input->post('nombre_esc'),
            "precio_esc" => $this->input->post('precio_esc'),
            "cantidad_esc" => $this->input->post('cantidad_esc'),
            "descripcion_esc" => $this->input->post('descripcion_esc')
        );
        if ($this->Articulo->insertar($datosNuevoEsc)) {
            redirect('articulos/escolares');
        } else {
            echo "<h1>ERROR AL INSERTAR</h1>";
        }
    }

    public function eliminarEsc($id_esc)
    {
        if ($this->Articulo->borrar($id_esc)) {
            redirect('Articulos/escolares');
        } else {
            echo "ERROR AL BORRAR :( ";
        }
    }


    public function guardarTec()
    {
        $datosNuevoTec = array(
            "nombre_tec" => $this->input->post('nombre_tec'),
            "precio_tec" => $this->input->post('precio_tec'),
            "cantidad_tec" => $this->input->post('cantidad_tec'),
            "descripcion_tec" => $this->input->post('descripcion_esc')
        );
        if ($this->Articulo->insertarTec($datosNuevoTec)) {
            redirect('articulos/tecnologia');
        } else {
            echo "<h1>ERROR AL INSERTAR</h1>";
        }
    }

    public function eliminarTec($id_tec)
    {
        if ($this->Articulo->borrarTec($id_tec)) {
            redirect('Articulos/tecnologia');
        } else {
            echo "ERROR AL BORRAR :( ";
        }
    }

    public function guardarLib()
    {
        $datosNuevoTec = array(
            "nombre_lib" => $this->input->post('nombre_lib'),
            "precio_lib" => $this->input->post('precio_lib'),
            "cantidad_lib" => $this->input->post('cantidad_lib'),
            "descripcion_lib" => $this->input->post('descripcion_lib')
        );
        if ($this->Articulo->insertarLib($datosNuevoTec)) {
            redirect('articulos/libros');
        } else {
            echo "<h1>ERROR AL INSERTAR</h1>";
        }
    }

    public function eliminarLib($id_lib)
    {
        if ($this->Articulo->borrarLib($id_lib)) {
            redirect('Articulos/libros');
        } else {
            echo "ERROR AL BORRAR :( ";
        }
    }

    public function aescolares()
    {
        $this->load->view('header');
        $this->load->view('articulos/aescolares');
        $this->load->view('footer');
    }

    public function atecnologia()
    {
        $this->load->view('header');
        $this->load->view('articulos/atecnologia');
        $this->load->view('footer');
    }

    public function alibros()
    {
        $this->load->view('header');
        $this->load->view('articulos/alibros');
        $this->load->view('footer');
    }
}
