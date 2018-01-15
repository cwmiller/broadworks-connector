<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderPreferredCarrierGetListResponse
 *
 * Response to a ServiceProviderPreferredCarrierGetListRequest. Contains a table
 * with one row per carrier.
 *         The table columns are: "Country Code", "Intra-Lata PIC", "Inter-Lata
 * PIC", "International PIC".
 */
class ServiceProviderPreferredCarrierGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceProviderCarrierTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $serviceProviderCarrierTable = null;

    /**
     * Getter for serviceProviderCarrierTable
     *
     * @ElementName serviceProviderCarrierTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getServiceProviderCarrierTable()
    {
        return $this->serviceProviderCarrierTable;
    }

    /**
     * Setter for serviceProviderCarrierTable
     *
     * @ElementName serviceProviderCarrierTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $serviceProviderCarrierTable
     * @return $this
     */
    public function setServiceProviderCarrierTable($serviceProviderCarrierTable)
    {
        $this->serviceProviderCarrierTable = $serviceProviderCarrierTable;
        return $this;
    }


}

