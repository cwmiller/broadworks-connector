<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringServiceProviderGetCriteriaUsageListResponse
 *
 * Response to the SystemCommunicationBarringServiceProviderGetCriteriaUsageListRequest.
 *         The response contains a table of all Service Providers that use the specific Communication Barring criteria. The column headings are "Service Provider Id", "Service Provider Name" and "Is Enterprise"
 *
 * @see SystemCommunicationBarringServiceProviderGetCriteriaUsageListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:6213","type":"sequence"}]
 */
class SystemCommunicationBarringServiceProviderGetCriteriaUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceProviderTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6213
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

