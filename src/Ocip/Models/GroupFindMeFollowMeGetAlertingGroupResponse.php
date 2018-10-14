<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFindMeFollowMeGetAlertingGroupResponse
 *
 * Response to GroupFindMeFollowMeGetAlertingGroupRequest.
 *         Contains the alerting group information.
 * 	      The user table’s column headings are: "User Id", "Last Name", "First
 * Name", "Hiragana Last Name" and "Hiragana First Name", "Phone Number",
 * "Extension", "Department", "Email Address".
 *         The criteria table's column headings are: "Is Active", "Criteria Name",
 * "Time Schedule", "Calls From", "Blacklisted", "Holiday Schedule"", "Calls To
 * Type", "Calls To Number" and "Calls To Extension".
 *         The possible values for the "Calls To Type" column are the following or
 * a combination of them separated by comma:
 *           - Primary
 *           - Alternate X (where x is a number between 1 and 10)
 *           The possible values for the "Calls To Number" column are the following
 * or a combination of them separated by comma:
 *           - The value of the phone number for the corresponding Calls To Type,
 * when the number is available. i.e. Alternate 1 may have extension, but no
 * number.
 *           - When no number is available a blank space is provided instead.
 *         The possible values for the "Calls To Extension" column are the
 * following or a combination of them separated by comma:
 *           - The value of the extension for the corresponding Calls To Type, when
 * the extension is available. i.e. Primary may have number, but no extension.
 *           - When no extension is available a blank space is provided instead.
 *
 * @see GroupFindMeFollowMeGetAlertingGroupRequest
 */
class GroupFindMeFollowMeGetAlertingGroupResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

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
     * @var string[]
     */
    private $phoneNumber = array(
        
    );

    /**
     * @ElementName userTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userTable = null;

    /**
     * @ElementName criteriaTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $criteriaTable = null;

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
     * @return string[]
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string[] $phoneNumber
     * @return $this
     */
    public function setPhoneNumber(array $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Adder for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string $phoneNumber
     * @return $this
     */
    public function addPhoneNumber(string $phoneNumber)
    {
        $this->phoneNumber []= $phoneNumber;
        return $this;
    }

    /**
     * Getter for userTable
     *
     * @ElementName userTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getUserTable()
    {
        return $this->userTable;
    }

    /**
     * Setter for userTable
     *
     * @ElementName userTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $userTable
     * @return $this
     */
    public function setUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable)
    {
        $this->userTable = $userTable;
        return $this;
    }

    /**
     * Getter for criteriaTable
     *
     * @ElementName criteriaTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getCriteriaTable()
    {
        return $this->criteriaTable;
    }

    /**
     * Setter for criteriaTable
     *
     * @ElementName criteriaTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $criteriaTable
     * @return $this
     */
    public function setCriteriaTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $criteriaTable)
    {
        $this->criteriaTable = $criteriaTable;
        return $this;
    }


}

