<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallForwardingSelectiveGetResponse
 *
 * Response to the UserCallForwardingSelectiveGetRequest. The criteria table's column headings are:        
 *          "Is Active", "Criteria Name", "Time Schedule", "Calls From" and "Forward To".
 *
 * @see UserCallForwardingSelectiveGetRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:40746","type":"sequence"}]
 */
class UserCallForwardingSelectiveGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultForwardToPhoneNumber
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40746
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $defaultForwardToPhoneNumber = null;

    /**
     * @ElementName playRingReminder
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40746
     * @var bool|null
     */
    private $playRingReminder = null;

    /**
     * @ElementName criteriaTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40746
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $criteriaTable = null;

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

