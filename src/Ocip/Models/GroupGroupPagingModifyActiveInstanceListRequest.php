<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupPagingModifyActiveInstanceListRequest
 *
 * Request to set the active status of Group Paging instances.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"8ede928f2a9c1318573ba9c7a105655c:403","type":"sequence"}]
 */
class GroupGroupPagingModifyActiveInstanceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceActivation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceActivation
     * @Array
     * @Optional
     * @Group 8ede928f2a9c1318573ba9c7a105655c:403
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceActivation[]
     */
    protected $serviceActivation = [
        
    ];

    /**
     * Getter for serviceActivation
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceActivation[]
     */
    public function getServiceActivation()
    {
        return $this->serviceActivation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceActivation;
    }

    /**
     * Setter for serviceActivation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceActivation[] $serviceActivation
     * @return $this
     */
    public function setServiceActivation(array $serviceActivation)
    {
        $this->serviceActivation = $serviceActivation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceActivation()
    {
        $this->serviceActivation = null;
        return $this;
    }

    /**
     * Adder for serviceActivation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceActivation $serviceActivation
     * @return $this
     */
    public function addServiceActivation($serviceActivation)
    {
        $this->serviceActivation[] = $serviceActivation;
        return $this;
    }
}

