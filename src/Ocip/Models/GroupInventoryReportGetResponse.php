<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupInventoryReportGetResponse
 *
 * Response to GroupInventoryReportGetRequest.
 *
 * @see GroupInventoryReportGetRequest
 * @Groups [{"id":"b7ea90fba6513b5a795776dbab169f4f:64","type":"sequence"}]
 */
class GroupInventoryReportGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName inventoryReportTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b7ea90fba6513b5a795776dbab169f4f:64
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $inventoryReportTable = null;

    /**
     * Getter for inventoryReportTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getInventoryReportTable()
    {
        return $this->inventoryReportTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->inventoryReportTable;
    }

    /**
     * Setter for inventoryReportTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $inventoryReportTable
     * @return $this
     */
    public function setInventoryReportTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $inventoryReportTable)
    {
        $this->inventoryReportTable = $inventoryReportTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInventoryReportTable()
    {
        $this->inventoryReportTable = null;
        return $this;
    }


}

