<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccountAuthorizationCodesGetAvailableUserListResponse
 *
 * Response to the GroupAccountAuthorizationCodesGetAvailableUserListRequest.
 *         The column headings are: "User Id", "Last Name", "First Name", "Hiragana Last Name" and
 *         "Hiragana First Name", "Phone Number", "Extension", "Department", "Email Address".
 *
 * @see GroupAccountAuthorizationCodesGetAvailableUserListRequest
 * @Groups [{"id":"fcf43b3a58ff66521262b4426bab8748:109","type":"sequence"}]
 */
class GroupAccountAuthorizationCodesGetAvailableUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group fcf43b3a58ff66521262b4426bab8748:109
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

