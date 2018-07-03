<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterCallDispositionCodeGetUsageListResponse
 *
 * Response to the GroupCallCenterCallDispositionCodeGetUsageListRequest.
 *         The Type column contains either "Call Center" or "Route Point".
 *         Contains a table with column headings: "Id", "Name" and "Type".
 *
 * @see GroupCallCenterCallDispositionCodeGetUsageListRequest
 */
class GroupCallCenterCallDispositionCodeGetUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName callCenterTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $callCenterTable = null;

    /**
     * Getter for callCenterTable
     *
     * @ElementName callCenterTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getCallCenterTable()
    {
        return $this->callCenterTable;
    }

    /**
     * Setter for callCenterTable
     *
     * @ElementName callCenterTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $callCenterTable
     * @return $this
     */
    public function setCallCenterTable($callCenterTable)
    {
        $this->callCenterTable = $callCenterTable;
        return $this;
    }


}

