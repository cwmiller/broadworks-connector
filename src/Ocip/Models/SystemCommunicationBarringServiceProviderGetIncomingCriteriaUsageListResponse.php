<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringServiceProviderGetIncomingCriteriaUsageListResponse
 *
 * Response to the
 * SystemCommunicationBarringServiceProviderGetIncomingCriteriaUsageListRequest.
 *         The response contains a table of all Service Providers that use the
 * specific Communication Barring Incoming criteria. The column headings are
 * "Service Provider Id", "Service Provider Name" and "Is Enterprise"
 *
 * @see
 * SystemCommunicationBarringServiceProviderGetIncomingCriteriaUsageListRequest
 */
class SystemCommunicationBarringServiceProviderGetIncomingCriteriaUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

