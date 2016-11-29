<?php

namespace Neutron\Form;

/**
 * Class Submit
 *
 * @package Neutron\Form
 */
class Submit extends Element implements FieldInterface
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