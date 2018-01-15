<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDnGetSummaryListResponse
 *
 * Response to the GroupDnGetSummaryListRequest.
 *         The response contains a table with columns: "Phone Numbers", "Assigned".
 *         The "Phone Numbers" column contains either a single DN or a range of
 * DNs.
 *         The "Assigned" column contains a boolean flag indicating if the DN(s)
 * are
 *         currently assigned to a user or service instance.
 *         The "Activated" column indicates if the DN or DN range has been
 * activated.  
 *         Only has a value if the DN(s) is assigned to a user or if "Group Enable
 * Activation
 *         Mode" is enabled.
 */
class GroupDnGetSummaryListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

