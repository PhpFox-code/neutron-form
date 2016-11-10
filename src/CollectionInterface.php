<?php

namespace Phpfox\Form;

interface CollectionInterface extends FieldInterface
{
    /**
     * @var FieldInterface[]
     */
    public function getElements();
}