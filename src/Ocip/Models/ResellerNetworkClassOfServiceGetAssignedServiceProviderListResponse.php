<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerNetworkClassOfServiceGetAssignedServiceProviderListResponse
 *
 * Response to ResellerNetworkClassOfServiceGetAssignedServiceProviderListRequest.
 *         Contains a table of Service Providers that have the Network Class of Service 
 *         assigned. The column headings are: "Service Provider Id" and "Service Provider Name".
 *
 * @see ResellerNetworkClassOfServiceGetAssignedServiceProviderListRequest
 * @Groups [{"id":"d45e381d6dbac771631649063122a42e:767","type":"sequence"}]
 */
class ResellerNetworkClassOfServiceGetAssignedServiceProviderListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName spTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d45e381d6dbac771631649063122a42e:767
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $spTable = null;

    /**
     * Getter for spTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getSpTable()
    {
        return $this->spTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->spTable;
    }

    /**
     * Setter for spTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $spTable
     * @return $this
     */
    public function setSpTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $spTable)
    {
        $this->spTable = $spTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSpTable()
    {
        $this->spTable = null;
        return $this;
    }
}

