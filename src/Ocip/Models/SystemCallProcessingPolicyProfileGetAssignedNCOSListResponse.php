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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:3960","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileGetAssignedNCOSListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName networkClassOfServiceTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:3960
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $networkClassOfServiceTable = null;

    /**
     * Getter for networkClassOfServiceTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getNetworkClassOfServiceTable()
    {
        return $this->networkClassOfServiceTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkClassOfServiceTable;
    }

    /**
     * Setter for networkClassOfServiceTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $networkClassOfServiceTable
     * @return $this
     */
    public function setNetworkClassOfServiceTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $networkClassOfServiceTable)
    {
        $this->networkClassOfServiceTable = $networkClassOfServiceTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkClassOfServiceTable()
    {
        $this->networkClassOfServiceTable = null;
        return $this;
    }


}

