<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommunicationBarringUserControlGetResponse
 *
 * Response to the UserCommunicationBarringUserControlGetRequest.
 *         Identifies the profiles available to the user and which one if any
 *         is active as well as the lockout status.
 *         Contains a table with column headings: "Name", "Code", "Activated" and "Primary".
 *
 * @see UserCommunicationBarringUserControlGetRequest
 * @Groups [{"id":"4277c572e54919d6e29f4c0fa69aaad1:114","type":"sequence"}]
 */
class UserCommunicationBarringUserControlGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName lockoutStatus
     * @Type bool
     * @Group 4277c572e54919d6e29f4c0fa69aaad1:114
     * @var bool|null
     */
    protected $lockoutStatus = null;

    /**
     * @ElementName profileTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4277c572e54919d6e29f4c0fa69aaad1:114
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

