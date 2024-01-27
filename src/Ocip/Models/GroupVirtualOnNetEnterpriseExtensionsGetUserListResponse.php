<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVirtualOnNetEnterpriseExtensionsGetUserListResponse
 *
 * Response to GroupVirtualOnNetEnterpriseExtensionsGetUserListRequest.
 *         Contains a table with column headings: "Last Name", 
 *         "First Name", "Phone Number", "Extension", 
 *         "Virtual On-Net Call Type Name"
 *         in a row for each user.
 *
 * @see GroupVirtualOnNetEnterpriseExtensionsGetUserListRequest
 * @Groups [{"id":"ef8bc875d664cdc920228d455073e594:163","type":"sequence"}]
 */
class GroupVirtualOnNetEnterpriseExtensionsGetUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ef8bc875d664cdc920228d455073e594:163
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

