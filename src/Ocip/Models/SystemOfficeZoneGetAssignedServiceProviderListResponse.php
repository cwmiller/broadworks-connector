<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOfficeZoneGetAssignedServiceProviderListResponse
 *
 * Response to the
 *         SystemOfficeZoneGetAssignedServiceProviderListRequest.
 *         The response contains a table of all Service Providers that have the given Office Zone assigned. The column headings are
 *         "Service Provider Id", "Service Provider Name" and "Is Enterprise".
 *
 * @see SystemOfficeZoneGetAssignedServiceProviderListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:14086","type":"sequence"}]
 */
class SystemOfficeZoneGetAssignedServiceProviderListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName serviceProviderTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:14086
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $serviceProviderTable = null;

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

