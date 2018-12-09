<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSSessionPriorityMapGetListResponse
 *
 * Response to SystemGETSSessionPriorityMapGetListRequest. 
 *         The table columns are: "Priority Level" and "Session Priority Value".
 *
 * @see SystemGETSSessionPriorityMapGetListRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:9518","type":"sequence"}]
 */
class SystemGETSSessionPriorityMapGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName sessionPriorityTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b5f5416d9e71f8e4246cda16c4723744:9518
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

