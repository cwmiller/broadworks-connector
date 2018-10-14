<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksAnywhereGetPhoneNumberResponse
 *
 * Response to the UserBroadWorksAnywhereGetPhoneNumberRequest. 
 *         The criteria table's column headings are: "Is Active", "Criteria Name",
 * "Time Schedule", 
 *         "Calls From", "Blacklisted", "Holiday Schedule", "Calls To Type", "Calls
 * To Number" and "Calls To Extension".
 *         The following columns are only returned in AS data mode:       
 *           "Calls To Type", "Calls To Number" and "Calls To Extension"
 *           
 *         The possible values for the "Calls To Type" column are the following or
 * a combination of them separated by comma:
 *           - Primary
 *           - Alternate X (where x is a number between 1 and 10)
 *           - Mobility        
 *         The possible values for the "Calls To Number" column are the following
 * or a combination of them separated by comma:
 *           - The value of the phone number for the corresponding Calls To Type,
 * when the number is available. i.e. Alternate 1 may have extension, but no
 * number.
 *           - When no number is available a blank space is provided instead.
 *         The possible values for the "Calls To Extension" column are the
 * following or a caombination of them separated by comma:
 *           - The value of the extension for the corresponding Calls To Type, when
 * the extension is available. i.e. Primary may have number, but no extension.
 *           - For Mobility Calls To Type, this is always blank.
 *           - When no exension is available a blank space is provided instead.
 *
 * @see UserBroadWorksAnywhereGetPhoneNumberRequest
 */
class UserBroadWorksAnywhereGetPhoneNumberResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName outboundAlternateNumber
     * @var string|null
     */
    private $outboundAlternateNumber = null;

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName broadworksCallControl
     * @var bool|null
     */
    private $broadworksCallControl = null;

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
     * @ElementName criteriaTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $criteriaTable = null;

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Getter for outboundAlternateNumber
     *
     * @ElementName outboundAlternateNumber
     * @return string|null
     */
    public function getOutboundAlternateNumber()
    {
        return $this->outboundAlternateNumber;
    }

    /**
     * Setter for outboundAlternateNumber
     *
     * @ElementName outboundAlternateNumber
     * @param string|null $outboundAlternateNumber
     * @return $this
     */
    public function setOutboundAlternateNumber($outboundAlternateNumber)
    {
        $this->outboundAlternateNumber = $outboundAlternateNumber;
        return $this;
    }

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for broadworksCallControl
     *
     * @ElementName broadworksCallControl
     * @return bool|null
     */
    public function getBroadworksCallControl()
    {
        return $this->broadworksCallControl;
    }

    /**
     * Setter for broadworksCallControl
     *
     * @ElementName broadworksCallControl
     * @param bool|null $broadworksCallControl
     * @return $this
     */
    public function setBroadworksCallControl($broadworksCallControl)
    {
        $this->broadworksCallControl = $broadworksCallControl;
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

