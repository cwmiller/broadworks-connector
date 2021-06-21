<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetInstanceListResponse
 *
 * Response to the GroupCallCenterGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Video", "Phone Number", "Extension", "Department", "Is Active", "Policy", "Type".
 *         The column values for "Video" and "Is Active" can either be true, or false.
 *         The column values for "Type" can be "Basic", "Standard" or "Premium" in AS data mode and "Basic" in XS data mode.
 *         NOTE: prior to release 14, the policy column did not match the HuntPolicy enumerated type.
 *
 * @see GroupCallCenterGetInstanceListRequest
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:4503","type":"sequence"}]
 */
class GroupCallCenterGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName callCenterTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e2c537e3e39483b96620673a7012ffdd:4503
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

