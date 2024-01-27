<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceCallNotifyInfo
 *
 * This is the configuration parameters for Call Notify service
 *         	
 *         	The criteria table's column headings are: "Is Active", 
 *         	"Criteria Name", "Time Schedule", "Calls From", "Blacklisted" ,"Holiday Schedule"
 *         	
 *         	The "Calls From" column is a string containing call numbers
 *
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:4333","type":"sequence"}]
 */
class ProfileAndServiceCallNotifyInfo
{
    /**
     * @ElementName callNotifyEmailAddress
     * @Type string
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4333
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $callNotifyEmailAddress = null;

    /**
     * @ElementName criteriaTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4333
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $criteriaTable = null;

    /**
     * Getter for callNotifyEmailAddress
     *
     * @return string
     */
    public function getCallNotifyEmailAddress()
    {
        return $this->callNotifyEmailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callNotifyEmailAddress;
    }

    /**
     * Setter for callNotifyEmailAddress
     *
     * @param string $callNotifyEmailAddress
     * @return $this
     */
    public function setCallNotifyEmailAddress($callNotifyEmailAddress)
    {
        $this->callNotifyEmailAddress = $callNotifyEmailAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallNotifyEmailAddress()
    {
        $this->callNotifyEmailAddress = null;
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

