<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGetListResponse
 *
 * Response to ServiceProviderGetListRequest.
 *         Contains a 3 column table with column headings "Service Provider Id",
 * "Service Provider Name",
 *         "Is Enterprise" and "Reseller Id" and a row for each service provider or
 * enterprise.
 *
 *         The following columns are only returned in AS data mode:       
 *           "Reseller Id"
 *
 * @see ServiceProviderGetListRequest
 */
class ServiceProviderGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

