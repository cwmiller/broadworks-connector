<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFindMeFollowMeAddAlertingGroupRequest
 *
 * Add an alerting group to a Find-me/Follow-me instance.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupFindMeFollowMeAddAlertingGroupRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName alertingGroupName
     * @var string|null
     */
    private $alertingGroupName = null;

    /**
     * @ElementName alertingGroupDescription
     * @var string|null
     */
    private $alertingGroupDescription = null;

    /**
     * @ElementName useDiversionInhibitor
     * @var bool|null
     */
    private $useDiversionInhibitor = null;

    /**
     * @ElementName answerConfirmationRequired
     * @var bool|null
     */
    private $answerConfirmationRequired = null;

    /**
     * @ElementName numberOfRings
     * @var int|null
     */
    private $numberOfRings = null;

    /**
     * @ElementName phoneNumber
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Getter for alertingGroupName
     *
     * @ElementName alertingGroupName
     * @return string|null
     */
    public function getAlertingGroupName()
    {
        return $this->alertingGroupName;
    }

    /**
     * Setter for alertingGroupName
     *
     * @ElementName alertingGroupName
     * @param string|null $alertingGroupName
     * @return $this
     */
    public function setAlertingGroupName($alertingGroupName)
    {
        $this->alertingGroupName = $alertingGroupName;
        return $this;
    }

    /**
     * Getter for alertingGroupDescription
     *
     * @ElementName alertingGroupDescription
     * @return string|null
     */
    public function getAlertingGroupDescription()
    {
        return $this->alertingGroupDescription;
    }

    /**
     * Setter for alertingGroupDescription
     *
     * @ElementName alertingGroupDescription
     * @param string|null $alertingGroupDescription
     * @return $this
     */
    public function setAlertingGroupDescription($alertingGroupDescription)
    {
        $this->alertingGroupDescription = $alertingGroupDescription;
        return $this;
    }

    /**
     * Getter for useDiversionInhibitor
     *
     * @ElementName useDiversionInhibitor
     * @return bool|null
     */
    public function getUseDiversionInhibitor()
    {
        return $this->useDiversionInhibitor;
    }

    /**
     * Setter for useDiversionInhibitor
     *
     * @ElementName useDiversionInhibitor
     * @param bool|null $useDiversionInhibitor
     * @return $this
     */
    public function setUseDiversionInhibitor($useDiversionInhibitor)
    {
        $this->useDiversionInhibitor = $useDiversionInhibitor;
        return $this;
    }

    /**
     * Getter for answerConfirmationRequired
     *
     * @ElementName answerConfirmationRequired
     * @return bool|null
     */
    public function getAnswerConfirmationRequired()
    {
        return $this->answerConfirmationRequired;
    }

    /**
     * Setter for answerConfirmationRequired
     *
     * @ElementName answerConfirmationRequired
     * @param bool|null $answerConfirmationRequired
     * @return $this
     */
    public function setAnswerConfirmationRequired($answerConfirmationRequired)
    {
        $this->answerConfirmationRequired = $answerConfirmationRequired;
        return $this;
    }

    /**
     * Getter for numberOfRings
     *
     * @ElementName numberOfRings
     * @return int|null
     */
    public function getNumberOfRings()
    {
        return $this->numberOfRings;
    }

    /**
     * Setter for numberOfRings
     *
     * @ElementName numberOfRings
     * @param int|null $numberOfRings
     * @return $this
     */
    public function setNumberOfRings($numberOfRings)
    {
        $this->numberOfRings = $numberOfRings;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     * @ElementName phoneNumber
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string|null $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }


}

