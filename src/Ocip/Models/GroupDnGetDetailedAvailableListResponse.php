<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDnGetDetailedAvailableListResponse
 *
 * Response to the GroupDnGetDetailedAvailableListRequest.
 *         The response contains a table with columns: "Phone Number", "Department".
 *         The "Phone Numbers" column contains a single DN.
 *         The "Department" column contains the department of the DN if the DN is part of the department.
 *         The "Activated" column indicates if the DN has been activated. 
 *         Only has a value if the DN(s) is assigned to a user or if "Group
 *         Enable Activation Mode" is enabled.
 *
 * @see GroupDnGetDetailedAvailableListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:5263","type":"sequence"}]
 */
class GroupDnGetDetailedAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName dnTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f3a93cf15de4abd7903673e44ee3e07b:5263
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $dnTable = null;

    /**
     * Getter for dnTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDnTable()
    {
        return $this->dnTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnTable;
    }

    /**
     * Setter for dnTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $dnTable
     * @return $this
     */
    public function setDnTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $dnTable)
    {
        $this->dnTable = $dnTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDnTable()
    {
        $this->dnTable = null;
        return $this;
    }


}

