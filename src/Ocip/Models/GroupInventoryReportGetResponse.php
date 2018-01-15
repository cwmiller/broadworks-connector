<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupInventoryReportGetResponse
 *
 * Response to GroupInventoryReportGetRequest.
 */
class GroupInventoryReportGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName inventoryReportTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $inventoryReportTable = null;

    /**
     * Getter for inventoryReportTable
     *
     * @ElementName inventoryReportTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getInventoryReportTable()
    {
        return $this->inventoryReportTable;
    }

    /**
     * Setter for inventoryReportTable
     *
     * @ElementName inventoryReportTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $inventoryReportTable
     * @return $this
     */
    public function setInventoryReportTable($inventoryReportTable)
    {
        $this->inventoryReportTable = $inventoryReportTable;
        return $this;
    }


}

