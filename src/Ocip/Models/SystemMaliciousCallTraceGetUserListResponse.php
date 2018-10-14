<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMaliciousCallTraceGetUserListResponse
 *
 * Response to SystemMaliciousCallTraceGetUserListRequest. The column headings are
 * "Service Provider Id",
 *         "Group Id", "User Id", "Last Name", "First Name", "Phone Number", "Trace
 * Type", "Status",
 *         "Hiragana Last Name" and "Hiragana First Name".
 *         
 *         Replaced By: SystemMaliciousCallTraceGetResponse
 *
 * @see SystemMaliciousCallTraceGetUserListRequest
 * @see SystemMaliciousCallTraceGetResponse
 */
class SystemMaliciousCallTraceGetUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userTable = null;

    /**
     * Getter for userTable
     *
     * @ElementName userTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getUserTable()
    {
        return $this->userTable;
    }

    /**
     * Setter for userTable
     *
     * @ElementName userTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $userTable
     * @return $this
     */
    public function setUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable)
    {
        $this->userTable = $userTable;
        return $this;
    }


}

