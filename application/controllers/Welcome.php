<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('modeloJuego');
		$this->load->helper('url');
		
	}



	public function index(){
		$this->load->helper('url');

		$data['juegos']=$this->modeloJuego->obtener();
		$this->load->view('welcome_message',$data);
	}

	public function editar($titulo){
		$data['title'] = urldecode($titulo);

		$this->load->helper('url');
		$this->load->view('edicion',$data);

	}
	public function merma($titulo,$unidades){
		$titulo = urldecode($titulo);
		$unidades=$unidades-1;
		$this->load->helper('url');
		$this->modeloJuego->editarMerm($titulo,$unidades);
		redirect('');

	}
	public function editarBD(){
		$title=$this->input->post('title');
		$fabricante=$this->input->post('fabricante');
		$consola=$this->input->post('consola');
		$titulo=$this->input->post('titulo');
		$unidades=$this->input->post('unidades');
		$this->modeloJuego->editar($title, $fabricante,$consola,$titulo,$unidades);
		redirect('');
	}

	public function neww(){
		$fabricante=$this->input->post('fabricante');
		$consola=$this->input->post('consola');
		$titulo=$this->input->post('titulo');
		$unidades=$this->input->post('unidades');
		$this->modeloJuego->agregar($fabricante,$consola,$titulo,$unidades);
		redirect('');

	}

	public function eliminar($titulo){
		$titulo = urldecode($titulo);
		$this->modeloJuego->eliminar($titulo);
		redirect('');
	}


}
