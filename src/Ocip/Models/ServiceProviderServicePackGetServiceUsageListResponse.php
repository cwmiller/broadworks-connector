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
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $serviceUsageTable = null;

    /**
     * Getter for serviceUsageTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getServiceUsageTable()
    {
        return $this->serviceUsageTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUsageTable;
    }

    /**
     * Setter for serviceUsageTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceUsageTable
     * @return $this
     */
    public function setServiceUsageTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceUsageTable)
    {
        $this->serviceUsageTable = $serviceUsageTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUsageTable()
    {
        $this->serviceUsageTable = null;
        return $this;
    }


}

