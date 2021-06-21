<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSResourcePriorityGetListResponse
 *
 * Response to SystemGETSResourcePriorityGetListRequest. 
 *         The table columns are: "Priority Value", "Priority Level" and "Priority Class".
 *
 * @see SystemGETSResourcePriorityGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:11102","type":"sequence"}]
 */
class SystemGETSResourcePriorityGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName resourcePriorityTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:11102
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $resourcePriorityTable = null;

    /**
     * Getter for resourcePriorityTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getResourcePriorityTable()
    {
        return $this->resourcePriorityTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resourcePriorityTable;
    }

    /**
     * Setter for resourcePriorityTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $resourcePriorityTable
     * @return $this
     */
    public function setResourcePriorityTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $resourcePriorityTable)
    {
        $this->resourcePriorityTable = $resourcePriorityTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResourcePriorityTable()
    {
        $this->resourcePriorityTable = null;
        return $this;
    }


}

