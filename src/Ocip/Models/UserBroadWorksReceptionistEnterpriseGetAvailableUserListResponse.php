<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksReceptionistEnterpriseGetAvailableUserListResponse
 *
 * Response to the UserBroadWorksReceptionistEnterpriseGetAvailableUserListRequest.
 *         Returns a 12 column table with column headings:
 *           "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name", 
 *           "Group Id", "Phone Number", "Extension", "Mobile", "Email Address", "Department", "IMP Id", "Title",
 *           "Receptionist Note".  The Receptionist Note column is only populated, if the user sending 
 *           the request is the owner of the Receptionist Note and a Note exists.
 *
 * @see UserBroadWorksReceptionistEnterpriseGetAvailableUserListRequest
 * @Groups [{"id":"fb12998f4f9e45cedde01f08569f4c7c:163","type":"sequence"}]
 */
class UserBroadWorksReceptionistEnterpriseGetAvailableUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group fb12998f4f9e45cedde01f08569f4c7c:163
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

