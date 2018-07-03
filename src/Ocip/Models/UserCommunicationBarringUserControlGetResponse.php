<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommunicationBarringUserControlGetResponse
 *
 * Response to the UserCommunicationBarringUserControlGetRequest.
 *         Identifies the profiles available to the user and which one if any
 *         is active as well as the lockout status.
 *         Contains a table with column headings: "Name", "Code", "Activated" and
 * "Primary".
 *
 * @see UserCommunicationBarringUserControlGetRequest
 */
class UserCommunicationBarringUserControlGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

