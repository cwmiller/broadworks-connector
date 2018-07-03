<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseEnterpriseTrunkGetUserListResponse
 *
 * Response to EnterpriseEnterpriseTrunkGetUserListRequest.
 *         The column headings for the enterpriseTrunkUserTable are: "Group Id",
 * "User Id", "Last Name", "First Name", "Phone Number", "Alternate Trunk
 * Identity", "Hiragana Last Name", "Hiragana First Name",
 *          "Extension", "Department", "Email Address" and "Route List Assigned".
 *
 * @see EnterpriseEnterpriseTrunkGetUserListRequest
 */
class EnterpriseEnterpriseTrunkGetUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enterpriseTrunkUserTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $enterpriseTrunkUserTable = null;

    /**
     * Getter for enterpriseTrunkUserTable
     *
     * @ElementName enterpriseTrunkUserTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getEnterpriseTrunkUserTable()
    {
        return $this->enterpriseTrunkUserTable;
    }

    /**
     * Setter for enterpriseTrunkUserTable
     *
     * @ElementName enterpriseTrunkUserTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $enterpriseTrunkUserTable
     * @return $this
     */
    public function setEnterpriseTrunkUserTable($enterpriseTrunkUserTable)
    {
        $this->enterpriseTrunkUserTable = $enterpriseTrunkUserTable;
        return $this;
    }


}

