<?php

class Formulario {

    private $metodo;
    private $name;
    private $campos = array();

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

    function addCampo($campo) {
        $this->campos = array_merge($this->campos, array($campo));
        return $this;
    }

    function render() {
        $html  ="<form method='{$this->metodo}' name='{$this->name}' >";
        foreach ($this->campos as $value) {
            $html .=$value->render();
        }
        $html .= "</form>";

        echo $html;
    }

}
