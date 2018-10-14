<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetListInSystemResponse
 *
 * Response to UserGetListInSystemRequest.
 *         Contains a table with column headings : "User Id", "Group Id", "Service
 * Provider Id", "Last Name", "First Name",
 *         "Department", "Phone Number", "Phone Number Activated", "Email Address",
 *  "Hiragana Last Name", "Hiragana First Name", "In Trunk Group", "Extension",
 * "Reseller Id" 
 *         in a row for each user.
 *
 *         The following columns are only returned in AS data mode:       
 *           "Reseller Id"
 *
 * @see UserGetListInSystemRequest
 */
class UserGetListInSystemResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

