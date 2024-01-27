<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksReceptionistOfficeGetAvailableUserListResponse
 *
 * Response to the UserBroadWorksReceptionistOfficeGetAvailableUserListRequest.
 *         Returns a 12 column table with column headings:
 *           "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name", 
 *           "Group Id", "Phone Number", "Extension", "Mobile", "Email Address", "Department", "IMP Id", "Title".
 *
 * @see UserBroadWorksReceptionistOfficeGetAvailableUserListRequest
 * @Groups [{"id":"5fa0a73a96d1fc1ab41b9a76a6c7fe9b:69","type":"sequence"}]
 */
class UserBroadWorksReceptionistOfficeGetAvailableUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 5fa0a73a96d1fc1ab41b9a76a6c7fe9b:69
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

