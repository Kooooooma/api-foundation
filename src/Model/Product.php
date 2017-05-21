<?php

namespace EasemobTickets\Model;

/**
 * @Entity
 */
class Product
{
    /**
     * @Id @Column(type="integer") @GeneratedValue
     */
    protected $id;

    protected $name;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}