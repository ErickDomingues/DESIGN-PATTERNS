<?php

namespace DesignPatterns\FormGenerator\Campos\Tipos;

class CampoButton extends \DesignPatterns\FormGenerator\Campos\Campo{
    
    function render(){
        $html ="<div class='col-lg-3'>";
        $html .="<button type='submit' id='{$this->getId()}' name='{$this->getName()}' value='{$this->getValue()}' class='form-control'>{$this->getLabel()}</input>";
        $html .="</div>";
        
        return $html;
    }


}
