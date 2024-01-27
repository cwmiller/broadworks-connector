<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingGetAvailableOriginatorListResponse
 *
 * Response to the GroupGroupPagingGetAvailableOriginatorListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name" and "Hiragana First Name",
 *         "Phone Number", "Extension", "Department", "Email Address".
 *
 * @see GroupGroupPagingGetAvailableOriginatorListRequest
 * @Groups [{"id":"8ede928f2a9c1318573ba9c7a105655c:200","type":"sequence"}]
 */
class GroupGroupPagingGetAvailableOriginatorListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 8ede928f2a9c1318573ba9c7a105655c:200
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

