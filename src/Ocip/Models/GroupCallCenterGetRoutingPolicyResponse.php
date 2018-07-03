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
     * @var string|null
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
     * @return string|null
     */
    public function getRoutingPolicy()
    {
        return $this->routingPolicy;
    }

    /**
     * Setter for routingPolicy
     *
     * @ElementName routingPolicy
     * @param string|null $routingPolicy
     * @return $this
     */
    public function setRoutingPolicy($routingPolicy)
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
    public function setCallCenterTable($callCenterTable)
    {
        $this->callCenterTable = $callCenterTable;
        return $this;
    }


}

