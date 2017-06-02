<?php

namespace App\Model;

/**
 * @Entity
 * @Table(name="products")
 */
class Product
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    protected $id;

    /**
     * @Column(type="string")
     */
    protected $name;

    /**
     * @ManyToOne(targetEntity="Category", inversedBy="products")
     * @JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category;

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

    public function setCategory(Category $category)
    {
        $this->category = $category;
    }
}