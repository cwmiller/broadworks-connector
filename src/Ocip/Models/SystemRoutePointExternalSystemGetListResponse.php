<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutePointExternalSystemGetListResponse
 *
 * Response to the SystemRoutePointExternalSystemGetListRequest.
 *
 *       Contains a table with column headings:
 *       "External System", "Description".
 *
 * @see SystemRoutePointExternalSystemGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:13490","type":"sequence"}]
 */
class SystemRoutePointExternalSystemGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName externalSystemTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:13490
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $externalSystemTable = null;

    /**
     * Getter for externalSystemTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getExternalSystemTable()
    {
        return $this->externalSystemTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->externalSystemTable;
    }

    /**
     * Setter for externalSystemTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $externalSystemTable
     * @return $this
     */
    public function setExternalSystemTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $externalSystemTable)
    {
        $this->externalSystemTable = $externalSystemTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExternalSystemTable()
    {
        $this->externalSystemTable = null;
        return $this;
    }


}

