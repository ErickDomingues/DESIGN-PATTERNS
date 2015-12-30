<?php

interface Campo {

    function getName();

    function getId();

    function getValue();

    function setName($name);

    function setId($id);

    function setValue($value);

    function render();
}
