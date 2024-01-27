<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallForwardingSelectiveGetResponse16
 *
 * Response to the UserCallForwardingSelectiveGetRequest16. The criteria table's column headings are:
 *         "Is Active", "Criteria Name", "Time Schedule", "Calls From", "Forward To", "Blacklisted", "Holiday Schedule", "Calls To Type", "Calls To Number" and "Calls To Extension".
 *         The following columns are only returned in AS data mode:       
 *           "Calls To Type", "Calls To Number" and "Calls To Extension"
 *           
 *         The possible values for the "Calls To Type" column are the following or a combination of them separated by comma:
 *           - Primary
 *           - Alternate X (where x is a number between 1 and 10)
 *           - Mobility        
 *         The possible values for the "Calls To Number" column are the following or a combination of them separated by comma:
 *           - The value of the phone number for the corresponding Calls To Type, when the number is available. i.e. Alternate 1 may have extension, but no number.
 *           - When no number is available a blank space is provided instead.
 *         The possible values for the "Calls To Extension" column are the following or a combination of them separated by comma:
 *           - The value of the extension for the corresponding Calls To Type, when the extension is available. i.e. Primary may have number, but no extension.
 *           - For Mobility Calls To Type, this is always blank.
 *           - When no extension is available a blank space is provided instead.
 *
 * @see UserCallForwardingSelectiveGetRequest16
 * @Groups [{"id":"a80d284dc33fadcf5b323133519ad1a8:158","type":"sequence"}]
 */
class UserCallForwardingSelectiveGetResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group a80d284dc33fadcf5b323133519ad1a8:158
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName defaultForwardToPhoneNumber
     * @Type string
     * @Optional
     * @Group a80d284dc33fadcf5b323133519ad1a8:158
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $defaultForwardToPhoneNumber = null;

    /**
     * @ElementName playRingReminder
     * @Type bool
     * @Group a80d284dc33fadcf5b323133519ad1a8:158
     * @var bool|null
     */
    protected $playRingReminder = null;

    /**
     * @ElementName criteriaTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group a80d284dc33fadcf5b323133519ad1a8:158
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $criteriaTable = null;

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for defaultForwardToPhoneNumber
     *
     * @return string
     */
    public function getDefaultForwardToPhoneNumber()
    {
        return $this->defaultForwardToPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultForwardToPhoneNumber;
    }

    /**
     * Setter for defaultForwardToPhoneNumber
     *
     * @param string $defaultForwardToPhoneNumber
     * @return $this
     */
    public function setDefaultForwardToPhoneNumber($defaultForwardToPhoneNumber)
    {
        $this->defaultForwardToPhoneNumber = $defaultForwardToPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultForwardToPhoneNumber()
    {
        $this->defaultForwardToPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for playRingReminder
     *
     * @return bool
     */
    public function getPlayRingReminder()
    {
        return $this->playRingReminder instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playRingReminder;
    }

    /**
     * Setter for playRingReminder
     *
     * @param bool $playRingReminder
     * @return $this
     */
    public function setPlayRingReminder($playRingReminder)
    {
        $this->playRingReminder = $playRingReminder;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayRingReminder()
    {
        $this->playRingReminder = null;
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

