<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceCommunicationBarringUserControlInfo
 *
 * This is the configuration parameters for Communication Barring User Control service
 *         	
 *         	profileTable has column headings: "Name", "Code", "Activated" and "Primary".
 *
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:4366","type":"sequence"}]
 */
class ProfileAndServiceCommunicationBarringUserControlInfo
{

    /**
     * @ElementName lockoutStatus
     * @Type bool
     * @Group 53d18cc797d03d802cbc411ad821f1d4:4366
     * @var bool|null
     */
    protected $lockoutStatus = null;

    /**
     * @ElementName profileTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 53d18cc797d03d802cbc411ad821f1d4:4366
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $profileTable = null;

    /**
     * Getter for lockoutStatus
     *
     * @return bool
     */
    public function getLockoutStatus()
    {
        return $this->lockoutStatus instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->lockoutStatus;
    }

    /**
     * Setter for lockoutStatus
     *
     * @param bool $lockoutStatus
     * @return $this
     */
    public function setLockoutStatus($lockoutStatus)
    {
        $this->lockoutStatus = $lockoutStatus;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLockoutStatus()
    {
        $this->lockoutStatus = null;
        return $this;
    }

    /**
     * Getter for profileTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getProfileTable()
    {
        return $this->profileTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profileTable;
    }

    /**
     * Setter for profileTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $profileTable
     * @return $this
     */
    public function setProfileTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $profileTable)
    {
        $this->profileTable = $profileTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProfileTable()
    {
        $this->profileTable = null;
        return $this;
    }


}

