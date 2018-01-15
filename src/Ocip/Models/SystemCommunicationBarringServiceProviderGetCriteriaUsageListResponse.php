<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringServiceProviderGetCriteriaUsageListResponse
 *
 * Response to the
 * SystemCommunicationBarringServiceProviderGetCriteriaUsageListRequest.
 *         The response contains a table of all Service Providers that use the
 * specific Communication Barring criteria. The column headings are "Service
 * Provider Id", "Service Provider Name" and "Is Enterprise"
 */
class SystemCommunicationBarringServiceProviderGetCriteriaUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

