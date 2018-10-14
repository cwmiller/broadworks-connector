<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFindMeFollowMeModifyAlertingGroupRequest
 *
 * Modify a Find-me/Follow-me alerting group.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupFindMeFollowMeModifyAlertingGroupRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName newAlertingGroupName
     * @var string|null
     */
    private $newAlertingGroupName = null;

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
     * @ElementName phoneNumberOrUserList
     * @var \CWM\BroadWorksConnector\Ocip\Models\FindMeFollowMeAlertingGroupReplacementOutgoingDNSIPURIorUserIdList|null
     */
    private $phoneNumberOrUserList = null;

    /**
     * @ElementName criteriaActivation
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[]
     */
    private $criteriaActivation = array(
        
    );

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
     * Getter for newAlertingGroupName
     *
     * @ElementName newAlertingGroupName
     * @return string|null
     */
    public function getNewAlertingGroupName()
    {
        return $this->newAlertingGroupName;
    }

    /**
     * Setter for newAlertingGroupName
     *
     * @ElementName newAlertingGroupName
     * @param string|null $newAlertingGroupName
     * @return $this
     */
    public function setNewAlertingGroupName($newAlertingGroupName)
    {
        $this->newAlertingGroupName = $newAlertingGroupName;
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
     * Getter for phoneNumberOrUserList
     *
     * @ElementName phoneNumberOrUserList
     * @return \CWM\BroadWorksConnector\Ocip\Models\FindMeFollowMeAlertingGroupReplacementOutgoingDNSIPURIorUserIdList|null
     */
    public function getPhoneNumberOrUserList()
    {
        return $this->phoneNumberOrUserList;
    }

    /**
     * Setter for phoneNumberOrUserList
     *
     * @ElementName phoneNumberOrUserList
     * @param \CWM\BroadWorksConnector\Ocip\Models\FindMeFollowMeAlertingGroupReplacementOutgoingDNSIPURIorUserIdList|null $phoneNumberOrUserList
     * @return $this
     */
    public function setPhoneNumberOrUserList(\CWM\BroadWorksConnector\Ocip\Models\FindMeFollowMeAlertingGroupReplacementOutgoingDNSIPURIorUserIdList $phoneNumberOrUserList)
    {
        $this->phoneNumberOrUserList = $phoneNumberOrUserList;
        return $this;
    }

    /**
     * Getter for criteriaActivation
     *
     * @ElementName criteriaActivation
     * @return \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[]
     */
    public function getCriteriaActivation()
    {
        return $this->criteriaActivation;
    }

    /**
     * Setter for criteriaActivation
     *
     * @ElementName criteriaActivation
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[] $criteriaActivation
     * @return $this
     */
    public function setCriteriaActivation(array $criteriaActivation)
    {
        $this->criteriaActivation = $criteriaActivation;
        return $this;
    }

    /**
     * Adder for criteriaActivation
     *
     * @ElementName criteriaActivation
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation $criteriaActivation
     * @return $this
     */
    public function addCriteriaActivation($criteriaActivation)
    {
        $this->criteriaActivation []= $criteriaActivation;
        return $this;
    }


}

