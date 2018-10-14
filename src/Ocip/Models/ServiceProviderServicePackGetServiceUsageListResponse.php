<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackGetServiceUsageListResponse
 *
 * Response to ServiceProviderServicePackGetServiceUsageListRequest.
 *         The column headings are "Service Pack Name", "Total Packs" and
 * "Allocated to Groups"
 *
 * @see ServiceProviderServicePackGetServiceUsageListRequest
 */
class ServiceProviderServicePackGetServiceUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceUsageTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $serviceUsageTable = null;

    /**
     * Getter for serviceUsageTable
     *
     * @ElementName serviceUsageTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getServiceUsageTable()
    {
        return $this->serviceUsageTable;
    }

    /**
     * Setter for serviceUsageTable
     *
     * @ElementName serviceUsageTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $serviceUsageTable
     * @return $this
     */
    public function setServiceUsageTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceUsageTable)
    {
        $this->serviceUsageTable = $serviceUsageTable;
        return $this;
    }


}

