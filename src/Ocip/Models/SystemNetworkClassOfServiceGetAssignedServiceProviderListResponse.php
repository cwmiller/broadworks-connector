<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkClassOfServiceGetAssignedServiceProviderListResponse
 *
 * Response to the
 *         SystemNetworkClassOfServiceGetAssignedServiceProviderListRequest.
 *         The response contains a table of all Service Providers that have
 *         the given Network Class of Service assigned. The column headings are
 *         "Service Provider Id", "Service Provider Name" and "Is Enterprise".
 */
class SystemNetworkClassOfServiceGetAssignedServiceProviderListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
    public function setServiceProviderTable($serviceProviderTable)
    {
        $this->serviceProviderTable = $serviceProviderTable;
        return $this;
    }


}

