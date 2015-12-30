<?php
class CampoInput {
    private $name;
    private $id;
    private $value;
    private $label;
    
    function getLabel() {
        return $this->label;
    }

    function setLabel($label) {
        $this->label = $label;
        return $this;
    }

        function getName() {
        return $this->name;
    }

    function getId() {
        return $this->id;
    }

    function getValue() {
        return $this->value;
    }

    function setName($name) {
        $this->name = $name;
        return $this;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    }

    function setValue($value) {
        $this->value = $value;
        return $this;
    }
    
    function render(){
        $html ="<div class='col-lg-3'>";
        $html .="<label for='{$this->id}' class='control-label'>{$this->label}</label>";
        $html .="<input id='{$this->id}' name='{$this->name}' value='{$this->value}' class='form-control'></input>";
        $html .="</div>";
        
        return $html;
    }


}
