<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDnGetSummaryListResponse
 *
 * Response to the GroupDnGetSummaryListRequest.
 *         The response contains a table with columns: "Phone Numbers", "Assigned".
 *         The "Phone Numbers" column contains either a single DN or a range of DNs.
 *         The "Assigned" column contains a boolean flag indicating if the DN(s) are
 *         currently assigned to a user or service instance.
 *         The "Activated" column indicates if the DN or DN range has been activated.  
 *         Only has a value if the DN(s) is assigned to a user or if either “User Enable Activation mode “ 
 *         or "Group and User Enable Activation Mode" is enabled.
 *
 * @see GroupDnGetSummaryListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:5370","type":"sequence"}]
 */
class GroupDnGetSummaryListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName dnTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f3a93cf15de4abd7903673e44ee3e07b:5370
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

