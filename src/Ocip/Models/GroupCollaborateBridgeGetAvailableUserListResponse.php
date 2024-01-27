<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCollaborateBridgeGetAvailableUserListResponse
 *
 * Response to the GroupCollaborateBridgeGetAvailableUserListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", and "Hiragana First Name", 
 *         "Phone Number", "Extension", "Department", "Department Type", "Parent Department", "Parent Department Type", "Email Address".
 *
 * @see GroupCollaborateBridgeGetAvailableUserListRequest
 * @Groups [{"id":"bc805893b9cc7e3e01eec64e9ad62768:230","type":"sequence"}]
 */
class GroupCollaborateBridgeGetAvailableUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group bc805893b9cc7e3e01eec64e9ad62768:230
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

