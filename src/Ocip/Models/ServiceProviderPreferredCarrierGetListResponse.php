<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderPreferredCarrierGetListResponse
 *
 * Response to a ServiceProviderPreferredCarrierGetListRequest. Contains a table with one row per carrier.
 *         The table columns are: "Country Code", "Intra-Lata PIC", "Inter-Lata PIC", "International PIC".
 *
 * @see ServiceProviderPreferredCarrierGetListRequest
 * @Groups [{"id":"1384777ce7bd407156102bad44751987:242","type":"sequence"}]
 */
class ServiceProviderPreferredCarrierGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceProviderCarrierTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 1384777ce7bd407156102bad44751987:242
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $serviceProviderCarrierTable = null;

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

