<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class modeloJuego extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    
    public function obtener(){
        $query=$this->db->get("juego");
        return $query->result();

    }

    public function editar($title,$fabricante,$consola,$titulo,$unidades){
        $data=array(
            'fabricante'=>$fabricante,
            'consola'=>$consola,
            'titulo'=>$titulo,
            'unidades'=>$unidades
            );

    $this->db->where('titulo', $title);
    $this->db->update('juego',$data);
    return $this->db->distinct();
    }
    

    public function editarMerm($titulo,$unidades){

        $this->db->where('titulo',$titulo);
        if($unidades>0){
        $data = array('unidades' =>$unidades);
       $this->db->update('juego',$data);
       }


    }


    public function agregar($fabricante,$consola,$titulo,$unidades){
        $data=array(
            'fabricante'=>$fabricante,
            'consola'=>$consola,
            'titulo'=>$titulo,
            'unidades'=>$unidades
            );

        $this->db->insert('juego', $data);
    }
     public function eliminar($titulo){
        $data = array(
      'titulo' => $titulo
    );

    $this->db->delete('juego', $data);
    }


  }



