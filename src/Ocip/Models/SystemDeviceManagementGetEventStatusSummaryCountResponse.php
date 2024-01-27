<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementGetEventStatusSummaryCountResponse
 *
 * Response to SystemDeviceManagementGetEventStatusSummaryCountRequest.
 *         The column headings are "Action, "Pending", "Queued Internally", and "Completed"
 *
 * @see SystemDeviceManagementGetEventStatusSummaryCountRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:7965","type":"sequence"}]
 */
class SystemDeviceManagementGetEventStatusSummaryCountResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName statusCountTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:7965
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $statusCountTable = null;

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

