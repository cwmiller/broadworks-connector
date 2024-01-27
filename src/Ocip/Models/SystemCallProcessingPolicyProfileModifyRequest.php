<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileModifyRequest
 *
 * Modify a call processing policy profile in system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced by SystemCallProcessingPolicyProfileModifyRequest20.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemCallProcessingPolicyProfileModifyRequest20
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:24216","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName name
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:24216
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName newName
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:24216
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $newName = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:24216
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $description = null;

    /**
     * @ElementName assignedSubscriberTypeList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementCallProcessingPolicyProfileSubscriberTypeList
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:24216
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementCallProcessingPolicyProfileSubscriberTypeList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $assignedSubscriberTypeList = null;

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for newName
     *
     * @return string
     */
    public function getNewName()
    {
        return $this->newName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newName;
    }

    /**
     * Setter for newName
     *
     * @param string $newName
     * @return $this
     */
    public function setNewName($newName)
    {
        $this->newName = $newName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewName()
    {
        $this->newName = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description = null)
    {
        if ($description === null) {
            $this->description = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->description = $description;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }

    /**
     * Getter for assignedSubscriberTypeList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementCallProcessingPolicyProfileSubscriberTypeList|null
     */
    public function getAssignedSubscriberTypeList()
    {
        return $this->assignedSubscriberTypeList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->assignedSubscriberTypeList;
    }

    /**
     * Setter for assignedSubscriberTypeList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementCallProcessingPolicyProfileSubscriberTypeList|null $assignedSubscriberTypeList
     * @return $this
     */
    public function setAssignedSubscriberTypeList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementCallProcessingPolicyProfileSubscriberTypeList $assignedSubscriberTypeList = null)
    {
        if ($assignedSubscriberTypeList === null) {
            $this->assignedSubscriberTypeList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->assignedSubscriberTypeList = $assignedSubscriberTypeList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAssignedSubscriberTypeList()
    {
        $this->assignedSubscriberTypeList = null;
        return $this;
    }
}

