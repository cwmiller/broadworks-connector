<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksAnywhereModifyActiveInstanceListRequest
 *
 * Request to set the active status of BroadWorks Anywhere instances.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f39163d0e42e05c4a1692a62f625df9f:178","type":"sequence"}]
 */
class GroupBroadWorksAnywhereModifyActiveInstanceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceActivation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceActivation
     * @Array
     * @Optional
     * @Group f39163d0e42e05c4a1692a62f625df9f:178
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

