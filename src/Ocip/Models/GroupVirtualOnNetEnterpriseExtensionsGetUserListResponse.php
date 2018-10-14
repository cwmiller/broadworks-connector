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
 */
class GroupVirtualOnNetEnterpriseExtensionsGetUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

