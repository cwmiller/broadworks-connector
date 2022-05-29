<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerXsiPolicyProfileGetAssignedServiceProviderListResponse
 *
 * Response to ResellerXsiPolicyProfileGetAssignedServiceProviderListRequest.
 *         Contains a table of Service Providers that have the Xsi Policy Profile 
 *         assigned. The column headings are: "Organization ID", "Organization Name", "Organization Type".
 *
 * @see ResellerXsiPolicyProfileGetAssignedServiceProviderListRequest
 * @Groups [{"id":"b009175f2a2a9d38115e319a6ad64d7f:1025","type":"sequence"}]
 */
class ResellerXsiPolicyProfileGetAssignedServiceProviderListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName svcProviderTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b009175f2a2a9d38115e319a6ad64d7f:1025
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $svcProviderTable = null;

    /**
     * Getter for svcProviderTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getSvcProviderTable()
    {
        return $this->svcProviderTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->svcProviderTable;
    }

    /**
     * Setter for svcProviderTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $svcProviderTable
     * @return $this
     */
    public function setSvcProviderTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $svcProviderTable)
    {
        $this->svcProviderTable = $svcProviderTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSvcProviderTable()
    {
        $this->svcProviderTable = null;
        return $this;
    }


}

