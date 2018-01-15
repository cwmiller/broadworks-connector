<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDnGetAssignmentListResponse
 *
 * Response to the GroupDnGetAssignmentListRequest.
 *         The response contains a table with columns: "Phone Numbers", "Assigned
 * To", "Department", "Activated".
 *         The "Phone Numbers" column contains either a single DN or a range of
 * DNs.
 *         The "Assigned To" column contains the user name or service instance name
 * possessing the DN(s).
 *         The "Department" column contains the department of the DN, not the
 * department of the user or service instance.
 *         The "Activated" column indicates if the DN or DN range has been
 * activated.  Only has a value if the DN(s) is assigned to a user.
 *         
 *         Replaced by: GroupDnGetAssignmentListResponse18
 */
class GroupDnGetAssignmentListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

