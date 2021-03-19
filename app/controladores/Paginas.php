<?php 

class Paginas extends Controlador{
        public function __construct(){

        }

        public function index(){

                $datos = [
                        'titulo' => "Bienvenidos a Proyecto House"
                ];

                $this->vista('Paginas/inicio', $datos);
        }

}