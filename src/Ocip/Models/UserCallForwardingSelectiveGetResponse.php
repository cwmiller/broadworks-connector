<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallForwardingSelectiveGetResponse
 *
 * Response to the UserCallForwardingSelectiveGetRequest. The criteria table's
 * column headings are:        
 *          "Is Active", "Criteria Name", "Time Schedule", "Calls From" and
 * "Forward To".
 */
class UserCallForwardingSelectiveGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

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
    public function setCriteriaTable($criteriaTable)
    {
        $this->criteriaTable = $criteriaTable;
        return $this;
    }


}

