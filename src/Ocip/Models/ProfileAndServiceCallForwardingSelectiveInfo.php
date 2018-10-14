<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceCallForwardingSelectiveInfo
 *
 * This is the configuration parameters for Call Forwarding Selective service
 *         	
 *         	The criteria table's column headings are:
 * 			"Is Active", "Criteria Name", "Time Schedule", "Calls From", "Forward To",
 * "Blacklisted", "Holiday Schedule"
 * 			
 * 			The "Calls From" column is a string containing call numbers
 */
class ProfileAndServiceCallForwardingSelectiveInfo
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName defaultForwardToPhoneNumber
     * @var string|null
     */
    private $defaultForwardToPhoneNumber = null;

    /**
     * @ElementName playRingReminder
     * @var bool|null
     */
    private $playRingReminder = null;

    /**
     * @ElementName criteriaTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $criteriaTable = null;

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
     * Getter for defaultForwardToPhoneNumber
     *
     * @ElementName defaultForwardToPhoneNumber
     * @return string|null
     */
    public function getDefaultForwardToPhoneNumber()
    {
        return $this->defaultForwardToPhoneNumber;
    }

    /**
     * Setter for defaultForwardToPhoneNumber
     *
     * @ElementName defaultForwardToPhoneNumber
     * @param string|null $defaultForwardToPhoneNumber
     * @return $this
     */
    public function setDefaultForwardToPhoneNumber($defaultForwardToPhoneNumber)
    {
        $this->defaultForwardToPhoneNumber = $defaultForwardToPhoneNumber;
        return $this;
    }

    /**
     * Getter for playRingReminder
     *
     * @ElementName playRingReminder
     * @return bool|null
     */
    public function getPlayRingReminder()
    {
        return $this->playRingReminder;
    }

    /**
     * Setter for playRingReminder
     *
     * @ElementName playRingReminder
     * @param bool|null $playRingReminder
     * @return $this
     */
    public function setPlayRingReminder($playRingReminder)
    {
        $this->playRingReminder = $playRingReminder;
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

