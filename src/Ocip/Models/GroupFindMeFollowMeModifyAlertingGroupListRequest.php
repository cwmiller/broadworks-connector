<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFindMeFollowMeModifyAlertingGroupListRequest
 *
 * Modify the priorities assigned to alerting groups
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         NOTE: The command fails if all the alerting groups defined for the user are not provided.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"146ca46a7097f08aed7a73ab65f17df8:427","type":"sequence"}]
 */
class GroupFindMeFollowMeModifyAlertingGroupListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 146ca46a7097f08aed7a73ab65f17df8:427
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName alertingGroupName
     * @Type string
     * @Array
     * @Optional
     * @Group 146ca46a7097f08aed7a73ab65f17df8:427
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $alertingGroupName = [
        
    ];

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for alertingGroupName
     *
     * @return string[]
     */
    public function getAlertingGroupName()
    {
        return $this->alertingGroupName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alertingGroupName;
    }

    /**
     * Setter for alertingGroupName
     *
     * @param string[] $alertingGroupName
     * @return $this
     */
    public function setAlertingGroupName(array $alertingGroupName)
    {
        $this->alertingGroupName = $alertingGroupName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlertingGroupName()
    {
        $this->alertingGroupName = null;
        return $this;
    }

    /**
     * Adder for alertingGroupName
     *
     * @param string $alertingGroupName
     * @return $this
     */
    public function addAlertingGroupName(string $alertingGroupName)
    {
        $this->alertingGroupName[] = $alertingGroupName;
        return $this;
    }
}

