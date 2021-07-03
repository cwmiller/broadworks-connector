<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGetPagedSortedListResponse
 *
 * Response to ServiceProviderGetPagedSortedListRequest.
 *         Contains a table with column headings "Service Provider Id", "Service Provider Name"
 *         and "Is Enterprise", "Reseller Id" and "Service Provider External Id" and a row for each service provider or enterprise.
 *         
 *         The following columns are only populated in AS data mode:
 *           "Reseller Id",
 *           "Service Provider External Id
 *
 * @see ServiceProviderGetPagedSortedListRequest
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:4529","type":"sequence"}]
 */
class ServiceProviderGetPagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceProviderTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4529
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $serviceProviderTable = null;

    /**
     * Getter for serviceProviderTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getServiceProviderTable()
    {
        return $this->serviceProviderTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderTable;
    }

    /**
     * Setter for serviceProviderTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceProviderTable
     * @return $this
     */
    public function setServiceProviderTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceProviderTable)
    {
        $this->serviceProviderTable = $serviceProviderTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderTable()
    {
        $this->serviceProviderTable = null;
        return $this;
    }


}

