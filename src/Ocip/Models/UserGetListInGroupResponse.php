<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetListInGroupResponse
 *
 * Response to UserGetListInGroupRequest.
 *         Contains a table with column headings : "User Id",
 *         "Last Name", "First Name", "Department", "Phone Number", "Phone Number
 * Activated", "Email Address",  "Hiragana Last Name", "Hiragana First Name", "In
 * Trunk Group", "Extension", "Country Code", "National Prefix"
 *         in a row for each user.
 *         
 *         The following columns are only returned in AS data mode:   
 *           "Country Code", "National Prefix
 *
 * @see UserGetListInGroupRequest
 */
class UserGetListInGroupResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

