<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMaliciousCallTraceGetUserListResponse
 *
 * Response to SystemMaliciousCallTraceGetUserListRequest. The column headings are "Service Provider Id",
 *         "Group Id", "User Id", "Last Name", "First Name", "Phone Number", "Trace Type", "Status",
 *         "Hiragana Last Name" and "Hiragana First Name".
 *         
 *         Replaced By: SystemMaliciousCallTraceGetResponse
 *
 * @see SystemMaliciousCallTraceGetUserListRequest
 * @see SystemMaliciousCallTraceGetResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:28107","type":"sequence"}]
 */
class SystemMaliciousCallTraceGetUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d8f04177e438f303b41c211e518706bf:28107
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $userTable = null;

    /**
     * Getter for userTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUserTable()
    {
        return $this->userTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userTable;
    }

    /**
     * Setter for userTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable
     * @return $this
     */
    public function setUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable)
    {
        $this->userTable = $userTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserTable()
    {
        $this->userTable = null;
        return $this;
    }
}

