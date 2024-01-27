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
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:5630","type":"sequence"}]
 */
class ServiceProviderRoutePointExternalSystemGetAssignedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName externalSystemTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e19a9072c2dad499e9f28837da5768db:5630
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $externalSystemTable = null;

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

