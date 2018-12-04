<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDomainGetAssignedServiceProviderListResponse
 *
 * Response to SystemDomainGetAssignedServiceProviderListRequest.
 *         The table columns are: "Service Provider Id", "Service Provider Name", "Is Enterprise" and "Reseller Id".
 *         The following columns are only returned in AS data mode:       
 *           "Reseller Id"
 *
 * @see SystemDomainGetAssignedServiceProviderListRequest
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:7934","type":"sequence"}]
 */
class SystemDomainGetAssignedServiceProviderListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceProviderTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 610f84d3e188f0477c3ae1a82ee036da:7934
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

