<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutePointExternalSystemGetListResponse
 *
 * Response to the SystemRoutePointExternalSystemGetListRequest.
 *
 *       Contains a table with column headings:
 *       "External System", "Description".
 */
class SystemRoutePointExternalSystemGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName externalSystemTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $externalSystemTable = null;

    /**
     * Getter for externalSystemTable
     *
     * @ElementName externalSystemTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getExternalSystemTable()
    {
        return $this->externalSystemTable;
    }

    /**
     * Setter for externalSystemTable
     *
     * @ElementName externalSystemTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $externalSystemTable
     * @return $this
     */
    public function setExternalSystemTable($externalSystemTable)
    {
        $this->externalSystemTable = $externalSystemTable;
        return $this;
    }


}

