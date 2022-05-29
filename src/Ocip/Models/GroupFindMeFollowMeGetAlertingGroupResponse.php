<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFindMeFollowMeGetAlertingGroupResponse
 *
 * Response to GroupFindMeFollowMeGetAlertingGroupRequest.
 *         Contains the alerting group information.
 * 	      The user table’s column headings are: "User Id", "Last Name", "First Name", "Hiragana Last Name" and "Hiragana First Name", "Phone Number", "Extension", "Department", "Email Address".
 *         The criteria table's column headings are: "Is Active", "Criteria Name", "Time Schedule", "Calls From", "Blacklisted", "Holiday Schedule"", "Calls To Type", "Calls To Number" and "Calls To Extension".
 *         The possible values for the "Calls To Type" column are the following or a combination of them separated by comma:
 *           - Primary
 *           - Alternate X (where x is a number between 1 and 10)
 *           The possible values for the "Calls To Number" column are the following or a combination of them separated by comma:
 *           - The value of the phone number for the corresponding Calls To Type, when the number is available. i.e. Alternate 1 may have extension, but no number.
 *           - When no number is available a blank space is provided instead.
 *         The possible values for the "Calls To Extension" column are the following or a combination of them separated by comma:
 *           - The value of the extension for the corresponding Calls To Type, when the extension is available. i.e. Primary may have number, but no extension.
 *           - When no extension is available a blank space is provided instead.
 *
 * @see GroupFindMeFollowMeGetAlertingGroupRequest
 * @Groups [{"id":"79f226053ee345f2ff4c37c37c8e9114:281","type":"sequence"}]
 */
class GroupFindMeFollowMeGetAlertingGroupResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName alertingGroupDescription
     * @Type string
     * @Optional
     * @Group 79f226053ee345f2ff4c37c37c8e9114:281
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $alertingGroupDescription = null;

    /**
     * @ElementName useDiversionInhibitor
     * @Type bool
     * @Group 79f226053ee345f2ff4c37c37c8e9114:281
     * @var bool|null
     */
    protected $useDiversionInhibitor = null;

    /**
     * @ElementName answerConfirmationRequired
     * @Type bool
     * @Group 79f226053ee345f2ff4c37c37c8e9114:281
     * @var bool|null
     */
    protected $answerConfirmationRequired = null;

    /**
     * @ElementName numberOfRings
     * @Type int
     * @Group 79f226053ee345f2ff4c37c37c8e9114:281
     * @MinInclusive 2
     * @MaxInclusive 20
     * @var int|null
     */
    protected $numberOfRings = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Array
     * @Optional
     * @Group 79f226053ee345f2ff4c37c37c8e9114:281
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    protected $phoneNumber = array(
        
    );

    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 79f226053ee345f2ff4c37c37c8e9114:281
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $userTable = null;

    /**
     * @ElementName criteriaTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 79f226053ee345f2ff4c37c37c8e9114:281
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $criteriaTable = null;

    /**
     * Getter for alertingGroupDescription
     *
     * @return string
     */
    public function getAlertingGroupDescription()
    {
        return $this->alertingGroupDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alertingGroupDescription;
    }

    /**
     * Setter for alertingGroupDescription
     *
     * @param string $alertingGroupDescription
     * @return $this
     */
    public function setAlertingGroupDescription($alertingGroupDescription)
    {
        $this->alertingGroupDescription = $alertingGroupDescription;
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
     * Getter for phoneNumber
     *
     * @return string[]
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string[] $phoneNumber
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
     * @param string $phoneNumber
     * @return $this
     */
    public function addPhoneNumber(string $phoneNumber)
    {
        $this->phoneNumber[] = $phoneNumber;
        return $this;
    }

    /**
     * Getter for userTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUserTable()
    {
        return $this->userTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userTable;
    }

    /**
     * Setter for userTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable
     * @return $this
     */
    public function setUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable)
    {
        $this->userTable = $userTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserTable()
    {
        $this->userTable = null;
        return $this;
    }

    /**
     * Getter for criteriaTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getCriteriaTable()
    {
        return $this->criteriaTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->criteriaTable;
    }

    /**
     * Setter for criteriaTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $criteriaTable
     * @return $this
     */
    public function setCriteriaTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $criteriaTable)
    {
        $this->criteriaTable = $criteriaTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCriteriaTable()
    {
        $this->criteriaTable = null;
        return $this;
    }


}

