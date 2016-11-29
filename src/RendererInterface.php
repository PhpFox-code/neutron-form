<?php

namespace Neutron\Form;


interface RendererInterface
{
    /**
     * @param $element
     *
     * @return string
     */
    public function render($element);
}