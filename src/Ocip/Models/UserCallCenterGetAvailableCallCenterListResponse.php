<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterGetAvailableCallCenterListResponse
 *
 * Response to the UserCallCenterGetAvailableCallCenterListRequest.
 *         Contains a table with column heading: "Service User Id".
 *
 * @see UserCallCenterGetAvailableCallCenterListRequest
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:6957","type":"sequence"}]
 */
class UserCallCenterGetAvailableCallCenterListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName callCenterTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4d65d3449061c568639c8cc1e2492285:6957
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $callCenterTable = null;

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

