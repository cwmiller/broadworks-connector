<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetListInGroupResponse
 *
 * Response to UserGetListInGroupRequest.
 *         Contains a table with column headings : "User Id",
 *         "Last Name", "First Name", "Department", "Phone Number", "Phone Number Activated", "Email Address",  "Hiragana Last Name", "Hiragana First Name", "In Trunk Group", "Extension", "Country Code", "National Prefix"
 *         in a row for each user.
 *         
 *         The following columns are only returned in AS data mode:   
 *           "Country Code", "National Prefix
 *
 * @see UserGetListInGroupRequest
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:1943","type":"sequence"}]
 */
class UserGetListInGroupResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group fb73488c2ef4ac4400ab213b637d79a9:1943
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

