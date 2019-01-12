<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEnterpriseTrunkGetUserListResponse
 *
 * Response to GroupEnterpriseTrunkGetUserListRequest.
 *         The column headings for the enterpriseTrunkUserTable are: "User Id", "Last Name", "First Name", "Phone Number", "Alternate Trunk Identity", "Hiragana Last Name", "Hiragana First Name",
 *         "Extension", "Department", "Email Address" and "Route List Assigned".
 *
 * @see GroupEnterpriseTrunkGetUserListRequest
 * @Groups [{"id":"b9c14e2d80e4e7749688ca13ba233b44:790","type":"sequence"}]
 */
class GroupEnterpriseTrunkGetUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enterpriseTrunkUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b9c14e2d80e4e7749688ca13ba233b44:790
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $enterpriseTrunkUserTable = null;

    /**
     * Getter for enterpriseTrunkUserTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getEnterpriseTrunkUserTable()
    {
        return $this->enterpriseTrunkUserTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enterpriseTrunkUserTable;
    }

    /**
     * Setter for enterpriseTrunkUserTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $enterpriseTrunkUserTable
     * @return $this
     */
    public function setEnterpriseTrunkUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $enterpriseTrunkUserTable)
    {
        $this->enterpriseTrunkUserTable = $enterpriseTrunkUserTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnterpriseTrunkUserTable()
    {
        $this->enterpriseTrunkUserTable = null;
        return $this;
    }


}

