<?php

namespace App\Model;

/**
 * @Entity
 * @Table(name="em_ticket_thread")
 */
class Thread
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    protected $id;

    /**
     * @Column(name="ticket_id", type="integer")
     */
    protected $ticketId;

    /**
     * @Column(length=10)
     */
    protected $type;

    /**
     * @Column(name="operator_id", type="integer")
     */
    protected $operatorId;

    /**
     * @Column(name="operator_type", length=1)
     */
    protected $operatorType;

    /**
     * @Column(length=500, nullable=true)
     */
    protected $data;

    /**
     * @Column(type="text", nullable=true)
     */
    protected $content;

    /**
     * @Column(length=500, nullable=true)
     */
    protected $title;

    /**
     * @Column(name="ip_addresss", length=50, nullable=true)
     */
    protected $ipAddresss;

    /**
     * @Column(name="source_id", type="integer", nullable=true)
     */
    protected $sourceId;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTicketId()
    {
        return $this->ticketId;
    }

    /**
     * @param mixed $ticketId
     */
    public function setTicketId($ticketId)
    {
        $this->ticketId = $ticketId;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getOperatorId()
    {
        return $this->operatorId;
    }

    /**
     * @param mixed $operatorId
     */
    public function setOperatorId($operatorId)
    {
        $this->operatorId = $operatorId;
    }

    /**
     * @return mixed
     */
    public function getOperatorType()
    {
        return $this->operatorType;
    }

    /**
     * @param mixed $operatorType
     */
    public function setOperatorType($operatorType)
    {
        $this->operatorType = $operatorType;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getIpAddresss()
    {
        return $this->ipAddresss;
    }

    /**
     * @param mixed $ipAddresss
     */
    public function setIpAddresss($ipAddresss)
    {
        $this->ipAddresss = $ipAddresss;
    }

    /**
     * @return mixed
     */
    public function getSourceId()
    {
        return $this->sourceId;
    }

    /**
     * @param mixed $sourceId
     */
    public function setSourceId($sourceId)
    {
        $this->sourceId = $sourceId;
    }
}