<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceProfileAuthenticationLockoutGetResponse
 *
 * Response to SystemDeviceProfileAuthenticationLockoutGetRequest.
 *         The column headings for the lockoutTable are: "Organization Id", "Organization Type", "Group Id", "Identity/Device Profile Name",  " Identity/Device Profile Type",  "Lockout Started", "Lockout Expires", "Lockout Count". Lockout times are shown in the system GMT time. When a permanent lockout is shown, the "Lockout Expires" column is empty and the "Lockout Count" column contains the word Permanent.
 *
 * @see SystemDeviceProfileAuthenticationLockoutGetRequest
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:7098","type":"sequence"}]
 */
class SystemDeviceProfileAuthenticationLockoutGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName lockoutTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 610f84d3e188f0477c3ae1a82ee036da:7098
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $lockoutTable = null;

    /**
     * Getter for lockoutTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getLockoutTable()
    {
        return $this->lockoutTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->lockoutTable;
    }

    /**
     * Setter for lockoutTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $lockoutTable
     * @return $this
     */
    public function setLockoutTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $lockoutTable)
    {
        $this->lockoutTable = $lockoutTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLockoutTable()
    {
        $this->lockoutTable = null;
        return $this;
    }


}

