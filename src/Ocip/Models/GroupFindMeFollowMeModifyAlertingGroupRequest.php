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
 * @Groups [{"id":"79f226053ee345f2ff4c37c37c8e9114:445","type":"sequence"}]
 */
class GroupFindMeFollowMeModifyAlertingGroupRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 79f226053ee345f2ff4c37c37c8e9114:445
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName alertingGroupName
     * @Type string
     * @Group 79f226053ee345f2ff4c37c37c8e9114:445
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $alertingGroupName = null;

    /**
     * @ElementName newAlertingGroupName
     * @Type string
     * @Optional
     * @Group 79f226053ee345f2ff4c37c37c8e9114:445
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $newAlertingGroupName = null;

    /**
     * @ElementName alertingGroupDescription
     * @Type string
     * @Nillable
     * @Optional
     * @Group 79f226053ee345f2ff4c37c37c8e9114:445
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $alertingGroupDescription = null;

    /**
     * @ElementName useDiversionInhibitor
     * @Type bool
     * @Optional
     * @Group 79f226053ee345f2ff4c37c37c8e9114:445
     * @var bool|null
     */
    private $useDiversionInhibitor = null;

    /**
     * @ElementName answerConfirmationRequired
     * @Type bool
     * @Optional
     * @Group 79f226053ee345f2ff4c37c37c8e9114:445
     * @var bool|null
     */
    private $answerConfirmationRequired = null;

    /**
     * @ElementName numberOfRings
     * @Type int
     * @Optional
     * @Group 79f226053ee345f2ff4c37c37c8e9114:445
     * @MinInclusive 2
     * @MaxInclusive 20
     * @var int|null
     */
    private $numberOfRings = null;

    /**
     * @ElementName phoneNumberOrUserList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\FindMeFollowMeAlertingGroupReplacementOutgoingDNSIPURIorUserIdList
     * @Nillable
     * @Optional
     * @Group 79f226053ee345f2ff4c37c37c8e9114:445
     * @var \CWM\BroadWorksConnector\Ocip\Models\FindMeFollowMeAlertingGroupReplacementOutgoingDNSIPURIorUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $phoneNumberOrUserList = null;

    /**
     * @ElementName criteriaActivation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation
     * @Array
     * @Optional
     * @Group 79f226053ee345f2ff4c37c37c8e9114:445
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[]
     */
    private $criteriaActivation = array(
        
    );

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
     * Getter for newAlertingGroupName
     *
     * @return string
     */
    public function getNewAlertingGroupName()
    {
        return $this->newAlertingGroupName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newAlertingGroupName;
    }

    /**
     * Setter for newAlertingGroupName
     *
     * @param string $newAlertingGroupName
     * @return $this
     */
    public function setNewAlertingGroupName($newAlertingGroupName)
    {
        $this->newAlertingGroupName = $newAlertingGroupName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewAlertingGroupName()
    {
        $this->newAlertingGroupName = null;
        return $this;
    }

    /**
     * Getter for alertingGroupDescription
     *
     * @return string|null
     */
    public function getAlertingGroupDescription()
    {
        return $this->alertingGroupDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alertingGroupDescription;
    }

    /**
     * Setter for alertingGroupDescription
     *
     * @param string|null $alertingGroupDescription
     * @return $this
     */
    public function setAlertingGroupDescription($alertingGroupDescription = null)
    {
        if ($alertingGroupDescription === null) {
            $this->alertingGroupDescription = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->alertingGroupDescription = $alertingGroupDescription;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlertingGroupDescription()
    {
        $this->alertingGroupDescription = null;
        return $this;
    }

    /**
     * Getter for useDiversionInhibitor
     *
     * @return bool
     */
    public function getUseDiversionInhibitor()
    {
        return $this->useDiversionInhibitor instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useDiversionInhibitor;
    }

    /**
     * Setter for useDiversionInhibitor
     *
     * @param bool $useDiversionInhibitor
     * @return $this
     */
    public function setUseDiversionInhibitor($useDiversionInhibitor)
    {
        $this->useDiversionInhibitor = $useDiversionInhibitor;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseDiversionInhibitor()
    {
        $this->useDiversionInhibitor = null;
        return $this;
    }

    /**
     * Getter for answerConfirmationRequired
     *
     * @return bool
     */
    public function getAnswerConfirmationRequired()
    {
        return $this->answerConfirmationRequired instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->answerConfirmationRequired;
    }

    /**
     * Setter for answerConfirmationRequired
     *
     * @param bool $answerConfirmationRequired
     * @return $this
     */
    public function setAnswerConfirmationRequired($answerConfirmationRequired)
    {
        $this->answerConfirmationRequired = $answerConfirmationRequired;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnswerConfirmationRequired()
    {
        $this->answerConfirmationRequired = null;
        return $this;
    }

    /**
     * Getter for numberOfRings
     *
     * @return int
     */
    public function getNumberOfRings()
    {
        return $this->numberOfRings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfRings;
    }

    /**
     * Setter for numberOfRings
     *
     * @param int $numberOfRings
     * @return $this
     */
    public function setNumberOfRings($numberOfRings)
    {
        $this->numberOfRings = $numberOfRings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfRings()
    {
        $this->numberOfRings = null;
        return $this;
    }

    /**
     * Getter for phoneNumberOrUserList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\FindMeFollowMeAlertingGroupReplacementOutgoingDNSIPURIorUserIdList|null
     */
    public function getPhoneNumberOrUserList()
    {
        return $this->phoneNumberOrUserList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumberOrUserList;
    }

    /**
     * Setter for phoneNumberOrUserList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\FindMeFollowMeAlertingGroupReplacementOutgoingDNSIPURIorUserIdList|null $phoneNumberOrUserList
     * @return $this
     */
    public function setPhoneNumberOrUserList(\CWM\BroadWorksConnector\Ocip\Models\FindMeFollowMeAlertingGroupReplacementOutgoingDNSIPURIorUserIdList $phoneNumberOrUserList = null)
    {
        if ($phoneNumberOrUserList === null) {
            $this->phoneNumberOrUserList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->phoneNumberOrUserList = $phoneNumberOrUserList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumberOrUserList()
    {
        $this->phoneNumberOrUserList = null;
        return $this;
    }

    /**
     * Getter for criteriaActivation
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[]
     */
    public function getCriteriaActivation()
    {
        return $this->criteriaActivation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->criteriaActivation;
    }

    /**
     * Setter for criteriaActivation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[] $criteriaActivation
     * @return $this
     */
    public function setCriteriaActivation(array $criteriaActivation)
    {
        $this->criteriaActivation = $criteriaActivation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCriteriaActivation()
    {
        $this->criteriaActivation = null;
        return $this;
    }

    /**
     * Adder for criteriaActivation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation $criteriaActivation
     * @return $this
     */
    public function addCriteriaActivation($criteriaActivation)
    {
        $this->criteriaActivation[] = $criteriaActivation;
        return $this;
    }


}

