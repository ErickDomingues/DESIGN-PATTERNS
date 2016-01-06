<?php

namespace DesignPatterns\FormGenerator\Campos\Tipos ;

class CampoInput extends \DesignPatterns\FormGenerator\Campos\Campo
{
   
    function render(){
        $html ="<div class='col-lg-3'>";
        $html .="<label for='{$this->getId()}' class='control-label'>{$this->getLabel()}</label>";
        $html .="<input id='{$this->getId()}' name='{$this->getName()}' value='{$this->getValue()}' class='form-control'></input>";
        $html .="</div>";
        
        return $html;
    }


}
