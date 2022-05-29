<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPAuthenticationEndpointLockoutGetResponse
 *
 * Response to SystemSIPAuthenticationEndpointLockoutGetRequest.
 *         The column headings for the lockoutTable are:
 *            "Organization Id", "Organization Type", "Group Id", "Line/Port", "User ID", "First Name", "Last Name", "Lockout Started", "Lockout Expires", "Lockout Count". Lockout times are shown in the system GMT time. When a permanent lockout is shown, the "Lockout Expires" column is empty and the "Lockout Count" column contains the word Permanent.
 *
 * @see SystemSIPAuthenticationEndpointLockoutGetRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:16574","type":"sequence"}]
 */
class SystemSIPAuthenticationEndpointLockoutGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName lockoutTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16574
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $lockoutTable = null;

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

