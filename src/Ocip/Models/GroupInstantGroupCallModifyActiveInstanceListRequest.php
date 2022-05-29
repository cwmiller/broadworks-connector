<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupInstantGroupCallModifyActiveInstanceListRequest
 *
 * Request to set the active status of Instant Group Call service instances.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f41dea4708922d4a3f0e26f198cc953f:158","type":"sequence"}]
 */
class GroupInstantGroupCallModifyActiveInstanceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceActivation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceActivation
     * @Array
     * @Optional
     * @Group f41dea4708922d4a3f0e26f198cc953f:158
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceActivation[]
     */
    protected $serviceActivation = array(
        
    );

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

