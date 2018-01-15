<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDnGetDetailedAvailableListResponse
 *
 * Response to the GroupDnGetDetailedAvailableListRequest.
 *         The response contains a table with columns: "Phone Number",
 * "Department".
 *         The "Phone Numbers" column contains a single DN.
 *         The "Department" column contains the department of the DN if the DN is
 * part of the department.
 *         The "Activated" column indicates if the DN has been activated. 
 *         Only has a value if the DN(s) is assigned to a user or if "Group
 *         Enable Activation Mode" is enabled.
 */
class GroupDnGetDetailedAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName dnTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $dnTable = null;

    /**
     * Getter for dnTable
     *
     * @ElementName dnTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getDnTable()
    {
        return $this->dnTable;
    }

    /**
     * Setter for dnTable
     *
     * @ElementName dnTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $dnTable
     * @return $this
     */
    public function setDnTable($dnTable)
    {
        $this->dnTable = $dnTable;
        return $this;
    }


}

