<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFindMeFollowMeGetAlertingGroupSelectiveCriteriaRequest
 *
 * Request to get all the information of a specific Find-me/Follow-me alerting group selective criteria.
 *         The response is either GroupFindMeFollowMeGetAlertingGroupResponse or ErrorResponse.
 *         Replaced by: GroupFindMeFollowMeGetAlertingGroupSelectiveCriteriaRequest21
 *
 * @see GroupFindMeFollowMeGetAlertingGroupResponse
 * @see ErrorResponse
 * @see GroupFindMeFollowMeGetAlertingGroupSelectiveCriteriaRequest21
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:9792","type":"sequence"}]
 */
class GroupFindMeFollowMeGetAlertingGroupSelectiveCriteriaRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9792
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName alertingGroupName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9792
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $alertingGroupName = null;

    /**
     * @ElementName criteriaName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:9792
     * @MinLength 1
     * @MaxLength 50
     * @var string|null
     */
    protected $criteriaName = null;

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
     * @return string
     */
    public function getAlertingGroupName()
    {
        return $this->alertingGroupName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alertingGroupName;
    }

    /**
     * Setter for alertingGroupName
     *
     * @param string $alertingGroupName
     * @return $this
     */
    public function setAlertingGroupName($alertingGroupName)
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
     * Getter for criteriaName
     *
     * @return string
     */
    public function getCriteriaName()
    {
        return $this->criteriaName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->criteriaName;
    }

    /**
     * Setter for criteriaName
     *
     * @param string $criteriaName
     * @return $this
     */
    public function setCriteriaName($criteriaName)
    {
        $this->criteriaName = $criteriaName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCriteriaName()
    {
        $this->criteriaName = null;
        return $this;
    }


}

