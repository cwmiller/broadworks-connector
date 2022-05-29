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
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:4324","type":"sequence"}]
 */
class ProfileAndServiceCallNotifyInfo
{

    /**
     * @ElementName callNotifyEmailAddress
     * @Type string
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:4324
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $callNotifyEmailAddress = null;

    /**
     * @ElementName criteriaTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 53d18cc797d03d802cbc411ad821f1d4:4324
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

