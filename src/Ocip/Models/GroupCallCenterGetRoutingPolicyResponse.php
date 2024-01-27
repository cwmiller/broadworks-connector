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
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:4817","type":"sequence"}]
 */
class GroupCallCenterGetRoutingPolicyResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName routingPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPolicy
     * @Group 4d65d3449061c568639c8cc1e2492285:4817
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPolicy|null
     */
    protected $routingPolicy = null;

    /**
     * @ElementName callCenterTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4d65d3449061c568639c8cc1e2492285:4817
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $callCenterTable = null;

    /**
     * Getter for routingPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPolicy
     */
    public function getRoutingPolicy()
    {
        return $this->routingPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routingPolicy;
    }

    /**
     * Setter for routingPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPolicy $routingPolicy
     * @return $this
     */
    public function setRoutingPolicy(\CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPolicy $routingPolicy)
    {
        $this->routingPolicy = $routingPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRoutingPolicy()
    {
        $this->routingPolicy = null;
        return $this;
    }

    /**
     * Getter for callCenterTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getCallCenterTable()
    {
        return $this->callCenterTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callCenterTable;
    }

    /**
     * Setter for callCenterTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $callCenterTable
     * @return $this
     */
    public function setCallCenterTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $callCenterTable)
    {
        $this->callCenterTable = $callCenterTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallCenterTable()
    {
        $this->callCenterTable = null;
        return $this;
    }
}

