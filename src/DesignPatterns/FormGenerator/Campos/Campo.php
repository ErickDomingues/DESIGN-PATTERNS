<?php

namespace DesignPatterns\FormGenerator\Campos;

abstract class Campo implements \DesignPatterns\FormGenerator\Campos\CampoInterface{
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
    
    abstract function render();

}
