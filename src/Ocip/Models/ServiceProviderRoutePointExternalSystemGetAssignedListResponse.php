<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRoutePointExternalSystemGetAssignedListResponse
 *
 * Response to the ServiceProviderRoutePointExternalSystemGetAssignedListRequest.
 *         Contains a table of all Route Point External Systems assigned to the
 *         service provider.  The column headings are: "Name" and "Description".
 *
 * @see ServiceProviderRoutePointExternalSystemGetAssignedListRequest
 */
class ServiceProviderRoutePointExternalSystemGetAssignedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName externalSystemTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
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

