<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterCallDispositionCodeGetUsageListResponse
 *
 * Response to the EnterpriseCallCenterCallDispositionCodeGetUsageListRequest.
 *         The Type column contains either "Call Center" or "Route Point".
 *         Contains a table with column headings: "Group Id", "Id", "Name" and "Type".
 *
 * @see EnterpriseCallCenterCallDispositionCodeGetUsageListRequest
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:1043","type":"sequence"}]
 */
class EnterpriseCallCenterCallDispositionCodeGetUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName callCenterTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e2c537e3e39483b96620673a7012ffdd:1043
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $callCenterTable = null;

    /**
     * Getter for callCenterTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getCallCenterTable()
    {
        return $this->callCenterTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callCenterTable;
    }

    /**
     * Setter for callCenterTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $callCenterTable
     * @return $this
     */
    public function setCallCenterTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $callCenterTable)
    {
        $this->callCenterTable = $callCenterTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallCenterTable()
    {
        $this->callCenterTable = null;
        return $this;
    }


}

