<?php

namespace Phpfox\FormManager;

/**
 * Class Submit
 *
 * @package Phpfox\FormManager
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