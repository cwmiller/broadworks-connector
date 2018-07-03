<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSResourcePriorityGetListResponse
 *
 * Response to SystemGETSResourcePriorityGetListRequest. 
 *         The table columns are: "Priority Value", "Priority Level" and "Priority
 * Class".
 *
 * @see SystemGETSResourcePriorityGetListRequest
 */
class SystemGETSResourcePriorityGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName resourcePriorityTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $resourcePriorityTable = null;

    /**
     * Getter for resourcePriorityTable
     *
     * @ElementName resourcePriorityTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getResourcePriorityTable()
    {
        return $this->resourcePriorityTable;
    }

    /**
     * Setter for resourcePriorityTable
     *
     * @ElementName resourcePriorityTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $resourcePriorityTable
     * @return $this
     */
    public function setResourcePriorityTable($resourcePriorityTable)
    {
        $this->resourcePriorityTable = $resourcePriorityTable;
        return $this;
    }


}

