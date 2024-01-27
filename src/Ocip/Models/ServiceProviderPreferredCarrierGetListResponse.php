<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderPreferredCarrierGetListResponse
 *
 * Response to a ServiceProviderPreferredCarrierGetListRequest. Contains a table with one row per carrier.
 *         The table columns are: "Country Code", "Intra-Lata PIC", "Inter-Lata PIC", "International PIC".
 *
 * @see ServiceProviderPreferredCarrierGetListRequest
 * @Groups [{"id":"31dec625cdd18e8228eb61ffb34ddc0e:241","type":"sequence"}]
 */
class ServiceProviderPreferredCarrierGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName serviceProviderCarrierTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 31dec625cdd18e8228eb61ffb34ddc0e:241
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $serviceProviderCarrierTable = null;

    /**
     * Getter for serviceProviderCarrierTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getServiceProviderCarrierTable()
    {
        return $this->serviceProviderCarrierTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderCarrierTable;
    }

    /**
     * Setter for serviceProviderCarrierTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceProviderCarrierTable
     * @return $this
     */
    public function setServiceProviderCarrierTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceProviderCarrierTable)
    {
        $this->serviceProviderCarrierTable = $serviceProviderCarrierTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderCarrierTable()
    {
        $this->serviceProviderCarrierTable = null;
        return $this;
    }
}

