<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupConsolidatedDnAssignListRequest
 *
 * Adds DNs to enterprise and group and activates the DNs on assignment.  
 *         It is possible to add either: a single DN,  
 *         or a list of DNs, or a range of DNs, or any combination thereof. 
 *         The response is either SuccessResponse or GroupConsolidatedDnAssignListResponse.
 *
 * @see SuccessResponse
 * @see GroupConsolidatedDnAssignListResponse
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:3064","type":"sequence"}]
 */
class GroupConsolidatedDnAssignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:3064
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:3064
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName phoneNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ActivatableDN
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:3064
     * @var \CWM\BroadWorksConnector\Ocip\Models\ActivatableDN[]
     */
    protected $phoneNumber = [
        
    ];

    /**
     * @ElementName dnRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ActivatableDNRange
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:3064
     * @var \CWM\BroadWorksConnector\Ocip\Models\ActivatableDNRange[]
     */
    protected $dnRange = [
        
    ];

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ActivatableDN[]
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ActivatableDN[] $phoneNumber
     * @return $this
     */
    public function setPhoneNumber(array $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
        return $this;
    }

    /**
     * Adder for phoneNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ActivatableDN $phoneNumber
     * @return $this
     */
    public function addPhoneNumber($phoneNumber)
    {
        $this->phoneNumber[] = $phoneNumber;
        return $this;
    }

    /**
     * Getter for dnRange
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ActivatableDNRange[]
     */
    public function getDnRange()
    {
        return $this->dnRange instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnRange;
    }

    /**
     * Setter for dnRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ActivatableDNRange[] $dnRange
     * @return $this
     */
    public function setDnRange(array $dnRange)
    {
        $this->dnRange = $dnRange;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDnRange()
    {
        $this->dnRange = null;
        return $this;
    }

    /**
     * Adder for dnRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ActivatableDNRange $dnRange
     * @return $this
     */
    public function addDnRange($dnRange)
    {
        $this->dnRange[] = $dnRange;
        return $this;
    }
}

