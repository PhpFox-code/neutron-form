<?php

namespace Phpfox\FormManager;

/**
 * Class Text
 *
 * @package Phpfox\FormManager
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