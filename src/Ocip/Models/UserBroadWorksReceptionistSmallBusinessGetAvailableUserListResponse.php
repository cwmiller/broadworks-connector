<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksReceptionistSmallBusinessGetAvailableUserListResponse
 *
 * Response to the UserBroadWorksReceptionistSmallBusinessGetAvailableUserListRequest.
 *         Returns a 11 column table with column headings:
 *           "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name", 
 *           "Group Id", "Phone Number", "Extension", "Mobile", "Email Address", "Department", "IMP Id", "Title".
 *
 * @see UserBroadWorksReceptionistSmallBusinessGetAvailableUserListRequest
 * @Groups [{"id":"d8ae66e5f02195a36162958f9d5115db:72","type":"sequence"}]
 */
class UserBroadWorksReceptionistSmallBusinessGetAvailableUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d8ae66e5f02195a36162958f9d5115db:72
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

