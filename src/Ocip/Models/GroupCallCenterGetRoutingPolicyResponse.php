<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetRoutingPolicyResponse
 *
 * Response to GroupCallCenterGetRoutingPolicyRequest.
 *         Contains a table with column headings: "Service User Id", "Name" and
 *         "Priority".
 *
 * @see GroupCallCenterGetRoutingPolicyRequest
 */
class GroupCallCenterGetRoutingPolicyResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName routingPolicy
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPolicy|null
     */
    private $routingPolicy = null;

    /**
     * @ElementName callCenterTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $callCenterTable = null;

    /**
     * Getter for routingPolicy
     *
     * @ElementName routingPolicy
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPolicy|null
     */
    public function getRoutingPolicy()
    {
        return $this->routingPolicy;
    }

    /**
     * Setter for routingPolicy
     *
     * @ElementName routingPolicy
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPolicy|null $routingPolicy
     * @return $this
     */
    public function setRoutingPolicy(\CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPolicy $routingPolicy)
    {
        $this->routingPolicy = $routingPolicy;
        return $this;
    }

    /**
     * Getter for callCenterTable
     *
     * @ElementName callCenterTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getCallCenterTable()
    {
        return $this->callCenterTable;
    }

    /**
     * Setter for callCenterTable
     *
     * @ElementName callCenterTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $callCenterTable
     * @return $this
     */
    public function setCallCenterTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $callCenterTable)
    {
        $this->callCenterTable = $callCenterTable;
        return $this;
    }


}

