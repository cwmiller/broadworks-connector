<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDomainGetAssignedServiceProviderListResponse
 *
 * Response to SystemDomainGetAssignedServiceProviderListRequest.
 *         The table columns are: "Service Provider Id", "Service Provider Name",
 * "Is Enterprise" and "Reseller Id".
 *         The following columns are only returned in AS data mode:       
 *           "Reseller Id"
 *
 * @see SystemDomainGetAssignedServiceProviderListRequest
 */
class SystemDomainGetAssignedServiceProviderListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceProviderTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $serviceProviderTable = null;

    /**
     * Getter for serviceProviderTable
     *
     * @ElementName serviceProviderTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getServiceProviderTable()
    {
        return $this->serviceProviderTable;
    }

    /**
     * Setter for serviceProviderTable
     *
     * @ElementName serviceProviderTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $serviceProviderTable
     * @return $this
     */
    public function setServiceProviderTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceProviderTable)
    {
        $this->serviceProviderTable = $serviceProviderTable;
        return $this;
    }


}

