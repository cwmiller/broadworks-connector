<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPAuthenticationTrunkGroupLockoutGetResponse
 *
 * Response to SystemSIPAuthenticationTrunkGroupLockoutGetRequest.
 *         The column headings for the lockoutTable are:
 *            "Organization Id", "Organization Type", "Group Id", "Trunk Group Name", "Lockout Started", "Lockout Expires", "Lockout Count". Lockout times are shown in the system GMT time. When a permanent lockout is shown, the "Lockout Expires" column is empty and the "Lockout Count" column contains the word Permanent.
 *
 * @see SystemSIPAuthenticationTrunkGroupLockoutGetRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:14727","type":"sequence"}]
 */
class SystemSIPAuthenticationTrunkGroupLockoutGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName lockoutTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b5f5416d9e71f8e4246cda16c4723744:14727
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

