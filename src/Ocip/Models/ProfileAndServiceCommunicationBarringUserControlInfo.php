<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceCommunicationBarringUserControlInfo
 *
 * This is the configuration parameters for Communication Barring User Control
 * service
 *         	
 *         	profileTable has column headings: "Name", "Code", "Activated" and
 * "Primary".
 */
class ProfileAndServiceCommunicationBarringUserControlInfo
{

    /**
     * @ElementName lockoutStatus
     * @var bool|null
     */
    private $lockoutStatus = null;

    /**
     * @ElementName profileTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $profileTable = null;

    /**
     * Getter for lockoutStatus
     *
     * @ElementName lockoutStatus
     * @return bool|null
     */
    public function getLockoutStatus()
    {
        return $this->lockoutStatus;
    }

    /**
     * Setter for lockoutStatus
     *
     * @ElementName lockoutStatus
     * @param bool|null $lockoutStatus
     * @return $this
     */
    public function setLockoutStatus($lockoutStatus)
    {
        $this->lockoutStatus = $lockoutStatus;
        return $this;
    }

    /**
     * Getter for profileTable
     *
     * @ElementName profileTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getProfileTable()
    {
        return $this->profileTable;
    }

    /**
     * Setter for profileTable
     *
     * @ElementName profileTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $profileTable
     * @return $this
     */
    public function setProfileTable($profileTable)
    {
        $this->profileTable = $profileTable;
        return $this;
    }


}

