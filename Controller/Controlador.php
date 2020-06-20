<?php
//Esto es una prueba
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once DIR . "/../View/MainnVista.php" ;
class Controlador
{
    private $vista;
    private $render;

    public function __construct()
    {
        $this->vista = new MainnVista();

    }
    public function load()
    {
        $html = $this->vista->getView();
        $this->render = str_replace("", "", $html);

    }
    public function render()
    {
        echo $this->render;
    }

}