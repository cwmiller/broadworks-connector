<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterGetSupervisorCallCenterListResponse
 *
 * Response to the UserCallCenterGetSupervisorCallCenterListRequest.
 *         Contains a table with column headings: "Service User Id", "Phone
 * Number", 
 *         "Extension", "Type" and "Priority".
 */
class UserCallCenterGetSupervisorCallCenterListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

