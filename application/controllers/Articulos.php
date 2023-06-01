<?php
class Articulos extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function escolares()
    {
        $this->load->view('header');
        $this->load->view('articulos/escolares');
        $this->load->view('footer');
    }

    public function tecnologia()
    {
        $this->load->view('header');
        $this->load->view('articulos/tecnologia');
        $this->load->view('footer');
    }

    public function libros()
    {
        $this->load->view('header');
        $this->load->view('articulos/libros');
        $this->load->view('footer');
    }

    public function nosotros()
    {
        $this->load->view('header');
        $this->load->view('articulos/nosotros');
        $this->load->view('footer');
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
            redirect('Instructores/index');
        } else {
            echo "ERROR AL BORRAR :( ";
        }
    }
}
