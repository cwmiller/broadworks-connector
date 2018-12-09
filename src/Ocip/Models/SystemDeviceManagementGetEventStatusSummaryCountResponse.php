<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementGetEventStatusSummaryCountResponse
 *
 * Response to SystemDeviceManagementGetEventStatusSummaryCountRequest.
 *         The column headings are "Action, "Pending", "Queued Internally", and "Completed"
 *
 * @see SystemDeviceManagementGetEventStatusSummaryCountRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:6727","type":"sequence"}]
 */
class SystemDeviceManagementGetEventStatusSummaryCountResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName statusCountTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b5f5416d9e71f8e4246cda16c4723744:6727
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $statusCountTable = null;

    /**
     * Getter for statusCountTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getStatusCountTable()
    {
        return $this->statusCountTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->statusCountTable;
    }

    /**
     * Setter for statusCountTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $statusCountTable
     * @return $this
     */
    public function setStatusCountTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $statusCountTable)
    {
        $this->statusCountTable = $statusCountTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStatusCountTable()
    {
        $this->statusCountTable = null;
        return $this;
    }


}

