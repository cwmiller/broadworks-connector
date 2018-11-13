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
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $sessionPriorityTable = null;

    /**
     * Getter for sessionPriorityTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getSessionPriorityTable()
    {
        return $this->sessionPriorityTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sessionPriorityTable;
    }

    /**
     * Setter for sessionPriorityTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $sessionPriorityTable
     * @return $this
     */
    public function setSessionPriorityTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $sessionPriorityTable)
    {
        $this->sessionPriorityTable = $sessionPriorityTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSessionPriorityTable()
    {
        $this->sessionPriorityTable = null;
        return $this;
    }


}

