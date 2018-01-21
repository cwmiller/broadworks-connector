<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceCallNotifyInfo
 *
 * This is the configuration parameters for Call Notify service
 *         	
 *         	The criteria table's column headings are: "Is Active", 
 *         	"Criteria Name", "Time Schedule", "Calls From", "Blacklisted" ,"Holiday
 * Schedule"
 *         	
 *         	The "Calls From" column is a string containing call numbers
 */
class ProfileAndServiceCallNotifyInfo
{

    /**
     * @ElementName callNotifyEmailAddress
     * @var string|null
     */
    private $callNotifyEmailAddress = null;

    /**
     * @ElementName criteriaTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $criteriaTable = null;

    /**
     * Getter for callNotifyEmailAddress
     *
     * @ElementName callNotifyEmailAddress
     * @return string|null
     */
    public function getCallNotifyEmailAddress()
    {
        return $this->callNotifyEmailAddress;
    }

    /**
     * Setter for callNotifyEmailAddress
     *
     * @ElementName callNotifyEmailAddress
     * @param string|null $callNotifyEmailAddress
     * @return $this
     */
    public function setCallNotifyEmailAddress($callNotifyEmailAddress)
    {
        $this->callNotifyEmailAddress = $callNotifyEmailAddress;
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

