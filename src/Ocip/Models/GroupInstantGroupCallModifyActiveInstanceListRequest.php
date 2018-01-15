<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupInstantGroupCallModifyActiveInstanceListRequest
 *
 * Request to set the active status of Instant Group Call service instances.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupInstantGroupCallModifyActiveInstanceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceActivation
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceActivation[]
     */
    private $serviceActivation = array(
        
    );

    /**
     * Getter for serviceActivation
     *
     * @ElementName serviceActivation
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceActivation[]
     */
    public function getServiceActivation()
    {
        return $this->serviceActivation;
    }

    /**
     * Setter for serviceActivation
     *
     * @ElementName serviceActivation
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceActivation[] $serviceActivation
     * @return $this
     */
    public function setServiceActivation($serviceActivation)
    {
        $this->serviceActivation = $serviceActivation;
        return $this;
    }

    /**
     * Adder for serviceActivation
     *
     * @ElementName serviceActivation
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceActivation $serviceActivation
     * @return $this
     */
    public function addServiceActivation($serviceActivation)
    {
        $this->serviceActivation []= $serviceActivation;
        return $this;
    }


}

