<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetInstanceListResponse
 *
 * Response to the GroupCallCenterGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Video", "Phone Number", "Extension",
 * "Department", "Is Active", "Policy", "Type".
 *         The column values for "Video" and "Is Active" can either be true, or
 * false.
 *         The column values for "Type" can be "Basic", "Standard" or "Premium".
 *         NOTE: prior to release 14, the policy column did not match the
 * HuntPolicy enumerated type.
 *
 * @see GroupCallCenterGetInstanceListRequest
 */
class GroupCallCenterGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
    public function setCallCenterTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $callCenterTable)
    {
        $this->callCenterTable = $callCenterTable;
        return $this;
    }


}

