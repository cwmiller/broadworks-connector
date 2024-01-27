<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPushToTalkGetAvailableUserListResponse
 *
 * Response to the UserPushToTalkGetAvailableUserListRequest.
 *         Returns a 10 column table with column headings:
 *           "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name",
 *           "Phone Number", "Extension", "Department", "Email Address", "IMP Id".
 *
 * @see UserPushToTalkGetAvailableUserListRequest
 * @Groups [{"id":"22c82692327758edb5adf1f1db18fc71:70","type":"sequence"}]
 */
class UserPushToTalkGetAvailableUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 22c82692327758edb5adf1f1db18fc71:70
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

