<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementGetEventStatusSummaryCountResponse
 *
 * Response to SystemDeviceManagementGetEventStatusSummaryCountRequest.
 *         The column headings are "Action, "Pending", "Queued Internally", and
 * "Completed"
 *
 * @see SystemDeviceManagementGetEventStatusSummaryCountRequest
 */
class SystemDeviceManagementGetEventStatusSummaryCountResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName statusCountTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $statusCountTable = null;

    /**
     * Getter for statusCountTable
     *
     * @ElementName statusCountTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getStatusCountTable()
    {
        return $this->statusCountTable;
    }

    /**
     * Setter for statusCountTable
     *
     * @ElementName statusCountTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $statusCountTable
     * @return $this
     */
    public function setStatusCountTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $statusCountTable)
    {
        $this->statusCountTable = $statusCountTable;
        return $this;
    }


}

