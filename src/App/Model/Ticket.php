<?php

namespace App\Model;

/**
 * @Entity
 * @Table(name="em_ticket")
 */
class Ticket
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    protected $id;

    /**
     * @ManyToOne(targetEntity="User")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    /**
     * @Column(length=40)
     */
    protected $number;

    /**
     * @Column(name="user_id", type="integer", nullable=true)
     */
    protected $userId;

    /**
     * @Column(name="staff_id", type="integer", nullable=true)
     */
    protected $staffId;

    /**
     * @Column(name="creator_id", type="integer", nullable=true)
     */
    protected $creatorId;

    /**
     * @Column(name="team_id", type="integer", nullable=true)
     */
    protected $teamId;

    /**
     * @Column(name="department_id", type="integer", nullable=true)
     */
    protected $departmentId;

    /**
     * @Column(name="topic_id", type="integer", nullable=true)
     */
    protected $topicId;

    /**
     * @Column(name="status_id", type="integer", nullable=true)
     */
    protected $statusId;

    /**
     * @Column(name="priority_id", type="integer", nullable=true)
     */
    protected $priorityId;

    /**
     * @Column(name="sla_id", type="integer", nullable=true)
     */
    protected $slaId;

    /**
     * @Column(name="source_id", type="integer", nullable=true)
     */
    protected $sourceId;

    /**
     * @Column(name="first_thread_id", type="integer", nullable=true)
     */
    protected $firstThreadId;

    /**
     * @Column(type="integer", nullable=true)
     */
    protected $created;

    /**
     * @Column(type="integer", nullable=true)
     */
    protected $updated;

    /**
     * @Column(type="integer", nullable=true)
     */
    protected $lastupdate;

    /**
     * @Column(type="integer", nullable=true)
     */
    protected $closed;

    /**
     * @Column(type="integer", nullable=true)
     */
    protected $reopened;

    /**
     * @Column(type="integer", nullable=true)
     */
    protected $duedate;

    /**
     * @Column(type="smallint", nullable=true)
     */
    protected $isanswered;

    /**
     * @Column(type="smallint", nullable=true)
     */
    protected $isoverdue;

    /**
     * @Column(name="creator_type", length=1, nullable=true)
     */
    protected $creatorType;

    /**
     * @Column(type="string", length=500)
     */
    protected $subject;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getStaffId()
    {
        return $this->staffId;
    }

    /**
     * @param mixed $staffId
     */
    public function setStaffId($staffId)
    {
        $this->staffId = $staffId;
    }

    /**
     * @return mixed
     */
    public function getCreatorId()
    {
        return $this->creatorId;
    }

    /**
     * @param mixed $creatorId
     */
    public function setCreatorId($creatorId)
    {
        $this->creatorId = $creatorId;
    }

    /**
     * @return mixed
     */
    public function getTeamId()
    {
        return $this->teamId;
    }

    /**
     * @param mixed $teamId
     */
    public function setTeamId($teamId)
    {
        $this->teamId = $teamId;
    }

    /**
     * @return mixed
     */
    public function getDepartmentId()
    {
        return $this->departmentId;
    }

    /**
     * @param mixed $departmentId
     */
    public function setDepartmentId($departmentId)
    {
        $this->departmentId = $departmentId;
    }

    /**
     * @return mixed
     */
    public function getTopicId()
    {
        return $this->topicId;
    }

    /**
     * @param mixed $topicId
     */
    public function setTopicId($topicId)
    {
        $this->topicId = $topicId;
    }

    /**
     * @return mixed
     */
    public function getStatusId()
    {
        return $this->statusId;
    }

    /**
     * @param mixed $statusId
     */
    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;
    }

    /**
     * @return mixed
     */
    public function getPriorityId()
    {
        return $this->priorityId;
    }

    /**
     * @param mixed $priorityId
     */
    public function setPriorityId($priorityId)
    {
        $this->priorityId = $priorityId;
    }

    /**
     * @return mixed
     */
    public function getSlaId()
    {
        return $this->slaId;
    }

    /**
     * @param mixed $slaId
     */
    public function setSlaId($slaId)
    {
        $this->slaId = $slaId;
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

    /**
     * @return mixed
     */
    public function getFirstThreadId()
    {
        return $this->firstThreadId;
    }

    /**
     * @param mixed $firstThreadId
     */
    public function setFirstThreadId($firstThreadId)
    {
        $this->firstThreadId = $firstThreadId;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param mixed $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * @return mixed
     */
    public function getLastupdate()
    {
        return $this->lastupdate;
    }

    /**
     * @param mixed $lastupdate
     */
    public function setLastupdate($lastupdate)
    {
        $this->lastupdate = $lastupdate;
    }

    /**
     * @return mixed
     */
    public function getClosed()
    {
        return $this->closed;
    }

    /**
     * @param mixed $closed
     */
    public function setClosed($closed)
    {
        $this->closed = $closed;
    }

    /**
     * @return mixed
     */
    public function getReopened()
    {
        return $this->reopened;
    }

    /**
     * @param mixed $reopened
     */
    public function setReopened($reopened)
    {
        $this->reopened = $reopened;
    }

    /**
     * @return mixed
     */
    public function getDuedate()
    {
        return $this->duedate;
    }

    /**
     * @param mixed $duedate
     */
    public function setDuedate($duedate)
    {
        $this->duedate = $duedate;
    }

    /**
     * @return mixed
     */
    public function getIsanswered()
    {
        return $this->isanswered;
    }

    /**
     * @param mixed $isanswered
     */
    public function setIsanswered($isanswered)
    {
        $this->isanswered = $isanswered;
    }

    /**
     * @return mixed
     */
    public function getIsoverdue()
    {
        return $this->isoverdue;
    }

    /**
     * @param mixed $isoverdue
     */
    public function setIsoverdue($isoverdue)
    {
        $this->isoverdue = $isoverdue;
    }

    /**
     * @return mixed
     */
    public function getCreatorType()
    {
        return $this->creatorType;
    }

    /**
     * @param mixed $creatorType
     */
    public function setCreatorType($creatorType)
    {
        $this->creatorType = $creatorType;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }
}