<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSSessionPriorityMapGetListResponse
 *
 * Response to SystemGETSSessionPriorityMapGetListRequest. 
 *         The table columns are: "Priority Level" and "Session Priority Value".
 *
 * @see SystemGETSSessionPriorityMapGetListRequest
 */
class SystemGETSSessionPriorityMapGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName sessionPriorityTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $sessionPriorityTable = null;

    /**
     * Getter for sessionPriorityTable
     *
     * @ElementName sessionPriorityTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getSessionPriorityTable()
    {
        return $this->sessionPriorityTable;
    }

    /**
     * Setter for sessionPriorityTable
     *
     * @ElementName sessionPriorityTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $sessionPriorityTable
     * @return $this
     */
    public function setSessionPriorityTable($sessionPriorityTable)
    {
        $this->sessionPriorityTable = $sessionPriorityTable;
        return $this;
    }


}

