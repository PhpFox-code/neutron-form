<?php
namespace Neutron\Form;

/**
 * Class TraitCollection
 *
 * @package Neutron\Form
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