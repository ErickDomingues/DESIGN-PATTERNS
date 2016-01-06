<?php

namespace DesignPatterns\FormGenerator;

use DesignPatterns\FormGenerator\Campos\CampoInterface;

class Formulario {

    private $metodo;
    private $name;
    private $campos = array();
    
    public function __construct(Validator $validador) {
        
    }

    function getMetodo() {
        return $this->metodo;
    }

    function getName() {
        return $this->name;
    }

    function getCampos() {
        return $this->campos;
    }

    function setMetodo($metodo) {
        $this->metodo = $metodo;
        return $this;
    }

    function setName($name) {
        $this->name = $name;
        return $this;
    }

    function addCampo($id,  CampoInterface $campo) {
        $this->campos[$id] = array_merge($this->campos, array($campo));
        return $this;
    }
    
    function createField($id){
            echo $this->campos[$id][0]->render();
    }

    function render() {
        $html  ="<form method='{$this->metodo}' name='{$this->name}' ><fieldset>";
        foreach ($this->campos as $value) {
            $html .=$value[0]->render();
        }
        $html .= "</fieldset></form>";

        echo $html;
    }
    

}
