<?php

namespace DesignPatterns\FormGenerator\Campos;

interface CampoInterface {

    function getLabel();

    function getName();

    function getId();

    function getValue();
    
    function setLabel($label);

    function setName($name);

    function setId($id);

    function setValue($value);
    
    function render();
}
