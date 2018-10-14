<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileGetAssignedNCOSListResponse
 *
 * Response to the
 *         SystemCallProcessingPolicyProfileGetAssignedNCOSListRequest.
 *         The response contains a table of all Network Classes of Service that
 *         contain the specific CAllP Policy Profile. The column headings
 *         are "Name" and "Description".
 *
 * @see SystemCallProcessingPolicyProfileGetAssignedNCOSListRequest
 */
class SystemCallProcessingPolicyProfileGetAssignedNCOSListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName networkClassOfServiceTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $networkClassOfServiceTable = null;

    /**
     * Getter for networkClassOfServiceTable
     *
     * @ElementName networkClassOfServiceTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getNetworkClassOfServiceTable()
    {
        return $this->networkClassOfServiceTable;
    }

    /**
     * Setter for networkClassOfServiceTable
     *
     * @ElementName networkClassOfServiceTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $networkClassOfServiceTable
     * @return $this
     */
    public function setNetworkClassOfServiceTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $networkClassOfServiceTable)
    {
        $this->networkClassOfServiceTable = $networkClassOfServiceTable;
        return $this;
    }


}

