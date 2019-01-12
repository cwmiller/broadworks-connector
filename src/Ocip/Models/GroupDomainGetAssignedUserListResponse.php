<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDomainGetAssignedUserListResponse
 *
 * Response to GroupDomainGetAssignedUserListRequest.
 *         The table columns are: "User Id", "Last Name", "First Name", "Department", "Phone Number", "Email Address",
 *         "Service Provider Id", "Group Id", "Hiragana Last Name" and "Hiragana First Name", "Extension".
 *
 * @see GroupDomainGetAssignedUserListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:4608","type":"sequence"}]
 */
class GroupDomainGetAssignedUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f3a93cf15de4abd7903673e44ee3e07b:4608
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userTable = null;

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

