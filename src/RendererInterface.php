<?php

namespace Phpfox\FormManager;


interface RendererInterface
{
    /**
     * @param $element
     *
     * @return string
     */
    public function render($element);
}