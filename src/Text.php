<?php

namespace Neutron\Form;

/**
 * Class Text
 *
 * @package Neutron\Form
 */
class Text extends Element implements FieldInterface
{
    /**
     * @inheritdoc
     */
    public function setValue($value)
    {
        $this->setAttribute('value', (string)$value);
        $this->value = $value;
        return $this;
    }
}