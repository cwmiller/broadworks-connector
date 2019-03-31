<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFindMeFollowMeGetAlertingGroupSelectiveCriteriaRequest21
 *
 * Request to get all the information of a specific Find-me/Follow-me alerting group selective criteria.
 *         The response is either GroupFindMeFollowMeGetAlertingGroupSelectiveCriteriaResponse21 or ErrorResponse.
 *
 * @see GroupFindMeFollowMeGetAlertingGroupSelectiveCriteriaResponse21
 * @see ErrorResponse
 * @Groups [{"id":"79f226053ee345f2ff4c37c37c8e9114:302","type":"sequence"}]
 */
class GroupFindMeFollowMeGetAlertingGroupSelectiveCriteriaRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 79f226053ee345f2ff4c37c37c8e9114:302
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName alertingGroupName
     * @Type string
     * @Group 79f226053ee345f2ff4c37c37c8e9114:302
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $alertingGroupName = null;

    /**
     * @ElementName criteriaName
     * @Type string
     * @Group 79f226053ee345f2ff4c37c37c8e9114:302
     * @MinLength 1
     * @MaxLength 50
     * @var string|null
     */
    private $criteriaName = null;

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

