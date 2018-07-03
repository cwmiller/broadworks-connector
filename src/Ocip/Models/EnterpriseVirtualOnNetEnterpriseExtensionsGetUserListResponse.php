<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListResponse
 *
 * Response to   EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListRequest.
 *         Contains a table with column headings : "Group Id", "Last Name", "First
 * Name", "Phone Number", "Extension", 
 *         "Virtual On-Net Call Type" in a row for each user.
 *
 * @see EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListRequest
 */
class EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
    public function setUserTable($userTable)
    {
        $this->userTable = $userTable;
        return $this;
    }


}

