<?php
namespace Phpfox\FormManager;

/**
 * Class TraitCollection
 *
 * @package Phpfox\FormManager
 */
trait TraitCollection
{
    /**
     * @var ElementInterface[]
     */
    protected $byNames = [];

    /**
     * @return ElementInterface[]
     */
    public function getElements()
    {
        return $this->byNames;
    }

    /**
     * @param array $params
     *
     * @return $this
     */
    public function addElement($params)
    {
        if ($params) {
            ;
        }
        return $this;
    }
}