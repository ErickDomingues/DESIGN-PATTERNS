<?php

namespace DesignPatterns\FormGenerator\Campos\Tipos;

class CampoSelect extends \DesignPatterns\FormGenerator\Campos\Campo{

    private $opcoes = array();

    function getOpcoes() {
        return $this->opcoes;
    }

    function setOpcoes($opcoes = array()) {
        $this->opcoes = $opcoes;
        return $this;
    }

    function render() {
        $html = "<div class='col-lg-3'>";
        $html .="<label for='{$this->getId()}' class='control-label'>{$this->getLabel()}</label>";
        $html .="<select id='{$this->getId()}' name='{$this->getName()}' value='{$this->getValue()}' class='form-control'>";
        foreach ($this->getOpcoes() as $key => $value) {
            $html .="<option value='{$key}'>{$value}</option>";
        }
        $html .= "</select>";
        $html .="</div>";

        return $html;
    }

}
